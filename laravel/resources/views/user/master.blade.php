<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *Must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <base href="{{asset('public/user')}}/" target="_blank, _self, _parent, _top">
    <title>English - Education &amp; Courses Template | Home</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css">
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
                <a href="#"><span>Phone:</span> +84 369 435 608</a>
                <a href="#"><span>Email:</span> xuanttbk@gmail.com</a>
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
                    <a class="nav-brand" href="{{asset('home')}}"><strong>Learning English</strong></a>

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
                                <li><a href="{{asset('home')}}">Home</a></li>
                                <li><a href="#">Level</a>

                                    <ul class="dropdown">
                                      @foreach($level as $l)
                                      <li><a href="{{asset('level/'.$l->id)}}" title="">{{$l->name}}</a></li>
                                      @endforeach
                                  </ul>
                              </li>
                              <li><a href="{{asset('lectures')}}">Lectures</a></li>
                              <li><a href="{{asset('instructors')}}">Instructors</a></li>
                              <li><a href="{{asset('vocabulary')}}">Vocabulary</a></li>

                          </ul>

                          <!-- Search Button -->
                          <div class="search-area">
                            <form action="#" method="post">
                               
                                {{ csrf_field() }}
                                <input type="search" name="search" id="search" placeholder="Search">
                                <div id="lecturelist"></div>
                                <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                            </form>
                        </div>

                        <!-- Register / Login -->
                        @if(Auth::guest())
                        <div class="register-login-area loginandregister">
                            <a href="{{asset('register')}}" class="btn">Register</a>
                            <a href="{{asset('login')}}" class="btn active">Login</a>
                        </div>
                        @endif
                        <!-- Login -->
                        @if(Auth::check())
                        <div class="login-state d-flex align-items-center">
                         <div class="user-name mr-30">
                            <div class="dropdown">
                                <a class="dropdown-toggle" href="#" role="button" id="userName" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{Auth::user()->name}}</a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userName">
                                    <a class="dropdown-item" href="{{asset(Auth::user()->name.'/profile')}}">Profile</a>
                                    <a class="dropdown-item" href="{{asset('history')}}">History</a>
                                    <a class="dropdown-item" href="{{asset('logout')}}">Logout</a>

                                    <input type="search" name="search" id="search" placeholder="Search">
                                    <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                                </form>
                            </div>




                            <div class="userthumb">
                                <img src="img/bg-img/t1.png" alt="">
                            </div>
                        </div>
                        @endif
                    </div>
                    <!-- Nav End -->
                </div>
            </nav>
        </div>

    </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Hero Area Start ##### -->
    <!-- ##### Breadcumb Area Start ##### -->
    <div class="breadcumb-area">
        <!-- Breadcumb -->
        <nav aria-label="breadcrumb">
            @yield('path')
        <!-- <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Lectures</a></li>
        </ol> -->
    </nav>
</div>
<!-- ##### Breadcumb Area End ##### -->


@yield('content')

<!-- ##### Footer Area Start ##### -->
<footer class="footer-area">
    <!-- Top Footer Area -->
    <div class="top-footer-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Footer Logo -->
                    <div class="footer-logo">
                        <a href="index.html"><span style="color: white">Learning Enghlish</span></a>
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
                <a href="#"><span>Phone:</span> +84 369 435 608</a>
                <a href="#"><span>Email:</span> xuanttbk@gmail.com</a>
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
        <script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script> 
        <!-- <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script> -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.7/js/fileinput.js" type="text/javascript"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.7/themes/fa/theme.js" type="text/javascript"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script type="text/javascript">
           $('#search').keyup(function(){
            var query =  $(this).val();
            if(query != ''){
                $.ajax({
                    url: '{{asset('search')}}',
                    method:'POST',
                    data:{
                        query:query,
                    },
                    success:function(data){
                     $('#lecturelist').fadeIn();  
                     $('#lecturelist').html(data); 
                 }
             });
            }
        });
    </script>

    @yield('script')

</body>

</html>

