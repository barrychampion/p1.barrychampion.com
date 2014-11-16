<header class="banner navbar navbar-static-top" role="banner">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <i class="fa fa-bars"></i>
      </button>
      <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
    </div>

    <nav class="collapse navbar-collapse" role="navigation">
      <?php
        if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav'));
        endif;
      ?>
    <span class="hidden-xs">
        <a  href="http://soundcloud.com/barrychampion" target="_blank" title="Me on Soundcloud"><i class="fa fa-soundcloud"></i></a>
        <a  href="http://github.com/barrychampion" target="_blank" title="Me on GitHub"><i class="fa fa-git-square"></i></a>
        <a href="http://twitter.com/barrychampion" target="_blank" title="Me on Twitter"><i class="fa fa-twitter-square"></i></a>
        <a  href="http://www.linkedin.com/in/barrychampion" target="_blank" title="Me on LinkedIn"><i class="fa fa-linkedin-square"></i></a>
        <a href="http://www.facebook.com/barrychampion" target="_blank" title="Me on Facebook"><i class="fa fa-facebook-square"></i></a>
    </span>
    </nav>
  </div>
</header>