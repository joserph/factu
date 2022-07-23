<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Establishment extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'created_at', 'updated_at'];

    // Realción uno a muchos inversa
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function transmitter()
    {
        return $this->belongsTo('App\Models\Transmitter', 'transmitter_id');
    }
}
