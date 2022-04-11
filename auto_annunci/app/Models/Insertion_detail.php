<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Insertion_detail extends Model
{
    use HasFactory;

    protected $fillable = [
        'proprietari',
        'cambio',
        'vernice',
        'riverstimenti',
        'posti',
        'porte',
        'consumi',
        'emissioni',
        'equipaggiamento',
    ];

    public function insertion()
    {
        return $this->belongsTo(Insertion::class);
    }
}
