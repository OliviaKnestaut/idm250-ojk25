<div class="card-body bg-blue">

<?php
$title_full = strtoupper(get_the_title());
$title_parts = explode(':', $title_full);

$title = trim($title_parts[0]);
$snippit = isset($title_parts[1]) ? trim($title_parts[1]) : '';
?>

    <h3 class="text-color-light"><?php echo $title; ?></h3>
    <?php if (!empty($snippit)): ?>
        <h4 class="text-center text-color-light"><?php echo $snippit; ?></h4>
    <?php endif; ?>
    <time datetime="<?php echo get_the_date('c'); ?>" class="date">
        <?php echo get_the_date(); ?>
    </time>
    <?php
    $excerpt_80 = wp_trim_words(get_the_excerpt(), 80);
    $excerpt_30 = wp_trim_words(get_the_excerpt(), 30);
    ?>
    <div id="dynamic-excerpt">
        <p class="excerpt excerpt-80"><?php echo $excerpt_80; ?></p>
        <p class="excerpt excerpt-30"><?php echo $excerpt_30; ?></p>
    </div>

    <button type="button" class="wp-block-button btn btn-primary mx-auto d-block" onclick="window.location.href='<?php the_permalink(); ?>'">
        <h4 class="btn-text">See Project</h4>
    </button>
</div>
<?php if (has_post_thumbnail()) : ?>
    <div class="project-image mx-auto d-block card-img-bottom"><?php the_post_thumbnail(); ?></div>

    <?php endif; ?>


