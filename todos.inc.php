<?php
include('./vendor/autoload.php');

use App\Data\TodoDAO;

$dao = new TodoDAO();
$arr_todos = $dao->findAll();
