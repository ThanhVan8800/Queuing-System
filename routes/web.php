<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DeviceController;

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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/logout',[App\Http\Controllers\Auth\LoginController::class,'logout'])->name('logout');

Route::middleware(['auth']) -> group(function(){
        Route::prefix('admin') -> group(function(){
            Route::get('main',[MainController::class,'index']);
            
            Route::prefix('devices') -> group(function(){
                    //thiết bị
                    Route::resource('device',DeviceController::class);
                    // Route::get('index',[DeviceController::class,'index']);
                    // Route::get('add',[DeviceController::class,'create'])->name('create');
                    // Route::post('add',[DeviceController::class,'store']);
            });
            
        });
});
