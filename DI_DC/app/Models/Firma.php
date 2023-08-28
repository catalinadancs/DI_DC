<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Firma extends Model
{
    use HasFactory;

    protected $table='firma';

    protected $fillable=[
        'nume',
        'email',
        'telefon',
        'adresa',
        'judet',
        'reg_com',
        'cif',
        'banca',
        'iban'
    ];

    public function facturi()
    {
        return $this->hasMany(FacturaFirma::class);
    }
}
