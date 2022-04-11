<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car_model extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'marca_id',
    ];

    public function insertions()
    {
        return $this->hasMany(Insertion::class);
    }
    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }
}
