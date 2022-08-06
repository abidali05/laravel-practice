<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FileController;
use App\Http\Controllers\ChildinfoController;
use App\Http\Controllers\ChangePasswordController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AjaxController;
use App\Http\Controllers\NotificationController;
use App\Jobs\SendEmailJob;



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
Route::post('add-childinfo', [ChildinfoController::class, 'childInfo'])->name('childInfo');
Route::get('mul-images', [FileController::class, 'mulimages'])->name('mulimages');
Route::post('upload-images', [FileController::class, 'Upload'])->name('Upload');

Route::get('change-password', 'App\Https\Controllers\ChangePasswordController@index');
Route::post('update-password', 'ChangePasswordController@store')->name('change.password');

// Session
Route::get('session-page', [SessionController::class, 'sessionPage']);
Route::post('store-data', [SessionController::class, 'storeData']);
Route::get('get-data', [SessionController::class, 'getData']);

Route::get('/send-notification', [NotificationController::class, 'sendOfferNotification']);

Route::get('email-test', function(){
  
    $details['email'] = 'mhrabid558@gmail.com';
  
    dispatch(new App\Jobs\SendEmailJob($details));
  
    dd('done');
});

Route::resource('/userData','App\Http\Controllers\AjaxController');

Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
    Route::resource('products', ProductController::class);
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
