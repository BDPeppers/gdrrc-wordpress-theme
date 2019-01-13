<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?> >

    <!--########## LOGO + NAVIGATION BAR + SEARCH BAR ##########-->
    <header class="siteheader">
        <div class="header-wrapper">
            <!--########## LOGO ##########-->
            <div class="logo">
                <a href="<?php echo get_home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/GDRRC.png"></a>
            </div>

            <div class="snbar-wrapper">
                <!--########## NAVIGATION BAR ##########-->
                <navigation class="navigation desktop-nav">
                
                <!-- class = 'dropdown-link' added to menu items -->

                    <ul class="desktop-nav-list">
                        <li class="d-nav-link">
                            <a href="#" class="nav-btn">Community</a>
                            <ul class="dropdown">
                            <?php wp_nav_menu(array( 'menu_class' => 'dropdown', 'theme_location' => 'community')) ?>
                                <!-- About Us, Organizations, Network, Opportunities, Events -->
                            </ul>
                        </li>
                        <li class="d-nav-link">
                            <a href="#" class="nav-btn">ADR Project</a>
                            <ul class="dropdown">
                            <?php wp_nav_menu(array( 'menu_class' => 'dropdown', 'theme_location' => 'adr')) ?>
                                    <!-- About, Maps, and Country List -->
                            </ul>
                        </li>
                        <li class="d-nav-link">
                            <a href="#" class="nav-btn">Educational Resources</a>
                            <ul class="dropdown">
                            <?php wp_nav_menu(array( 'menu_class' => 'dropdown', 'theme_location' => 'ed-resources')) ?>
                                    <!-- Degree Programs, Glossary, and FAQ -->
                            </ul>
                        </li>
                        <li class="d-nav-link">
                            <a href="#" class="nav-btn">Participate</a>
                            <ul class="dropdown">
                            <?php wp_nav_menu(array( 'menu_class' => 'dropdown', 'theme_location' => 'participate')) ?>
                                <!-- Mailing List and Info Submission Form -->
                            </ul>
                        </li>

                        <!-- Search Bar -->
                        <li class="d-nav-link">
                        <?php dynamic_sidebar( 'search-bar' ); ?>
                        </li>
                    </ul>
                </navigation>
            </div>

            <!-- ##### MOBILE NAVIGATION ###### -->
            <navigation class="mobile-nav">
                <div class="mobile-header">
                    <h1><a href="<?php echo get_home_url(); ?>">Global Dispute Resolution Resource Center</a></h1>
                </div>
                <ul class="mobile-nav-list">
                    <li class="m-nav-link">
                        <a href="#" id="menu-toggle-btn" class="menu-btn">
                            <i id="menu-toggle" class="fas fa-bars"></i>
                            Menu
                        </a>
                        <ul class="mobile-dropdown">
                            <!-- NOTE the menu_id and menu_class are necessary for dropdown styling and functionality -->

                            <li class="L1">
                                <a class="L1-link" id="DD-L2-Community">Community</a>
                                <?php wp_nav_menu(array( 'menu_class' => 'mobile-dropdown-L2', 'menu_id' => 'Community', 'theme_location' => 'm-community')) ?>
                            </li>

                            <li class="L1" id="DD-L2">
                                <a class="L1-link" id="DD-L2-ADR">ADR Project</a>
                                <?php wp_nav_menu(array( 'menu_class' => 'mobile-dropdown-L2', 'menu_id' => 'ADR', 'theme_location' => 'm-adr')) ?>
                            </li>

                            <li class="L1" id="DD-L2">
                                <a class="L1-link" id="DD-L2-ER">Educational Resources</a>
                                <?php wp_nav_menu(array( 'menu_class' => 'mobile-dropdown-L2', 'menu_id' => 'ER',  'theme_location' => 'm-ed-resources')) ?>
                            </li>

                            <li class="L1" id="DD-L2">
                                <a class="L1-link" id="DD-L2-Participate">Participate</a>
                                <?php wp_nav_menu(array( 'menu_class' => 'mobile-dropdown-L2', 'menu_id' => 'participate',  'theme_location' => 'm-participate')) ?>
                            </li>
                        </ul>
                    </li>
                    <li class="m-nav-link">
                    <?php dynamic_sidebar( 'search-bar' ); ?>
                    </li>
                </ul>
            </navigation>
        </div>
    </header>













