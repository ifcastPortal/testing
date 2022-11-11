<?php

	/*

		Template Name: Dashboard page

	*/

get_header(); ?>

<div class="hero-content webinars-cover">
    <div class="hero-content-overlay">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="hero-content-wrap subpagemini-content-wrap flex flex-column justify-content-center align-items-center">
                        <header class="entry-header">
                            <h2 class="color-blue">Job Oriented Course - BLOGS </h2>
                        </header>
                        <!-- .entry-header -->

                        <div class="entry-content">
                            <h3 class="alignment-center">Get access to a plethora of <span class="color-blue" style="font-weight:700">Digital Media</span> delivered by NIBTs finest individuals and technology.<br> Engage an online audience in <span class="color-red" style="font-weight:700">Real-Time</span> from all over the globe.</h3>
                        </div>
                        <!-- .entry-content -->

                    </div><!-- .hero-content-wrap -->
                </div><!-- .col -->
                
            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- .hero-content-hero-content-overlay -->
</div><!-- .hero-content -->

<div class="container-fluid bg-alt" style="padding-bottom:170px;background:#e8e8e8">
	<div class="container">
		<div class="row">
			<div class="col-md-12">

				<?php get_sidebar(); ?>

			</div>
			<div class="col-md-12">
				<div class="row">
					<?php
					
					// Get current page and append to custom query parameters array
					$custom_query_args['paged'] = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;

					$args = array (
					'cat' => 132,
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
			<br>
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