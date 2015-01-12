<?php
/*
Template Name: Content
*/
?>

<?php get_header(); ?>

	<div class="u-gridContainer content-area">

		<div class="u-gridRow">					
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<article class="Content" id="post-<?php the_ID(); ?>">
					<div>
						<?php the_content(); ?>
						<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
					</div>
				</article>
			<?php endwhile; endif; ?>
		</div>

	</div>

<?php get_footer(); ?>
