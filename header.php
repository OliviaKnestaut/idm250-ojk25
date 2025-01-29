<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php
        wp_title('|', true, 'right');
        bloginfo('name');
        ?>
    </title>
    <link rel="icon" href="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/icons/OK_Ladybug.png">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> >
    <?php wp_body_open(); ?>

    <?php get_template_part('components/navigation'); ?>

    <header>

        <nav class="navbar navbar-expand-sm navbar-light">
            <a class="navbar-brand" href="..">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/icons/oknestaut_logo.svg" class="nav-logo d-inline-block align-top" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="mr-auto"></div>
                <ul class="navbar-nav my-2 my-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-display="static" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">PORTFOLIO<span class="sr-only">(current)</span></a>
                        <div class="dropdown-menu dropdown-menu-lg" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="">CASE STUDIES</a>
                            <a class="dropdown-item" href="">PHOTOGRAPHY</a>
                            <a class="dropdown-item" href="">DESIGN &amp; MEDIA</a>
                        </div>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="">ABOUT</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="">RESUME</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="container-fluid justify-content-center">
            <picture>
                    <source
                    media="(min-width: 576px)"
                    srcset="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/icons/upper-absract-full-row.svg">

                    <img class="img-fluid abstract-img"
                    src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/icons/upper-abstract-2-rows.svg"
                    alt="random colorful absract shapes">
            </picture>
        </div>

    </header>