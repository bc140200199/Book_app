<?php




// Route::group(['middleware' => 'admin', 'prefix' => 'admin'], function () {
//     Route::get('/', 'AdminController@admin');


    
// });


Route::get('/admin/login', [ 'uses' => 'Admin\SessionController@create', 'as' => 'login' ]);
Route::group(['prefix'=>'admin'], function(){
	Route::get('admin', 'Admin\AdminController@index')->name('dashboard');
// Route::get('/login', [ 'uses' => 'Admin\SessionController@create', 'as' => 'login' ]);

Route::post('/login', [ 'uses' => 'Admin\SessionController@store', 'as' => 'login' ]);

Route::get('/logout','Admin\SessionController@destroy');



// Route::resource('staff', 'Admin\StaffController');
Route::resource('staff', 'StaffController');

});



