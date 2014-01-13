<?php get_template_part('templates/page', 'header'); ?>

<a href="http://<?php the_field('url'); ?>" target="_blank"><?php the_field('url'); ?></a>

<?php the_field('description'); ?>