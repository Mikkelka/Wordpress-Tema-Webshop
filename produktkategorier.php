<?php /* Template Name: produktkategorier */?>

<!-- header hentes ind -->
<?php get_header(); ?>


<div class="indhold">

    <h2>Shop</h2>

    <!-- shortcode sættes ind fra woocommerce -->
    <?php echo do_shortcode( '[product_categories]' )?>
  
</div>



<?php get_footer(); ?>