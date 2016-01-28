<div class="row">
    <div class="col-sm-4">
        <!-- our services -->
        <ul class="services">
            <li><a href="<?= esc_url(home_url('/')); ?>/patients"><span class="label label-default"><i class="fa fa-files-o"></i> Patient Information</span></a></li>
            <li><a href="<?= esc_url(home_url('/')); ?>/physicians"><span class="label label-default"><i class="fa fa-user-md"></i> Our Physicians</span></a></li>
            <li><a href="<?= esc_url(home_url('/')); ?>/contact-us"><span class="label label-default"><i class="fa fa-calendar"></i> Request An Appointment</span></a></li>
        </ul>
        <!-- END our services -->
    </div>
    <div class="col-sm-8">
        <!-- tron - o - jumb (egduj t'nod)-->
        <div class="jumbotron">
            <div class="content">
                <h3 class="description"><?php echo get_bloginfo ( 'description' );  ?></h3>
                <div class="mission-statement">
                    <?php $post = get_post(18); $content = apply_filters('the_content', $post->post_content); echo $content;?>
                </div>
                <p><a class="btn btn-primary" href="<?= esc_url(home_url('/')); ?>/contact-us" role="button">Request An Appointment</a></p>
            </div>
        </div>
        <!-- END tron - o - jumb -->
    </div>

</div>

