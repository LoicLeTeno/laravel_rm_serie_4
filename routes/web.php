<?php

use App\Http\Controllers\FruitsController;
use App\Http\Controllers\LegumesController;
use Illuminate\Http\Request;
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

Route::get('/administration', function (Request $request) {
    if ($request->login == null) {
        return redirect('/');
    }
    if (str_contains($request->login, "@") == true) {
        return redirect('/back');
    }
    if (str_contains($request->login, "@") == false) {
        return redirect('/');
    }
});


Route::get('/back', function () {
    return view('pages.backOffice.home-back');
})->name('backOffice');


// FRUITS
Route::get('/fruits', [FruitsController::class, 'index'])->name('fruits');
Route::get('/back/fruits', [FruitsController::class, 'back'])->name('fruitsBack');
Route::get('/back/fruits/show/{id}', [FruitsController::class, 'show'])->name('fruitsShow');
Route::post('/back/fruits/store', [FruitsController::class, 'store'])->name('fruitsStore');
Route::get('/back/fruits/edit/{id}', [FruitsController::class, 'edit'])->name('fruitsEdit');
Route::put('/back/fruits/update/{id}', [FruitsController::class, 'update'])->name('fruitsUpdate');
Route::delete('/back/fruits/delete/{id}', [FruitsController::class, 'destroy'])->name('fruitsDelete');


// LEGUMES
Route::get('/legumes', [LegumesController::class, 'index'])->name('legumes');
Route::get('/back/legumes', [LegumesController::class, 'back'])->name('legumesBack');
Route::get('/back/legumes/show/{id}', [LegumesController::class, 'show'])->name('legumesShow');
Route::post('/back/legumes/store', [LegumesController::class, 'store'])->name('legumesStore');
Route::get('/back/legumes/edit/{id}', [LegumesController::class, 'edit'])->name('legumesEdit');
Route::put('/back/legumes/update/{id}', [LegumesController::class, 'update'])->name('legumesUpdate');
Route::delete('/back/legumes/delete/{id}', [LegumesController::class, 'destroy'])->name('legumesDelete');

