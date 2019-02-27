{{-- <!DOCTYPE html>
<html>
<head>
  
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
</head>
<body> --}}

{{-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script> --}}

{{-- <div class="col-md-4">
  <h1>Edit Staff</h1>
   <form action="{{ route('staff.update', [$id]) }}"method="POST">

    {{ csrf_field() }}  
    {{ method_field('PUT') }}

    <div class="form-group">
       <label for="name">Name:</label>
       <input type="text" class="form-control" name="name" value="{{ old('name',$user->name)}}" required>
    </div>

    <div class="form-group">
       <label for="email">Email:</label>
       <input type="text" class="form-control" name="email" value="{{ old('email',$user->email)}}" required>
    </div>

    <div class="form-group">
       <label for="roles">Role</label>
        <select name="roles" class="form-control" value="{{ old('roles',$user->roles)}}" required>
         <option value="">None</option>
         <option value="1">Admin</option>
         <option value="2">Moderator</option>
        </select>
    </div>

    <div class="form-group">
       <label for="password">Password:</label>
       <input type="password" class="form-control" id="password" name="password" required>
    </div>

    <div class="form-group">
       <label for="password_confirmation"> Confirm Password</label>
       <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
    </div>

    <div class="form-group">
       <button type="submit" class="btn btn-primary btn btn-block">Edit Staff</button>
    </div>

    <div class="form-group">
       @if(count($errors))
        <div class="form-group">
         <div class="alert alert-danger">
           <ul>
             @foreach($errors->all() as $error)
               <li> {{ $error }}</li>
             @endforeach
           </ul>
         </div>
        </div>
       @endif
    </div>
   </form>
</div>
{{-- </body>

</html> --}}

{{-- @endsection
 --}}
@extends('admin.layouts.master')
@section('content')
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="../../index2.html"><b>Edit</b>Staff</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
 <div class="login-box-body">
    <p class="login-box-msg">Edit Staff</p>

    <form action="{{ route('staff.update', [$id]) }}"method="post">
    {{ csrf_field() }}
    {{ method_field('PUT') }}


      <div class="form-group has-feedback">
        <input type="Text" class="form-control" name="name" placeholder="Name" required>
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>

      <div class="form-group has-feedback">
        <input type="email" class="form-control" name="email" placeholder="Email" required>
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
         <select name="roles" class="form-control" placeholder= "Role" required>
          <option value="">None</option>
          <option value="1">Admin</option>
          <option value="2">Moderator</option>
         </select>
     </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" name="password" placeholder="Password" required>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
        <div class="form-group has-feedback">
        <input type="password" class="form-control" name="password_confirmation" placeholder="Password Confirmation" required>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Edit</button>
        </div>
      
      </div>
      @if(count($errors))
    <div class="form-group has-feedback">
      <div class="alert alert-danger">

        <ul>

          @foreach($errors->all() as $error)

          <li> {{ $error }}</li>

          @endforeach

        </ul>

      </div>
      </div>
    @endif
    </form>
</div>
</div>
</div>
</body>
@endsection





















