<?php

namespace App\Data;


class UserDAO
{
    private $dbh;

    public function __construct()
    {
        $this->dbh = new \PDO('mysql:host=localhost;dbname=bdd_todos', 'user_todo', '12345');
    }

    public function findByLoginAndPassword(User $user){
        
        $sth = $this->dbh->prepare("SELECT * from users WHERE login = '$user->login' AND '$user->password'");
        $sth->execute();
        $nb = $sth->rowCount();
        
        return $nb==0?false:true;
    }    
}
