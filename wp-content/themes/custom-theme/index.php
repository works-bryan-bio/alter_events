<?php get_header(); ?>
<?php 
	$header_menu_items = wp_get_nav_menu_items('HEADER');
	$slider_images = $wpdb->get_results("SELECT  guid FROM wp_posts WHERE post_parent =43");
?>
<div id="background">
	<div class="bg-photo bg-photo-1" style="display: block;"></div>
	<div class="bg-photo bg-photo-2" style="display: none;"></div>
</div>
<div id="main-content">
	<header id="header" role="banner" style="display: block;">
		<h1><a href="" title="Alters Events" rel="home"><img style="margin: 0 auto 0px !important;" src="<?php bloginfo('template_directory'); ?>/assets/images/logo-alter.png" class="logo" alt="Alters Events"></a></h1>
		<span class="phone-number">845.537.7291</span>
		<p class="site_desc">Alters Events.</p>
		<nav id="access" role="navigation" style="padding-top: 20px;padding-left: 4px;">
			<div class="menu-header">
				<ul id="menu-main-menu" class="menu">
					<?php foreach( $header_menu_items as $m ){ ?>
						<li><a href="<?php echo $m->url; ?>"><?php echo strtoupper($m->title); ?></a></li>
					<?php } ?>
					<!-- <li id="menu-item-21" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-21"><a class="active-menu" href="">HOME</a></li>
					<li id="menu-item-197" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-197"><a href="#">ABOUT US</a></li>
					<li id="menu-item-26" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-15 current_page_item menu-item-26"><a href="">WHY US</a></li>
					<li id="menu-item-2582" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2582"><a href="">GALLERY</a></li>
					<li id="menu-item-24" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-24"><a href="">BEAUTY TIPS</a></li>
					<li id="menu-item-129" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-129"><a href="">CONTACT US</a></li> -->
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
					<!-- <li id="menu-item-457" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-457"><a href="">HOME</a></li>
					<li id="menu-item-462" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-462"><a href="">ABOUT US</a></li>
					<li id="menu-item-459" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-459"><a href="">GALLERY</a></li>
					<li id="menu-item-2756" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2756"><a href="">BEAUTY TIPS</a></li>
					<li id="menu-item-2758" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2758"><a href="">CONTACT US</a></li> -->
				</ul>
			</div>             
		</nav><!-- #mobile-access -->
	</header>	
	<section id="content-home" role="main"></section>
</div><!-- #main-content-int -->
<footer id="footer-home" role="contentinfo">
	<div id="footer-inner-wrap">
		<div id="footer-menu" style="text-align: center;width: 100%;">
			<div class="col-md-12">
				<div class="col-md-9 left">
					<h3 class="footer-text"><strong><span style="color:#cdcdcd;">ADDRESS</span></strong> 500 terry Francois StreeSan Francisco, CA 94158 | <strong><span style="color:#cdcdcd;">TEL</span></strong> 123-456-7890</h3>
				</div>
				<div class="col-md-1 left">
					<a href="#" class="facebook-icon"><i class="fa fa-facebook font-large" aria-hidden="true"></i></a>
				</div>
				<div class="col-md-1 left">
					<a href="" class="twitter-icon"><i class="fa fa-twitter font-large" aria-hidden="true"></i></a>
				</div>
				<div class="col-md-1 left">
					<a href="" class="google-icon"><i class="fa fa-google-plus font-large" aria-hidden="true"></i></a>
				</div>
			</div>
			<br style="clear:both;" />
			<hr style="border-top: 1px solid #909090;" />
			<h3 class="footer-text">All Rights Reserved. Design and Developed by <span style="color:#00b6dd;">BroProWeb</span></h3>
		</div>

		<div class="clearfix"></div>
	</div>
</footer>
<?php get_footer(); ?>
<?php //get_sidebar(); ?>