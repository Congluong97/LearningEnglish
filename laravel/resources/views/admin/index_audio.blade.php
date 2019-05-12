@extends('admin.layouts.admin_master')

@section('content-header')
<ol class="breadcrumb">
	<li><a href=""><i class="fa fa-dashboard"></i> Home</a></li>
	<li class="active">Audio</li>
</ol>
@endsection

@section('content')
<section class="content">
	<div class="row">
		<div class="col-xs-12">
			<div class="box">
				<div class="box-header">
					<h3 class="box-title">Table of Audio</h3>
					<a class="btn btn-primary " data-toggle="modal" id='btnAdd' style="float: right">&nbsp;
						<i class="fa fa-plus-square" aria-hidden="true"></i>
						<i class="fa fa-list" aria-hidden="true"></i>
					</a>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<table class="table table-hover table-bordered" id="tblAudio">
						<thead>
							<tr>
								<th width="5%" class="text-center">ID</th>
								<th class="text-center" width="20%">Name</th>
								<th class="text-center" width="20%">Video</th>
								<th class="text-center" width="20%">Text</th>
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
					<h4 class="modal-title">ADD NEW AUDIO</h4>
				</div>
				<div class="modal-body">
					<form action="{{ route('admin_audio.store') }}" method="POST" role="form" enctype="multipart/form-data" id="formAdd" name="formAdd">
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
											<label for="">Audio</label>
											<div class="input-group">
												<input id="link" class="form-control" type="file" name="link[]" multiple>
											</div>

										</div>
										
										<div class="form-group">
											<label for="">Text</label>
											<input type="text" class="form-control" id="text" placeholder="Text" name="text">
										</div>
										<div class="form-group">
											<label for="">Video</label>
											<select name="video" id="inputvideo" class="form-control">
												@foreach ($videos as $video)
												<option id="video" value="{!!$video['id']!!}">{!!$video['name']!!}</option>
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
					<div class="form-group">
						<label for="">Video</label>
						<select name="video" id="inputvideo" class="form-control" id="edit-video">
							@foreach ($videos as $video)
							<option id="video" value="{!!$video['id']!!}">{!!$video['name']!!}</option>
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
		$('#tblAudio').DataTable({
			processing:true,
			serverSide:true,
			ajax:'{!! route('admin_audio.dataTable') !!}',
			columns: [
			{data: 'id', name: 'id'},
			{data: 'name', name: 'name'},
			{data: 'id_video', name: 'id_video'},
			{data: 'text', name: 'text'},
			{data: 'created_at', name: 'created_at'},
			{data: 'action', name:'action',orderable:false,searchable:false},
			]
		});
	});
	$('#btnAdd').on('click', function(event) {
		event.preventDefault();
		/* Act on the event */
		$('#modalAdd').modal('show');
	});
	$('#formAdd').on('submit',function(event) {
		event.preventDefault();
		var link = $('#link').get(0).files[0];
		var fd = new FormData();

		fd.append('name',$('#name').val());
		fd.append('link',link);
		fd.append('text',$('#text').val());
		fd.append('video',$('#inputvideo').val());
		
		$.ajax({
			type:'POST',
			url: '{!! route('admin_audio.store') !!}',
			cache: false,
			processData: false,
			contentType: false,
			dataType: 'JSON',
			data:fd,
			success: function(res){
				
				$('#modalAdd').modal('hide');
				toastr['success']('Add new Audio successfully!');
				$('#tblAudio').DataTable().ajax.reload(null,false);
			},

			error: function(xhr, ajaxOptions, thrownError){
				event.preventDefault();
				toastr['error']('Add failed');
			}
		})
	});
	$('#tblAudio').on('click','.btnShow',function(event) {
		var id=$(this).data('id');
		event.preventDefault();
		$('#modalShow').modal('show');
		$.ajax({
			url: '{{ asset('') }}admin/audio/'+ id,
			type: 'GET',
			success: function(res) {
				$('#show-name').text(res.name);
				$('#show-text').text(res.text);
				$('#show-video').text(res.video);
				6
				var link = '{{asset('')}}public/'+res.link;
				$('#show-audio').attr('src',''+link);
			},
			error: function(xhr, ajaxOptions, thrownError) {
				toastr['error']('Load this Audio failed!');
			}
		})
	})

	$('#tblAudio').on('click','.btnDelete',function(event) {
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
				url: '{{asset('')}}admin/audio/delete/' +id,
				success: function (response) {
					swal({
						title: "The Audio has been deleted!",
						icon: "success",
					});
					$('#tblAudio').DataTable().ajax.reload(null,false);
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

	$('#tblAudio').on('click','.btnEdit',function(event) {
		event.preventDefault();
		var id=$(this).data('id');
		
		$.ajax({
			url: '{{ asset('') }}admin/audio/'+id,
			type: 'GET',
			success: function(res){
				$('#modalEdit').modal('show');
				$('#edit-name').attr('value',res.name);
				$('#edit-text').attr('value',res.text);
				$('#edit-id').attr('value',res.id);
				$('#edit-video').attr('value',res.id_video);
			},
			error: function(xhr, ajaxOptions, thrownError){
				toastr['error']('Can\'t display category to edit');
			}
		})
	})

</script>
@endsection