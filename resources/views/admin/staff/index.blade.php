<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<div class="container">
  <div class="row">
   <div class="col-md-8 col-md-offset-2">
    <div class="panel panel-default">
     <div class="panel-body">
      <table class="table table-bordered" >
		<thead>
        <tr>
          <th>Users</th>
          <th>Email</th>
          <th>Role</th>
      	</tr>
       </thead>
       <tbody>
        @forelse($Users as $User) 
         <tr>
          <td>{{ $user->name}}</td>
          <td>{{ $user->email}}</td>
          {{-- <td>{{ $user->admin}}</td> --}}
          @if($user->role)
            <td> admin</td>
            @else
            <td>user</td>
        @endif
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
</body>
</html>