<?php
use App\Http\Controllers\PagesController;
use App\Http\Controllers\TractorsController;
use App\Http\Controllers\BranchesController;
use App\Http\Controllers\DriversController;
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

Route::get('/', [PagesController::class,'index']);

Route::get('/contacts', [PagesController::class,'contacts']);
Route::post('create',[TractorsController::class,'create']);
Route::post('tractors',[TractorsController::class,'index']);
Route::post('edit/{id}',[TractorsController::class,'edit']);
Route::post('update/{id}',[TractorsController::class,'update']);

Route::resource('branches',BranchesController::class);
Route::resource('drivers',DriversController::class);
Route::resource('tractors',TractorsController::class);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
