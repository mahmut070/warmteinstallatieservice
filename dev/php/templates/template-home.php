<?php
/*
Template Name: Homepage
*/
?>

<?php get_header(); ?>

	<div class="u-gridContainer content-area">

		<div class="u-gridRow">					
			<div class="Slider">

				<?php
						
						$args = array(
							'post_type' => 'slides', 
							'posts_per_page'=>999
						);
						$slides = new WP_Query( $args );
						$num = count($slides);
						$counter = 0;
						if( $slides->have_posts() ) {
							while( $slides->have_posts() ) {
								$slides->the_post(); 
								$counter++;
								?>
								<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); 
									  $image_url = $image[0];
								?>
								
								<?php if( get_field('link') ): ?>
									<a target="_blank" href="<?php the_field('link'); ?>"><img src="<?php echo $image_url; ?>" ></a>
								<?php else: ?>
									<img src="<?php echo $image_url; ?>" >
								<?php endif; ?>
								<?php
							}
						}
					?>

			</div> 
		</div>

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<article class="Content Content--home" id="post-<?php the_ID(); ?>">
				<div>
					<?php the_content(); ?>
					<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
				</div>
			</article>
		<?php endwhile; endif; ?>
		
	</div>

<?php get_footer(); ?>
