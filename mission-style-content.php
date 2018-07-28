<?php
/**
* Template Name: Mission Style Content
**/
get_header();
?>
    <div class="container">
        <div class="row">         
            <div class="col-md-12 col-sm-12 col-xs-12 blog-article">
                <?php while ( have_posts() ) : the_post(); ?>
                        <?php the_content();
                        wp_link_pages( array(
                               'before' => '<div class="page-links">' . esc_html__( 'Page:', 'college-education' ),
                               'after'  => '</div>',
                            ) );
                        ?>
                <?php endwhile;  ?> 
            </div>            
        </div>
    </div>
<?php get_footer(); ?>