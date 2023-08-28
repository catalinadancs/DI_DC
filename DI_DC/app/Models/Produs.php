<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class Produs extends Model
{
    use HasFactory;

    protected $table='produs';

    protected $fillable = [
        'tip',
        'denumire',
        'cod',
        'tva',
        'um',
        'cantitate',
        'pret_unitar',
        'moneda'
    ];
}
