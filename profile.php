<?php
include 'include/session.php';

include 'include/header.php';
include 'include/navbar.php';
if (!isset($_SESSION['loggedin'])) 
{
    header('location: register.php');
}

?>
<div class="container mt-5">
<div class="col">
	        		<?php
	        			// if(isset($_SESSION['error'])){
	        			// 	echo "
	        			// 		<div class='callout callout-danger'>
	        			// 			".$_SESSION['error']."
	        			// 		</div>
	        			// 	";
	        			// 	unset($_SESSION['error']);
	        			// }

	        			// if(isset($_SESSION['success'])){
	        			// 	echo "
	        			// 		<div class='callout callout-success'>
	        			// 			".$_SESSION['success']."
	        			// 		</div>
	        			// 	";
	        			// 	unset($_SESSION['success']);
	        			// }
	        		?>
	        		<div class="box box-solid">
	        			<div class="box-body row">
	        				<div class="col">
	        					<!-- <img src="<?php //echo (!empty($user['photo'])) ? 'images/'.$user['photo'] : 'images/profile.jpg'; ?>" width="100%"> -->
	        					<img class="userimg" src="images/profile/profile.jpg">
	        				</div>
	        				<div class="col userdata">
	        					<div class="row" style="display:flex;">
	        						<div class="col-sm-6">
	        							<h4>Name:</h4>
	        							<h4>Email:</h4>
	        							<h4>Contact Info:</h4>
	        						
	        							<h4>Member Since:</h4>
	        						</div>
	        						<div class="col-sm-6">
	        							<h4 class="h4"><?php echo $user['Name'] ?>
	        								
	        							</h4>
	        							<h4><?php echo $user['Email']; ?></h4>
	        							<h4><?php echo $user['Phone']; ?></h4>
	        							<h4><?php echo date('M d, Y', strtotime($user['DateJoined'])); ?></h4>
										<span class="pull">
	        									<a href="profile_edit.php" class="btn btn-success btn-flat btn-sm" data-toggle="modal"><i class="fa fa-edit"></i> Edit</a>
	        								</span>
	        						</div>
	        					</div>
	        				</div>
	        			</div>
	        		</div>
	        		<!-- <div class="box box-solid">
	        			<div class="box-header with-border">
	        				<h4 class="box-title"><i class="fa fa-calendar"></i> <b>Transaction History</b></h4>
	        			</div>
	        			<div class="box-body">
	        				<table class="table table-bordered" id="example1">
	        					<thead>
	        						<th class="hidden"></th>
	        						<th>Date</th>
	        						<th>Transaction#</th>
	        						<th>Amount</th>
	        						<th>Full Details</th>
	        					</thead>
	        					<tbody>
	        					<?php
	        						// $conn = $pdo->open();

	        						// try{
	        						// 	$stmt = $conn->prepare("SELECT * FROM sales WHERE user_id=:user_id ORDER BY sales_date DESC");
	        						// 	$stmt->execute(['user_id'=>$user['id']]);
	        						// 	foreach($stmt as $row){
	        						// 		$stmt2 = $conn->prepare("SELECT * FROM details LEFT JOIN products ON products.id=details.product_id WHERE sales_id=:id");
	        						// 		$stmt2->execute(['id'=>$row['id']]);
	        						// 		$total = 0;
	        						// 		foreach($stmt2 as $row2){
	        						// 			$subtotal = $row2['price']*$row2['quantity'];
	        						// 			$total += $subtotal;
	        						// 		}
	        						// 		echo "
	        						// 			<tr>
	        						// 				<td class='hidden'></td>
	        						// 				<td>".date('M d, Y', strtotime($row['sales_date']))."</td>
	        						// 				<td>".$row['pay_id']."</td>
	        						// 				<td>&#8377; ".number_format($total, 2)."</td>
	        						// 				<td><button class='btn btn-sm btn-flat btn-info transact' data-id='".$row['id']."'><i class='fa fa-search'></i> View</button></td>
	        						// 			</tr>
	        						// 		";
	        						// 	}

	        						// }
        							// catch(PDOException $e){
									// 	echo "There is some problem in connection: " . $e->getMessage();
									// }

	        						// $pdo->close();
	        					?>
	        					</tbody>
	        				</table>
	        			</div>
	        		</div> -->
	        	</div>

</div>
<?php
include 'include/script.php';
?>