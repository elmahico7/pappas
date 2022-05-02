<?php 
$title = get_field('info_title');
$description = get_field('description');
?>
<section class="demand">
    <div class="container-fluid">
        <div class="demand__info" data-text-animation>
            <div class="row">
                <div class="col-12 col-md-10 offset-md-1 col-xl-9 offset-xl-3">
                    <div class="demand__info-title">
                        <?php echo $title; ?>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-10 offset-md-1 col-xl-9 offset-xl-3">
                    <div class="demand__info-description">
                        <?php echo $description; ?>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-10 offset-md-1 col-xl-9 offset-xl-3">
                    <div class="contact-form">
                        <?php if (is_page_template( 'templates/demand.php' )) : ?>
                            <?php echo do_shortcode('[contact-form-7 id="384" title="Demand Form"]'); ?>
                        <?php endif; ?>
                        <?php if (is_page_template( 'templates/assign.php' )) : ?>
                            <?php echo do_shortcode('[contact-form-7 id="385" title="Assign Form"]'); ?></div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>