<!DOCTYPE html>
<html>
<head>
    <title>Profile Edit Form</title>
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
            border: 1px solid gold;
            border-radius: 5px;
            background-color: black;
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
        .form-group input[type="email"],
        .form-group input[type="tel"],
        .form-group input[type="password"] {
            width: 100%;
            padding: 10px;
            outline: none;
            border: none;
            border-radius: 5px;
            border-bottom: 2px solid gold !important;
            background: transparent;
            color: white;
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
            color: gold;
            text-decoration: underline;
            border: 1px solid gold;
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
            <h2>PROFILE EDIT</h2>
            <form action="profile-edit.php" method="POST">
                <input type="hidden" name="userID" value="<?php echo $userData['UserID']; ?>">
                <div class="form-group">
                    <label for="Name">Name :</label>
                    <input type="text" name="Name" id="Name" placeholder="Name" autocomplete="off" value="<?php echo $userData['Name']; ?>" required>
                </div>
                <div class="form-group">
                    <label for="email">Email :</label>
                    <input type="email" name="email" id="email" placeholder="Email" autocomplete="off" value="<?php echo $userData['Email']; ?>" required>
                </div>
                <div class="form-group">
                    <label for="phone">Phone :</label>
                    <input type="tel" name="phone" id="phone" placeholder="Phone" autocomplete="off" value="<?php echo $userData['Phone']; ?>" required>
                </div>
                <div class="form-group">
                    <label for="password">Password :</label>
                    <input type="password" name="password" placeholder="Password" autocomplete="off" id="password" required>
                </div>
                <div class="form-group">
                    <center><button type="submit">Update Profile</button></center>
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
