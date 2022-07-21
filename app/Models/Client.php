<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'tipo_identificacion', 'identificacion', 'direccion', 'celular', 'correo', 'user_id', 'user_update'];

    // Realción uno a muchos inversa
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function typeid()
    {
        return $this->belongsTo('App\Models\TypeId', 'tipo_identificacion');
    }
}
