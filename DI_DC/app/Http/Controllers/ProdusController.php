<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produs;

class ProdusController extends Controller
{
    //
    function fct(){
        return "buna dimineata lume";
    }

    public function index(){
        $produs = Produs::all();

        return view('produs.index', compact('produs'));
    }

    public function creare(){
        return view('produs.crearep');
    }

    public function store(Request $request) {
        $data = $request->validate([
            'tip'=>'required',
            'denumire'=>'required',
            'cod'=>'required',
            'tva'=>'required|numeric',
            'um'=>'required',
            'cantitate'=>'required|numeric',
            'pret_unitar'=>'required|decimal:0,2',
            'moneda'=>'required'
        ]);

        $newProdus=Produs::create($data);

        return redirect(route('produs.index'));
    }
}
