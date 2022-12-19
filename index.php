<?php
get_header();
?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php
	if ( is_singular() ) :
        the_title( '<h1 class="entry-title">', '</h1>' );
    else :
        the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
    endif;
    ?>
        <div><?php
    echo get_the_date( 'd / M / Y' );  
    ?></div>  
<?php 
the_post_thumbnail( 'thumbnail', array( 'class' => 'alignleft' ) );
if ( is_home() || is_archive() ) {
	the_excerpt();
} else {
	the_content();
}
?>
<?php wp_link_pages(); ?>

<?php edit_post_link(); ?>

<?php endwhile; ?>
<div>
<?php
if ( get_next_posts_link() ) {
next_posts_link();
}
?>
</div>
<div>
<?php
if ( get_previous_posts_link() ) {
previous_posts_link();
}
?>
</div>
<?php else: ?>
<p>No posts found. :(</p>
<?php endif; ?>

<?php
get_footer();
?>