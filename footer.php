        <footer>
        <!-- Det er stedet hvor man opbygger hvordan footeren skal se ud på siden -->

            <!-- hente billede ind fra Tema -->
            <img src="<?php bloginfo('template_directory');?>/Billeder/logo_negativ.png" id='logo'>


            <p>Copyright &#169; </p>

            <div id="social">
                <i class="fab fa-facebook-square fa-3x"></i>
                <i class="fab fa-twitter-square fa-3x"></i>
                <i class="fab fa-linkedin fa-3x"></i>
                <i class="fab fa-instagram fa-3x"></i>
            </div>

        </footer>
        <!-- footer slutning -->
        <?php wp_footer(); ?>

        <script>
        // sætter nogen scripts i bunden, som man normalt gør
            AOS.init();
        </script>
        </body>

        </html>