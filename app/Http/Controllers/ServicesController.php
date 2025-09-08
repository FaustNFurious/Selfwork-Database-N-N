<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Http\Requests\ServicesRequest;



class ServicesController extends Controller
{

    // Tramite questa funzione, solo gli utenti loggati possono accedere a questi servizi
    public function __construct() {
        $this->middleware('auth')->except('serviceList');
    }


// Array utilizzato prima di usare il database
/*    public $computers = [
                ['id' => '1', 'name' => 'Asus Rog Ally X', 'brand' => 'Asus', 'utilizzo' => 'Gaming portatile', 'img' => '/Media/Img-Products/AsusRogAllyX.png'],
                ['id' => '2', 'name' => 'HP Pavillon', 'brand' => 'HP', 'utilizzo' => 'Ufficio', 'img' => '/Media/Img-Products/HPPavillon.jpg'],
                ['id' => '3', 'name' => 'MSI Katana', 'brand' => 'MSI', 'utilizzo' => 'Gaming', 'img' => '/Media/Img-Products/MSIKatana.jpg'],
            ];
*/    


    public function servicesList() {

        $computers = Service::all();
        return view('services.ServicesList', ['computers' => $computers]);

    }



// Funzione utilizzata prima di usare il database
/*    public function servicesDetails($id) {

        foreach ($this->computers as $computer) {
            if ($id == $computer['id']) {
                return view('services.ServicesDetails', ['computer' => $computer]);
            }
        }

    }
*/

    public function servicesCreatation() {
        return view('services.ServicesCreation');
    }



    // Per questa funzione si usa una richiesta specifica proveniente dal file ServicesRequest.php
    public function storeData(ServicesRequest $request) {

        $service = Service::create([
            'brand' => $request->brand,
            'name' => $request->name,
            'utilizzo' => $request->utilizzo,
            'prezzo' => $request->prezzo,
            'img' => $request->file('img')->store('public/Immagini')
        ]);


        return redirect()->route('Home')->with('Successo', 'Hai inviato il tuo prodotto correttamente');

    }

}
