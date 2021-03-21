<div class="container">
  <div class="row">
    <div class="col-lg-12">
      <br>

      <center>
      <h2 >Available Admin</h2>
      <?php if ($this->session->flashdata('class')): ?>
        <div class="alert <?php echo $this->session->flashdata('class') ?> alert-dismissible" role="alert">

  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>

  </button>
  <?php echo $this->session->flashdata('message'); ?>
  
    
</div>
              
            <?php endif; ?>
    </center>
    <br>
    </div>
    
    
    <table class="table table-bordered">

  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
     
      <th scope="col" colspan="2">
        <center>
      Action
       </center>
    </th>
    </tr>
  </thead>
  <tbody>
    <?php 
        $i=1;
        if ($allGuide) {
          # code...
        
        foreach ($allGuide as $p) {
          # code...
       

     ?>
    <tr>
      <th scope="row"><?php echo $i++; ?></th>
       <td><?php echo $p->admin_name ?></td>
       <td><?php echo $p->admin_email ?></td>
     
      <td><button class="btn btn-info"><a style="color:#ffff" href="<?php echo base_url('admin/editAdmin/'.$p->admin_id) ?>">Edit</a></button></td>
      <td><button class="btn btn-danger"><a style="color:#ffff" href="<?php echo base_url('admin/deleteAdmin/'.$p->admin_id) ?>">Delete</a></button></td>
      
    </tr>
<?php }
} ?>
  </tbody>
</table>
  </div>
</div>