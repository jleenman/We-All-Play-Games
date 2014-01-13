<footer class="content-info container" role="contentinfo">
  <div class="row">
	<?php //removed sidebar from 12 column div to be replaced with multi-column widgets ?>
      <?php dynamic_sidebar('sidebar-footer'); ?>
  </div>

  <div class="row">
	<div class="col-lg-12">
      <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?></p>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>