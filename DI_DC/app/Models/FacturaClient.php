<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FacturaClient extends Model
{
    use HasFactory;

    protected $table='facturac';

    protected $fillable=[
        'id_client',
        'serie',
        'data_emitere',
        'data_scadenta',
        'status'
    ];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    public function produse()
    {
        return $this->hasMany(Produs::class);
    }
}
