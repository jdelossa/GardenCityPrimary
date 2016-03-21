<?php
/**
 * Template Name: Home Template
 */
?>


<?php while (have_posts()) : the_post(); ?>
  <div class="row">
    <div class="col-xs-12">
      <div class="home-container">
       <h2><?php bloginfo('description'); ?></h2>
        <?php $post = get_post(23); $content = apply_filters('the_content', $post->post_content); echo $content;?>
        <ul class="contact-cta">
          <li><a href="<?= esc_url(home_url('/')); ?>/contact-us"><span class="label label-default"><i class="fa fa-calendar-plus-o"></i>Request An Appointment</span></a></li>
        </ul>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-8">
      <div class="card">
        <?php get_template_part('templates/page', 'header'); ?>
        <?php get_template_part('templates/content', 'page'); ?>


        <div class="home-header">
          <h3><i class="fa fa-heartbeat"></i><?php $post = get_post(31); $title = apply_filters('the_title', $post->post_title); echo $title;?></h3>
        </div>
        <?php $post = get_post(31); $content = apply_filters('the_content', $post->post_content); echo $content;?>



        <div class="home-header">
          <h3><i class="fa fa-user-md"></i><?php $post = get_post(33); $title = apply_filters('the_title', $post->post_title); echo $title;?></h3>
        </div>
        <?php $post = get_post(33); $content = apply_filters('the_content', $post->post_content); echo $content;?>

      </div>
    </div>

    <div class="col-md-4">
      <div class="card">
        <img src="../wp-content/uploads/sites/2/2016/02/OfficeInternal.jpg" alt="Office Internal" width="100%" height="100%" data-featherlight="../wp-content/uploads/sites/2/2016/02/OfficeInternal.jpg" />
      </div>
      <div class="card">
        <img src="../wp-content/uploads/sites/2/2016/02/Reception.jpg" alt="Reception Area" width="100%" height="100%" data-featherlight="../wp-content/uploads/sites/2/2016/02/Reception.jpg" />
      </div>
      <div class="card">
        <img src="../wp-content/uploads/sites/2/2016/02/PatientRoom.jpg" alt="Patient Room" width="100%" height="100%" data-featherlight="../wp-content/uploads/sites/2/2016/02/PatientRoom.jpg" />
      </div>
    </div>
  </div>

  <?php get_template_part('templates/page', 'map'); ?>

<?php endwhile; ?>

<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
<script type="text/javascript" src="<?= get_template_directory_uri(); ?>/assets/scripts/gmaps.js"></script>
<script type="text/javascript" src="<?= get_template_directory_uri(); ?>/assets/scripts/gmaps-main.js"></script>
