<?php

use App\Http\Controllers\masyarakat\AuthController;
use App\Http\Controllers\masyarakat\MasyarakatController;
use App\Http\Controllers\masyarakat\TableController;
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
    return view('masyarakat/page/index');
});

Route::get('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'register']);
Route::get('/', [MasyarakatController::class, 'index']);
Route::get('/table', [TableController::class, 'table']);
Route::get('/table/detail', [TableController::class, 'detail']);
