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




/* Link Pagine Home */
Route::get('/', function() {
    return view('welcome');
});


/* Link Pagina About Us */
Route::get('/Chi-Siamo', function() {
    return view('About-Us');
});


/* Link Pagina Contatti */
Route::get('/Contatti', function() {
    return view('Contacts');
});