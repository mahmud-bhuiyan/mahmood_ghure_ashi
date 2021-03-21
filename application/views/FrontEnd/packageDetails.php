<div class="row">
	
	<div class="container">
	<div class="col-lg-12" ><center><h2 style="color: #F78536;margin-top:3%;margin-bottom:3%">Explore Best Package From Our Service</h2></center></div>
	<?php 

	   	foreach ($packageDetails as $p) {

                 	
			 ?>
					<div class="col-md-12 animate-box">
						<h2 class="heading-title"><center><?php echo $p->package_name ?></center></h2>
					</div>
					<div class="col-md-6 animate-box">
						<p style="color:black;"><?php echo $p->body ?></p>
						<br><br>
						<center>
								<h4 style="font-weight: bold;">Price: <?php echo $p->price; ?></h4>
								<h5 style="font-weight: bold;">Lunch: Free</h5>
							</p>
						</center>
						
					</div>
					
					<div class="col-md-6 animate-box">
						<img style="width: auto;height: 300px" src="<?php echo base_url('assets/images/'.$p->img) ?>">
						
						
					</div>
					<div class="col-md-12 animate-box" style="margin-bottom:5%">
						 <center>
      
    <a style="margin-top: 20px;margin-bottom: 10px" href="<?php 
            if($this->session->userdata('id')){
              echo site_url('home/packageBooking/'.$p->id."/".$this->session->userdata('id'));
            }else{
              echo base_url('home/signin');
            }



     ?>" class="btn btn-primary">Book This Pakage</a>
    </center>
					</div>
				<?php }
				 ?>
				</div>
			
		</div>
				