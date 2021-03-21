<div class="container">
  <div class="row row-bottom-padded-md">
    <div class="col-lg-12">
      <center>
        <h1 style="margin-bottom: 3%;color: #F78536; margin-top: 3%;">Our Packages</h1>
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

    <?php 
        if ($allPackage) {
          
         foreach ($allPackage as $p) {
         	$des = $p->package_name;
          $descri = word_limiter($des, 10);
    ?>

    <div class="col-lg-4 col-md-4 col-sm-6">
      <div class="fh5co-blog animate-box">
        <a href="#"><img style="height: 300px" class="img-responsive" src="<?php echo base_url('assets/images/'.$p->img) ?>" alt=""></a>
        <div class="blog-text">
          <div class="prod-title">
            
            <center>
              <h3><a href="#"><?php echo $descri ?></a></h3>
              <p><a href="<?php echo base_url('home/packageDetails/'.$p->id) ?>">See Details...</a></p>
              <a style="margin-bottom: 10px" href="<?php 
                if($this->session->userdata('id')){
                  echo site_url('home/packageBooking/'.$p->id."/".$this->session->userdata('id'));
                }else{
                  echo base_url('home/signin'); } ?>" class="btn btn-primary">Book This Pakage</a>
            </center>

          </div>
        </div>
      </div>
    </div>
    
    <?php } } ?>

    <div class="clearfix visible-sm-block"></div>

    <div class="clearfix visible-md-block"></div>
  </div>

  <div class="col-md-12 text-center animate-box">
    <p><a class="btn btn-primary btn-outline btn-lg" href="#">See More Packages<i class="icon-arrow-right22"></i></a></p>
  </div>

</div>