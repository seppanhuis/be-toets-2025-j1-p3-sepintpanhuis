<?php

class ZangeresModel
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    /**
     * Deze methode haalt alle smartphone records op uit de database
     */
    public function getAllZangeres()
    {
        $sql = 'SELECT  ZANG.Naam
                       ,ZANG.Nettowaarde
                       ,ZANG.Land
                       ,ZANG.Mobiel
                       ,ZANG.Leeftijd
                    

                FROM Zangeres as ZANG
                
                ORDER BY ZANG.Leeftijd DESC';

        $this->db->query($sql);

        return $this->db->resultSet();
    }
}