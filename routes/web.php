<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DeviceController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\NumberLevelController;
use App\Http\Controllers\SettingSystemController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\DashboardController;
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
                Route::get('userinfo',[UserController::class,'info']);
                Route::prefix('dashboards')->group(function(){
                        Route::resource('dashboard', DashboardController::class);
                });
                Route::prefix('devices') -> group(function(){
                        //thiết bị
                        Route::resource('device',DeviceController::class);
                        // Route::get('index',[DeviceController::class,'index']);
                        // Route::get('add',[DeviceController::class,'create'])->name('create');
                        // Route::post('add',[DeviceController::class,'store']);
                });
                Route::prefix('services')->group(function(){
                        Route::resource('service', ServiceController::class);
                });
                Route::prefix('num_lvs')->group(function(){
                        Route::resource('numlv', NumberLevelController::class);
                });
                Route::prefix('settings')->group(function(){
                        Route::resource('setting', SettingSystemController::class);
                });
                Route::prefix('users')->group(function(){
                        Route::resource('user', UserController::class);
                });
                Route::prefix('settings')->group(function(){
                        Route::resource('setting', RoleController::class);
                });
                Route::prefix('reports')->group(function(){
                        Route::resource('report', ReportController::class);
                });
                //upload  
                Route::post('upload/services',[UploadController::class,'store']);
        });
});
