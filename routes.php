<?php
return [
    // Affichage page home
    [
        'url' => '/',
        'method' => 'get',
        'action' => [
            \App\Http\Controllers\PageController::class,
            'home',
        ]
    ],
    // Affichage liste des présences
    [
        'url' => '/presences',
        'method' => 'get',
        'action' => [
            \App\Http\Controllers\AttendanceController::class,
            'index',
        ]
    ],
    // Affichage liste des étudiants
    [
        'url' => '/etudiants',
        'method' => 'get',
        'action' => [
            \App\Http\Controllers\StudentController::class,
            'index',
        ]
    ],
    // Affichage la liste + l'étudiant ajouté
    [
        'url' => '/etudiants',
        'method' => 'post',
        'action' => [
            \App\Http\Controllers\StudentController::class,
            'store'
        ],
    ],
    // Affichage le formulaire de création de l'étudiant
    [
        'url' => '/etudiants/create',
        'method' => 'get',
        'action' => [
            \App\Http\Controllers\StudentController::class,
            'create',
        ]
    ],
    // Affichage la fiche de l'étudiant
    [
        'url' => '/etudiant',
        'method' => 'get',
        'action' => [
            \App\Http\Controllers\StudentController::class,
            'show',
        ]
    ],
];