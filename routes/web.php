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
})->name('Home');;


/* Link Pagina About Us */
Route::get('/Chi-Siamo', function() {
    $users = [
        ['name' => 'Lorenzo', 'surname' => 'Rossi', 'role' => 'Boss'],
        ['name' => 'Laura', 'surname' => 'Bianchi', 'role' => 'Employer'],
        ['name' => 'Mario', 'surname' => 'Verdi', 'role' => 'Director'],
    ];
    return view('About-Us', ['users' => $users]);
})->name('AboutUs');;



Route::get('/Chi-Siamo/dettagli/{name}', function($name) {
    $users = [
        ['name' => 'Lorenzo', 'surname' => 'Rossi', 'role' => 'Boss'],
        ['name' => 'Laura', 'surname' => 'Bianchi', 'role' => 'Employer'],
        ['name' => 'Mario', 'surname' => 'Verdi', 'role' => 'Director'],
    ];

    foreach ($users as $user) {
        if ($name == $user['name']) {
            return view('About-Us-Details', ['user' => $user]);
        }
    }

})->name('AboutUsDetails');



/* Link Pagina Contatti */
Route::get('/Contatti', function() {
    return view('Contacts');
})->name('Contacts');;




/* Link Pagina Servizi */
Route::get('/Servizi', function() {
    $computers = [
        ['id' => '1', 'name' => 'Asus Rog Ally X', 'brand' => 'Asus', 'utilizzo' => 'Gaming portatile', 'img' => '/Media/Img-Products/AsusRogAllyX.jpg'],
        ['id' => '2', 'name' => 'HP Pavillon', 'brand' => 'HP', 'utilizzo' => 'Ufficio', 'img' => '/Media/Img-Products/HPPavillon.jpg'],
        ['id' => '3', 'name' => 'MSI Katana', 'brand' => 'MSI', 'utilizzo' => 'Gaming', 'img' => '/Media/Img-Products/MSIKatana.jpg'],
    ];
    return view('services.ServicesList', ['computers' => $computers]);

})->name('ServicesList');



Route::get('/Servizi/dettagli/{id}', function($id) {
    $computers = [
        ['id' => '1', 'name' => 'Asus Rog Ally X', 'brand' => 'Asus', 'utilizzo' => 'Gaming portatile', 'img' => '/Media/Img-Products/AsusRogAllyX.jpg'],
        ['id' => '2', 'name' => 'HP Pavillon', 'brand' => 'HP', 'utilizzo' => 'Ufficio', 'img' => '/Media/Img-Products/HPPavillon.jpg'],
        ['id' => '3', 'name' => 'MSI Katana', 'brand' => 'MSI', 'utilizzo' => 'Gaming', 'img' => '/Media/Img-Products/MSIKatana.jpg'],
    ];

    foreach ($computers as $computer) {
        if ($id == $computer['id']) {
            return view('services.ServicesDetails', ['computer' => $computer]);
        }
    }
})->name('ServicesDetails');