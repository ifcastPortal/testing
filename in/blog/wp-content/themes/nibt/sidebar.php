<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package NIBT

 */


if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>


<aside id="secondary" class="widget-area" role="complementary">
	<!-- <?php //dynamic_sidebar( 'sidebar-1' ); ?> -->


		<!--<div class="sidebar">
			<div class="nws-wid">
				<?php
						
                $args = array (
							
                    'cat' => 1,
                    'posts_per_page' => 2, //showposts is deprecated
                    'orderby' => 'date' //You can specify more filters to get the data
                );



							$cat_posts = new WP_query($args);

							if ($cat_posts->have_posts()) : while ($cat_posts->have_posts()) : $cat_posts->the_post();
								get_template_part( 'template-parts/sidebar-small-post', get_post_format() );
							endwhile; endif;
				?>
			</div>
		</div>-->


		<!--<div class="sidebar">
			<div class="nws-wid">
				<h2>Courses</h2>

				<ul class="coursesList">
					<li><a href="http://courses.nibt.education/bim-architects/" target="_blank">BIM For Architects</a></li>
					<li><a href="http://courses.nibt.education/bim-contractors/" target="_blank">BIM For Contractor’s</a></li>
					<li><a href="http://courses.nibt.education/bim-owners/" target="_blank">BIM For Owner’s</a></li>
					<li><a href="http://courses.nibt.education/bim-mep/" target="_blank">BIM For MEP</a></li>
					<li><a href="http://courses.nibt.education/bim-mepfp/" target="_blank">BIM in MEP & FP Modeling Services <span>Advanced</span></a></li>
					<li><a href="http://courses.nibt.education/bim-electrical-modeling/" target="_blank">BIM in Electrical Modeling Services <span>Advanced</span></a></li>
					<li><a href="http://courses.nibt.education/bim-fire-protection/" target="_blank">BIM in Fire Protection Modeling Services <span>Advanced</span></a></li>
					<li><a href="http://courses.nibt.education/bim-hvac/" target="_blank">BIM in HVAC Modeling Services <span>Advanced</span></a></li>
					<li><a href="http://courses.nibt.education/bim-plumbing/" target="_blank">BIM in Plumbing Modeling Services <span>Advanced</span></a></li>
				</ul>

				

				<?php /*?><?php

					$args = array (

					'cat' => 31,

					'posts_per_page' => 2, 

					'orderby' => 'date' 

					);

					$cat_posts = new WP_query($args);

					if ($cat_posts->have_posts()) : while ($cat_posts->have_posts()) : $cat_posts->the_post();

					get_template_part( 'template-parts/small-video', get_post_format() );

					endwhile; endif;

				?><?php */?>

			</div>

		</div>-->

	<!--<div class="sidebar">
		<div class="nws-wid enquiryForm">
			<h2>Know more about Courses</h2>
			<?php echo do_shortcode('[contact-form-7 id="3889" title="Sidebar Contact"]'); ?>
		</div>
	</div>-->

		<div class="sidebar">

			<?php

		      if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('custom-sidebar') ) :
            

		      endif; ?>

		</div>
    

</aside><!-- #secondary -->

