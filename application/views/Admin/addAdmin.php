<div class="container">
  <div class="row">
    <div style="margin-top:30px;margin-left: 150px;">
    <!--Material textarea-->

  <?php echo form_open_multipart('Admin/adminAdd','','') ?>
  <h2>Add Admin</h2>
  <div>
      <?php if ($this->session->flashdata('class')): ?>
        <div class="alert <?php echo $this->session->flashdata('class') ?> alert-dismissible" role="alert">

  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>

  </button>
  <?php echo $this->session->flashdata('message'); ?>
  
    
</div>
              
            <?php endif; ?>
    </div>
           <div class="form-group">
              <label style="color:black"> Admin Name</label>
              <input type="text" name="admin_name" class="form-control" required="">

            </div>
            <div class="form-group">
              <label style="color:black">Email</label>
              <input type="text" name="admin_email" class="form-control" required="">

            </div>
            
            <div class="form-group">
              <label style="color:black">Password</label>
              <input type="password" name="admin_password" class="form-control" required="">
            </div>

<div class="form-group">
        <?php echo form_submit('Add Admin','Add Admin','class="btn btn-primary"'); ?>
      </div>
      



</div>
  </div>
</div>