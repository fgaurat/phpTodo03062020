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
            $t = new Todo($todo['title'],$todo['done'],$todo['due_date'],$todo['id']);
            $arr_todos[] = $t;
        }
        return $arr_todos;
    
    }

    public function delete($id){
        $delete_todo = "DELETE FROM todos WHERE id = $id";
        $this->dbh->exec($delete_todo);

    }

    public function save(Todo $todo){
        
        $title = $todo->title;
        $ts = $todo->dueDate;
        $sql = "INSERT INTO todos (title,done,due_date) VALUES('$title',1,$ts)";
        $this->dbh->exec($sql);

    }
}