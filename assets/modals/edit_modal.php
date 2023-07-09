<!-- Edit Staff Modal -->
<div class="modal fade" id="StaffEditModal<?php echo $row[0];?>" tabindex="-1" role="dialog" aria-labelledby="StaffEditModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="StaffEditModalLabel">Edit Staff Information</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="edit_staf.php" method="POST">
        <input type="hidden" name="staff_id" value="<?php echo $row[0]; ?>">

          
          <div class="form-group">
            <label for="staff_name">Name:</label>
            <input type="text" class="form-control" id="staff_name" value="<?php echo $row[1];?>" name="staff_name" required>
          </div>
          <div class="form-group">
            <label for="staff_tell">Phone Number:</label>
           <input type="tel" id="staff_tell" value="<?php echo $row[2];?>" name="staff_tell" placeholder="+252 61X" pattern="061[0-9]{7}" title="Number ka si sax ah uqor (ex: 061XXXXXXX)" required>

          </div>
          <div class="form-group">
            <label for="staff_address">Address:</label>
            <input class="form-control" id="staff_address" value="<?php echo $row[3];?>" name="staff_address" rows="3" required></input>
          </div>
          <div class="form-group">
            <label for="staff_gender">Gender:</label>
            <select class="form-control" id="staff_gender" value="<?php echo $row[4];?>" name="staff_gender" required>
              
              <option value="Male">Male</option>
              <option value="Female">Female</option>
            </select>
          </div>
         
          
          <div class="form-group">
          <label for="staff_role">Role:</label>
          <select class="form-control" id="staff_role" value="<?php echo $row[5];?>" name="staff_role" required>
              <option value="">--Select Role--</option>
              <option value="Receptionist">Receptionist</option>
              <option value="Cleaner">Cleaner</option>
              <option value="Technical">Technical</option>
            </select>
          </div>
          <button type="submit" id="submitedit" name="submitedit" class="btn btn-primary">Save Changes</button>
        </form>
        
      </div>  
    </div>
  </div>
</div>
