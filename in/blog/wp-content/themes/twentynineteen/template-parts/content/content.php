<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

?>


<div class="col-lg-6 " >
<article class="ifc-blog-card mb-3" id="post-<?php the_ID(); ?>" <?php post_class(); ?> >


<?php twentynineteen_post_thumbnail(); ?>

	<header class="ifc-entry-header">
		<?php
		if ( is_sticky() && is_home() && ! is_paged() ) {
			printf( '<span class="sticky-post">%s</span>', _x( 'Featured', 'post', 'twentynineteen' ) );
		}
		if ( is_singular() ) :
			the_title( '<h1 class="ifc-entry-title">', '</h1>' );
		else :
			the_title( sprintf( '<h2 class="ifc-entry-title"><a  href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
		endif;
		?>
	</header><!-- .entry-header -->
	

	<footer class="ifc-entry-footer">
		<?php twentynineteen_entry_footer(); ?>
	</footer>
</article><!-- #post-${ID} -->
</div>