<?php get_header(); ?>

<!-- dette er hvordan hver post kommer til at se ud -->
<!-- Bruges ikke -->

<div class="indhold">
    
    <!-- skal skrive noget inde i () ellers virker det ikke -->
    <?php the_post_thumbnail('medium'); ?>

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <?php the_content(); ?>

    <?php endwhile; else: endif;?>

</div>

<?php get_footer(); ?>