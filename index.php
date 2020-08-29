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
                    <?php masterslider(1); ?>
                </div>
            </div>

    <div class="row">
        <div class="col-12">
            <h2>Conheça mais sobre nós</h2>
            <p>Sou um estudande do terceiro módulo de informática para internet e dentro da minha grade curricular possuo a matéria de Aplicativos Para Internet, dentro do conteudo dessa matéria aprendemos a criar temas para o Wordpress, esse site é um exemplo.</p>
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