<html>
    <head>
        <meta charset="UTF-8">
        <title>Primeira Página</title>
        <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url')?>">
        <?php wp_head(); ?>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-3 logo">
                    <a href="<?= site_url(); ?>">
                        <img src="<?= get_template_directory_uri() ?>/assets/images/logo.png" class="img-fluid">
                    </a>
                </div>
                <div class="col-9 titulo">
                    <h1><?php bloginfo('name'); ?></h1>
                    <p><?php bloginfo('description'); ?></p>
                </div>
            </div>

            
            <div class="row">
                <div class="col-12">
                <nav class="navbar navbar-expand-md navbar-light bg-light" role="navigation">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'your-theme-slug' ); ?>">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <a class="navbar-brand" href="#">MeuTema</a>


                        <?php
                        wp_nav_menu( array(
                            'theme_location'    => 'header-menu',
                            'depth'             => 2,
                            'container'         => 'div',
                            'container_class'   => 'collapse navbar-collapse',
                            'container_id'      => 'bs-example-navbar-collapse-1',
                            'menu_class'        => 'nav navbar-nav',
                            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                            'walker'            => new WP_Bootstrap_Navwalker(),
                        ) );
                        ?>
    </div>
</nav>
                </div>
            </div>

            