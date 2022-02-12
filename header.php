<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php 
            wp_head();
        ?>
    </head>
    <body>
        <header>
            <div class="container-fluid header-row1">
                <div class="row1-left column eight">
                    <div class="slanted slanted-left-to-left">
                        <section class="header-icon-wrapper header-icon-wrapper1">
                            <i class="far fa-envelope"></i>
                            <h4>email@gmail.com</h4>
                        </section>
                    </div>
                </div>
                <div class="row1-right column four">
                    <div class="slanted slanted-right-to-left">
                        <section class="header-icon-wrapper header-icon-wrapper2">
                            <i class="far fa-envelope"></i>
                            <h4>donation</h4>
                        </section>
                    </div>
                </div>
                <!-- <div class="container">
                    <div class="header-row1">
                        <section class="column six header-row1-left">
                            <i class="far fa-envelope"></i>
                            <h4>email@gmail.com</h4>
                        </section>
                        <section class="column six header-row1-right">
                            <i class="far fa-envelope"></i>
                            <h4>donation</h4>
                        </section>
                    </div>
                </div> -->
            </div>
            <div class="container-fluid header-row2">
                <div class="container">
                    <div class="header-row">
                        <section class="column four header-row2-left">
                            <div class="logo-wrapper">
                                <a href="<?php echo get_home_url(); ?>">
                                <?php 
                                
                                $custom_logo_id = get_theme_mod('custom_logo');
                                $image = wp_get_attachment_image_src($custom_logo_id, 'full');
                                
                                ?>
                                <img src="<?php echo $image[0]; ?>" class="img-responsive"/>
                                </a>
                            </div>
                        </section>
                        <section class="column eight header-row2-right">
                            <div class="text">
                                <h2>A step towards providing health care & other social services</h2>
                                <p> Under the auspices of</p>
                                <h2>CAD Centre, Jadavpur University</h2>
                                <p>  A public charitable trust recognised u/s 12AA of the Income Tax Act, 1961,
                                 Website:   www.jumed.co.in  E-mail email@gmail.com</p>
                                
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </header>
        <div class="container-fluid row3">
            <div class="container">
                <div class="row">
                    <div class="column twelve">
                        <!-- <nav class="menu">
                            <div id="menubtn"><i class="fas fa-bars"></i>Menu</div>
                            <ul>
                                <li><a href="#">home</a></li>
                                <li><a href="#">our mission</a></li>
                                <li><a href="#">our volenteer</a></li>
                                <li><a href="#">list of doners</a></li>
                                <li><a href="#">contact us</a></li>
                            </ul>
                        </nav> -->
                        <div id="menubtn"><i class="fas fa-bars"></i>Menu</div>
                        <?php 
                        wp_nav_menu(array(
                            'theme_location' => 'header_menu',
                            'depth' => 2,
                            'container' => 'nav',
                            'container_class' => 'menu',
                            'container_id' => 'menu1',
                            'menu_class' => 'menu1_ul'
                        ));
                        ?>
                    </div>
                </div>
            </div>
        </div>