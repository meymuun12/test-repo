<!-- Modal -->
<div class="modal fade" id="deleteStaffModal<?php echo $row[0];?>" tabindex="-1" aria-labelledby="deleteStaffModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-danger text-white">
        <h5 class="modal-title" id="deleteStaffModalLabel">Delete Staff Member</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="delete_staff.php" method="POST">
        <div class="modal-body">
          <input type="hidden" name="staff_id" value="<?php echo $row[0]; ?>">
          <p>Are you sure you want to delete <strong><?php echo $row[1];?></strong>?</p>
        </div>
        <div class="modal-footer">
          <button type="button" data-dismiss="modal" class="btn btn-secondary">Cancel</button>
          <button type="submit" name="submitdelete" class="btn btn-danger">Delete</button>
        </div>
      </form>
    </div>
  </div>
</div>
