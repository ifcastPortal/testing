<?php
/**
 * Template part for displaying single posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package NIBT
 */

?>

<div class="single-post">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header class="single-post-header">
			<?php the_title( sprintf( '<h3 class="single-post-title">', esc_url( get_permalink() ) ), '</h3>' ); ?>
		</header>

		<?php if (has_post_thumbnail() ) {  ?>
			<div class="single-post-image">	
				<?php the_post_thumbnail('full', array('class' => 'img-responsive')); ?> 
			</div>
			<br>
		<?php } ?>
								
		<div class="single-post-excerpt">
			<?php the_content(); ?>
		</div>
		
		<div class="tags-cloud">
			<h4>Tags for this article</h4>
			<ul class="tags">
				<?php
					$posttags = get_the_tags();
					if ($posttags) {
					  foreach($posttags as $tag) {
					    echo "<li>". $tag->name . ' ' ."</li>"; 
					  }
					}
				?>	
			</ul>
		</div>
	</article>
</div>
