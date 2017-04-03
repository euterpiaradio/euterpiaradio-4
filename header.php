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
            <div class="brand">Euterpia Radio</div>
            <div class="links">
                <?php wp_nav_menu( array( 'theme_location' => 'social-links', 'container_class' => 'saf-container saf-alignnone', 'menu_class' => 'saf-links' ) ); ?>
                <?php wp_nav_menu( array( 'theme_location' => 'directory-links', 'container_class' => 'saf-container saf-alignnone', 'menu_class' => 'saf-links' ) ); ?>
            </div>
        </div>
    </div>