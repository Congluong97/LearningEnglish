@extends('user.master')
@section('content')

<!-- ##### Breadcumb Area Start ##### -->
<div class="breadcumb-area">
    <!-- Breadcumb -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Lectures</a></li>
        </ol>
    </nav>
</div>
<!-- ##### Breadcumb Area End ##### -->

<!-- ##### Catagory ##### -->
<div class="clever-catagory bg-img d-flex align-items-center justify-content-center p-3" style="background-image: url(img/bg-img/bg2.jpg);">
    <h3>Lectures</h3>
</div>

<!-- ##### Popular Course Area Start ##### -->
<section class="popular-courses-area section-padding-100">
    <div class="container">
        <div class="row">
            <!-- Single Popular Course -->
            @foreach($lecture as $new)
            <div class="col-12 col-md-6 col-lg-4">
                <div class="single-popular-course mb-100 wow fadeInUp" >
                    <a href="{{asset('single_lectures/'.$new->id)}}">
                        <img src="{{asset('')}}{{$new->image}}" alt=""  style="width: 300px;height: 300px"></a>
                        <!-- Course Content -->
                        <div class="course-content">
                           <a href="{{asset('single_lectures/'.$new->id)}}" title=""> <h4 style="text-overflow: ellipsis;overflow: hidden;  white-space: nowrap;">{{$new->name}}</h4></a>
                            <div class="meta d-flex align-items-center" >
                                @foreach($level as $new2)
                                 @if($new2->id == $new->id_lecture)
                                    <a   href="">Level {{$new2->id}} - {{$new2->name}}</a>
                                @endif
                                @endforeach()
                            </div>
                            <p style="text-overflow: ellipsis;overflow: hidden;  white-space: nowrap;">Practice listening, learning vocabulary according to the most popular topics with slow reading...</p>
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
        
        </section>
        <!-- ##### Popular Course Area End ##### -->

        @endsection()