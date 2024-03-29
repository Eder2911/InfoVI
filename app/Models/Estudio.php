<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estudio extends Model
{
    use HasFactory;
    protected $fillable = [
        'tipo', 
        'fechaRealizacion',
        'horaRealizacion',
        'asistencia', 
        'fechaEntrega', 
        'fechaProximo', 
        'fechaRevision', 
        'resultado', 
        'documento'];

}