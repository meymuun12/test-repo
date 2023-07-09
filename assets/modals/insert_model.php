<!-- Button to open the modal -->
<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Open Modal</button> -->

<!-- Modal dialog box -->
<div class="modal fade" id="CustomerAddModal" tabindex="-1" role="dialog" aria-labelledby="addModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addModalLabel">Add Customer</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="addForm" method="post" action="add_customer.php">
      <div class="modal-body">
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name" required>
            </div>
            
        </div>
        <div class="col-md-6">
          <div class="form-group">
                  <label for="name_s">Name(S):</label>
                  <input type="text" class="form-control" id="name_s" name="name_s" placeholder="Enter Second Name">
              </div>
              <div class="form-group">
                  <label for="gender">Gender:</label>
                  <select class="form-control" id="gender" name="gender">
                      <option value="male">Male</option>
                      <option value="female">Female</option>
                  </select>
              </div>
              
              <div class="form-group row">
                  <label for="tell">Tell:</label>
                  <input type="text" class="form-control" id="tell" name="tell" placeholder="Enter Telephone" required>
              </div>
              <div class="form-group">
                <label for="address">Address:</label>
                <input type="text" class="form-control" id="address" name="address" placeholder="Enter Address">
            </div>
        </div>
        
            
            <div class="col-md-6">
            <div class="form-group">
                <label for="id_documents">ID Documents:</label>
                <input type="file" class="form-control-file" id="id_document" name="id_document" accept="image/*" required>            </div>
            <div class="form-group">
              <label for="room_number">SelectRoom Number:</label>
              <!-- <input type="text" class="form-control" id="room_number" name="room_number" pattern="(^\d{2}$)|(^\d{1},\d{2}$)(^\d{2}$)|(^\d{1},\d{2}$)" title="Fadlan gali hal qol number ama labo qol una dhexeysii comma"> -->
              <input type="text" class="form-control" name="room_numbers" pattern="^\d{1,2}([,]\d{1,2})?$" title="Fadlan gali hal qol number ama labo qol una dhexeysii comma" required>


            </div>
            <div class="form-group">
                <label for="amount_paid">Amount Paid:</label>
                <input type="text" class="form-control" id="amount_paid" name="amount_paid" placeholder="Enter Amount Paid">
            </div>
            <div class="form-group">
                <label for="date">Date:</label>
                <input type="date" class="form-control" id="date" name="date" placeholder="Enter Date">
            </div>
        </div>
    </div>
</div>

       <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
      </form>
    </div>
  </div>
</div>



<!-- edit modal -->
<!-- Modal dialog box -->
<div class="modal fade" id="CustomerEditModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <!-- Modal header -->
      <div class="modal-header">
        <h5 class="modal-title" id="myModalLabel">Modal Title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <!-- Modal body -->
      <div class="modal-body">
      <form>
    <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" required>
    </div>
    <div class="form-group">
      <label for="telephone">Telephone:</label>
      <input type="tel" class="form-control" id="telephone" name="telephone" placeholder="Enter your telephone number">
    </div>
    <div class="form-group">
      <label for="address">Address:</label>
      <textarea class="form-control" id="address" name="address" rows="3" placeholder="Enter your address"></textarea>
    </div>
    <div class="form-group">
      <label for="date">Date:</label>
      <input type="date" class="form-control" id="date" name="date">
    </div>
  </form>
      </div>
      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>