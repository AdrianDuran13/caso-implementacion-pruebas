<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('estudiante_matriculados', function (Blueprint $table) {
            $table->id();
            $table->foreignId('estudiante_id')->constrained('estudiantes');
            $table->foreignId('grupo_id')->constrained('grupos');
            $table->decimal('nota', 5, 2)->nullable();
            $table->timestamps();

            $table->unique(['estudiante_id', 'grupo_id']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('estudiante_matriculados');
    }
};