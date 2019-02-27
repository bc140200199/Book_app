<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
// @include('routes.admin.php');



// require('admin.php');
include('admin.php'); 



    
 
Route::group(['prefix'=>'user'], function(){
Route::get('/register', 'RegistrationController@create');
Route::post('/register', 'RegistrationController@store');
});


// Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
