<?php get_header(); ?>

<?php
$title_full = strtoupper(get_the_title());
$title_parts = explode(':', $title_full);

$title = trim($title_parts[0]);
$snippit = isset($title_parts[1]) ? trim($title_parts[1]) : '';
?>

<?php if (has_post_thumbnail()) : ?>
    <?php $thumbnail_url = get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>
<?php endif; ?>

<main class="post-container">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <article class="post">
            <div class="case-study-title container-fluid case-study-header" style="background-image: url('<?php echo esc_url($thumbnail_url); ?>');">
                <div>
                    <h1 class="text-color-light"><?php echo $title; ?></h1>
                    <?php if (!empty($snippit)): ?>
                        <h2 class="text-color-light"><?php echo $snippit; ?></h2>
                    <?php endif; ?>
                </div>
            </div>
            <p class="post-meta">Published on <?php the_date(); ?> in <?php the_category(', '); ?></p>
            
            <div class="post-content container-fluid">
                <?php the_content(); ?>
            </div>
            
            <div class="post-tags container-fluid">
                <?php the_tags('Tags: ', ', '); ?>
            </div>
        </article>
    <?php endwhile; endif; ?>
</main>

<?php get_footer(); ?>
