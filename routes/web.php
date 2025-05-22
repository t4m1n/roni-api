<?php

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

// Route::get('/', function () {
//     return response()->json([
//         'success' => true,
//         'message' => "Welcome RONI API",
//     ], 200);
// });

// Route::get('/', function () {
//     return redirect()->away('https://roniapp.my.canva.site/');
// });

Route::get('/', function () {
    return view('ronilanding');
});

Route::get('/cek', function () {
    return response()->json([
        'success' => true,
        'message' => "Welcome RONI API",
    ], 200);
});
