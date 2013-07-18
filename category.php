<?php
/**
 * Template for showing category archives for Cobalt Blue WordPress Theme
 *
 * @package Cobalt
 */

get_header(); ?>
	<div id="primary" class="site-content">
		<div id="content" role="main">
			<?php if (have_posts()) : ?>
			<header class="page-header">
				<h1 class="page-title"><?php printf(__('Category Archives: %s', 'cobalt'), '<span>' . single_cat_title('', false) . '</span>'); ?></h1>
			</header>
				<?php while (have_posts()) : the_post() ; ?>
				<?php get_template_part('content', get_post_format()); ?>
				<?php endwhile; ?>
			<?php else: ?>
				<?php get_template_part('content', 'none'); ?>
			<?php endif; ?>
		</div>
	</div>
	<?php get_sidebar(); ?>
<?php get_footer(); ?>
