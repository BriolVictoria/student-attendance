<?php

namespace App\Http\Controllers;

use App\Models\Student;

class StudentController
{
    public function index(): void
    {
        $title = 'Tous les étudiants';
        $students = Student::getAllStudents();

        view(
            'students.index',
            compact('title', 'students')
        );
    }

    public function create(): void
    {
        $title = 'Ajouter un étudiant';

        view(
            'students.create',
            compact('title')
        );
    }

    /*Ajouter ça*/
    public function store(): void
    {
        if (!isset($_REQUEST['_token'], $_SESSION['token'])) {
            die('bad request');
        }

        if ($_REQUEST['_token'] !== $_SESSION['token']) {
            die('unauthorized');
        };
        // Stocker un étudiant en DB
        // Demander au navigateur de se rediriger vers la page de résultat souhaitée
        die('enregistré');
    }

    public function show(): void
    {
        $id = $_GET['id'];
        $student = Student::getStudent($id);

        $title = 'Fiche d‘un étudiant';

        view(
            'students.show',
            compact('title', 'student')
        );

    }
}