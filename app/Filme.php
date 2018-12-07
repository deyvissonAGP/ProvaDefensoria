<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Filme extends Model
{
    protected $fillable = ['strtitulo', 'strdescricao'];
    protected $guarded = ['id', 'created_at', 'update_at'];
    protected $table = 'filme';
}
