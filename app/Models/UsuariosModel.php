<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UsuariosModel extends Model
{
    protected $table="usuarios";
    protected $fillable = ['nome', 'login', 'senha', 'email', 'tipo', 'ativo'];
}
