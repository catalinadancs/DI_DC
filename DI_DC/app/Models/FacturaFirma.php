<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FacturaFirma extends Model
{
    use HasFactory;

    protected $table='facturaf';

    protected $fillable=[
        'id_firma',
        'serie',
        'data_emitere',
        'data_scadenta',
        'nume_delegat',
        'serieCI_del',
        'nrCI_del',
        'status'
    ];

    public function client()
    {
        return $this->belongsTo(Firma::class);
    }

    public function produse()
    {
        return $this->hasMany(Produs::class);
    }
}
