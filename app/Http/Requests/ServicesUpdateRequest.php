<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ServicesUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [

            // Regole da rispettare nell'inserimento della compilazione del form
            'brand' => 'required|min:2',    // Campo obbligatorio, minimo 2 caratteri
            'name' => 'required',
            'utilizzo' => 'required',
            'prezzo' => 'required|numeric'  // numeric == vuole un numero come parametro

        ];
    }



    // Funzione che personalizza il messaggio di errore di Default di inserimento campo nel form, il quale è in inglese
    public function messages() {

        return [

            'brand.required' => 'Inserimento del Marchio obbligatorio',
            'brand.min' => 'Il campo Marchio richiede almeno 2 caratteri',
            'name.required' => 'Il campo Nome è obbligatorio',
            'utilizzo.required' => 'Il campo Utilizzo è obbligatorio',
            'prezzo.required' => 'Il campo Prezzo è obbligatorio',
            'prezzo.numeric' => 'Il campo Prezzo deve essere un numero'

        ];
    }

}
