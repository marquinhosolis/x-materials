<?php
/*
Template Name: What is it?
*/
?>

<?php get_header(); ?>
	<main class="whatIsItPage">
		<section class="whatIsItCover" style="background-image: url('<?php the_field('video_background_image'); ?>')">
			<div class="container">
				<div class="whatIsItContent">
					<h1><?php the_field('video_title'); ?></h1>
					<?php the_field('video_copy'); ?><br>
					<a href="<?php the_field('video_link'); ?>" target="_blank">Watch the full video on YouTube</a>
				</div>
			</div>
		</section>
		<section class="isItPossible">
			<div class="container">
				<div class="isItPossibleContent">
					<h2><strong>Is it </strong> possible?</h2>
					<p>The strength of metals <br>+ the lightness of plastics 
						<br>+ the high operating temperatures of creamics <br>
						 
						=<span>one incredible material.</span></p>
				</div>
				<div class="isItPossibleImage">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/is-it-possible-bg-new.png" alt="">
				</div>
			</div>
		</section>
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
			</div>
		</section>
		<section class="xmatAdvantage">
			<div class="container">
				<h2><strong>The X-MAT </strong> Advantage</h2>
				<h3><?php the_field('x-mat_advantage_subtitle'); ?></h3>
				<div class="xmatAdvantageCopy">
					<?php the_field('x-mat_advantage_copy'); ?>
				</div>
			</div>
		</section>
		<section class="howCompare">
			<div class="container">
				<h2><strong>How does </strong> x-mat compare?</h2>
				<div class="howCompareMobileTable">
					<table class="howCompareTable">
						<thead>
							<tr>
								<th colspan="2"><strong>Density</strong></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><strong>X-MAT® OC1</strong></td>
								<td><strong>1.8 g/cc</strong></td>
							</tr>
							<tr>
								<td><strong>X-MAT® CCC</strong></td>
								<td><strong>1.3-1.7 g/cc</strong></td>
							</tr>
							<tr>
								<td>Al<sub>2</sub>0<sub>3</sub> (Alumina)</td>
								<td>3.7 g/cc</td>
							</tr>
							<tr>
								<td>Glass</td>
								<td>2.4-2.8 g/cc</td>
							</tr>
							<tr>
								<td>Teflon</td>
								<td>2.2 g/cc</td>
							</tr>
							<tr>
								<td>Polypropylene</td>
								<td>0.9-1.2 g/cc</td>
							</tr>
							<tr>
								<td>Aluminum</td>
								<td>2.7 g/cc</td>
							</tr>
							<tr>
								<td>Steel</td>
								<td>7.7-8.03 g/cc</td>
							</tr>
						</tbody>
					</table>
					<table class="howCompareTable">
						<thead>
							<tr>
								<th colspan="2"><strong>operating temp.</strong></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><strong>X-MAT® OC1</strong></td>
								<td><strong>1100°C</strong></td>
							</tr>
							<tr>
								<td><strong>X-MAT® CCC</strong></td>
								<td><strong>600°C</strong></td>
							</tr>
							<tr>
								<td>Al<sub>2</sub>0<sub>3</sub> (Alumina)</td>
								<td>1700°C</td>
							</tr>
							<tr>
								<td>Glass</td>
								<td>Varies</td>
							</tr>
							<tr>
								<td>Teflon</td>
								<td>260°C</td>
							</tr>
							<tr>
								<td>Polypropylene</td>
								<td>50-80°C</td>
							</tr>
							<tr>
								<td>Aluminum</td>
								<td>150-250°C</td>
							</tr>
							<tr>
								<td>Steel</td>
								<td>500-650°C</td>
							</tr>
						</tbody>
					</table>
					<table class="howCompareTable">
						<thead>
							<tr>
								<th colspan="2"><strong>sPECIFIC STIFFNESS</strong></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><strong>X-MAT® OC1</strong></td>
								<td><strong>50</strong></td>
							</tr>
							<tr>
								<td><strong>X-MAT® CCC</strong></td>
								<td><strong>30-100</strong></td>
							</tr>
							<tr>
								<td>Al<sub>2</sub>0<sub>3</sub> (Alumina)</td>
								<td>92.1</td>
							</tr>
							<tr>
								<td>Glass</td>
								<td>28</td>
							</tr>
							<tr>
								<td>Teflon</td>
								<td>0.23</td>
							</tr>
							<tr>
								<td>Polypropylene</td>
								<td>1.55</td>
							</tr>
							<tr>
								<td>Aluminum</td>
								<td>25.5</td>
							</tr>
							<tr>
								<td>Steel</td>
								<td>26.3</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="howCompareDesktopTable">
					<table class="howCompareTable">
						<thead>
							<tr>
								<th></th>
								<th><strong>Density</strong></th>
								<th><strong>operating temp.</strong></th>
								<th><strong>sPECIFIC STIFFNESS</strong></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><strong>X-MAT® OC1</strong></td>
								<td><strong>1.8 g/cc</strong></td>
								<td><strong>1100°C</strong></td>
								<td><strong>50</strong></td>
							</tr>
							<tr>
								<td><strong>X-MAT® CCC</strong></td>
								<td><strong>1.3-1.7 g/cc</strong></td>
								<td><strong>600°C</strong></td>
								<td><strong>30-100</strong></td>
							</tr>
							<tr>
								<td>Al<sub>2</sub>0<sub>3</sub> (Alumina)</td>
								<td>3.7 g/cc</td>
								<td>1700°C</td>
								<td>92.1</td>
							</tr>
							<tr>
								<td>Glass</td>
								<td>2.4-2.8 g/cc</td>
								<td>Varies</td>
								<td>28</td>
							</tr>
							<tr>
								<td>Teflon</td>
								<td>2.2 g/cc</td>
								<td>260°C</td>
								<td>0.23</td>
							</tr>
							<tr>
								<td>Polypropylene</td>
								<td>0.9-1.2 g/cc</td>
								<td>50-80°C</td>
								<td>1.55</td>
							</tr>
							<tr>
								<td>Aluminum</td>
								<td>2.7 g/cc</td>
								<td>150-250°C</td>
								<td>25.5</td>
							</tr>
							<tr>
								<td>Steel</td>
								<td>7.7-8.03 g/cc</td>
								<td>500-650°C</td>
								<td>26.3</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</section>
		<section class="theProcess">
			<div class="container">
				<h2><strong>the </strong> process</h2>
				<div class="theProcessCopy">
					<?php the_field('the_process_copy'); ?>
				</div>
				
				<div class="stages">
					<div class="stage">
						<div class="stageShape">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/stage-shape-1.png" alt="">
						</div>
						<div class="timeLine">
							<div class="stagePoint">
								
							</div>
						</div>
						<div class="stageText">
							<p>X-MAT in its original form</p>
						</div>
					</div>
					<div class="stage">
						<div class="stageShape">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/stage-shape-2.png" alt="">
						</div>
						<div class="timeLine">
							<div class="stagePoint">

							</div>
						</div>
						<div class="stageText">
							<p>X-MAT is combined with another material</p>
						</div>
					</div>
					<div class="stage">
						<div class="stageShape">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/stage-shape-3.png" alt="">
						</div>
						<div class="timeLine">
							<div class="stagePoint">

							</div>
						</div>
						<div class="stageText">
							<p>Final material with X-MAT properties</p>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="greenerProduction">
			<div class="container">
				<div class="greenerProductionIcon">
					<img src="<?php the_field('greener_production_icon'); ?>" alt="">
				</div>
				<div class="greenerProductionText">
					<h2><strong>Greener</strong> production</h2>
					<?php the_field('greener_production_copy'); ?>
				</div>
				<a href="<?php echo site_url(); ?>/contact/" class="btn-primary btn-float">WORK WITH X-MAT® NOW</a>
			</div>
		</section>
		<section class="quotes">
			<div class="container">
				<ul>
					<li>
						<div class="testimononialCopy">
							<?php the_field('first_quote_copy'); ?>
						</div>
						<div class="testimonialName">
							<?php the_field('first_quote_name'); ?>
						</div>
						
					</li>
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/quotes-after-line.png" alt="">
					<li>
						<div class="testimononialCopy">
							<?php the_field('second_quote_copy'); ?>
						</div>
						<div class="testimonialName">
							<?php the_field('second_quote_name'); ?>
						</div>
					</li>
				</ul>
			</div>
		</section>
		<section class="newLab">
			
		</section>
	</main>
<?php get_footer('what-is-it'); ?>
