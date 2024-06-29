<?php
const rootDir = '/home/multistream6/domains/rsfcorporation.com/public_html/';
require_once rootDir . 'config/config.php';
require_once rootDir . 'header.php';
?>
<!-- Header Section -->
<header class="main-header main-header-1">
    <div class="main-logo">
        <a href="index.html">
            <img src="/assets/img/logo/logo.png" alt="Regions Financial Corporation Logo">
        </a>
    </div>
    <div class="main-button">
        <a href="contact.html" class="theme-btn header-btn">
            Free Consultation
        </a>
    </div>
    <div class="container">
        <div class="header-top ralt">
            <div class="container">
                <div class="top-header-items">
                    <ul class="contact-list">
                        <li>
                            <i class="far fa-envelope"></i>info@rsfcorporation.com
                        </li>
                        <li>
                            <i class="far fa-map-marker-alt"></i> 1900 5th Ave N, Birmingham, AL 35203
                        </li>
                    </ul>
                    <div class="header-right">
                        <ul class="contact-list">
                            <li>
                                <i class="fal fa-clock"></i>Mon-Fri, 08am - 06pm
                            </li>
                        </ul>
                        <ul class="social-icon">
                            <li>
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fab fa-pinterest-p"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header Nav Menu Start -->
        <div class="header-menu-area sticky-header">
            <div class="container">
                <div class="header-menu-items">
                    <div class="row align-items-center">
                        <div class="col-xl-9 col-lg-9 col-md-6">
                            <div class="logo-1">
                                <a href="index.html">
                                    <img src="/assets/img/logo/logo.png" alt="Regions Financial Corporation Logo">
                                </a>
                            </div>
                            <div class="menu">
                                <div class="sticky-logo">
                                    <a href="index.html">
                                        <img src="/assets/img/logo/logo.png" alt="Regions Financial Corporation Logo">
                                    </a>
                                </div>
                                <nav id="main-menu" class="main-menu">
                                    <ul>
                                        <li class="dropdown active">
                                            <a href="index.html">Home</a>
                                        </li>
                                        <li><a href="about.html">About Us</a></li>
                                        <li class="dropdown">
                                            <a href="services.html">Services</a>
                                        </li>
                                        <li class="dropdown">
                                            <a href="pages.html">Pages</a>
                                        </li>
                                        <li><a href="contact.html">Contact</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6">
                            <div class="menu-components">
                                <div class="contact-info-items">
                                    <div class="icon">
                                        <i class="far fa-phone-volume"></i>
                                    </div>
                                    <div class="content">
                                        <p>Call Us</p>
                                        <h6>+1 800 734 4667</h6>
                                    </div>
                                </div>
                                <div class="header-dots">
                                    <button id="openButton">
                                        <img src="/assets/img/logo/bar.png" alt="menu">
                                    </button>
                                </div>
                            </div>
                            <div class="mobile-menu-bar d-xl-none text-end">
                                <a href="#" class="mobile-menu-toggle-btn"><i class="fal fa-bars"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header Nav Menu End -->
    </div>
</header>
<!-- Breadcrumb Section -->
<div class="breadcrumb-wrapper" data-background="/assets/img/breadcrumb/breadcrumb.jpg">
    <div class="container">
        <div class="page-heading center">
            <h1>About Us</h1>
            <ul class="breadcrumb-items">
                <li>
                    <a href="index.html">Home</a>
                </li>
                <li>
                    <i class="fas fa-chevron-double-right"></i>
                </li>
                <li>About</li>
            </ul>
        </div>
    </div>
</div>
<!-- About Section -->
<section class="about-section fix section-padding">
    <div class="container">
        <div class="single-about-1">
            <div class="row">
                <div class="col-xl-5 col-lg-6 wow tpfadeLeft" data-wow-delay=".4s">
                    <div class="about-image">
                        <img src="/assets/img/about/about1.jpg" alt="About Regions Financial Corporation">
                        <div class="client-img">
                            <img src="/assets/img/about/client.png" alt="Regions Financial Corporation">
                        </div>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-6 mt-5 mt-lg-0 wow tpfadeRight" data-wow-delay=".8s">
                    <div class="about-content">
                        <div class="section-title-content">
                            <span>About Company</span>
                            <h2>Empowering Your Financial Future</h2>
                        </div>
                        <h3>Innovative Solutions for Modern Banking</h3>
                        <p class="text">
                            At Regions Financial Corporation, we are committed to providing top-tier banking services that cater to the diverse needs of our clients. Our team of experienced professionals works tirelessly to ensure your financial goals are met with the utmost precision and care.
                        </p>
                        <div class="about-info mt-5">
                            <a href="about.html" class="theme-btn bg-style-2">Learn More About Us</a>
                            <div class="customer-img">
                                <img src="/assets/img/about/customer.jpg" alt="Satisfied Customers">
                                <h6>5m+ Trusted Global Customers</h6>
                            </div>
                        </div>
                        <div class="counter-item">
                            <div class="counter-box">
                                <h2><span class="count">35</span>k+</h2>
                                <p>Projects Completed</p>
                            </div>
                            <div class="counter-box">
                                <h2><span class="count">28</span>+</h2>
                                <p>Years of Experience</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Feature Section -->
<section class="feature-section ralt fix section-bg section-padding">
    <div class="left-shape wow tpfadeLeft" data-wow-delay=".3s">
        <img src="/assets/img/feature/arrow-shape.png" alt="shape-img">
    </div>
    <div class="left-shape-2 wow tpfadeLeft" data-wow-delay=".5s">
        <img src="/assets/img/feature/arrow-shape2.png" alt="shape-img">
    </div>
    <div class="right-shape">
        <img src="/assets/img/feature/dot-shape.png" alt="shape-img">
    </div>
    <div class="container">
        <h6 class="sub-title text-center wow fadeInUp" data-wow-delay=".2s">Our Commitment to Excellence</h6>
        <div class="row">
            <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                <div class="feature-single-box">
                    <div class="box">
                        <h5>01</h5>
                    </div>
                    <div class="icon">
                        <img src="/assets/img/feature-icon/icon1.svg" alt="icon-img">
                    </div>
                    <div class="content mt-4">
                        <h4><a href="service-details.html">Dedicated Team</a></h4>
                        <p>Our team is dedicated to helping businesses achieve financial success.</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                <div class="feature-single-box active">
                    <div class="box">
                        <h5>02</h5>
                    </div>
                    <div class="icon">
                        <img src="/assets/img/feature-icon/icon2.svg" alt="icon-img">
                    </div>
                    <div class="content mt-4">
                        <h4><a href="service-details.html">Quality Services</a></h4>
                        <p>We provide top-quality banking services tailored to your needs.</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".6s">
                <div class="feature-single-box">
                    <div class="box">
                        <h5>03</h5>
                    </div>
                    <div class="icon">
                        <img src="/assets/img/feature-icon/icon3.svg" alt="icon-img">
                    </div>
                    <div class="content mt-4">
                        <h4><a href="service-details.html">Innovative Solutions</a></h4>
                        <p>Our innovative solutions ensure your financial growth.</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".8s">
                <div class="feature-single-box">
                    <div class="box">
                        <h5>04</h5>
                    </div>
                    <div class="icon">
                        <img src="/assets/img/feature-icon/icon4.svg" alt="icon-img">
                    </div>
                    <div class="content mt-4">
                        <h4><a href="service-details.html">Customer Support</a></h4>
                        <p>We offer 24/7 customer support to assist you at every step.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require_once rootDir . 'footer.php'; ?>