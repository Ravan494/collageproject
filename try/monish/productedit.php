<!DOCTYPE html>
<html>
<head>
    <title>Edit Product</title>
    <style>
        /* Add your CSS styling here */
        body {
            font-family: Arial, sans-serif;
            background: #1c1f22;
        }
        .form-container {
            max-width: 500px;
            margin: 0 auto;
            padding: 20px;
            border: 2px solid gold;
            background-color: black;
            border-radius: 10px;
        }
        .form-container h2 {
            text-align: center;
            color: gold;
        }
        .form-group {
            margin-bottom: 20px;
            margin-right: 15px;
        }
        .form-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
            color: gold;
        }
        .form-group input[type="text"],
        .form-group input[type="number"],
        .form-group textarea {
            width: 100%;
            padding: 10px;
            border: none;
            border-bottom: 2px solid gold !important;
            border-radius: 5px;
            outline: none;
            background: transparent;
            color: white;
        }
        .form-group textarea {
            height: 150px;
            border: 1px solid gold !important;
        }
        .form-group button {
            padding: 10px 20px;
            background-color: gold;
            color: black;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
            font-size: medium;
        }
        .form-group button:hover {
            background-color: black;
            color: gold;
            text-decoration: underline;
            border: 1px solid gold;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>EDIT PRODUCT</h2>
        <form action="update-product.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="productID" value="<?php echo $productID; ?>">
            <div class="form-group">
                <label for="title">Title :</label>
                <input type="text" name="title" id="title" value="<?php echo $title; ?>"  placeholder="Title" required>
            </div>
            <div class="form-group">
                <label for="description">Description :</label>
                <textarea name="description" id="description" placeholder="Description" required><?php echo $description; ?></textarea>
            </div>
            <div class="form-group">
                <label for="salePrice">Sale Price :</label>
                <input type="number" name="salePrice" id="salePrice" value="<?php echo $salePrice; ?>"  placeholder="Sales Price" required>
            </div>
            <div class="form-group">
                <label for="condition">Condition :</label>
                <input type="text" name="condition" id="condition" value="<?php echo $condition; ?>" placeholder="Condition" required>
            </div>
            <div class="form-group">
                <label for="image">Image :</label>
                <input type="file" name="image" id="image">
            </div>
            <div class="form-group">
                <button type="submit">Update Product</button>
            </div>
        </form>
    </div>
</body>
</html>
