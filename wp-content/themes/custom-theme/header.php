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
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/pushy.css"/>
	<link rel=icon href='<?php bloginfo('template_directory'); ?>/alter-favicon.png'>
	<?php wp_head(); ?>
</head>
<body id="container" class="page-template page-template-onecolumn-page page-template-onecolumn-page-php page page-id-15 desktop chrome">
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
		   			<li class="pushy-submenu">
		   				<a href="<?php echo get_home_url(); ?>" title="Alters Events" rel="home"><img style="margin: 0 auto 0px !important;width: 90px;" src="<?php bloginfo('template_directory'); ?>/assets/images/logo-alter.png" alt="Alters Events"></a>
		   			</li>    
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
