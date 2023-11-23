<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PonchoPayController;
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

Route::get('/init-poncho-payment', function () {
    return view('welcome');
});


Route::get('/init-poncho-payment', [PonchoPayController::class, 'poncho_pay_init_single_invoice'])->name('poncho_pay_init_single_invoice');