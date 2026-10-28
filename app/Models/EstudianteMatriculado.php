<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class EstudianteMatriculado extends Model
{
    protected $fillable = [
        'estudiante_id',
        'grupo_id',
        'nota',
    ];

    protected function casts(): array
    {
        return [
            'nota' => 'decimal:2',
        ];
    }

    public function estudiante(): BelongsTo
    {
        return $this->belongsTo(Estudiante::class);
    }

    public function grupo(): BelongsTo
    {
        return $this->belongsTo(Grupo::class);
    }
}
