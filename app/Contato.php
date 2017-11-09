<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contato extends Model
{
    public $timestamps = true;

    protected $fillable = [
        'cliente_id', 
        'mensagem', 
        'resposta',
        'status',
    ];
}
