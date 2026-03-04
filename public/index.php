<?php

require __DIR__ . '/../bootstrap/app.php';

require VENDOR_PATH.'/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(ROOT_PATH);
$dotenv->load();

include '../db/queries.php';

$title = '';

switch ($_SERVER['REQUEST_URI']) {
    case '':
    case '/':
        $title = 'Page d’accueil';
        include VIEWS_DIR.'/home.php';
        break;
    case '/presences':
        $title = 'Prendre les présences';
        include VIEWS_DIR.'/attendances/index.php';
        break;
    case '/etudiants':
        $title = 'Tous les étudiants';
        include VIEWS_DIR.'/students/index.php';
        break;
    default:
        $title = '404';
        include VIEWS_DIR.'/404.php';
}
