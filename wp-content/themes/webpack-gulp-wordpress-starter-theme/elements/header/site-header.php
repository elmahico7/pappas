<?php $logo = get_field('logo', 'options'); ?>
<header class="site-header">
    <img src="<?php echo $logo['url']; ?>" alt="logo" class="logo" />
    <?php get_template_part( 'elements/header/site-menu' ); ?>
    <div class="site-header__burger">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
    </div>
</header>
<div class="site-header__mobile__menu">
    <?php if (has_nav_menu('main-menu')) :
        wp_nav_menu( array(
            'theme_location' => 'main-menu'
        ));
    endif; ?>
</div>