<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FurnizorController;
use App\Http\Controllers\ProdusController;
use App\Http\Controllers\ClientController;
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

//Route::post('produs',[ProdusController::class,'fct']);
/* Route::get('/produs', function() {
    return view('produs');
}); */

/* Route::post('client',[CumparatorController::class,'fct']);
Route::get('/client', function() {
    return view('client');
}); */

Route::get('/produs',[ProdusController::class,'index'])->name('produs.index');
Route::get('/produs/adaugare',[ProdusController::class,'creare'])->name('produs.create');
Route::post('/produs',[ProdusController::class,'store'])->name('produs.store');

Route::get('/client',[ClientController::class,'index'])->name('client.index');
Route::get('/client/adaugare',[ClientController::class,'creare'])->name('client.create');
Route::post('/client',[ClientController::class,'store'])->name('client.store');

/* Route::get('/form_produs',function(){
    return view('/form_produs');
});
Route::post('form_produs',[ProdusController::class,'store'])->name('produs.store'); */
//Route::middleware(['web'])->post('form_produs', 'ProdusController@produs.store');


/* Route::get('/form_furnizor',function(){
    return view('/form_furnizor');
}); */

/* Route::get('/form_client',function(){
    return view('/form_client');
}); */

Route::get('/create_factura', function () {
    return view('create_factura');
});

Route::get('/send-mail', [App\Http\Controllers\EmailController::class, 'sendEmail']);
require __DIR__.'/auth.php';
