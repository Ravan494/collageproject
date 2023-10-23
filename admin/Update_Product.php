<?php
include 'include/session.php';
if($_SERVER['REQUEST_METHOD'] ==='POST')
{   
    $id=$_POST['PID'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $salePrice = $_POST['salePrice'];
    $condition = $_POST['condition'];
    // $datePosted = date('Y-m-d');
    // $userID = $_SESSION['admin_id'];
    $categoryID = $_POST['categoryID'];
    $rentPrice = $_POST['rentprice'] ?? null;
    $rentDuration = $_POST['rentduration'] ?? null;
    $availableForRent = $_POST['AFR'];
   
    $sql='UPDATE `product` SET `Title`="'.$title.'",`Description1`="'.$description.'",`SalePrice`='.$salePrice.',`Condition1`="'.$condition.'",`CategoryID`='.$categoryID.',`RentPrice`='.$rentPrice.',`RentDuration`='.$rentDuration.',`AvailableForRent`='.$availableForRent.' WHERE `ProductID`='.$id.'';
        // echo $sql;
    $result = mysqli_query($conn, $sql);
    if($result)
    {
        $_SESSION['message']='Product Update successfully';
        header('Location:product.php');
    }
    else
    {
        echo 'Something Wrong Please Go Back';
    }
}
?>