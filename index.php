<?php get_header(); ?>
    <div class="row">
        <div class="col-12">
            <div class="jumbotron">
                <h3 class="display-4">Seja Bem Vindo</h3>
            </div>
        </div>
    </div>
    
    <div class="row">
        <div class="col-12">
            <h2>Textos de entrada</h2>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Alias iusto adipisci ipsam reiciendis,
            quibusdam, voluptas deserunt molestias tempore facilis repellendus deleniti reprehenderit laboriosam?
            Excepturi aperiam cum quos pariatur itaque iusto.</p>
        </div>
    </div>

    <div class="row">
        <?php 
            if ( have_posts() ) {

                while ( have_posts() ){
                    the_post();
        ?>           
        <div class="col-4"> 
                <h3><?php the_title(); ?></h3>
                <div class=""><?php the_post_thumbnail(); ?></div>
                <p><?php the_excerpt(); ?></p>
                <a href="<?php the_permalink(); ?>">Leia mais</a> 
        </div>        
        <?php 
                } //fim while
            } //fim if loop
        ?>
    </div>

<?php get_footer(); ?>