<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Insertion extends Model
{
    use HasFactory;

    protected $fillable = [
        'stato',
        'titolo',
        'prezzo',
        'chilometraggio',
        'immatricolazione',
        'potenza',
        'cilindrata',
        'colore',
        'alimentazione',
        'carrozzeria',
        'descrizione',
        'indirizzo',
        'user_id',
        'modello_id',
        'comune_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function car_model()
    {
        return $this->belongsTo(car_model::class);
    }
    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function datails()
    {
        return $this->hasMany(Insertion::class);
    }
    public function images()
    {
        return $this->hasMany(Image::class);
    }
}
