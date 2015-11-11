<?php
/**
 * Template Name: Home Template
 */
?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
  <!-- tron - o - jumb (egduj t'nod)-->
  <div class="jumbotron">
    <div class="content">
      <h2 class="description"><?php echo get_bloginfo ( 'description' );  ?></h2>
      <div class="mission-statement">
        <?php $post = get_post(18); $content = apply_filters('the_content', $post->post_content); echo $content;?>
      </div>
      <p><a class="btn btn-primary" href="<?= esc_url(home_url('/')); ?>/contact-us" role="button">Request An Appointment</a></p>
    </div>
  </div>
  <!-- END tron - o - jumb -->

  <!-- our services -->
    <ul class="services">
      <li><a href="<?= esc_url(home_url('/')); ?>/patients"><span class="label label-default"><i class="fa fa-files-o"></i> Patient Information</span></a></li>
      <li><a href="<?= esc_url(home_url('/')); ?>/physicians"><span class="label label-default"><i class="fa fa-user-md"></i> Our Physicians</span></a></li>
      <li><a href="<?= esc_url(home_url('/')); ?>/contact-us"><span class="label label-default"><i class="fa fa-calendar"></i> Request An Appointment</span></a></li>
    </ul>
  <!-- END our services -->

  <div class="separator line-separator"></div>


    <div class="col-sm-8 col-centered">
      <h4>
        <?php $post = get_post(2); $title = apply_filters('the_title', $post->post_title); echo $title;?>
        <?php bloginfo('name'); ?>
      </h4>
      <?php get_template_part('templates/content', 'page'); ?>
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
