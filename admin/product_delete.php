<?php

include 'include/session.php';

if(isset($_POST['delete']))
{
    $id = $_POST['id'];
    $sql = "DELETE FROM `product` WHERE `product`.`ProductID` = $id";
    $result=mysqli_query($conn ,$sql);
    if($result)
    {
        $_SESSION['message'] = "Product deleted successfully";
    }
    else
    {
        $_SESSION['message'] = "Product was not delete";
    }
}
else
{
    $_SESSION['message'] = "Select product to delete first";
}
header('location: product.php');
?>