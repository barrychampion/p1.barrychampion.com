<header class="banner navbar navbar-static-top" role="banner">
  <div class="container-fluid">
      <div class="navbar-header">
          <a class="btn-bc-mmenu fa fa-bars" title="Menu">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <a class="logo" href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
      </div>
    <nav role="navigation">
        <div class="bc-mmenu">
            <?php
                if (has_nav_menu('primary_navigation')) :
                  wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class'));
                endif;
            ?>
        </div>
        <span class="navbar-social hidden-xs">
            <a href="http://soundcloud.com/barrychampion" target="_blank" title="Me on Soundcloud" class="fa fa-soundcloud"></a>
            <a href="http://instagram.com/barrychampion" target="_blank" title="Me on Instagram" class="fa fa-instagram"></a>
            <a href="http://github.com/barrychampion" target="_blank" title="Me on GitHub" class="fa fa-git-square"></a>
            <a href="http://twitter.com/barrychampion" target="_blank" title="Me on Twitter" class="fa fa-twitter-square"><i class="fa fa-twitter-square"></i></a>
            <a href="http://www.linkedin.com/in/barrychampion" target="_blank" title="Me on LinkedIn" class="fa fa-linkedin-square"></a>
            <a href="http://www.facebook.com/barrychampion" target="_blank" title="Me on Facebook" class="fa fa-facebook-square"></a>
        </span>
    </nav>
  </div>
</header>