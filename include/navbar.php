
<?php
  echo '<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php"><img src="images/logo.png" alt="Rent it" class="logo"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav me-auto mb-2 mb-md-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="aboutus.php">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="ContactUs.php">Contact Us</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn search" type="submit">Search</button>

        
      </form>
      <div class="custom-menu">
        <div class="cart">
  
        </div>';

        if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true)
                {
                  echo '<a href="logout.php" class="login-btn btn xl-2">Logout</a>';
                }
                else
                {
                  echo '<a href="register.php" class="login-btn btn xl-2">Login/Signup </a>';
                }
                
      echo'</div>
    </div>
  </div>
</nav>';

?>
<div class="space"></div>