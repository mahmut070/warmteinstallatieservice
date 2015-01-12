<?php
/*
Template Name: Homepage
*/
?>

<?php get_header(); ?>

	<div class="u-gridContainer content-area">
		<div class="u-gridRow">					

			<!--<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<article class="Content Content--home" id="post-<?php the_ID(); ?>">
					<h2><?php the_title(); ?></h2>
					<div>
						<?php the_content(); ?>
						<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
					</div>
				</article>
			<?php endwhile; endif; ?>-->

			<h6>Welkom bij Warmte Installatie Service</h6>

		    <p>Voor advies, verkoop, huur, service & onderhoud en reparaties van cv ketels en installaties.</p>
		</div>

		<div class="u-gridRow">	
			<div class="u-gridCol6">
				 <a href="/kopen-intergas"><img class="blok-1" src="<?php echo get_stylesheet_directory_uri();?>/img/blok1.jpg"></a>
			</div>
			<div class="u-gridCol6">
				 <a href="/tips"><img class="blok-2" src="<?php echo get_stylesheet_directory_uri();?>/img/blok2.jpg"></a>
			</div>
		</div>	

		<div class="u-gridRow row-home">	
			<div class="u-gridCol6">
				 <a href="http://www.intergas-verwarming.nl/consument/productcategorie/incomfortcvketelapp/" target="_Blank"><img class="blok-3" src="<?php echo get_stylesheet_directory_uri();?>/img/blok3.png"></a>
			</div>
			<div class="u-gridCol6">
				<a href="http://www.intergas-verwarming.nl/consument/productcategorie/incomfortcvketelapp/" target="_Blank"><img class="blok-4" src="<?php echo get_stylesheet_directory_uri();?>/img/blok4.jpg"></a>
			</div>
		</div>				

		<div class="u-gridRow row-home">	
			<div class="u-gridCol12">
				<a href="http://www.intergas-verwarming.nl/" target="_Blank"><img class="blok-6" src="<?php echo get_stylesheet_directory_uri();?>/img/blok6.jpg"></a>
			</div>
		</div>	

		<div class="u-gridRow home-row-4 row-home">	
			<div class="u-gridCol3">
				<a href="/actie"><img src="<?php echo get_stylesheet_directory_uri();?>/img/blok7.jpg"></a>
			</div>
			<div class="u-gridCol3">
				<a href="/service"><img src="<?php echo get_stylesheet_directory_uri();?>/img/blok8.png"></a>
			</div>
			<div class="u-gridCol3">
				 <a href="/huren-intergas"><img src="<?php echo get_stylesheet_directory_uri();?>/img/blok9.jpg"></a>
			</div>
			<div class="u-gridCol3">
				<a href="/honeywell-thermostaten"><img src="<?php echo get_stylesheet_directory_uri();?>/img/blok10.png"></a>
			</div>			
		</div>	

		<div class="u-gridRow row-home">	
			<div class="u-gridCol4">
				 <a href="http://www.vansabbentechniek.nl/" target="_blank"><img class="blok-11" src="<?php echo get_stylesheet_directory_uri();?>/img/blok11.jpg"></a>
			</div>
			<div class="u-gridCol4">
				<a href="/offerte-aanvragen"><img class="blok-12" src="<?php echo get_stylesheet_directory_uri();?>/img/blok12.png"></a>
			</div>
			<div class="u-gridCol4">
				 <a href="http://www.warmgarant.nl/" target="_blank"><img class="blok-13" src="<?php echo get_stylesheet_directory_uri();?>/img/blok13.png"></a>
			</div>			
		</div>	


		<div class="u-gridRow row-home">	
			<div class="u-gridCol2">
				 <a href="http://www.warmteinstallatieservice.nl/upload/custom/VCA_VOL.pdf" target="_blank"><img src="<?php echo get_stylesheet_directory_uri();?>/img/blok14.jpg"></a>
			</div>
			<div class="u-gridCol2">
				<a href="/contact"><img src="<?php echo get_stylesheet_directory_uri();?>/img/blok15.jpg"></a>
			</div>
			<div class="u-gridCol5">
				 <a href="http://www.deltacvshop.nl/" target="_blank"><img class="blok-16" src="<?php echo get_stylesheet_directory_uri();?>/img/blok16.png"></a>
			</div>
			<div class="u-gridCol3">
				<img src="<?php echo get_stylesheet_directory_uri();?>/img/blok17.jpg">
			</div>			
		</div>	
		
	</div>

<?php get_footer(); ?>
