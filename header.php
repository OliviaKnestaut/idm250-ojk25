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
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> >
    <?php wp_body_open(); ?>

    <header>

    <nav class="navbar navbar-expand-sm navbar-light">

        <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>">
            <?php 
            if (has_custom_logo()) {
                // Retrieve the custom logo ID
                $custom_logo_id = get_theme_mod('custom_logo');
                
                // Get the logo image URL and dimensions
                $logo = wp_get_attachment_image_src($custom_logo_id, 'full');
                
                // Output the custom logo with customized attributes
                ?>
                <img src="<?php echo esc_url($logo[0]); ?>" 
                    class="nav-logo d-inline-block align-top custom-logo" 
                    alt="<?php echo esc_attr(get_bloginfo('name')); ?>" 
                    >
                <?php
            } else {
                
            }
            ?>
        </a>



        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="mr-auto"></div>
            <ul class="navbar-nav my-2 my-lg-0">
                <?php 
                $main_menu = get_theme_menu('primary-menu');
                foreach ($main_menu as $item):
                    $has_submenu = !empty($item->sub_items); 
                    $class = !empty($item->classes) ? ' ' . $item->classes : ''; 
                    $target = !empty($item->target) ? ' target="' . esc_attr($item->target) . '"' : ''; 
                ?>

                <li class="nav-item<?php echo $has_submenu ? ' dropdown' : ''; ?>">
                    <div class="arrow-flex">
                        <!-- Make parent item clickable without dropdown interference -->
                        <a class="nav-link" href="<?php echo esc_url($item->url); ?>"<?php echo $target; ?>>
                            <?php echo strtoupper(esc_html($item->title)); ?>
                        </a>
                    
                    <?php if ($has_submenu): ?>
                        <span class="dropdown-arrow" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></span>
                    </div>

                        <ul class="dropdown-menu dropdown-menu-lg">
                            <?php foreach ($item->sub_items as $sub_item): ?>
                                <li>
                                    <a class="dropdown-item" href="<?php echo esc_url($sub_item->url); ?>"<?php echo $sub_item->target; ?>>
                                        <?php echo strtoupper(esc_html($sub_item->title)); ?>
                                    </a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>
                    
                </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </nav>

        <div class="container-fluid justify-content-center">
            <picture>
                    <source
                    media="(min-width: 575px)"
                    srcset="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/icons/upper-absract-full-row.svg">

                    <img class="img-fluid abstract-img"
                    src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/icons/upper-abstract-2-rows.svg"
                    alt="random colorful absract shapes">
            </picture>
        </div>

    </header>
