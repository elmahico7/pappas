<?php
$title = get_field('title');
$subtitle = get_field('subtitle');
$description = get_field('description');
$cirlce1title = get_field('circle_1_title');
$circle1number = get_field('circle_1_number');
$cirlce2title = get_field('circle_2_title');
$circle2number = get_field('circle_2_number');
$cirlce3title = get_field('circle_3_title');
$circle3number = get_field('circle_3_number');
?>
<section class="office">
    <div class="site-container">
        <div class="container">
            <div class="row">
                <div class="col-md-10">
                    <div class="office__title" data-text-animation>
                        <?php echo $title; ?>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 offset-md-6">
                    <div class="office__text" data-text-animation>
                        <div class="office__text__subtitle">
                            <?php echo $subtitle; ?>
                        </div>
                        <div class="office__text__decription">
                            <?php echo $description; ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-10">
                    <div class="office__numbers">
                        <div class="numbers">
                            <div class="office__numbers__houses">
                                <div data-count-to="<?php echo $circle1number; ?>" data-duration="2000" class="counter"></div>
                                <span><?php echo $cirlce1title; ?></span>
                            </div>
                            <div class="office__numbers__sales">
                                <div data-count-to="<?php echo $circle2number; ?>" data-duration="2000" class="counter"></div>
                                <span><?php echo $cirlce2title; ?></span>
                            </div>
                            <div class="office__numbers__years">
                                <div data-count-to="<?php echo $circle3number; ?>" data-duration="2000" class="counter"></div>
                                <span><?php echo $cirlce3title; ?></span>
                            </div>
                        <div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>