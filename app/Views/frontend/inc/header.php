
<?=view('frontend/inc/headerLink');?>
<body>

    <!-- Preloader Start -->
	<div class="preloader">
		<div class="loading-container">
			<div class="loading"></div>
			<div id="loading-icon"><img src="<?= base_url('public/assets/template/') ?>images/favicon.png" alt=""></div>
		</div>
	</div>
	<!-- Preloader End -->
 
    <!-- Header Start -->
	<header class="main-header">
        <div class="top-bar-header">
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-lg-5 col-md-6  text-md-left p-0">
                        <div class="top-welcome-text">
                            <p> Sports Injury And Joint Preservation Clinic</p>
                        </div>
                    </div>
                    <div class="col-lg-5 mt-3 mt-md-0 col-md-6 d-flex justify-content-end align-items-center p-0">
                        <div class="social-links">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-linkedin"></i></a>
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>


        <div class="main-header-three__middle">
            <div class="container p-0">
                <div class="main-header-three__middle-inner">
                    <div class="logo-box">
                         <div class="cutLogo"> <img src="<?= base_url('public/assets/template/') ?>images/join-logo.svg" alt="Logo"></div>
                        <a class="navbar-brand" href="#">
                            <img src="<?= base_url('public/assets/template/') ?>images/logo.png" alt="Logo" class="mainLogo">
                        </a>  
                        
                      
                    
                    </div>
                    <div class="navbar-toggle"></div>

                    <div class="contact-info">
                        <ul>

                            <!--<li>-->
                            <!--    <div class="icon-box">-->
                            <!--        <span class="fa-solid fa-search"></span>-->
                            <!--    </div>-->
                            <!--    <div class="text-box">-->
                            <!--        <h3>Search</h3>-->
                            <!--    </div>-->
                            <!--</li>-->

                            <!--<li>-->
                            <!--    <div class="icon-box">-->
                            <!--        <span class="fa-solid fa-user"></span>-->
                            <!--    </div>-->
                            <!--    <div class="text-box">-->
                            <!--        <h3> International Patients</h3>-->
                                   
                            <!--    </div>-->
                            <!--</li>-->
                            <!--                            <li>-->
                            <!--    <div class="icon-box">-->
                            <!--        <span class="fa-solid fa-location-dot"></span>-->
                            <!--    </div>-->
                            <!--    <div class="text-box">-->
                            <!--        <h3>Our Locations</h3>-->
                            <!--    </div>-->
                            <!--</li>-->
                            <li class="menu-card">
                                <div class="icon-box">
                                    <span class="fa-solid fa-search"></span>
                                </div>
                                <div class="text-box">
                                    <h3>Search</h3>
                                </div>
                            </li>
                            
                            <li class="menu-card">
                                <div class="icon-box">
                                    <span class="fa-solid fa-user"></span>
                                </div>
                                <div class="text-box">
                                    <h3>International Patients</h3>
                                </div>
                            </li>
                            
                            <li class="menu-card">
                                <div class="icon-box">
                                    <span class="fa-solid fa-location-dot"></span>
                                </div>
                                <div class="text-box">
                                    <h3>Our Locations</h3>
                                </div>
                            </li>

                        </ul>


                    </div>
                </div>
            </div>
        </div>
		<div class="header-sticky bg-section">
			<nav class="navbar navbar-expand-lg">
				<div class="container">
					

					<!-- Main Menu Start -->
					<div class="collapse navbar-collapse main-menu">
                        <div class="nav-menu-wrapper">
                            <ul class="navbar-nav mr-auto" id="menu">
                                <li class="nav-item"><a class="nav-link" href="<?=base_url() ?>">Home </a>
                                    <li class="nav-item submenu"><a class="nav-link" href="#">About</a>
                                        <ul>                                        
                                            <li class="nav-item "><a class="nav-link" href="<?=base_url('profile') ?>">Doctor's Profile</a></li>
                                            <li class="nav-item "><a class="nav-link" href="<?=base_url('purpose-and-values')?>">Purpose and Values</a></li>

                                        </ul>
                                    
                                    </li>

                                    <li class="nav-item submenu"><a class="nav-link" href="#">Our Clinics</a>
                                        <ul>                                        
                                            <li class="nav-item"><a class="nav-link" href="<?=base_url('our-clinics')?>">Address
                                                
                                                
                                                </a></li>
                                            <li class="nav-item"><a class="nav-link" href="<?=base_url('our-clinics')?>"> Contact no for Booking</a></li>
                                       
                                            <li class="nav-item"><a class="nav-link" href="<?=base_url('our-clinics')?>"> Qr Code for Map Directions</a></li>

                                           
                                        </ul>
                                    </li> 
                                    
                                    <li class="nav-item submenu"><a class="nav-link" href="#">Services</a>
                                        <ul>                      
                                            <?php
                                            if(services()){
                                                foreach(services() as $navService) {
                                                    ?>
                                                    <li class="nav-item"><a class="nav-link" href="<?=base_url('services/'.$navService['slug']);?>"><?=$navService['category'];?></a></li>
                                                    <?php
                                                }
                                            }    ?>              
                                            <!-- <li class="nav-item"><a class="nav-link" href="knee-services.html">Knee</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#">Shoulder</a></li>
                                            <li class="nav-item"><a class="nav-link" href="trauma.html">Trauma</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#">Hip</a></li>

                                            <li class="nav-item"><a class="nav-link" href="#">Ilizarov Reconstruction</a></li> -->

                                           
                                        </ul>
                                    </li> 
                                    
                                    <li class="nav-item"><a class="nav-link" href="<?=base_url('research')?>">Research</a>
                                        <!--<ul>                                        -->
                                        <!--    <li class="nav-item"><a class="nav-link" href="#">Demo</a></li>-->
                                        <!--    <li class="nav-item"><a class="nav-link" href="#">Demo</a></li>-->

                                        <!--</ul>-->
                                    </li>                         

                                    
                                    <li class="nav-item"><a class="nav-link" href="<?=base_url('gallery')?>">Gallery
                                    </a></li>                         
                                    <li class="nav-item submenu"><a class="nav-link" href="#">Patient Library</a>
                                        <ul>                                        
                                            <li class="nav-item"><a class="nav-link" href="<?=base_url('what-not-to-do')?>">Out of Station Patients</a></li>
                                            <li class="nav-item"><a class="nav-link" href="<?=base_url('what-not-to-do')?>">Patient Resources & Info</a></li>
                               

                                           
                                        </ul>
                                    </li> 
                                <li class="nav-item"><a class="nav-link" href="<?=base_url('contact')?>">Contact Us</a></li>                         
                                <li class="nav-item highlighted-menu"><a class="nav-link" href="#">Book Now</a></li>                         
                            </ul>
                        </div>
                        
                        <!-- Header Contact Btn Start -->
                        <div class="header-contact-btn">
                            <a href="#" class="btn-default">Book Now</a>
                        </div>
                        <!-- Header Contact Btn End -->
					</div>
					<!-- Main Menu End -->
				</div>
			</nav>
			<div class="responsive-menu"></div>
		</div>
	</header>
	<!-- Header End -->