<?php
/**
 * Template Name: Contact Template
 */
?>

<?php while (have_posts()) : the_post(); ?>

    <div class="row">
        <div class="col-xs-4 col-centered">
            <a href="tel:<?php echo (get_option('qs_contact_phone')); ?>" class="btn btn-primary"><i class="fa fa-phone"></i> Call Us at <?php echo (get_option('qs_contact_phone')); ?></a>
        </div>
    </div><br>

    <div class="row">
        <div class="col-xs-7 col-centered">
            <div class="outline">
                <?php get_template_part('templates/content', 'page'); ?>
                <?php echo do_shortcode('[contact-form-7 id="62" title="Contact Us"]'); ?>
            </div>
        </div>
    </div>
    <?php get_template_part('templates/page', 'map'); ?>
<?php endwhile; ?>

<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
<script type="text/javascript" src="<?= get_template_directory_uri(); ?>/assets/scripts/gmaps.js"></script>
<script type="text/javascript" src="<?= get_template_directory_uri(); ?>/assets/scripts/gmaps-main.js"></script>