<?php
include 'include/conn.php';

session_start();


    if(isset($_SESSION['user_email']))
    {
        $email= $_SESSION['user_email'];
        $query = "SELECT * FROM `user` WHERE `Email`='$email'";
        $result = mysqli_query($conn, $query);
        $user = mysqli_fetch_assoc($result);
        
    }
    // if(!isset($_SESSION['loggedin']))
    // {
    //     header('Location: register.php');
    // }
    // if(!isset($_SESSION['admin']))
    // {
    //     header('Location: register.php');
    // }
    // if(isset($_SESSION['usernumber']))
    // {
    //     $phone= $_SESSION['usernumber'];
    //     $query = "SELECT * FROM `user` WHERE `Phone`='$phone'";
    //     $result = mysqli_query($conn, $query);
    //     $user = mysqli_fetch_assoc($result);

    // }

?>