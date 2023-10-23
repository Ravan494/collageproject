<!-- Edit User Modal -->
<div class="modal fade" id="user-edit-Modal" tabindex="-1" aria-labelledby="userEditModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="userEditModalLabel">Edit User</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- Edit User Form -->
        <form id="edit-user-form" method="post" action="user_edit.php">
          <!-- User ID (Hidden) -->
          <input type="hidden" id="edit-user-id" name="edit-user-id" value="">
          
          <!-- Name -->
          <div class="form-groups">
            <label for="edit-user-name">Name:</label>
            <input type="text" class="form-control" id="edit-user-name" name="edit-user-name" required>
          </div>
          
          <!-- Email -->
          <div class="form-groups">
            <label for="edit-user-email">Email:</label>
            <input type="email" class="form-control" id="edit-user-email" name="edit-user-email" required>
          </div>
          
          <!-- Phone -->
          <div class="form-groups">
            <label for="edit-user-phone">Phone No:</label>
            <input type="number" class="form-control" id="edit-user-phone" name="edit-user-phone" required>
          </div>
          
          <!-- Password -->
          <div class="form-groups">
            <label for="edit-user-password">Password:</label>
            <input type="password" class="form-control" id="edit-user-password" name="edit-user-password" required>
          </div>
          
          <!-- Submit Button -->
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary" name="user_edit">Save Changes</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>



<!--Delete User Modal -->
<div class="modal fade" id="delete-User-Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Deleting...</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="delete_user.php" method="post">
        <input type="hidden" class="userid" name="id">
        <center>Do You Really Want To Delete 
          <p id="delete-user-name" class="h1 fw-bold justify-content-center"></p>
        </center>
      </div>
      <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="delete" class="btn btn-danger" >Delete</button>
        </form>
      </div>
    </div>
  </div>
</div>