<?php
include 'include/session.php';
include 'include/header.php';
include 'include/navbar.php';
?>
<?php
    $rent = false;
    $id=$_GET['proid'];
    $sql = "SELECT * FROM product LEFT JOIN category ON product.CategoryID=category.CategoryID  WHERE `ProductID` =$id";
    $result = mysqli_query($conn,$sql);
    $row=mysqli_fetch_assoc($result);
    if($row['AvailableForRent']>0)
    {
        $rent = true;
    }
?>
<div class="container">
    <header>
        <h1>Our Product</h1>
    </header>
    
    <div class="row g-0 my-5 bg-dark position-relative">
        <div class="col-md-6 mb-md-0 p-md-4">
            <img src="images\product\<?php echo $row['Image1']; ?>" class="pro-img" alt="Product 1">
        </div>
        <div class="col-md-6 p-4 ps-md-0">
            <h2 class="mt-0 pro-title">Name : <?php echo $row['Title']; ?></h2>
            <p>Category : <a href="category.php?category=<?php echo $row['Name']; ?>"><?php echo $row['Name']; ?></a></p>
            <p><span class="h3 me-2">Description :</span>  <?php echo $row['Description1']; ?>
            </p>
            <p>Sale Price : <span class="ms-2">&#8377; <?php echo $row['SalePrice']; ?></span></p>
            <p>Condition : <span class="ms-2"><?php echo $row['Condition1']; ?></span></p>
            <?php
            if($rent)
            {
                echo'
                <h3 class="text-center">Available For Rent : <span>'.($row['AvailableForRent']==1 ? 'Yes':'No').'</span></h3>
                <p>Rent Price : <span>&#8377; '.$row['RentPrice'].'</span></p>
                <p>Rent Duration : <span>'.$row['RentDuration'].' Days</span></p>';
            }
            else
            {
                echo '<h3 class="text-center">This is not Available for Rent</h3>';    
            }
            echo'
            <span><a href="" class="btn btn-outline-warning mx-3 w-25">Buy</a>';
            if($rent){ echo '<a href="" class="btn btn-outline-warning mx-3 w-25 rent">Rent</a>';}
            echo '</span>';
            ?>    
        </div>
    </div>

</div>
<?php
include 'include/footer.php';
include 'include/script.php';
?>