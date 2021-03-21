<div id="fh5co-destination">
			<div class="tour-fluid">
				<div class="row">
					<div class="col-md-12">
						<ul id="fh5co-destination-list" class="animate-box">
						
						<?php foreach ($FirstFive as $first) { ?>

							<li class="one-forth text-center" style="background-image: url(assets/images/<?php echo $first->img ?>); ">
								<a href="#">
									<div class="case-studies-summary">
										<h2 style="color:#F78536"><?php echo $first->place_name ?></h2>
									</div>
								</a>
							</li>
							
						<?php } ?>

							
							<li class="one-half text-center">
								<div class="title-bg">
									<div class="case-studies-summary">
										<h2>Most Popular Destinations</h2>
										<span><a href="<?php echo base_url('home/places') ?>">View All Destinations</a></span>
									</div>
								</div>
							</li>

						<?php foreach ($LastFive as $first) { ?>

							<li class="one-forth text-center" style="background-image: url(assets/images/<?php echo $first->img ?>); ">
								<a href="#">
									<div class="case-studies-summary">
										<h2 style="color:#F78536"><?php echo $first->place_name ?></h2>
									</div>
								</a>
							</li>

						<?php } ?>
							
							
							
						</ul>		
					</div>
				</div>
			</div>
		</div>