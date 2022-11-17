<?php
get_header();

if ( have_posts() ) :
    while ( have_posts() ) : the_post();
        the_title( '<h1>', '</h1>' );
        the_content();
    endwhile;
else :
    get_template_part( 'template-parts/page', 'error' );
endif;

get_footer();
?>