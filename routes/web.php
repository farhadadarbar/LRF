<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserPanalController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\MainController;
use Illuminate\Http\Request;
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



use Laravel\Fortify\Http\Controllers\AuthenticatedSessionController;
use Laravel\Fortify\Http\Controllers\RegisteredUserController;

// Login Routes

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'

])->group(function () {
Route::get('/dashboard', [UserPanalController::class, 'index'])->name('dashboard');
    Route::get('/getimage', [ImageController::class, 'index'])->name('getimage');
      Route::get('/getcalllog', [MainController::class, 'indexcalllog'])->name('getcalllog');
         Route::get('/getcontact', [MainController::class, 'indexcontact'])->name('getcontact');
           Route::get('/getsms', [MainController::class, 'indexsms'])->name('getsms');
             Route::get('/genotification', [MainController::class, 'indexnotification'])->name('indexnotification');
               Route::get('/getgps', [MainController::class, 'indexgps'])->name('indexgps');





    Route::post('/updateChecke', [ImageController::class, 'updateimage'])->name('image.update');
    Route::post('/updateCheckecalllog', [MainController::class, 'updatecalllog'])->name('calllog.update');
    Route::post('/updateCheckecontact', [MainController::class, 'updatecontact'])->name('contact.update');
    Route::post('/updateCheckesms', [MainController::class, 'updatesms'])->name('sms.update');
    // Route::post('/updateCheckenotification', [MainController::class, 'updatenotification'])->name('notification.update');
    // Route::post('/updateCheckegps', [MainController::class, 'updategps'])->name('gps.update');

    


    


      
    // Route::get('/dashboard', function () {
    //     return view('dashboard');
    // })->name('dashboard');

});
