<?php
/*
Template Name: Service
*/
?>

<?php get_header(); ?>

	<div class="u-gridContainer content-area">

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<article class="Content" id="post-<?php the_ID(); ?>">
					<div>
						<?php the_content(); ?>
						<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
					</div>
				</article>
			<?php endwhile; endif; ?>

	</div>

<?php get_footer(); ?>
