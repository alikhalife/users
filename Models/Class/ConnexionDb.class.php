<?php

class ConnexionDb {
    public $host;
    public $dbname;
    private $username;
    private $password;
    protected $connexion;


    public function __construct($host, $dbname, $username, $password) {
        $this->host = $host;
        $this->dbname = $dbname;
        $this->username = $username;
        $this->password = $password;
    }

    public function Connexion() {

        try
        {
            $this->connexion = new PDO('mysql:host=' .$this->host .';dbname=' .$this->dbname .';charset=utf8',
            $this->username, $this->password);

            return $this->connexion;
        }

        catch (Exception $e)
        {
               $msg = 'ERROR in ' .$e->getFile() . 'L.' . $e->getLine() . ' : ' . $e ->getMessage();
            die($msg);

        }

    }

}



