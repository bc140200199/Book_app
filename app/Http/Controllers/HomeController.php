<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index()
    // {
    //     return view('home');
    // }





    public function index(Request $request)
  {
    // $request->user()->authorizeRoles(['admin', 'moderator']);
    // return view('admin.index');
  }
  
  // public function someAdminStuff(Request $request)
  // {
  //   $request->user()->authorizeRoles('manager');
  //   return view(‘some.view’);
  // }
  
}