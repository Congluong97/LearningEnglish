@extends('user.master')
@section('content')
<section class="hero-area bg-img bg-overlay-2by5" style="background-image: url(img/bg-img/bg1.jpg);">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12">
                <!-- Hero Content -->
                <div class="hero-content text-center">
                    <h2>Let's Study Together</h2>
                    <a href="{{asset('level/1')}}" class="btn clever-btn">Get Started</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### Hero Area End ##### -->


<!-- ##### Popular Courses Start ##### -->
<section class="popular-courses-area section-padding-100-0" style="background-image: url(img/core-img/texture.png);">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading">
                    <h3>New Courses</h3>
                </div>
            </div>
        </div>

        <div class="row">
            @foreach($lectures as $lecture)
            <!-- Single Popular Course -->
            <div class="col-12 col-md-6 col-lg-4">
                <div class="single-popular-course mb-100 wow fadeInUp" data-wow-delay="250ms">
                    <img src="{{asset('public/storage/image/').$lecture->link}}" alt="">
                    <!-- Course Content -->
                    <div class="course-content">
                        <a href="{{asset('single_lectures/'.$lecture->id)}}" title=""> <h4 style="text-overflow: ellipsis;overflow: hidden;  white-space: nowrap;">{{$lecture->name}}</h4></a>
                        <p  style="text-overflow: ellipsis;overflow: hidden;  white-space: nowrap;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce enim nulla, mollis eu metus in, sagittis</p>
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
            @endforeach
        </div>
    </div>
</section>
<!-- ##### Popular Courses End ##### -->

<!-- ##### Best Tutors Start ##### -->
<section class="best-tutors-area section-padding-100">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading">
                    <h3>The Best Tutors in Town</h3>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="tutors-slide owl-carousel wow fadeInUp" data-wow-delay="250ms">

                    <!-- Single Tutors Slide -->
                    <div class="single-tutors-slides">
                        <!-- Tutor Thumbnail -->
                        <div class="tutor-thumbnail">
                            <img src="img/bg-img/t1.png" alt="">
                        </div>
                        <!-- Tutor Information -->
                        <div class="tutor-information text-center">
                            <h5>Alex Parker</h5>
                            <span>Teacher</span>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi fermentum laoreet elit, sit amet tincidunt mauris ultrices vitae.</p>
                            <div class="social-info">
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>

                    <!-- Single Tutors Slide -->
                    <div class="single-tutors-slides">
                        <!-- Tutor Thumbnail -->
                        <div class="tutor-thumbnail">
                            <img src="img/bg-img/t2.png" alt="">
                        </div>
                        <!-- Tutor Information -->
                        <div class="tutor-information text-center">
                            <h5>Alex Parker</h5>
                            <span>Teacher</span>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi fermentum laoreet elit, sit amet tincidunt mauris ultrices vitae.</p>
                            <div class="social-info">
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>

                    <!-- Single Tutors Slide -->
                    <div class="single-tutors-slides">
                        <!-- Tutor Thumbnail -->
                        <div class="tutor-thumbnail">
                            <img src="img/bg-img/t3.png" alt="">
                        </div>
                        <!-- Tutor Information -->
                        <div class="tutor-information text-center">
                            <h5>Alex Parker</h5>
                            <span>Teacher</span>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi fermentum laoreet elit, sit amet tincidunt mauris ultrices vitae.</p>
                            <div class="social-info">
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>

                    <!-- Single Tutors Slide -->
                    <div class="single-tutors-slides">
                        <!-- Tutor Thumbnail -->
                        <div class="tutor-thumbnail">
                            <img src="img/bg-img/t4.png" alt="">
                        </div>
                        <!-- Tutor Information -->
                        <div class="tutor-information text-center">
                            <h5>Alex Parker</h5>
                            <span>Teacher</span>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi fermentum laoreet elit, sit amet tincidunt mauris ultrices vitae.</p>
                            <div class="social-info">
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>

                    <!-- Single Tutors Slide -->
                    <div class="single-tutors-slides">
                        <!-- Tutor Thumbnail -->
                        <div class="tutor-thumbnail">
                            <img src="img/bg-img/t5.png" alt="">
                        </div>
                        <!-- Tutor Information -->
                        <div class="tutor-information text-center">
                            <h5>Alex Parker</h5>
                            <span>Teacher</span>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi fermentum laoreet elit, sit amet tincidunt mauris ultrices vitae.</p>
                            <div class="social-info">
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### Best Tutors End ##### -->

<!-- video -->
<section>
    <div class="tab-content col-8" id="myTabContent" style="text-align: center; margin-left: 200px">
        <!-- Tab Text -->
        <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="tab--1">
            <!-- Single Popular Course -->
            <div class="clever-description">

                <!-- About Course -->
                <div class="about-course mb-30 ">
                    <h4>{{$video[0]->name}}</h4>
                    <div class="col-8 ">
                       <video width="780" height="380" controls  >  
                          <source src="{{asset('public/storage/video'.$video[0]->link)}}" type="video/mp4"> 
                          </video>
                      </div>

                      <div style="margin-top: 20px">
                          <span >{{$video[0]->description}}</span>

                      </div>

                  </div>



              </div>

              <!-- Tab Text -->
          </div>
      </div>

  </div>

</section>
<!-- end video -->



<!-- ##### Upcoming Events Start ##### -->
<section class="upcoming-events section-padding-100-0">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading">
                    <h3>Upcoming events</h3>
                </div>
            </div>
        </div>

        <div class="row">
         @foreach($event as $e)
         <div class="col-12 col-md-6 col-lg-4">
            <div class="single-upcoming-events mb-50 wow fadeInUp" data-wow-delay="250ms">
                <!-- Events Thumb -->
                <div class="events-thumb">
                    <img style="width: 350px; height: 175px" src="{{asset('public/storage/images/'.$e->image)}}" alt="">
                    <h6 class="event-date">{{date("d M", strtotime($e->created_at))}}</h6>
                    <h4 class="event-title">{{$e->name}}</h4>
                </div>
                <!-- Date & Fee -->
                <div class="tutor-information text-center">

                    <p style="width: 350px; height: 70px ;margin-top: 5px;overflow: hidden;text-overflow: ellipsis;white-space: nowrap;">{{$e->detail}}.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi fermentum laoreet elit, sit amet tincidunt mauris ultrices vitae</p>

                </div>
            </div>
        </div>
        @endforeach()

    </div>
</section>
<!-- ##### Upcoming Events End ##### -->

@endsection()