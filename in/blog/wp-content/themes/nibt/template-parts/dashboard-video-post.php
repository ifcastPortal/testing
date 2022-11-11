<?php
/**
 * dashbaord video post
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package NIBT
 */

?>
<div class="small-article">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="row">
			<div class="col-md-12">
				<div class="article-header text-left">
					<?php the_title( sprintf( '<h3 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' ); ?>
				</div>
				<div class="article-image">	
					<?php the_content(); ?>	
				</div>
			</div>
		</div>
	</article>
</div>