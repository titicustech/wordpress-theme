<?php
get_header();
?>
<div class="container">
<?php
if ( have_posts() ) :
    while ( have_posts() ) : the_post();
        the_title( '<h1>', '</h1>' );
        // check if the post or page has a Featured Image assigned to it.
        ?>
        <div class="responsive-image">
        <?php
if ( has_post_thumbnail() ) {
    the_post_thumbnail();
};
?>
</div>
<?php

        the_content();
        ?>
      <div><?php
    echo get_the_date( 'd / M / Y' );  
    ?></div>  
    <?php
         // Previous/next post navigation.
         the_post_navigation( array(
            'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next', 'twentyfifteen' ) . '</span> ' .
                '<span class="screen-reader-text">' . __( 'Next post:', 'twentyfifteen' ) . '</span> ' .
                '<span class="post-title">%title</span>',
            'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous', 'twentyfifteen' ) . '</span> ' .
                '<span class="screen-reader-text">' . __( 'Previous post:', 'twentyfifteen' ) . '</span> ' .
                '<span class="post-title">%title</span>',
        ) );
    endwhile;
else:
    _e( 'Sorry, no pages matched your criteria.', 'textdomain' );
endif;
?>
</div>
<?php
get_footer();
?>