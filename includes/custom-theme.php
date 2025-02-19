<?php 
function theme_setup(){
    add_theme_support('post-thumbnails');

    register_nav_menus([
        'primary-menu' => 'Primary Menu',
        'footer-menu' => 'Footer Menu'
    ]);
}

add_action('after_setup_theme', 'theme_setup');

function theme_add_logo()
{
    add_theme_support('custom-logo', [
        'height' => 250,
        'width' => 250,
        'flex-width' => true, // Allows width resizing
        'flex-height' => true, // Allows height resizing
    ]);
}
add_action('after_setup_theme', 'theme_add_logo');

function login_page_custom_logo()
{
    ?>
<style>
body.login {
  background-color: #f3f3f3;
}

.login h1 a {
  background-image: url('<?php echo esc_url(get_stylesheet_directory_uri() . '/dist/images/icons/Logo.png'); ?>') !important;
}
</style>
<?php
}
add_action('login_enqueue_scripts', 'login_page_custom_logo');

?>