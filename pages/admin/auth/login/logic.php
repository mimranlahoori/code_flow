<?php
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    if (!empty($username) && !empty($password)) {
        if ($username == 'imran' && $password == 'imran') {
            
            header("Location: ../index.php");
        }
        else {
            echo "Invalid Username or Password!";
        }
    }
    else{
        echo "Username and Password must not be empty!";
    }


}




?>