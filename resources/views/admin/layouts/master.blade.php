<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="https://bootswatch.com/4/minty/bootstrap.min.css">
	<link rel="stylesheet" href="{{asset('/css/main.css')}}">
</head>
<body>
@yield('banner')
<br>
<div class="container">
 <div class="row">
  <div class="col-md-3">
    <ul class="list-group">

    </ul>
  </div>
    <div class="col-md-9">
   <div class="content-wrap well">
     @yield('content')
   </div>
 </div>
 
 </div>
</div>

   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 
</body>
</html>