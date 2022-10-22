<?php

use App\Http\Controllers\AuthController;
use App\Models\Broker;
use App\Models\Saham;
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

Route::get('/', function () {
    return view('index', [
        "sahams" => Saham::all(),
        "brokers" => Broker::all()
    ]);
})->middleware('auth');

Route::get('/details', function () {
    return view('details', [
        "sahams" => Saham::all(),
        "brokers" => Broker::all()
    ]);
})->middleware('auth');

Route::get('/login', function () {
    return view('login', [AuthController::class, 'loginView'], [
        'title' => 'Halaman Login'
    ]);
})->name('login');

Route::get('/register', function () {
    return view('register');
})->name('register');

Route::post(
    '/action-register',
    [AuthController::class, 'actionRegister']
);

Route::get('/login', [
    AuthController::class,
    'loginView'
])->name("login");

Route::post(
    '/action-login',
    [AuthController::class, 'actionLogin']
);

Route::get('/logout', [AuthController::class, 'logout']);
