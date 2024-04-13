<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Propiedad extends Model
{
    use HasFactory;

    protected $table = 'propiedades';

    // Asegúrate de que los nombres de los atributos en 'fillable' coincidan exactamente con los nombres de las columnas en tu esquema de migración
    protected $fillable = [
        'titulo',
        'descripcion',
        'precio',
        'direccion',
        'user_id',
        'imagen', // Asegúrate de que 'imagen' sea nullable si tu intención es permitir propiedades sin imágenes.
    ];

    // Relación con User: cada propiedad pertenece a un usuario
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function pujas()
    {
        return $this->hasMany(Bid::class);
    }
}
