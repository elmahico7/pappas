<div class="site-header__menu">
    <div class="site-menu__inner">
        <?php if (has_nav_menu('main-menu')) :
            wp_nav_menu( array(
                'theme_location' => 'main-menu',
                'container_class' => 'site-header__menu'
            ));
        endif; ?>
    </div>
</div>