<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Firma;

class FirmaController extends Controller
{
    //
    public function index(){
        return view('client.index');
    }

    public function creare(){
        return view('client.crearef');
    }

    public function store(Request $request)
    {
        $data=$request->validate([
            'nume'=>'required',
            'email'=>'required',
            'telefon'=>'required|size:10',
            'adresa'=>'required',
            'judet'=>'required',
            'reg_com'=>'required',
            'cif'=>'required',
            'banca'=>'required',
            'iban'=>'required|size:24'
        ]);

        $newFirma=Firma::create($data);

        return redirect(route('client.index'));
    }
}
