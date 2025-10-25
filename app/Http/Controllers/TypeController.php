<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Type;



class TypeController extends Controller
{

    public function typesCreate() {
        return view('type.Create');
    }


    public function typesStore(Request $request) {
  
        $request->validate([
            'name' => 'required'
        ]);
        
        Type::create([
            'name' => $request->name
        ]);

        return redirect()->route('Home')->with('Successo', 'Nuova tipologia di utilizzo creata con successo!');
    }


    public function typesIndex() {
        $types = Type::all()->sortBy('name');
        return view('type.Index', compact('types'));
    }


    public function typesList(Type $type) {
        return view('type.List', compact('type'));
    }


}
