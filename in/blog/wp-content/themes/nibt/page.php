<?php
/**
* The template for displaying all pages
*
* This is the template that displays all pages by default.
* Please note that this is the WordPress construct of pages
* and that other 'pages' on your WordPress site may use a
* different template.
*
* @link https://codex.wordpress.org/Template_Hierarchy
*
* @package NIBT
*/
get_header();
?>
<div id="content" class="site-content">
	<div class="page-header">
		<div class="container text-center">
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		</div>
	</div>
	<div id="content-inside" class="container <?php echo esc_attr( $layout ); ?>">
		<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">
				<?php while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'template-parts/content', 'page' ); ?>
					<?php
						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;
					?>
				<?php endwhile; // End of the loop. ?>
			</main><!-- #main -->
		</div><!-- #primary -->
	</div><!--#content-inside -->
	
	<div class="container">
		<div class="row">
			<div class="passed-webinar">
				<div class="text-center">
					<h1>Past Webinars</h1>
				</div>
			</div>
		</div>
		<br>
		<div class="row">
			
			<?php

	    		$args = array (
				    'cat' => 105,
				    'posts_per_page' => -1,
				    'orderby' => 'date'
				);

				$cat_posts = new WP_query($args);

				if ($cat_posts->have_posts()) : while ($cat_posts->have_posts()) : $cat_posts->the_post();
				       get_template_part( 'template-parts/webinar-content', get_post_format() );
				endwhile; endif;

			?>

		</div>
	</div>
</div><!-- #content -->
<?php get_footer(); ?>