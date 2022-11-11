<?php
/**
 * sidebar small post
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package NIBT
 */

?>

<div class="sidebar-small-article">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="row">
			<div class="col-md-4">
				<?php if (has_post_thumbnail() ) {   // check for feature image   ?>
					<div class="article-image">	
						<?php the_post_thumbnail(); ?> 
					</div>
				<?php } ?>
			</div>
			<div class="col-md-8">
				<div class="article-header text-left">
					<?php the_title( sprintf( '<h3 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' ); ?>
				</div>
			</div>
		</div>
	</article>
</div>
