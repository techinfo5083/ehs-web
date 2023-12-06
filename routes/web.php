<?php

use App\Http\Controllers\KendaraanController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [loginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [loginController::class, 'authenticate']);
Route::post('/logout', [loginController::class, 'logout']);

Route::get('/dashboard/user', [UserController::class, 'index']);
Route::get('/dashboard/kendaraan', [KendaraanController::class, 'index'])->middleware('auth');


Route::post('/register', [UserController::class, 'store']);

Route::get('/dashboard', function () {
    $data = [
        'tittle' => 'Dashboard'
    ];
    return view('admin.dashboard', $data);
})->middleware('auth');
