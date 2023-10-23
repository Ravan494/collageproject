<?php
include 'include/session.php';
include 'include/header.php';
include 'include/navbar.php';
?>
    <?php
    // Assume you have fetched the products from the database based on their categories
    // You can modify the code below to suit your database and data retrieval process
    $product_category=$_GET['category'];
    $product_category = mysqli_real_escape_string($conn, $product_category);
    $sql="SELECT * FROM `category` WHERE `Name` = '$product_category'";
    $result=mysqli_query($conn , $sql);
    $row=mysqli_fetch_assoc($result);
    $category_id=$row['CategoryID']; 

    // echo $category_id;
    $productsql="SELECT * FROM product WHERE `CategoryID` =$category_id";
    $productresult=mysqli_query($conn, $productsql);

    
    // $productsql="SELECT * FROM product WHERE `CategoryID` =$category_id";
    // $productresult=mysqli_query($conn, $sql);

    // $product_id=$product['ProductID'];
    // $product_name=$product['Name'];
    // $product_price=$product['Price'];
    // $product_description=$product['Description'];
    // $product_image=$product['Image'];
    // $product_quantity=$product['Quantity'];
    // $product_category=$product['CategoryID'];
    // Loop through the products and display them
    if (mysqli_num_rows($productresult) > 0) {
        $ins = 3;
        echo "<header class='mb-5'>
        <h1>".$product_category."</h1>
    </header>
    <div class='container category-page-container my-5'>
    <div class='row row-cols-3 d-grid'>";
        while($productrow=mysqli_fetch_assoc($productresult)){
            // Access the product data using array keys
            // var_dump($productrow);
            // $title = $row['Title'];
            // $description = $row['Description1'];
            // echo $description;
            // echo $category_id;
            // $ins = ($ins==3) ? 1 : $ins + 1 ;
            // if($ins==1){
            //     echo '
            //     <div class="row row-cols-3">';
            // }
            echo "
            <a href='product.php?proid=".$productrow['ProductID']."&proname=". $productrow['Title']."' class='col product-card'>
       
            <img class='card-img-top product-img' src='images/product/". $productrow['Image1'] ."' alt='Card image cap'>
            <div class='card-body'>
                <h4 class='card-title'>". $productrow['Title']."</h4>
                <p class='card-text'>". $productrow['Description1'] ."</p>
            </div>
        
        </a>";
            // if($ins==3)
            // {
            //     echo '</div>';
            // }
        }
        // if($ins==3)
        // {
            // echo '</div>';
        // }/
        // if($ins==1 || $ins==2)
        // {
            echo '
            </div>
            </div>
            ';
        // }
    }
    else
    {
        echo '
        <h1 class="display-1 text-center my-5 text-secondary text-wrap">Product is not available</h1>';
    }
    ?>
                    <?php
include 'include/footer.php';
include 'include/script.php';
?>
