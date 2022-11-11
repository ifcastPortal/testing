

<div class="single-post">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    
    	<div class="single-post-cont">
            <header class="single-post-header">
                <?php the_title( sprintf( '<h1 class="single-post-title">', esc_url( get_permalink() ) ), '</h1>' ); ?>
            </header>
            <span class="post-date updated pull-left">Date : <?php the_date(); ?></span>
            <span class="entry-date pull-left"><?php// echo "Date : " . get_the_date(); ?></span>
	    
		<span class="vcard author post-author pull-right"><span class="fn">Post Author :<?php the_author(); ?></span></span>
            <span class="entry-date pull-right"><?php// echo "Post Author : " . get_the_author(); ?></span>

            <br /><br />
            
                                    
            <div class="single-post-excerpt">
                <?php the_content(); ?>
            </div>

            <hr class="hr-line" />
            
            <div class="tags-cloud">
                <h3>Tags for this article</h3>
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
            
            
            
            <div class="clearfix"></div>
        </div>
        
	</article>
</div>
