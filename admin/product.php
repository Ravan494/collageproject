<?php 
include 'include/session.php'; 
include 'include/message.php'; 
include 'include/dashboard_header.php'; 
?>
<?php
$where='';
if(isset(($_GET['category'])))
{
    $catid = $_GET['category'];
    $where = 'WHERE `CategoryID` = '.$catid;
}
?>
<?php
echo '
<body>

    <section class="dashboard">';?>
        <?php include 'include/dashboard_left_side.php' ?>
                <div class="product-show container">
                    <div class="heading">
                    <button id="add_new_product">Add New Product</button>
                    <h1>Category</h1>
                    <div class="form-group">
                    <label>Category: </label>
                    <select name="Cat" id="select_category">
                    <option value="0" selected>ALL</option>
                    
                    

        <?php
        if ($conn) {
            $sql = 'SELECT * FROM `category` WHERE `ParentCategoryID` IS NOT NULL';
        
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
               
                // Loop through the categories and display buttons
                while ($row = mysqli_fetch_assoc($result)) {
                    $categoryName = $row['Name'];
                    $catselect = ($row['CategoryID']==$catid) ? 'selected' : '';
                    echo '<option value="'.$row['CategoryID'].'" '.$catselect.'>'.$categoryName.'</option>
                    ';
                }
                
                echo '</select>
                </div>
                </div>
                <hr>';
            }
            

            $sql = 'SELECT * FROM `product` '.$where;
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                echo'
            <div class="product-table">
            <table id="myTable" class="table table-striped table-dark">
                <thead>
                    <tr>
                        <th scope="col">S.no</th>
                        <th scope="col">Name</th>
                        <th scope="col">Image</th>
                        <th scope="col">Desc.</th>
                        <th scope="col">Sale Price</th>
                        <th scope="col">condition</th>
                        <th scope="col">Rent price</th>
                        <th scope="col">Rent duration</th>
                        <th scope="col">Available for rent</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>';
                $i=1;
                while ($row = mysqli_fetch_assoc($result)) {


                    echo' <tr>
                    <td>'.$i.'</td>
                    <td>'.$row['Title'].'</td>
                    <td><img src="../images/product/'.$row['Image1'].'" alt="">
                    <span class="pull-right"><button class="photo" data-toggle="modal" data-target="#edit_photo" data-id="'.$row['ProductID'].'" data-title="'.$row['Title'].'"><i class="bi bi-pencil-square"></i></button></span></td>
                    <td><button type="button" class="btn btn-primary tablebtn view-button" data-toggle="modal" data-target="#descModal" data-title="'.$row['Title'].'" data-description="'.$row['Description1'].'" >View</button>
                    </td>
                    <td>'.$row['SalePrice'].'</td>
                    <td>'.$row['Condition1'].'</td>
                    <td>'.$row['RentPrice'].'</td>
                    <td>'.$row['RentDuration'].'days</td>
                    <td>'.($row['AvailableForRent'] == 1 ? 'Yes' : 'No') .'</td>
               
                    <td><a type="button" href="product_edit.php?id='.$row['ProductID'].'" class="edit-pro btn btn-success d-flex gap-1" id="edit_product">
                    <i class="bi bi-pencil-square"></i>Edit
                  </a></td>
                    <td>
                                        
                    <button type="button" class="btn btn-danger d-flex justify-content-between gap-1 delete-product" data-toggle="modal" data-target="#deleteModal" data-id="'.$row['ProductID'].'" data-title="'.$row['Title'].'" >
                    <i class="bi bi-trash-fill"></i>Delete  
                  </button></td>
                    
                </tr>';
              
                $i++;
                }

            }
            echo'   
                </tbody>
            </table>
            
            </div>
        </div>
        ';
        
    }
    else
    {
        echo ' <h1>Something Error in Connection </h1>';
    }
    
    ?>
    </section>
    
    
    
    
    <?php 
    include 'include/product_add.php';
    // include 'include/product_edit.php';
    include 'include/product_modal.php';
    include 'include/script.php'; ?>
    

</body>
</html>



