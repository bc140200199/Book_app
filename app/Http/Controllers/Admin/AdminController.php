<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class AdminController extends Controller
{

  public function __construct()
    {
      $this->middleware('auth');
      // $this->middleware('IsAdmin');

      // $this->middleware('role:ROLE_ADMIN');
      // $this->middleware('role:IsAdmin');
    }

  public function index()
   {
     return view('admin.index');
   }
}
