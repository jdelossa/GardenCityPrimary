<header class="banner">
    <nav class="navbar-static-top">
      <div class="header-contact">
        <div class="container">
        <a href="tel:<?php echo (get_option('qs_contact_phone')); ?>" class="pull-right"><i class="fa fa-phone"></i><span class="phone"> <?php echo (get_option('qs_contact_phone')); ?></span></a>
        <a href="https://www.google.com/maps/place/Garden+City+Primary+Medical+Care/@40.7298721,-73.6357575,15z/data=!4m2!3m1!1s0x0:0x29596d20337b190e" target="_blank" class="pull-right"><i class="fa fa-map-marker"></i><span class="map-icon"> <?php echo (get_option('qs_contact_street')); ?>, <?php echo (get_option('qs_contact_city')); ?>, <?php echo (get_option('qs_contact_state')); ?> <?php echo (get_option('qs_contact_zip')); ?></span></a>
        </div>
      </div>
      <div class="nav-primary">
        <div class="container">
          <div class="row">

              <a class="brand" href="<?= esc_url(home_url('/')); ?>"><?= get_bloginfo('title') ?></a>
              <?php
              if (has_nav_menu('primary_navigation')) :
                wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav', 'class' => 'pull-right']);
              endif;
              ?>

          </div>
        </div>
      </div>
    </nav>

</header>
