@extends('user.master')
@section('content')
<!-- ##### Header Area End ##### -->

<!-- ##### Breadcumb Area Start ##### -->
<div class="breadcumb-area" >
	<!-- Breadcumb -->
	<nav aria-label="breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="#">Home</a></li>
			<li class="breadcrumb-item"><a href="#">Courses</a></li>
			<li class="breadcrumb-item active" aria-current="page">Art &amp; Design</li>
		</ol>
	</nav>
</div>
<!-- ##### Breadcumb Area End ##### -->

<!-- ##### Catagory Area Start ##### -->

<div style="text-align: center;border: 3px solid #eeddff; margin: 0 auto">
	<div class="post-a-comments">

		<form action="" method="post">
			<div class="row">
				<div class="">
					<div class="box-body center">
						<table id="example2" class="table table-bordered table-hover" style="width: 900px ;margin-left: 180px; margin-right: 180px">
							<thead>
								<tr>
									<th>Time</th>
									<th>Name</th>
									<th>Xóa</th>
									
								</tr>
							</thead>
							<tbody>
								@foreach($history as $hi)
								<tr>
									<td>{{date("m : H - d M", strtotime($hi->created_at))}}</td>
									<td><a href="{{asset('')}}" title="">{{$hi->name_lecture}}</a></td>
									<td><button type="" class="btn btn-danger">Xóa</button></td>
								</tr>
								@endforeach
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</form>
	</div>
</div>



<!-- ##### Catagory Area End ##### -->
@endsection()