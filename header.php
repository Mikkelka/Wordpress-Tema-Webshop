<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Head. samme måde som det altid har været-->
    <?php wp_head(); ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	<link rel="icon" href="favicon.ico" type="image/x-icon">
	
	
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-135289739-2"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-135289739-2');
	</script>
	
	
	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-WHGM54D');</script>
	<!-- End Google Tag Manager -->

    <title>Webshoppan</title>
</head>

<!-- body_class før at WP selv kan give classer til elementer i body'en  -->
<body <?php body_class();?>>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WHGM54D"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
	
	
	
    <header>

        <div id="header-box">

            <!-- Bruges til at angive forsiden som wp har valgt -->
            <a href="<?php echo esc_url( home_url( '/' ) );?>">
                    <!-- måden man henter et billede ind, som ikke ligger i WP media tab -->
                <img src="<?php bloginfo('template_directory');?>/Billeder/logo_negativ.png" id='logo'>
            </a>

            <div id="combi-nav">

                <div>
                    <?php wp_nav_menu(
                    // kalder på menuen der er lavet under functions.php
                    array(
                        'theme_location' => 'top-menu'
                    )
            
                );?>

                </div>

                <div id="søge-felt">

                    <?php echo do_shortcode('[aws_search_form]')?>  
                
                </div>

            </div>

        </div>

    </header>