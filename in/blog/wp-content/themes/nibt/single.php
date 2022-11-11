<?php get_header(); ?>

	
	
<div class="container-fluid" style="background-color:#f1f1f1;">
	<div class="container" style="padding-bottom:200px;padding-top:120px;">
		<div class="row">
            
			<div class="col-md-9">
				<div id="primary" class="content-area" style="background:#fff;padding:20px;border-radius:7px;box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23);">
					<main id="main" class="site-main" role="main">

					<?php
					while ( have_posts() ) : the_post();
						
							get_template_part( 'template-parts/single-chub-post', get_post_format() );

						the_post_navigation();

						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;

					endwhile; // End of the loop.
					?>

					</main><!-- #main -->
				</div>			
			</div>
			<div class="col-md-3">
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>
</div>
<?php
get_footer();
