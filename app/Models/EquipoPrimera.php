<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EquipoPrimera extends Model
{
    protected $table = 'equipos_primera';
    use HasFactory;
    // Asegúrate de que todos los campos que estés asignando masivamente estén en el array fillable.
    protected $fillable = [
        'nombre',
        'abreviacion',
        'estadio',
        'alias',
        'anios_fundacion',
        'campeonatos',
        'url', // Añade todos los campos que quieras asignar masivamente
    ];
}
