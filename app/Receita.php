<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Receita extends Model
{
    protected $fillable = ['name', 'descricao', 'img', 'updated_at', 'created_at'];
}
