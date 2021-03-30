<?php get_header(); ?>

<!-- alle sider vil bruge den her  -->


<div class="container">

    <div class="indhold">

    <!-- woocommerce_content skrives ind så woocommerce kan sætte sit eget inhold / styles / struktur ind    -->
    <?php woocommerce_content();?>

        <?php while (have_posts()) : the_post(); ?>

        <?php the_content(); ?>

        <?php endwhile; ?>

    </div>



</div>

<!-- footer hentes ind -->
<?php get_footer(); ?>