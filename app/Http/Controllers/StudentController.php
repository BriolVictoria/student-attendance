<?php

function index()
{
    require MODELS_PATH . '/Student.php';
    $title = 'Tous les étudiants';
    $students = all();

    view('students.index', compact('title', 'students'));
}