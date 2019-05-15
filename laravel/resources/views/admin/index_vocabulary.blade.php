@extends('admin.layouts.admin_master')

@section('content-header')
<ol class="breadcrumb">
	<li><a href=""><i class="fa fa-dashboard"></i> Home</a></li>
	<li class="active">Vocabulary</li>
</ol>
@endsection

@section('content')
<section class="content">
	<div class="row">
		<div class="col-xs-12">
			<div class="box">
				<div class="box-header">
					<h2 class="box-title"><b>TABLE OF VOCABULARY</b></h2>
					<a class="btn btn-primary " data-toggle="modal" id='btnAdd' style="float: right">&nbsp;
						<i class="fa fa-plus-square" aria-hidden="true"></i>
						<i class="fa fa-list" aria-hidden="true"></i>
					</a>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<table class="table table-hover table-bordered" id="tblVocabulary">
						<thead>
							<tr>
								<th width="5%" class="text-center">ID</th>
								<th class="text-center" width="20%">Name</th>

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

	<div class="modal fade" id="modalAdd">
		<div class="container">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title">ADD NEW VOCABULARY</h4>
				</div>
				<div class="modal-body">
					<form action="{{ route('admin_vocabulary.store') }}" method="POST" role="form" enctype="multipart/form-data" id="formAdd" name="formAdd">
						@csrf
						<div>
							<table class="table table-hover">
								<tbody>
									<tr>

										<div class="form-group">
											<label for="">Name</label>
											<input type="text" class="form-control" id="name" placeholder="Name ..." name="name">
										</div>

										<div class="form-group">
											<label for="">Mean</label>
											<input type="text" class="form-control" id="mean" placeholder="mean ..." name="mean">
										</div>
										<div class="form-group">
											<label for="">pronunciation</label>
											<input type="file"  id="pronunciation" class="form-control" name="pronunciation" >
										</div>
										<div class="form-group">
											<label for="">Lecture</label>
											<select name="lecture" id="inputlecture" class="form-control">
												@foreach ($lectures as $lecture)
												<option id="lecture" value="{!!$lecture['id']!!}">{!!$lecture['name']!!}</option>
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
					<h4 class="modal-title">VOCABULARY INFORMATION </h4>
				</div>
				<br>
				<div class="col-lg-11"><table class="table table-bordered" >
					<tbody>

						<tr>
							<td width="30%">Name : </td>
							<td id="show-name" width="50%"></td>
						</tr>
						<tr>
							<td width="30%">Mean : </td>
							<td id="show-mean" width="50%"></td>
						</tr>
						
						<tr>
							<td>lecture : </td>
							<td id="show-id_lecture"></td>
						</tr>
						<tr>
							<td>Create At : </td>
							<td id="show-create_at"></td>
						</tr>
						<tr>
							<td>Pronunciation : </td>
							<td ><audio src="" id="show-pronunciation" id="show-audio"  width="100%" height="90%" controls "></audio></td>
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
				<h4 class="modal-title">Edit Vocabulary</h4>
			</div>
			<div class="modal-body">
				<form action="" role="form" id="formEdit" method="" enctype="multipart/form-data">
					
					<input type="hidden" name="_method" value="PUT">
					@csrf
					<input type="hidden" name="edit-id" id="edit-id">
					<div class="form-group">
						<div class="form-group">
							<label for="">Name</label>
							<input type="text" class="form-control" id="edit-name" placeholder="Name ..." name="edit-name">
						</div>

						<div class="form-group">
							<label for="">Mean</label>
							<input type="text" class="form-control" id="edit-mean" placeholder="mean ..." name="edit-mean">
						</div>
						<div class="form-group">
							<label for="">pronunciation</label>
							<input type="file"  id="edit-pronunciation" class="form-control"  name="edit-pronunciation" >
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

	$(function(){
		$('#tblVocabulary').DataTable({
			processing: true,
			serverSide: true,
			ajax: '{{ route('admin_vocabulary.dataTable')}}'	,
			columns: [
			{data: 'id', name: 'id'},
			{data: 'name', name: 'name'},

			{data: 'id_lecture', name: 'id_lecture'},
			{data: 'action', name: 'action',orderable:false,searchable:false},
			]
		})
	});

	$('#btnAdd').on('click', function(event){
		event.preventDefault();
		$('#modalAdd').modal('show');
	})
	$('#formAdd').on('submit',function(event) {
		event.preventDefault();
		var pronunciation=$('#pronunciation').get(0).files[0];
		var fd = new FormData();

		fd.append('name',$('#name').val());
		fd.append('mean',$('#mean').val());
		fd.append('pronunciation',pronunciation);
		fd.append('lecture',$('#inputlecture').val());
		$.ajax({
			type: 'POST',
			url: '{{route('admin_vocabulary.store')}}',
			cache: false,
			processData: false,
			contentType: false,
			dataType: 'JSON',
			data: fd,
			success: function(res){
				$('#modalAdd').modal('hide');
				toastr['success']('Add new Vocabulary successfully!');
				$('#tblVocabulary').DataTable().ajax.reload(null,false);

			},
			error: function(xhr, ajaxOptions, thrownError){
				toastr['error']('Add failed');
			}
		})
	})

	$('#tblVocabulary').on('click','.btnShow',function(event) {
		var id=$(this).data('id');
		event.preventDefault();
		$('#modalShow').modal('show');
		$.ajax({
			type: 'GET',
			url: '{{asset('')}}admin/vocabulary/' +id,
			success: function(res) {
				$('#show-name').text(res.name);
				$('#show-mean').text(res.mean);
				var link = '{{asset('')}}'+res.pronunciation;
				$('#show-pronunciation').attr('src',''+link);
				
				$('#show-id_lecture').text(res.lecture);
				$('#show-create_at').text(res.created_at);

			},
			error: function(xhr, ajaxOptions, thrownError) {
				toastr['error']('Load this Vocabulary failed!');
			}
		})
	})

	$('#tblVocabulary').on('click','.btnEdit',function(event) {
		var id=$(this).data('id');
		event.preventDefault();
		$.ajax({
			url: '{{ asset('') }}admin/vocabulary/'+id,
			type: 'GET',
			success: function(res){
				$('#modalEdit').modal('show');
				$('#edit-name').attr('value',res.name);
				$('#edit-mean').attr('value',res.mean);
			
				$('#edit-lecture').attr('value',res.id_lecture);
				$('#edit-id').attr('value',res.id);
			},
			error: function(xhr, ajaxOptions, thrownError){
				toastr['error']('Can\'t display Vocabulary to edit');
			}
		})
	})
	$('#formEdit').on('submit',function(event) {
		event.preventDefault();
		var id=$('#edit-id').val();
		var pronunciation=$('#edit-pronunciation').get(0).files[0];
		var fd = new FormData();

		fd.append('name',$('#edit-name').val());
		fd.append('mean',$('#edit-mean').val());
		fd.append('pronunciation',pronunciation);
		fd.append('lecture',$('#edit-lecture').val());

		$.ajax({
			url: '{!! asset('') !!}/admin/vocabulary/' +id,
			type: 'POST',
			cache: false,
			processData: false,
			contentType: false,
			dataType: 'JSON',
			data: fd,
			success: function(res){
				$('#modalEdit').modal('hide');
				toastr['success']('Update Vocabulary successfully!');
				$('#tblVocabulary').DataTable().ajax.reload(null,false);

			},
			error: function(xhr, ajaxOptions, thrownError){
				toastr['error']('Update failed');
			}
		})
	})

	$('#tblVocabulary').on('click','.btnDelete',function(){
		var id=$(this).data('id');
		swal({
			title: 'Are you sure?',
			text: 'Once deleted, you will not be able to recover this imaginary file!',
			icon: 'warning',
			buttons: true,
			dangermode: true, 
		})
		.then((willDelete) =>{
			if(willDelete) {
				$.ajax({
					type: 'delete',
					url: '{{asset('')}}admin/vocabulary/delete/' +id,
					success: function(response) {
						swal({
							title: 'The Vocabulary has been delete!',
							icon: 'success'
						});
						$('#tblVocabulary').DataTable().ajax.reload(null,false);
					},
					error: function(xhr, ajaxOptions, thrownError) {
						toastr.error(thrownError);
					}
				})
			}
			else{
				swal({
					title: 'The Vocabulary is safety!',
					icon: 'success',
					button: 'OK!',
				});
			}
		})
	})
</script>
@endsection