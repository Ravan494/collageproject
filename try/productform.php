<?php
include 'include/session.php';
include 'include/header.php';
include 'include/navbar.php';

?>
<!DOCTYPE html>

<html>
<head>
    <title>Product Upload Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            width: 500px;
            margin: 50px auto;
            padding: 20px;
            background-color: black;
            border-radius: 10px;
            border: 2px solid gold;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        .form-group {
            margin-bottom: 20px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: gold;
        }
        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 10px;
            font-size: 14px;
            border-radius: 5px;
            color: white;
            border: none;
            border-bottom: 2px solid gold;
            outline: none;
            background: transparent;
        }
        .form-group input[type="submit"] {
            background-color: gold;
            color: black;
            cursor: pointer;
        }

        .form-group input[type="submit"]:hover{
            background: black;
            font-size: medium;
            color: gold;
            text-decoration: underline;
            border: 1px solid gold;  
        }

        /* newly added css for decoration  */
        center h2{
             color: gold;
        }

        form textarea{
            border: 1px solid gold !important;
        }

        .rentavl{
            display: block;
            background: white !important;
            padding: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <center><h2>PRODUCT UPLOAD FORM</h2></center>
        <!-- <h2>Product Upload Form</h2> -->
        <form action="productform.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="title">Title : </label>
                <input type="text" id="title" name="title" required placeholder="Title">
            </div>
            <div class="form-group">
                <label for="description">Description : </label>
                <textarea id="description" name="description" placeholder="Description" required></textarea>
            </div>
            <div class="form-group">
                <label for="salePrice">Sale Price :</label>
                <input type="number" id="salePrice" name="salePrice" step="0.01" placeholder="Sales Price" required>
            </div>
            <div class="form-group">
                <label for="condition">Condition :</label>
                <input type="text" id="condition" name="condition" placeholder="Condition" required>
            </div>
            <div class="form-group">
                <label for="image">Image :</label>
                <input type="file" id="image" name="image" required accept="image/*">
            </div>
            <div class="form-group">
                <label for="rentPrice">Rent Price :</label>
                <input type="number" id="rentPrice" name="rentPrice" placeholder="Rent Price" step="0.01">
            </div>
            <div class="form-group">
                <label for="rentDuration">Rent Duration :</label>
                <input type="number" id="rentDuration" name="rentDuration" placeholder="Rent Duration">
            </div>
            <div class="form-group">
                <label for="availableForRent">Available for Rent</label>
                <input class="rentavl" type="checkbox" id="availableForRent" name="availableForRent" value="1">
            </div>
            <div class="form-group">
                <label for="categoryID">Category ID</label>
                <select name="categroy" id="category">
                    <option value="0" hidden="hidden">Select Category</option>
                    <?php
                    // $sql = "SELECT * FROM `category` WHERE `ParentCategoryID` IS NOT NULL";
                    // $result = mysqli_query($conn, $sql);
                    // while ($row = mysqli_fetch_assoc($result)) {
                    //     echo "<option value='$row[CategoryID]'>$row[Name]</option>";
                    // }
                  ?>
                </select>
            </div>
            <div class="form-group">
                <input type="submit" value="Upload" name="product_upload">
            </div>
        </form>
    </div>
</body>
</html>
<?php

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['product_upload'])) {
    // Retrieve the form data
    $title = $_POST['title'];
    $description = $_POST['description'];
    $salePrice = $_POST['salePrice'];
    $condition = $_POST['condition'];
    $image = $_FILES['image']['name'];
    $datePosted = date('Y-m-d');
    $userID = $_SESSION['user_id'];
    $categoryID = $_POST['categoryID'];
    $rentPrice = $_POST['rentPrice'] ?? null;
    $rentDuration = $_POST['rentDuration'] ?? null;
    $availableForRent = isset($_POST['availableForRent']) ? 1 : 0;

    

    // Prepare the SQL statement
    $sql = "INSERT INTO Product (Title, Description1, SalePrice, Condition1, Image1, DatePosted, UserID, CategoryID, RentPrice, RentDuration, AvailableForRent) 
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    $productresult = $conn->prepare($sql);
    $productresult->bind_param("ssdsssdidii", $title, $description, $salePrice, $condition, $image, $datePosted, $userID, $categoryID, $rentPrice, $rentDuration, $availableForRent);

    // Upload the image file
    $targetDirectory = "images/product/"; // Specify the directory to upload the image
    $targetFilePath = $targetDirectory . basename($image);
    move_uploaded_file($_FILES["image"]["tmp_name"], $targetFilePath);

    // Execute the statement
    if ($stmt->execute()) {
        // Data inserted successfully
        echo "Product uploaded successfully!";
    } else {
        // Error in inserting data
        echo "Error: " . $stmt->error;
    }

    // Close the statement and connection
    $stmt->close();
    $conn->close();
}
?>
