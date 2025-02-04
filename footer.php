    <footer class="container-fluid justify-content-center">
        <picture>
            <source
            media="(min-width: 576px)"
            srcset="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/icons/lower-absract-full-row.svg">

            <img class="img-fluid abstract-img"
            src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/icons/lower-absract-mobile-row.svg"
            alt="random colorful absract shapes">
        </picture>
        <div class="row align-items-center justify-content-center footer bg-pink">

            <?php $footer_menu = get_theme_menu('footer-menu'); ?>
            <?php if ($footer_menu): ?>
                <?php foreach ($footer_menu as $item): 
                    $class = !empty($item->classes) ? $item->classes : "";
                    $target = !empty($item->target) ? ' target="' . esc_attr($item->target) . '"' : ''; 
                    $menu_image_url = wp_get_attachment_image_url($item->thumbnail_id, 'full');
                ?>

                <a class="row align-items-center text-color-light footer-link <?php echo esc_attr($class); ?>" href="<?php echo esc_url($item->url); ?>" target="_blank">
                    <!-- Render image if exists -->
                    <?php if (!empty($menu_image_url)): ?>
                        <img src="<?php echo $menu_image_url; ?>" 
                                class="icon menu-image menu-image-title-before" 
                                alt="<?php echo esc_attr($item->title . ' icon'); ?>">
                    <?php endif; ?>
                    <p><? echo esc_html($item->title); ?></p>
                </a>

                
                <?php endforeach; ?>
            <?php endif; ?>

            <div class="row align-items-center text-color-light">
                <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?></p>
            </div>
        </div>
    </footer>

<?php wp_footer(); ?>

</body>

</html>