<?php get_template_part('templates/head'); ?>
<?php //added fixed footer classes to base template ?>

<body <?php body_class('fixed-footer table'); ?>>

<div class="fixed-footer table-row">
  <!--[if lt IE 8]><div class="alert alert-warning"><?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'roots'); ?></div><![endif]-->

  <?php
    do_action('get_header');
    // Use Bootstrap's navbar if enabled in config.php
    if (current_theme_supports('bootstrap-top-navbar')) {
      get_template_part('templates/header-top-navbar');
    } else {
      get_template_part('templates/header');
    }
  ?>
</div><!-- /.table-row-->

<div class="fixed-footer table-row expand">
  <div class="wrap container" role="document">
    <div class="content row">
      <div class="main <?php echo roots_main_class(); ?>" role="main">
        <?php include roots_template_path(); ?>
      </div><!-- /.main -->
      <?php if (roots_display_sidebar()) : ?>
        <aside class="sidebar <?php echo roots_sidebar_class(); ?>" role="complementary">
          <?php include roots_sidebar_path(); ?>
        </aside><!-- /.sidebar -->
      <?php endif; ?>
    </div><!-- /.content -->
  </div><!-- /.wrap -->
</div><!-- /.table-row-->
  
<div class="fixed-footer table-row">
  <?php get_template_part('templates/footer'); ?>
</div><!-- /.table-row-->

</body>
</html>