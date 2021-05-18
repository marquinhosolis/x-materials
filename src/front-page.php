<?php
/*
Template Name: Home Page
*/
?>

<?php get_header(); ?>
	<section class="coverHome">
		<div class="container">
			<div class="coverContent">
				<!-- <div class="logoCover">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/xmat-logo-white_new.png" alt="X-Mat Logo">
				</div> -->
				<h1><?php the_field('cover_heading'); ?></h1>
				<h2><?php the_field('cover_subheading'); ?></h2>
				<a class="btn-primary lightBoxVideoLink" href="https://www.youtube.com/embed/7y2xKR4AEjY?autoplay=true">watch video</a>
			</div>
		</div>
	</section>
	<main class="frontPage">
		<section class="IconsAndAdvanecdMaterials">
			<div class="container">
				<div class="icons">
					<div class="icon">
						<div class="iconImage">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icon-lightweight.png" alt="">
						</div>
						<div class="iconText">
							<h3>LIGHTWEIGHT</h3>
							<p>Specific Density 1.69g/cc</p>
						</div>
					</div>
					<div class="icon">
						<div class="iconImage">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icon-highTOperation.png" alt="">
						</div>
						<div class="iconText">
							<h3>HIGH T OPERATION</h3>
							<p>Continuous Operating T Range -150°C to 1100°C</p>
						</div>
					</div>
					<div class="icon">
						<div class="iconImage">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icon-thermallyStable.png" alt="">
						</div>
						<div class="iconText">
							<h3>Thermally STABLE</h3>
							<p>Low CTE Material</p>
						</div>
					</div>
					<div class="icon">
						<div class="iconImage">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icon-greenTechnology.png" alt="">
						</div>
						<div class="iconText">
							<h3>“GREEN” TECHNOLOGY</h3>
							<p>Environmentally Friendly Production</p>
						</div>
					</div>
				</div>
				<div class="advancedMaterials">
					<h2><?php the_field('icons_section_title'); ?></h2>
					<div class="advancedMaterialsText">
						<?php the_field('icons_section_copy'); ?>
					</div>
					<a href="<?php echo site_url(); ?>/what-is-it/" class="btn-primary">Learn more about the process</a>
				</div>

			</div>
		</section>
		<section class="unlimitedPossibilities">
			<div class="container">
				<div class="unlimitedPossibilitiesIntroText">
					<h2><strong>Unlimited</strong> Possibilities</h2>
					<?php the_field('unlimited_possibilities_copy'); ?>
				</div>
			</div>
			<div class="unlimitedPossibilitiesWrapper">
				<?php
					$args = array(
						'post_type'      => 'applications_pt',
						'posts_per_page' => '3',
					);

				$query = new WP_Query( $args );
				?>

				<?php if ( $query->have_posts() ): ?>
				<?php while ( $query->have_posts() ): $query -> the_post();?>
					<?php 
						$applicationLink = get_field('application_link');
					?>
					<a href="<?php echo $applicationLink; ?>" class="unlimitedPossibilitiesItem">
						<div class="unlimitedPossibilitiesItemCover" style="background-image: url(<?php the_field('application_big_image'); ?>) ;">
							<h3><?php the_title(); ?></h3>
						</div>
						<h5><?php the_title(); ?></h5>
						<h4><?php the_field('application_title'); ?></h4>
						<div><?php the_field('unlimited_possibilities_intro'); ?></div>
						<span>Learn more &rarr;</span>
					</a>
				<?php endwhile ?>
				<?php endif ?>
				<?php wp_reset_postdata(); ?>

				<div class="seeMoreAplicationsLink">
					<a href="<?php echo site_url(); ?>/applications/" class="btn-primary">see more applications</a>
				</div>
			</div>
			
		</section>
		<section class="featuredNews">
			<div class="container">
				<h2><strong>Featured</strong> News</h2>
			</div>
			<div class="homeNews">
				<?php
					$args = array(
						'post_type'      => 'post',
						'posts_per_page' => '2',
						'meta_query' => array(
							array(
								'key' => 'featured_post', // name of custom field
								'value' => '"1"', // matches exactly "red"
								'compare' => 'LIKE'
							)
						)
					);

					$query = new WP_Query( $args );
				?>

				<?php if ( $query->have_posts() ): ?>
					<?php while ( $query->have_posts() ): $query -> the_post();?>
						<div class="homeNew">
							<a href="<?php the_permalink(); ?>">
								<div class="photo" style="background-image: url(<?php the_post_thumbnail_url(); ?> ) ;">
									<div class="content">
										<div class="videoText">
											<?php 
												$postSubHeading = get_field('post_subheading');
												if (has_category('video')){
													$viewMore = 'watch video';
												}
												else{
													$viewMore = 'read article';
												}
												/*if ($postSubHeading == 'Video'){
													$viewMore = 'watch video';
												}else{
													$viewMore = 'read article';
												}*/
											?>
											
											<p><?php echo $postSubHeading; ?></p>
											<h3><?php the_title(); ?></h3>
											<span><?php echo $viewMore ; ?>  <i class="fa fa-long-arrow-right" aria-hidden="true"></i></span>
										</div>
									</div>
								</div>
							</a>
						</div>
					<?php endwhile ?>
				<?php endif ?>
				<?php wp_reset_postdata(); ?>
			</div>
			<a href="<?php echo site_url(); ?>/news/" class="viewMoreNews">VIEW MORE NEWS <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
		</section>
		<section class="featuredOn">
			<div class="container">
				<h2><strong>Featured</strong> On</h2>
				<div class="featuredMediaWrapper">
					<?php
						if( have_rows('featured_medias') ){
							while ( have_rows('featured_medias') ) : the_row(); ?>
								<div class="featuredMedia">
								<?php if( get_sub_field('media_link') ): ?>
									<a href="<?php the_sub_field('media_link'); ?>" target="_blank">
								<?php endif; ?>
									<img src="<?php the_sub_field('media_logo'); ?>" alt="">
								<?php if( get_sub_field('media_link') ): ?>
									</a>
								<?php endif; ?>
								</div>
							<?php endwhile;
						} 
					?>
				</div>
			</div>
		</section>
	</main>
<?php get_footer(); ?>