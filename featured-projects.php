<?php
$query = new WP_Query([
    'post_type' => 'projects',
    'posts_per_page' => 3,
]);
?>
<?php if ($query->have_posts()) : ?>

    <div class="card">
        
    </div>


<div class="projects-list case-studies column container-fluid justify-content-center">
    <h3 class="color-orange">Portfolio</h3>
    <div class="wrapper card">
        <?php while ($query->have_posts()) : $query->the_post(); ?>
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
            <button type="button" class="btn btn-primary mx-auto d-block purple-hover" onclick="window.location.href='letterboxd'">
                <h4 class="btn-text color-blue">See Project</h4>
            </button>
        </div>
        <?php if (has_post_thumbnail()) : ?>
            <div class="project-image mx-auto d-block card-img-bottom"><?php the_post_thumbnail(); ?></div>
        
            <?php endif; ?>

        <?php endwhile; ?>
    </div>
</div>

<?php else : ?>
<p>No projects found.</p>
<?php endif; ?>

