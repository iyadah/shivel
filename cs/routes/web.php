<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;

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

Route::get('/products', [ProductsController::class, 'index']);

Route::get('/products/about', [ProductsController::class, 'about']);

Route::get('/products/{id}', [ProductsController::class, 'show']);

// Route to /users
Route::get('/users', function () {
    return 'Here is the users page';
});

// Route to users array
Route::get('/users', function () {
    return ['hell', 'o', 'there'];
});

//Route as JSON

Route::get('/users', function () {
    return response()->json([
        'name' => 'iyad',
        'age' => 13
    ]);
});
