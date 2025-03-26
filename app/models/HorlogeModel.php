<?php

class horlogeModel
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    /**
     * Deze methode haalt alle smartphone records op uit de database
     */
    public function getAllHorloges()
    {
        $sql = 'SELECT  HRL.Merk
                       ,HRL.Model
                       ,HRL.Prijs
                       

                FROM Horloges as HRL
                
                ORDER BY HRL.Prijs DESC';

        $this->db->query($sql);

        return $this->db->resultSet();
    }
}