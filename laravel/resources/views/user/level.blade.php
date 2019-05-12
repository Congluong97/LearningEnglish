@extends('user.master')
@section('content')

<!-- ##### Breadcumb Area Start ##### -->
<div class="breadcumb-area">
	<!-- Breadcumb -->
	<nav aria-label="breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="{{asset('test')}}">Home</a></li>
			<li class="breadcrumb-item"><a href="#">Level</a></li>
			<li class="breadcrumb-item"><a href="#">
				@foreach($new_lession as $new1)
				Level {{$new1->id}}
			@endforeach()</a>
		</li>
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
		@foreach($new_lession as $new1)
		<h3>{{$new1->name}} Level </h3> 
		@endforeach()
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
		<div class="course--content">

			<div class="clever-tabs-content">
				<ul class="nav nav-tabs" id="myTab" role="tablist">
					<li class="nav-item">
						<a class="nav-link active" id="tab--1" data-toggle="tab" href="#tab1" role="tab" aria-controls="tab1" aria-selected="false">Description</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" id="tab--2" data-toggle="tab" href="#tab2" role="tab" aria-controls="tab2" aria-selected="true">Curriculum</a>
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

								<!-- Single Popular Course -->
								
								<h5>{{$new_lession[0]->name}} Level</h5>
								<div class="row">

									@foreach($new_lecture as $new2)
									<!-- @if($new2->id ==$new1->id_lecture ) -->
									<div class="col-12 col-md-6 col-lg-4">
										<div class="single-popular-course mb-100 wow fadeInUp" >
											<a href="">
												<img src="../../public/user/img/bg-img/{{$new2->image}}" alt="" height="250px"></a>
												<!-- Course Content -->
												<div class="course-content">
													<h4>{{$new2->name}}</h4>
													<div class="meta d-flex align-items-center">
														<a href="level1.blade.php">{{$new2->level}}</a>
													</div>
													<p>Practice listening, learning vocabulary according to the most popular topics with slow reading...</p>
												</div>
												<!-- Seat Rating Fee -->
												<div class="seat-rating-fee d-flex justify-content-between">
													<div class="seat-rating h-100 d-flex align-items-center">
														<div class="seat">
															<i class="fa fa-user" aria-hidden="true"></i> 10
														</div>
														<div class="rating">
															<i class="fa fa-star" aria-hidden="true"></i> 4.5
														</div>
													</div>
													<div class="course-fee h-100">
														<a href="#" class="free">Free</a>
													</div>
												</div>
											</div>
										</div>
									</div>
									<!-- @endif -->
									
									@endforeach()
								</div>
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