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

Route::view('/home','welcome')->name('home');

Route::view('/term-and-condition', 'term_n_condition');
Route::view('/privacy-policy', 'privacy_policy');
Route::view('/contact-us', 'contact_us');


Route::group(['namespace' => 'Admin','middleware' => 'auth','prefix' => 'admin'],function(){
	
	Route::get('/user',[AdminController::class,'index'])->name('admin')->middleware(['can:admin']);

	Route::get('/adduser',[AdminController::class, 'adduser'])->name('adduser');
	Route::post('/insertdata',[AdminController::class, 'insertdata'])->name('insert.data');

	Route::get('/editdata/{id}',[AdminController::class, 'editdata'])->name('edit.data');
	Route::post('/updatedata/{user}',[AdminController::class, 'updatedata'])->name('update.data');
	Route::get('/delete/{id}',[AdminController::class, 'delete'])->name('delete');

	//export Excel
	Route::get('/exportexcel',[AdminController::class, 'exportexcel'])->name('export.excel');

	//export Excel
	Route::post('/importexcel',[AdminController::class, 'importexcel'])->name('import.excel');

	

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
	Route::get('/download-pdf/{boldface}', [BoldFace200Controller::class, 'downloadPdf'])->name('bold.face.200.download-pdf');
});

//bold-face-400
Route::group(['namespace' => 'User','middleware' => 'auth' ,'prefix' => 'bold-face-400'],function(){
	Route::get('/',[BoldFace400Controller::class,'index'])->name('bold.face.400');
	Route::get('/download-pdf/{boldface}', [BoldFace400Controller::class, 'downloadPdf'])->name('bold.face.400.download-pdf');

});

//hurt
Route::group(['namespace' => 'User','middleware' => 'auth' ,'prefix' => 'hurt'],function(){
	Route::get('/',[HurtController::class,'index'])->name('hurt');
	Route::get('/detail-hurt',[HurtController::class,'detailhurt'])->name('detail.hurt');

	Route::get('/pdf/{hurt}', [HurtController::class, 'downloadPdf'])->name('hurt.download-pdf');

});

//eet
Route::group(['namespace' => 'User','middleware' => 'auth' ,'prefix' => 'eet'],function(){
	Route::get('/',[EetController::class,'index'])->name('eet');

});

//eod
Route::middleware(['auth'])->group(function () {
	Route::resource('eod', EodController::class);
});
// Route::group(['namespace' => 'User', 'middleware' => 'auth'],function(){
// 	// Route::get('/',[EodController::class,'index'])->name('eod');
// 	// Route::get('/add-eod',[EodController::class,'addeod'])->name('add.eod');
// 	// Route::post('/add-eod',[EodController::class,'store'])->name('eod.store');
// 	// Route::get('/detail-eod/{eod}',[EodController::class,'detaileod'])->name('detail.eod');
// 	// Route::put('/update-eod/{eod}',[EodController::class,'updateeod'])->name('update.eod');
// 	// Route::delete('/delete-eod/{eod}', [EodController::class, 'destroy'])->name('eod.destroy');
// 	Route::resource('eod', EodController::class);
// });

//crm
Route::group(['middleware' => 'auth'],function(){
	// Route::get('/',[CrmController::class,'index'])->name('crm');
	// Route::get('/add-crm',[CrmController::class,'addcrm'])->name('add.crm');
	// Route::get('/detail-crm',[CrmController::class,'detailcrm'])->name('detail.crm');
	// Route::get('/update-crm',[CrmController::class,'updatecrm'])->name('update.crm');
	Route::resource('crm', CrmController::class);
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
