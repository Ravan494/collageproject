<?php
include 'include/conn.php';

session_start();

if(isset($_SESSION['user_details']))
{
    if(isset($_SESSION['useremail']))
    {
        $email= $_SESSION['useremail'];
        $query = "SELECT * FROM 'user' WHERE 'Email'='$email'";
        $result = mysqli_query($conn, $query);
        $user = mysqli_fetch_assoc($result);
        
    }
    if(isset($_SESSION['usernumber']))
    {
        $phone= $_SESSION['usernumber'];
        $query = "SELECT * FROM 'user' WHERE 'Phone'='$phone'";
        $result = mysqli_query($conn, $query);
        $user = mysqli_fetch_assoc($result);

    }
}
?>