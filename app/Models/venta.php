<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class venta extends Model
{
    use HasFactory;
    protected $table="ventas";

    public function productos(){
        return $this->belongsTo('App\producto', 'id_producto');
    }

    public function facturas(){
        return $this->belongsTo('App\factura', 'id_factura');
    }
}
