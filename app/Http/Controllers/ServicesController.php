<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Type;
use App\Http\Requests\ServicesRequest;
use App\Http\Requests\ServicesUpdateRequest;
use Illuminate\Support\Facades\Auth;



class ServicesController extends Controller
{

    // Tramite questa funzione, solo gli utenti loggati possono accedere a questi servizi, eccetto la lista e i dettagli dei prodotti
    public function __construct() {
        $this->middleware('auth')->except('servicesList', 'servicesDetails');
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



    // Funzione che visualizza l'info del prodotto selezionato
    public function servicesDetails(Service $computer) {
        return view('services.ServicesDetails', compact('computer'));
    }


    public function servicesModify(Service $computer) {

        if($computer->user_id == Auth::user()->id) {
            return view('services.ServicesModify', compact('computer'));
        } else {
            return redirect()->route('Home')->with('Errore', 'Non puoi modificare un prodotto che non hai creato tu');
        }

    }


    public function servicesUpdate(ServicesUpdateRequest $request, Service $computer) {

        if($computer->user_id == Auth::user()->id) {
            $computer->update([
                $computer->brand = $request->brand,
                $computer->name = $request->name,
                $computer->usage = $request->usage,
                $computer->price = $request->price
            ]);

            // opzione che modifica l'immagine solo se l'utente la cambia effettivamente, altrimenti rimane quella di prima
            if($request->img) {
                $request->validate(['img' => 'image']);
                $computer->update([
                    $computer->img = $request->file('img')->store('public/Immagini')
                ]);
            }

            return redirect()->route('Home')->with('Successo', 'Hai modificato il tuo prodotto correttamente');

        } else {
            return redirect()->route('Home')->with('Errore', 'Non puoi modificare un prodotto che non hai creato tu');
        }

    }


    // Funzione che cancella il prodotto selezionato
    public function servicesDelete(Service $computer) {
        
        if($computer->user_id == Auth::user()->id) {
            $computer->delete();
            return redirect()->route('Home')->with('Successo', 'Hai eliminato il tuo prodotto correttamente');
        } else {
            return redirect()->route('Home')->with('Errore', 'Non puoi eliminare un prodotto che non hai creato tu');
        }

    }



    public function servicesCreation() {

        $types = Type::all();
        return view('services.ServicesCreation', compact('types'));

    }



    // Per questa funzione si usa una richiesta specifica proveniente dal file ServicesRequest.php
    public function storeData(ServicesRequest $request) {

        $service = Service::create([
            'brand' => $request->brand,
            'name' => $request->name,
            'usage' => $request->usage,
            'price' => $request->price,
            'img' => $request->file('img')->store('public/Immagini'),
            'user_id' => Auth::user()->id
        ]);


        if($request->has('types')) {
            $service->types()->attach($request->types);
        }


        return redirect()->route('Home')->with('Successo', 'Hai inviato il tuo prodotto correttamente');

    }

}
