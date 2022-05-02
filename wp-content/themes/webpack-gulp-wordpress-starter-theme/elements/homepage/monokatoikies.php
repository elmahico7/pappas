<?php
$CategoryTitle = get_field('category_title');
$monokatoikies = get_field('monokatoikies'); 
?>
<section class="monokatoikies">
    <div class="category__title__inner">
        <div class="category__title">
            <?php echo $CategoryTitle; ?>
            <div class="category__title__horizontal"></div>
            <div class="category__title__vertical"></div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <?php
                foreach($monokatoikies as $idx => $monokatoikia) :
                    $image = $monokatoikia['image']['url'];
                    $price = $monokatoikia['price'];
                    $title = $monokatoikia['title'];
                    $description = $monokatoikia['description'];
                    $code = $monokatoikia['code'];
                    $square_meters = $monokatoikia['squares_meters'];
            ?>
            <div class="col-12 col-lg-6">
                <div class="monokatoikies__inner" data-text-animation>
                    <div class="monokatoikies__image">
                        <img src="<?php echo $image; ?>" alt="ad_image" class="test__image"/>
                        <div class="monokatoikies__image__price">
                            <?php echo $price; ?>
                        </div>
                    </div>
                    <div class="monokatoikies__content">
                        <div class="monokatoikies__content__title">
                            <?php echo $title; ?>
                        </div>
                        <div class="monokatoikies__content__description">
                            <?php echo $description; ?>
                        </div>
                        <div class="monokatoikies__content__code">
                            <span>Κωδικός: </span><?php echo $code; ?>
                        </div>
                        <div class="monokatoikies__content__meters">
                            <?php echo $square_meters; ?><span> τ.μ</span>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>