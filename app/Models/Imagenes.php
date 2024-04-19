<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Imagenes extends Model
{
    use HasFactory;


    protected $fillable = [
        'name',
        'ruta',
        'id',
    ];
     /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function Imagenes()
    {
        return $this->belongsTo(\App\Models\Propiedades::class, 'cliente_id', 'id');
    }
}
