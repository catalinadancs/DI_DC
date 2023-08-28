<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Furnizor;

class FurnizorController extends Controller
{
    //
    function dataa(){
        return view('furnizor');
    }

    public function store(Request $request)
    {

    }
}
