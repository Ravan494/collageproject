<?php
include 'include/header.php';
include 'include/navbar.php';
include 'include/conn.php';
?>

<body>
	<div class="section">
		<div class="container">
			<div class="row full-height justify-content-center">
				<div class="col-12 text-center align-self-center py-5">
					<div class="section pb-5 pt-5 pt-sm-2 text-center">
						<h6 class="mb-0 pb-3 logh6"><span>Log In </span><span>Sign Up</span></h6>
			          	<input class="checkbox" type="checkbox" id="reg-log" name="reg-log"/>
			          	<label for="reg-log"></label>
						<div class="card-3d-wrap mx-auto">
							<div class="card-3d-wrapper">
								<!-- login form -->
								<div class="card-front">
									<div class="center-wrap">
										<div class="section text-center">
											<h4 class="mb-4 pb-3 logh4">Log In</h4>
											<form action="#" method="post">
											<div class="form-group">
												<input type="email" class="form-style" placeholder="Email">
												<i class="input-icon uil uil-at"></i>
											</div>	
											<div class="form-group mt-2">
												<input type="password" class="form-style" placeholder="Password">
												<i class="input-icon uil uil-lock-alt"></i>
											</div>
											<button class="Loginbtn mt-4" name="login">Login</button>
                      						<p class="mb-0 mt-4 text-center forget"><a href="https://www.web-leb.com/code" class="link">Forgot your password?</a></p>
												</form>
												<button id="check" onclick="checked()">chacked</button>
				      					</div>
			      					</div>
			      				</div>


								<!-- sign up form -->
								<div class="card-back">
									<div class="center-wrap">
										<div class="section text-center">
											<h4 class="mb-3 pb-3 logh4">Sign Up</h4>
											<form action="" method="post">
											<div class="form-group">
												<input type="text" class="form-style" placeholder="Full Name" name="username">
												<i class="input-icon uil uil-user"></i>
											</div>	
											<div class="form-group mt-2">
												<input type="tel" class="form-style" placeholder="Phone Number" name="phone">
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
	</div>
	<script>
		const checkbox = document.getElementById('reg-log');
		function checked()
{
  checkbox.checked = true;
  // window.Location.href='register.php';
}
signup.addEventListener('click', () => {
    checkbox.checked = true; // Check the checkbox
    console.log('working');
    window.location.href = 'register.php';
  });
  
  login.addEventListener('click', () => {
    checkbox.checked = false; // Uncheck the checkbox
    window.location.href = 'register.php';
  });
	</script>
</body>
</html>

<?php

if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['signup']))
{
	$username = $_POST['username'];
	$phone=$_POST['phone'];
	$email= $_POST['email'];
	$password=$_POST["password"];
	$cpassword=$_POST["cpassword"];

	if($password==$cpassword)
	{
			$sql="INSERT INTO `user` (`Name`, `Email`, `Phone`, `Password`, `DateJoined`) VALUES ('$username', '$email', '$phone', '$password', CURRENT_DATE())";
			$result=mysqli_query($conn,$sql);
			if($result)
			{
				echo 'user register successfully';
			}
	}
	else
	{
		echo "password does not match";
	}

}
?>