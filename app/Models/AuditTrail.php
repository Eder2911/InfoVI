<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AuditTrail extends Model
{
    use HasFactory;
    protected $fillable = [
        'fechaProceso', 
        'accion',
        'campo', 
        'valorAntiguo', 
        'valorNuevo', 
        'motivo', 
        'idEstudio', 
        'idOperador'];
}
