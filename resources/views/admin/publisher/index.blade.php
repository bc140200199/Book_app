@extends('admin.layouts.master')
@section('content')

<div class="container">
 <div class="row">
  <div class="col-md-8 col-md-offset-2">
   <div class="panel panel-default">
    <div class="panel-body">
     <table class="table table-bordered" >
      <thead>
       <H1> Publishers </H1>
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
             <td>{{ $user->->name}}</td>
             <td>{{ $user->email}}</td>
             <td>{{$user->role == isPublisher() }}</td>
             <td>   
               <div class="btn-group">
    
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