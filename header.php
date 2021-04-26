<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo get_bloginfo('name') ?></title>

    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory') ?>/bootstrap/bootstrap.min.css">
<!--    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">-->

    <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory') ?>/style.css">
    <?php wp_head() ?>
</head>
<body>

<div class="container">
    <div class="row sticky-top">
        <div class="col-12">
            <nav class="navbar navbar-expand-md navbar-light row">
                <div class="col-4">
                    <a class="navbar-brand"
                       href="<?php echo get_permalink( get_page_by_title( 'home' ) ) ?>">
                        <b>justyna</b>kuta
                    </a>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainNavbarContent" aria-controls="mainNavbarContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <nav class="col-md-8 wpjk_main-menu">
                    <?php
                    wp_nav_menu([
                            'theme_location'    => 'primary_menu',
                            'depth'             => 1,
                            'container'         => 'div',
                            'container_class'   => 'collapse navbar-collapse',
                            'container_id'      => 'mainNavbarContent',
                            'menu_class'        => 'navbar-nav w-100 justify-content-end',
                            'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                            'walker'            => new wp_bootstrap_navwalker()
                        ]);
                    ?>
                </nav>
            </nav>
        </div>
    </div>
