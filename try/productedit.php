<!DOCTYPE html>
<html>
<head>
    <title>Edit Product</title>
    <style>
        /* Add your CSS styling here */
        body {
            font-family: Arial, sans-serif;
        }
        .form-container {
            max-width: 500px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            background-color: #f4f4f4;
        }
        .form-container h2 {
            text-align: center;
        }
        .form-group {
            margin-bottom: 20px;
        }
        .form-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }
        .form-group input[type="text"],
        .form-group input[type="number"],
        .form-group textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .form-group textarea {
            height: 150px;
        }
        .form-group button {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }
        .form-group button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Edit Product</h2>
        <form action="update-product.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="productID" value="<?php echo $productID; ?>">
            <div class="form-group">
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" id="title" value="<?php echo $title; ?>" required>
            </div>
            <div class="form-group">
                <label for="salePrice">Sale Price</label>
                <input type="number" name="salePrice" id="salePrice" value="<?php echo $salePrice; ?>" required>
            </div>
            </div>
            
            <div class="form-group">
                <label for="condition">Condition</label>
                <input type="text" name="condition" id="condition" value="<?php echo $condition; ?>" required>
            </div>
            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" name="image" id="image">
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" id="description" required><?php echo $description; ?></textarea>
            </div>
            <div class="form-group">
                <button type="submit" name="product_update">Update Product</button>
            </div>
        </form>
    </div>
</body>
</html>
