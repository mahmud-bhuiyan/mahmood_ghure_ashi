<div class="row">
	<?php 

if (!empty($allPlace)) { ?>
	
	<div class="container">
	<div class="col-lg-12" ><center><h1 style="color: #F78536;margin-top:3%;margin-bottom:3%">Explore Best Place From Beautiful Bangladesh</h1></center></div>
	<?php 
		$divCount=0;
            if ($allPlace) { foreach ($allPlace as $p) { ?>

					<div class="col-md-12 animate-box">
						<h3 class="heading-title"><center><?php echo $p->place_name ?></center></h3>
					</div>
					<div class="col-md-4 animate-box" style="margin-bottom: 3%;">
						<p style="color:black;margin-top: -2%;"><?php echo $p->place_description ?> </p>
						<center>
							<p><a href="<?php echo base_url('home/fetchGuideByPlaceName/'.$p->area) ?>" class="btn btn-primary" style="margin-bottom: 15px;">Contract Our Local Guide</a></p>
						</center>
						
					</div>
					<div class="col-md-5 animate-box">
						<img style="width: auto;height: 300px" src="<?php echo base_url('assets/images/'.$p->img) ?>">
					</div>
					<div class="col-md-3 animate-box">

	<?php if ($divCount==0) { ?>
		<br>
		<h3 style="color: #563d7c;margin-top: -12%"><a href="<?php echo base_url('home/places') ?>">Available Place</a></h3>
		<ul class="list-group list-group-flush" style="color:black">

			<?php if ($placeType) { foreach ($placeType as $p) { ?>

				<li class="list-group-item" style="font-weight: bold;color:black"><a style="color: black" href="<?php echo base_url('home/fetchCatById/'.$p->ptype_name) ?>"><?php echo $p->ptype_name; ?></a></li>	
	<?php } } ?>
		</ul>

	<?php $divCount++;
} ?>
						
					</div>
				<?php }
				} ?>
				</div>
			<?php }else{ ?>
				<div class="container">
					<div class="col-md-8 animate-box">
						<center>
							<h2 style="margin-top: 10%">Sorry!No Place Availabe</h2>
						</center>
					</div>
					<div class="col-md-4 animate-box">

						<h3 style="color: #563d7c;">Available Place</h3>
		<ul class="list-group list-group-flush" style="color:black">
				<?php if ($placeType) {
					foreach ($placeType as $p) {
						
				 ?>
		<li class="list-group-item" style="font-weight: bold;color:black"><a style="color: black" href="<?php echo base_url('home/fetchCatById/'.$p->ptype_name) ?>"><?php echo $p->ptype_name; ?></a></li>
				
			
		<?php }
		} ?>
		</ul>
						

					</div>
				</div>
			<?php } ?>
				</div>