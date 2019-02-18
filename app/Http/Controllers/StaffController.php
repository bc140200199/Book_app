<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
  public function index(Request $request)
    {
      if($request->User()->isAdmin('admin')) {
        $users = User::paginate(15);
         return view('admin.staff.index', compact('users'));
         } else {
           return redirect('/');
         }

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
  public function create(Request $request)
   {
     if ($request->User()->isAdmin('admin')) {
         return view('admin.staff.create');
         } else {
            return redirect('/');
          }
   }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
  public function store(Request $request, User $user)
    {
   $this->validate(request(),[
     'name' => 'required',
     'email' => 'required|email',
     'password' => 'required|confirmed',
     ]);
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $role = Role::find($request->roles);
        $user->save();
        $role->users()->attach($user);  
         return redirect()->route('staff.index');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
  public function show(Request $request ,$id)
   {

   }
   /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
  public function edit(Request $request , User $user ,$id)
   {
    return view('admin.staff.edit', compact('user','id'));
   }
   /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
  public function update($id ,Request $request,User $user)
   {
     $this->validate($request,[
       'name'=>'required',
       'email'=>'required',
       'password'=>'required|confirmed',
       ]);
         $user = User::find($id); 
         $user->update($request->all());
         $user->name = $request->name;
         $user->email = $request->email;
         $user->password = Hash::make($request->password);
         $role = Role::find($request->roles);
         $user->save();
         $role->users()->attach($user);  
         $user->update($request->all());
          return redirect()->route('staff.index');
   }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
  public function destroy($id)
   {
     $User = User::find($id);
      $User->delete();
       return redirect()->route('staff.index');
   }
    
}
