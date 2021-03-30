<?php /* Template Name: Kontakt */?> 

<!-- Henter header ind -->
<?php get_header(); ?>

<div class="subpage-container">

    <div id="subpage-heading">
        <h2>Kontakt os</h2>
    </div>

    <div id="hero-subpage">

        <div id="about-heading">
            <h3 id="main-border-line">Behov for at komme i kontakt med os?</h3>
            <p>Brug for at komme i kontakt med os? Webshoppans support-team sidder klar på tasterne til at hjælpe dig. Vi har på siden samlet information omkring hvordan du kan komme i kontakt med os.</p>
        </div>

        <div id="about-heading">
            <div>
                <h3>Livechat</h3>
                <p>Vores livechat har åbent alle hverdage imellem 10:00 - 20:00. Start livechatten ved at trykke på den runde knap placeret nederst i højre hjørne på siden.</p>
            </div>

        <div>  
            <h4>Udenfor livechattens åbningstid?</h4>

            <ul>
                <li>Telefon: Åbent alle hverdage 08:00 -21:00</li>
                <li>E-mail: Mail til os på webshoppan@support.com</li>
            </ul>
        </div>

        </div>
    </div>

    <div class="contact-form">
        <h3>Skriv til os allerede i dag!</h3>
        <!-- her er en shortcode til en kontakt form -->
        <?php echo do_shortcode('[contact-form-7 id="260" title="Contact form 1"]')?>
    </div>

</div>

<!-- henter footer ind -->
<?php get_footer(); ?>