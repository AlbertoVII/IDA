<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Propiedade
 *
 * @property $id
 * @property $titulo
 * @property $descripcion
 * @property $precio
 * @property $direccion
 * @property $client_id
 * @property $imagen
 * @property $created_at
 * @property $updated_at
 *
 * @property User $user
 * @property Bid[] $bids
 * @property Mensaje[] $mensajes
 * @property UserPropiedad[] $userPropiedads
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Propiedades extends Model
{
    

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['titulo', 'descripcion', 'precio', 'direccion', 'cliente_id', 'imagen'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function clientes()
    {
        return $this->belongsTo(\App\Models\Cliente::class, 'cliente_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function bids()
    {
        return $this->hasMany(\App\Models\Bid::class, 'id', 'propiedad_id');
    }
     /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function imagenes()
    {
        return $this->hasMany(\App\Models\Bid::class, 'id', 'propiedad_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function mensajes()
    {
        return $this->hasMany(\App\Models\Mensaje::class, 'id', 'propiedad_id');
    }
   
    

}
