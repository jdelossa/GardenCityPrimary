<?php
/**
 * Template Name: Home Template
 */
?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
  <!-- tron - o - jumb (egduj t'nod)-->
  <div class="jumbotron">
    <h2 class="description"><?php echo get_bloginfo ( 'description' );  ?></h2>
    <div class="mission-statement">
      <?php $post = get_post(18); $content = apply_filters('the_content', $post->post_content); echo $content;?>
    </div>
    <p><a class="btn btn-primary" href="<?= esc_url(home_url('/')); ?>/contact-us" role="button">Request An Appointment</a></p>
  </div>
  <!--END tron - o - jumb -->

  <!-- our services -->
    <ul class="services">
      <li><a href="#"><span class="label label-default"><i class="fa fa-files-o"></i> Patient Information</span></a></li>
      <li><a href="#"><span class="label label-default"><i class="fa fa-user-md"></i> Our Physicians</span></a></li>
      <li><a href="#"><span class="label label-default"><i class="fa fa-calendar"></i> Request An Appointment</span></a></li>
    </ul>
  <!-- END our services -->

  <div class="separator line-separator"></div>
  <div class="col-sm-7">
    <h4>
      <?php $post = get_post(2); $title = apply_filters('the_title', $post->post_title); echo $title;?>
      <?php bloginfo('name'); ?>
    </h4>
    <?php get_template_part('templates/content', 'page'); ?>
  </div>
  <div class="col-sm-5">
    <img src="http://placehold.it/400x400" class="pull-right" alt="Garden City Primary Office">
  </div>
<?php endwhile; ?>
