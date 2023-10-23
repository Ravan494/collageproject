<?php

include 'include/session.php';

if(isset($_POST['delete']))
{
    $id = $_POST['id'];
    $sql = "DELETE FROM `user` WHERE `user`.`UserID` = $id";
    $result=mysqli_query($conn ,$sql);
    if($result)
    {
        $_SESSION['message'] = "User deleted successfully";
    }
    else
    {
        $_SESSION['message'] = "User is not delete";
    }
}
else
{
    $_SESSION['message'] = "Select User to delete first";
}
header('location: user.php');
?>