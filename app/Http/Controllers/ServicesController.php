<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;


class ServicesController extends Controller
{

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



    public function storeData(Request $request) {

        $service = Service::create([
            'brand' => $request->brand,
            'name' => $request->name,
            'utilizzo' => $request->utilizzo,
            'prezzo' => $request->prezzo
        ]);


        return redirect()->route('Home')->with('Successo', 'Hai inviato il tuo prodotto correttamente');

    }

}
