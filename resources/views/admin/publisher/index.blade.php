@extends('admin.layouts.master')
@section('content')
<div class="content-wrapper">
    <div class="box">
      <div class="box-header">
        <h3 class="box-title">Publishers</h3>
      </div>
      <div class="box-body no-padding">
     <table class="table table-striped" >
              <tr>
                <th style="width: 10px">User</th>
                  <th>Email</th>
                  <th>Roles</th>
                  <th style="width: 40px">Action</th>
                </tr>
      {{--  <H1> Publishers </H1>
         <tr>
           <th>Users</th>
           <th>Email</th>
           <th>Role</th>
           <th>Action</th>
         </tr>
      </thead>
       <tbody> --}}
         @forelse($users as $user) 
           <tr>
             <td>{{ $user->name}}</td>
             <td>{{ $user->email}}</td>
             <td>{{$user->roles->first()->name}}</td>   
             <td>   
               <div class="btn-group">
                <div class="action">
                 <a href="{{ route('publisher.edit', $user->id)}}" class="btn btn-primary btn-block btn-flat">Edit</a>
                </div>
                 &nbsp;
                <form action="{{ route('publisher.destroy', $user->id ) }}" method="POST">
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
       {{-- </tbody> --}}
     </table>
    </div>
   </div>
  </div>
 </div>
</div>
@endsection