<?php
$categories = get_field('categories');
?>
<?php if ($categories) : ?>
    <div class="container-fluid g-0 pd10">
        <div class="row g-0">
            <?php foreach($categories as $idx => $category) :
                $image = $category['image']['url'];
                $title = $category['title'];
            ?>
                <div class="col-12 col-md-6 col-lg-4 pd10">
                    <div class="categories">
                        <div class="categories__image">
                            <img src="<?php echo $image; ?>" alt="category__image" />
                        </div>
                        <div class="categories__title">
                            <?php echo $title; ?>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
<?php endif; ?>