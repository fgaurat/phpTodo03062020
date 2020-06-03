<?php

namespace App\Data;

class TodoDAO{
    

    private $dbh;

    public function __construct()
    {
        $this->dbh = new \PDO('mysql:host=localhost;dbname=bdd_todos', 'user_todo', '12345');
    }


    public function findAll(){
        $arr_todos = [];
        $sth = $this->dbh->prepare('SELECT * from todos');
        $sth->execute();
        

        foreach($sth->fetchAll(\PDO::FETCH_ASSOC) as $todo){
            $t = new Todo($todo['id'],$todo['title'],$todo['done'],$todo['due_date']);
            $arr_todos[] = $t;
        }
        return $arr_todos;
    
    }

}