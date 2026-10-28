<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Docente extends Model
{
    protected $fillable = [
        'codEmpleado',
        'nombreEmpleado',
        'apellidosEmpleado',
    ];

    public function grupos(): BelongsToMany
    {
        return $this->belongsToMany(Grupo::class, 'docente_grupo');
    }

    public function estudiantesConsejeros(): HasMany
    {
        return $this->hasMany(Estudiante::class, 'docente_consejero_id');
    }
}