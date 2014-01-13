<?php
/*
Template Name: Layout Template
*/
?>

<?php get_template_part('templates/page', 'header'); ?>

<?php if(get_field('layout_row')): ?>
	<?php while(has_sub_field('layout_row')): ?>
	
	<div class="row">
		<?php if(get_sub_field('layout_column')): ?>
			<?php while(has_sub_field('layout_column')): ?>
			
				<?php if(get_row_layout() == 'wysiwyg'): // layout: Content ?>
				
				<div class="<?php if(get_sub_field('bootstrap_grid')): 
					while(has_sub_field('bootstrap_grid')): 
						the_sub_field('display'); the_sub_field('columns'); ?> <?php 
					endwhile; endif; the_sub_field('custom_classes'); ?>">
				
					<?php the_sub_field('wysiwyg_content'); ?>
				
				</div><!--.column-->

				<?php elseif(get_row_layout() == 'jumbotron'): // layout: Content ?>
				
				<div class="<?php if(get_sub_field('bootstrap_grid')): 
					while(has_sub_field('bootstrap_grid')): 
						the_sub_field('display'); the_sub_field('columns'); ?> <?php 
					endwhile; endif; the_sub_field('custom_classes'); ?>">
					
					<div class="jumbotron">
						<?php the_sub_field('jumbotron_content'); ?>
					</div><!--.jumbotron-->

				</div><!--.column-->

				<?php elseif(get_row_layout() == 'shortcode'): // layout: Content ?>
				
				<div class="<?php if(get_sub_field('bootstrap_grid')): 
					while(has_sub_field('bootstrap_grid')): 
						the_sub_field('display'); the_sub_field('columns'); ?> <?php 
					endwhile; endif; the_sub_field('custom_classes'); ?>">
					
					<?php 
						$content = get_sub_field('shortcode_content'); 
						echo do_shortcode( $content );
					?>
					
				</div><!--.column-->

				<?php else: // layout: Featured Posts ?>
					<div class="col-xs-12">
						<span class="label label-danger">No content.</span>
					</div><!--.error-->
				<?php endif; ?>

			<?php endwhile; ?>
		<?php endif; ?>
	</div><!--.row-->
	
	<?php endwhile; ?>
<?php endif; ?>