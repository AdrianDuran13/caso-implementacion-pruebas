<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('grupos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('curso_id')->constrained('cursos');
            $table->unsignedTinyInteger('numeroCiclo');
            $table->unsignedSmallInteger('anio');
            $table->unsignedSmallInteger('numeroGrupo');
            $table->boolean('abierto')->default(true);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('grupos');
    }
};