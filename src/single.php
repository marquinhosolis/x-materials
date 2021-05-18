<?php
/*
Template Name: Single Page
*/
?>

<?php get_header(); ?>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<main class="singlePage">
		<section class="singlePageTitle">
			<div class="container">
				<h1><?php the_title(); ?></h1>
				<h2><?php the_category(', '); ?> </h2>
			</div>
		</section>
		<section class="postContent">
			<div class="postImage" style="background-image: url(<?php the_post_thumbnail_url(); ?>)">
				<div class="content"></div>
			</div>
			<div class="postText">
				<div class="container">
					<?php the_content(); ?>
				</div>
				<div class="share">
					<p>SHARE:</p>
					<a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" target="_blank"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
					<a href="https://twitter.com/home?status=<?php the_permalink(); ?>" target="_blank"><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
					<a href="#"><i class="fa fa-tumblr-square" aria-hidden="true"></i></a>
					<a href="#" target="_blank"><i class="fa fa-pinterest-square" aria-hidden="true"></i></a>
					<a href="https://plus.google.com/share?url=<?php the_permalink(); ?>" target="_blank"><i class="fa fa-google-plus-square" aria-hidden="true"></i></a>
					<a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink(); ?>&title=&summary=&source=" target="_blank"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
				</div>
			</div>
			
			<?php endwhile; ?>
			<?php endif; ?>
			<div class="postPagination">
				<div class="container">
					<div class="prev">
						<?php previous_post_link('%link', '<i class="fa fa-long-arrow-left" aria-hidden="true"></i>', FALSE); ?> 
					</div>
					<a href="<?php echo site_url(); ?>/news/" class="btn-primary">BACK TO NEWS</a>
					<div class="next">
						<?php next_post_link('%link', '<i class="fa fa-long-arrow-right" aria-hidden="true"></i>', FALSE); ?> 
						
					</div>
				</div>
			</div>
		</section>
		
	</main>
<?php get_footer(); ?>
