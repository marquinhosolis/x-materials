<?php
/*
Template Name: Contact Page
*/
?>

<?php get_header(); ?>
	<section class="contactUs">
		<div class="container">
			<h2><strong>Contact</strong> us</h2>
			<div class="contactUsContent">
				<div class="contactUsaddress">
					<span class="contactUsaddressStreet"><a href="https://www.google.com.br/maps/place/3259+Progress+Dr+%23115,+Orlando,+FL+32826,+EUA/@28.5898581,-81.2002169,17z/data=!3m1!4b1!4m5!3m4!1s0x88e76865a910396f:0xc7b5230bc79b8557!8m2!3d28.5898581!4d-81.1980282?dcr=0" target="_blank"><i class="fa fa-map-marker" aria-hidden="true"></i> 3259 progress drive, room 115, orlando, fl 32826 <br>Orlando, FL 32826</a></span>
					<span class="contactUsaddressPhone"><a href="tel:4073536885"><i class="fa fa-phone" aria-hidden="true"></i> 407.353.6885</a></span>
				</div>
				<div class="contactUsText">
					<h3><?php the_field('contact_page_title'); ?></h3>
					<?php the_field('contact_page_copy'); ?>
				</div>
				<div class="contactUsForm">
					<?php echo do_shortcode('[formidable id=6]')?>
				</div>
			</div>

		</div>
		<div class="contactUsImage">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/contact-us-image.png" alt="">
		</div>
	</section>
	</main>
<?php get_footer('contact'); ?>
