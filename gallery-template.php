<?php
/*
    Template Name: Gallery Template
*/
?>
<?php get_header(); ?>

<h1 class="long-title text-color-orange">
    <?php 
    echo strtoupper(get_the_title());
    ?>
</h1>

<!-- No featured image shown on this Page-->

<div class="main-content">
    <?php echo get_the_content(); ?>
</div>

<div class="main-content">
    <?php echo get_the_content(); ?>
</div>


<?php get_footer(); ?>
