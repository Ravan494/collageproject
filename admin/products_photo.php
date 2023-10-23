<?php
    include 'include/session.php';

    if(isset($_POST['upload'])){
        $id = $_POST['id'];
        $filename = $_FILES['photo']['name'];

        $stmt = mysqli_prepare($conn, "SELECT * FROM `product` WHERE `product`.`ProductID`=?");
        mysqli_stmt_bind_param($stmt, 'i', $id);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        $row = mysqli_fetch_assoc($result);

        if(!empty($filename)){
            $ext = pathinfo($filename, PATHINFO_EXTENSION);
            $new_filename = $row['Title'].'_'.time().'.'.$ext;
            move_uploaded_file($_FILES['photo']['tmp_name'], '../images/product/'.$new_filename);    
        }
        
        try{
            $stmt = mysqli_prepare($conn, "UPDATE `product` SET `Image1`=? WHERE `product`.`ProductID`=?");
            mysqli_stmt_bind_param($stmt, 'si', $new_filename, $id);
            mysqli_stmt_execute($stmt);
            $_SESSION['message'] = 'Product photo updated successfully';
        }
        catch(mysqli_sql_exception $e){
            $_SESSION['error'] = $e->getMessage();
        }

        mysqli_close($conn);

    }
    else{
        $_SESSION['message'] = 'Select product to update photo first';
    }

    header('location: product.php');
?>
