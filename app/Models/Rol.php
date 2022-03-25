<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    use HasFactory;
    protected $table = 'roles'; /**Con esta línea se le indica la tabla a la cual esta asociado el modelo */
    protected $guarded = [];
}
