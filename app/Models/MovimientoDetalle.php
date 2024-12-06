<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MovimientoDetalle extends Model
{
    use HasFactory;
    protected $table = 'movimiento_detalle';
    protected $guarded = [];
}
