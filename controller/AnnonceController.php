<?php

class AnnonceController
{
    public function getJobOffers()
    {
        $query = "SELECT * FROM card";

        $jobOffers = databaseRead($query);

        return $jobOffers;
    }
}