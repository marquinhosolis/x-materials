<?php get_header(); ?>

<main class="newsPage">
	<div class="newsPageTitle">
		<div class="container">
			<h1><strong>News </strong> at X-Mat</h1>
		</div>
	</div>
	<div class="container">
		<div class="filters">
			<div class="newsCategoriesFilter">
				<h2>Categories:</h2>
				<?php wp_list_categories( array(
					'orderby' => 'name',
					'title_li' => '',
					'separator' => ',&nbsp;',
					'style'     => 'separator'
				) ); ?> 
			</div>

			<div class="searchFilter">
				<form action="#" method="get">
					<input name="search" type="search" placeholder="Search news here">
					<button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
				</form>
			</div>
		</div>
	</div>
	<div class="newsPosts">
		<?php
		
		$categoryObj = get_queried_object();
        $categoryId = $categoryObj->term_id;
		
		if(isset($_GET['search'])){
			$term = $_GET['search'];
		}
		
		$args = array(
			'post_type'      => 'post',
			'posts_per_page' => '10',
			'cat'			 => $categoryId,
			's'				 => $term	
		);

		$query = new WP_Query( $args );
		?>

		<?php if ( $query->have_posts() ): ?>
		<?php while ( $query->have_posts() ): $query -> the_post();?>
			<article class="newsPost">
					<div class="newsPostImage" style="background-image: url(<?php the_post_thumbnail_url(); ?>);">
						<a href="<?php the_permalink(); ?>"><div class="content"></div></a>
					</div>
				<div class="newsPostText">
					<div class="newsPostTextCategory">
						<p>
						<?php
							foreach((get_the_category()) as $category) { 
								echo '<a href="'.site_url().'/category/'.$category->slug.'">'. $category->cat_name . '</a> '; 
							} 
						?>
						</p>
					</div>
					<div class="newsPostTextTitle">
						<p><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
					</div>
					<div class="newsPostTextContent">
						<a href="<?php the_permalink(); ?>"><?php the_excerpt(); ?></a>
					</div>
					<a href="<?php the_permalink(); ?>" class="btn-primary">read more</a>
				</div>
			</article>
		<?php endwhile ?>
		<?php else : ?>
			<div class="emptySearch">
				<p>Sorry, no post to show for <i>"<?php echo $term; ?>"</i></p>
				<a href="<?php echo site_url(); ?>/news/"><i class="fa fa-long-arrow-left" aria-hidden="true"></i> BACK TO NEWS</a>
			</div>
		<?php endif ?>
		<?php wp_reset_postdata(); ?>
	</div>
	<div class="showMore">
		<a href="#">LOAD MORE NEWS <i class="fa fa-long-arrow-down" aria-hidden="true"></i></a>
	</div>

</main>
<?php get_footer(); ?>
