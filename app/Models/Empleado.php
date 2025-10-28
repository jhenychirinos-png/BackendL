<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    //
    protected $table = 'empleados';

    protected $fillable = [
        'nombre',
        'apellido',
        'correo',
        'salario'
    ];
    public function empleado()
    {
        return $this->hasMany(Empleado::class,'id');
    }
}
