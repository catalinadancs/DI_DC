<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SPFactura extends Model
{
    use HasFactory;

    protected $table='sp_factura';

    protected $fillable=[
        'id_facturac',
        'id_facturaf',
        'id_produs',
        'pret_produs',
        'pret_tva',
        'cantitate_produs'
    ];

    
}
