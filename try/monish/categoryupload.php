<!DOCTYPE html>
<html>
<head>
    <title>Category Upload Form</title>
    <style>
        /* Add your CSS styling here */
        body {
            font-family: Arial, sans-serif;
            background:#1c1f22;;
        }
        .form-container {
            max-width: 500px;
            margin: 0 auto;
            padding: 20px;
            border: 2px solid gold;
            background-color: black;
            border-radius: 5px;
        }
        .form-container h2 {
            text-align: center;
            color: gold;
        }
        .form-group {
            margin-top: 50px;
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
        .form-group textarea {
            width: 100%;
            padding: 10px;
            border: none;
            border:1px solid gold;
            border-bottom: 3px solid gold !important;
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
            cursor: pointer;
            width: 100%;
            border-radius: 5px;
            font-size: medium;
        }
        .form-group button:hover {
            background-color: black;
            border: 1px solid gold;
            color: gold;
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>CATEGORY UPLOAD</h2>
        <form action="category-upload.php" method="POST">
            <div class="form-group">
                <label for="name">Name :</label>
                <input type="text" name="name" id="name" autocomplete="off" placeholder="Name" required>
            </div>
            <div class="form-group">
                <label for="description">Description :</label>
                <textarea name="description" id="description" autocomplete="off" placeholder="Description" required></textarea>
            </div>
            <div class="form-group">
                <label for="parentCategoryID">Parent Category :</label>
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
                <button type="submit">Upload Category</button>
            </div>
        </form>
    </div>
</body>
</html>
