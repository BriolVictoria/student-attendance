<?php

return [
    [
        'url' => '/',
        'verb' => 'GET',
        'action' => [\App\Http\Controllers\HomeController::class, 'index'],
    ],
    [
        'url' => '/etudiants',
        'verb' => 'GET',
        'action' => [\App\Http\Controllers\StudentController::class, 'index'],
    ],
    [
        'url' => '/etudiants/create',
        'verb' => 'GET',
        'action' => [\App\Http\Controllers\StudentController::class, 'create'],
    ],
    [
        'url' => '/etudiants',
        'verb' => 'POST',
        'action' => [\App\Http\Controllers\StudentController::class, 'store'],
    ],
    [
        'url' => '/presences',
        'verb' => 'GET',
        'action' => [\App\Http\Controllers\AttendanceController::class, 'index'],
    ],
];