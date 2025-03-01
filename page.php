<?php get_header(); ?>


<?php
    $title_full = strtoupper(get_the_title());
    $title_parts = explode(':', $title_full);

    $title = trim($title_parts[0]);
    $snippit = isset($title_parts[1]) ? trim($title_parts[1]) : '';
?>

<div class="wp-block-columns">
    <div class="wp-block-column is-vertically-aligned-center">
        <h1 class="down text-color-orange"><?php echo $title; ?></h1>
        <?php if (!empty($snippit)): ?>
            <h2 class="text-color-blue"><?php echo $snippit; ?></h2>
        <?php endif; ?>

        <div class="wp-block-buttons">
            <div class="wp-block-button">
                <a class="wp-block-button__link wp-element-button" href="<?php echo esc_url(home_url('/')); ?>">See My Work</a>
            </div>
        </div>
    </div>
    <?php if (has_post_thumbnail()) : ?>
    <div class="wp-block-column">
        <div class="wp-block-cover aligncenter has-custom-content-position is-position-top-left">
            <?php $thumbnail_url = get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>
            <img class="wp-block-cover__image-background wp-image-107" alt="" src="<?php echo esc_url($thumbnail_url); ?>">
        </div>
    </div>
    <?php endif; ?> 
</div>

<div class="main-content">
    <?php echo get_the_content(); ?>
</div>

<?php get_footer(); ?>
