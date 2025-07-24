<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ServicesController;

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




/* Link Pagine Home */
Route::get('/', [PublicController::class, 'home'])->name('Home');




/* Link Pagina About Us */
Route::get('/Chi-Siamo', [PublicController::class, 'aboutUs'])->name('AboutUs');

Route::get('/Chi-Siamo/dettagli/{name}', [PublicController::class, 'aboutUsDetails'])->name('AboutUsDetails');




/* Link Pagina Contatti */
Route::get('/Contatti', function() {
    return view('Contacts');
})->name('Contacts');




/* Link Pagina Servizi */
Route::get('/Servizi', [ServicesController::class, 'servicesList'])->name('services.ServicesList');

Route::get('/Servizi/dettagli/{id}', [ServicesController::class, 'servicesDetails'])->name('services.ServicesDetails');