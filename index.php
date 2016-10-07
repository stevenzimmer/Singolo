<?php get_header(); ?>


<!-- Slider section 
	================================================== -->


<section id="slider" data-type="background" data-speed="2">
	<div class="container">
		<div class="row">
			<div class="col-sm-4 col-sm-offset-1 col-xs-4 vert-align">
				<div class="mid">
					<img class="img-responsive" width="242" src="<?php the_field('vertical_image'); ?>">
				</div>
			</div>
			<div class="col-sm-7 col-xs-7 vert-align">
				<div class="mid">
					<img class="img-responsive" style="margin-left:6px" width="490" src="<?php the_field('horizontal_image'); ?>">
				</div>
			</div>
		</div>
	</div>
</section> <!-- End Slider section -->

<div class="bg-bottom red"></div> <!-- Slider section bottom -->


<!-- Services section 
	================================================== -->

<section id="services">
	<div class="container">
		<div class="row">
			<h2><?php the_field('services_header'); ?></h2>
			<p><?php the_field('services_text'); ?></p>
		</div>
		<div class="row icon">
			<div class="col-sm-4 col-xs-12">
				<div class="row">
					<div class="col-md-3 col-sm-12">
						<img width="59" src="<?php the_field('icon1'); ?>">
					</div>
					<div class="col-md-9 col-sm-12">
						<h4><?php the_field('icon1_title'); ?></h4>
						<p><?php the_field('icon1_text'); ?></p>
					</div>
				</div>
			</div>
			<div class="col-sm-4 col-xs-12">
				<div class="row">
					<div class="col-md-3 col-sm-12">
						<img width="59" src="<?php the_field('icon2'); ?>">
					</div>
					<div class="col-md-9 col-sm-12">
						<h4><?php the_field('icon2_title'); ?></h4>
						<p><?php the_field('icon2_text'); ?></p>
					</div>
				</div>
			</div>
			<div class="col-sm-4 col-xs-12">
				<div class="row">
					<div class="col-md-3 col-sm-12">
						<img width="59" src="<?php the_field('icon3'); ?>">
					</div>
					<div class="col-md-9 col-sm-12">
						<h4><?php the_field('icon3_title'); ?></h4>
						<p><?php the_field('icon3_text'); ?></p>
					</div>
				</div>
			</div>
			<div class="col-sm-4 col-xs-12">
				<div class="row">
					<div class="col-md-3 col-sm-12">
						<img width="59" src="<?php the_field('icon4'); ?>">
					</div>
					<div class="col-md-9 col-sm-12">
						<h4><?php the_field('icon4_title'); ?></h4>
						<p><?php the_field('icon4_text'); ?></p>
					</div>
				</div>
			</div>
			<div class="col-sm-4 col-xs-12">
				<div class="row">
					<div class="col-md-3 col-sm-12">
						<img width="59" src="<?php the_field('icon5'); ?>">
					</div>
					<div class="col-md-9 col-sm-12">
						<h4><?php the_field('icon5_title'); ?></h4>
						<p><?php the_field('icon5_text'); ?></p>
					</div>
				</div>
			</div>
			<div class="col-sm-4 col-xs-12">
				<div class="row">
					<div class="col-md-3 col-sm-12">
						<img width="59" src="<?php the_field('icon6'); ?>">
					</div>
					<div class="col-md-9 col-sm-12">
						<h4><?php the_field('icon6_title'); ?></h4>
						<p><?php the_field('icon6_text'); ?></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section> <!-- End Services section -->


<div class="bg-bottom white"></div> <!-- Services section bottom -->


<!-- About section 
	================================================== -->


<section id="about">
	<div class="container">
		<div class="row">
			<h2>About Us</h2>
			<p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum. Duis mollis, non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
		</div>
		<div class="row img">
			<div class="col-sm-4" style="padding-left:0">
					<img class="img-responsive" max-width="300" src="<?php the_field('about_image1'); ?>">
					<h4>Adam Jensen</h4>
					<p>Quisque luctus, quam eget molestie commodo, lacus purus cursus purus, nec rutrum tellus dolor id lorem.</p>
				
			</div>
			<div class="col-sm-4" style="padding: 0 7px">
				
					<img class="img-responsive" max-width="300" src="<?php the_field('about_image2'); ?>">
					<h4>Desmond Miles</h4>
					<p>Curabitur vestibulum eget mauris quis laoreet. Phasellus in quam laoreet, viverra lacus ut, ultrices velit.</p>
				
			</div>
			<div class="col-sm-4" style="padding-right:0">
				
					<img class="img-responsive" max-width="300" src="<?php the_field('about_image3'); ?>">
					<h4>Scolara Visari</h4>
					<p>Nulla sed nunc et tortor luctus faucibus. Morbi at aliquet turpis, et consequat felis. Quisque condimentum.</p>
				
			</div>
		</div>
	</div>
</section> <!-- End About section -->


<div class="bg-bottom white"></div> <!-- About section bottom -->


<!-- Quote section 
	================================================== -->


<section id="quote">
	<div class="container">
		<div class="row">
			<h2><?php the_field('quote_header'); ?></h2>
			<p><?php the_field('quote_text'); ?></p>
			
			<!-- Form  
			================================================== -->

			<form class="form-horizontal">
				<div class="form-group">
					<div class="col-sm-12">
						<input type="name" class="form-control" placeholder="<?php the_field('name_placeholder'); ?>">
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-12">
						<input type="email" class="form-control" placeholder="<?php the_field('email_placeholder'); ?>">
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-12">
						<input type="email" class="form-control" placeholder="<?php the_field('subject_placeholder'); ?>">
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-12">
						<textarea class="form-control" rows="7" placeholder="<?php the_field('message_placeholder'); ?>"></textarea>
					</div>
				</div>
			</form> <!-- End form -->
		</div>
	</div>
</section> <!-- End Quote section -->

<div class="bg-bottom red"></div> <!-- Quote section bottom -->


<?php get_footer(); ?>