<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    public $timestamps = true;

    protected $fillable = [
        'nome', 
        'email', 
        'telefone',
    ];
}
