<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package NIBT
 */

get_header(); ?>
<div class="container-fluid pgttl .nibt-dashboard-banner">

	<div class="container">

		<div class="col-md-12 text-center"> 
			<h1><?php wp_title(''); ?></h1>
		</div>

	</div>

</div>
<div class="container-fluid bg-alt">
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<?php get_sidebar(); ?>
			</div>
			<div class="col-md-9">
				<div class="row">
					<?php if ( have_posts() ) : ?>

					<?php

						/* Start the Loop */
						while ( have_posts() ) : the_post();
							get_template_part( 'template-parts/content', get_post_format() );

						endwhile;

						the_posts_navigation();

					endif; ?>
				</div>
			</div>
		</div>
	</div>
</div>

<?php
get_footer();
