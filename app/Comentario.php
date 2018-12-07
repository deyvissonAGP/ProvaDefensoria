<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    protected $fillable = ['strcomentario', 'intpontuacao'];
    protected $guarded = ['id', 'created_at', 'update_at'];
    protected $table = 'comentario';
}
