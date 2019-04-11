@extends('admin.layouts.admin_master')
@section('path','Add User')
@section('css')
<!-- Bootstrap 3.3.7 -->
<link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
<!-- Font Awesome -->
<link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
<!-- Ionicons -->
<link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
<!-- Theme style -->
<link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
   folder instead of downloading all of them to reduce the load. -->
   <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">

   <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
   <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

<!-- Google Font -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
@endsection
@section('content')

<!-- Main content -->
<section class="content">
  <div class="row">
    <!-- left column -->
    <div class="col-md-12">
      <!-- general form elements -->
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-primary">New User</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form role="form" method="POST">
          @include('errors.note')
          <div class="box-body">
           <div class="form-group">
            <label for="exampleInputName">Name</label>
            <input type="text" class="form-control" id="exampleInputName" placeholder="Enter Name" name="name" value="{{$user->name}}">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email"
            name="email" disabled="" value="{{$user->email}}">
          </div>
          <div class="form-group">
              <div class="checkbox">
                <label>
                  <input type="checkbox" id="changePassword" name="changePassword"> Change Password</input>
                </label>
            
            </div>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control password" id="exampleInputPassword1" placeholder="Password" name="password" disabled="">
          </div>
          <div sty class="form-group">
            <label for="exampleInputPassword1">Confirm Password</label>
            <input type="password" class="form-control password" id="exampleInputPassword1" placeholder="Password" name="confirmpassword" disabled="">
          </div>
          
          <div class="form-group">
            <label>User Permission</label>
            <select class="form-control" name="level">
              
              @foreach($leveluser as $level )
              <option value="{{$level->id_level_user}}" 
                <?php if($level->id_level_user==$user->level){ ?> selected <?php }  ?>  >
                {{$level->level_name}}</option>
              @endforeach
            </select>
          </div>

          <!-- /.box-body -->

          <div class="box-footer">
            <button type="submit" class="btn btn-primary">Edit</button>
          </div>
          {{csrf_field()}}
        </form>
      </div>
      <!-- /.box -->
    </div>
  </div>
  <!-- /.row -->
</section>
<!-- /.content -->
@endsection
@section('script')
<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<!-- <script src="dist/js/demo.js"></script> -->
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
@endsection