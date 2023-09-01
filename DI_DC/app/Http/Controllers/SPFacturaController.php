<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SPFactura;
use App\Models\FacturaClient;
use App\Models\FacturaFirma;
use App\Models\Client;
use App\Models\Firma;
use App\Models\Produs;

class SPFacturaController extends Controller
{
    //
    public function index(){
        return view('factura.produsf');
    }

    public function creare(){
        return view('factura.index');
    }

    public function store(Request $request){
        /* $validatedData = $request->validate([
            'nume'=>'required',
            'data'=>'required'
        ]); */
        $validatedData =$request-> validate([
            'denumire'=>'required',
            'tip'=>'required',
            'cantitate'=>'required',
            'nume'=>'required'
        ]);
        //dd($validatedData);
        $numeC=$validatedData['nume'];
        $client=Client::where('nume',$numeC)->first();
        $firma=Firma::where('nume',$numeC)->first();
        if($client && !$firma){
            $lastfac=FacturaClient::orderBy('id','desc')->first();
            $idfacc=$lastfac->id;
            $idfacf=null;
        } else if(!$client && $firma){
            $lastfac=FacturaFirma::orderBy('id','desc')->first();
            $idfacf=$lastfac->id;
            $idfacc=null;
        }
        
            $numep=$validatedData['denumire'];
            $p=Produs::where('denumire',$numep)->first();
            $idp=$p->id;
            $pret=$p->pret_unitar;
            $tva=$p->tva;
            $ptva=$pret+($pret*$tva)/100;

            $produsF=new SPFactura();
            $produsF->id_facturac=$idfacc;
            $produsF->id_facturaf=$idfacf;
            $produsF->id_produs=$idp;
            $produsF->pret_produs=$pret;
            $produsF->pret_tva=$ptva;
            $produsF->cantitate_produs=$validatedData['cantitate'];

            $x=$p->cantitate;
            $p->cantitate=$x-$produsF->cantitate_produs;
<<<<<<< Updated upstream
            $p->save();
            //dd($produsF);
            $produsF->save();

            return view('/factura/index');

        
=======
            //dd($produsF);
            $produsF->save();

            return view('factura/index');
        }
>>>>>>> Stashed changes

    }
}
