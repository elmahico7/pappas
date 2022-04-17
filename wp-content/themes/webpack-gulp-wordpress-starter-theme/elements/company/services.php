<?php
$services = get_field('services');
$service_image = get_field('service_image');
?>
<section class="section-services" style="background-color: #e4e3e6;">
    <div class="site-container">
        <div class="container">
            <div class="row">
                <div class="services" data-service-animation>
                    <div class="services-title">
                        <?php foreach($services as $service) : ?>
                            <div class="service__title__inner">
                                <?php echo get_svg('check'); ?><?php echo $service['title']; ?>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <div class="services__image">
                        <img src="<?php echo $service_image['url']; ?>" alt='service_image'>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>