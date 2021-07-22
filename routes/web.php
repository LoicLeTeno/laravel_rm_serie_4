<?php

use App\Http\Controllers\FruitsController;
use App\Http\Controllers\LegumesController;
use Illuminate\Support\Facades\DB;
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
    return view('pages.home');
})->name('welcome');

Route::get('/fruits', [FruitsController::class, 'index'])->name('fruits');

Route::get('/legumes', [LegumesController::class, 'index'])->name('legumes');
