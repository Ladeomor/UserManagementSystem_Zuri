<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

// Route::view('/', 'userCreate');
Route::post('storeData', [UserController::class, 'store']);
Route::get('/', [UserController::class, 'show']);
// Route::view('edit','editUser');
Route::get('updatedelete', [UserController::class, 'updateordelete']);
Route::get('updatedata', [UserController::class, 'update']);

?>