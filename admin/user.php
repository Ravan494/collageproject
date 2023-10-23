<?php 
include 'include/session.php'; 
include 'include/message.php'; 
include 'include/dashboard_header.php'; 
?>
<body>
<section class="dashboard">
    <?php include 'include/dashboard_left_side.php' ?>
    <div class="user_show container">
        <div class="heading">
            <h1>User</h1>
            <button id="add_new_User" class="pull-right">Add New User</button>
        </div>
        <hr>
        <div class="user-table">
            <table id="myTable" class="table table-striped table-dark">
                <thead>
                    <tr>
                        <th scope="col">S.no</th>
                        <th scope="col">Name</th>
                        <th scope="col">E-mail</th>
                        <th scope="col">Date-of-join.</th>
                        <!-- <th scope="col">Tools</th> -->
                        <!-- <th scope="col">condition</th> -->
                        <!-- <th scope="col">Rent price</th>
                        <th scope="col">Rent duration</th>
                        <th scope="col">Available for rent</th> -->
                        <th scope="col">Tools</th>
                        <!-- <th scope="col">Delete</th> -->
                    </tr>
                </thead>
                <tbody>
                    <?php
                if ($conn) {
                    $sql = 'SELECT * FROM `user`';
                    $result = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($result) > 0) {
                        $i=1;
                        while ($row = mysqli_fetch_assoc($result)) {
        
        
                            echo' <tr>
                            <td>'.$i.'</td>
                            <td>'.$row['Name'].'</td>
                            <td>'.$row['Email'].'</td>
                            <td>'.$row['DateJoined'].'</td>
                       
                            <td>
                                <div class="tools d-flex gap-3">
                                
                                    <button type="button" class="btn btn-success user-edit" id="user-edit" data-toggle="modal" data-target="#user-edit-Modal" data-id="'.$row['UserID'].'" data-name="'.$row['Name'].'" data-email="'.$row['Email'].'" data-phone="'.$row['Phone'].'" data-password="'.$row['Password'].'">
                                        <i class="bi bi-pencil-square"></i>Edit
                                    </button>
                                    
                                    <button type="button" class="btn btn-danger gap-1 delete-user" data-toggle="modal" data-target="#delete-User-Modal" data-id="'.$row['UserID'].'" data-name="'.$row['Name'].'">
                                        <i class="bi bi-trash-fill"></i>Delete  
                                    </button>
                                
                                </div>
                            </td>
                            
                        </tr>';
                      
                        $i++;
                        }
        
                    }
                }
                    ?>
</tbody>
    </div>
</section>   
<?php 
    // include 'include/product_add.php';
    // include 'include/product_edit.php';
    include 'include/user_modal.php';
    include 'include/script.php'; ?> 
</body>
</html>
