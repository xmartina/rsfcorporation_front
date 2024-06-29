<?php
$pageName = 'About Us';
const rootDir = '/home/multistream6/domains/rsfcorporation.com/public_html/';
require_once rootDir . 'config/config.php';
require_once rootDir . 'header.php';
?>
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