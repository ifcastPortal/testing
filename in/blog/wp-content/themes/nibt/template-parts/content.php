<?php

/**

 * Template part for displaying posts

 *

 * @link https://codex.wordpress.org/Template_Hierarchy

 *

 * @package NIBT

 */



?>
<div class="wow animated fadeInUpcol-12 col-md-6 col-lg-4 px-15">
    <?php 
		$title = get_the_title();
		$link = get_permalink();

		?>
    <div class="course-content">
    <?php if (has_post_thumbnail() ) { ?>
        <figure class="course-thumbnail">
           <a href="<?php echo $link; ?>">
            <?php the_post_thumbnail(); ?> </a>
        </figure><!-- .course-thumbnail -->
    <?php } ?>
        <div class="course-content-wrap">
            <header class="entry-header">
                <h2 class="entry-title tooltip1"><a href="<?php echo $link; ?>"><?php echo mb_strimwidth($title, 0, 50, '..');?></a><span class="tooltiptext"><?php echo $title; ?></span></h2>
                

                <p><?php short_excerpt( get_the_excerpt(), get_the_ID() ); ?><a style="color:#013299;" href="<?php the_permalink(); ?>">read more</a></p>

            </header><!-- .entry-header -->

        </div><!-- .course-content-wrap -->
    </div><!-- .course-content -->
</div><!-- .col -->




