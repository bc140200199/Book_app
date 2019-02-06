<!DOCTYPE html>
<html>
<head>
  
{{--  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous"> --}}

<link rel="stylesheet" type="text/css" href="https://bootswatch.com/4/minty/bootstrap.min.css">
</head>
<body>

{{-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script> --}}

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<div class="col-md-4">
	
	<h1 align="center">Sign In</h1>

	
	<form method="POST" action="/admin/login">
		
		{{ csrf_field() }}


		<div class="form-group">

			<label for="email">Email Address:</label>

			<input type="email" class="form-control" id="email" name="email">
			
		</div>


		<div class="form-group">

			<label for="password">Password:</label>
			
			<input type="password" class="form-control" id="password" name="password">
			
		</div>


		<div class="form-group">
			
				<button type="submit" class="btn btn-primary btn-block">Sign In</button>

		</div>

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

		</form>

</div>

 

</body>
</html>