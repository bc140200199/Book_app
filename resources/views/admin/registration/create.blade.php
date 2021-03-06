<!DOCTYPE html>
<html>
<head>
  
 <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
</head>
<body>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>


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