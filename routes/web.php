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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/hello', function () {
    return view('hello');
});

Route::get('/hello/{name}', function($name) {
    return view('hello', compact('name'));
});

Route::get('/index', [RestaurantController::class,'index']);

Route::get('/show', [RestaurantController::class,'show']);

Route::get('/create', [RestaurantController::class,'create']);

Route::get('/reservation', function () {
    return '<h1>Réservation</h1>';
});

Route::post('/menu', function () {
    return '<h1>Menu</h1>';
});

Route::post('/employe', function () {
    return '<h1>Employés</h1>';
});

Route::put('/putreservation', function () {
    return '<h1>Modifier réservation</h1>';
});

Route::put('/putemploye', function () {
    return '<h1>Modifier employés</h1>';
});

Route::put('/putmenu', function () {
    return '<h1>Modifier menu</h1>';
});

Route::delete('/deleteemploye', function () {
    return '<h1>Supprimer employés</h1>';
});

Route::delete('/deletereservation', function () {
    return '<h1>Supprimer réservation</h1>';
});

require __DIR__.'/auth.php';
