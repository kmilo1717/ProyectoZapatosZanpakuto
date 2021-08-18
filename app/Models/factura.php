<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class factura extends Model
{
    use HasFactory;
    protected $table="facturas";

    public function ventas(){
        return $this->hasMany('App\venta');
    }

    public function empleados(){
        return $this->belongsTo('App\empleado', 'id_empleado');
    }
}
