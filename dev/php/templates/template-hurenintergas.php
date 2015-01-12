<?php
/*
Template Name: Hurenintergas
*/
?>

<?php get_header(); ?>

	<div class="u-gridContainer content-area">
		<div class="u-gridRow">					
			<img src="<?php echo get_stylesheet_directory_uri();?>/img/huur.png">
		</div>	
		
		<div class="u-gridRow brochure-area">					
			<span>BROCHURE  PDF</span> <br>
			<div class="u-gridCol3 brochure-child-area">
				<img src="<?php echo get_stylesheet_directory_uri();?>/img/adobe.png"><br>
				<a class="handleiding-link" href="http://www.intergas-verwarming.nl/lijsten/files/Folder%20Kombi%20Kompakt%20HRE-compleet2.pdf" target="_blank">HRE</a>
			</div>
			<div class="u-gridCol3 brochure-child-area">
				<img src="<?php echo get_stylesheet_directory_uri();?>/img/adobe.png"><br>
				<a class="handleiding-link" href="http://www.intergas-verwarming.nl/lijsten/files/130408%20-IG%20-%20Kombi%20Kompakt%20HReco%20brochure.pdf" target="_blank">HREco</a>
			</div>

			<div class="u-gridCol3 brochure-child-area">
				<img src="<?php echo get_stylesheet_directory_uri();?>/img/adobe.png"><br>
				<a class="handleiding-link" href="http://www.intergas-verwarming.nl/flip-prestige/" target="_blank">Prestige</a>
			</div>

			<div class="u-gridCol3 brochure-child-area">
				<img src="<?php echo get_stylesheet_directory_uri();?>/img/adobe.png"><br>
				<a class="handleiding-link" href="http://www.intergas-verwarming.nl/lijsten/files/882.357-05%20Bedieningsvoorschriften%20Kombi%20Kompakt%20HRE4.pdf" target="_blank">Handleiding</a>
			</div>
		</div>

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<article class="Content" id="post-<?php the_ID(); ?>">
					<div>
						<?php the_content(); ?>
						<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
					</div>
				</article>
			<?php endwhile; endif; ?>

		<div class="u-gridRow">	
			<div class="u-gridCol4">
				<a href="http://www.warmteinstallatieservice.nl/cv-ketels/87-kopen-intergas.html" target="_blank"><img src="<?php echo get_stylesheet_directory_uri();?>/img/ketel-kopen.jpg"></a>
			</div>
			<div class="u-gridCol2">
				<a href="http://www.intergas-verwarming.nl/site.php?pagina=advies" target="_blank"><img src="<?php echo get_stylesheet_directory_uri();?>/img/special-ketelwijzer.png"></a>
			</div>
			<div class="u-gridCol6">
				<a href="/offerte-aanvragen"><img src="<?php echo get_stylesheet_directory_uri();?>/img/offerte-aanvraag.png"></a>
			</div>
		</div>

		<div class="u-gridRow">	
			<div class="u-gridCol6">
				<a href="https://www.kijkvoelbeleef.nl/nl/Honeywell/Producten/Product?name=Chronotherm-Touch-Modulation&name=Chronotherm-Touch-Modulation" target="_blank"><img src="<?php echo get_stylesheet_directory_uri();?>/img/honeywell1.jpg"></a>
				<p> Meerprijs Honeywell touch bij huren <b>€ 95,-</b></p>
			</div>
			<div class="u-gridCol6">
				<a href="https://kijkvoelbeleef.nl/nl/Honeywell/Producten/Product?name=Round-Modulation&name=Round-Modulation" target="_blank"><img src="<?php echo get_stylesheet_directory_uri();?>/img/honeywell2.jpg"></a>
				<p>Honeywell round thermostaat standaard bijgeleverd.</p>
			</div>
		</div>
	</div>

<?php get_footer(); ?>
