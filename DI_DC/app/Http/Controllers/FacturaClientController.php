<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FacturaClient;
use App\Models\Client;

class FacturaClientController extends Controller
{
    //
    public function index()
    {
        return view('factura.index');
    }

    public function creare()
    {
        return view('factura.crearefacturac');
    }

    public function store(Request $request)
    {

        $data = $request->validate([
            'serie' => 'required|size:1',
            'data_emitere' => 'required',
            'data_scadenta' => 'required',
            'status' => 'required'
        ]);

        $numeC = $request->input('nume');
        $client = Client::where('nume', $numeC)->first();

        $factura = new FacturaClient();
        $factura->id_client = $client->id;
        $factura->serie = $data['serie'];
        $factura->data_emitere = $data['data_emitere'];
        $factura->data_scadenta = $data['data_scadenta'];
        $factura->status = $data['status'];
        $factura->save();

        //$data['id_client'] = $client->id; 

        return view('factura/crearefacturac');
    }
}
