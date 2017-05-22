<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage custom-theme
 * @since custom-theme 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
	<title><?php bloginfo('title');?></title>
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/style.css"/>
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/bootstrap/css/bootstrap.css"/>
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/font-awesome.css"/>
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/owl.carousel.css"/>
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/owl.theme.css"/>
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/pushy.css"/>
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/colorbox.css"/>
	<?php wp_head(); ?>
</head>
<body class="page-template page-template-onecolumn-page page-template-onecolumn-page-php page page-id-15 desktop chrome">
<div id="main-content-int">
<!-- Pushy Menu -->
<nav class="pushy pushy-left" data-focus="#first-link">
	<?php 
	$menuargs = array(
		"theme_location" => "primary",
		"menu_class" => "s-menu",
		"menu_id" => "mobile-menu",
	);
	$items = wp_get_nav_menu_items( 'mobile-menu', $menuargs); 
	?> 
    <div class="pushy-content">
        <ul>
       		<?php foreach( $items as $item ){ ?>
                <li class="pushy-submenu">
                    <a id="first-link" style="text-transform: uppercase;" href="<?php echo $item->url; ?>"><?php echo $item->title; ?></a>
                </li>
            <?php } ?>	
        </ul>
    </div>
</nav>
<!-- Site Overlay -->
<div class="site-overlay"></div>
<div id="container" style="position: relative;">
	<?php 
		$header_menu_items = wp_get_nav_menu_items('HEADER');
	?>
	<header id="header" role="banner" style="display: block;">
		<h1><a href="<?php echo get_home_url(); ?>" title="Alters Events" rel="home"><img style="margin: 0 auto 0px !important;" src="<?php bloginfo('template_directory'); ?>/assets/images/logo-alter.png" class="logo"></a></h1>
		<span class="phone-number">845.537.7291</span>
		<p class="site_desc">Alters Events.</p>
		<nav id="access" role="navigation" style="padding-top: 20px;">
			<div class="menu-header">
				<?php echo wp_nav_menu(array('menu_class' => 'menu', 'menu_id' => 'menu-main-menu')); ?>					
			</div>             
		</nav>
		<!-- #access -->
		<nav id="mobile-access" role="navigation">
			<div class="mobile-menu">
				<?php echo wp_nav_menu(array('menu_class' => 'menu', 'menu_id' => 'menu-mobile-menu')); ?>					
			</div>             
		</nav><!-- #mobile-access -->
	</header>	
	<header id="mobile-menu">
		<div class="col-sm-12 no-space">
			<div class="col-sm-4 left">
				 <button class="menu-btn">&#9776;</button>
			</div>
			<div class="col-sm-5 left no-space">
				<a href="" title="Alters Events" rel="home"><img style="margin: 0 auto 0px !important;width: 90px;" src="<?php bloginfo('template_directory'); ?>/assets/images/logo-alter.png" alt="Alters Events"></a>
			</div>
			
		</div>
	</header>

      
     
