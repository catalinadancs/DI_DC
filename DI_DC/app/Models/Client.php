<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $table='client';

    protected $fillable=[
        'nume',
        'prenume',
        'email',
        'telefon',
        'serieCI',
        'numarCI',
        'cnp',
        'adresa',
        'banca',
        'iban'
    ];
}
