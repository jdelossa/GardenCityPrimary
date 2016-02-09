<?php
/**
 * Template Name: Home Template
 */
?>

<?php while (have_posts()) : the_post(); ?>
    <div class="col-sm-12">
      <div class="card" style="height: 435px;">
        <?php get_template_part('templates/page', 'header'); ?>
        <div class="col-sm-4">
          <ul class="services">
            <li><a href="<?= esc_url(home_url('/')); ?>/patients"><span class="label label-default"><i class="fa fa-files-o"></i> Patient Information</span></a></li>
            <li><a href="<?= esc_url(home_url('/')); ?>/physicians"><span class="label label-default"><i class="fa fa-user-md"></i> Our Physicians</span></a></li>
            <li><a href="<?= esc_url(home_url('/')); ?>/contact-us"><span class="label label-default"><i class="fa fa-calendar"></i> Request An Appointment</span></a></li>
          </ul>
        </div>
        <div class="col-sm-8">
          <?php get_template_part('templates/content', 'page'); ?>
        </div>
      </div>
    </div>

  <div class="col-sm-4">
    <div class="card">
      <img src="../wp-content/uploads/sites/2/2016/02/OfficeExternal2.jpg" alt="" width="100%" height="100%" data-featherlight="../wp-content/uploads/sites/2/2016/02/OfficeExternal2.jpg" />
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card">
      <img src="../wp-content/uploads/sites/2/2016/02/OfficeInternal.jpg" alt="" width="100%" height="100%" data-featherlight="../wp-content/uploads/sites/2/2016/02/OfficeInternal.jpg" />
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card">
      <img src="../wp-content/uploads/sites/2/2016/02/Reception.jpg" alt="" width="100%" height="100%" data-featherlight="../wp-content/uploads/sites/2/2016/02/Reception.jpg" />
    </div>
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
