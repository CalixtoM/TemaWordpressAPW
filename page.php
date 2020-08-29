<?php get_header(); ?>
    <?php 
    if ( have_posts() ) {
        while ( have_posts() ) {
            the_post();
?>
    <div class="row"> 
        <div class="col-12">
            <div class="jumbotron">
                <h1 class="display-4"><?php the_title(); ?></h1>
                
            </div>
        </div> 
    </div>
            <?php the_content(); ?> 
<?php 
        } // end while
    } // end if
    ?>
<?php get_footer(); ?>