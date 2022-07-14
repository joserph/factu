<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeId extends Model
{
    use HasFactory;

    // Realción uno a muchos inversa
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
