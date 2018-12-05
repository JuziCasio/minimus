<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>

	<link href="https://fonts.googleapis.com/css?family=Roboto+Mono:300,300i,400,400i,500" rel="stylesheet"> 
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<header class="header"><div class="container"><div class="row">
  <div class="col-lg-2 col-md-12 d-flex justify-content-center"><div class="logo"><?php the_custom_logo(); ?></div></div>
  <div class="col-lg-10 d-flex header__container"><nav class="header__nav__menu"><ul class="menu d-flex justify-content-end">
  									<?php
									wp_nav_menu( array(
										'theme_location' => 'primary',
										'container'      => 'ul',
										'items_wrap'     => 'false',
										'menu_class'     => 'menu d-flex justify-content-end',
										'items_wrap'	 => '%3$s',
										'depth'          => 1,
										'link_before'    => '<li class="menu__item">',
										'link_after'     => '</li>',
									) );
								?>
  </ul></nav><?php get_search_form(); ?></div>
</div></div></header>
