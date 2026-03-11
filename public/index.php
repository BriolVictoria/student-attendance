<?php

require __DIR__ . '/../bootstrap/app.php';

require VENDOR_PATH . '/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(ROOT_PATH);
$dotenv->load();


switch ($_SERVER['REQUEST_URI']) {
    case '':
    case '/':
        \App\Http\Controllers\HomeController::index();
        /* Appel de la méthode index via une instance
         * Ne marche que si la méthode n'est pas déclarée statique
         * $controller = new HomeController();
        $controller->index();
        */
        break;
    case '/presences':
        \App\Http\Controllers\AttendanceController::index();
        break;
    case '/etudiants':
        \App\Http\Controllers\StudentController::index();
        break;
    default:
        $title = '404';
        include VIEWS_PATH . '/404.php';
}
