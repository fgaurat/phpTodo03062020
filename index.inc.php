<?php
include('./vendor/autoload.php');

use App\Data\User;
use App\Data\UserDAO;

$login_ko = false;

session_start();

if (isset($_POST['login_form'])) {

    $login = $_POST['inputLogin'];
    $password = md5($_POST['inputPassword']);

    $user = new User($login, $password);
    $userDAO = new UserDAO();
    if ($userDAO->findByLoginAndPassword($user)) {
        $_SESSION['user'] = serialize($user);
        header('Location: todos.php');
        exit;
    } else {
        $login_ko = true;
    }


}
