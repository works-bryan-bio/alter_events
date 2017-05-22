<div id="contact-window" class="" style="display: none;padding-top: 30px;padding-bottom: 30px;padding-left: 50px;padding-right: 50px;text-align: center;">
  <h1><a href="" title="Alters Events" rel="home"><img style="margin: 0 auto 0px !important;" src="<?php bloginfo('template_directory'); ?>/assets/images/logo-alter.png" class="logo" alt="Sweet Basil"></a></h1>
  <span class="" style="font: 21px/28px 'brandon_grotesque_regularRg', Arial, 'sans-serif';color: #ececec;">845.537.7291</span>
</div>

<footer id="footer-home" role="contentinfo">
  <div id="footer-inner-wrap">
    <div id="footer-menu" style="text-align: center;width: 100%;">
      <div class="col-md-12">
        <div class="f-md-8 text-left left no-space">
          <h3 class="footer-text left"><strong><span style="color:#cdcdcd;"><a href="mailto:altersevents@gmail.com">altersevents@gmail.com</a></span></strong></h3>
          <h3 class="footer-text left"><span class="footer-divider left">&nbsp;|&nbsp;</span></h3>
          <h3 class="footer-text left"><strong><span style="color:#cdcdcd;">TEL</span></strong> 845-537-7291</h3>
        </div>
        <div class="f-md-3 left no-space footer-social">
          <div class="f-md-4 left">
            <a href="#" class="facebook-icon"><i class="fa fa-facebook font-large" aria-hidden="true"></i></a>
          </div>
          <div class="f-md-4 left">
            <a href="" class="twitter-icon"><i class="fa fa-twitter font-large" aria-hidden="true"></i></a>
          </div>
          <div class="f-md-4 left">
            <a href="" class="google-icon"><i class="fa fa-google-plus font-large" aria-hidden="true"></i></a>
          </div>
        </div>
      </div>
      <br style="clear:both;" />
      <hr style="border-top: 1px solid #909090;" />
      <h3 class="footer-text footer-small">All Rights Reserved. Designed by: <span><a href="#" style="color:#00b6dd;">BroProWeb</a></span></h3>
    </div>

    <div class="clearfix"></div>
  </div>
</footer>
    </section><!-- #main -->
    <div id="backTop" style="display: block;"></div>
</div>

<!-- jQuery -->
<script src="<?php bloginfo('template_directory'); ?>/assets/bootstrap/js/jquery.min.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="<?php bloginfo('template_directory'); ?>/assets/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/masonry.pkgd.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/imagesloaded.pkgd.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/plugins.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/b-script.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/pushy.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/jquery.colorbox-min.js"></script>
<script type="text/javascript">
$(document).ready(function(){  
  $(".gallery-zoom-image").colorbox({maxWidth:'95%', maxHeight:'95%'});
  $('.grid').masonry({
    itemSelector: '.grid-item',
    columnWidth: 1,
    percentPosition: true
  });
  $(".gallery-block").hover(function() {
    $(this).find('.overlay-gallery').removeClass("hidden");
  },function(){
    $(this).find('.overlay-gallery').addClass("hidden");
  });

});
/* <![CDATA[ */
var $s = {"cp":"1","c":"$","p":"2","t":",","d":".","g":"3","nocache":""};var $cv = {"field":"Your %s is required.","email":"The e-mail address you provided does not appear to be a valid address.","minlen":"The %s you entered is too short. It must be at least %d characters long.","pwdmm":"The passwords you entered do not match. They must match in order to confirm you are correctly entering the password you want to use.","chkbox":"%s must be checked before you can proceed."};var $ct = {"items":"Items","total":"Total"};/* ]]> */
</script>
<?php wp_footer(); ?>
</body>
</html>