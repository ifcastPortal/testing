<?php
/**
 *	 Template Name: Full Width
 *
 */

get_header(); ?>

	<div id="content" class="site-content">

		<div class="page-header">
			<div class="container text-center">
				<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
			</div>
		</div>

        <div id="content-inside" class="container no-sidebar">
			<div id="primary" class="row content-area">
					<main id="main" class="site-main" role="main">

						<?php while ( have_posts() ) : the_post(); ?>

							<?php get_template_part( 'template-parts/register', 'page' ); ?>

							<?php
								if ( comments_open() || get_comments_number() ) :
									comments_template();
								endif;
							?>

						<?php endwhile; // End of the loop. ?>

					</main><!-- #main -->
			</div><!-- #primary -->
		</div><!--#content-inside -->
	</div><!-- #content -->

<?php get_footer(); ?>
