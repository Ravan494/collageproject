<?php
    include 'include/conn.php';

    session_start();

    if(!isset($_SESSION['admin']))
    {
        header('location: ../register.php');
    }
?>
