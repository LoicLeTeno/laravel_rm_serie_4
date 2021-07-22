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

// WELCOME
Route::get('/', function () {
    return view('pages.home');
})->name('welcome');
Route::get('/back', function () {
    return view('pages.backOffice.home-back');
})->name('backOffice');

// FRUITS
Route::get('/fruits', [FruitsController::class, 'index'])->name('fruits');
Route::get('/back/fruits', [FruitsController::class, 'back'])->name('fruitsBack');
Route::get('/back/fruits/show/{id}', [FruitsController::class, 'show'])->name('fruitsShow');

// LEGUMES
Route::get('/legumes', [LegumesController::class, 'index'])->name('legumes');
Route::get('/back/legumes', [LegumesController::class, 'back'])->name('legumesBack');
Route::get('/back/legumes/show{id}', [LegumesController::class, 'show'])->name('legumesShow');