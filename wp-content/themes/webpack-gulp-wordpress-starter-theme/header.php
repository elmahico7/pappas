<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>

<body <?php body_class('site__body'); ?>>
<?php /*
<div id="page" class="site">
	<header id="masthead" class="site-header">
	<a href="<?php echo get_home_url(); ?>">
		<?php get_template_part('partials/scroll-text'); ?>
	</a>
		<div class="site-branding">
	<!-- MAybe a logo  -->
		</div><!-- .site-branding -->

		<!-- <nav id="site-navigation" class="main-navigation"> -->
			<?php //wp_nav_menu( array( 'theme_location' => 'menu-main', 'menu_id' => 'menu-main' ) ); ?>
		<!-- </nav>#site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
*/ ?>
<?php get_template_part('elements/header/site-header'); ?>