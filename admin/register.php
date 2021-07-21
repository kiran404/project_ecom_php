<?php 
include('includes/header.php'); 
include('includes/navbar.php');
include('includes/topnavbar.php');
?>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    <form action="code.php" method="POST">
        <div class="modal-body">
            <div class="form-group">
                <label>User Name</label>
                <input type="text" name="username" class="form-control">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control">
            </div>
        </div>   
      
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" name="registerbtn" class="btn btn-primary">Save changes</button>
      </div>
    </form>
    
  </div>
  </div>
</div>


<?php  
  include('includes/scripts.php') ;
  include('includes/footer.php') ;
  ?>