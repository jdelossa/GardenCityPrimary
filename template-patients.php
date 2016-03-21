<?php
/**
 * Template Name: Patient Template
 */
?>

<?php while (have_posts()) : the_post(); ?>
    <div class="card">
        <?php get_template_part('templates/page', 'header'); ?>
        <?php get_template_part('templates/content', 'page'); ?>
    </div>


    <div class="row">
        <div class="col-xs-6">
            <div class="card">
                <img src="../wp-content/uploads/sites/2/2016/02/OfficePhoto2.jpg" alt="Office Photo" width="100%" height="145px" data-featherlight="../wp-content/uploads/sites/2/2016/02/OfficePhoto2.jpg" />
            </div>
        </div>
        <div class="col-xs-6">
            <div class="card">
                <img src="../wp-content/uploads/sites/2/2016/02/OfficeInternal4.jpg" alt="Office Internal" width="100%" height="145px" data-featherlight="../wp-content/uploads/sites/2/2016/02/OfficeInternal4.jpg" />
            </div>
        </div>
    </div>


    <div class="card">
        <div class="page-header">
            <h3>Accepted Insurances</h3>
        </div>

        <div id="insurances">
            <div class="aetna insurances"></div>
            <div class="affinity insurances"></div>
            <div class="bluecross insurances"></div>
            <div class="cigna insurances"></div>
            <div class="emblemHealth insurances"></div>
            <div class="ghi insurances"></div>
            <div class="healthNet insurances"></div>
            <div class="hip insurances"></div>
            <div class="fidelis insurances"></div>
            <div class="magnacare insurances"></div>
            <div class="medicare insurances"></div>
            <div class="medicaid insurances"></div>
            <div class="multiplan insurances"></div>
            <div class="oscar insurances"></div>
            <div class="oxford insurances"></div>
            <div class="united insurances"></div>
            <div class="vytra insurances"></div>
        </div>

        <p class="text-muted text-center">*If you do not see your insurance listed above, please call us at <a href="tel:<?php echo (get_option('qs_contact_phone')); ?>"><?php echo (get_option('qs_contact_phone')); ?></a></p>
    </div>

<?php endwhile; ?>
