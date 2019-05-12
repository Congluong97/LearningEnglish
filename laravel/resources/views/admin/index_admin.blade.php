@extends('admin.layouts.admin_master')
@section('content-header')
<ol class="breadcrumb">
	<li><a href=""><i class="fa fa-dashboard"></i> Home</a></li>
	<li class="active">Admin</li>
</ol>
@endsection

@section('content')
<section class="content">
	<div class="row">
		<div class="col-xs-12">
			<div class="box">
				<div class="box-header">
					<h3 class="box-title">Table of Admin</h3>
					<a class="btn btn-primary " data-toggle="modal" id='btnAdd' style="float: right">&nbsp;
						<i class="fa fa-plus-square" aria-hidden="true"></i>
						<i class="fa fa-list" aria-hidden="true"></i>
					</a>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<table class="table table-hover table-bordered" id="tblAdmin">
						<thead>
							<tr>
								<th width="5%" class="text-center">ID</th>
								<th class="text-center" width="20%">Name</th>
								<th class="text-center" width="20%">Thumbnail</th>
								<th class="text-center" width="20%">Email</th>
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
					<h4 class="modal-title">ADD NEW Admin</h4>
				</div>
				<div class="modal-body">

					<form action="{{ route('admin_list.store') }}" method="POST" role="form" enctype="multipart/form-data" id="formAdd" name="formAdd">
						@csrf
						<div>
							<table class="table table-hover">
								<tbody>
									<tr>
										
										<div class="form-group">
											<label for="name" ">Name</label>

											<input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

											@if ($errors->has('name'))
											<span class="invalid-feedback" role="alert">
												<strong>{{ $errors->first('name') }}</strong>
											</span>
											@endif
										</div>
										
										<div class="form-group">
											<label for="email" >{{ __('E-Mail Address') }}</label>
											<input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

											@if ($errors->has('email'))
											<span class="invalid-feedback" role="alert">
												<strong>{{ $errors->first('email') }}</strong>
											</span>
											@endif

										</div>
										
										<div class="form-group">
											<label for="">Password</label>
											<input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

											@if ($errors->has('password'))
											<span class="invalid-feedback" role="alert">
												<strong>{{ $errors->first('password') }}</strong>
											</span>
											@endif
										</div>
										<div class="form-group">
											<label for="">Confirm Password</label>
											<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
										</div>
										<div class="form-group">
											<label for="">Thumbnail</label>
											<div class="input-group">
												<input id="thumbnail" class="form-control" type="file" name="thumbnail[]" multiple>
											</div>

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
								<audio src="" id="show-audio"  width="100%" height="90%" controls style="width: 480px;height: 75px;"></audio>	
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
				<h4 class="modal-title">Edit Admin</h4>
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
						<label for="">Thumbnail</label>
						<div class="input-group">
							<input id="edit-thumbnail" class="form-control" type="file" name="edit-thumbnail[]" multiple>
						</div>

					</div>

					<div class="form-group">
						<label for="">Email</label>
						<input type="text" class="form-control" id="edit-email" placeholder="Text" name="edit-email">
					</div>
					<div class="form-group">
						<label for="">Password</label>
						<input type="password" class="form-control" id="edit-password" placeholder="Text" name="edit-password">
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
@endsection


@section('script')
<script type="text/javascript">

	$.ajaxSetup({
		headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		}
	});

	$(function() {
		$('#tblAdmin').DataTable({
			processing: true,
			serverSide: true,
			ajax: '{{route('admin_list.dataTable')}}',
			columns: [
			{ data: 'id', name: 'id'},
			{ data: 'name', name: 'name'},
			{ data: 'thumbnail', name: 'thumbnail'},
			{ data: 'email', name: 'email'},
			{ data: 'created_at', name: 'created_at'},
			{ data: 'action', name: 'action'},

			]
		})
	});

	$('#btnAdd').on('click',function(event) {
		event.preventDefault();
		$('#modalAdd').modal('show');
	})
	$('#formAdd').on('submit',function(event) {
		event.preventDefault();
		var thumbnail=$('#thumbnail').get(0).files[0];
		var fd= new FormData();

		fd.append('name',$('#name').val());
		fd.append('email',$('#email').val());
		fd.append('password',$('#password').val());
		fd.append('thumbnail',thumbnail);
		
		$.ajax({
			type:'POST',
			url: '{{route('admin_list.store')}}',
			cache: false,
			processData: false,
			contentType: false,
			dataType: 'JSON',
			data: fd,
			success: function(res){
				event.preventDefault();
				$('#modalAdd').modal('hide');
				toastr['success']('Add new Admin successfully!');
				$('#tblAdmin').DataTable().ajax.reload(null,false);
			},

			error: function(xhr, ajaxOptions, thrownError){
				event.preventDefault();
				toastr['error']('Add failed');
			}
		})
	});
	

	$('#tblAdmin').on('click','.btnDelete',function(event) {
		event.preventDefault();
		var id =$(this).data('id');
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
				url: '{{asset('')}}admin/listadmin/' +id,
				success: function (response) {
					swal({
						title: "The Admin has been deleted!",
						icon: "success",
					});
					$('#tblAdmin').DataTable().ajax.reload(null,false);
				},
				error: function (xhr, ajaxOptions, thrownError) {
					toastr.error(thrownError);
				}
			})
			} else {
				swal({
					title: "The Admin is safety!",
					icon: "success",
					button: "OK!",
				});
			}
		})
	})
	$('#tblAdmin').on('click','.btnEdit',function(event) {
		var id=$(this).data('id');
		event.preventDefault();
		$.ajax({
			type:'get',
			url:'{{asset('')}}admin/listadmin/' +id,
			success: function(res){
				$('#modalEdit').modal('show');
				$('#edit-id').attr('value',res.id);
				$('#edit-name').attr('value',res.name);
				$('#edit-email').attr('value',res.email);
				$('#edit-password').attr('value',res.password);

				$('#edit-thumbnail').attr('input',res.thumbnail);


			}
		})
	})
	$('#formEdit').on('submit',function(res) {
		event.preventDefault();
		var id=$('#edit-id').val();
		$.ajax({
			url: '{!! asset('') !!}/admin/listadmin/' +id,
			type: 'PUT',
			data: {
				name: $('#edit-name').val(),
				link: $('#edit-link').val(),
				link: $('#edit-text').val(),

			},
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