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
            <div class="row align-items-center text-color-light">
                <img class="icon" src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/icons/location_icon.svg" alt="location pin icon">
                <p>Philadelphia, PA</p>
            </div>
            <a class="row align-items-center text-color-light footer-link" href="mailto:olivia.knestaut@gmail.com">
                <img class="icon" src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/icons/mail_icon.svg" alt="email icon">
                <p>olivia.knestaut@gmail.com</p>
            </a>
            <a href="https://www.instagram.com/ollywhelmed/" target="_blank" class="row align-items-center text-color-light footer-link">
                <img class="icon" src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/icons/instagram_icon.svg" alt="instagram icon">
                <p>@ollywhelmed</p>
            </a>
            <a href="https://www.linkedin.com/in/oliviaknestaut/" target="_blank" class="row align-items-center text-color-light footer-link">
                <img class="icon" src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/icons/linkedin_icon.svg" alt="linkedin icon">
                <p>oliviaknestaut</p>
            </a>
            <a href="https://github.com/OliviaKnestaut" target="_blank" class="row align-items-center text-color-light footer-link">
                <img class="icon" src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/icons/github_icon.svg" alt="github icon">
                <p>OliviaKnestaut</p>
            </a>
            <div class="row align-items-center text-color-light">
                <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?></p>
            </div>
        </div>
    </footer>

<?php wp_footer(); ?>

</body>

</html>