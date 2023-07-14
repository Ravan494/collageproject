<!DOCTYPE html>
<html>
<head>
    <title>Category Edit Form</title>
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
    <?php
    // Assume you have fetched the category data to pre-fill the form
    // You can modify the code below to suit your data retrieval logic

    // Example data (replace it with your actual data retrieval logic)
    // $categoryID = 1; // ID of the category to edit

    // Fetch the category data from the database
    // Assuming you have a function to retrieve category data by ID
    //$categoryData = getCategoryByID($categoryID);

    // Check if category data exists
    // if ($categoryData) {
    ?>
        <div class="form-container">
            <h2>Category Edit</h2>
            <form action="category-edit.php" method="POST">
                <input type="hidden" name="categoryID" value="<?php echo $categoryData['CategoryID']; ?>">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" value="<?php echo $categoryData['Name']; ?>" required>
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea name="description" id="description" required><?php echo $categoryData['Description']; ?></textarea>
                </div>
                <div class="form-group">
                    <label for="parentCategoryID">Parent Category</label>
                    <select name="parentCategoryID" id="parentCategoryID">
                        <option value="">None</option>
                        <!-- Fetch and populate the parent categories dynamically -->
                        <!-- Replace the option elements below with your actual parent category data retrieval logic -->
                        <option value="1">Category 1</option>
                        <option value="2">Category 2</option>
                        <option value="3">Category 3</option>
                    </select>
                </div>
                <div class="form-group">
                    <button type="submit" class="gold">Update Category</button>
                </div>
            </form>
        </div>
    <?php
    // } else {
    //     // Display a message if category data is not found
    //     echo '<p>Category not found.</p>';
    // }
    ?>
</body>
</html>
