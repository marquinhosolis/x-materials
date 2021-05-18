<!doctype html>
<html>
	<head>
		<title><?php bloginfo( 'name' ); ?></title>
		<meta charset="utf-8">
		<meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
		<meta content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" name="viewport">
		<meta name="language" content="PT-BR">
		<meta content="pt-br" http-equiv="content-language">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.7.1/flexslider.min.css">
		<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/simplelightbox.css">
		<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/style.css">

		<!-- TYPEKIT FONTS -->
		<script src="https://use.typekit.net/phk6pbl.js"></script>
		<script>try{Typekit.load({ async: true });}catch(e){}</script>

		<?php $coverHomeImageMobile = get_field('home_cover_image_mobile', 2); ?>
		<?php $coverHomeImageDesktop = get_field('home_cover_image_desktop', 2); ?>
		<?php $aboutBusinessMobile = get_field('business_model_image_mobile', 7); ?>
		<?php $aboutBusinessDesktop = get_field('business_model_image_desktop', 7); ?>

		<style>
			.coverHome{
				background-image: url( <?php echo $coverHomeImageMobile;?> ) ;
			}
			.aboutBusiness{
				background-image: url( <?php echo $aboutBusinessMobile;?> ) ;
			}
			@media(min-width:768px){
				.coverHome{
					background-image: url( <?php echo $coverHomeImageDesktop;?> ) ;
				}
				.aboutBusiness{
					background-image: url( <?php echo $aboutBusinessDesktop;?> ) ;
				}
			}
			p{
				margin-bottom: 15px !important;		
			}
			p a{
				color: #08bf78;
				text-decoration: underline;
			}
			em{
				font-style: italic;
			}
		</style>
		<?php wp_head(); ?> 
	</head>

	<body>
	<header>
		<div class="container">
			<div id="hamburguer">
				<span></span>
				<span></span>
				<span></span>
				<span></span>
			</div>
			<div class="logoHeader">
				<a href="<?php echo site_url(); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/x-mat-logo_new.png" alt="X-Mat Logo"></a>
			</div>
			<div class="rightHeaderContent">
				<div class="searchIcon">
					<div class="searchField">
						<form action="<?php echo site_url(); ?>/news/" method="get">
								<input type="search" name="search" placeholder="Search here">
								<button type="submit"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/search-icon.png" alt=""></button>
						</form>
					</div>
				</div>
				<div class="searchField searchField--mobile">
					<form action="<?php echo site_url(); ?>/news/" method="get">
						<div class="searcHeaderhWrapper">
							<input type="search" name="search" placeholder="Search here">
							<button type="submit"><i class="fa fa-search" aria-hidden="true"></i>
							</button>
						</div>
					</form>
				</div>
				<nav class="mainNav">
					<?php wp_nav_menu( array( 'theme_location' => 'mainNav' ) ); ?>
				</nav>
			</div>
		</div>
	</header>
