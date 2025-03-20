<?php
/**
 * Template Name: Project Listing
 */

get_header(); ?>

<div class="project-listing wrapper">
    <h3>Projects</h3>
    <?php
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    $args = [
        'post_type' => 'projects',
        'posts_per_page' => 10,
        'paged' => $paged,
    ];
    $query = new WP_Query($args);

    

if ($query->have_posts()) : ?>
        <ul class="grid grid-3">

    <?php while ($query->have_posts()) : $query->the_post(); ?>
        <div class="grid-item">
            <?php get_template_part('includes/blog-card'); ?>
        </div>
    <?php endwhile; ?>
    </ul>

    <?php get_template_part('components/pagination.php');

    wp_reset_postdata();
else : ?>
    <p>
        <?php esc_html_e('No projects found.', 'idm250-2025'); ?>
    </p>
    <?php endif; ?>
</div>


<?php get_footer(); ?>
