<div class="content-wrapper">
	<div class="row padtop">
		
		<div class="col-md-6 col-md-offset-2" style="margin-left: 150px;margin-top: 30px">
			<h2>Edit Guide</h2>
			<?php echo form_open_multipart('admin/updateAdmin','','') ?>
<input name="admin_id" type="hidden" value="<?php echo $allGuide[0]['admin_id']; ?>">
           <div class="form-group">
							<label style="color:black">Name</label>
							<input type="text" name="admin_name" class="form-control" required="" value="<?php echo $allGuide[0]['admin_name'] ?>">
			</div> 
			<div class="form-group">
							<label style="color:black">Email</label>
							<input type="text" name="admin_email" class="form-control" required="" value="<?php echo $allGuide[0]['admin_email'] ?>">
			</div>
			

			<div class="form-group">
				<?php echo form_submit('Update','Update','class="btn btn-primary"'); ?>
			</div>
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
			<?php echo form_close(); ?>
		</div>
		<div class="col-md-3">
			
		</div>
	</div>
</div>