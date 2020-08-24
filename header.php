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
                        <img src="<?= get_template_directory_uri() ?>/assets/images/logo.png" class="imagem">
                    </a>
                </div>
                <div class="col-9 titulo">
                    <h1><?php bloginfo('name'); ?></h1>
                    <p><?php bloginfo('description'); ?></p>
                </div>
            </div> 