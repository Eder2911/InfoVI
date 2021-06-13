<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dashboard\EstudioController;
use App\Http\Controllers\dashboard\OperadorController;
use App\Http\Controllers\dashboard\AuditTrailController;

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

Route::resource('dashboard/estudio', EstudioController::class);

//Route::resource('dasboard/estudio', AuditTrailController::class);
//Route::resource('dasboard/estudio', OperadorController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
