<header class="banner">
    <nav class="navbar-fixed-top">
      <div class="header-contact">
        <div class="container">
        <a href="tel:<?php echo (get_option('qs_contact_phone')); ?>" class="pull-right"><i class="fa fa-phone"></i><span class="phone"> <?php echo (get_option('qs_contact_phone')); ?></span></a>
        <a href="#" class="pull-right"><i class="fa fa-map-marker"></i><span class="map-icon"> <?php echo (get_option('qs_contact_street')); ?>, <?php echo (get_option('qs_contact_city')); ?>, <?php echo (get_option('qs_contact_state')); ?> <?php echo (get_option('qs_contact_zip')); ?></span></a>
        </div>
      </div>
      <div class="nav-primary">
        <div class="container">
          <a class="brand" href="<?= esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
          <?php
          if (has_nav_menu('primary_navigation')) :
            wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav', 'class' => 'pull-right']);
          endif;
          ?>
        </div>
      </div>
    </nav>

</header>
