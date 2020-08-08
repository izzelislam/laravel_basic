<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes(['verify'=>true]);

Route::middleware(['auth','verified'])->group(function(){
	Route::get('/home', 'HomeController@index')->name('home');
	Route::get('/','HomeController@index');

	Route::get('/guardians', 'GuardianController@index');
	Route::get('/guardians/create', 'GuardianController@create');
	Route::post('/guardians/store', 'GuardianController@store');
	Route::get('/guardians/edit/{id}', 'GuardianController@edit');
	Route::put('/guardians/update/{id}', 'GuardianController@update');
	Route::delete('/guardians/delete/{id}', 'GuardianController@delete');

	Route::get('/students', 'StudentController@index');
	Route::get('/students/create', 'StudentController@create');
	Route::post('/students/store', 'StudentController@store');
	Route::get('/students/edit/{id}', 'StudentController@edit');
	Route::put('/students/update/{id}', 'StudentController@update');
	Route::delete('/students/delete/{id}', 'StudentController@delete');

	Route::prefix('/admin')->namespace('Admin')->name('admin.')->group(function(){
		// Route::get('/admin/users', 'UserController@index')->name('index');
		// Route::get('/admin/users/create', 'UserController@create')->name('create');
		// Route::post('/admin/users/store', 'UserController@store')->name('store');
		// Route::get('/admin/users/edit/{id}', 'UserController@edit')->name('edit');
		// Route::put('/admin/users/update/{id}', 'UserController@update')->name('update');
		// Route::delete('/admin/users/delete/{id}', 'UserController@destroy')->name('destroy');
		Route::resource('/users','UserController');
	});
});

// Route::get('/login','AuthController@login');
// Route::get('/register','AuthController@register');
// Route::post('/registration-procces','AuthController@registrationProcces');
// Route::post('/login-procces','AuthController@loginProcces');
// Route::post('/logout','AuthController@logout');
// Auth::routes();




