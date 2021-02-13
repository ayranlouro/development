<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClientesCategorias extends Model
{
    protected $fillable = ['nome', 'email', 'categoria', 'created_at'];
}
