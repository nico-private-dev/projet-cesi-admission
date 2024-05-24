<?php

class SearchController
{
    public function searchJobOffers($keywords)
    {
        // Séparation des mots-clés par la virgule et nettoyage
        $keywords = explode(',', $keywords);
        $keywords = array_map('trim', $keywords);
        $keywords = array_map('htmlspecialchars', $keywords);

        // Création de la requête SQL dynamique
        $query = "SELECT * FROM card WHERE ";
        $conditions = [];
        $params = [];

        foreach ($keywords as $index => $keyword) {
            if (!empty($keyword)) {
                $keyword = strtolower($keyword);
                $conditions[] = "(LOWER(title) LIKE :keyword$index OR LOWER(start_date) LIKE :keyword$index OR LOWER(location) LIKE :keyword$index OR LOWER(salary) LIKE :keyword$index OR LOWER(type) LIKE :keyword$index OR LOWER(appearance) LIKE :keyword$index OR LOWER(link) LIKE :keyword$index OR LOWER(short_description) LIKE :keyword$index OR LOWER(long_description) LIKE :keyword$index)";
                $params["keyword$index"] = '%' . $keyword . '%';
            }
        }

        if (empty($conditions)) {
            return [];
        }

        $query .= implode(' AND ', $conditions);

        $jobOffers = databaseRead($query, $params);
        return $jobOffers;
    }
}
