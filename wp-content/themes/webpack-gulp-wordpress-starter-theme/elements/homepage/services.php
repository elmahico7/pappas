<?php
$title = get_field('title');
$subtitle = get_field('subtitle');
$services = get_field('services');
?>
<section class="services" data-text-animation>
    <?php if ($title) : ?>
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-10 offset-lg-1">
                    <div class="services__title">
                        <?php echo $title; ?>
                    </div>
                    <?php if ($subtitle) : ?>
                        <div class="services__subtitle">
                            <?php echo $subtitle; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    <?php endif; ?>
    <?php if ($services) : ?>
        <div class="services__icons">
            <div class="container">
                <div class="row">
                    <?php foreach ($services as $idx => $service) :
                            $icon = $service['icon']['url'];
                            $title = $service['title'];
                            $subtitle = $service['subtitle'];  
                        ?>       
                            <div class="col-12 col-lg-4">
                                <div class="services__icons__icon">
                                    <div class="services__icons__icon__inner">
                                        <img src="<?php echo $icon; ?>" alt="service_icon"/>
                                    </div>
                                </div>
                                <div class="services__icons__title">
                                    <?php echo $title; ?>
                                </div>
                                <div class="services__icons__subtitle">
                                    <?php echo $subtitle; ?>
                                </div>
                            </div>              
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    <?php endif; ?>
</section>