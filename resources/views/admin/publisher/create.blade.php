
@extends('admin.layouts.master')
@section('content')
<div class="col-md-4">
  <h1>Create Publisher</h1>
   <form action="{{route('publisher.store')}}" method="POST">
      {{ csrf_field() }}
     <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" class="form-control" id="name" name="name" required>
     </div>
     <div class="form-group">
        <label for="contact_person">Contact Person:</label>
        <input type="text" class="form-control" id="name" name="contact_person" required>
     </div>
     <div class="form-group">
        <label for="publisher_name">Publisher Name:</label>
        <input type="text" class="form-control" id="name" name="publisher_name" required>
     </div>
     <div class="form-group">
        <label for="Number">Phone Number:</label>
        <input type="tel" class="form-control" name="Number" required>
     </div>
      <div class="form-group">
        <label for="opening_time">opening Time:</label>
        <input type="text" class="form-control" name="opening_time" required>
     </div>
      <div class="form-group">
        <label for="closing_time">Closing Time:</label>
        <input type="text" class="form-control" name="closing_time" required>
     </div>
      <div class="form-group">
        <label for="street_1">Street 1:</label>
        <input type="text" class="form-control" name="street_1" required>
     </div>
      <div class="form-group">
        <label for="street_2">Street 2:</label>
        <input type="text" class="form-control" name="street_2" required>
     </div>
     <div class="form-group">
        <label for="state">State:</label>
        <input type="text" class="form-control" name="state" required>
     </div>
      <div class="form-group">
        <label for="country_name">Country:</label>
        <input type="text" class="form-control" name="country_name" required>
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
        <label for="password_confirmation"> Confirm Password</label>
        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
     </div>

     <div class="form-group">
        <button type="submit" class="btn btn-primary btn btn-block">Create Staff</button>
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



@endsection
