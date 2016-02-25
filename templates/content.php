<div <?php post_class(); ?>>
    <div class="col-md-4 col-sm-6 single-profile">
        <div class="card">
        <h5 class="entry-title">
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            <p class="specialty"><?= types_render_field("doc-special", array('raw' => 'true')); ?></p>
        </h5>
        <a href="<?php the_permalink(); ?>" class="doctor-portrait"><?php the_post_thumbnail( 'small' ); ?></a>
        </div>
    </div>
</div>
