<?php
/*
Template Name: About Page
*/
?>

<?php get_header(); ?>
	
	<main class="aboutPage">
		<section class="aboutCover" style="background-image: url(<?php the_field('about_us_cover_image'); ?>);">
			<div class="container">
				<div class="coverAboutContent">
					<h1><strong>about</strong> us</h1>
					<?php the_field('about_us_cover_copy'); ?>
					<a href="<?php echo site_url(); ?>/contact/" class="btn-primary btn-float">LEARN MORE ABOUT THE PROCESS</a>
				</div>
			</div>
		</section>
		<section class="aboutHours">
			<div class="container">
				<div class="aboutHoursImage">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/partners-icon.png" alt="">
				</div>
				<div class="aboutHoursText">
					<h2><strong>over 10,000 </strong> hours</h2>
					<?php the_field('over_10,000_hours_copy'); ?>
				</div>
			</div>
		</section>
		<section class="aboutTeam">
			<div class="aboutTeamTitle">
				<h2><strong>The team  </strong> behind X-MAT®</h2>
				<img class="team-title-after" src="<?php echo get_stylesheet_directory_uri(); ?>/images/team-title-after.png" alt="">
			</div>
				
			<div class="teamMembers">
				<?php
				if( have_rows('team_members') ):
						while ( have_rows('team_members') ) : the_row(); 
							$memberTitle = get_sub_field('team_member_title');
						?>
							<div class="member">
								<div class="memberImage" style="background-image: url(<?php the_sub_field('team_member_image'); ?>) ;">
									<div class="content"></div>
								</div>
								<div class="memberText"> 
									<h3>
										<strong>
											<?php the_sub_field('team_member_name'); ?></strong><?php if( $memberTitle ): ?>, <?php the_sub_field('team_member_title'); ?>
											<?php endif; ?>
									
									</h3>
									<?php the_sub_field('team_member_copy'); ?>
								</div>
							</div>
						<?php endwhile;
					endif;
				?>
			</div>
		</section>
		<section class="aboutValues">
			<div class="container">
				<h2><strong>our </strong>values</h2>
				<?php the_field('values_copy'); ?>
			</div>
			<div class="values">
				<div class="container">
					<div class="value">
						<p><strong>SERVE</strong><br>your customers</p>
					</div>
					<div class="value">
						<p><strong>RESPECT</strong><br>YOUR VENDORS</p>
					</div>
					<div class="value">
						<p><strong>LOVE</strong><br>YOUR PEOPLE</p>
					</div>
					<div class="value">
						<p><strong>ENJOY</strong><br>THE JOURNEY</p>
					</div>
				</div>
			</div>
			<div class="aboutValuesFinalParagraph">
				<div class="container">
					<p >We are excited to explore how X-MAT® will change the world. 
						If you want to be part of this disruptive new technology, 
					</p>
					<p>WE WANT TO WORK WITH YOU.</p>
				</div>
			</div>
		</section>
		<section class="aboutBusiness">
			<div class="content"></div>
		</section>
		
		
	</main>
<?php get_footer(); ?>
