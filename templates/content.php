<div <?php post_class(); ?>>
    <div class="col-md-6 single-profile">
        <h5 class="entry-title">
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            <span class="specialty"><?= types_render_field("doc-special", array('raw' => 'true')); ?></span>
        </h5>
        <div class="col-sm-5">
            <a href="<?php the_permalink(); ?>" class="doctor-portrait"><?php the_post_thumbnail( 'small' ); ?></a>
        </div>
        <div class="col-sm-7">
            <div class="office-hours">
                <p><?= types_render_field("doc-hours", array('raw' => 'true')); ?>
            </div>
        </div>

    </div>
</div>
