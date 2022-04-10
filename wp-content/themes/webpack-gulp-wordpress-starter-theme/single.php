<?php
get_header();
$map_shortcode = get_field('map_shortcode');
?>
<div class="site-container">
    <div class="single">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-10">
                    <div class="single__title">
                        <?php echo 'ΜΕΖΟΝΕΤΑ 130,00 τ.μ., €300.000'; ?>
                    </div>
                    <div class="single__location">
                        <?php echo 'Άνοιξη, (Αττική - Ανατολικά Προάστια)'; ?>
                    </div>
                </div>
            </div>
            <div class="row mt50">
                <div class="col-12 col-lg-8">
                    <div class="single__gallery">
                        <img src="http://l.l/waitress/wp-content/uploads/2022/04/rs_P7220018-2.jpg" />
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="single__info">
                        <div class="single__info__location">
                            <span>Location: </span><?php echo 'Athens - South Alimos'; ?>
                        </div>
                        <hr>
                        <div class="single__info__price">
                            <span>Price: </span><?php echo '€ 3,500 / month'; ?>
                        </div>
                        <hr>
                        <div class="single__info__price-per-m">
                            <span>Price per m²: </span><?php echo '€ 30'; ?>
                        </div>
                        <hr>
                        <div class="single__info__area">
                        <span>Area: </span> <?php echo '115 m²'; ?>
                        </div>
                        <hr>
                        <div class="single__info__type">
                            <span>Type: </span><?php echo 'Office'; ?>
                        </div>
                        <hr>
                        <div class="single__info__heating-system">
                            <span>Heat. System: </span><?php echo 'Autonomous heating system'; ?>
                        </div>
                        <div class="single__info__call">
                            <?php echo get_svg('telephone'); ?>
                            <?php echo 'Call'; ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-lg-8">
                    <div class="single__features">
                        <div class="single__features__title bg-grey">
                            <span>Key Features: </span><?php echo '#1045'; ?>
                        </div>
                        <div class="single__features__price-per-m">
                            <span>Price per m²: </span><?php echo '€ 30'; ?>
                        </div>
                        <div class="single__features__area bg-grey">
                            <span>Area: </span><?php echo '115 m²'; ?>
                        </div>
                        <div class="single__features__type">
                            <span>Type: </span><?php echo 'Autonomous heating system (Current)'; ?>
                        </div>
                        <div class="single__features__heating-system bg-grey">
                            <span>Heating System: </span><?php echo 'The issuance of the Energy Performance Certificate is in process'; ?>
                        </div>
                        <div class="single__features__rooms">
                            <span>Rooms: </span><?php echo '2'; ?>
                        </div>
                        <div class="single__features__floor bg-grey">
                            <span>Floor: </span><?php echo '1'; ?>
                        </div>
                        <div class="single__features__parking-spot">
                            <span>Parking spot: </span><?php echo 'Yes'; ?>
                        </div>
                        <div class="single__features__construction-year bg-grey">
                            <span>Construction year: </span><?php echo '1991'; ?>
                        </div>
                         <div class="single__features__listing-code">
                            <span>Listing code: </span><?php echo '1045'; ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="single__description">
                        <div class="single__description__title">
                            <?php echo 'Property Decsription'; ?>
                        </div>
                        <div class="single__description__textarea">
                            <?php echo 'lorem ipsumllorem ipsumlorem ipsumlorem ipsumorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsum'; ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="single__map">
                        <?php echo do_shortcode($map_shortcode); ?>
                    </div>
                </div>  
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="single__interested">
                        <?php echo 'Εκδήλωση Ενδιαφέροντος'; ?>
                    </div>
                </div>  
            </div>
        </div>
    </div>
</div>
<div class="contact-form mt50 bg-grey">
    <div class="row justify-content-center">
        <div class="col-12 col-lg-6">
            <?php echo do_shortcode('[contact-form-7 id="292" title="Single Product Form"]'); ?> 
        </div>
    </div>
</div>











<?php 
get_footer();