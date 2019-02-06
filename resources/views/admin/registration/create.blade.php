<!DOCTYPE html>
<html>
<head>
  
 <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
</head>
<body>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>



{{-- <div class="container">
  <div class="row">
    <div class="col-lg-offset-3 col-lg-6">
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
<form class="form-horizontal" action="/register">
  {{csrf_field()}}
  <fieldset>
    <H1>Registration</H1>
     <div class="form-group">
      <label class="col-lg-4 control-label">Name</label>
      <div class="col-lg-8">
        <input type="text" class="form-control" id="name" placeholder="name">
      </div>
    <div class="form-group">
      <label for="inputEmail" class="col-lg-4 control-label">Email</label>
      <div class="col-lg-8">
        <input type="text" class="form-control" id="inputEmail" placeholder="Email">
      </div>
    </div>
    <div class="form-group">
      <label for="inputPassword" class="col-lg-4 control-label">Password</label>
      <div class="col-lg-8">
        <input type="password" class="form-control" id="inputPassword" placeholder="Password">
        </div>
        <div class="form-group">
      <label for="inputPassword" class="col-lg-4 control-label">Confirm Password</label>
      <div class="col-lg-8">
        <input type="password" class="form-control" id="inputPassword" placeholder="Password Confirmation">
        
      </div>
    </div>
    <div class="form-group">
      <div class="col-lg-8 col-lg-offset-4">
        <button type="submit" class="btn btn-primary btn-block">Register</button>
      </div>
    </div>
  </fieldset>
</form>



    </div>
  </div>
</div> --}}


  <div class="col-sm-8">
    
    <h1>Register</h1>

    <form method="POST" action="/register">
      
      {{ csrf_field() }}

    <div class="form-group">

      <label for="name">Name:</label>

      <input type="text" class="form-control" id="name" name="name" required>

    </div>

    <div class="form-group">

      <label for="email">Email:</label>

      <input type="text" class="form-control" id="email" name="email" required>
      
    </div>

    <div class="form-group">

      <label for="password">Password:</label>

      <input type="password" class="form-control" id="password" name="password" required>
      
    </div>


    <div class="form-group">
      
      <button type="submit" class="btn btn-primary btn btn-block">Register</button>

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



</body>
</html>