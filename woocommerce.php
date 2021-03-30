<?php get_header(); ?>

<!-- dette er hvordan woocommerce_content kommer til at se ud -->


<div class="container">

    <div class="indhold">
    <!-- det er her hele woocommerce kommer til at load i -->
         <?php woocommerce_content();?>
    </div>

</div>

<!-- hente footer ind -->
<?php get_footer(); ?>