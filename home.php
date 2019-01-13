<?php
// Template Name: Home Page
?>

<?php get_header(); ?>
    <!--########## SITE BANNER/SLIDESHOW ##########-->
    <div class="homepage-sitebanner">
        <!-- add 'slide' class to enable animation -->
        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleFade" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleFade" data-slide-to="1"></li>
                <li data-target="#carouselExampleFade" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="<?php echo get_template_directory_uri(); ?>/img/one.jpeg" alt="First slide">
                    <div class="carousel-caption">
                        <!-- <h3>Slide One</h3> -->
                        <h1 class="caption-box">Nulla vel lacinia orci. Nulla vel porttitor odio. Mauris laoreet
                            euismod magna. Aenean
                            accumsan odio ut ante fringilla elementum. Praesent augue nunc, pharetra a tellus ornare,
                            dictum mattis ligula. Proin fermentum efficitur rhoncus. Morbi consequat mauris a urna
                            mattis tempor.</h1>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="<?php echo get_template_directory_uri(); ?>/img/two.jpeg" alt="Second slide">
                    <div class="carousel-caption play-vid">
                        <div class="play-btn"><a href="#">
                                <h1> Play Video &#9655</h1>
                            </a></div>
                    </div>
                    <div class="carousel-caption">
                        <!-- <h3>Slide Two</h3> -->
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="<?php echo get_template_directory_uri(); ?>/img/three.jpeg" alt="Third slide">
                    <div class="carousel-caption">
                        <!-- <h3>Slide Three</h3> -->
                        <h1 class="caption-box">Sharing knowledge and building a community of practice worldwide</h1>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

    <div class="site-beam">
        <div class="logo mobile-logo">
            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/GDRRC.png"></a>
        </div>
    </div>

    <div class="arrow-wrapper">
        <div class="down-arrow"></div>
    </div>

    <!-- Section One - Community Sections -->
    <div class="sect-wrapper1">
        <div class="sect1 sect">
            <div class="social-blog">
                <!-- Social Media -->
                <h1 class="cheader">Engage on Social Media</h1>
                <div class="icon-box">
                    <a class="icon-link" href="#"><i class="fab fa-linkedin sm sm1"></i></a>
                    <a class="icon-link" href="#"><i class="fab fa-facebook-square sm sm2"></i></a>
                    <a class="icon-link" href="#"><i class="fab fa-twitter sm sm3"></i></a>
                    <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut leo eros,
                        ullamcorper sed dui in, condimentum ornare dui. Maecenas cursus justo non urna tempor egestas.
                        Proin pellentesque vehicula arcu faucibus.</p>
                </div>

                <!-- Blog -->
                <h1 class="cheader">Follow our blog</h1>
                <div class="icon-box">
                    <a class="icon-link" href="#"><i class="fas fa-blog"></i></a>
                    <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut leo eros,
                        ullamcorper sed dui in, condimentum ornare dui. Maecenas cursus justo non urna tempor egestas.
                        Proin pellentesque vehicula arcu faucibus.</p>
                </div>


            </div>
            <div class="events">

                <h1 class="cheader">Events</h1>
                <div class="icon-box">
                    <a class="icon-link" href="#"><i class="far fa-calendar-alt"></i></a>
                    <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut leo eros,
                        ullamcorper sed dui in, condimentum ornare dui. Maecenas cursus justo non urna tempor egestas.
                        Proin pellentesque vehicula arcu faucibus.</p>
                </div>

                <h1 class="cheader">Opportunities</h1>
                <div class="icon-box">
                    <a class="icon-link" href="#"><i class="fas fa-briefcase"></i></a>
                    <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut leo eros,
                        ullamcorper sed dui in, condimentum ornare dui. Maecenas cursus justo non urna tempor egestas.
                        Proin pellentesque vehicula arcu faucibus.</p>
                </div>

            </div>

            <div class="knowledge">
                <h1 class="cheader">Knowledge</h1>
                <div class="icon-box">
                    <a class="icon-link" href="#"><i class="fas fa-university"></i></a>
                    <p class="description">Lorem ipsum <a href="#">LAW</a> sit amet, consectetur adipiscing elit. Ut
                        leo eros, ullamcorper sed <a href="#">RESOURCES</a>, condimentum ornare dui. Maecenas cursus
                        justo non urna tempor egestas. Proin pellentesque vehicula arcu faucibus.</p>
                </div>
            </div>

            <div class="community">
                <h1 class="cheader">Community</h1>
                <div class="icon-box">
                    <a class="icon-link" href="#"><i class="fas fa-users"></i></a>
                    <p class="description">Lorem ipsum dolor sit amet, consectetur <a>PEOPLE</a> elit. Ut leo eros,
                        ullamcorper sed dui in, condimentum ornare dui. <a>ORGANIZATIONS</a> cursus justo non urna
                        tempor egestas. Proin pellentesque vehicula arcu faucibus.</p>
                </div>
            </div>

        </div>
    </div>


    <!-- Section Two - Contribution Section ~ How to Participate -->
    <div class="sect-wrapper2">
        <div class="sect2 sect">
            <h1 class="hpheader">How to Participate</h1>
            <p class="description">Nunc viverra nulla nec nulla maximus, nec egestas dui auctor. Aenean convallis
                turpis vitae ligula
                rhoncus vehicula a nec erat. Pellentesque habitant morbi tristique senectus et netus et malesuada fames
                ac turpis egestas. Etiam eu elit suscipit, vehicula leo eget, mattis libero. Proin a turpis non justo
                placerat posuere a vel dui. Praesent at massa ut lectus rutrum dapibus fringilla non quam. Donec non
                aliquet metus, quis fringilla tortor. Cras risus mauris, tempus nec blandit ac, vulputate tincidunt
                massa. Phasellus id lacus in ipsum tempor gravida.</p>
            <div class="participation-links">
                <a class="globe"><i class="fas fa-globe-americas"></i></a>
                <h2 class="plink"><a href="#">Share Knowledge</a></h2>
                <h2 class="plink"><a href="#">Sign Up</a></h2>
            </div>
        </div>
    </div>

    <!--    Section Three - Partners ~ ABA and ACIAM-->
    <div class="sect-wrapper3">
        <div class="sect3 sect">
            <h1 class="pheader">Partners</h1>
            <div class="partners">
                <a class="partner"><img class="aciam" src="<?php echo get_template_directory_uri(); ?>/img/aciam.png" alt=""></a>
                <a class="partner"><img class="aba" src="<?php echo get_template_directory_uri(); ?>/img/aba.png" alt=""></a>
                <a class="partner"><img class="gsu" src="<?php echo get_template_directory_uri(); ?>/img/gsu-col.png" alt=""></a>
            </div>
            <p class="description">
                The GDRRC is a joint program of the <a href="https://www.americanbar.org/">American Bar Association's
                    (ABA)</a> Selection on Dispute Resolution
                Section and the <a href="http://atlciam.org/">Atlanta Center for International Arbitration and
                    Mediation (ACIAM)</a> at <a href="https://law.gsu.edu/">Georgia State
                    University's College of Law</a>. The GDRRC relies on an Academic Council to oversee the validity of
                the
                content and direct specific initiatives on the site. Most importantly, the GDRRC is crowd-sourced,
                relying on users worldwide to provide and update information on the site through the submission forms.</p>
        </div>
    </div>
<?php get_footer(); ?>