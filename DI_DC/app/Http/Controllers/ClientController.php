<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class ClientController extends Controller
{
    //
    public function index()
    {
        $clients = Client::all();

        return view('client.index', compact('clients'));
    }

    public function creare()
    {
        return view('client.crearec');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nume' => 'required',
            'prenume' => 'required',
            'email' => 'required',
            'telefon' => 'required|size:10',
            'serieCI' => 'required|size:2',
            'numarCI' => 'required|size:6',
            'cnp' => 'required|size:13',
            'adresa' => 'required',
            'banca' => 'required',
            'iban' => 'required|size:24'
        ]);

        $newClient = Client::create($data);

        return redirect(route('client.index'));
    }
}
