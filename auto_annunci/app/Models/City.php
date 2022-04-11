<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $table = 'cities';

    use HasFactory;

    protected $fillable = [
        'regione',
        'provincia',
        'comune',
    ];

    public function insertions()
    {
        return $this->hasMany(Insertion::class);
    }
}
