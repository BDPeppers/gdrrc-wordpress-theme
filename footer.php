<?php
/**
 * The template for displaying the footer
 */
?>

 <!-- ###### FOOTER ###### -->
 <footer>
        <div class="footer-wrapper">
            <div class="foot-sect1 foot">
                    <ul class="foot-list community foot1">
                            <li class="foot-sect-header">Community</li>
                            <?php wp_nav_menu(array( 'menu_class' => 'foot-list community foot1', 'theme_location' => 'f-community')) ?>
                        </ul>

                        <ul class="foot-list ADR foot1">
                            <li class="foot-sect-header">ADR Project</li>
                            <?php wp_nav_menu(array( 'menu_class' => 'foot-list community foot1', 'theme_location' => 'f-adr')) ?>
                        </ul>

                <ul class="foot-list educational foot1">
                    <li class="foot-sect-header">Educational Resources</li>
                    <?php wp_nav_menu(array( 'menu_class' => 'foot-list community foot1', 'theme_location' => 'f-ed-resources')) ?>
                </ul>
                <div class="contribute-follow foot1">
                    <ul class="foot-list contribute">
                        <li class="foot-sect-header">Participate</li>
                        <?php wp_nav_menu(array( 'menu_class' => 'foot-list community foot1', 'theme_location' => 'f-participate')) ?>
                    </ul>
                    <ul class="foot-list follow">
                        <li><i class="fab fa-linkedin"></i></li>
                        <li><i class="fab fa-facebook-square"></i></li>
                        <li><i class="fab fa-twitter"></i></li>
                        <li><i class="fas fa-blog"></i></li>
                    </ul>
                </div>
            </div>
            <div class="foot-sect2 foot">
                <h1>Global Dispute Resolution Resource Center</h1>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. In commodo orci vel magna mattis, lacinia
                    porta massa varius. Nunc tempus magna vitae ornare ullamcorper. Morbi velit ligula, pretium et
                    tempus pellentesque, bibendum sit amet felis. Vivamus tortor magna, dapibus non odio sit amet,
                    consectetur vulputate dui. Donec ut elit eu diam imperdiet euismod nec et velit. Sed pulvinar ipsum
                    mi. Maecenas ut augue eu diam posuere bibendum. Nam laoreet sagittis lectus, at semper massa
                    fringilla sit amet. </p>
            </div>
        </div>
        <div class="copyright-sect foot">
            <ul class="copyright">
                <li>@2019 Georgia State University</li>
                <li>GSU College of Law</li>
                <li>Consortium on Negotiation and Conflict Resolution</li>
            </ul>
        </div>
    </footer>

    <?php wp_footer(); ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, Bootstrap JS, then custom JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
    <script src="js/index.js" type="application/javascript"></script>

</body>

</html>