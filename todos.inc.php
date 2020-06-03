<?php
include('./vendor/autoload.php');

use App\Data\Todo;
use App\Data\TodoDAO;

$dao = new TodoDAO();

if( isset($_GET['id_delete']) && !empty($_GET['id_delete'])){
    $id = $_GET['id_delete'];
    $dao->delete($id);
}

 //ADD Todo
 if( isset($_POST['todo_form'])){
    $title = $_POST['todo_title'];
    
    $dueDate = $_POST['todo_dueDate'];
    $dt = DateTime::createFromFormat('Y-m-d',$dueDate);
    $ts = $dt->getTimestamp();
    
    $todo = new Todo($title,0,$ts);
    $dao->save($todo);

}


$arr_todos = $dao->findAll();
