<?php
include 'include/session.php';
include 'include/header.php';
include 'include/navbar.php';
?>
    <div class="form-container">
        <h2>Edit Product</h2>
        <form action="update-product.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="productID" value="<?php echo $productID; ?>">
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" id="title" value="<?php echo $title; ?>" required>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" id="description" required><?php echo $description; ?></textarea>
            </div>
            <div class="form-group">
                <label for="salePrice">Sale Price</label>
                <input type="number" name="salePrice" id="salePrice" value="<?php echo $salePrice; ?>" required>
            </div>
            <div class="form-group">
                <label for="condition">Condition</label>
                <input type="text" name="condition" id="condition" value="<?php echo $condition; ?>" required>
            </div>
            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" name="image" id="image">
            </div>
            <div class="form-group">
                <button type="submit" class="gold" name="product_edit">Update Product</button>
            </div>
        </form>
    </div>

    <?php
include 'include/script.php';
?>