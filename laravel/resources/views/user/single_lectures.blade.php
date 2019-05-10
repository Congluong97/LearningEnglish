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
                                <a class="nav-link active" id="tab--1" data-toggle="tab" href="#tab1" role="tab" aria-controls="tab1" aria-selected="false">Video</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="tab--2" data-toggle="tab" href="#tab2" role="tab" aria-controls="tab2" aria-selected="true">New words</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="tab--2" data-toggle="tab" href="#tab2" role="tab" aria-controls="tab2" aria-selected="true">Games</a>
                            </li>
                            
                        </ul>

                        <div class="tab-content" id="myTabContent">
                            <!-- Tab Text -->
                            <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="tab--1">
                                <div class="clever-description">

                                    <!-- About Course -->
                                    <div class="about-course mb-30">
                                        <h4>First Snow Fall</h4>
                                        <video width="650" height="300" controls>  
                                              <source src="{{ url('public/user/video/example.mp4') }}" type="video/mp4"> 
                                        </video>
                                    </div>
                                 <div class="about-course mb-30">
                                 
                                        <h4>Click the track want to listen</h4>
                                        <div>
                                            <select name="" multiple>
                                            <option value="">track 1</option>
                                            <option value="">track 2</option>
                                        </select>
                                        </div>
                                        <div class="about-course mb-30">
                                            <audio width="650" height="300" controls loop>  
                                              <source src="{{ url('public/user/video/2.mp3') }}" loop="true" autoplay="true" type="audio/mp3"> 
                                        </audio>
                                        
                                        
                                         <textarea name="" placeholder="Enter your answer"></textarea> 
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
                                        
                                        <div class="row">
                                            <!-- Single Popular Course -->
                                            
                                            <h5>kkkk</h5>
                                            
                                                
                                            </div>
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