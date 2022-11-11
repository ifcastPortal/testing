<!-- START SUBSCRIBE SECTION -->
        <section class="container subscribe-section">
           
        </section>
        <!-- END SUBSCRIBE SECTION -->
        
        <!-- START FOOTER SECTION -->
        <footer class="site-footer">
          
        </footer><!-- .site-footer -->
        <!-- END FOOTER SECTION -->
        
        
        <!-- START FOOTER SECTION -->
        <script>
    
	    $(window).scroll(function() {
	    var height = $(window).scrollTop();
	    if (height > 100) {
	        $('#back2Top').fadeIn();
	    } else {
	        $('#back2Top').fadeOut();
	    }
	});
	$(document).ready(function() {
	    $("#back2Top").click(function(event) {
	        event.preventDefault();
	        $("html, body").animate({ scrollTop: 0 }, "slow");
	        return false;
	    });
	
	});
	    
  
	 /*Scroll to top when arrow up clicked END*/
	</script>
        <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>-->
        <script type='text/javascript' src='<?php bloginfo('stylesheet_directory'); ?>/assets/js/jquery.js'></script>
        <script type='text/javascript' src='<?php bloginfo('stylesheet_directory'); ?>/assets/js/swiper.min.js'></script>
        <script type='text/javascript' src='<?php bloginfo('stylesheet_directory'); ?>/assets/js/masonry.pkgd.min.js'></script>
        <script type='text/javascript' src='<?php bloginfo('stylesheet_directory'); ?>/assets/js/jquery.collapsible.min.js'></script>
        <script type='text/javascript' src='<?php bloginfo('stylesheet_directory'); ?>/assets/js/custom.js'></script>
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<?php wp_footer(); ?>
    </body>
    
</html>
