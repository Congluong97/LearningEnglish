@extends('user.master')
@section('content')
	<!-- ##### Header Area End ##### -->

	<!-- ##### Breadcumb Area Start ##### -->
	<div class="breadcumb-area">
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
	<div class="clever-catagory blog-details bg-img d-flex align-items-center justify-content-center p-3 height-400 	" style="background-image: url(img/blog-img/7.jpg);">
		<div class="blog-details-headline">
			<h3>English Grammar</h3>
			<div class="meta d-flex align-items-center justify-content-center">
				<a href="#">Sarah Parker</a>
				<span><i class="fa fa-circle" aria-hidden="true"></i></span>
				<a href="#">Art &amp; Design</a>
			</div>
		</div>
		<div class="blog-details-content section-padding-100">

			<div class="container">
				<div class="row justify-content-center">
					<!-- Post A Comment -->
					<div class="col-12 col-lg-8">
						<div class="post-a-comments mb-70">

							<form action="{{asset('register')}}" method="post">
								@include('errors.note')
								<div class="row">
									<div class="col-12 col-lg-6">
										<div class="form-group">
											<input type="text" class="form-control" id="text" name="name" placeholder="Name" value="" style="color: black; font-size: 14px">
										</div>
									</div>
									<div class="col-12 col-lg-6">
										<div class="form-group">
											<input type="email" class="form-control" name="email" id="email" placeholder="Email" value=""  style="color: black; font-size: 14px">
										</div>
									</div>
									<div class="col-12">
										<div class="form-group">
											<input type="password" class="form-control password" id="password" placeholder="Password" value="" style="color: black; font-size: 14px"  name="password">
										</div>
									</div>
									<div class="col-12">
										<div class="form-group">
											<input type="password" class="form-control password" id="password" placeholder="Confirm Password" value="" style="color: black; font-size: 14px"  name="confirmpassword">
										</div>
									</div>
									<div class="col-12">
										<button class="btn clever-btn w-100">Register</button>
									</div>
								</div>
								{{csrf_field()}}
							</form>
						</div>
					</div>
				</div>


			</div>
		</div>
	</div>
	<!-- ##### Catagory Area End ##### -->
@endsection()