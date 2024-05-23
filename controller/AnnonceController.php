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
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = [
                'title' => $_POST['title'],
                'start_date' => $_POST['start_date'],
                'location' => $_POST['location'],
                'salary' => $_POST['salary'],
                'type' => $_POST['type'],
                'appearance' => $_POST['appearance'],
                'link' => $_POST['link'],
                'short_description' => $_POST['short_description'],
                'long_description' => $_POST['long_description']
            ];

            $query = "INSERT INTO card (title, start_date, location, salary, type, appearance, link, short_description, long_description) 
                      VALUES (:title, :start_date, :location, :salary, :type, :appearance, :link, :short_description, :long_description)";

            databaseWrite($query, $data);
        }
    }
}
