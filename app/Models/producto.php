<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class producto extends Model
{
    use HasFactory;
    protected $table="productos";

    public function productos(){
        return $this->hasMany('App\producto');
    }

    public function empleados(){
        return $this->belongsTo('App\proveedor', 'id_proveedor');
    }
}
