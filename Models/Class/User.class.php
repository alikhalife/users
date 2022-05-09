<?php
//require 'ConnexionDb.class.php';

class UserData
{
    public $id;
    public $username;
    public $email;
    public $password;

    public function __construct($id, $username, $email, $password)
    {
        $this->id = $id;
        $this->username = $username;
        $this->email = $email;
        $this->password = $password;
    }

}

class User
{
    public UserData $UserData;

    private $connected;
    private $database;

    public function __construct(UserData $userData, ConnexionDb $connexionDb)
    {
        $this->UserData = $userData;
        $this->username2 = $this->valid($this->UserData->username);
        $this->database = $connexionDb;
    }

    //sanitazation: nettoyer les données du constructeur
    private function valid($data): string
    {
        $data = trim($data);
        $data = stripslashes($data);
        return htmlspecialchars($data);
    }

   /* public function userExists()
    {
        $sql = "SELECT * FROM accounts";
        $statement = $this->database->Connexion()->prepare($sql);
        return $statement->execute();
    }*/
    // si mon username du formulaire se trouve dans ma base donnée
    // alors je peux le laisser se connecter
    // sinon je linvite à revérifier son mail, username et pass


    /*$sql = "INSERT INTO accounts (id, username, email, password, connected)
                VALUES (:id, :username, :email, :password, :connected)";*/

}



