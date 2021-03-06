<?php get_template_part('templates/head'); ?>
<body <?php body_class(); ?>>
<div class="wrap">
  <?php
    do_action('get_header');
    get_template_part('templates/header');
  ?>
  <?php
    if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('fullscreen') ) :
  endif; ?>

  <div class="wrap container" role="document">
    <div class="content row">
      <main class="main" role="main">
        <?php include roots_template_path(); ?>
      </main><!-- /.main -->
      <?php if (roots_display_sidebar()) : ?>
        <aside class="sidebar" role="complementary">
          <?php include roots_sidebar_path(); ?>
        </aside><!-- /.sidebar -->
      <?php endif; ?>
    </div><!-- /.content -->
  </div><!-- /.wrap -->

  <?php get_template_part('templates/footer'); ?>

  <?php wp_footer(); ?>
</div>
</body>
</html>
