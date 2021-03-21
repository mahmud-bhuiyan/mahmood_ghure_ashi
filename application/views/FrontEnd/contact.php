</div>

<div class="container">
  <div class="row">
    <div class="col-lg-12" style="margin-top: 3%;">
      <center><h1 style="color:#F78536" style="margin-top: 1%">Contact With Us</h1>
        <div id="order_modal" class="modal fade" role="dialog">


<!-- start of order confirm modal -->
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4>Congratulations!</h4>
      </div>
      <div class="modal-body">
        <p> <?php  
          if($this->session->flashdata('order')){ echo $this->session->flashdata('order'); }
          ?></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>


  </div>
</div>
        
      </center>

    </div>
   
    <div class="col-lg-3"></div>
    

    <div class="col-lg-6" style="margin-bottom:1%">
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
      <form  action="<?php echo site_url('Home/userMessage') ?>" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1" style="color:black">Your Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="sender_name" aria-describedby="emailHelp" placeholder="Enter Your Name">
   
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1" style="color:black">Email</label>
    <input type="email" class="form-control" id="exampleInputPassword1" name="sender_email" placeholder="example@exaple.com">
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1" style="color:black">Your Messsage</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" name="msg_body" rows="5"placeholder="Type your message"></textarea>
  </div>
  
  <button type="submit" class="btn btn-primary" style="margin-bottom: 20px;">Send</button>
</form>
    



    </div>
    <div class="col-lg-3" ></div>
    
  
  </div>
</div>