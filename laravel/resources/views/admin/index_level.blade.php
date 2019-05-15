@extends('admin.layouts.admin_master')

@section('content-header')
<ol class="breadcrumb">
	<li><a href=""><i class="fa fa-dashboard"></i> Home</a></li>
	<li class="active">Level</li>
</ol>
@endsection

@section('content')
<section class="content">
	<div class="row">
		<div class="col-xs-12">
			<div class="box">
				<div class="box-header">
					<h2 class="box-title"><b>TABLE OF LEVEL</b></h2>
					<a class="btn btn-primary " data-toggle="modal" id='btnAdd' style="float: right">&nbsp;
						<i class="fa fa-plus-square" aria-hidden="true"></i>
						<i class="fa fa-list" aria-hidden="true"></i>
					</a>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<table class="table table-hover table-bordered" id="tblLevel">
						<thead>
							<tr>
								<th width="5%" class="text-center">ID</th>
								<th class="text-center" width="20%">Name</th>
								<th class="text-center" width="20%">Create At</th>
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
					<h4 class="modal-title">ADD NEW LEVEL</h4>
				</div>
				<div class="modal-body">
					<form action="{{ route('admin_level.store') }}" method="POST" role="form"  id="formAdd" name="formAdd">
						@csrf
						<div>
							<table class="table table-hover">
								<tbody>
									<tr>
										
										<div class="form-group">
											<label for="">Name</label>
											<input type="text" class="form-control" id="name" placeholder="Name Level..." name="name">
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
@endsection

@section('script')
<script type="text/javascript">

	
	$(function() {
		$('#tblLevel').DataTable({
			processing: true,
			serverSide: true,
			ajax: '{{route('admin_level.dataTable')}}',
			columns:[
			{data: 'id', name: 'id'},
			{data: 'name', name: 'name'},
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
		$.ajax({
			processing: true,
			serverSide: true,
			type: 'POST',
			url: '{{route('admin_level.store')}}',
			data: {
				name: $('#name').val(),
				
			},
			success: function(res){
				event.preventDefault();
				$('#modalAdd').modal('hide');
				toastr['success']('Add new Audio successfully!');
				// $('#tblLevel').data.reload();
				$('#tblLevel').DataTable().ajax.reload(null,false);
			},

			error: function(xhr, ajaxOptions, thrownError){
				event.preventDefault();
				toastr['error']('Add failed');
			}
		})
	})

	$('#tblLevel').on('click','.btnDelete',function(event) {
		event.preventDefault();
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
				url: '{{asset('')}}admin/level/delete/' +id,
				success: function (response) {
					swal({
						title: "The Audio has been deleted!",
						icon: "success",
					});
					$('#tblLevel').DataTable().ajax.reload(null,false);
				},
				error: function (xhr, ajaxOptions, thrownError) {
					toastr.error(thrownError);
				}
			})
			} else {
				swal({
					title: "The Audio is safety!",
					icon: "success",
					button: "OK!",
				});
			}
		})
	})
</script>
@endsection