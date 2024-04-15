<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mensaje extends Model
{
    use HasFactory;
    public $mensajes;
    protected $table = 'mensajes'; // Especifica el nombre de la tabla si no sigue la convención de Laravel

    protected $fillable = [
        'emisor_id', // ID del usuario que envía el mensaje
        'receptor_id', // ID del usuario que recibe el mensaje
        'propiedad_id', // ID de la propiedad a la que se refiere el mensaje (opcional)
        'contenido', // Contenido del mensaje
        'leido', // Booleano que indica si el mensaje ha sido leído
        'fecha_enviado', // Timestamp de cuándo fue enviado el mensaje
    ];

    // Método para definir la relación inversa (muchos a uno) con User
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function propiedad()
    {
        return $this->belongsTo(Propiedades::class, 'propiedad_id');
    }
}
