<?php
include 'include/session.php';
include 'include/header.php';
?>

<body>
    <div class="header">
        <?php
        include 'include/navbar.php';
        ?>
        

        <!-- <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="images\banner-images\Black Orange Modern Business Conference SEEK cover images (3).png" alt="First slide">
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
        </div> -->
        <div class="carousel-container">
        <div class="carousel">
          <div class="slide active">
            <img src="images\banner-images\Black Orange Modern Business Conference SEEK cover images (3).png" alt="">
          </div>
          <!-- <div class="slide">
            <img src="images\banner-images\Black Orange Modern Business Conference SEEK cover images (3).png" alt="Image 2">
          </div> -->
          <div class="slide">
            <img src="images\Delicious Food Menu Banner Design.png" alt="Image 2">
          </div>
        </div>
        <div class="indicators"></div>
      </div>
    
    </div>
    <script>
        const carousel = document.querySelector('.carousel');
const slides = document.querySelectorAll('.slide');
const indicatorsContainer = document.querySelector('.indicators');
let currentIndex = 0;
let timer;

// Show slide based on index
function showSlide(index) {
  carousel.style.transform = `translateX(-${index * 100}%)`;
  slides.forEach((slide, i) => {
    if (i === index) {
      slide.classList.add('active');
    } else {
      slide.classList.remove('active');
    }
  });
  currentIndex = index; // Update currentIndex
  updateIndicators(index);
}

// Function to move to the next slide
function moveToNextSlide() {
  currentIndex++;
  if (currentIndex >= slides.length) {
    currentIndex = 0;
  }
  showSlide(currentIndex);
}

// Create indicators
function createIndicators() {
  slides.forEach((_, index) => {
    const indicator = document.createElement('div');
    indicator.classList.add('indicator');
    indicator.addEventListener('click', () => {
      showSlide(index);
      clearInterval(timer);
      startAutoScroll();
    });
    indicatorsContainer.appendChild(indicator);
  });
}

// Update active indicator
function updateIndicators(index) {
  const indicators = document.querySelectorAll('.indicator');
  indicators.forEach((indicator, i) => {
    if (i === index) {
      indicator.classList.add('active');
    } else {
      indicator.classList.remove('active');
    }
  });
}

// Function to start the auto-scrolling
function startAutoScroll() {
  timer = setInterval(moveToNextSlide, 3000); // Change slide every 3 seconds (adjust as needed)
}

// Function to stop the auto-scrolling
function stopAutoScroll() {
  clearInterval(timer);
}

// Show initial slide, create indicators, and start auto-scrolling
showSlide(currentIndex);
createIndicators();
startAutoScroll();

    </script>
<section class="Product-section">
  <div class="section-heading">
    <h1>Products</h1>
  </div>
  <div class='row row-cols-3 d-grid mx-5'>

    <a href='#' class='col card product-card'>
      <img class='card-img-top product-img' src='images/product/dell-xps-15-9560.jpg' alt='Card image cap'>
      <div class='card-body'>
        <h4 class='card-title'>Title</h4>
        <p class='card-text'>"Description1"</p>
      </div>
    </a>

            
    <a href='#' class='col card product-card'>
        
      <img class='card-img-top product-img' src='images/product/bmw.jpg' alt='Card image cap'>
      <div class='card-body'>
        <h4 class='card-title'>Title</h4>
        <p class='card-text'>"Description1"</p>
      </div>
    </a>

    <a href='#' class='col card product-card'>
            
      <img class='card-img-top product-img' src='images/product/WhatsApp Image 2023-08-24 at 4.42.25 PM.jpeg' alt='Card image cap'>
      <div class='card-body'>
        <h4 class='card-title'>Title</h4>
        <p class='card-text'>"Description1"</p>
      </div>
    </a>
        
        
    <a href='#' class='col card product-card'>
            
      <img class='card-img-top product-img' src='images/product/product-jpeg.jpg' alt='Card image cap'>
      <div class='card-body'>
        <h4 class='card-title'>Title</h4>
        <p class='card-text'>"Description1"</p>
      </div>
    </a>
  </div>

  <div class="more">
    <h3>View More</h3>
  </div>

</section>
    <center>
    <hr class="divider">
    </center>
    <div class="container">
    <div class="row featurette my-5">
      <div class="col-md-7">
        <h2 class="featurette-heading fw-normal lh-1">First featurette heading. <span class="text-body-secondary">It’ll blow your mind.</span></h2>
        <p class="lead">Some great placeholder content for the first featurette here. Imagine some exciting prose here.</p>
      </div>
      <div class="col-md-5">
      <img class="d-block w-100" src="images/zig.jpeg" alt="400*400" >
      </div>
    </div>
    <!-- <center>
    <hr class="divider">
    </center> -->
    <div class="row featurette my-5">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading fw-normal lh-1">Oh yeah, it’s that good. <span class="text-body-secondary">See for yourself.</span></h2>
        <p class="lead">Another featurette? Of course. More placeholder content here to give you an idea of how this layout would work with some actual real-world content in place.</p>
      </div>
      <div class="col-md-5 order-md-1">
        <img class="d-block w-100" src="images/zag.jpeg" alt="400*400">
      </div>
    </div>
    
</div>
<center>
    <hr class="divider">
    </center>

<?php
include 'include/footer.php';
include 'include/script.php';
?>


</body>
</html>