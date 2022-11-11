<?php
/**
 * small post video content
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package NIBT
 */

?>

<div class="sidebar-small-article">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="row">
			<div class="col-md-12">
				<div class="small-video">
					<?php the_content(); ?>
				</div>
			</div>
		</div>
	</article>
</div>
