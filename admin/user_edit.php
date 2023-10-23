<?php
include 'include/session.php';
if(isset($_POST['user_edit']) && $_SERVER['REQUEST_METHOD']=='POST')
{
    $id = $_POST['edit-user-id'];
    $name = $_POST['edit-user-name'];
    $email = $_POST['edit-user-email'];
    $phone = $_POST['edit-user-phone'];
    $password = $_POST['edit-user-password'];
    // $password=password_hash($password, PASSWORD_DEFAULT);

    $sql = "SELECT * FROM `user` WHERE `UserID`=$id";
    $result=mysqli_query($conn,$sql);    
    $row=mysqli_fetch_assoc($result);
    if($password==$row['Password'])
    {
        $password=$row['Password'];
    }
    else
    {
        $password = password_hash($password, PASSWORD_DEFAULT);
    }
    
    try{
    $sql = "UPDATE `user` SET `Name`='$name',`Email`='$email',`Phone`='$phone',`Password`='$password' WHERE `UserID`=$id";
    $result=mysqli_query($conn,$sql);    
    if($result)
    {
        $_SESSION['message'] = 'User Details Update Successfully';
        
    }
    }
    catch(PDOException $e){
        echo getMessage($e);
    }


    header('location : user.php');
}
?>