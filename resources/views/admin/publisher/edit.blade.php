{{-- @extends('admin.layouts.master')
@section('content')


<div class="col-md-4">
  <h1>Edit Publisher</h1>
   <form action="{{ route('publisher.update', [$id]) }}"method="POST">

    {{ csrf_field() }}  
    {{ method_field('PUT') }}
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
        <label for="number">Phone Number:</label>
        <input type="tel" class="form-control" name="number" required>
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
        <button type="submit" class="btn btn-primary btn btn-block">Edit Publisher</button>
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
@endsection --}}

@extends('admin.layouts.master')
@section('content')
      <div class="content-wrapper">

      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Create Publish</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form method="POST" role="form" action="{{ route('publisher.update', [$id]) }}">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
              <div class="box-body">
                 <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" class="form-control" id="name" name="name" placeholder="name" required>
                </div>
                 <div class="form-group">
                  <label for="contact_person">Contact Person</label>
                  <input type="text" class="form-control" id="                contact_person" name="contact_person" placeholder="Contact Person" required>
                </div>
                <div class="form-group">
                  <label for="publisher_name">Publisher Name</label>
                  <input type="text" class="form-control" id="publisher_name" name="publisher_name" placeholder="Publisher Name" required>
                </div>
                 <div class="form-group">
                  <label for="number">Number</label>
                  <input type="tel" class="form-control" id="number" name="number" placeholder="Number" required>
                </div>
                <div class="form-group">
                  <label for="opening_time">Opening Time</label>
                  <input type="text" class="form-control" id="number" name="opening_time" placeholder="Opening Time" required>
                </div>
                <div class="form-group">
                  <label for="closing_time">Closing_time</label>
                  <input type="text" class="form-control"  name="closing_time" id="number" placeholder="Closing Time" required>
                </div>
                <div class="form-group">
                  <label for="street_1">Street 1</label>
                  <input type="text" class="form-control" id="number"  name="street_1" placeholder="Street 1" required>
                </div>
                <div class="form-group">
                  <label for="street_2">Street 2</label>
                  <input type="text" class="form-control" id="number" name="street_2" placeholder="Street 2" required>
                </div>
                 <div class="form-group">
                  <label for="state">state</label>
                  <input type="text" class="form-control" id="number" name="state" placeholder="State" required>
                </div>
                 <div class="form-group">
                  <label for="country_name">Country Name</label>
                  <input type="text" class="form-control" id="number" name="country_name" placeholder="Country Name" required>
                </div>
                <div class="form-group">
                  <label for="email">Email address</label>
                  <input type="email" class="form-control" id="exampleInputEmail1"  name="email" placeholder="Enter email">
                </div>
                <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" class="form-control" id="exampleInputPassword1"  name="password" placeholder="Password">
                </div>
                <div class="form-group">
                  <label for="password_confirmation">Password</label>
                  <input type="password" class="form-control" id="exampleInputPassword1" name="password_confirmation" placeholder="Confirm Password">
                </div>
                
                
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Edit Publisher</button>
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
</div>
</div>
</div>
@endsection