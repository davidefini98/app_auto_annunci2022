<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome_file',
        'annuncio_id'
    ];

    public function insertion()
    {
        return $this->belongsTo(Insertion::class);
    }
}
