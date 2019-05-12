@extends('admin.layouts.admin_master')

@section('content-header')

@endsection

@section('content')
<section class="content">
	<div class="row">
		<div class="col-xs-12">
			<div class="box">
				<div class="box-header">
					<h3 class="box-title">Table of Event</h3>
					<a class="btn btn-primary " data-toggle="modal" id='btnAdd' style="float: right">&nbsp;
						<i class="fa fa-plus-square" aria-hidden="true"></i>
						<i class="fa fa-list" aria-hidden="true"></i>
					</a>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<table class="table table-hover table-bordered" id="tblEvent">
						<thead>
							<tr>
								<th width="5%" class="text-center">ID</th>
								<th class="text-center" width="20%">Name</th>
								
								<th class="text-center" width="20%">Image</th>
								<th class="text-center" width="20%">Detail</th>
								
								<th class="text-center" width="20%">Created at</th>
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
					<h4 class="modal-title">ADD NEW EVENT</h4>
				</div>
				<div class="modal-body">
					<form action="{{ route('admin_event.store') }}" method="POST" role="form" enctype="multipart/form-data" id="formAdd" name="formAdd">
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
											<label for="">detail</label>
											<input type="text" class="form-control" id="detail" placeholder="detail" name="text">
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

</section>
@endsection

@section('script')
<script type="text/javascript">
	$(function() {
		$('#tblEvent').DataTable({
			processing:true,
			serverSide:true,
			ajax:'{{route('admin_event.dataTable')}}',
			columns:[
			{data: 'id', name: 'id'},
			{data: 'name', name: 'name'},
			{data: 'image', name: 'image'},
			{data: 'detail', name: 'detail'},
			{data: 'created_at', name: 'created_at'},
			{data: 'action', name: 'action'},
			]
		})
	})
	$('#btnAdd').on('click',function(event) {
		event.preventDefault();
		$('#modalAdd').modal('show');
	})
	$('#formAdd').on('submit',function(event) {
		event.preventDefault();
		var image=$('#image').get(0).files[0];
		var fd = new FormData();

		fd.append('name',$('#name').val());
		fd.append('image',image);
		fd.append('detail',$('#detail').val());
		$.ajax({
			type: 'post',
			url: '{{route('admin_event.store')}}',
			cache: false,
			processData: false,
			contentType: false,
			dataType: 'JSON',
			data: fd,
			success: function(){
				$('#modalAdd').modal('hide');
				toastr['success']('Add new Event successfully');
				$('#tblEvent').DataTable().ajax.reload(null,false);
			},
			error: function() {
				event.preventDefault();
				toastr['error']('Add failed');
			}
		})
	})
	$('#tblEvent').on('click','.btnDelete',function(event) {
		var id =$(this).data('id');
		event.preventDefault();
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
				url: '{{asset('')}}admin/event/delete/' +id,
				success: function (response) {
					swal({
						title: "The Event has been deleted!",
						icon: "success",
					});
					$('#tblEvent').DataTable().ajax.reload(null,false);
				},
				error: function (xhr, ajaxOptions, thrownError) {
					toastr.error(thrownError);
				}
			})
			} else {
				swal({
					title: "The Event is safety!",
					icon: "success",
					button: "OK!",
				});
			}
		})
	})

</script>
@endsection