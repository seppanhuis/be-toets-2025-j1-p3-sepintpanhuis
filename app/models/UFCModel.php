<?php

class UFCModel
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    /**
     * Deze methode haalt alle smartphone records op uit de database
     */
    public function getAllUFC()
    {
        $sql = 'SELECT  UFC.Naam
                       ,UFC.RanglijstNummer
                       ,UFC.Lengte
                       ,UFC.Gewicht
                       ,UFC.Leeftijd
                       ,UFC.WinstDoorKnockout
                    

                FROM UFC as UFC
                
                ORDER BY UFC.RanglijstNummer ASC';

        $this->db->query($sql);

        return $this->db->resultSet();
    }
}