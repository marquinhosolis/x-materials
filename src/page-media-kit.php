<?php
/*
Template Name: Media Kit Page
*/
?>

<?php get_header(); ?>
	<main class="mediaKitPage">
		<section class="mediaKitPageHeader">
            <div class="container">
				<div>
					<h2><strong>media</strong> kit</h2>
				</div>
			</div>
        </section>
        <section class="mediaKitMainContent">
            <div class="container">
                <div class="mediaKitVideos">
                    <h2>videos</h2>
                    <div class="flexslider carousel mediaKitVideosCarousel">
                        <ul class="slides">
                            <?php
                                $args = array(
                                    'post_type'      => 'media-kit-videos_pt',
                                    'posts_per_page' => -1,
                                );

                                $query = new WP_Query( $args );
                                $posts = $query->posts;
                                $posts = array_chunk($posts, 2);
                            
                                foreach($posts as $li){
                                    
                                    echo '<li>';
                                    foreach($li as $post){
                                        $postTitle = $post->post_title;
                                        $videoId = get_field('youtube_video_id', $post->ID); ?>
                                        <a class="videoWrapper lightBoxVideoLink" href="https://www.youtube.com/embed/<?php echo $videoId; ?>?autoplay=true">
                                            <img src="https://img.youtube.com/vi/<?php echo $videoId; ?>/maxresdefault.jpg" alt="">
                                            <div class="playIcon">
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/play-icon.png" alt="">
                                            </div>
                                            <div class="videoText">
                                            <?php echo $postTitle; ?>
                                            </div>
                                        </a>
                                    <?php }
                                    echo '</li>';
                                }
                            ?>
                        </ul>
                    </div>
                    <?php wp_reset_postdata(); ?>
                </div>
                <div class="mediaKitReleases">
                    <h2>recent press releases</h2>
                    <div class="flexslider carousel mediaKitReleasesCarousel">
                        <ul class="slides">
                            <?php
                                $args = array(
                                    'post_type'      => 'media-kit-release_pt',
                                    'posts_per_page' => -1,
                                );

                                $query = new WP_Query( $args );
                                $posts = $query->posts;
                                $posts = array_chunk($posts, 5);
                            
                                foreach($posts as $li){
                                    
                                    echo '<li>';
                                    foreach($li as $post){
                                        $postTitle = $post->post_title;
                                        $releaseFile = get_field('release_file', $post->ID); ?>
                                        <div class="releaseWrapper">
                                            <span class="releaseTitle"><?php echo $postTitle; ?></span>
                                            <a class="btn-primary" href="<?php echo $releaseFile; ?>" target="_blank">download</a>
                                        </div>
                                    <?php }
                                    echo '</li>';
                                }
                            ?>
                        </ul>
                    </div>
                    <?php wp_reset_postdata(); ?>
                </div>
            </div>
        </section>
        <section class="mediaKitPhotos">
            <div class="container">
                <div class="mediaKitDownloadPhotos">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/mediaKit-photos.png" alt=""><br><br>
                    <a href="<?php the_field('photo_download_file'); ?>" class="btn-primary" target="_blank">Download our photos</a>
                </div>
                <div class="mediaKitContact">
                    <h3>media contact</h3>
                    <address>
                    <span><a href="tel:407.353.6885"><i class="fa fa-phone" aria-hidden="true"></i> 407.353.6885</a></span> 
                    <span><a href="mailto:info@x-materials.com"><i class="fa fa-envelope" aria-hidden="true"></i> info@x-materials.com</a></span> 
					<span><a href="https://www.google.com.br/maps/place/3259+Progress+Dr+%23115,+Orlando,+FL+32826,+EUA/@28.5898581,-81.2002169,17z/data=!3m1!4b1!4m5!3m4!1s0x88e76865a910396f:0xc7b5230bc79b8557!8m2!3d28.5898581!4d-81.1980282" target="_blank"><i class="fa fa-map-marker" aria-hidden="true"></i> 3259 Progress Drive, Room 115, Orlando, FL 32826</a></span>
				</address>
                </div>
            </div>
        </section>
	</main>
<?php get_footer(); ?>
