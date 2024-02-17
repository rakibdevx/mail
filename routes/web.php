<?php

use App\Http\Controllers\EmailController;
use App\Http\Controllers\EmailTamplateController;
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

Route::get('/',[EmailTamplateController::class,'index'])->name('index');
Route::get('/edit/{id}',[EmailTamplateController::class,'edit'])->name('edit');
Route::post('/update/{id}',[EmailTamplateController::class,'update'])->name('update');
Route::get('/create',[EmailTamplateController::class,'create'])->name('create');
Route::post('/store',[EmailTamplateController::class,'store'])->name('store');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
