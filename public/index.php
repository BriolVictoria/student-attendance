<?php

require __DIR__ . '/../bootstrap/app.php';

require VENDOR_PATH . '/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(ROOT_PATH);
$dotenv->load();


switch ($_SERVER['REQUEST_URI']) {
    case '':
    case '/':
        Attendances\Controllers\HomeController::index();
        /* Appel de la méthode index via une instance
         * Ne marche que si la méthode n'est pas déclarée statique
         * $controller = new HomeController();
        $controller->index();
        */
        break;
    case '/presences':
        Attendances\Controllers\AttendanceController::index();
        break;
    case '/etudiants':
        Attendances\Controllers\StudentController::index();
        break;
    default:
        $title = '404';
        include VIEWS_PATH . '/404.php';
}
