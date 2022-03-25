<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsuarioRol extends Model
{
    protected $table = 'usuarios_roles';/**Con esta línea se le indica la tabla a la cual esta asociado el modelo */
    use HasFactory;
}
