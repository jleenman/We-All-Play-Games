<?php get_template_part('templates/page', 'header'); ?>
<?php //added search results to 404 page ?>

	<?php
		$search_term = substr($_SERVER['REQUEST_URI'],1);
		$search_term = urldecode(stripslashes($search_term));
		
		$find = array ("'.html'", "'.+/'", "'[-/_]'") ;
		$replace = " " ;
		$search_term = trim(preg_replace ( $find , $replace , $search_term ));
		
		$search_term_q = preg_replace('/ /', '%20', $search_term);

		query_posts('s='. $search_term_q );
	?>

	<?php if (!have_posts()) : ?>
		<div class="alert alert-danger">
			<?php _e("Nope, that page does not exist.", 'roots'); ?>
			<?php _e("Our search doesn't find <b>", 'roots'); ?>
			<?php echo  $search_term_q; _e("</b> either.", 'roots'); ?>
		</div>
	<?php else: ?>
		<div class="alert alert-info">
			<?php _e("Nope, that page does not exist.", 'roots'); ?>
			<?php _e("Luckily we found some similar results:", 'roots'); ?>
		</div>
	<?php endif; ?>

	<?php get_search_form(); ?>

	<?php while (have_posts()) : the_post(); ?>
	  <?php get_template_part('templates/content', get_post_format()); ?>
	<?php endwhile; ?>