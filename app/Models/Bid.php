<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bid extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'propiedad_id', 'oferta', 'estado'];

    public function propiedad()
    {
        return $this->belongsTo(Propiedades::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
