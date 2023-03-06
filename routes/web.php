<?php

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Cookie;

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

        $nis = json_decode(Cookie::get('sipon_session'))->nis;

        //https://sipon.kyaigalangsewu.net/api/logout
        Http::asForm()->post('http://127.0.0.1:8888/api/logout', [
            'nis' => $nis
        ]);

        setcookie('sipon_session', '', time() - 1);

        //https://sipon.kyaigalangsewu.net/logout
        return redirect('http://127.0.0.1:8888/logout');
    });
});
