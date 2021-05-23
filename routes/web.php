<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth;
use App\Http\Controllers\Dashboard;
use App\Http\Controllers\Admin;


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
    return redirect()->route('app.login');
});

Route::get('sign-in', [Auth\Login::class, 'index'])->name('app.login');
Route::post('sign-in/process', [Auth\Login::class, 'login'])->name('login.process');

Route::get('sign-up', [Auth\Register::class, 'index'])->name('app.register');
Route::post('sign-up/process', [Auth\Register::class, 'register'])->name('register.process');

Route::get('logout', [Auth\Logout::class, 'logout'])->name('app.logout');

Route::middleware(['auth'])->group(function (){
	Route::prefix('dashboard')->group(function (){
		Route::get('/', [Dashboard\Index::class, 'index'])->name('dashboard.index');
		Route::resource('/akun-pengguna', Admin\AkunPenggunaController::class);
	});
	
});