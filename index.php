<?php
include 'include/header.php';
?>

<body>
    <div class="header">
        <?php
        include 'include/navbar.php';
        ?>
            <title>rent</title>             

        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="images\banner-images\slider-bc-b.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="images\banner-images\slider-bc-b.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="images\banner-images\slider-bc-b.jpg" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <section class="Product">
        <div class="section-heading">
                <h1>Products</h1>
        </div>
        <div class="row">
            <div class="col">
                <div class="Product">
                    <div class="product-image">
                        <img src="https://dummyimage.com/280x250/8f8d8f/101014.jpg" alt="First slide">
                    </div>
                    <div class="product-body">
                        <h4>Product name</h4>
                        <p>Product description</p>
                    </div>
                </div>
            </div>

            
            <div class="col">
                <div class="Product">
                    <div class="product-image">
                        <img src="https://dummyimage.com/280x250/8f8d8f/101014.jpg" alt="First slide">
                    </div>
                    <div class="product-body">
                        <h4>Product name</h4>
                        <p>Product description</p>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="Product">
                    <div class="product-image">
                        <img src="https://dummyimage.com/280x250/8f8d8f/101014.jpg" alt="First slide">
                    </div>
                    <div class="product-body">
                        <h4>Product name</h4>
                        <p>Product description</p>
                    </div>
                </div>
            </div>
        
        
        <div class="col">
                <div class="Product">
                    <div class="product-image">
                        <img src="https://dummyimage.com/280x250/8f8d8f/101014.jpg" alt="First slide">
                    </div>
                    <div class="product-body">
                        <h4>Product name</h4>
                        <p>Product description</p>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <div class="more">
            <h3>View More</h3>
        </div>

        

    </section>
    <center>
    <hr class="divider">
    </center>
    <div class="container">
    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading fw-normal lh-1">First featurette heading. <span class="text-body-secondary">It’ll blow your mind.</span></h2>
        <p class="lead">Some great placeholder content for the first featurette here. Imagine some exciting prose here.</p>
      </div>
      <div class="col-md-5">
      <img class="d-block w-100" src="https://dummyimage.com/400x400/a1a1a1/000000" alt="400*400" >
      </div>
    </div>
    <!-- <center>
    <hr class="divider">
    </center> -->
    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading fw-normal lh-1">Oh yeah, it’s that good. <span class="text-body-secondary">See for yourself.</span></h2>
        <p class="lead">Another featurette? Of course. More placeholder content here to give you an idea of how this layout would work with some actual real-world content in place.</p>
      </div>
      <div class="col-md-5 order-md-1">
        <img class="d-block w-100" src="https://dummyimage.com/400x400/a1a1a1/000000" alt="400*400">
      </div>
    </div>
    
</div>
<center>
    <hr class="divider">
    </center>
<?php
include 'include/footer.php';
?>
        <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
        <script src="css\dist\js\bootstrap.js"></script>
        <!-- <script src="css\dist\js\bootstrap.min.js"></script> -->
</body>

</html>