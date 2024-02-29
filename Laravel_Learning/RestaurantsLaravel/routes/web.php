<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RestaurantController;

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

Route::get('/hello',function(){
    return view('hello');
});

Route::get('/hello/{name}',function($name){
    return view('hello',compact('name'));
});

// route restaurant
Route::prefix('restaurant')->group(function () {
    Route::get('/', [RestaurantController::class,'index'])->name('restaurant.index');

    Route::get('/create', [RestaurantController::class,'create'])->name('restaurant.create');

    Route::post('/create',[RestaurantController::class,'store'])->name('restaurant.store');

    Route::get('/{post:id}', [RestaurantController::class,'show'])->name('restaurant.show');

    Route::get('/edit/{post:id}', [RestaurantController::class,'edit'])->name('restaurant.edit');

    Route::put('/update/{post:id}', [RestaurantController::class,'update'])->name('restaurant.update');

    Route::delete('/delete/{post:id}', [RestaurantController::class,'destroy'])->name('restaurant.destroy');
});

