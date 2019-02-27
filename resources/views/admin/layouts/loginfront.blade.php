<!DOCTYPE html>
<html>
<head>
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
     @yield('login')
   </div>
 </div>
 
 </div>
</div>