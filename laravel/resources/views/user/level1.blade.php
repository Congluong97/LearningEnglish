@extends('user.master')
@section('content')

<!-- ##### Breadcumb Area Start ##### -->
<div class="breadcumb-area">
	<!-- Breadcumb -->
	<nav aria-label="breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="#">Home</a></li>
			<li class="breadcrumb-item"><a href="#">Level</a></li>
			<li class="breadcrumb-item"><a href="#">Level 1</a></li>
		</ol>
	</nav>
</div>
<!-- ##### Breadcumb Area End ##### -->

<!-- ##### Single Course Intro Start ##### -->
<div class="single-course-intro d-flex align-items-center justify-content-center" style="background-image: url(img/bg-img/bg3.jpg);">
	<!-- Content -->
	<div class="single-course-intro-content text-center">
		<!-- Ratings -->
		<div class="ratings">
			<i class="fa fa-star" aria-hidden="true"></i>
			
		</div>
		<h3>Beginer</h3>
		<div class="meta d-flex align-items-center justify-content-center">
			<a href="https://www.ucan.vn/">Ucan.vn</a>
			<span><i class="fa fa-circle" aria-hidden="true"></i></span>
		</div>
	</div>
</div>
<!-- ##### Single Course Intro End ##### -->

<!-- ##### Courses Content Start ##### -->
<div class="single-course-content section-padding-100">
	<div class="container">
		<div class="row">
			<div class="col-12 col-lg-8">
				<div class="course--content">

					<div class="clever-tabs-content">
						<ul class="nav nav-tabs" id="myTab" role="tablist">
							<li class="nav-item">
								<a class="nav-link active" id="tab--1" data-toggle="tab" href="#tab1" role="tab" aria-controls="tab1" aria-selected="false">Description</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="tab--2" data-toggle="tab" href="#tab2" role="tab" aria-controls="tab2" aria-selected="true">Curriculum</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="tab--3" data-toggle="tab" href="#tab3" role="tab" aria-controls="tab3" aria-selected="true">Reviews</a>
							</li>
							
							<li class="nav-item">
								<a class="nav-link" id="tab--4" data-toggle="tab" href="#tab5" role="tab" aria-controls="tab5" aria-selected="true">Forum</a>
							</li>
						</ul>

						<div class="tab-content" id="myTabContent">
							<!-- Tab Text -->
							<div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="tab--1">
								<div class="clever-description">

									<!-- About Course -->
									<div class="about-course mb-30">
										<h4>About this level</h4>
										<p>Practicing listening to basic English with short stories can help you at "Beginning" level to a new level in learning English. You not only know a lot of new words but your listening ability will increase a lot.<br/>This process can be quite slow but what it gives you is very effective.<br/>Learning English through video, audio will help you achieve fluency more than ever.</p>
									</div>

									<!-- All Instructors -->
									<div class="all-instructors mb-30">
										<h4>All Instructors</h4>

										<div class="row">
											<!-- Single Instructor -->
											<div class="col-lg-6">
												<div class="single-instructor d-flex align-items-center mb-30">
													<div class="instructor-thumb">
														<img src="img/bg-img/t1.png" alt="">
													</div>
													<div class="instructor-info">
														<h5>Sarah Parker</h5>
														<span>Teacher</span>
													</div>
												</div>
											</div>

											<!-- Single Instructor -->
											<div class="col-lg-6">
												<div class="single-instructor d-flex align-items-center mb-30">
													<div class="instructor-thumb">
														<img src="img/bg-img/t2.png" alt="">
													</div>
													<div class="instructor-info">
														<h5>Sarah Parker</h5>
														<span>Teacher</span>
													</div>
												</div>
											</div>

											<!-- Single Instructor -->
											<div class="col-lg-6">
												<div class="single-instructor d-flex align-items-center mb-30">
													<div class="instructor-thumb">
														<img src="img/bg-img/t3.png" alt="">
													</div>
													<div class="instructor-info">
														<h5>Sarah Parker</h5>
														<span>Teacher</span>
													</div>
												</div>
											</div>

											<!-- Single Instructor -->
											<div class="col-lg-6">
												<div class="single-instructor d-flex align-items-center mb-30">
													<div class="instructor-thumb">
														<img src="img/bg-img/t4.png" alt="">
													</div>
													<div class="instructor-info">
														<h5>Sarah Parker</h5>
														<span>Teacher</span>
													</div>
												</div>
											</div>
										</div>
									</div>

									<!-- FAQ -->
									<div class="clever-faqs">
										<h4>FAQs</h4>

										<div class="accordions" id="accordion" role="tablist" aria-multiselectable="true">

											<!-- Single Accordian Area -->
											<div class="panel single-accordion">
												<h6><a role="button" class="" aria-expanded="true" aria-controls="collapseOne" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">What is the curriculum like?
													<span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
													<span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
												</a></h6>
												<div id="collapseOne" class="accordion-content collapse show">
													<p>When you join the website, Learning English will provide free video, audio that match your English level. Selected curriculum from Ucan.vn,... are being used to teach in English programs at famous universities around the world.</p>
												</div>
											</div>

											<!-- Single Accordian Area -->
											<div class="panel single-accordion">
												<h6>
													<a role="button" aria-expanded="true" aria-controls="collapseThree" class="collapsed" data-parent="#accordion" data-toggle="collapse" href="#collapseThree">What background knowledge is necessary?
														<span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
														<span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
													</a>
												</h6>
												<div id="collapseThree" class="accordion-content collapse">
													<p>You can start learning from many different levels: beginner, intermediate, elementary ... Learning Enghlish will have lessons that suit your poisoning</p>
												</div>
											</div>

											<!-- Single Accordian Area -->
											<div class="panel single-accordion">
												<h6>
													<a role="button" aria-expanded="true" aria-controls="collapseFour" class="collapsed" data-parent="#accordion" data-toggle="collapse" href="#collapseFour">Do i need to take the courses in a specific order?
														<span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
														<span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
													</a>
												</h6>
												<div id="collapseFour" class="accordion-content collapse">
													<p>Unnecessary, you can learn from the level that you currently have.</p>
												</div>
											</div>
										</div>

									</div>
								</div>
							</div>

							<!-- Tab Text -->
							<div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="tab--2">
								<div class="clever-curriculum">

									<!-- Curriculum Level -->
									<div class="curriculum-level mb-30">
										<h5>Beginners Level</h5>
										<ul class="curriculum-list">
											<li><i class="fa fa-file" aria-hidden="true"></i> 1 video, 20 audio, 1 reading, 5 vocabulary
												<ul>
													<li>
														<span><i class="fa fa-video-camera" aria-hidden="true"></i> Video: <span>Greetings and Introductions</span></span>
														<span><i class="fa fa-clock-o" aria-hidden="true"></i> 15 minutes</span>
													</li>
													<li>
														<span><i class="fa fa-file-text" aria-hidden="true"></i> Reading: <span>Word Types</span></span>
														<span><i class="fa fa-clock-o" aria-hidden="true"></i> 15 minutes</span>
													</li>
													<li>
														<span><i class="fa fa-volume-down" aria-hidden="true"></i> Audio: <span>Listening Exercise</span></span>
														<span><i class="fa fa-clock-o" aria-hidden="true"></i> 15 minutes</span>
													</li>
												</ul>
											</li>
											<li class="d-flex justify-content-between">
												<span><i class="fa fa-graduation-cap" aria-hidden="true"></i> Graded: Cumulative Language Quiz</span>
												<span>3 Questions</span>
											</li>
										</ul>
									</div>
								</div>
							</div>

							<!-- Tab Text -->
							<div class="tab-pane fade" id="tab3" role="tabpanel" aria-labelledby="tab--3">
								<div class="clever-review">

									<!-- About Review -->
									<div class="about-review mb-30">
										<h4>Reviews</h4>
										<p>Sed elementum lacus a risus luctus suscipit. Aenean sollicitudin sapien neque, in fermentum lorem dignissim a. Nullam eu mattis quam. Donec porttitor nunc a diam molestie blandit. Maecenas quis ultrices</p>
									</div>

									<!-- Ratings -->
									<div class="clever-ratings d-flex align-items-center mb-30">

										<div class="total-ratings text-center d-flex align-items-center justify-content-center">
											<div class="ratings-text">
												<h2>4.5</h2>
												<div class="ratings--">
													<i class="fa fa-star" aria-hidden="true"></i>
													<i class="fa fa-star" aria-hidden="true"></i>
													<i class="fa fa-star" aria-hidden="true"></i>
													<i class="fa fa-star" aria-hidden="true"></i>
													<i class="fa fa-star-half-o" aria-hidden="true"></i>
												</div>
												<span>Rated 5 out of 3 Ratings</span>
											</div>
										</div>

										<div class="rating-viewer">
											<!-- Rating -->
											<div class="single-rating mb-15 d-flex align-items-center">
												<span>5 STARS</span>
												<div class="progress">
													<div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
												<span>80%</span>
											</div>
											<!-- Rating -->
											<div class="single-rating mb-15 d-flex align-items-center">
												<span>4 STARS</span>
												<div class="progress">
													<div class="progress-bar" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
												<span>20%</span>
											</div>
											<!-- Rating -->
											<div class="single-rating mb-15 d-flex align-items-center">
												<span>3 STARS</span>
												<div class="progress">
													<div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
												<span>0%</span>
											</div>
											<!-- Rating -->
											<div class="single-rating mb-15 d-flex align-items-center">
												<span>2 STARS</span>
												<div class="progress">
													<div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
												<span>0%</span>
											</div>
											<!-- Rating -->
											<div class="single-rating mb-15 d-flex align-items-center">
												<span>1 STARS</span>
												<div class="progress">
													<div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
												<span>0%</span>
											</div>
										</div>
									</div>

									<!-- Single Review -->
									<div class="single-review mb-30">
										<div class="d-flex justify-content-between mb-30">
											<!-- Review Admin -->
											<div class="review-admin d-flex">
												<div class="thumb">
													<img src="img/bg-img/t1.png" alt="">
												</div>
												<div class="text">
													<h6>Sarah Parker</h6>
													<span>Sep 29, 2017 at 9:48 am</span>
												</div>
											</div>
											<!-- Ratings -->
											<div class="ratings">
												<i class="fa fa-star" aria-hidden="true"></i>
												<i class="fa fa-star" aria-hidden="true"></i>
												<i class="fa fa-star" aria-hidden="true"></i>
												<i class="fa fa-star" aria-hidden="true"></i>
												<i class="fa fa-star" aria-hidden="true"></i>
											</div>
										</div>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce enim nulla, mollis eu metus in, sagittis.</p>
									</div>

									<!-- Single Review -->
									<div class="single-review mb-30">
										<div class="d-flex justify-content-between mb-30">
											<!-- Review Admin -->
											<div class="review-admin d-flex">
												<div class="thumb">
													<img src="img/bg-img/t1.png" alt="">
												</div>
												<div class="text">
													<h6>Sarah Parker</h6>
													<span>Sep 29, 2017 at 9:48 am</span>
												</div>
											</div>
											<!-- Ratings -->
											<div class="ratings">
												<i class="fa fa-star" aria-hidden="true"></i>
												<i class="fa fa-star" aria-hidden="true"></i>
												<i class="fa fa-star" aria-hidden="true"></i>
												<i class="fa fa-star" aria-hidden="true"></i>
												<i class="fa fa-star" aria-hidden="true"></i>
											</div>
										</div>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce enim nulla, mollis eu metus in, sagittis.</p>
									</div>
								</div>
							</div>

							<!-- Tab Text -->

							<!-- Tab Text -->
							<div class="tab-pane fade" id="tab5" role="tabpanel" aria-labelledby="tab--4">
								<div class="clever-review">

									<!-- About Review -->
									<div class="about-review mb-30">
										<h4>Reviews</h4>
										<p>Sed elementum lacus a risus luctus suscipit. Aenean sollicitudin sapien neque, in fermentum lorem dignissim a. Nullam eu mattis quam. Donec porttitor nunc a diam molestie blandit. Maecenas quis ultrices</p>
									</div>

									<!-- Ratings -->
									<div class="clever-ratings d-flex align-items-center mb-30">

										<div class="total-ratings text-center d-flex align-items-center justify-content-center">
											<div class="ratings-text">
												<h2>4.5</h2>
												<div class="ratings--">
													<i class="fa fa-star" aria-hidden="true"></i>
													<i class="fa fa-star" aria-hidden="true"></i>
													<i class="fa fa-star" aria-hidden="true"></i>
													<i class="fa fa-star" aria-hidden="true"></i>
													<i class="fa fa-star-half-o" aria-hidden="true"></i>
												</div>
												<span>Rated 5 out of 3 Ratings</span>
											</div>
										</div>

										<div class="rating-viewer">
											<!-- Rating -->
											<div class="single-rating mb-15 d-flex align-items-center">
												<span>5 STARS</span>
												<div class="progress">
													<div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
												<span>80%</span>
											</div>
											<!-- Rating -->
											<div class="single-rating mb-15 d-flex align-items-center">
												<span>4 STARS</span>
												<div class="progress">
													<div class="progress-bar" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
												<span>20%</span>
											</div>
											<!-- Rating -->
											<div class="single-rating mb-15 d-flex align-items-center">
												<span>3 STARS</span>
												<div class="progress">
													<div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
												<span>0%</span>
											</div>
											<!-- Rating -->
											<div class="single-rating mb-15 d-flex align-items-center">
												<span>2 STARS</span>
												<div class="progress">
													<div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
												<span>0%</span>
											</div>
											<!-- Rating -->
											<div class="single-rating mb-15 d-flex align-items-center">
												<span>1 STARS</span>
												<div class="progress">
													<div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
												<span>0%</span>
											</div>
										</div>
									</div>

									<!-- Single Review -->
									<div class="single-review mb-30">
										<div class="d-flex justify-content-between mb-30">
											<!-- Review Admin -->
											<div class="review-admin d-flex">
												<div class="thumb">
													<img src="img/bg-img/t1.png" alt="">
												</div>
												<div class="text">
													<h6>Sarah Parker</h6>
													<span>Sep 29, 2017 at 9:48 am</span>
												</div>
											</div>
											<!-- Ratings -->
											<div class="ratings">
												<i class="fa fa-star" aria-hidden="true"></i>
												<i class="fa fa-star" aria-hidden="true"></i>
												<i class="fa fa-star" aria-hidden="true"></i>
												<i class="fa fa-star" aria-hidden="true"></i>
												<i class="fa fa-star" aria-hidden="true"></i>
											</div>
										</div>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce enim nulla, mollis eu metus in, sagittis.</p>
									</div>

									<!-- Single Review -->
									<div class="single-review mb-30">
										<div class="d-flex justify-content-between mb-30">
											<!-- Review Admin -->
											<div class="review-admin d-flex">
												<div class="thumb">
													<img src="img/bg-img/t1.png" alt="">
												</div>
												<div class="text">
													<h6>Sarah Parker</h6>
													<span>Sep 29, 2017 at 9:48 am</span>
												</div>
											</div>
											<!-- Ratings -->
											<div class="ratings">
												<i class="fa fa-star" aria-hidden="true"></i>
												<i class="fa fa-star" aria-hidden="true"></i>
												<i class="fa fa-star" aria-hidden="true"></i>
												<i class="fa fa-star" aria-hidden="true"></i>
												<i class="fa fa-star" aria-hidden="true"></i>
											</div>
										</div>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce enim nulla, mollis eu metus in, sagittis.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="col-12 col-lg-4">
				

				<!-- Widget -->
				<div class="sidebar-widget">
					<h4>Course Features</h4>
					<ul class="features-list">
						<li>
							<h6><i class="fa fa-clock-o" aria-hidden="true"></i> Duration</h6>
							<h6>2 Weeks</h6>
						</li>
						<li>
							<h6><i class="fa fa-bell" aria-hidden="true"></i> Lectures</h6>
							<h6>10</h6>
						</li>
						<li>
							<h6><i class="fa fa-file" aria-hidden="true"></i> Quizzes</h6>
							<h6>3</h6>
						</li>
						<li>
							<h6><i class="fa fa-thumbs-up" aria-hidden="true"></i> Pass Percentage</h6>
							<h6>60</h6>
						</li>
						<li>
							<h6><i class="fa fa-thumbs-down" aria-hidden="true"></i> Max Retakes</h6>
							<h6>5</h6>
						</li>
					</ul>
				</div>

				<!-- Widget -->
				<div class="sidebar-widget">
					<h4>Certification</h4>
					<img src="img/bg-img/cer.png" alt="">
				</div>

				<!-- Widget -->
				<div class="sidebar-widget">
					<h4>You may like</h4>

					<!-- Single Courses -->
					<div class="single--courses d-flex align-items-center">
						<div class="thumb">
							<img src="img/bg-img/yml.jpg" alt="">
						</div>
						<div class="content">
							<h5>Vocabulary</h5>
							<h6>$20</h6>
						</div>
					</div>

					<!-- Single Courses -->
					<div class="single--courses d-flex align-items-center">
						<div class="thumb">
							<img src="img/bg-img/yml2.jpg" alt="">
						</div>
						<div class="content">
							<h5>Expository writing</h5>
							<h6>$45</h6>
						</div>
					</div>

					<!-- Single Courses -->
					<div class="single--courses d-flex align-items-center">
						<div class="thumb">
							<img src="img/bg-img/yml3.jpg" alt="">
						</div>
						<div class="content">
							<h5>Vocabulary</h5>
							<h6>$20</h6>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
<!-- ##### Courses Content End ##### -->

<!-- ##### Footer Area Start ##### -->
@endsection()