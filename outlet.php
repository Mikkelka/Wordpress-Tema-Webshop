<?php /* Template Name: outlet */?>

<!-- henter header ind -->
<?php get_header(); ?>


<div class="container">

    <div class="indhold">
        
        <h2>Velkommen til outlet</h2>
        
        <!-- WP loop - henter indhold ind fra editoren -->
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <?php the_content(); ?>

        <?php endwhile;
        else : endif; ?>

    </div>

</div>

<!-- Henter footer ind -->
<?php get_footer(); ?>