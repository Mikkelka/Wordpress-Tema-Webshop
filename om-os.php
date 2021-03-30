<?php /* Template Name: Om os */?>

<!-- henter header ind -->
<?php get_header(); ?>


<div id="subpage-heading">
    <h2>Om os</h2>
</div>
<div id="hero-subpage">

    <div id="about-heading">
        <!-- WP loop - her henter vi indholdet ind fra siden -->
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <?php the_content(); ?>

        <?php endwhile;
        else : endif; ?>

    </div>
    
    <div id="electric-container">
        <!-- henter billede ind fra Tema -->
        <img style="width: 15%;" src="<?php bloginfo('template_directory');?>/Billeder/Asset_1.svg">
    </div>

</div>

<div id="product-brand-section">
    <h3>Kun de bedste produkter er gode nok til webshoppan!</h3>
    <div>
        <img src="<?php bloginfo('template_directory');?>/Billeder/product-brands/asus-logo.jpg">
        <img src="<?php bloginfo('template_directory');?>/Billeder/product-brands/acer-logo.svg">
        <img src="<?php bloginfo('template_directory');?>/Billeder/product-brands/LG_logo_black.png">
        <img src="<?php bloginfo('template_directory');?>/Billeder/product-brands/Benq-logo.jpg">
        <img src="<?php bloginfo('template_directory');?>/Billeder/product-brands/Logo_logitech.jpg">
        <img src="<?php bloginfo('template_directory');?>/Billeder/product-brands/steelseries-logo.png">
    </div>
    <h4>...og mange flere!</h4>
</div>


<!-- henter footer ind -->
<?php get_footer(); ?>