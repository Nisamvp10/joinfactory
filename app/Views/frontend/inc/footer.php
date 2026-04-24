
<footer class="footer-section container ">
                    <div class="footer-area main-footer bg-section dark-section">
                        <div class="container-fluid">
                            <div class="footer-widget-wrapper">
                                <div class="row justify-content-between">
                                    <div class="col-xl-3 col-lg-5 col-md-6 wow fadeInUp" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                                        <div class="footer-widget-items">
                                            <div class="widget-head">
                                                <a href="index.html" class="footer-logo">
                                                    <img src="<?=base_url('public/assets/template/images/footlogo.jpeg')?>" alt="img">
                                                </a>
                                            </div>
                                            <div class="footer-content">
                                                <p>
                                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
                                                </p>
                                               <div class="footer-social-links">
                                                    <ul>
                                                        <li><a href="#"><i class="fa-brands fa-pinterest-p"></i></a></li>
                                                        <li><a href="#"><i class="fa-brands fa-x-twitter"></i></a></li>
                                                        <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                                        <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                                    </ul>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-2 col-lg-3 col-md-6 wow fadeInUp" data-wow-delay=".4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
                                        <div class="footer-widget-items footer-menu">
                                            <div class="widget-head">
                                                <h3>Useful Links</h3>
                                            </div>
                                            <ul class="gt-list-area">
                                                <li>
                                                    <a href="<?=base_url()?>">
                                                        Home
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="<?=base_url('profile')?>">
                                                        Profile
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="<?=base_url('purpose-and-values')?>">
                                                        Purpose and Values
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="<?=base_url('contact')?>">
                                                        Contact Us
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-xl-2 ps-lg-0 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;">
                                        <div class="footer-widget-items footer-menu">
                                            <div class="widget-head">
                                                <h3>Services</h3>
                                            </div>
                                            <ul class="gt-list-area">
                                                <li>
                                                    <a href="programmes.html">
                                                        Diploma Courses
                                                    </a>
                                                </li>
                                                 <?php
                                                    if(services()){
                                                        foreach(services() as $navService) {
                                                    ?>
                                                        <li><a href="<?=base_url("services/".$navService["slug"]);?>"> <?=$navService["category"];?> </a></li>
                                                    <?php
                                                        }
                                                    }    ?>       
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-xl-2 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".8s" style="visibility: visible; animation-delay: 0.8s; animation-name: fadeInUp;">
                                        <div class="footer-widget-items footer-menu">
                                            <div class="widget-head">
                                                <h3>Phone</h3>
                                            </div>
                                            <ul class="gt-list-area">
                                                <li>
                                                    <img src="<?=base_url("public/assets/template/images/icon-phone.svg");?>"> (+91) 812 939 4980
                                                </li>
                                                <li>
                                                    <img src="<?=base_url("public/assets/template/images/icon-phone.svg");?>"> (+91) 812 939 4980
                                                </li>
                                                <!-- <li>
                                                    <img src="assets/img/home-main/country-3.svg"> +91 800 800 55 38
                                                </li>
                                                <li>
                                                    <img src="assets/img/home-main/country-4.svg"> +974 502 777 18
                                                </li> -->
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-7 col-md-12 wow fadeInUp" data-wow-delay=".8s" style="visibility: visible; animation-delay: 0.8s; animation-name: fadeInUp;">
                                        <div class="footer-widget-items">
                                            <div class="widget-head">
                                                <h3>Our Office Locations</h3>
                                            </div>
                                            <ul class="contact-list footer-address">
                                               <li>
                                                    Ma Care Polyclinic & Diagnostic Centre 
High school Junction, Valapad, Thrissur, Kerala 680567
                                               </li>
                                               
                                            </ul>
                                            <ul class="contact-list-address">
                                                <li>
                                                    M / drsudhanofficial.com | info@joinfactory.org
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="footer-bottom">
                            <div class="container-fluid">
                                <div class="footer-bottom-wrapper">
                                    <p class="wow fadeInUp" data-wow-delay=".3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                                        © 2025 <b>Jointfactory</b> All rights reserved.
                                    </p>

                                    <ul class="footer-list wow fadeInUp" data-wow-delay=".7s" style="visibility: visible; animation-delay: 0.7s; animation-name: fadeInUp;">
                                        <li>
                                            <a href="#">Privacy policy</a>
                                        </li>
                                        <li>।</li>
                                        <li>
                                            <a href="#">Terms &amp; conditions</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>

 