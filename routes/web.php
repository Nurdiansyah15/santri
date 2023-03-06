<?php

use Illuminate\Support\Facades\Cookie;
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


Route::middleware('sipon')->group(function () {
    Route::get('/', function () {
        return view('dashboard');
    });
    Route::post('/logout', function () {

        setcookie('sipon_session', '', time() - 1);

        // https://sipon.kyaigalangsewu.net/logout
        return redirect('http://127.0.0.1:8888/logout');
    });
});
