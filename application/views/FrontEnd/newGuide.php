</div>

<div class="container">
  <div class="row">
    <?php if ($this->session->userdata('User_type')){ ?>
    
  <?php } elseif ($this->session->userdata('user_name')) {
    # code...
  }  elseif(!$this->session->userdata('logged_in')){ ?>

  <?php } ?>
 <div class="col-lg-12" style="margin-bottom: 2%;">
    <center>
    
      <?php if ($this->session->flashdata('class')): ?>
        <div class="alert <?php echo $this->session->flashdata('class') ?> alert-dismissible" role="alert">

  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>

  </button>
  <?php echo $this->session->flashdata('message'); ?>
  
    
</div>
              
            <?php endif; ?>
            <div class="col-lg-12"><h1 style="margin-bottom: 3%;color: #F78536; margin-top: 3%;">Our Guides</h1></div>
            
    </center>
 </div>
  <?php 
       if ($allGuide) {
         foreach ($allGuide as $p) {
           # code...
        
   ?>

    <div class="col-lg-4 fh5co-blog animate-box" style="margin-bottom: 2%">
      <div class="card" style="border: 1px solid #F78536" >
  <img class="card-img-top" style="width: 100%; height: 200px" src="<?php echo base_url('assets/images/'.$p->pic) ?>" alt="Card image cap">
  <div class="card-body" style="margin-left: 8%">
    <center><h3 class="card-title" style="padding-top: 4%;font-weight: bold;"><?php echo $p->name ?></h3></center>
    <h5 class="card-text" style="color:black">Nationality- <?php echo $p->nationality ?></h5>
    <h5 class="card-text" style="color:black">Address- <?php echo $p->address ?></h5>
    <h5 class="card-text" style="color:black">Mobaile- <span style="color:#643153">0<?php echo $p->mobailenumber ?></span> </h5>
    <h5 class="card-text" style="color:black">Guided Area- <span style="color: #F78536;font-weight: bold"><?php echo $p->area ?></span> </h5>
  </div>
 
  <div class="card-body" style="margin-bottom: 2%;margin-left: 2%">
    <a href="<?php 
            if($this->session->userdata('id')){
              echo site_url('home/guideBooking/'.$p->id);
            }else{
              echo base_url('home/signin');
            }



     ?>" class="btn btn-primary">Book Him</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
     <?php if ($this->session->userdata('id')) {
       # code...
      ?>
     <a href="<?php echo base_url('home/ratingUp/'.$this->session->userdata('id').'/'.$p->id) ?>" style="color:black">
    <i class="fa fa-thumbs-up fa-2x" aria-hidden="true"></i>
    </a>
    <?php 
     $up=$this->modUser->fetchallUp($p->id);
     ?>
     <span style="color:#337ab7;font-weight: bold"><?php echo count($up); ?></span>
  <?php }else{ ?>
    <i class="fa fa-thumbs-up fa-2x" aria-hidden="true"></i>
     <?php 
     $up=$this->modUser->fetchallUp($p->id);
     ?>
     <span style="color:#337ab7;font-weight: bold"><?php echo count($up); ?></span>
  <?php } ?>

    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
    <?php 
    if ($this->session->userdata('id')) {
      
   
     ?>
    <a href="<?php echo base_url('home/ratingDown/'.$this->session->userdata('id').'/'.$p->id) ?>
    " style="color: black">
    <i class="fa fa-thumbs-down fa-2x" aria-hidden="true"></i>
    </a>
    <?php 
     $down=$this->modUser->fetchallDown($p->id);
     ?>
     <span style="color:red;font-weight: bold"><?php echo count($down); ?></span>

  <?php 

}else{ ?>
    <i class="fa fa-thumbs-down fa-2x" aria-hidden="true"></i>
     <?php 
     $down=$this->modUser->fetchallDown($p->id);
     ?>
     <span style="color:red;font-weight: bold"><?php echo count($down); ?></span>
  <?php } ?>
  </div>
</div>
    </div>
  <?php }
  }else{ ?>
    <div class="col-lg-12">
      <span class="card" style="margin-top: 15%;margin-bottom: 15%">
        <div class="alert danger alert-dismissible" role="alert">

  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>

  </button>
  <h1 style="color:red"><center>Sorry!No Guide Available There!!</center>  </h1>
  
  
    
</div>
      </span>
      

    </div>
  <?php } ?>
        
        
  </div>
</div>