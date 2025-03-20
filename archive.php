<?php get_header(); ?>
<div class="wrapper">

    <?php if (have_posts()) : ?>
        <h3 class="archive-title"><?php the_archive_title(); ?></h3>

        <ul class="grid grid-3">
    <?php
        while (have_posts()) : the_post(); ?>
        <div class="grid-item">
            <?php get_template_part('includes/blog-card'); ?>
        </div>

        <?php endwhile; ?>
        </ul>

    <?php the_posts_pagination(); ?>

    <?php else : ?>
        <p>No posts found.</p>
    <?php endif; ?>
</div>
<?php get_footer(); ?>