<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\BookingController;
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
    return view('home');
});


Route::get('cafemenu', [MenuController::class,'index'] );

Route::get('reservation', [BookingController::class,'create'] );
Route::post('reservation', [BookingController::class,'store'] );

Route::get('home', [ContactController::class,'create'] );
Route::post('home', [ContactController::class,'store'] );

Auth::routes();

Route::get('/adminpanel', [HomeController::class, 'index'])->name('adminpanel');

Route::get('adminpanel', [BookingController::class,'index'] );

Route::get('addmenu', [MenuController::class,'create'] );
Route::post('addmenu', [MenuController::class,'store'] );

Route::get('displaymenu', [MenuController::class,'display'] );

Route::get('displaycontact', [ContactController::class,'display'] );

Route::get('/update-menu', [MenuController::class,'updateMenu'] )->name('menu.update');

Route::get('/edit-menu/{id}', [MenuController::class,'updateForm'] );

Route::get('/{id}', [MenuController::class,'deleteMenu']);

Route::get('/delete-contact/{id}', [ContactController::class,'deleteContact']);

Route::get('/confirm-status/{id}', [BookingController::class,'updateStatus'] )->name('statuss.update');












