<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="description" content="">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- The above 4 meta tags *Must* come first in the head; any other head content must come *after* these tags -->

	<!-- Title -->
	<base href="{{asset('public/user')}}/">
	<title>Clever - Education &amp; Courses Template | Blog Details</title>

	<!-- Favicon -->
	<link rel="icon" href="img/core-img/favicon.ico">

	<!-- Stylesheet -->
	<link rel="stylesheet" href="style.css">

</head>

<body>
	<!-- Preloader -->
	<div id="preloader">
		<div class="spinner"></div>
	</div>

	<!-- ##### Header Area Start ##### -->
	<header class="header-area">

		<!-- Top Header Area -->
		<div class="top-header-area d-flex justify-content-between align-items-center">
			<!-- Contact Info -->
			<div class="contact-info">
				<a href="#"><span>Phone:</span> +44 300 303 0266</a>
				<a href="#"><span>Email:</span> info@clever.com</a>
			</div>
			<!-- Follow Us -->
			<div class="follow-us">
				<span>Follow us</span>
				<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
				<a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
				<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
			</div>
		</div>

		<!-- Navbar Area -->
		<div class="clever-main-menu">
			<div class="classy-nav-container breakpoint-off">
				<!-- Menu -->
				<nav class="classy-navbar justify-content-between" id="cleverNav">

					<!-- Logo -->
					<a class="nav-brand" href="index.html"><img src="img/core-img/logo.png" alt=""></a>

					<!-- Navbar Toggler -->
					<div class="classy-navbar-toggler">
						<span class="navbarToggler"><span></span><span></span><span></span></span>
					</div>

					<!-- Menu -->
					<div class="classy-menu">

						<!-- Close Button -->
						<div class="classycloseIcon">
							<div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
						</div>

						<!-- Nav Start -->
						<div class="classynav">
							<ul>
								<li><a href="index.html">Home</a></li>
								<li><a href="#">Level</a>
									<ul class="dropdown">
										<li><a href="index.html">Level 1</a></li>
										<li><a href="courses.html">Level 2</a></li>
										<li><a href="single-course.html">Level 3</a></li>
										<li><a href="instructors.html">Level 4</a></li>
										<li><a href="blog.html">Level 5</a></li>

									</ul>
								</li>
								<li><a href="courses.html">Lectures</a></li>
								<li><a href="instructors.html">Instructors</a></li>
								<li><a href="blog.html">Vocabulary</a></li>

							</ul>
							<!-- Search Button -->
							<div class="search-area">
								<form action="#" method="post">
									<input type="search" name="search" id="search" placeholder="Search">
									<button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
								</form>
							</div>

							<!-- Register / Login -->
							<div class="login-state d-flex align-items-center">
								<div class="user-name mr-30">
									<div class="dropdown">
										<a class="dropdown-toggle" href="#" role="button" id="userName" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Megan Fox</a>
										<div class="dropdown-menu dropdown-menu-right" aria-labelledby="userName">
											<a class="dropdown-item" href="#">Profile</a>
											<a class="dropdown-item" href="#">Account Info</a>
											<a class="dropdown-item" href="{{asset('logout')}}">Logout</a>
										</div>
									</div>
								</div>
								<div class="userthumb">
									<img src="img/bg-img/t1.png" alt="">
								</div>
							</div>

						</div>
						<!-- Nav End -->
					</div>
				</nav>
			</div>
		</div>
	</header>
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
	<!-- ##### Catagory Area End ##### -->

	<!-- ##### Footer Area Start ##### -->
	<footer class="footer-area">
		<!-- Top Footer Area -->
		<div class="top-footer-area">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<!-- Footer Logo -->
						<div class="footer-logo">
							<a href="index.html"><img src="img/core-img/logo2.png" alt=""></a>
						</div>
						<!-- Copywrite -->
						<p><a href="#"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
							Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
						</div>
					</div>
				</div>
			</div>

			<!-- Bottom Footer Area -->
			<div class="bottom-footer-area d-flex justify-content-between align-items-center">
				<!-- Contact Info -->
				<div class="contact-info">
					<a href="#"><span>Phone:</span> +44 300 303 0266</a>
					<a href="#"><span>Email:</span> info@clever.com</a>
				</div>
				<!-- Follow Us -->
				<div class="follow-us">
					<span>Follow us</span>
					<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
					<a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
					<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
				</div>
			</div>
		</footer>
		<!-- ##### Footer Area End ##### -->

		<!-- ##### All Javascript Script ##### -->
		<!-- jQuery-2.2.4 js -->
		<script src="js/jquery/jquery-2.2.4.min.js"></script>
		<!-- Popper js -->
		<script src="js/bootstrap/popper.min.js"></script>
		<!-- Bootstrap js -->
		<script src="js/bootstrap/bootstrap.min.js"></script>
		<!-- All Plugins js -->
		<script src="js/plugins/plugins.js"></script>
		<!-- Active js -->
		<script src="js/active.js"></script>
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
	</body>

	</html>