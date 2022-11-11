<?php

get_header(); ?>

<div class="container-fluid pgttl .nibt-dashboard-banner">

	<div class="container">

		<div class="col-md-12 text-center"> <h1>
			Smart City
		</h1></div>

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
					<?php
					
					// Get current page and append to custom query parameters array
					$custom_query_args['paged'] = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;

					$args = array (
					'cat' => 385,
					'orderby' => 'date',
					'posts_per_page' => 9,
					'paged' => $paged	
					);

					$cat_posts = new WP_query($args);

					// Pagination fix
					$temp_query = $wp_query;
					$wp_query   = NULL;
					$wp_query   = $cat_posts;
					
					if ($cat_posts->have_posts()) :  $i = 1;  while ($cat_posts->have_posts()) : $cat_posts->the_post();
						get_template_part( 'template-parts/content', get_post_format() );
					if ( $i % 3 === 0 ) {
					echo '</div><div class="row">';
				}
				
				$i++;
				endwhile; endif; wp_reset_query();
				?>
			</div>
			<div class="row">
				<div class="col-md-12">
					<?php
						// Reset postdata
						wp_reset_postdata();

						// Custom query loop pagination
						next_posts_link( 'Older Posts', $cat_posts->max_num_pages );
						previous_posts_link( 'Newer Posts' );

						// Reset main query object
						$wp_query = NULL;
						$wp_query = $temp_query;
					?>
				</div>
			</div>
		</div>
		</div>
	</div>
	
</div>

<?php get_footer(); ?>