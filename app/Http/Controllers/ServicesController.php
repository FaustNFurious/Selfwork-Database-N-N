<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicesController extends Controller
{

    public $computers = [
                ['id' => '1', 'name' => 'Asus Rog Ally X', 'brand' => 'Asus', 'utilizzo' => 'Gaming portatile', 'img' => '/Media/Img-Products/AsusRogAllyX.png'],
                ['id' => '2', 'name' => 'HP Pavillon', 'brand' => 'HP', 'utilizzo' => 'Ufficio', 'img' => '/Media/Img-Products/HPPavillon.jpg'],
                ['id' => '3', 'name' => 'MSI Katana', 'brand' => 'MSI', 'utilizzo' => 'Gaming', 'img' => '/Media/Img-Products/MSIKatana.jpg'],
            ];
    


    public function servicesList() {
        return view('services.ServicesList', ['computers' => $this->computers]);
    }


    public function servicesDetails($id) {

        foreach ($this->computers as $computer) {
            if ($id == $computer['id']) {
                return view('services.ServicesDetails', ['computer' => $computer]);
            }
        }

    }

}
