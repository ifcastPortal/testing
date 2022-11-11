<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package NIBT
 */

get_header(); ?>
	<div class="container-fluid pgttl" >
		<div class="container">
			<div class="col-md-6"> <h1>
				<?php wp_title(''); ?>
			</h1></div>
		</div>
	</div>
	<div class="container-fluid bg-alt" style="padding-bottom:170px;">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<?php get_sidebar(); ?>
				</div>
				<div class="col-md-12">
					<?php
						if ( have_posts() ) : ?>

							<header class="page-header">
								<h1 class="page-title" style="font-size:28px;color:#212121;text-align:left;font-style:italic">
									<?php printf( esc_html__( 'Search Results: %s', 'nibt' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
							</header>

							<?php
							/* Start the Loop */
							while ( have_posts() ) : the_post();

								get_template_part( 'template-parts/content', 'search' );

							endwhile;

							the_posts_navigation();

						else :

							get_template_part( 'template-parts/content', 'none' );

						endif; 
					?>
				</div>
			</div>	
		</div>
	</div>
	
<?php
get_footer();
