
@extends('admin.layouts.master')
@section('content')
<div class="content-wrapper">
  <div class="row">
    <div class="col-md-6">

  <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Publish Book</h3>
            </div>
   <form role="form" action="{{route('book.store')}}" method="POST" >
      {{ csrf_field() }}
      <div class="box-body">
     <div class="form-group">
        <label for="description">Name:</label>
        <input type="text" class="form-control" name="description" required>
     </div>
     <div class="form-group">
        <label for="category">Category:</label>
        <input type="text" class="form-control" name="category" required>
     </div>
     <div class="form-group">
        <label for="language">Language:</label>
        <input type="text" class="form-control" name="language" required>
     </div>
     <div class="form-group">
        <label for="author_name">Author Name:</label>
        <input type="text" class="form-control" name="author_name" required>
     </div>
      <div class="form-group">
        <label for="weight">Weight:</label>
        <input type="text" class="form-control" name="weight" required>
     </div>
      <div class="form-group">
        <label for="no_of_pages">No.of Pages:</label>
        <input type="text" class="form-control" name="no_of_pages" required>
     </div>
      <div class="form-group">
        <label for="price">Price:</label>
        <input type="text" class="form-control" name="price" required>
     </div>
      <div class="form-group">
        <label for="upload_title_page">Upload Title Page:</label>
        <input type="file" class="form-control" name="upload_title_page" required>
     </div>
     <div class="form-group">
        <label for="upload_softcopy">Upload Softcopy:</label>
        <input type="file" class="form-control" name="upload_softcopy" required>
     </div>
     <div class="form-group">
      <label for="active">Active:</label>
        <br>
       <input type="checkbox" name="active" value="1"> Yes<br>
       <input type="checkbox" name="active" value="0"> No<br>
     </div>
   </div>
       <div class="box-footer">
          <button type="submit" class="btn btn-primary">Publish Book</button>
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
