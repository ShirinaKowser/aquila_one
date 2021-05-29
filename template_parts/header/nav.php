<?php
/**
 *Header Navigation Template
 * @package Aqiula
 */

$menu_class = \Aquila_Theme\Inc\Menus::get_instance();
$header_menu_id = $menu_class->get_menu_id('aquila-header-menu');
 $header_menus = wp_get_nav_menu_items($header_menu_id);
?>

<div class="container-fluid">
    <div class="row align-items-center">
        <div class="col-xl-2 col-lg-1 col-md-1">
            <div class="logo">
<!--                 <a href="#"><img src="<?php echo get_template_directory_uri();?>/img/logo_7.png" alt="not_found"></a>
 -->

 <?php
        if (function_exists('the_custom_logo')) {
            the_custom_logo();
        }
        ?>

</div>
        </div>
        <div class="col-xl-8 col-lg-8 col-md-8">
            <!-- Main-menu -->
          <!--   <div class="main-menu f-right d-none d-lg-block"> -->
                <nav class="main-menu f-right d-none d-lg-block">
                    <ul id="navigation">
                        <li><a href="index.php">Home</a>
                            <ul class="submenu">
                                <li><a href="#"> Homepage Layouts</a></li>
                                <li><a href="#">Header Layouts <i class="fas fa-angle-right ml-2"></i></a>
                                    <ul class="submenu">
                                        <li><a href="#"> Header 1</a></li>
                                        <li><a href="#">Header 2</a></li>
                                        <li><a href="#">Header 3</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Footer Layouts</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Pages</a>
                            <ul class="submenu">
                                <li><a href="about.php">About Us</a></li>
                                <li><a href="contact.php">Contact Us</a></li>
                                <li><a href="#">Our Team</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Classes</a></li>
                        <li> <a href="#">Events</a> </li>
                        <li> <a href="portfolio.php">Portfolio</a> </li>
                        <li> <a href="#">Elements  <i class="fa fa-caret-down"></i></a>
                            <div class="mega-menu">
                                <div class="row">
                                    <div class="col-xl-4 col-lg-4 col-md-4">
                                        <section>
                                            <h5>ELEMENTS 1</h5>
                                            <ul>
                                                <li><a href="#">   Accordions & Toggles</a></li>
                                                <li><a href="#">      Alert Boxes & Buttons</a></li>
                                                <li><a href="#">   Dividers & Pagination</a></li>
                                                <li><a href="#">    Call to Actions</a></li>
                                                <li><a href=""> Counters & Progess Bars</a></li>
                                            </ul>
                                        </section>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-4">
                                        <section>
                                            <h5>ELEMENTS 2</h5>
                                            <ul>
                                                <li><a href="#">                                                      ELEMENTS 2
                                                    Icon & Info Boxes</a></li>
                                                <li><a href="#">   Tabs & Tour Sections</a></li>
                                                <li><a href="#">  Tables & Pricing Tables</a></li>
                                                <li><a href="#">  Team Members & Partners</a></li>
                                                <li><a href=""> Testimonials</a></li>
                                            </ul>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-4">
                                        <section>
                                            <h5>TYPOGRAPHY</h5>
                                            <ul>
                                                <li><a href="#">  Dropcaps & Blockquotes</a></li>
                                                <li><a href="#">     Headings & Paragraphs</a></li>
                                                <li><a href="#">   Highlights, Tooltips & Listings</a></li>
                                                <li><a href="#">   RTL Version</a></li>
                                                <li><a href=""> Counters & Progess Bars</a></li>
                                            </ul>
                                        </section>
                                    </div>
                                    <div class="col-12">
                                        <div class="mobile_menu d-block d-lg-none"></div>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li><a href="#">Blog</a>
                            <ul class="submenu">
                                <li><a href="#">Classic</a></li>
                                <li><a href="#">Masonry</a></li>
                            </ul>
                        </li>
                        <li> <a href="#">Shop</a> </li>
                    </ul> 

                   
            </div>
            </nav>

       <!--  </div> -->

        <div class="col-xl-2 col-lg-3 col-md-3">
            <!-- Header-right -->
            <div class="header-btn d-none d-lg-block ">
                <a href="#"><i class="search_icon fas fa-search mr-1"></i></a>
                <a href="#"><i class="search_icon fas fa-user mr-1"></i></a>
                <a href="#" class="get-btn">Book Now</a>
            </div>
        </div>
        <!-- Mobile Menu -->
        <div class="col-12">
            <div class="mobile_menu d-block d-lg-none"></div>
        </div>
    </div>
</div>

<!-- header_section end -->

