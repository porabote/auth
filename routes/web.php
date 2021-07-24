<?php

use Illuminate\Support\Facades\Route;
Use App\Http\Controllers\UsersController;

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


Route::post('users/check/', [ UsersController::class, 'check' ]);
Route::post('users/login/', [ UsersController::class, 'login' ]);
Route::get('users/login/', [ UsersController::class, 'login' ]);
Route::get('users/registration', [ UsersController::class, 'registration' ]);
