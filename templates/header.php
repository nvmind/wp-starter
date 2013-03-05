<div class="container">
  
  <header class="banner" role="banner">
   
    <div class="top-bar">
      <a class="logo" href="<?php echo home_url(); ?>/"><img src="<?php echo get_bloginfo('template_url'); ?>/inc/images/logo.png" alt="logo"></a>
      <nav class="nav-main" role="navigation">
          <?php
            if (has_nav_menu('primary_navigation')) :
              wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav nav-pills'));
            endif;
          ?>
      </nav>
    <div class="clearfix"></div>
    </div>
    <div class="header-panel">
      <div class="legend span8 rounded">
          <h1>
            Delectable Dishes
          </h1>
          <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Sed posuere consectetur est at lobortis. Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
      </div>   
    </div>

  </header>