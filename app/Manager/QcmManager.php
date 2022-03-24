<?php

require "../app/Entity/QCM.php";


class QcmManager
{

    private $pdo;

    public function __construct()
    {
        try 
        {
        $this->pdo = new PDO('mysql:host=localhost;my_qcm_generator','root', 'root');
        }
        catch (PDOException $e) 
        {
            print "Erreur !: " . $e->getMessage() . "<br/>";
            die();
        }
    }

    public function getAll()
    {
        $sql = 'SELECT * FROM qcm';
        
        $req->execute();
        return $req -> fetchAll(PDO::FETCH_ASSOC);
    }
}