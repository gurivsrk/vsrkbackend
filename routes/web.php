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

///// Frontend Group 
Route::group(['as' => 'Frontend.', 'namespace' => 'Frontend'], function () {
	Route::get('/', [App\Http\Controllers\web\homeController::class, 'index'])->name('index');
});





//////// Admin group

Auth::routes();

Route::get('/vsrk-admin', 'App\Http\Controllers\HomeController@index')->name('vsrkAdmin')->middleware('auth');

Route::group(['middleware' => 'auth'], function () {

	///Image Functions
	Route::post('media/addMedia',  'App\Http\Controllers\imageController@addMedia')->name('storeMedia');
	Route::post('media/deleteMedia',  'App\Http\Controllers\imageController@deleteMedia')->name('deleteMedia');
	
	/// Blog
	Route::get('vsrk-admin/all-blogs',  'App\Http\Controllers\blogController@index')->name('all-blogs');

	/// Categories And Tags
	Route::resource('vsrk-admin/cateTag',  'App\Http\Controllers\CategoryTagContoller');

	/// Team
	Route::resource('vsrk-admin/team', 'App\Http\Controllers\TeamController');
	
	Route::get('vsrk-admin/all-forms', function () {
		return view('pages.all-form');
	})->name('all-forms');


	
	
	Route::get('typography', function () {
		return view('pages.typography');
	})->name('typography');

	Route::get('icons', function () {
		return view('pages.icons');
	})->name('icons');

	Route::get('map', function () {
		return view('pages.map');
	})->name('map');

	Route::get('notifications', function () {
		return view('pages.notifications');
	})->name('notifications');

	Route::get('rtl-support', function () {
		return view('pages.language');
	})->name('language');

	Route::get('upgrade', function () {
		return view('pages.upgrade');
	})->name('upgrade');

	Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);
});

