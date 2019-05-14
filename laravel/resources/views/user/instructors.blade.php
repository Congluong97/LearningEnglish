@extends('user.master')
@section('content')


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

<!-- ##### Instructors Video Start ##### -->
<div class="instructors-video d-flex align-items-center justify-content-center bg-img" style="background-image: url(img/bg-img/bg4.jpg);">
    <h3>Be The Best English Teacher</h3>
    <!-- video btn -->
    <a href="https://www.youtube.com/watch?v=qC_T9ePzANg" class="video-btn"><i class="fa fa-play" aria-hidden="true"></i></a>
</div>
<!-- ##### Instructors Video End ##### -->

<!-- ##### Best Tutors Area Start ##### -->
<section class="best-tutors-area section-padding-100">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading">
                    <h3>The Best Tutors in English</h3>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="tutors-slide owl-carousel">

                    <!-- Single Tutors Slide -->
                    @foreach($admins as $admin)
                    <div class="single-tutors-slides">
                        <!-- Tutor Thumbnail -->
                        <div class="tutor-thumbnail">
                            <img src="{{asset('')}}{{$admin->thumbnail}}" alt="">
                        </div>
                        <!-- Tutor Information -->
                        <div class="tutor-information text-center">
                            <h5>{{ $admin->name }}</h5>
                            <span>Teacher</span>
                            <p>{{$admin->email}}</p>
                            <div class="social-info">
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>

                   
                   @endforeach



                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### Best Tutors Area End ##### -->



<!-- ##### Top Teacher Area End ##### -->
@endsection()

