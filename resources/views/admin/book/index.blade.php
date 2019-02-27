@extends('admin.layouts.master')
@section('content')
<div class="container">
 <div class="row">
  <div class="col-md-12">
   <div class="panel panel-default">
    <div class="panel-body">
     <table class="table table-bordered">
      <div align="left"> 
      <thead>
       <H1> Books </H1>
        <tr>
           <th>Description</th>
           <th>Category</th>
           <th>language</th>
           <th>Author Name</th>
           <th>Weight</th>
           <th>No of Pages</th>
           <th>Price</th>
           <th>Upload Title Page</th>
           <th>upload Softcopy</th>
           <th>Active</th>
           <th>Action</th>

        </tr>
      </thead>
       <tbody>

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
               <div class="btn-group">
                <div class="action">
                 <a href="{{ route('book.edit', $book->id)}}" class="btn btn-primary">Edit</a>
                </div>
                 &nbsp;
                <form action="{{ route('book.destroy', $book->id ) }}" method="POST">
                   <input type="hidden" name="_method" value="DELETE">
                     {{ csrf_field() }}
                     {{method_field('DELETE')}}
                   <button class="btn btn-danger delete">Delete</button>
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