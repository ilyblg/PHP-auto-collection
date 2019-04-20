<?php

class Mysql {

    protected $db       = 'voiture';
    protected $port     = 8889;
    protected $host     = 'localhost';
    protected $user     = 'root';
    protected $password = 'root';
    protected $bdd;

    function getConnection() {
        try { 
            $this->bdd = new PDO("mysql:host=$this->host;dbname=$this->db;port=$this->port", 
                $this->user, 
                $this->password, 
                array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
        }

        //Traitement des exception
        catch (Exception $e) {
            echo 'Erreur - Exception reçue:' .$e->getMessage();
        }
    }

    function executeQuery($sql) {
        echo 'executing query';
        try {
            $stmt = $this->bdd->prepare($sql);
            $stmt->execute();
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
        } catch (Exception $e) {
            echo $e; die;
        }

        return $results;
    }
}
?>