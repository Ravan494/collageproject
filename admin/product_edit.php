<?php 
include 'include/session.php'; 
include 'include/dashboard_header.php'; 
?> 
<?php
if (isset($_GET['id'])) {
    $Id = $_GET['id'];
    $sql = 'SELECT * FROM product LEFT JOIN category ON category.CategoryID=product.CategoryID WHERE product.ProductID='.$Id.';';
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        if($row['AvailableForRent']==1)
        {
            $AFR='Yes';
        }
        else
        {
            $AFR='No';
        }
    }
}
?>

<!-- product edit -->
<div class="form-edit" id="form-edit">
<div class="form-container">
  
    <a href="product.php" id="edit_hide">&times;</a>
<form action="Update_Product.php"  method="POST" enctype="multipart/form-data">
<center>
  <h2>EDIT PRODUCT</h2>
</center>  
            <input type="hidden" name="PID" value="<?php echo $Id ?>">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="title">Title :</label>
                    <input type="text" name="title" id="edit-t" placeholder="Title" value="<?php echo $row['Title'] ?>">
                </div>
                <div class="form-group col-md-6">
                    <label for="salePrice">Sale Price :</label>
                    <input type="number" name="salePrice" id="edit-sp" placeholder="Sales Price" value="<?php echo $row['SalePrice'] ?>">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="rentprice">RentPrice:</label>
                    <input type="number" name="rentprice" id="edit-rp" value="<?php echo $row['RentPrice'] ?>" placeholder="rent price" >
                </div>
                <div class="form-group col-md-6">
                    <label for="rentduration">RentDuration:</label>
                    <input type="text" name="rentduration" id="edit-rd" value="<?php echo $row['RentDuration'] ?>" placeholder="rent duration" >                    
                </div>

            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="Categoru">Category:</label>
                    <select name="categoryID" id="edit-CID">
                    <option hidden="hidden" value="<?php echo $row['CategoryID'] ?>"><?php echo $row['Name'] ?></option>
                    <?php
                    $catsql = "SELECT * FROM `category` WHERE `ParentCategoryID` IS NOT NULL";
                    $catresult = mysqli_query($conn, $catsql);
                    while ($catrow = mysqli_fetch_assoc($catresult)) {
                        echo "<option name=".$catrow['CategoryID']." value=".$catrow['CategoryID'].">".$catrow['Name']."</option>";
                    }
                  ?>
                </select>
                
                </div>
                <div class="form-group col-md-6">
                    <label for="condition">AvailableForRent :</label>
                    <select name="AFR" id="edit-AFR">
                    
                    <option hidden="hidden" value="<?php echo $row['AvailableForRent']?>"><?php echo $AFR?></option>
                    <option value="1">Yes</option>
                    <option value="0">No</option>
                    </select>
                </div>
                <!-- <div class="form-group col-md-6">
                    <label for="rentduration">RentDuration:</label>
                    <input type="text" name="rentduration" id="edit-rd" value="" placeholder="rent duration" >                    
                </div> -->

            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="condition">Condition :</label>
                    <input type="text" name="condition" id="edit-c" placeholder="Condition" value="<?php echo $row['Condition1'] ?>">
                </div>
                <!-- <div class="form-group col-md-6">
                    <label for="image">Image :</label>
                    <input type="file" name="image" id="edit-img">
                </div> -->
               

            </div>
            <div class="form-group">
                <label for="description">Description :</label>
                <textarea name="description" id="edit-desc" placeholder="Description"><?php echo $row['Description1']?></textarea>
            </div>
            <div class="buttons">
            <a href="product.php" class="btn">close</a>    
            <input type="submit" class="btn" name="edit-product" value="Update Product">
            </div>
        </form>

</div>       
</div>
   
