<?php

class TorensModel
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    /**
     * Deze methode haalt alle smartphone records op uit de database
     */
    public function getAllTorens()
    {
        $sql = 'SELECT  TRN.Naam
                       ,TRN.Locatie
                       ,TRN.Hoogte
                       ,TRN.AantalVerdiepingen
                       ,TRN.JaarVoltooid
                    

                FROM Torens as TRN
                
                ORDER BY TRN.Hoogte DESC';

        $this->db->query($sql);

        return $this->db->resultSet();
    }
}