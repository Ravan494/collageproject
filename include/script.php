        <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
        <script>const testimonialPage = document.querySelector(".quotes-slide[data-slider-slide-index='1']");
        testimonialPage.classList.add("quotes-slide--active");
        
        
        document.querySelector(".quotes").addEventListener("mouseout", function(){
          document.querySelector(".quotes-slide--active").classList.remove("quotes-slide--active")
          document.querySelector(".quotes-slide[data-slider-slide-index='1']").classList.add("quotes-slide--active")
        });
        
        
        document.querySelectorAll(".quotes-slide").forEach( 
          elem => elem.addEventListener("mouseover", function(){
            document.querySelector(".quotes-slide--active").classList.remove("quotes-slide--active")
            this.classList.add("quotes-slide--active")
          })
        )</script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>  -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
        <script src="css\dist\js\bootstrap.js"></script>
        <!-- <script src="css\dist\js\bootstrap.min.js"></script> -->