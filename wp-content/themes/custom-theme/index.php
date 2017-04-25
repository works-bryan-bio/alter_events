<?php get_header(); ?>
<?php $slider_images = $wpdb->get_results("SELECT  guid FROM wp_posts WHERE post_parent =43"); ?>
<div id="background">
	<?php $counter = 0; ?>
	<?php foreach($slider_images as $img_files){ ?>
		<?php $counter += 1; if($counter == 1){ ?>
			<div class="bg-photo" style="display: block;background-image: url('<?php echo $img_files->guid; ?>')"></div>
		<?php } else{ ?>
			<div class="bg-photo" style="display: none;background-image: url('<?php echo $img_files->guid; ?>')"></div>
		<?php } ?>
	<?php } ?>
</div>
<div id="main-content">
	<header id="header" role="banner" style="display: block;">
		<h1><a href="" title="Alters Events" rel="home"><img style="margin: 0 auto 0px !important;" src="<?php bloginfo('template_directory'); ?>/assets/images/logo-alter.png" class="logo" alt="Alters Events"></a></h1>
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
			<h3 class="footer-text footer-small">All Rights Reserved. Designed by: <span><a href="#" style="color:#00b6dd;">BroProWeb</a></span></h3>
		</div>

		<div class="clearfix"></div>
	</div>
</footer>
<?php get_footer(); ?>
<?php //get_sidebar(); ?>