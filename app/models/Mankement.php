<?php

class Les
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }    

    public function getMankementen()
    {
        $this->db->query("  SELECT 
                                ins.Naam        AS naam, 
                                ins.Email       AS email, 
                                auto.Kenteken   AS kenteken, 
                                auto.Type       AS type, 
                                man.Datum       AS datum, 
                                man.Mankement   AS mankement
                            FROM `mankenteken` man
                            INNER JOIN `auto` 
                            ON auto.id = man.AutoId
                            INNER JOIN `instructeur` ins
                            ON ins.Id = auto.InstructeurId
                            WHERE auto.InstructeurId = :Id");
        
        $this->db->bind(':Id', 2);

        $result = $this->db->resultSet();

        return $result;
    }

    public function addTopic($post) 
    {
        $sql = "INSERT INTO mankement (manekement)
                VALUES                (:mankement)";

        $this->db->query($sql);
        $this->db->bind(':mankement', $post['mankement'], PDO::PARAM_STR);
        return $this->db->execute();
    }
}