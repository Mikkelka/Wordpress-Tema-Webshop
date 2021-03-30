<?php get_header(); ?>

<!-- dette er hvordan archive kommer til at se ud -->
<!-- Bruges ikke mere -->

<div class="container">


    <div class='posts'>
    <!-- loop igen  -->
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <!-- the_post_thumbnail bruges til at hente post thumbnail med -->
        <?php the_post_thumbnail('medium'); ?>

        <a href="<?php the_permalink();?>"><h2><?php the_title();?></h2></a>

        <!-- excerpt bruges til at skære teksten af  -->
        <?php the_excerpt(); ?>

        <?php endwhile; else: endif;?>

    </div>


</div>




<?php get_footer(); ?>