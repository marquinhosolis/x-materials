<footer class="FooterWhatIsIt">
	<div class="preFooter">
		<div class="container">
			<p> <strong>What are your ideas and specifications needs?</strong><br>
				Let's collaborate and create the material system just for your application.
			</p>
			<a href="<?php echo site_url(); ?>/contact/" class="btn-primary btn-float">Realize the potential</a>
		</div>
	</div>
	<div class="mainFooter">
		<div class="container">
			<div class="footerLogo">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/xmat-logo-white_new.png" alt="X-Mat Logo">
				<div class="newsletterFooter">
					<p>Sign up for updates</p>
					<?php echo do_shortcode('[formidable id=10]'); ?>
				</div>
			</div>
			<div class="footerAddress">
				<address>
					<span><a href="https://www.google.com.br/maps/place/3259+Progress+Dr+%23115,+Orlando,+FL+32826,+EUA/@28.5898581,-81.2002169,17z/data=!3m1!4b1!4m5!3m4!1s0x88e76865a910396f:0xc7b5230bc79b8557!8m2!3d28.5898581!4d-81.1980282" target="_blank"><i class="fa fa-map-marker" aria-hidden="true"></i> 3259 Progress Drive, Room 115, <br>Orlando, FL 32826</a></span>
					<span><a href="tel:407.353.6885"><i class="fa fa-phone" aria-hidden="true"></i> 407.353.6885</a></span>
					
				</address>
				<a class="meiaKitLinkFooter" href="<?php echo site_url();?>/media-kit/">media kit</a>
			</div>
			<div class="footerCopyright">
				<div class="footerSocial">
					<a href="https://www.facebook.com/semplastics/" target="_blank">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-facebook.png" alt="facebook">
					</a>
					<a href="https://www.linkedin.com/company/x-mat/" target="_blank">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-linkedin.png" alt="linkedin">
					</a>
				</div>
				<div class="copyright">
					<p>Copyright ©, X-MAT. All rights reserved.</p>
				</div>
				<div class="madeBy">
					<span>Powered by</span>
					<a href="https://dppad.com/" target="_blank"><span class="logoDppa"></span></a>
					<a href="<?php echo site_url(); ?>/wp-admin/" target="_blank"><span>login</span></a>
				</div>
			</div>
		</div>
	</div>
</footer>

<script src="https://use.fontawesome.com/0464cae7b5.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/lib/jquery-3.2.1.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/script.js"></script>
<script>
	$(document).ready(function(){
		var count = 0;
		$('.newsPost').each(function(){
			if(count > 2 ){
				$(this).hide();
				$('.showMore').show();
			}
			count++;
		});
		$('.showMore').click(function(e){
			e.preventDefault();
			$('.newsPost').slideDown();
			$('.showMore').hide();
		})
	})
</script>
<?php wp_footer(); ?> 

</body>
</html>
