<?php

session_start();

require_once "./libs/tools.php";
require_once "./view/_parts/header.php";
require_once "./Database.php";
require_once "./controller/AnnonceController.php";
require_once "./controller/SearchController.php";

$page = "home";
if (isset($_GET['page'])) {
    $page = $_GET['page'];
}

$annonceController = new AnnonceController();
$searchController = new SearchController();

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
    } elseif (isset($_POST['search'])) {
        $keywords = $_POST['search'];
        $jobOffers = $searchController->searchJobOffers($keywords);
    }
}

if (!isset($jobOffers)) {
    $jobOffers = $annonceController->getJobOffers();
}

switch ($page) {
    case 'home':
        require_once "./view/home.php";
        require_once "./view/_parts/annonce.php";
        break;

    case 'admin':
        if (isset($_GET['edit'])) {
            $jobOffer = $annonceController->getJobOfferById($_GET['edit']);
            require_once "./view/BO/bo_edit.php";
        } else {
            require_once "./view/BO/bo_admin.php";
            require_once "./view/BO/bo_modif_form.php";
            require_once "./view/BO/bo_annonce.php";
        }
        break;

    default:
        // Erreur 404
        break;
}

require_once './view/_parts/footer.php';
