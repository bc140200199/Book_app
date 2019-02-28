@extends('admin.layouts.master')
@section('content')
{{-- <div class="container">
 <div class="row">
  <div class="col-md-12">
   <div class="panel panel-default">
    <div class="panel-body">
     <table class="table table-bordered">
      <div align="left"> 
      <thead>
       <H1> Books </H1> --}}

      <div class="content-wrapper">
    <div class="box">
      <div class="box-header">
        <h3 class="box-title">Books List</h3>
      </div>
      <div class="box-body no-padding">
     <table class="table table-striped" >
          <tr>
           <th style="width: 10px">Description</th>
           <th>Category</th>
           <th>language</th>
           <th>Author Name</th>
           <th>Weight</th>
           <th>No of Pages</th>
           <th>Price</th>
           <th>Upload Title Page</th>
           <th>upload Softcopy</th>
           <th>Active</th>
           <th style="width: 40px">Action</th>
           </tr>
         @forelse ($books as $book) 
           <tr>
             <td>{{ $book->description}}</td>
             <td>{{ $book->category}}</td>
              <td>{{ $book->language}}</td>
             <td>{{ $book->author_name}}</td>
             <td>{{ $book->weight}}</td>
             <td>{{ $book->no_of_pages}}</td>
             <td>{{ $book->price}}</td>
             <td>{{ $book->upload_title_page}}</td>
             <td>{{ $book->upload_softcopy}}</td>
             @if($book->active==1)
             <td> Yes</td>
             @else
             <td>No</td>
             @endif
             <td>   
               <div class="form-group">
                <div class="action">
                 <a href="{{ route('book.edit', $book->id)}}" class="btn btn-primary btn-block btn-flat">Edit</a>
                </div>
                 &nbsp;
                <form role="form" action="{{ route('book.destroy', $book->id ) }}" method="POST">
                   <input type="hidden" name="_method" value="DELETE">
                     {{ csrf_field() }}
                     {{method_field('DELETE')}}
                   <button class="btn btn-danger delete btn-block btn-flat">Delete</button>
                </form>
               </div>
             </td>
           </tr>
              @empty
           <tr>
            <td colspan="3">No entries found.</td>
           </tr>

         @endforelse
       </tbody>
     </table>
    </div>
   </div>
  </div>
 </div>
</div>
 @endsection