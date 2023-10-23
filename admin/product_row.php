<?php 
	include 'include/session.php';
    <?php 
    include 'include/db_connection.php'; // Include your database connection file

    if (isset($_POST['id'])) {
        $id = $_POST['id'];

        // Establish a mysqli connection
        // $conn = new mysqli('hostname', 'username', 'password', 'database_name');

        // Check connection
        // if ($conn->connect_error) {
        //     die("Connection failed: " . $conn->connect_error);
        // }

        // Prepare and execute the SQL query
        $stmt = $conn->prepare("SELECT *, products.ProductID AS prodid, products.ProductName AS prodname, category.CategoryName AS catname FROM products LEFT JOIN category ON category.CategoryID=products.CategoryID WHERE products.ProductID=?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            echo json_encode($row);
        } else {
            echo json_encode(array()); // Return an empty array if no results found
        }

        // Close the database connection
        $stmt->close();
        $conn->close();
    }
?>

?>