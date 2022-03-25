<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;
    protected $guarded = [];
    /*** Al modelo Usuario no es necesario especificar la tabla ya que asume que existe una tabla usuarios */
    public function roles(){
        /***Los usuarios tendrán una relación many to many con usuarios_roles */
        return $this->belongsToMany(Rol::class, 'usuarios_roles', 'usuarios_id', 'roles_id');
    }

}
