@extends('admin.layouts.admin_master');

@section('content')
<section class="content">
	<div class="row">
		<div class="col-xs-12">
			<div class="box">
				<div class="box-header">
					<h3 class="box-title">Table of Lecture</h3>
					<a class="btn btn-primary " data-toggle="modal" id='btnAdd' style="float: right">&nbsp;
						<i class="fa fa-plus-square" aria-hidden="true"></i>
						<i class="fa fa-list" aria-hidden="true"></i>
					</a>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<table class="table table-hover table-bordered" id="tblLecture">
						<thead>
							<tr>
								<th width="5%" class="text-center">ID</th>
								<th class="text-center" width="20%">Name</th>
								<th class="text-center" width="20%">Image</th>
								<th class="text-center" width="20%">Time</th>
								<th class="text-center" width="20%">status</th>
								<th class="text-center" width="15%">Action</th>
							</tr>
						</thead>
						<tbody></tbody>
					</table>
				</div>
				<!-- /.box-body -->
			</div>
			<!-- /.box -->
		</div>
		<!-- /.col -->
	</div>
	<!-- /.row -->	
	
	<!-- /.content -->

	<div class="modal fade" id="modalAdd">
		<div class="container">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title">ADD NEW LECTURE</h4>
				</div>
				<div class="modal-body">
					<form action="{{route('admin_lecture.store')}}" method="POST" role="form" enctype="multipart/form-data" id="formAdd" name="formAdd">
						@csrf
						<div>
							<table class="table table-hover">
								<tbody>
									<tr>
										
										<div class="form-group">
											<label for="">Name</label>
											<input type="text" class="form-control" id="name" placeholder="Name Audio..." name="name">
										</div>
										
										<div class="form-group">
											<label for="">Image</label>
											<div class="input-group">
												<input id="image" class="form-control" type="file" name="image[]" multiple>
											</div>

										</div>
										<div class="form-group">
											<label for="">Status</label>
											<input id="status" class="form-control" type="text" name="status" >
										</div>
									</tr>
								</tbody>

							</table>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							<button type="submit" id="add" class="btn btn-primary">Create</button>
						</div>

					</form>

				</div>

			</div>
		</div>
	</div>

	<div class="modal fade" id="modalShow">
		<div class="container">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title">Audio INFORMATION </h4>
				</div>
				<br>
				<div class="col-lg-11"><table class="table table-bordered" >
					<tbody>
						<tr>
							<td rowspan="6" >
								<img src=""   id="show-audio" width="100%" height="90%">
									
								</td>
							</tr>
							<tr>
								<td width="15%">Name : </td>
								<td id="show-name" width="35%"></td>
							</tr>
							<tr>
								<td>Text : </td>
								<td id="show-text"></td>
							</tr>
							<tr>
								<td>video : </td>
								<td id="show-video"></td>
							</tr>

						</tbody>
					</table>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>

	<div class="modal fade" id="modalEdit">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title">Edit Audio</h4>
				</div>
				<div class="modal-body">
					<form action="" role="form" id="formEdit" enctype="multipart/form-data">
						<input type="hidden" name="_method" value="PUT">
						@csrf
						<input type="hidden" name="edit-id" id="edit-id">
						<div class="form-group">
							<label for="">Name</label>
							<input type="text" class="form-control" id="edit-name" placeholder="Name Audio..." name="edit-name">
						</div>

						<div class="form-group">
							<label for="">Audio</label>
							<div class="input-group">
								<input id="edit-link" class="form-control" type="file" name="edit-link[]" multiple>
							</div>

						</div>

						<div class="form-group">
							<label for="">Text</label>
							<input type="text" class="form-control" id="edit-text" placeholder="Text" name="edit-text">
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							<button type="submit" class="btn btn-primary">Update</button>
						</div>
					</form>
				</div>

			</div>
		</div>
	</div>
</section>


@endsection

@section('script')
<script type="text/javascript">
	$.ajaxSetup({
		headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		}
	});
	$(function() {
		$('#tblLecture').DataTable({
			processing: true,
			severSide: true,
			ajax: '{{route('admin_lecture.dataTable')}}',
			columns: [
			{data: 'id', name: 'id'},
			{data: 'name', name: 'name'},
			{data: 'image', name: 'image'},
			
			{data: 'created_at', name: 'created_at'},
			{data: 'status', name: 'status'},
			{data: 'action', name: 'action'},
			] 
		})
	})
	$('#btnAdd').on('click',function(event) {
		event.preventDefault();
		$('#modalAdd').modal('show');
	})

	$('#tblLecture').on('submit',function(event) {
		event.preventDefault();
		$.ajax({
			type: 'POST',
			url: '{{route('admin_lecture.store')}}',
			data:{
				name: $('#name').val(),
				image: $('#image')[0].file[0],
				status: $('#status').val()
			},
			success: function(res){
				$('#modalAdd').modal('hide');
				toastr['success']('Add new Audio successfully!');
				$('#tblAudio').DataTable().ajax.reload(null,false);
			},

			error: function(xhr, ajaxOptions, thrownError){
				toastr['error']('Add failed');
			}	
		})
	})

	$('#tblLecture').on('click','.btnDelete',function() {
		var id = $(this).data('id');
		swal({
			title: "Are you sure?",
			text: "Once deleted, you will not be able to recover this imaginary file!",
			icon: "warning",
			buttons: true,
			dangerMode: true,
		})
		.then((willDelete) => {
			if (willDelete) {
				$.ajax({
				//phương thức delete
				type: 'delete',
				url: '{{asset('')}}admin/lecture/delete/' +id,
				success: function (response) {
					swal({
						title: "The Lecture has been deleted!",
						icon: "success",
					});
					$('#tblLecture').DataTable().ajax.reload(null,false);
				},
				error: function (xhr, ajaxOptions, thrownError) {
					toastr.error(thrownError);
				}
			})
			} else {
				swal({
					title: "The Lecture is safety!",
					icon: "success",
					button: "OK!",
				});
			}
		})
	})
</script>
@endsection