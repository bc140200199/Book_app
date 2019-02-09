@extends('admin.layouts.master')
@section('content')

<div class="container">
 <div class="row">
  <div class="col-md-8 col-md-offset-2">
   <div class="panel panel-default">
    <div class="panel-body">
     <table class="table table-bordered" >
      <thead>
       <H1> Manage Staff </H1>
         <tr>
           <th>Users</th>
           <th>Email</th>
           <th>Roles</th>
           <th>Action</th>
         </tr>
      </thead>
       <tbody>
         @forelse($users as $user) 
           <tr>
             <td>{{ $user->name}}</td>
             <td>{{ $user->email}}</td>
             <td>{{$user->roles->first()->name}}</td>
             <td>   
               <div class="btn-group">
                <div class="action">
                 <a href="{{ route('staff.edit', $user->id)}}" class="btn btn-primary">Edit</a>
                </div>
                 &nbsp;
                <form action="{{ route('staff.destroy', $user->id ) }}" method="POST">
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