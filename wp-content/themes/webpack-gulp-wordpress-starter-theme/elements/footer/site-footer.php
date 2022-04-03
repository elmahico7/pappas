<?php 
$logo = get_field('logo', 'options'); 
$footer_title = get_field('footer_title', 'options'); 
$telephone = get_field('telephone', 'options'); 
$email = get_field('email', 'options'); 
$address = get_field('address', 'options'); 
$copyright = get_field('copyright', 'options'); 
$fb_icon = get_field('fb_icon', 'options');
$fb_link = get_field('fb_link', 'options');
?>
<footer>
    <?php if ($logo) : ?>
        <img src="<?php echo $logo['url']; ?>" alt="logo" class="footer_logo" />
    <?php endif; ?>
    <?php if ($footer_title) : ?>
        <div class="title">
            <?php echo $footer_title; ?>
        </div>
    <?php endif; ?>
    <div class="info">
        <div class="telephone">
            <?php echo $telephone; ?>
        </div>
        <div class="email">
            <?php echo $email; ?>
        </div>
        <div class="address">
            <?php echo $address; ?>
        </div>
    </div>
    <div class="bottom">
        <div class="copyright">
            <?php echo $copyright; ?>
        </div>
        <div class="social">
            <a href="<?php echo $fb_link; ?>" target="_blank">
                <img src="<?php echo $fb_icon['url']; ?>" alt="fb_icon" class="fb_icon" />
            </a>
        </div>
    </div>
</footer>