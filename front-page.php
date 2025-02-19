<?php get_header(); ?>

<?php
    $title_full = strtoupper(get_the_title());
    $title_parts = explode(':', $title_full);

    $title = trim($title_parts[0]);
    $snippit = isset($title_parts[1]) ? trim($title_parts[1]) : '';
?>

    <h1 class="text-color-orange"><?php echo $title; ?></h1>
    <?php if (!empty($snippit)): ?>
        <h2 class="text-color-blue"><?php echo $snippit; ?></h2>
    <?php endif; ?>

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

<?php if (has_post_thumbnail()) : ?>
    <div class="featured-image">
        <?php echo the_post_thumbnail(); ?>
    </div>
<?php endif; ?>


<div class="main-content">
    <?php get_template_part('featured-projects'); ?>

</div>

<?php get_footer(); ?>
