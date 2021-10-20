<?php

use Illuminate\Support\Facades\Route;

//Namespace Auth
use App\Http\Controllers\Auth\LoginController;

//Namespace Admin
use App\Http\Controllers\Admin\AdminController;

//Namespace User
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\User\ProfileController;
use App\Http\Controllers\User\BoldFace200Controller;
use App\Http\Controllers\User\BoldFace400Controller;
use App\Http\Controllers\User\HurtController;
use App\Http\Controllers\User\EetController;
use App\Http\Controllers\User\EodController;
use App\Http\Controllers\User\CrmController;


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

Route::view('/home','welcome');


Route::group(['namespace' => 'Admin','middleware' => 'auth','prefix' => 'admin'],function(){
	
	Route::get('/',[AdminController::class,'index'])->name('admin')->middleware(['can:admin']);

	//Route Rescource
	Route::resource('/user','UserController')->middleware(['can:admin']);

	//Route View
	
	Route::view('/404-page','admin.404-page')->name('404-page');
	Route::view('/blank-page','admin.blank-page')->name('blank-page');
	Route::view('/buttons','admin.buttons')->name('buttons');
	Route::view('/cards','admin.cards')->name('cards');
	Route::view('/utilities-colors','admin.utilities-color')->name('utilities-colors');
	Route::view('/utilities-borders','admin.utilities-border')->name('utilities-borders');
	Route::view('/utilities-animations','admin.utilities-animation')->name('utilities-animations');
	Route::view('/utilities-other','admin.utilities-other')->name('utilities-other');
	Route::view('/chart','admin.chart')->name('chart');
	Route::view('/tables','admin.tables')->name('tables');
	

});

Route::group(['namespace' => 'User','middleware' => 'auth' ,'prefix' => 'user'],function(){
	Route::get('/',[UserController::class,'index'])->name('user');
	Route::get('/profile',[ProfileController::class,'index'])->name('profile');
	Route::patch('/profile/update/{user}',[ProfileController::class,'update'])->name('profile.update');
});

//bold-face-200
Route::group(['namespace' => 'User','middleware' => 'auth' ,'prefix' => 'bold-face-200'],function(){
	Route::get('/',[BoldFace200Controller::class,'index'])->name('bold.face.200');

});

//bold-face-400
Route::group(['namespace' => 'User','middleware' => 'auth' ,'prefix' => 'bold-face-400'],function(){
	Route::get('/',[BoldFace400Controller::class,'index'])->name('bold.face.400');

});

//hurt
Route::group(['namespace' => 'User','middleware' => 'auth' ,'prefix' => 'hurt'],function(){
	Route::get('/',[HurtController::class,'index'])->name('hurt');

});

//eet
Route::group(['namespace' => 'User','middleware' => 'auth' ,'prefix' => 'eet'],function(){
	Route::get('/',[EetController::class,'index'])->name('eet');

});

//eod
Route::group(['namespace' => 'User','middleware' => 'auth' ,'prefix' => 'eod'],function(){
	Route::get('/',[EodController::class,'index'])->name('eod');

});

//crm
Route::group(['namespace' => 'User','middleware' => 'auth' ,'prefix' => 'crm'],function(){
	Route::get('/',[CrmController::class,'index'])->name('crm');

});

Route::group(['namespace' => 'Auth','middleware' => 'guest'],function(){
	Route::view('/','auth.login')->name('login');
	Route::post('/',[LoginController::class,'authenticate'])->name('login.post');
});

// Other
Route::view('/register','auth.register')->name('register');
Route::view('/forgot-password','auth.forgot-password')->name('forgot-password');
Route::post('/logout',function(){
	return redirect()->to('/')->with(Auth::logout());
})->name('logout');
