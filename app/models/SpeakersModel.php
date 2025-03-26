<?php

class SpeakersModel
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    /**
     * Deze methode haalt alle smartphone records op uit de database
     */
    public function getAllSpeakers()
    {
        $sql = 'SELECT  SPR.Naam
                       ,SPR.Batterijduur
                       ,SPR.Waterbestendigheid
                       ,SPR.Connectiviteit
                    

                FROM Speakers as SPR
                
                ORDER BY SPR.Batterijduur DESC';

        $this->db->query($sql);

        return $this->db->resultSet();
    }
}