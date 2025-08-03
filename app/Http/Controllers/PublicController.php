<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{

    public $users = [
                ['name' => 'Lorenzo', 'surname' => 'Rossi', 'role' => 'Boss'],
                ['name' => 'Laura', 'surname' => 'Bianchi', 'role' => 'Employer'],
                ['name' => 'Mario', 'surname' => 'Verdi', 'role' => 'Director'],
            ];



    public function home() {
        return view('welcome');
    }


    public function aboutUs() {
        return view('About-Us', ['users' => $this->users]);
    }


    public function aboutUsDetails($name) {
        
        foreach ($this->users as $user) {
            if ($name == $user['name']) {
                return view('About-Us-Details', ['user' => $user]);
            }
        }

    }


    public function contattiEmail(Request $request) {



    }

}
