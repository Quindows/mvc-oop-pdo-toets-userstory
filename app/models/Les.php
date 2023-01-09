<?php

class Les
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }    

    public function getLessons()
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
                            WHERE auto.InstructeurId = 2");
        
        $this->db->bind(':Id', 2);

        $result = $this->db->resultSet();

        return $result;
    }

    public function getTopicsLesson($lessonId)
    {
        $this->db->query("SELECT *
                          FROM Onderwerp
                          WHERE LesId = :lessonId");
        $this->db->bind(':lessonId', $lessonId);

        $result = $this->db->resultSet();

        return $result;
    }

    public function addTopic($post) 
    {
        $sql = "INSERT INTO Onderwerp (LesId
                                      ,Onderwerp)
                VALUES                (:lesId
                                      ,:topic)";

        $this->db->query($sql);
        $this->db->bind(':lesId', $post['lesId'], PDO::PARAM_INT);
        $this->db->bind(':topic', $post['topic'], PDO::PARAM_STR);
        return $this->db->execute();
    }
}