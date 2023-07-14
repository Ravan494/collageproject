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
        
     ';
        // Fetch parent categories from the database
    $parentCategoriesSql = "SELECT * FROM Category WHERE ParentCategoryID IS NULL";
    $parentCategoriesResult = mysqli_query($conn,$parentCategoriesSql);

    // Generate parent category links
    if (mysqli_num_rows($parentCategoriesResult) > 0) {
        while ($parentCategoryRow = mysqli_fetch_assoc($parentCategoriesResult)) {
            $parentCategoryId = $parentCategoryRow['CategoryID'];
            $parentCategoryName = $parentCategoryRow['Name'];

            echo '<li class="nav-item dropdown">';
            echo '<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">' . $parentCategoryName . '</a>';
            echo '<div class="dropdown-menu dropright">';
            
            // Fetch subcategories for the parent category
            $subcategoriesSql = "SELECT * FROM Category WHERE ParentCategoryID = $parentCategoryId";
            $subcategoriesResult = mysqli_query($conn,$subcategoriesSql);

            // Generate subcategory links
            if (mysqli_num_rows($subcategoriesResult) > 0) {
                while ($subcategoryRow = mysqli_fetch_assoc($subcategoriesResult)) {
                    $subcategoryName = $subcategoryRow['Name'];
                    echo '<a class="dropdown-item" href="category.php?category='. $subcategoryName .'">' . $subcategoryName . '</a>';
                }
            }
            
            echo '</div>';
            echo '</li>';
        }
    }

        echo '
    
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
                  echo '<div class="dropdown ">
                  <button class="btn btn-secondary dropdown-toggle profilebtn" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Profile
                  </button>
                  <div class="dropdown-menu profile" aria-labelledby="dropdownMenuButton">
                  <a href="profile.php" class="dropdown-item btn xl-2">My Profile</a>
                    <a class="dropdown-item" href="#">Your Product</a>
                  </div>
                </div>';
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