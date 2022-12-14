<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\productController;

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
Route::view('/', 'insert');

Route::post('insertData', [productController::class, 'insert']);
Route::get('/', [productController::class, 'getData']);
Route::view('update','update');
Route::get('updatedelete', [productController::class, 'updateordelete']);
Route::get('updateData', [productController::class, 'update']);