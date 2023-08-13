<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FurnizorController;
use App\Http\Controllers\ProdusController;
use App\Http\Controllers\CumparatorController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/rapoarte', function () {
    return view('rapoarte');
});

Route::get('/factura', function () {
    return view('factura');
});

Route::get('/bazadate', function () {
    return view('bazadate');
});

Route::get('/aboutus', function () {
    return view('aboutus');
});

Route::match(['get', 'post'], '/furnizor', [FurnizorController::class, 'dataa'])->name('furnizor');

Route::post("produs",[ProdusController::class,'fct']);
Route::get('/produs', function() {
    return view('produs');
});

Route::post("cumparator",[CumparatorController::class,'fct']);
Route::get('/cumparator', function() {
    return view('cumparator');
});

Route::get('/create_factura', function () {
    return view('create_factura');
});

require __DIR__.'/auth.php';
