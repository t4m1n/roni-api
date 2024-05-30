<?php

use App\Http\Controllers\Api\ContentController;
use App\Http\Controllers\Api\LoginController;
use App\Http\Controllers\Api\LogoutController;
use App\Http\Controllers\Api\PemantauanController;
use App\Http\Controllers\Api\RegisterController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::post('/register', RegisterController::class)->name('register');
Route::post('/login', LoginController::class)->name('login');
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('/logout', LogoutController::class)->name('logout');

Route::group(['prefix' => 'pemantauan'], function () {
    Route::get('/', [PemantauanController::class, 'index'])->name('pemantauan-index');
});

Route::group(['prefix' => 'content'], function () {
    Route::get('/', [ContentController::class, 'index'])->name('content-index');
});

