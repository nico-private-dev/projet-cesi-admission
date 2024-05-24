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

$annonceController = new AnnonceController();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['action'])) {
        switch ($_POST['action']) {
            case 'add':
                $annonceController->addJobOffer();
                break;
            case 'edit':
                $annonceController->editJobOffer();
                break;
            case 'delete':
                $annonceController->deleteJobOffer($_POST['id']);
                break;
        }
    }
}

switch ($page) {
    case 'home':
        $jobOffers = $annonceController->getJobOffers();
        require_once "./view/home.php";
        require_once "./view/_parts/annonce.php";
        break;

    case 'admin':
        $jobOffers = $annonceController->getJobOffers();
        if (isset($_GET['edit'])) {
            $jobOffer = $annonceController->getJobOfferById($_GET['edit']);
            require_once "./view/BO/bo_edit.php";
        } else {
            require_once "./view/BO/bo_admin.php";
            require_once "./view/_parts/bo_annonce.php";
        }
        break;

    default:
        // code par défaut
        break;
}

require_once './view/_parts/footer.php';
