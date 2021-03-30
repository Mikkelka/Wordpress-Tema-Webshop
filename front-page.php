<!-- her henter man headeren ind på siden, dette gør man på alle sider der har brug for en header -->
<?php get_header(); ?>



<div id='hero'>

    <div>

        <h1>Velkommen til <span>Webshoppan.</span></h1> 
        <img style="height: 40%; margin-top: 20px;"src="<?php bloginfo('template_directory');?>/Billeder/design-forside.svg" id='logo'>
       
    </div>
    
    <div>

        <!-- WP loop - dette er måden at få inhold som post og specificeret indhold frem på  -->
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <!-- the_content er det der står i siden editor, og det er måden man skriver det på for at få det vist -->
        <?php the_content(); ?>

        <?php endwhile;
        else : endif; ?>
        <!-- her slutter the loop -->

        <button id="main-button"><a href="webshop/shop">Tag mig til shoppen</a></button>

    </div>

</div>


<div id='oversigt'>

    <h3>Oversigt over kategorier</h3>

    <div id='kategori-billeder'>

        <a href="./product-category/gamer-mus/"><i class="fas fa-mouse-pointer fa-3x"></i>
            <p>Gamer-mus</p>
        </a>
        <a href="./product-category/headset/"><i class="fas fa-headphones fa-3x"></i>
            <p>Headset</p>
        </a>
        <a href="./product-category/konsol/"><i class="fas fa-gamepad fa-3x"></i>
            <p>Konsol</p>
        </a>
        <a href="./product-category/tablet/"><i class="fas fa-tablet-alt fa-3x"></i>
            <p>Tables</p>
        </a>
        <a href="./product-category/skaerme/"><i class="fas fa-desktop fa-3x"></i>
            <p>Skærme</p>
        </a>

    </div>

</div>


<div id='udsalg'>

    <div id="udsalg-indhold">

        <h2>Nuværende udsalgsprodukter</h2>

        <!-- her bruger vi et ACF felt, som vi har linket til den her side, og det her er måden at fremvise det på -->
        <?php
        the_field('tilbud')
        ?>


        <button id="secondary-button"><a href="/outlet/">Se flere produkter</a></button>

    </div>
  
</div>

<!-- her bruges der en shortcode og under vises det hvordan det skal skrives -->
<?php echo do_shortcode('[mc4wp_form id="274"]')?>

<!-- samme som header, den bliver hentet ind -->
<?php get_footer(); ?>