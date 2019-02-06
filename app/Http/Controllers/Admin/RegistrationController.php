<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Hash;

class RegistrationController extends Controller
{
    public function create()
    {
    	return view('admin.registration.create');
    }

    public function register(Request $request)
    {
    

    	$data = request(['name','email','password']);

      $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);

  	 auth()->login($user);
    
   		return redirect()->home();

      
    }

}
