<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FacturaFirma;
use App\Models\Firma;

class FacturaFirmaController extends Controller
{
    //
    public function index(){
        return view('factura.index');
    }

    public function creare(){
        return view('factura.crearefacturaf');
    }

    public function store(Request $request){
        $data=$request->validate([
            'serie'=>'required|size:1',
            'data_emitere'=>'required',
            'data_scadenta'=>'required',
            'nume_delegat'=>'required',
            'serieCI_del'=>'required',
            'nrCI_del'=>'required',
            'status'=>'required'
        ]);

        $numeF=$request->input('nume');
        $firma=Firma::where('nume', $numeF)->first();

        $factura = new FacturaFirma();
        $factura->id_firma=$firma->id;
        $factura->serie=$data['serie'];
        $factura->data_emitere=$data['data_emitere'];
        $factura->data_scadenta=$data['data_scadenta'];
        $factura->nume_delegat=$data['nume_delegat'];
        $factura->serieCI_del=$data['serieCI_del'];
        $factura->nrCI_del=$data['nrCI_del'];
        $factura->status=$data['status'];
        $factura->save();


        

        return view('factura/crearefacturaf');

    }
}
