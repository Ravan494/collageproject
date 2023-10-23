<?php
include 'include/session.php';
include 'include/header.php';
include 'include/navbar.php';
if (isset($_SESSION['loggedin'])) 
{
	$user=$_SESSION['user_email'];
	$usersql="SELECT * FROM `user` WHERE `Email` = '$user'";
	$result=mysqli_query($conn,$usersql);
	if(mysqli_num_rows($result)>0)
	{
		
			$user_data=mysqli_fetch_assoc($result);
		
	}

    // var_dump($user_data);
}
else
{
    header('location: register.php');
}

if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['profile_update']))
{
   
    $userID = $_POST["userID"];
    $Name = $_POST["Name"];
    $phone = $_POST["phone"];
    $password= $_POST["password"];

    // update query
    $updateQuery = "UPDATE `user` SET `Name` = '$Name', `Phone` = '$phone', `Password` = '$password' WHERE `user`.`UserID` = $userID;";
    // Execute the update query
    $result = mysqli_query($conn, $updateQuery);
    if($result) {
        $message="Your profile Update successfully";
		$_SESSION['message']=$message;
    } else {
        echo "Error updating profile: " . mysqli_error($conn);
    }
}
if(isset($_SESSION['message']))
{
	echo '<div class="login-alert" id="sign-alert">
	<div class="alert-body">
	<button id="sign-close">&times;</button>	
	<span><h3>'.$message.'</h3></span>
	</div>

</div>
<script>
const signalert = document.getElementById("sign-alert");
const signalertclose = document.getElementById("sign-close");
  signalertclose.addEventListener("click", () => {
	signalert.style.display = "none";
  });
  setTimeout(function() {
	  signalert.style.display = "none";
      window.location.href = "profile.php";
  }, 3000);
  </script>';
  unset($_SESSION['message']);
}
?>
<div class="form-container">
            <h2>PROFILE EDIT</h2>
            <form action="profile_edit.php" method="POST">
                <input type="hidden" name="userID" value="<?php echo $user_data['UserID']; ?>">
                <div class="form-group">
                    <label for="Name">Name :</label>
                    <input type="text" name="Name" id="Name" placeholder="Name" autocomplete="off" value="<?php echo $user_data['Name']; ?>" required>
                </div>
                <div class="form-group">
                    <label for="email">Email :</label>
                    <input type="email" name="email" id="email" placeholder="Email" autocomplete="off" value="<?php echo $user_data['Email']; ?>" required>
                </div>
                <div class="form-group">
                    <label for="phone">Phone :</label>
                    <input type="tel" name="phone" id="phone" placeholder="Phone" autocomplete="off" value="<?php echo $user_data['Phone']; ?>" required>
                </div>
                <div class="form-group">
                    <label for="password">Password :</label>
                    <input type="password" name="password" placeholder="Password" autocomplete="off" id="password" value="<?php echo $user_data['Password']; ?>" required>
                </div>
                <div class="form-group">
                    <center><button type="submit" name="profile_update">Update Profile</button></center>
                </div>
            </form>
        </div>
        <?php
        
include 'include/script.php';
?>