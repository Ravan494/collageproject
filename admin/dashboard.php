<?php
 include 'include/session.php';
 include 'include/dashboard_header.php';
  ?>
<body>
    <section class="dashboard">
        <?php include 'include/dashboard_left_side.php' ?>

        
        <div class="right-sec">
            <div class="heads">
                <div class="header">D.A.S.H-B.O.A.R.D</div>
                <a href="logout.php" id="logout">Logout</a>
            </div>
            <hr>
           <div class="dashboard-home">
            <!-- card 1 -->
                
                    <div class="card text-center mb-3 cimgs" style="width: 18rem;">
                        <div class="card-body text-dark">
                        <h5 class="card-title">OUR TOP NOCH <br>SALES</h5>
                        <p class="card-text font-weight-bold">SLAES</p>
                        <div>50</div>
                        <a href="#" class="view-them text-dark">VIEW THEM</a>
                        </div>
                    </div>
                
                <!-- card 2 -->
                
                    <div class="card text-center mb-3 cimgs" style="width: 18rem;">
                        <div class="card-body text-dark">
                        <h5 class="card-title">OUR SIGNIFICANT PRODUCTS</h5>
                        <p class="card-text font-weight-bold">PRODUCTS</p>
                        <div>55</div>
                        <a href="#" class="view-them text-dark">VIEW THEM</a>
                        </div>
                    </div>
                
                <!-- card 3 -->
                
                    <div class="card text-center mb-3 cimgs" style="width: 18rem;">
                        <div class="card-body text-dark">
                        <h5 class="card-title">OUR SPECIAL <br>CATEGORY</h5>
                        <p class="card-text font-weight-bold">CATEGORY</p>
                        <div>5</div>
                        <a href="#" class="view-them text-dark">VIEW THEM</a>
                        </div>
                    </div>
                
           </div>
        </div>
    </section>
    <?php include 'include/script.php'; ?>
</body>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js">
</html>