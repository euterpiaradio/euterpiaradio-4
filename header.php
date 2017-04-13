<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>
<body <?php body_class() ?>>
    <div class="header-outter">
        <div class="header-inner">
            <div class="brand"><a href="<?php echo get_home_url(); ?>">Euterpia Radio</a></div>
            <div class="links">
                <?php wp_nav_menu( array( 'theme_location' => 'social-links', 'container_class' => 'saf-container saf-alignnone', 'menu_class' => 'saf-links' ) ); ?>
                <?php wp_nav_menu( array( 'theme_location' => 'directory-links', 'container_class' => 'saf-container saf-alignnone', 'menu_class' => 'saf-links' ) ); ?>
            </div>
        </div>
    </div>
    <div class="navigation-outter">
        <div class="navigation-inner">
            <?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'container_class' => 'navigation-container', 'menu_class' => 'navigation-links' ) ); ?>
        </div>
    </div>
    <div class="content-outter">
        <div class="content-inner">
