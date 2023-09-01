<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\ProdusController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\FirmaController;
use App\Http\Controllers\FacturaClientController;
use App\Http\Controllers\FacturaFirmaController;
use App\Http\Controllers\SPFacturaController;
use App\Http\Controllers\OrderController;
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

Route::get('/curs-valutar', function(){
    return view('cursvalutar');
});

//Route::match(['get', 'post'], '/furnizor', [FurnizorController::class, 'dataa'])->name('furnizor');

Route::get('/furnizor', [SettingsController::class, 'index'])->name('furnizor');
Route::post('/furnizor',[SettingsController::class,'store'])->name('settings.store');

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

Route::get('/firma',[FirmaController::class,'index'])->name('firma.index');
Route::get('/client/adaugaref',[FirmaController::class,'creare'])->name('firma.create');
Route::post('/firma',[FirmaController::class,'store'])->name('firma.store');

Route::post('factura/crearefc',[FacturaClientController::class,'store'])->name('facturac.store');
Route::post('factura/creareff',[FacturaFirmaController::class,'store'])->name('facturaf.store');

Route::get('/furnizor', [SettingsController::class, 'index'])->name('furnizor');
Route::post('/furnizor',[SettingsController::class,'store'])->name('settings.store');

//Route::post('/factura/crearefacturacc',[SPFacturaController::class,'store'])->name('product-store');
//Route::get('/factura/index',[SPFacturaController::class,'index'])->name('produsf.index');
Route::post('factura/produsf', [SPFacturaController::class, 'store'])->name('produsf.store');
//Route::post('factura/crearefacturaf', [SPFacturaController::class, 'store'])->name('spfprodus.store');
Route::get('/factura/index', function () {
    return view('factura/index');
});

Route::get('/factura/crearefc', function () {
    return view('factura/crearefacturac');
});

Route::get('/factura/produsf', function () {
    return view('factura.produsf');
});


Route::get('/factura/creareff', function () {
    return view('factura/crearefacturaf');
});

/* Route::get('/form_furnizor',function(){
    return view('/form_furnizor');
}); */

/* Route::get('/form_client',function(){
    return view('/form_client');
}); */

Route::get('/create_factura', function () {
    return view('create_factura');
});

Route::get('/orders', [OrderController::class, 'index']);
Route::get('/orders2', [OrderController::class, 'index2']);
Route::get('/orders3', [OrderController::class, 'index3']);
Route::get('/download-orders', [OrderController::class, 'downloadPDF']);
Route::get('/download-orders2', [OrderController::class, 'downloadPDF2']);
Route::get('/download-orders3', [OrderController::class, 'downloadPDF3']);
Route::get('/pdf/order', function(){
    return view('pdf.order');
});

Route::get('/send-mail', [App\Http\Controllers\EmailController::class, 'sendEmail']);

require __DIR__.'/auth.php';

