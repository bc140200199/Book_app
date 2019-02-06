<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Http\Requests\StoreUserRequest;

class CreateStaffController extends Controller
{
    public function createStaff(Request $request)
    {


 		if ($request->user()->isAdmin('admin')) {

           return view('admin.staff.create');



        } else {

            return redirect('/');
        }
    }

    public function store(StoreUserRequest $request)
    {
    	dd($request);
    	User::create($request->only('email', 'password'));
    }

  


}



//  $user = User::where('email',$request->email)->first();
//             if($user->hasRole('admin'))
//             {
//                 return redirect()->route('dashboard');
//             }

//     		  // return redirect()->home();
//                           return redirect('/');


