@extends('user.master')
@section('path')
<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{asset('home')}}">Home</a></li>
    <li class="breadcrumb-item"><a href="{{asset('lectures')}}">lectures</a></li>
    <li class="breadcrumb-item"><a href="#">Lesson</a></li>
</ol>
@endsection
@section('content')

<!-- ##### Single Course Intro Start ##### -->
<div class="single-course-intro d-flex align-items-center justify-content-center" style="background-image: url(img/bg-img/bg3.jpg);">
    <!-- Content -->
    <div class="single-course-intro-content text-center">
        <!-- Ratings -->
        <div class="ratings">
            <i class="fa fa-star" aria-hidden="true"></i>
            
        </div>
        <h3>{{$new_lecture[0]->name}}</h3>
        <div class="meta d-flex align-items-center justify-content-center">

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
                            
                        </ul>

                        <div class="tab-content" id="myTabContent">
                            <!-- Tab Text -->
                            <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="tab--1">
                                <!-- Single Popular Course -->
                                <div class="clever-description">

                                    <!-- About Course -->
                                    @if(!empty($video[0]))
                                    <div class="about-course mb-30">
                                        <h4>{{$video[0]->name}}</h4>
                                        <video width="650" height="300" controls>  
                                          <source src="{{asset('')}}public/{{$video[0]->link}}" type="video/mp4"> 
                                          </video>
                                      </div>
                                      @endif
                                      <div class="about-course mb-30" id="parent">

                                        <h4>Click the track want to listen</h4>
                                        <?php $i = 1 ?>
                                        @foreach($audio as $au)
                                        <form action="{{asset('check')}}" method="POST" id="{{$i}}" >
                                            @csrf
                                            <div class="about-course mb-30">
                                                <div>{{$au->name}}</div>
                                                <audio width="300" height="300" controls >  
                                                  <source src="{{asset('')}}public/{{$au->link}}" loop="true" autoplay="true" type="audio/mp3"> 
                                                  </audio>

                                                  <textarea  class="answer" placeholder="Enter your answer" style="border: 1px solid; margin-bottom: 5px; margin-left: 5px" name="answer" id="answer{{$i}}" required=""></textarea>
                                                  <input type="hidden" class="id_audio" name="id_audio" id="id_audio{{$i}}" value="{{$au->id}}" placeholder="">

                                                  <button type="submit" style="display: inline; margin-bottom: 45px;margin-left: 5px" class="btn btn-success" id="submit" data_id='{{$i}}' >submit</button>  

                                                  <input style="border: 1px solid; font-weight:bold; padding-left: 3px" id="result{{$i}}" disabled=""  type="text"  value="result">

                                              </div>
                                          </form>
                                          <?php $i++ ?>
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
                                        <!-- Single Popular Course -->
                                        @foreach($new_lecture as $new1)

                                        <table border="1">
                                            @foreach($new_word as $new2)
                                            @if($new2->id_lecture ==$new1->id )

                                            <tr>
                                                <td style="width: 100px;padding: 3px" >{{$new2->name}}:</td>

                                                <td style="width: 100px;padding: 3px">{{$new2->mean}}</td>
                                                <td>
                                                    <audio controls >  
                                                        <source src="{{asset('')}}{{$new2->pronunciation}}" loop="true" autoplay="true" type="audio/mp3"> 
                                                        </audio>

                                                    </td>
                                                </tr>           
                                                @endif
                                                @endforeach()
                                            </table>

                                            @endforeach()
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
                        @foreach($top_lecture as $lec)
                        <!-- Single Courses -->
                        <div class="single--courses d-flex align-items-center">
                            <div class="thumb">
                                <img src="{{asset('').$lec->image}}" alt="">
                            </div>
                            <div class="content">
                                <h5><a href="{{asset('single_lectures/'.$lec->id)}}" title="">{{$lec->name}}</a></h5>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>




        </div>
    </div>



    <!-- ##### Courses Content End ##### -->

    <!-- ##### Footer Area Start ##### -->
    @endsection()
    @section('script')


    <script type="text/javascript">

       $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

       $('form').on('submit',function(event) {
        event.preventDefault();
        var i = $(this).attr('id');
        $.ajax({
            type:'POST',
            url: '{{asset('check')}}',
            data:{
                answer: $('#answer'+i).val(),
                id_audio: $('#id_audio'+i).val(),
            },
            success: function(res){
                event.preventDefault();
          
               $('#result'+i).attr('value',res);
           },

           error: function(xhr, ajaxOptions, thrownError){
            event.preventDefault();
            toastr['error']('Error');
        }
    })
    });




</script>
@endsection()
