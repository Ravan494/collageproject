<?php
include 'include/session.php';
include 'include/header.php';
include 'include/navbar.php';
if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['signup']))
{
	$username = $_POST['username'];
	$phone=$_POST['phone'];
	$email= $_POST['email'];
	$password=$_POST["password"];
	$cpassword=$_POST["cpassword"];

	if($password==$cpassword)
	{
			$sqlnum="SELECT * FROM `user` WHERE `Phone` = $phone";
			$existphone=mysqli_query($conn,$sqlnum);
			$num=mysqli_num_rows($existphone);
			if($num==0)
			{
				$sqlemail="SELECT * FROM `user` WHERE `Email` = '$email'";
				$existemail=mysqli_query($conn,$sqlemail);
				$num=mysqli_num_rows($existemail);
				if($num==0)	
				{
					$sql="INSERT INTO `user` (`Name`, `Email`, `Phone`, `Password`, `DateJoined`) VALUES ('$username', '$email', '$phone', '$password', CURRENT_DATE())";
					$result=mysqli_query($conn,$sql);
					if($result)
					{
						
						$message="you have successfully registered";
						$_SESSION['message']=$message;
					}
				}
				else
				{
					$message="email already exist";
					$_SESSION['message']=$message;
				}
				
			}
			else
			{
				$message="phone number already exist";
				$_SESSION['message']=$message;
			}
	}
	else
	{
		$message= "password does not match";
		$_SESSION['message']=$message;
	}

}
if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['login']))
{	
	try
	{
	$email = $_POST['email'];
	$password = $_POST['password'];
	$sqlemail="SELECT * FROM `user` WHERE `Email` LIKE '$email' AND `Password` LIKE '$password'";
	$result=mysqli_query($conn,$sqlemail);
	$num=mysqli_num_rows($result);
	if($num==1)
	{
		$row=mysqli_fetch_assoc($result);
        $_SESSION['user_id']=$row['UserID'];
        $_SESSION['user_name']=$row['Name'];
        $_SESSION['user_email']=$row['Email'];
		$_SESSION['user_phone']=$row['Phone'];
		// echo "<script>
		// window.location.href = 'index.php';
		// </script>";
		$_SESSION['loggedin'] = true;
		
		$message="You have successfully logged in ";
		$_SESSION['message']=$message;
	}
	else
	{
		$message="Inviled values";
		$_SESSION['message']=$message;
		
		throw new Exception("Invalid values");
	}
}
catch(Exception $e)
{
	echo 'Message: ' .$e->getMessage();
}
}
?>
<?php
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
  }, 3000);
  </script>';
  unset($_SESSION['message']);
}
if(isset($_SESSION['loggedin']))
{
	unset($_SESSION['message']);
	echo '<div class="login-alert" id="login-alert">
	<div class="alert-body">
	<button id="login-close">&times;</button>	
	<span><h3>'.$message.'</h3></span>
	</div>

</div>
<script>const loginalert = document.getElementById("login-alert");
const alertclose = document.getElementById("login-close");
  alertclose.addEventListener("click", () => {
	  loginalert.style.display = "none";
  });
	setTimeout(function() {
        loginalert.style.display = "none";
		window.location.href = "index.php";
	}, 3000);
	</script>';
	

}

echo '<div class="section">
		<div class="container">
			<div class="row full-height justify-content-center">
				<div class="col-12 text-center align-self-center py-5">
					<div class="section pb-5 pt-5 pt-sm-2 text-center">
						<h6 class="mb-0 pb-3 logh6"><span>Log In </span><span>Sign Up</span></h6>
			          	<input class="checkbox" type="checkbox" id="reg-log" name="reg-log"/>
			          	<label for="reg-log" class="cl"></label>
						<div class="card-3d-wrap mx-auto">
							<div class="card-3d-wrapper">
								<!-- login form -->
								<div class="card-front">
									<div class="center-wrap">
										<div class="section text-center">
											<h4 class="mb-4 logh4">Log In</h4>
											<form action="#" method="post">
											<div class="form-group">
												<input type="text" class="form-style" name="email" placeholder="Email" id="user">
												<i class="input-icon uil uil-at"></i>
											</div>	
											<div class="form-group mt-2">
												<input type="password" id="password" class="form-style" placeholder="Password" name="password">
												<i class="input-icon uil uil-lock-alt"></i>
											</div>
											<button class="Loginbtn mt-4" name="login">Login</button>
                      						<p class="mb-0 mt-4 text-center forget"><a href="https://www.web-leb.com/code" class="link">Forgot your password?</a></p>
												</form>
												<button id="check" onclick="checked()">Create new Account</button>
				      					</div>
			      					</div>
			      				</div>


								<!-- sign up form -->
								<div class="card-back">
									<div class="center-wrap">
										<div class="section text-center">
											<h4 class="mb-3 logh4">Sign Up</h4>
											<form action="" method="post">
											<div class="form-group">
												<input type="text" class="form-style" placeholder="Full Name" name="username">
												<i class="input-icon uil uil-user"></i>
											</div>	
											<div class="form-group mt-2">
												<input type="tel" class="form-style" placeholder="Phone Number" name="phone" pattern="[0-9]{10}">
												<i class="input-icon uil uil-phone"></i>
											</div>	
                      						<div class="form-group mt-2">
												<input type="email" class="form-style" placeholder="Email" name="email">
												<i class="input-icon uil uil-at"></i>
											</div>
											<div class="form-group mt-2">
												<input type="password" class="form-style" placeholder="Password" name="password">
												<i class="input-icon uil uil-lock-alt"></i>
											</div>
											<div class="form-group mt-2">
												<input type="password" class="form-style" placeholder="Comform-Password" name="cpassword">
												<i class="input-icon uil uil-lock-alt"></i>
											</div>
											<button class="Registerbtn mt-4" name="signup">Register</button>
											</form>
										</div>
			      					</div>
			      				</div>
			      			</div>
			      		</div>
			      	</div>
		      	</div>
	      	</div>
	    </div>
	</div>';
	?>
	
	<script>
		const checkbox = document.getElementById('reg-log');
const check = document.getElementById('check');

check.addEventListener('click', () => {
	checkbox.checked = true; // Check the checkbox
    // console.log('working');
    
});
//   setTimeout(function() {
        
//       }, 3100);
	</script>
