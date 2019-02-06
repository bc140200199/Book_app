<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


use App\User;
class RegistrationController extends Controller
{
    public function create()
    {
    	return view('User.registration.create');
    }

    public function store()
    {
    	$this->validate(request(),[
    		'name' => 'required|min:3|max:30',
    		'email' => 'email',
    		'password' => 'required|confirmed|max:15'

    	]);
    	// $user = User::create(request(['name','email','password']));
    	// auth()->login($user);
    	// return redirect()->('home');







   $data = request(['name','email','password']);

      $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);


  	 auth()->login($user);
     // \Mail::to($user)->send(new Welcome($user));
   		return redirect()->home();







    }
}

    //   $data = request(['name','email','password']);

    //   $user = User::create([
    //         'name' => $data['name'],
    //         'email' => $data['email'],
    //         'password' => Hash::make($data['password']),
    //     ]);


  	 // auth()->login($user);
    //  // \Mail::to($user)->send(new Welcome($user));
   // 		return redirect()->home();

   // }