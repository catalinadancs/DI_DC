<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Settings;

class SettingsController extends Controller
{
    //
    function index(){
        return view('furnizor');
    }

    public function store(Request $request)
    {
        $commonData=$request->validate([
            'nume' => 'required|string',
            'prenume' =>'required|string',
            'seria_ci' =>'required|string',
            'nr_ci' =>'required|string',
            'cnp' => 'required|string',
            'numef' => 'required|string',
            'cif' => 'required|string',
            'telefon' => 'required|string',
            'adresa' => 'required|string',
            'judet' => 'required|string',
            'banca' => 'required|string',
            'iban' => 'required|string'
        ]);

        $dataToSave = [];

        foreach ($commonData as $key => $value) {
            // Add each key-value pair to the $dataToSave array
            $dataToSave[] = ['key' => $key, 'value' => $value];
        }
    
        // Use the createMany method to insert multiple records at once
        Settings::insert($dataToSave);
    
        return view('dashboard');
    }
}
