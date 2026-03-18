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
        $id = (int)$_GET['id'];
        $student = Student::getStudentById($id);

        $title = 'Fiche de ' . $student->first_name . ' ' . $student->last_name;

        view(
            'students.show',
            compact('title', 'student')
        );
    }

    public function edit(): void
    {
        $id = (int)$_GET['id'];
        $student = Student::getStudentById($id);

        $title = 'Modification de la fiche de ' . $student->first_name . ' ' . $student->last_name;

        view(
            'students.edit',
            compact('title', 'student')
        );


    }

    public function destroy(): void
    {
        $id = (int)$_GET['id'];
        $student = Student::getStudentById($id);

        $title = 'Suppresion de la fiche de ' . $student['first_name'] . ' ' . $student['last_name'];

        view(
            'students.delete',
            compact('title', 'student')
        );
    }
}