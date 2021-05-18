<?php
/*
Template Name: XBATT Page
*/
?>
<style>
	.roofTilesPage .roofTilesCoverSectionOne .roofTilesCoverSectionOneCopy p{
        max-width: 500px;
        margin: auto;
	}
	.flex-direction-nav a::before{
		color: #fff !important;
	}
	.flex-control-paging li a{
		background: #fff !important;
	}
	.flex-control-paging li a.flex-active{
		background: #08bf78 !important;
	}
	@media(min-width:1200px){
		.roofTilesPage .roofTilesCoverSectionOne .roofTilesCoverSectionOneCopy {
        	padding: 130px 0 !important;
		}
		.roofTilesPage .roofTilesCoverSectionOne .roofTilesCoverSectionOneCopy p{
        	float: right;
		}
	}
</style>
<?php get_header(); ?>
<main class="roofTilesPage">
	<section class="whatIsItCover roofTilesCover" style="background-image: url('<?php the_field('cover_image'); ?>')">
		<div class="container">
			<div class="roofTilesCoverCopy">
				<h1><?php the_field('cover_title'); ?></h1>
				<?php the_field('cover_copy'); ?>
			</div>
		</div>
	</section>
	<section class="roofTilesVideo">
		<div class="container">
			<h2><?php the_field('video_title'); ?></h2>
			<div class="roofTilesVideoWrapper">
				<?php the_field('video_link'); ?>
			</div>
		</div>
	</section>
	
	<section class="roofTilesTechnologies">
		<div class="container">
			<h2><?php the_field('technologies_title'); ?></h2>
			<?php the_field('technologies_list'); ?>
		</div> 
	</section>
	<section class="roofTilesCoverSectionOne">
		<div class="roofTilesCoverSectionOneImage" style="background-image: url(<?php the_field('section_one_image'); ?>); "></div>
			<div class="roofTilesCoverSectionOneCopy">
				<?php the_field('section_one_copy'); ?>
			</div>
	</section>
	<!--<section class="roofTilesStyles" style="background-image: url(<?php the_field('styles_background_image'); ?>);">
		<span>styles coming soon</span>
	</section>-->
	<section class="roofTilesCarousel">
		<div class="container">
			<h2><?php the_field('carousel_title'); ?></h2>
			<div class="roofTilesCarouselWrapper">
				<div class="flexslider">
					<ul class="slides">
						<?php 
					if( have_rows('carousel_images') ):
					while ( have_rows('carousel_images') ) : the_row(); ?>
					<li>
						<img src="<?php the_sub_field('carousel_image'); ?>" />
					</li>
					<?php endwhile;
					endif; ?>
					</ul>
				</div>
			</div>
		</div>
	</section>
	<!--<section class="roofTilesFeatures">
		<div class="container">
			<h2><strong>THE</strong> features</h2>
			<div class="featuresList">
				<ul>
					<strong>Benefits for end-users</strong>
					<?php 
					if( have_rows('benefits_for_end-users') ):
					while ( have_rows('benefits_for_end-users') ) : the_row(); ?>
					<li>
						<?php the_sub_field('benefits_for_end-users_list_item'); ?>
					</li>
					<?php endwhile;
					endif; ?>
				</ul>
				<ul>
					<strong>Benefits for contractors</strong>
					<?php 
					if( have_rows('benefits_for_contractors') ):
					while ( have_rows('benefits_for_contractors') ) : the_row(); ?>
					<li>
						<?php the_sub_field('benefits_for_contractors__list_item'); ?>
					</li>
					<?php endwhile;
					endif; ?>
				</ul>
				<ul>
					<strong>Benefits for distributors</strong>
					<?php 
					if( have_rows('benefits_for_distributors') ):
					while ( have_rows('benefits_for_distributors') ) : the_row(); ?>
					<li>
						<?php the_sub_field('benefits_for_distributors_list_item'); ?>
					</li>
					<?php endwhile;
					endif; ?>
				</ul>
			</div>
			<div class="epd">
				<div class="epdContentWrapper">
					<div class="epdLogo">
						<img src="<?php the_field('epd_image'); ?>" alt="">
					</div>
					<div class="epdText">
						<?php the_field('epd_text'); ?>
					</div>
				</div>
			</div>
		</div>
	</section>-->
	
	<section class="roofTilesLearnMore">
		<div class="container">
			<h2>To Learn more about <br><strong> X-BATT™ and it's applications, </strong></h2>
			<a href="#roofTilesContact" class="btn-primary btn-float">CLICK HERE</a>
		</div>
	</section>
	<section class="roofTilesSemplastics">
		<div class="container">
			<div class="roofTilesSemplasticsLogo">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/semplastics-logo-white.png" alt="">
			</div>
			<div class="roofTilesSemplasticsText">
				<?php the_field('semplastics_text'); ?>
			</div>
		</div>
	</section>
	<section class="roofTilesContact" id="roofTilesContact">
		<div class="container">
			<h2><strong>Contact us</strong> to learn more</h2>
			<div class="roofTilesContactIntroText">
				<?php the_field('contact_form_intro_text'); ?>
			</div>
			<div class="roofTilesContactForm">
				<?php echo do_shortcode('[formidable id=9]'); ?>
			</div>
			
		</div>
	</section>
</main>
<?php get_footer(); ?>
