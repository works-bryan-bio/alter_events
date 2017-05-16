<?php get_header('inner'); ?>
<section id="mast" style="position: fixed; background: none;">
	<div class="any stretch" style="left: 0px; top: 0px; position: absolute; overflow: hidden; z-index: -999998; margin: 0px; padding: 0px; height: 100%; width: 100%;">
		<?php 
			if( has_post_thumbnail( $post->ID ) ){
				$image    = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );				
				$image_bg = $image[0];
			}else{
				$image_bg = get_template_directory_uri() . "/assets/images/contact/contact-top.jpg";
			}					
		?>
		<img src="<?php echo $image_bg; ?>" style="position: absolute; margin: 0px; padding: 0px; border: none; z-index: -999999; width: 100%; height: 1031.03px; left: 0px; top: -125.516px;">
	</div>
</section>
<section id="content" role="main">
<h2 class="page-title"><?php the_title(); ?></h2>
			
<article id="post-691" class="post-691 page type-page status-publish hentry">
<div class="row">
	<div class="col-md-12 center content">
	</div>
	<div class="col-md-12">
		<div class="col-md-5 left" style="">
			<div class="col-md-12" style="padding-left: 35%;">
				<h2 class="contact-text-1 uppercase center" style="text-align: center;margin-bottom: 40px !important;">Alters Event</h2>
				<br/>
				<h3 class="label-contact center" style="font-weight: lighter;">Address: 3 strelisk Ct #401a</h3>
				<h3 class="label-contact center" style="font-weight: lighter;">Monroe NY 10950</h3>
				<h3 class="label-contact center" style="font-weight: lighter;">Tel: <a href="tel:+8455377291">845-537-7291</a></h3>
				<h3 class="label-contact center" style="font-weight: lighter;">Email: <a href="mailto:Altersevents@gmail.com">Altersevents@gmail.com</a></h3>
				<div class="col-md-12">
					<div class="social-icon-contact">
						<div class="col-md-1 left" style="padding-left: 0px !important;">
		                  <a href="#" class="facebook-icon black"><i class="fa fa-facebook font-large" aria-hidden="true"></i></a>
		                </div>
		                <div class="col-md-1 left" style="padding-left: 0px !important;margin-left:20px;">
		                  <a href="" class="twitter-icon black"><i class="fa fa-twitter font-large" aria-hidden="true"></i></a>
		                </div>
		                <div class="col-md-1 left" style="padding-left: 0px !important;margin-left:20px;">
		                  <a href="" class="google-icon black"><i class="fa fa-google-plus font-large" aria-hidden="true"></i></a>
		                </div>
	                </div>
	            </div>
	        </div>
		</div>

		<div class="col-md-6 left" style="">
				<h2 class="contact-text-1 uppercase center" style="text-align: center;">Get in touch</h2>
				<br/><br/>
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


			<!--
			<div class="col-md-12">
				<input class="max-width input-contact" type="text" name="" placeholder="name">
			</div>

			<div class="col-md-12">
				<input class="max-width input-contact text" type="text" name="" placeholder="email">
			</div>

			<div class="col-md-12">
				<textarea class="max-width input-contact" placeholder="message" style="height:170px;"></textarea>
			</div>
			<div class="col-md-12" style="margin-top:10px;">
				 <div class="box-black right" style="width:150px;margin-top: 5px !important;"><a href="" style="font-size:16px;color:white;">Send</a></div>
			</div>	-->
		</div>
	</div>

</div>
</article><!-- #post-## -->
	
<section id="location"></section>
<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyChZmDn0hp-VnrzRQK9IKjJeYPTDYWKIE8&sensor=false"></script>

<script type="text/javascript">

// The latitude and longitude of your business / place
var position = [41.337654, -74.174450];

function showGoogleMaps() {

    var latLng = new google.maps.LatLng(position[0], position[1]);

    var mapOptions = {
        zoom: 16, // initialize zoom level - the max value is 21
        streetViewControl: false, // hide the yellow Street View pegman
        scaleControl: true, // allow users to zoom the Google Map
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        center: latLng
    };

    map = new google.maps.Map(document.getElementById('location'),
        mapOptions);

    // Show the default red marker at the location
    marker = new google.maps.Marker({
        position: latLng,
        map: map,
        draggable: false,
        animation: google.maps.Animation.DROP
    });
}

google.maps.event.addDomListener(window, 'load', showGoogleMaps);
</script>
<?php get_footer('inner'); ?>