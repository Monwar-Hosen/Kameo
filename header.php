<!doctype html>
<html lang="<?php bloginfo('language'); ?>">
  <head>
    <!-- Required meta tags -->
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://use.typekit.net/rdc0wfw.css">
    <title><?php bloginfo('name'); ?></title>
	<?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?> site-url="<?php echo home_url(); ?>">
  <?php wp_body_open(); ?>
  <?php
	$header_left_logo			=	get_field('header_left_logo', 'option');
	$header_menu_center_image	=	get_field('header_menu_center_image', 'option');
	$book_button_text			=	get_field('book_button_text', 'option');
	$book_button_link			=	get_field('book_button_link', 'option');
  ?>
  <header>
	<div class="head-left-logo hide-mobile">
		<a href="<?php echo home_url(); ?>"><img src="<?php echo $header_left_logo; ?>" alt="img"></a>
	</div>
	<div class="head-menu">
		<div class="head-menu-left">
			<?php
				$args	=	array(
					'theme_location'	=>	'header_left-menu'
				);
				wp_nav_menu($args);
			?>
		</div>
		<div class="head-menu-center-image">
			<a href="<?php echo home_url(); ?>"><img src="<?php echo $header_menu_center_image; ?>" alt="img"></a>
		</div>
		<div class="head-menu-right">
			<?php
				$args	=	array(
					'theme_location'	=>	'header_right-menu'
				);
				wp_nav_menu($args);
			?>
		</div>
	</div>
	<div class="mobile-menu">
		<div class="mobile-div">
			<nav id="mobile-nav">
			 <?php
         wp_nav_menu(
            array(
               'theme_location'     =>    'mobile-menu',
               'container'          =>       'ul',
               'menu_class'         =>    'nav-menu-wraper',
            )
         );
        ?>
			</nav>
		</div>
		<div class="head-menu-center-image">
			<a href="<?php echo home_url(); ?>"><img src="<?php echo $header_menu_center_image; ?>" alt="img"></a>
		</div>
		<div class="head-left-logo hide-desktop">
			<a href="<?php echo home_url(); ?>"><img src="<?php echo $header_left_logo; ?>" alt="img"></a>
		</div>
	</div>
	
	<div class="head-book-btn">
		<a href="<?php echo $book_button_link; ?>"><?php echo $book_button_text; ?></a>
	</div>
  </header>