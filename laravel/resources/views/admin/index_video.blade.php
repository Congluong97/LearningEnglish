@extends('admin.layouts.admin_master')

@section('content-header')

<ol class="breadcrumb">
	<li><a href=""><i class="fa fa-dashboard"></i> Home</a></li>
	<li class="active">Video</li>
</ol>
@endsection

@section('content')
<section class="content">
	<div class="row">
		<div class="col-xs-12">
			<div class="box">
				<div class="box-header">
					<h2 class="box-title"><b>TABLE OF VIDEO</b></h2>
					<a class="btn btn-primary " data-toggle="modal" id='btnAdd' style="float: right">&nbsp;
						<i class="fa fa-plus-square" aria-hidden="true"></i>
						<i class="fa fa-list" aria-hidden="true"></i>
					</a>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<table class="table table-hover table-bordered" id="tblVideo">
						<thead>
							<tr>
								<th width="5%" class="text-center">ID</th>
								<th class="text-center" width="20%">Name</th>
								
								<th class="text-center" width="20%">Lecture</th>
								
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
					<h4 class="modal-title">ADD NEW VIDEO</h4>
				</div>
				<div class="modal-body">
					<form action="{{ route('admin_video.store') }}" method="POST" role="form" enctype="multipart/form-data" id="formAdd" name="formAdd">
						@csrf
						<div>
							<table class="table table-hover">
								<tbody>
									<tr>
										
										<div class="form-group">
											<label for="">Name</label>
											<input type="text" class="form-control" id="name" placeholder="Name Video..." name="name">
										</div>
										
										<div class="form-group">
											<label for="">video</label>
											<input id="link" class="form-control" type="file" name="link[]" multiple>
										</div>
										
										<div class="form-group">
											<label for="">Description</label>
											<input type="text" class="form-control" id="description" placeholder="Description..." name="description">
										</div>
										<div class="form-group">
											<label for="">Time</label>
											<input type="time" class="form-control" id="time"  name="time">
										</div>
										<div class="form-group">
											<label for="">Lecture</label>
											<select name="lecture" id="inputlecture" class="form-control">
												@foreach ($lectures as $lecture)
												<option id="video" value="{!!$lecture['id']!!}">{!!$lecture['name']!!}</option>
												@endforeach

											</select>
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
					<h4 class="modal-title">VIDEO INFORMATION </h4>
				</div>
				<br>
				<div class="col-lg-11"><table class="table table-bordered" >
					<tbody>
						
						<tr>
							<td rowspan="8" >
								<video src="" id="show-video"  width="100%" height="90%" controls style="width: 480px;height: 200px;"></video>
							</td>
						</tr>
						<tr>
							<td width="15%">Name : </td>
							<td id="show-name" width="35%"></td>
						</tr>
						<tr>
							<td>Description : </td>
							<td id="show-description"></td>
						</tr>
						<tr>
							<td>Time : </td>
							<td id="show-time"></td>
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
				<h4 class="modal-title">Edit Video</h4>
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
						<label for="">Video</label>
						<input id="edit-link" class="form-control" type="file" name="link[]" >
		
						<video  src="" controls style="width: 100px; height: 50px"></video>
					</div>

					<div class="form-group">
						<label for="">Description</label>
						<input type="text" class="form-control" id="edit-description" placeholder="Description..." name="edit-text">
					</div>
					<div class="form-group">
						<label for="">Time</label>
						<input type="time" class="form-control" id="edit-time"  name="time">
					</div>
					<div class="form-group">
						<label for="">Lecture</label>
						<select name="lecture" id="edit-lecture" class="form-control">
							@foreach ($lectures as $lecture)
							<option id="lecture" value="{!!$lecture['id']!!}">{!!$lecture['name']!!}</option>
							@endforeach

						</select>
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
		$('#tblVideo').DataTable({
			processing:true,
			serverSide:true,
			ajax:'{!! route('admin_video.dataTable') !!}',
			columns: [
			{data: 'id', name: 'id'},
			{data: 'name', name: 'name'},


			{data: 'id_lecture', name: 'id_lecture'},
			
			{data: 'created_at', name: 'created_at'},
			{data: 'action', name:'action',orderable:false,searchable:false},
			]
		});
	});

	$('#btnAdd').on('click',function(event) {
		event.preventDefault();
		$('#modalAdd').modal('show');
	})
	$('#formAdd').on('submit',function(event) {
		event.preventDefault();
		var link=$('#link').get(0).files[0];
		var fd = new FormData();
		fd.append('name',$('#name').val());
		fd.append('link',link);
		fd.append('description',$('#description').val());
		fd.append('time',$('#time').val());
		fd.append('lecture',$('#inputlecture').val());
	
		$.ajax({
			type: 'POST',
			url: '{!! route('admin_video.store') !!}',
			ache: false,
			processData: false,
			contentType: false,
			dataType: 'JSON',
			data: fd,
			success: function(res){
				$('#modalAdd').modal('hide');
				toastr['success']('Add new Video successfully!');
				$('#tblVideo').DataTable().ajax.reload(null,false);
			},

			error: function(xhr, ajaxOptions, thrownError){
				toastr['error']('Add failed');
			}
		})
	})

	$('#tblVideo').on('click','.btnShow',function(event) {
		var id=$(this).data('id');
		event.preventDefault();
		$('#modalShow').modal('show');
		$.ajax({
			url: '{{ asset('') }}admin/video/' +id,
			type: 'GET',
			success: function(res) {
				$('#show-name').text(res.name);

				$('#show-description').text(res.description);
				$('#show-time').text(res.time);
				// $('#show_lecture').text(res.lecture);
				var link = '{{asset('')}}public/'+res.link;
				$('#show-video').attr('src',''+link);
			},
			error: function(xhr, ajaxOptions, thrownError) {
				toastr['error']('Load this Video failed!');
			}
		})
	})

	$('#tblVideo').on('click','.btnDelete',function() {
		var id=$(this).data('id');
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
				url: '{{asset('')}}admin/video/delete/' +id,
				success: function (response) {
					swal({
						title: "The Video has been deleted!",
						icon: "success",
					});
					$('#tblVideo').DataTable().ajax.reload(null,false);
				},
				error: function (xhr, ajaxOptions, thrownError) {
					toastr.error(thrownError);
				}
			})
			} else {
				swal({
					title: "The Video is safety!",
					icon: "success",
					button: "OK!",
				});
			}
		})
	})

	$('#tblVideo').on('click','.btnEdit',function(event) {
		var id=$(this).data('id');
		
		event.preventDefault();
		$.ajax({
			type:'get',
			url:'{{asset('')}}admin/video/' +id,
			success: function(res){
				$('#modalEdit').modal('show');
				$('#edit-id').attr('value',res.id);
				$('#edit-name').attr('value',res.name);
				$('#edit-description').attr('value',res.description);
				$('#edit-time').attr('value',res.time);
				$('#edit-lecture').attr('value',res.id_lecture);
				
				// $('#edit_link').attr('src',""+ link);


			}
		})
	})
	$('#formEdit').on('submit',function(res) {
		event.preventDefault();
		var id=$('#edit-id').val();
		var link=$('#edit-link')[0].files[0];
		var fd = new FormData();

		fd.append('name',$('#edit-name').val());
		fd.append('link',link);
		fd.append('description',$('#edit-description').val());
		fd.append('time',$('#edit-time').val());
		fd.append('lecture',$('#edit-lecture').val());

		$.ajax({
			url: '{!! asset('') !!}/admin/video/' +id,
			type: 'POST',
			ache: false,
			processData: false,
			contentType: false,
			dataType: 'JSON',
			data: fd ,
			success: function(){
				$('#modalEdit').modal('hide');
				toastr['success']('Update Vocabulary successfully!');
				$('#tblVideo').DataTable().ajax.reload(null,false);

			},
			error: function(xhr, ajaxOptions, thrownError){
				toastr['error']('Update failed');
			}
		})
	})
</script>
@endsection