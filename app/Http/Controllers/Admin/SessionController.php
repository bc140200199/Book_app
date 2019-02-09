<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
class SessionController extends Controller
{
  public function __construct()
   {
     $this->middleware('guest', ['except' =>'destroy']);
   }

  public function create()
   {
     return view('admin.sessions.create');
   }
 
  public function store(request $request)
   {
    	if (!auth()->attempt(request(['email','password']))) {
              return back()->withErrors([
               'message' => 'Please check your credential and try again' 
       ]);

    		} 
         $user = User::where('email',$request->email)->first();
          if ($user->isAdmin('admin')) {
                return redirect()->route('dashboard');
        } elseif ($user->isModerator('moderator')) {
               return redirect()->route('dashboard');
        } else {
               return redirect('/');
            }
   }	

  public function destroy()
   {
     auth()->logout();
      return redirect('/');
   }
}
