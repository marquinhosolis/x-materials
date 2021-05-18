<?php
/*
Template Name: Applications
*/
?>
<style>
	.applicationTitle{
		max-width: 800px;
		margin: 20px auto;
		padding: 0 20px;
		text-transform: uppercase;
		font-size: 28px;
		font-weight: bold;
		color: #11c07c;
	}
	.applicationBigContent{
		margin-bottom: 70px;
	}
</style>
<?php get_header(); ?>
	<main class="applicationPage">
		<section class="applicationCover" style="background-image: url('<?php the_field('applications_page_cover_image'); ?>')">
			<div class="container">
				<div class="coverApplicationContent">
					<h1><?php the_field('applications_page_cover_heading'); ?></h1>
					<?php the_field('applications_page_cover_subheading'); ?>
				</div>
			</div>
		</section>
		<section class="currentApplications">
			<div class="container">
				<div class="currentApplicationsTitle">
					<h2><strong>Current</strong> Applications</h2>
					<img class="team-title-after" src="<?php echo get_stylesheet_directory_uri(); ?>/images/current-applications-tilte-after.png" alt="">
				</div>
			</div>
			<?php
			$args = array(
				'post_type'      => 'applications_pt',
			);

			$query = new WP_Query( $args );
			?>

			<?php if ( $query->have_posts() ): ?>
			<?php while ( $query->have_posts() ): $query -> the_post();
				$applicationId = slugify(get_the_title( ));?>
			<div class="application" id="<?php echo $applicationId; ?>">
				<div class="applicationBigImage" style="background-image: url(<?php the_field('application_hero_image'); ?>)">
					<div class="content"></div>
				</div>
				<div class="applicationTitle"><?php the_title(); ?></div>
				<div class="container">
					<a href="<?php the_field('unlimited_possibilities_logo_link'); ?>" target="_blank">
					<img class="applicationLogo" src="<?php the_field('unlimited_possibilities_logo'); ?>" alt="">
					</a>
					<div class="applicationBigContent">
						<?php the_field('application_big_text'); ?>
					</div>
				</div>
			</div>
			<?php endwhile ?>
			<?php endif ?>
			<?php wp_reset_postdata(); ?>
		</section>
		<section class="unlimitedPossibilities">
			<div class="container">
				<div>
					<h2><strong>Unlimited</strong> Possibilities</h2>
					<h3><?php the_field('unlimited_possibilities_subheading'); ?></h3>
					<?php the_field('unlimited_possibilities_first_paragraph'); ?>
				</div>
			</div>
			<div class="posibilitiesFirst">
				<div class="container">
					<?php
						if( have_rows('first_possibilities_block') ):
							while ( have_rows('first_possibilities_block') ) : the_row();
					?>
					<p><?php the_sub_field('possibility_name'); ?></p><br>
					<?php
						endwhile;
						endif;
					?>
				</div>
			</div>
			<div class="container">
				<?php the_field('unlimited_possibilities_second_paragraph'); ?>
			</div>
			<div class="posibilitiesScnd">
				<div class="container">
					<?php
						if( have_rows('second_possibilities_block') ):
							while ( have_rows('second_possibilities_block') ) : the_row();
							?>
							<div class="posibilitiesScndPWrapper">
									<p><?php the_sub_field('possibility_name'); ?></p>
								</div>
							<?php
							endwhile;
						endif;
					?>
				</div>
			</div>
		</section>
	</main>
<?php get_footer(); ?>