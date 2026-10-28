<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Grupo extends Model
{
    protected $fillable = [
        'curso_id',
        'numeroCiclo',
        'anio',
        'numeroGrupo',
        'abierto',
    ];

    protected function casts(): array
    {
        return [
            'abierto' => 'boolean',
        ];
    }

    public function curso(): BelongsTo
    {
        return $this->belongsTo(Curso::class);
    }

    public function docentes(): BelongsToMany
    {
        return $this->belongsToMany(Docente::class, 'docente_grupo');
    }

    public function estudiantesMatriculados(): HasMany
    {
        return $this->hasMany(EstudianteMatriculado::class);
    }
}
