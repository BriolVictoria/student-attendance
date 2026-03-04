<?php

namespace Attendances\Controllers;

class StudentController
{
    static function index():void
    {
        /*require MODELS_PATH . '/Student.php';
        $students = all();*/
        $students = \Attendances\Models\Student::all();
        $title = 'Tous les étudiants';


        view('students.index', compact('title', 'students'));
    }
}
