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
        while($productrow=mysqli_fetch_assoc($productresult)){
            // Access the product data using array keys
            // var_dump($productrow);
            // $title = $row['Title'];
            // $description = $row['Description1'];
            // echo $description;
            // echo $category_id;
    ?>
        <div class="card product-card" style="width: 18rem;">
  <img class="card-img-top product-img" src="images\product\<?php echo $productrow['Image1']; ?>" alt="Card image cap">
  <div class="card-body">
    <h4 class="card-title"><?php echo $productrow['Title']; ?></h4>
    <p class="card-text"><?php echo $productrow['Description1']; ?></p>
     </div>
</div>
    <?php
        }
    }
    else
    {
        echo "No Product there";
    }
    ?>
                    <?php
include 'include/footer.php';
include 'include/script.php';
?>
