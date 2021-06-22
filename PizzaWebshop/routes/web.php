<?php

use Illuminate\Support\Facades\Route;
// 

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


// And we moved all the pizza functions from here to the controller we can get rid of the functions here, we do need to refrence the actions/functions to the routes

Route::get('/', function () {
    return view('welcome');});
// We can use ->name('pizzas.index') to define a named url so when we change the url location of that page it will change automatically in all pages we used it in, also we need to refrence the name.then the page route name like index
// This here defines the touting that is happening when we type http://localhost/pizzas for this example and that will return a view from that page after proccessing it
Route::get('/pizzas', 'App\Http\Controllers\PizzaController@index')->name('pizzas.index')->middleware('auth');

Route::get('/pizzas/create', 'App\Http\Controllers\PizzaController@create')->name('pizzas.create');

Route::post('/pizzas', 'App\Http\Controllers\PizzaController@store')->name('pizzas.store');

// So this is another view type but has to do with wildcards/id routes. What this does is that it grabs the id out of the url and stores it into the $id parameter within the function, then it goes and executes whatever inside of the method
Route::get('/pizzas/{id}', 'App\Http\Controllers\PizzaController@show')->name('pizzas.show')->middleware('auth');


Route::delete('/pizzas/{id}', 'App\Http\Controllers\PizzaController@destroy')->name('pizzas.destroy')->middleware('auth');

// We can disable register function by setting it to false
Auth::routes([
    'register' => false
]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


