<!DOCTYPE html>
<html>
<head>
    <title>Profile Edit Form</title>
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
        .form-group input[type="email"],
        .form-group input[type="tel"],
        .form-group input[type="password"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
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
    // Assume you have fetched the user data to pre-fill the form
    // You can modify the code below to suit your data retrieval logic

    // Example data (replace it with your actual data retrieval logic)
    // $userID = 1; // ID of the user to edit

    // Fetch the user data from the database
    // Assuming you have a function to retrieve user data by ID
    // $userData = getUserByID($userID);

    // Check if user data exists
    // if ($userData) {
    ?>
        <div class="form-container">
            <h2>Profile Edit</h2>
            <form action="profile-edit.php" method="POST">
                <input type="hidden" name="userID" value="<?php echo $userData['UserID']; ?>">
                <div class="form-group">
                    <label for="Name">Name</label>
                    <input type="text" name="Name" id="Name" value="<?php echo $userData['Name']; ?>" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" value="<?php echo $userData['Email']; ?>" required>
                </div>
                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="tel" name="phone" id="phone" value="<?php echo $userData['Phone']; ?>" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" required>
                </div>
                <div class="form-group">
                    <button type="submit">Update Profile</button>
                </div>
            </form>
        </div>
    <?php
    // } else {
    //     // Display a message if user data is not found
    //     echo '<p>User not found.</p>';
    // }
    ?>
</body>
</html>
