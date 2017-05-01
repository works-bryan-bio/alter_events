<?php get_header('inner'); ?>
<section id="mast" style="position: fixed; background: none;">
	<div class="any stretch" style="left: 0px; top: 0px; position: absolute; overflow: hidden; z-index: -999998; margin: 0px; padding: 0px; height: 100%; width: 100%;">
		<?php 
			if( has_post_thumbnail( $post->ID ) ){
				$image_bg = the_post_thumbnail();
			}else{
				$image_bg = get_template_directory_uri() . "/assets/images/contact/contact-top.jpg";
			}					
		?>
		<img src="<?php echo $image_bg; ?>" style="position: absolute; margin: 0px; padding: 0px; border: none; z-index: -999999; width: 100%; height: 1031.03px; left: 0px; top: -430.516px;">
	</div>
</section>
<section id="content" role="main">
<h2 class="page-title"><?php the_title(); ?></h2>
			
<article id="post-691" class="post-691 page type-page status-publish hentry">
<div class="row margin-content">
	<div class="col-md-12">
		<div class="col-md-12" style="padding-top: 50px;padding-left: 22%;">
			<div class="col-md-6 center">
				<h2 class="contact-text-1" style="text-align: center;">Get in touch</h2>
				<?php 
					while ( have_posts() ) : the_post();

						get_template_part( 'template-parts/page/content', 'page' );
						the_content();
						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;

					endwhile; // End of the loop. 
				?>
				<!-- <div class="col-md-12">
					<input class="max-width input-contact" type="text" name="" placeholder="name">
				</div>
				<br/><br/><br/>
				<div class="col-md-12">
					<input class="max-width input-contact" type="text" name="" placeholder="email">
				</div>
				<br/><br/><br/>
				<div class="col-md-12">
					<textarea class="max-width input-contact" placeholder="message" style="height:170px;"></textarea>
				</div>
				<div class="col-md-12" style="margin-top:10px;">
					 <div class="box-black right" style="width:150px;"><a href="" style="font-size:16px;color:white;">Send</a></div>
				</div> -->
			</div>	
			<br class="clear" /><br/><br/><br/>
			<div class="col-md-6 center">
				<div class="col-md-12">
					<h3 class="label-contact" style="font-weight: bold;">ALTERS EVENT</h3>
					<h3 class="label-contact" style="font-weight: lighter;">Address: 500 terry Francois Street</h3>
					<h3 class="label-contact" style="font-weight: lighter;">San Francisco, CA 941s58</h3>
					<h3 class="label-contact" style="font-weight: lighter;">Tel: 123-456-7890</h3>
					<h3 class="label-contact" style="font-weight: lighter;">Email: nfo@altersevent@gmail.com</h3>
					<br/>
					<div class="col-md-12 margin-left-center" style="padding-left: 0px !important;">
						<div class="col-md-3 left" style="padding-left: 0px !important;">
		                  <a href="#" class="facebook-icon black"><i class="fa fa-facebook font-large" aria-hidden="true"></i></a>
		                </div>
		                <div class="col-md-3 left" style="padding-left: 0px !important;margin-left:20px;">
		                  <a href="" class="twitter-icon black"><i class="fa fa-twitter font-large" aria-hidden="true"></i></a>
		                </div>
		                <div class="col-md-3 left" style="padding-left: 0px !important;margin-left:20px;">
		                  <a href="" class="google-icon black"><i class="fa fa-google-plus font-large" aria-hidden="true"></i></a>
		                </div>

		            </div>
		        </div>
			</div>
		</div>
	</div>



	






</div>
</article><!-- #post-## -->
	
<section id="location" style="background: url('<?php bloginfo('template_directory'); ?>/assets/images/contact/contact-bottom.jpg') no-repeat center center;background-size:cover; background-attachment: fixed; bottom: 0; left: 0; "></section>
<?php get_footer('inner'); ?>