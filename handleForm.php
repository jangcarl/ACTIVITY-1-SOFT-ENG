<?php 

session_start();

if(isset($_POST['submitBtn'])) {

    if(isset($_SESSION['firstName'])) {
        
        header('Location: index.php?error=already_logged_in');
        exit();
    }

    $firstName = $_POST['firstName'];

    $password = md5($_POST['password']);

    $_SESSION['firstName'] = $firstName;
    $_SESSION['password'] = $password;

    header('Location: index.php');
}

?>
