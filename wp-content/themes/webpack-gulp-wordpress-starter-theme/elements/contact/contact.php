<?php 
$image = get_field('image');
$title = get_field('title');
$subtitle = get_field('subtitle');
$address = get_field('address');
$telephone = get_field('telephone');
$email = get_field('email');
$form_title = get_field('form_title');
$map_shortcode = get_field('map_shortcode');
?>
<section class="contact">
    <div class="container-fluid g-0">
        <div class="row g-0">
            <div class="col-12 col-xl-6 pdr0">
                <div class="contact__image" data-image-animation>
                    <img src="<?php echo $image['url']; ?>" alt="contact_image" class="contact__img" />
                </div>
            </div>
            <div class="col-12 col-xl-4 offset-xl-1">
                <div class="contact__info">
                    <div class="contact__info__title">
                        <?php echo $title; ?>
                    </div>
                    <div class="contact__info__subtitle">
                        <?php echo $subtitle; ?>
                    </div>
                    <div class="contact__info__address">
                        <?php echo $address; ?>
                    </div>
                    <div class="contact__info__telephone">
                        <span>Tel: </span><a href="tel:<?php echo $telephone; ?>"><?php echo $telephone; ?></a>
                    </div>
                    <div class="contact__info__email">
                        <span>Email: </span><a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a>
                    </div>
                    <div class="contact__info__form-title">
                        <?php echo $form_title; ?>
                    </div>
                    <div class="contact-form">
                        <?php echo do_shortcode('[contact-form-7 id="361" title="Contact Form"]'); ?> 
                    </div>
                </div>
            </div>
        </div>
        <div class="row g-0">
            <?php echo do_shortcode($map_shortcode); ?>
        </div>
    </div>
</section>