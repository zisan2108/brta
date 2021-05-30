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



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['as'=>'user.', 'namespace'=>'User', 'middleware'=>['auth','role:native']],function(){
	Route::get('/user', 'UserController@index');

});

Route::group(['as'=>'user.', 'namespace'=>'Fuser', 'middleware'=>['auth','role:foreign']],function(){
	Route::get('/foreigner', 'FuserController@index');

});

Route::group(['namespace'=>'Administration', 'middleware'=>['auth','role:admin']],function(){
	Route::get('/dashboard', 'AdminController@index');
	Route::resource('/dashboard/user', 'UserController');

});

Route::group(['as'=>'police.', 'namespace'=>'Police', 'middleware'=>'auth'],function(){
	Route::get('/pdashboard', 'PoliceController@index');

});

Route::group(['as'=>'examiner.', 'namespace'=>'Examiner', 'middleware'=>'auth'],function(){
	Route::get('/edashboard', 'ExaminerController@index');

});

Route::group(['as'=>'traffic.', 'namespace'=>'Traffic', 'middleware'=>'auth'],function(){
	Route::get('/tdashboard', 'TrafficController@index');

});




