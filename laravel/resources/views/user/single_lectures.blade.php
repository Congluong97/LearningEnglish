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
                                        <h4>{{$video[0]->name}}</h4>
                                        <video width="650" height="300" controls>  
                                              <source src="../../public/user/video/level1/video1/{{$video[0]->link}}" type="video/mp4"> 
                                        </video>
                                    </div>
                                 <div class="about-course mb-30">
                                 
                                        <h4>Click the track want to listen</h4>

                                       @foreach($audio as $au)
                                        <div class="about-course mb-30">
                                            <div>{{$au->name}}</div>
                                            <audio width="300" height="300" controls >  
                                              <source src="../../public/user/video/level1/video1/{{$au->link}}" loop="true" autoplay="true" type="audio/mp3"> 
                                        </audio>
                                        
                                        
                                         <textarea name="" placeholder="Enter your answer" style="border: 1px solid; margin-bottom: 5px; margin-left: 5px"></textarea>
                                         
                                        <button type="" style="display: inline; margin-bottom: 45px;margin-left: 5px" class="btn btn-success" name="">submit</button>  
                                        <input style="border: 1px solid" disabled=""  type="text" name="" value="result">
                                        
                                        </div>
                                        @endforeach
                                      
                                    </div>
                                    <!-- FAQ -->
                                   
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

                <div class="col-12 col-lg-4" style="display: inline">


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