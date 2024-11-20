<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hilo extends Model
{
    public function autor()
{
    return $this->belongsTo(User::class, 'users_id'); // 'users_id' es la clave foránea en la tabla 'hilos'
}
}
