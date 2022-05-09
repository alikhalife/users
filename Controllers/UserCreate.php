<?php

class UserCreate{
    public function __construct(){

    }
}

class UserRead {

    private $database;

    public function __construct(ConnexionDb $connexionDb)
    {
        $this->database = $connexionDb;
    }

    public function getUser(string $email){

    }

    public function getAllUsers(){
        $sql = "SELECT * FROM accounts";
        $statement = $this->database->Connexion()->prepare($sql);
        return $statement->execute();
    }

}