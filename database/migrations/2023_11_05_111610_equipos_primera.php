<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('equipos_primera', function (Blueprint $table) {
            $table->id(); // Columna autoincremental para el ID
            $table->string('nombre'); // Columna de texto para el nombre del equipo
            $table->string('abreviacion', 10); // Columna de texto para la abreviatura, asumiendo que no será muy larga
            $table->string('estadio'); // Columna de texto para el nombre del estadio
            $table->string('alias'); // Columna de texto para el alias del equipo
            $table->year('anios_fundacion'); // Columna de tipo año para el año de fundación
            $table->integer('campeonatos')->unsigned(); // Columna de entero para la cantidad de campeonatos, sin signo
            $table->timestamps(); // Columnas created_at y updated_at automáticas
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
