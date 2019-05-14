@extends('user.master')
@section('content')
<!-- ##### Header Area End ##### -->

<!-- ##### Breadcumb Area Start ##### -->
<div class="breadcumb-area">
	<!-- Breadcumb -->
	<nav aria-label="breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="{{asset('home')}}">Home</a></li>
			<li class="breadcrumb-item active" aria-current="page">Profile</li>
		</ol>
	</nav>
</div>
<!-- ##### Breadcumb Area End ##### -->

<!-- ##### Catagory Area Start ##### -->
<div class="clever-catagory blog-details bg-img d-flex align-items-center justify-content-center p-3 height-400 	" style="background-image: url(img/blog-img/7.jpg);">
	<div class="blog-details-headline">
		<h3>English Grammar</h3>
		<div class="meta d-flex align-items-center justify-content-center">
			<a href="#">{{Auth::user()->name}}</a>
			<span><i class="fa fa-circle" aria-hidden="true"></i></span>
			<a href="#">Profile</a>
		</div>
	</div>
	<div class="blog-details-content section-padding-100">

		<div class="container">
			<div class="row justify-content-center">
				<!-- Post A Comment -->
				<div class="col-12 col-lg-8">
					<div class="post-a-comments mb-70">

						<form action="{{asset($user->name.'/profile')}}" method="post">
							@include('errors.note')
							<div class="row">
								<div class="col-12 col-lg-6">
									<div class="form-group">
										<input type="text" class="form-control" id="text" name="name" placeholder="Name" value="{{$user->name}}" style="color: black; font-size: 14px">
									</div>
								</div>
								<div class="col-12 col-lg-6">
									<div class="form-group">
										<input type="email" class="form-control" name="email" id="email" placeholder="Email" value="{{$user->email}}" disabled="true" style="color: black; font-size: 14px">
									</div>
								</div>
								<div>
									<div class="col-12 ">
										<div class="checkbox">
											<label style="color: white">
												<input type="checkbox" id="changePassword" name="changePassword" > Change Password</input>
											</label>
										</div>
									</div>
								</div>
								<div class="col-12">
									<div class="form-group">
										<input type="password" class="form-control password" id="password" placeholder="Password" value="" style="color: black; font-size: 14px" disabled="false" name="password">
									</div>
								</div>
								<div class="col-12">
									<div class="form-group">
										<input type="password" class="form-control password" id="password" placeholder="Confirm Password" value="" style="color: black; font-size: 14px" disabled="false" name="confirmpassword">
									</div>
								</div>
								<div class="col-12">
									<button class="btn clever-btn w-100">Change Profile</button>
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

@endsection()
<!-- ##### Catagory Area End ##### -->

@section('script')

<script type="text/javascript">
	$(document).ready(function(){
		$("#changePassword").change(function(){
			if($(this).is(":checked")){
				$(".password").removeAttr('disabled');
			}else{
				$(".password").attr('disabled','');
			}
		});
	});
</script>
@endsection()