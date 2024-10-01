<?php 

session_start();

// Check if submitBtn exists
if(isset($_POST['submitBtn'])) {

    // Check if a user is already logged in
    if(isset($_SESSION['firstName'])) {
        // Redirect back to index with a message that another user is logged in
        header('Location: index.php?error=already_logged_in');
        exit();
    }

    // Get the first name from index.php
    $firstName = $_POST['firstName'];

    // Get the password from the input field
    $password = md5($_POST['password']);

    // Set the session variables
    $_SESSION['firstName'] = $firstName;
    $_SESSION['password'] = $password;

    // Go back to index.php
    header('Location: index.php');
}

?>
