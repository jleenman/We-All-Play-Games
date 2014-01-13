<article <?php post_class(); ?>>
  <header>
    <h2 class="entry-title">
	<?php /* <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> */ ?>
	<a href="http://<?php the_field('url'); ?>" target="_blank"><?php the_title(); ?></a>
    </h2>
    <p><small><?php the_field('url'); ?> &ndash; <a class="text-muted" href="<?php the_permalink(); ?>">permalink</a></small></p>
    <?php // get_template_part('templates/entry-meta'); ?>
  </header>
  <div class="entry-summary">
    <?php // the_excerpt(); ?>
    <?php the_field('description'); ?>
  </div>
</article>