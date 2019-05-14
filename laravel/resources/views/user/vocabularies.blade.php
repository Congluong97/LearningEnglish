@extends('user.master')
@section('content')

<!-- ##### Breadcumb Area Start ##### -->
<div class="breadcumb-area">
	<!-- Breadcumb -->
	<nav aria-label="breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="#">Home</a></li>
			<li class="breadcrumb-item"><a href="#">Vocabulary</a></li>
		</ol>
	</nav>
</div>
<!-- ##### Breadcumb Area End ##### -->

<!-- ##### Catagory ##### -->
<div class="clever-catagory bg-img d-flex align-items-center justify-content-center p-3" style="background-image: url(img/bg-img/bg2.jpg);">
	<h3>Vocabularies</h3>
</div>



<div class="container" style="margin-top: 50px; margin-bottom: 50px">
	
		<div class="col-xs-12">
			<div class="box">
				<div class="box-header">
				
			</div>
			<!-- /.box-header -->
			<div class="box-body">
				<table class="table table-hover table-bordered" id="tblVocabulary" ">
					<thead>
						<tr>
							
							<th class="text-center" width="20%">Name</th>
							<th class="text-center" width="20%">Pronunciation</th>
							<th class="text-center" width="20%">Mean</th>

						</tr>
					</thead>
					<tbody></tbody>
				</table>
			</div>
			<!-- /.box-body -->
		</div>
		<!-- /.box -->
	
	<!-- /.col -->
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
		$('#tblVocabulary').DataTable({
			processing:true,
			serverSide:true,
			ajax:'{!! route('vocabulary.dataTable') !!}',
			columns: [
			
			{data: 'name', name: 'name'},
			{data: 'pronunciation', name: 'pronunciation'},
			{data: 'mean', name: 'mean'},

			]
		});
	})

</script>
@endsection

