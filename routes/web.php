<?php

use App\Http\Controllers\roleController;
use App\Http\Controllers\userController;
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

Route::get('/', function () {
    return redirect('/dashboard');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::prefix('/modir')->middleware('role:Admin')->group(function () {
    Route::get('/', function () {
        return view('layouts.admin');
    });
    // Route::get('/showUsers', function () {
    //     return view('admin.showUser')->name('show_users');
    // });
    // Route::get('/createUser', function () {
    //     return view('admin.createUser');
    // });
    Route::resource('roles', RoleController::class);

    Route::patch('users/updateStatus/{id}', [UserController::class, 'updateStatus'])->name('users.updateStatus');
    Route::resource('users', UserController::class);
});
Route::get('/dashboard', function () {
    return view('myHome.Dashboard');
})->name('dashboard');
Route::get('/lights', function () {
    return view('myHome.Lights');
})->name('lights');
Route::get('/cameras', function () {
    return view('myHome.Cameras');
})->name('cameras');
Route::get('/climate', function () {
    return view('myHome.Climate');
})->name('climate');
Route::get('/appliances', function () {
    return view('myHome.Appliances');
})->name('appliances');
