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
	<title><?php bloginfo('title');?></title>
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/style.css"/>
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/bootstrap/css/bootstrap.css"/>
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/font-awesome.css"/>
	<?php wp_head(); ?>
</head>
<body class="page-template page-template-onecolumn-page page-template-onecolumn-page-php page page-id-15 desktop chrome">
<div id="main-content-int">
	<?php 
		$header_menu_items = wp_get_nav_menu_items('HEADER');
	?>
	<header id="header" role="banner" style="display: block;">
		<h1><a href="" title="Alters Events" rel="home"><img style="margin: 0 auto 0px !important;" src="<?php bloginfo('template_directory'); ?>/assets/images/logo-alter.png" class="logo" alt="Sweet Basil"></a></h1>
		<span class="phone-number">845.537.7291</span>
		<p class="site_desc">Alters Events.</p>
		<nav id="access" role="navigation" style="padding-top: 20px;padding-left: 4px;">
			<div class="menu-header">
				<ul id="menu-main-menu" class="menu">
					<?php foreach( $header_menu_items as $m ){ ?>
						<li><a href="<?php echo $m->url; ?>"><?php echo strtoupper($m->title); ?></a></li>
					<?php } ?>
					<!-- <li id="menu-item-21" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-21"><a href="https://sweetbasilvail.com/about/">HOME</a></li>
					<li id="menu-item-197" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-197"><a class="active-menu" href="#">ABOUT US</a></li>
					<li id="menu-item-26" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-15 current_page_item menu-item-26"><a href="https://sweetbasilvail.com/reservations/">WHY US</a></li>
					<li id="menu-item-2582" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2582"><a href="https://sweetbasilvail.com/groups/">GALLERY</a></li>
					<li id="menu-item-24" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-24"><a href="https://sweetbasilvail.com/gift-cards/">BEAUTY TIPS</a></li>
					<li id="menu-item-129" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-129"><a href="https://sweetbasilvail.com/contact/">CONTACT US</a></li> -->
				</ul>
			</div>             
		</nav>
		<!-- #access -->
		<nav id="mobile-access" role="navigation">
				<div class="mobile-menu">
				<ul id="menu-mobile-menu" class="menu">
					<?php foreach( $header_menu_items as $m ){ ?>
						<li><a href="<?php echo $m->url; ?>"><?php echo strtoupper($m->title); ?></a></li>
					<?php } ?>
					<!-- <li id="menu-item-457" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-457"><a href="https://sweetbasilvail.com/about/">HOME</a></li>
					<li id="menu-item-462" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-462"><a href="https://sweetbasilvail.com/lunch-menu/">ABOUT US</a></li>
					<li id="menu-item-459" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-459"><a href="https://sweetbasilvail.com/dinner-menu/">GALLERY</a></li>
					<li id="menu-item-2756" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2756"><a href="https://sweetbasilvail.com/dessert/">BEAUTY TIPS</a></li>
					<li id="menu-item-2758" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2758"><a href="https://sweetbasilvail.com/cocktails/">CONTACT US</a></li> -->
				</ul>
			</div>             
		</nav><!-- #mobile-access -->
	</header>	
