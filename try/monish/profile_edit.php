<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
    <style>
    /* Custom CSS for second-level dropdown */
   

    .dropdown-submenu 
    {
     display: none;
    } 
    /* .btn-group.dropend:hover > .dropdown-submenu
    {
      color: red;
    } */
    .dropdown-item:hover > .dropdown-submenu
    {
      display: block;
      position: absolute;
    left: 100%;
    list-style-type: decimal;
    background: white;
    border: 1px solid black;
    z-index: 100;
    }

  </style>
  </head>
  <body>
    <h1>Hello, world!</h1>
    <div class="container mt-5">
    <div class="dropdown">
  <a class="dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
    first
  </a>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
    <li>
        <div class="dropdown-item btn-group dropend">
            <a class="dropdown-second dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                second
            </a>
            <ul class="dropdown-submenu">
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
        </div>
    </li>
    <li><a class="dropdown-item" href="#">Something else here</a></>
  </ul>
</div>
  </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>

