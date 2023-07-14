<?php
include 'include/session.php';
include 'include/header.php';
include 'include/navbar.php';
?>
<div class="row">
						<div class="col-sm-9">
							<h1 class="page-header">
								<?php 
								// echo $cat['name']; 
								?>
							</h1>
                            <div class='row'>
                            <div class='col-sm-4'>
                            <div class='box box-solid'>
										   <a class='pro' href='product.php?product='>
		       								<div class='box-body prod-body'>
		       									<img src='images\product\dell-xps-15-9560.jpg' width='100%' height='230px' class='thumbnail'>
		       									<h5>Mac Book</h5>
		       								</div>
											   
		       								<div class='box-footer'>
		       									<b>&#8377; 2000"</b>
												   <button class='btn btn-primary' style='margin-left:10px;'>Buy Now</button>
		       								</div>
											   </a>
											   
	       								</div>
	       							</div>

							

							
						</div>

					</div>

                    <?php
include 'include/footer.php';
include 'include/script.php';
?>