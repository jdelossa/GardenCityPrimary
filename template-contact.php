<?php
/**
 * Template Name: Contact Template
 */
?>

<?php while (have_posts()) : the_post(); ?>

    <div class="row">
        <div class="col-xs-12">
            <div class="card">
            <?php get_template_part('templates/page', 'header'); ?>
            <?php get_template_part('templates/content', 'page'); ?>
            </div>
            <div class="map-card card">
            <div class="map">
                <div id="map"></div>
            </div>
            <!--<?php echo do_shortcode('[contact-form-7 id="62" title="Contact Us"]'); ?>-->
            </div>
        </div>
    </div>

<?php endwhile; ?>

<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
<script type="text/javascript" src="<?= get_template_directory_uri(); ?>/assets/scripts/gmaps.js"></script>
<script type="text/javascript" src="<?= get_template_directory_uri(); ?>/assets/scripts/gmaps-main.js"></script>