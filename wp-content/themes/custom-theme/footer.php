<!-- jQuery -->
<script src="<?php bloginfo('template_directory'); ?>/assets/bootstrap/js/jquery.min.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="<?php bloginfo('template_directory'); ?>/assets/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/masonry.pkgd.min.js"></script>

<script src="<?php bloginfo('template_directory'); ?>/assets/js/plugins.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/b-script.js"></script>
<script type="text/javascript">
jQuery(document).ready(function ($) {
        $('#background-ie').anystretch("<?php bloginfo('template_directory'); ?>/assets/images/home/slides/1.png", {speed: 180, elPosition: 'fixed'});
                          $('#mast').anystretch("<?php bloginfo('template_directory'); ?>/assets/images/home/slides/2.png", {speed: 180, elPosition: 'fixed'});
                          $('#mast_cat').anystretch("<?php bloginfo('template_directory'); ?>/assets/images/home/slides/1.png", {speed: 180, elPosition: 'fixed'});
        $('#mast_error').anystretch("<?php bloginfo('template_directory'); ?>/assets/images/home/slides/1.png", {speed: 180, elPosition: 'fixed'});
                          $('#location-ie').anystretch("<?php bloginfo('template_directory'); ?>/assets/images/home/slides/1.png", {speed: 180, elPosition: 'relative', positionY: 'bottom', positionX: 'left'});
});
</script>
      <script type="text/javascript">
        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-36449100-1']);
        _gaq.push(['_trackPageview']);
      
        (function() {
          var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
          ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
          var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
        })();     
      </script>
<?php wp_footer(); ?>
</body>
</html>