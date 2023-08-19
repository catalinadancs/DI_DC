<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Furnizor extends Model
{
    use HasFactory;

    protected $tabel='furnizor';

    protected $fillable=[
        'key',
        'value'
    ];
}
