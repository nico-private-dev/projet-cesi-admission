<?php

session_start();

require_once "./libs/tools.php";
require_once "./view/_parts/header.php";
require_once "./Database.php";
require_once "./controller/AnnonceController.php";

$page = "home";
if (isset($_GET['page'])) {
    $page = $_GET['page'];
}

switch ($page) {
    case 'home':
        $annonceController = new AnnonceController();
        $jobOffers = $annonceController->getJobOffers();
        require_once "./view/home.php";
        require_once "./view/_parts/annonce.php";
        break;

    case 'admin':
        require_once "./view/BO/bo_admin.php";
        break;

    default:
        # code...
        break;
}
