<?php
/**
 * Template Name: Home Template
 */
?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
  <?php get_template_part('templates/template', 'jumbotron'); ?>

  <div class="separator line-separator"></div>


    <div class="col-sm-8 col-centered">
      <h4>
        <?php $post = get_post(2); $title = apply_filters('the_title', $post->post_title); echo $title;?>
        <?php bloginfo('name'); ?>
      </h4>
      <?php get_template_part('templates/content', 'page'); ?>

      <div class="col-md-4"><img src="http://localhost:8888/gardencityprimary/wp-content/uploads/2016/01/Reception.jpg" alt="" height="145px" width="100%"></div>
      <div class="col-md-4"><img src="http://localhost:8888/gardencityprimary/wp-content/uploads/2016/01/PatientRoom.jpg" alt="" height="145px" width="100%"></div>
      <div class="col-md-4"><img src="http://localhost:8888/gardencityprimary/wp-content/uploads/2016/01/OfficePhoto2.jpg" alt="" height="145px" width="100%"></div>

    </div>

    <?php get_template_part('templates/page', 'map'); ?>
    
    <ul class="contact-cta">
      <li><a href="<?= esc_url(home_url('/')); ?>/contact-us"><span class="label label-default">Request An Appointment</span></a></li>
      <li><a href="tel:<?php echo (get_option('qs_contact_phone')); ?>"><span class="label label-primary">Call Us: <?php echo (get_option('qs_contact_phone')); ?></span></a></li>
    </ul>


<?php endwhile; ?>

<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
<script type="text/javascript" src="<?= get_template_directory_uri(); ?>/assets/scripts/gmaps.js"></script>
<script type="text/javascript" src="<?= get_template_directory_uri(); ?>/assets/scripts/gmaps-main.js"></script>
