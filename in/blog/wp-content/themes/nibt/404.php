<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package NIBT
 */

get_header(); ?>
	<div class="container-fluid pgttl">
		<div class="container">
	    	<div class="col-md-12">
	    		<h4><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'nibt' ); ?></h4>
	    	</div>
	    </div>
	</div>

	<div id="primary" class="container content-area">
		<section class="error-404 not-found">
			 	<div class="row">
			 		<div class="col-md-9">
				 		<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'nibt' ); ?></h1>
			 		</div>
			 		<div class="col-md-3">
			 			<div class="page-content">
							<?php get_sidebar(); ?>							
						</div>
			 		</div>
			 	</div>
			</section>
	</div>
<?php
get_footer();
