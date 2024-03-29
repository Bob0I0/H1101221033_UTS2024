<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;
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
Route::get('/main', [WebController::class, 'Home']);
Route::get('/gaji', [WebController::class, 'Pay']);
Route::get('/pegawai', [WebController::class, 'Master']);
Route::get('/attend', [WebController::class, 'Presensi']);
