<?php

use App\Models\Grupo;

test('un grupo contiene toda su informacion principal', function () {
    $grupo = new Grupo([
        'curso_id' => 1,
        'numeroCiclo' => 1,
        'anio' => 2026,
        'numeroGrupo' => 1,
        'abierto' => true,
    ]);

    expect($grupo->curso_id)->toBe(1)
        ->and($grupo->numeroCiclo)->toBe(1)
        ->and($grupo->anio)->toBe(2026)
        ->and($grupo->numeroGrupo)->toBe(1)
        ->and($grupo->abierto)->toBeTrue();
});