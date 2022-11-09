<?php

use App\Http\Controllers\adminInLightController;

use App\Http\Controllers\adminOutLightController;
use App\Http\Controllers\appliancesController;
use App\Http\Controllers\cameraController;
use App\Http\Controllers\climateController;
use App\Http\Controllers\coolerController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\fanController;
use App\Http\Controllers\fridgeController;
use App\Http\Controllers\inLampController;
use App\Http\Controllers\lampController;
use App\Http\Controllers\lightController;
use App\Http\Controllers\outLampController;
use App\Http\Controllers\roleController;
use App\Http\Controllers\tvController;
use App\Http\Controllers\userController;
use App\Http\Controllers\washingMachineController;
use App\Models\camera;
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
    Route::resource('adminInLights', adminInLightController::class);
    Route::resource('adminOutLights', adminOutLightController::class);

    Route::patch('users/updateStatus/{id}', [UserController::class, 'updateStatus'])->name('users.updateStatus');
    Route::resource('users', UserController::class);
});



Route::get('/dashboard', [dashboardController::class, 'index'])->name('dashboard')->middleware('EnsureLogin');
Route::get('/cameras', [cameraController::class, 'index'])->name('cameras')->middleware('EnsureLogin');
Route::get('/lights', [lightController::class, 'index'])->name('lights')->middleware('EnsureLogin');
Route::get('/climate', [climateController::class, 'index'])->name('climate')->middleware('EnsureLogin');
Route::get('/appliances', [appliancesController::class, 'index'])->name('appliances')->middleware('EnsureLogin');



Route::patch('cameras/updateStatus/{id}', [cameraController::class, 'updateStatus'])->name('camerasUpdateStatus');
Route::patch('cameras/updateStatusNightVision/{id}', [cameraController::class, 'updateStatusNightVision'])->name('camerasUpdateStatusNightVision');
Route::patch('cameras/updateStatusTimeLapse/{id}', [cameraController::class, 'updateStatusTimeLapse'])->name('camerasUpdateStatusTimeLapse');

Route::patch('lights/inLampUpdateStatus/{id}', [inLampController::class, 'UpdateStatus'])->name('inLampUpdateStatus');
Route::patch('lights/inLampUpdateDim/{id}', [inLampController::class, 'UpdateDim'])->name('inLampUpdateDim');

Route::patch('lights/outLampUpdateStatus/{id}', [outLampController::class, 'UpdateStatus'])->name('outLampUpdateStatus');

Route::patch('coolers/coolerDesiredTemperatureUpdate/{id}', [coolerController::class, 'UpdateDesiredTemperature'])->name('coolerDesiredTemperatureUpdate');

Route::patch('fans/updateStatus/{id}', [fanController::class, 'updateStatus'])->name('fanUpdateStatus');
Route::patch('fans/fanSpeedUpdate/{id}', [fanController::class, 'UpdateDim'])->name('fanSpeedUpdate');

Route::patch('fridge/fridgeTeperatureUpdate/{id}', [fridgeController::class, 'UpdateDim'])->name('fridgeTeperatureUpdate');

Route::patch('tv/updateStatus/{id}', [tvController::class, 'updateStatus'])->name('tvStatusUpdate');
Route::patch('tv/tvVolumeUpdate/{id}', [tvController::class, 'UpdateDim'])->name('tvVolumeUpdate');

Route::patch('cameras/updateStatusDashboard/{id}', [dashboardController::class, 'updateStatus_inLamp'])->name('camerasUpdateStatusDashboard');
Route::patch('inLamps/updateStatusDashboard/{id}', [dashboardController::class, 'updateStatus_outLamp'])->name('inLampsUpdateStatusDashboard');
Route::patch('outLamps/updateStatusDashboard/{id}', [dashboardController::class, 'updateStatus_camera'])->name('outLampsUpdateStatusDashboard');
