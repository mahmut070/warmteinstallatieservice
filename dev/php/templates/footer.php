
	<div class="u-gridContainer content-area">
		<div class="u-gridRow">	
			<p class="end-text"><span class="red-text">Warmte</span> Installatie Service <br>
			Dé specialist op het gebied van <span class="red-text">verwarming</span> en <span class="red-text">warm water</span>.</p>	
		</div>
	</div>

	<div class="Footer">
		<div class="u-gridContainer footer-inhoud">
				<div class="u-gridRow">

					<div class="u-gridCol4">
						<h4>Contactgegevens</h4>
						<p>
							Graafjansdijk a24</br>
							4554 AE Westdorpe <br>
							Tel: 0623407721
						</p>

						<a href="/algemene-voorwaarden">Algemene voorwaarden</a>
					</div>

					<div class="u-gridCol4">
						<h4>Sitemap</h4>
						<?php if ( is_active_sidebar( 'footer-widgets' ) ) : ?>
						<div class="Footer-inner u-gridRow">
							<?php dynamic_sidebar( 'footer-widgets' ); ?>
						</div>
						<?php endif; ?>
						
						<a href="https://www.facebook.com/warmteinstallatieservice" target="_blank"><img src="<?php echo get_stylesheet_directory_uri();?>/img/facebook.png"></a>
						<a href="#"><img class="twitter-button" src="<?php echo get_stylesheet_directory_uri();?>/img/twitter.png"></a>
					</div>

					<div class="u-gridCol3">
						<a href="/home"><img class="logo-footer" src="<?php echo get_stylesheet_directory_uri();?>/img/logo-footer.png"></a>
					</div>
	
				</div>
		</div>
	</div>


	<div class="Socket">
		<div class="u-gridContainer">
			<!-- Copyright info -->
			<p>&copy; <?php bloginfo('name'); ?> <?php echo date("Y"); ?> - Website & SEO door 
					<a href="http://www.lokaalgevonden.nl" target="_blank">LokaalGevonden</a>
			</p>
		</div>
	</div>

  <!-- Load jquery from google CDN if possible, with fallback to cdnjs -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.0/jquery.min.js"><\/script>')</script>

  <!-- build:remove:expanded -->
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/production.min.js"></script>
  <!-- /build -->
  <!-- build:remove:compressed -->
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/landingpage-select.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/nav-collapse.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/nav-dropdown.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/prepend-svg.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/google-maps.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.bxslider.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.bxslider.start.js"></script>
  <script src="http://localhost:35729/livereload.js"></script>
  
 
  <!-- /build -->

  <!-- Check if javascript for threaded comments should be loaded -->
  <?php include 'includes/comment-check.php'; ?>

	<!-- Wordpress footer -->
	<?php wp_footer(); ?>
	</body>
</html>
