<?php

class AnnonceController
{
    public function getJobOffers()
    {
        $query = "SELECT * FROM card";
        $jobOffers = databaseRead($query);
        return $jobOffers;
    }

    public function addJobOffer()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['title'], $_POST['start_date'], $_POST['location'], $_POST['salary'], $_POST['type'], $_POST['appearance'], $_POST['link'], $_POST['short_description'], $_POST['long_description'])) {
            $data = [
                'title' => $_POST['title'],
                'start_date' => $_POST['start_date'],
                'location' => $_POST['location'],
                'salary' => $_POST['salary'],
                'type' => $_POST['type'],
                'appearance' => $_POST['appearance'],
                'link' => $_POST['link'],
                'short_description' => $_POST['short_description'],
                'long_description' => $_POST['long_description'],
            ];

            $query = "INSERT INTO card (title, start_date, location, salary, type, appearance, link, short_description, long_description) 
                      VALUES (:title, :start_date, :location, :salary, :type, :appearance, :link, :short_description, :long_description)";

            databaseWrite($query, $data);
            header('Location: index.php?page=admin');
            exit;
        }
    }

    public function deleteJobOffer($id)
    {
        $query = "DELETE FROM card WHERE id = :id";
        databaseWrite($query, ['id' => $id]);
        header('Location: index.php?page=admin');
        exit;
    }

    public function editJobOffer()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'], $_POST['title'], $_POST['start_date'], $_POST['location'], $_POST['salary'], $_POST['type'], $_POST['appearance'], $_POST['link'], $_POST['short_description'], $_POST['long_description'])) {
            $data = [
                'id' => $_POST['id'],
                'title' => $_POST['title'],
                'start_date' => $_POST['start_date'],
                'location' => $_POST['location'],
                'salary' => $_POST['salary'],
                'type' => $_POST['type'],
                'appearance' => $_POST['appearance'],
                'link' => $_POST['link'],
                'short_description' => $_POST['short_description'],
                'long_description' => $_POST['long_description'],
            ];

            $query = "UPDATE card SET title = :title, start_date = :start_date, location = :location, salary = :salary, type = :type, appearance = :appearance, link = :link, short_description = :short_description, long_description = :long_description WHERE id = :id";

            databaseWrite($query, $data);
            header('Location: index.php?page=admin');
            exit;
        }
    }

    public function getJobOfferById($id)
    {
        $query = "SELECT * FROM card WHERE id = :id";
        $jobOffer = databaseRead($query, ['id' => $id], true);
        if (!$jobOffer) {
            echo 'Offre d\'emploi non trouvée.';
            return null;
        }
        return $jobOffer;
    }
}
