<?php

use App\Http\Controllers\EmailController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/send1', [EmailController::class, 'send1']);
Route::get('/send2', [EmailController::class, 'send2']);
Route::get('/send3', [EmailController::class, 'send3']);
Route::get('/send4', [EmailController::class, 'send4']);
Route::get('/send5', [EmailController::class, 'send5']);
