<?php 
require_once 'includes/config.php';
$page_title = "Home";
$page_description = "Welcome to Hyper2 Enterprise - Your trusted partner for quality products and services";
require_once 'includes/header.php';
require_once 'includes/navbar.php';
?>
<style>
    /* Full Width Overrides - Added as requested */
    .w-full { width: 100% !important; }
    .max-w-full { max-width: 100% !important; }
    .container-fluid { width: 100%; padding-right: var(--bs-gutter-x, 0.75rem); padding-left: var(--bs-gutter-x, 0.75rem); margin-right: auto; margin-left: auto; }
    body, html { overflow-x: hidden; }

    /* Custom Red Gradient Slide */
    .slide-red-gradient {
        background: linear-gradient(180deg, #ffffff 0%, #fee2e2 25%, #ef4444 60%, #b91c1c 100%);
        position: relative;
        overflow: hidden;
    }
    .slide-red-gradient .hero-content-wrapper {
        position: relative;
        z-index: 10;
        padding-top: 4rem;
        padding-bottom: 2rem;
    }
    .text-shadow-none { text-shadow: none !important; }
    .ls-2 { letter-spacing: 2px; }
    .fw-900 { font-weight: 900; }
    .hero-product-img {
        max-height: 400px; /* Adjust as needed */
        object-fit: contain;
        transform: perspective(1000px) rotateX(5deg);
        transition: transform 0.5s ease;
    }
    .hero-product-img:hover {
        transform: perspective(1000px) rotateX(0deg) scale(1.05);
    }
</style>


<style>
.hero-slider {
    width: 100%;
    overflow: hidden; /* Prevent scrollbar flickering */
    margin: 0;
    padding: 0;
}

.hero-slider .carousel-item {
    height: 750px;
    background-size: cover;
    background-position: center;
    position: relative;
    width: 100%; /* Ensure full width */
}

.hero-slider .overlay {
    background: linear-gradient(rgba(0,0,0,0.3), rgba(0,0,0,0.6)); /* smoother gradient */
    position: absolute;
    inset: 0;
    z-index: 1;
}

.hero-slider .content {
    position: relative;
    z-index: 2;
    text-align: center; /* Center text nicely */
    max-width: 800px;
    margin: 0 auto;
}

.hero-slider .content h1, 
.hero-slider .content p {
    color: #ffffff !important;
    text-shadow: 2px 2px 10px rgba(0,0,0,0.8); /* Stronger shadow */
}
</style>

<div id="productSlider" class="carousel slide hero-slider" data-bs-ride="carousel" data-bs-interval="3000">

    <!-- Indicators -->
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#productSlider" data-bs-slide-to="0" class="active"></button>
        <button type="button" data-bs-target="#productSlider" data-bs-slide-to="1"></button>
        <button type="button" data-bs-target="#productSlider" data-bs-slide-to="2"></button>
        <button type="button" data-bs-target="#productSlider" data-bs-slide-to="3"></button>
    </div>

    <!-- Slides -->
    <div class="carousel-inner">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image:url('assets/images/banner2.jpg')">
            <div class="overlay"></div>
            <div class="container h-100 d-flex align-items-center">
                <div class="content text-white">
                    <h1 class="fw-bold animate__animated animate__fadeInDown">Low Voltage Switchgear</h1>
                    <p class="lead animate__animated animate__fadeInUp">Reliable & efficient electrical solutions</p>
                </div>
            </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item" style="background-image:url('assets/images/banner3.jpg')">
            <div class="overlay"></div>
            <div class="container h-100 d-flex align-items-center">
                <div class="content text-white">
                    <h1 class="fw-bold animate__animated animate__fadeInDown">Industrial Control Devices</h1>
                    <p class="lead animate__animated animate__fadeInUp">Precision engineered for industries</p>
                </div>
            </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item" style="background-image:url('assets/images/banner4.jpg')">
            <div class="overlay"></div>
            <div class="container h-100 d-flex align-items-center">
                <div class="content text-white">
                    <h1 class="fw-bold animate__animated animate__fadeInDown">Power Distribution Systems</h1>
                    <p class="lead animate__animated animate__fadeInUp">Safe & scalable power solutions</p>
                </div>
            </div>
        </div>

        <!-- Slide 4 -->
        <div class="carousel-item" style="background-image:url('assets/images/banner6.webp')">
            <div class="overlay"></div>
            <div class="container h-100 d-flex align-items-center">
                <div class="content text-white">
                    <h1 class="fw-bold animate__animated animate__fadeInDown">Smart Electrical Products</h1>
                    <p class="lead animate__animated animate__fadeInUp">Future-ready electrical technology</p>
                </div>
            </div>
        </div>

    </div>

    <!-- Controls -->
    <button class="carousel-control-prev" type="button" data-bs-target="#productSlider" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#productSlider" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
    </button>

</div>



<!-- Introduction Section -->
<section class="section position-relative overflow-hidden" style="background: linear-gradient(135deg, #f0fdf4 0%, #dcfce7 100%);">
    <div class="container text-center" data-aos="fade-up">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <span class="badge bg-success bg-opacity-20 text-success text-uppercase tracking-wider mb-3 px-3 py-2 rounded-pill fw-bold">Your Trusted Partner</span>
                <h1 class="display-4 fw-bold mb-4" style="color: #166534;">Veg-Series <span class="text-dark">India Pvt. Ltd</span></h1>
                <div class="position-relative d-inline-block mb-4">
                    <p class="lead text-dark fw-medium lh-base" style="font-size: 1.5rem;">
                        Your Reliable Partner in Daily Business Supplies Serving <br>
                        <span class="text-success fw-bold">Hospitality & Institutional Sectors</span>
                    </p>
                    <div class="position-absolute start-50 translate-middle-x bottom-0 w-50 h-1 bg-success rounded-pill" style="opacity: 0.3;"></div>
                </div>
                <p class="text-muted fs-5 mx-auto" style="max-width: 800px;">
                    We are dedicated to streamlining your supply chain with premium quality fresh produce and daily essentials, ensuring your business never stops.
                </p>
            </div>
        </div>
    </div>
</section>





<!-- About Section -->
<section class="section" style="background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);">
    <div class="container-fluid px-4">
        <div class="row align-items-center">
            <div class="col-lg-6" data-aos="fade-right">
                <div class="image-wrapper position-relative">
                    <img src="assets/images/vegetables-1.jpg" alt="Fresh Vegetables" class="img-fluid rounded-3 shadow-lg hover-lift">
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <div class="ps-lg-4">
                    <h2 class="mb-4">About <span class="gradient-text">Veg-Series</span></h2>
                    <p class="lead">We focus on freshness, hygiene, and reliability through a daily procurement model that ensures consistent quality.</p>
                    <p>Backed by over 25 years of combined industry experience, <strong class="text-primary">Veg-Series India Pvt. Ltd.</strong> is a trusted Private Limited company serving multiple industries with dependable B2B solutions.</p>
                    <ul class="list-unstyled mt-4">
                        <li class="mb-3"><i class="fas fa-check-circle text-success me-2"></i> Quality Assured Products</li>
                        <li class="mb-3"><i class="fas fa-check-circle text-success me-2"></i> Competitive Pricing</li>
                        <li class="mb-3"><i class="fas fa-check-circle text-success me-2"></i> Expert Team</li>
                        <li class="mb-3"><i class="fas fa-check-circle text-success me-2"></i> Customer Satisfaction</li>
                    </ul>
                    <a href="about.php" class="btn btn-primary mt-3">Learn More</a>
                </div>
            </div>
        </div>
    </div>
</section>





<!-- Who We Serve Section -->
<section class="section position-relative pt-0 pb-5">
    <!-- Dark Green Header Background -->
    <div class="bg-dark-green position-absolute top-0 start-0 w-100" style="height: 350px; background-color: #022c22; z-index: 0;">
        <!-- Optional pattern or overlay can go here -->
        <div class="position-absolute w-100 h-100" style="background-image: url('data:image/svg+xml,%3Csvg width=\'60\' height=\'60\' viewBox=\'0 0 60 60\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cg fill=\'none\' fill-rule=\'evenodd\'%3E%3Cg fill=\'%23064e3b\' fill-opacity=\'0.1\'%3E%3Cpath d=\'M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>
    </div>

    <div class="container position-relative" style="z-index: 1;">
        <!-- Header Content -->
        <div class="text-center pt-5 pb-5 mb-4">
            <h2 class="display-5 fw-bold text-white mb-3">Who We <span style="color: #f97316;">Serve</span></h2>
            <p class="lead text-white-50 mx-auto mb-0" style="max-width: 800px; font-size: 1.1rem;">
                We specialize in supplying bulk fresh fruits and vegetables to businesses that value quality, consistency, and reliability.
            </p>
        </div>

        <!-- Cards Grid -->
        <div class="row g-4">
            <!-- 1. Corporate Wellness -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="card h-100 border-0 shadow-sm rounded-4 p-4 hover-lift">
                    <div class="mb-4">
                        <div class="icon-box-lg bg-white border border-2 border-danger border-opacity-10 text-danger rounded-circle d-flex align-items-center justify-content-center" style="width: 64px; height: 64px; color: #ea580c !important;">
                            <i class="fas fa-apple-alt fa-2x"></i>
                        </div>
                    </div>
                    <h4 class="fw-bold mb-3 h5">Corporate Wellness</h4>
                    <p class="text-muted small lh-lg mb-0">Healthier teams, happier workdays. From pantry-ready fruits to vitamin-rich juices, our supplies enhance office nutrition programs.</p>
                </div>
            </div>

            <!-- 2. Restaurants -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="card h-100 border-0 shadow-sm rounded-4 p-4 hover-lift">
                    <div class="mb-4">
                        <div class="icon-box-lg bg-white border border-2 border-danger border-opacity-10 text-danger rounded-circle d-flex align-items-center justify-content-center" style="width: 64px; height: 64px; color: #ea580c !important;">
                            <i class="fas fa-utensils fa-2x"></i>
                        </div>
                    </div>
                    <h4 class="fw-bold mb-3 h5">Restaurants</h4>
                    <p class="text-muted small lh-lg mb-0">Elevate your meals with farm-fresh produce. We cater to small cafes, large kitchens, and everything in between with flexible packaging and fast delivery.</p>
                </div>
            </div>

            <!-- 3. Events & Catering -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="card h-100 border-0 shadow-sm rounded-4 p-4 hover-lift">
                    <div class="mb-4">
                        <div class="icon-box-lg bg-white border border-2 border-danger border-opacity-10 text-danger rounded-circle d-flex align-items-center justify-content-center" style="width: 64px; height: 64px; color: #ea580c !important;">
                            <i class="fas fa-concierge-bell fa-2x"></i>
                        </div>
                    </div>
                    <h4 class="fw-bold mb-3 h5">Events & Catering</h4>
                    <p class="text-muted small lh-lg mb-0">From weddings to corporate banquets, we provide high-volume fresh produce for every type of event — sorted, packed, and ready to serve.</p>
                </div>
            </div>

            <!-- 4. Healthcare & Institutions -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                <div class="card h-100 border-0 shadow-sm rounded-4 p-4 hover-lift">
                    <div class="mb-4">
                        <div class="icon-box-lg bg-white border border-2 border-danger border-opacity-10 text-danger rounded-circle d-flex align-items-center justify-content-center" style="width: 64px; height: 64px; color: #ea580c !important;">
                            <i class="fas fa-heartbeat fa-2x"></i>
                        </div>
                    </div>
                    <h4 class="fw-bold mb-3 h5">Healthcare & Institutions</h4>
                    <p class="text-muted small lh-lg mb-0">Hygiene, safety, and nutrition — guaranteed. Our produce meets the stringent needs of healthcare and large-scale institutions.</p>
                </div>
            </div>

            <!-- 5. Cloud Kitchens -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                <div class="card h-100 border-0 shadow-sm rounded-4 p-4 hover-lift">
                    <div class="mb-4">
                        <div class="icon-box-lg bg-white border border-2 border-danger border-opacity-10 text-danger rounded-circle d-flex align-items-center justify-content-center" style="width: 64px; height: 64px; color: #ea580c !important;">
                            <i class="fas fa-cubes fa-2x"></i>
                        </div>
                    </div>
                    <h4 class="fw-bold mb-3 h5">Cloud Kitchens</h4>
                    <p class="text-muted small lh-lg mb-0">We support fast-paced kitchen setups with consistent supply of fresh fruits and vegetables—clean, sorted, and suited for multi-brand culinary operations.</p>
                </div>
            </div>

            <!-- 6. Corporate Gifting -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
                <div class="card h-100 border-0 shadow-sm rounded-4 p-4 hover-lift">
                    <div class="mb-4">
                        <div class="icon-box-lg bg-white border border-2 border-danger border-opacity-10 text-danger rounded-circle d-flex align-items-center justify-content-center" style="width: 64px; height: 64px; color: #ea580c !important;">
                            <i class="fas fa-gift fa-2x"></i>
                        </div>
                    </div>
                    <h4 class="fw-bold mb-3 h5">Corporate Gifting</h4>
                    <p class="text-muted small lh-lg mb-0">Custom curated fruit baskets and hampers — a healthy gift that leaves a lasting impression.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Veg Series Spotlight -->
<section class="section position-relative" style="background: linear-gradient(to bottom, #ffffff, #f8f9fa);">
    <div class="container">
        <div class="section-title text-center mb-5" data-aos="fade-up">
            <span class="badge bg-success bg-opacity-10 text-success text-uppercase tracking-wider mb-2 px-3 py-2 rounded-pill">Premium Collection</span>
            <h2 class="display-5 fw-bold text-dark">The Veg Series Experience</h2>
            <p class="lead text-muted mx-auto" style="max-width: 600px;">Discover the purity of nature with our exclusive range of hand-picked, organically grown produce.</p>
        </div>

        <div class="row g-4">
            <!-- Feature 1 -->
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                <div class="veg-spotlight-card h-100 position-relative overflow-hidden rounded-4 shadow-sm bg-white group">
                    <div class="card-img-wrapper position-relative overflow-hidden" style="height: 250px;">
                        <img src="assets/images/premium_farm.png" alt="Farm Fresh" class="img-fluid w-100 h-100 object-fit-cover transition-scale">
                        <div class="overlay-gradient position-absolute inset-0 "></div>
                    </div>
                    <div class="card-body p-4 position-relative z-1">
                        <div class="icon-box bg-white text-success rounded-circle shadow-sm d-flex align-items-center justify-content-center mb-3" style="width: 50px; height: 50px; margin-top: -50px;">
                            <i class="fas fa-tractor fa-lg"></i>
                        </div>
                        <h3 class="h4 fw-bold mb-2">Farm Fresh Harvest</h3>
                        <p class="text-muted mb-3">Directly sourcing from trusted partner farms to ensure maximum nutritional value and taste.</p>
                        <a href="products.php" class="text-success fw-bold text-decoration-none slide-link">Explore Harvest <i class="fas fa-arrow-right ms-1"></i></a>
                    </div>
                </div>
            </div>

            <!-- Feature 2 -->
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                <div class="veg-spotlight-card h-100 position-relative overflow-hidden rounded-4 shadow-sm bg-white group mt-lg-n4">
                    <div class="card-img-wrapper position-relative overflow-hidden" style="height: 250px;">
                        <img src="assets/images/harvest_basket.png" alt="Certified Organic" class="img-fluid w-100 h-100 object-fit-cover transition-scale">
                        <div class="overlay-gradient position-absolute inset-0"></div>
                    </div>
                    <div class="card-body p-4 position-relative z-1">
                        <div class="icon-box bg-white text-success rounded-circle shadow-sm d-flex align-items-center justify-content-center mb-3" style="width: 50px; height: 50px; margin-top: -50px;">
                            <i class="fas fa-certificate fa-lg"></i>
                        </div>
                        <h3 class="h4 fw-bold mb-2">Certified Organic</h3>
                        <p class="text-muted mb-3">100% chemical-free produce, rigorously tested to meet global organic farming standards.</p>
                        <a href="products.php" class="text-success fw-bold text-decoration-none slide-link">View Certificates <i class="fas fa-arrow-right ms-1"></i></a>
                    </div>
                </div>
            </div>

            <!-- Feature 3 -->
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
                <div class="veg-spotlight-card h-100 position-relative overflow-hidden rounded-4 shadow-sm bg-white group">
                    <div class="card-img-wrapper position-relative overflow-hidden" style="height: 250px;">
                        <img src="assets/images/modern_tech.png" alt="Sustainable" class="img-fluid w-100 h-100 object-fit-cover transition-scale">
                        <div class="overlay-gradient position-absolute inset-0"></div>
                    </div>
                    <div class="card-body p-4 position-relative z-1">
                        <div class="icon-box bg-white text-success rounded-circle shadow-sm d-flex align-items-center justify-content-center mb-3" style="width: 50px; height: 50px; margin-top: -50px;">
                            <i class="fas fa-leaf fa-lg"></i>
                        </div>
                        <h3 class="h4 fw-bold mb-2">Sustainable Future</h3>
                        <p class="text-muted mb-3">Commitment to eco-friendly packaging and carbon-neutral logistics for a greener planet.</p>
                        <a href="products.php" class="text-success fw-bold text-decoration-none slide-link">Our Impact <i class="fas fa-arrow-right ms-1"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
.veg-spotlight-card {
    border: 1px solid rgba(0,0,0,0.05);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}
.veg-spotlight-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 20px 40px rgba(0,0,0,0.1);
}
.transition-scale {
    transition: transform 0.5s ease;
}
.veg-spotlight-card:hover .transition-scale {
    transform: scale(1.1);
}
.slide-link i {
    transition: transform 0.3s ease;
}
.veg-spotlight-card:hover .slide-link i {
    transform: translateX(5px);
}
.overlay-gradient {
    background: linear-gradient(to bottom, transparent 0%, rgba(0,0,0,0.2) 100%);
    pointer-events: none;
}
</style>


<!-- Features Section -->
<section class="section bg-white">
    <div class="container-fluid px-4">
        <div class="section-title" data-aos="fade-up">
            <h2>Why Choose Us?</h2>
            <p>We provide the best services and products to meet your needs</p>
        </div>
        
        <div class="row g-4">
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="card-modern text-center">
                    <div class="card-icon mx-auto" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);">
                        <i class="fas fa-box"></i>
                    </div>
                    <h3>Premium Products</h3>
                    <p>High-quality products sourced from the best suppliers worldwide</p>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="card-modern text-center">
                    <div class="card-icon mx-auto" style="background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);">
                        <i class="fas fa-shipping-fast"></i>
                    </div>
                    <h3>Fast Delivery</h3>
                    <p>Quick and reliable delivery services across all locations</p>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="card-modern text-center">
                    <div class="card-icon mx-auto" style="background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);">
                        <i class="fas fa-headset"></i>
                    </div>
                    <h3>24/7 Support</h3>
                    <p>Round-the-clock customer support for all your queries</p>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
                <div class="card-modern text-center">
                    <div class="card-icon mx-auto" style="background: linear-gradient(135deg, #43e97b 0%, #38f9d7 100%);">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3>Secure & Trusted</h3>
                    <p>100% secure transactions with trusted payment methods</p>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- FAQ Section -->
<section class="section bg-white position-relative">
    <div class="container" data-aos="fade-up">
        <div class="row align-items-center g-5">
            <!-- Left Side: Image -->
            <div class="col-lg-5 d-none d-lg-block">
                <div class="position-relative">
                    <div class="position-absolute top-0 start-0 w-100 h-100 bg-primary rounded-4" style="transform: rotate(-3deg); opacity: 0.1; z-index: 0;"></div>
                    <img src="assets/images/pexels-nc-farm-bureau-mark-2255999.jpg" alt="FAQ" class="img-fluid rounded-4 shadow-lg position-relative" style="z-index: 1;">
                </div>
            </div>

            <!-- Right Side: FAQ Accordion -->
            <div class="col-lg-7">
                <span class="badge bg-primary bg-opacity-10 text-primary mb-3">Support</span>
                <h2 class="display-5 fw-bold mb-3">Frequently Asked Questions</h2>
                <p class="text-muted mb-5">Find answers to common questions about our services, ordering process, and delivery options.</p>

                <div class="accordion accordion-flush" id="faqAccordion">
                    
                    <!-- FAQ 1 -->
                    <div class="accordion-item border-0 mb-3 shadow-sm rounded-3 overflow-hidden">
                        <h2 class="accordion-header">
                            <button class="accordion-button fw-bold bg-light collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                                How do I place a large quantity order?
                            </button>
                        </h2>
                        <div id="faq1" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body text-muted">
                                You can easily request a quote via our "Request a Callback" form below, or contact our sales team directly at +91 98765 43210. We specialize in B2B bulk orders.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 2 -->
                    <div class="accordion-item border-0 mb-3 shadow-sm rounded-3 overflow-hidden">
                        <h2 class="accordion-header">
                            <button class="accordion-button fw-bold bg-light collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                                What types of fruits and vegetables do you offer in large quantities?
                            </button>
                        </h2>
                        <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body text-muted">
                                We offer a comprehensive range of locally sourced and exotic fruits and vegetables. Check out our Products page or catalogue for the full list.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 3 -->
                    <div class="accordion-item border-0 mb-3 shadow-sm rounded-3 overflow-hidden">
                        <h2 class="accordion-header">
                            <button class="accordion-button fw-bold bg-light collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                                How soon can I expect delivery?
                            </button>
                        </h2>
                        <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body text-muted">
                                We pride ourselves on fast delivery. For most orders within Delhi NCR, we offer next-day delivery to ensure freshness.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 4 -->
                    <div class="accordion-item border-0 mb-3 shadow-sm rounded-3 overflow-hidden">
                        <h2 class="accordion-header">
                            <button class="accordion-button fw-bold bg-light collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">
                                Can I customize my large quantity order?
                            </button>
                        </h2>
                        <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body text-muted">
                                Absolutely! We understand every business has unique needs. We can tailor the assortment and packaging to suit your specific requirements.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 5 -->
                    <div class="accordion-item border-0 mb-3 shadow-sm rounded-3 overflow-hidden">
                        <h2 class="accordion-header">
                            <button class="accordion-button fw-bold bg-light collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq5">
                                What are your payment options?
                            </button>
                        </h2>
                        <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body text-muted">
                                We accept bank transfers (NEFT/RTGS), cheques, and major UPI platforms. Credit terms may be available for regular partners.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 6 -->
                    <div class="accordion-item border-0 mb-3 shadow-sm rounded-3 overflow-hidden">
                        <h2 class="accordion-header">
                            <button class="accordion-button fw-bold bg-light collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq6">
                                Is there a minimum order quantity for large purchases?
                            </button>
                        </h2>
                        <div id="faq6" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body text-muted">
                                Yes, being a B2B supplier, we have a minimum order value/quantity policy to maintain operational efficiency. Please contact us for details.
                            </div>
                        </div>
                    </div>

                     <!-- FAQ 7 -->
                     <div class="accordion-item border-0 mb-3 shadow-sm rounded-3 overflow-hidden">
                        <h2 class="accordion-header">
                            <button class="accordion-button fw-bold bg-light collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq7">
                                What if I have a problem with my order?
                            </button>
                        </h2>
                        <div id="faq7" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body text-muted">
                                Customer satisfaction is our priority. If you face any issues with quality or quantity, please report it within 24 hours for a prompt resolution.
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<!-- Enquiry Form Section -->
<section class="section bg-light position-relative overflow-hidden" id="enquiry-form">
    <div class="container" data-aos="fade-up">
        <div class="row align-items-center g-5">
            <!-- Left Side: Content -->
            <div class="col-lg-5">
                <span class="badge bg-primary bg-opacity-10 text-primary mb-3">Get in Touch</span>
                <h2 class="display-5 fw-bold mb-4">Have Questions? <br>Let's Connect!</h2>
                <p class="lead text-muted mb-5">Fill out the form and our team will get back to you within 24 hours.</p>
                
                <div class="d-flex align-items-center mb-4">
                    <div class="icon-box bg-white shadow-sm rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 50px; height: 50px;">
                        <i class="fas fa-phone-alt text-primary"></i>
                    </div>
                    <div>
                        <h6 class="mb-0 fw-bold">Call Us 24/7</h6>
                        <p class="mb-0 text-muted">+91 98765 43210</p>
                    </div>
                </div>
                
                <div class="d-flex align-items-center">
                    <div class="icon-box bg-white shadow-sm rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 50px; height: 50px;">
                        <i class="fas fa-envelope text-primary"></i>
                    </div>
                    <div>
                        <h6 class="mb-0 fw-bold">Email Us</h6>
                        <p class="mb-0 text-muted"><?php echo SITE_EMAIL; ?></p>
                    </div>
                </div>
            </div>

            <!-- Right Side: Form -->
            <div class="col-lg-7">
                <div class="card shadow-lg border-0 rounded-4 overflow-hidden">
                    <div class="card-header bg-primary text-white p-4 text-center">
                        <h4 class="mb-0 text-white">Request a Callback</h4>
                    </div>
                    <div class="card-body p-4 p-md-5 bg-white">
                        <form method="POST" action="contact.php">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label class="form-label fw-bold small text-uppercase">Your Name</label>
                                    <input type="text" class="form-control form-control-lg bg-light border-0" name="name" placeholder="John Doe" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label fw-bold small text-uppercase">Mobile Number</label>
                                    <input type="tel" class="form-control form-control-lg bg-light border-0" name="mobile" placeholder="+91 98765 43210" pattern="[0-9]{10}" required>
                                </div>
                                <div class="col-12">
                                    <label class="form-label fw-bold small text-uppercase">Email Address</label>
                                    <input type="email" class="form-control form-control-lg bg-light border-0" name="email" placeholder="name@example.com" required>
                                </div>
                                <div class="col-12">
                                    <label class="form-label fw-bold small text-uppercase">Subject</label>
                                    <select class="form-select form-select-lg bg-light border-0" name="subject">
                                        <option value="General Inquiry">General Inquiry</option>
                                        <option value="Product Order">Product Order</option>
                                        <option value="Business Partnership">Business Partnership</option>
                                        <option value="Support">Support</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <label class="form-label fw-bold small text-uppercase">Message</label>
                                    <textarea class="form-control form-control-lg bg-light border-0" name="message" rows="3" placeholder="How can we help you?" required></textarea>
                                </div>
                                <div class="col-12 mt-4">
                                    <button type="submit" class="btn btn-primary btn-lg w-100 py-3 fw-bold shadow-sm">Submit Request <i class="fas fa-paper-plane ms-2"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Stats Section -->
<section class="section bg-white">
    <div class="container-fluid px-4">
        <div class="row text-center g-4">
            <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="100">
                <div class="stat-card">
                    <h2 class="counter gradient-text" data-target="500">0</h2>
                    <p class="text-muted mb-0">Happy Clients</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="200">
                <div class="stat-card">
                    <h2 class="counter text-gradient-secondary" data-target="1000">0</h2>
                    <p class="text-muted mb-0">Products</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="300">
                <div class="stat-card">
                    <h2 class="counter gradient-text" data-target="50">0</h2>
                    <p class="text-muted mb-0">Team Members</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="400">
                <div class="stat-card">
                    <h2 class="counter text-gradient-secondary" data-target="15">0</h2>
                    <p class="text-muted mb-0">Years Experience</p>
                </div>
            </div>
        </div>

    </div>
</section>


<!-- Corporate Identity & Leadership Section -->
<section class="section bg-light position-relative">
    <div class="container" data-aos="fade-up">
        <div class="row g-5">
            <!-- Left Side: Official Verification -->
            <div class="col-lg-5">
                <span class="badge bg-success bg-opacity-10 text-success mb-3 px-3 py-2 rounded-pill tracking-wider">OFFICIAL VERIFICATION</span>
                <h2 class="display-6 fw-bold mb-4">Corporate Identity</h2>
                <p class="text-muted mb-4 lead">Officially registered and verified entity by the Government of India.</p>
                
                <div class="card border-0 shadow-sm rounded-4 mb-4 overflow-hidden">
                    <div class="card-body p-4 position-relative">
                        <div class="position-absolute top-0 end-0 p-3 opacity-10">
                            <i class="fas fa-certificate fa-4x text-success"></i>
                        </div>
                        <h6 class="text-uppercase text-muted small fw-bold mb-2">Legal Name</h6>
                        <h4 class="fw-bold text-dark mb-4">VEG-SERIES INDIA PRIVATE LIMITED</h4>
                        
                        <div class="d-flex align-items-center mb-3">
                            <div class="icon-box bg-success bg-opacity-10 text-success rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 40px; height: 40px;">
                                <i class="fas fa-check"></i>
                            </div>
                            <div>
                                <h6 class="mb-0 fw-bold">Government Verified</h6>
                                <span class="text-muted small">Registered Entity</span>
                            </div>
                        </div>
                        
                        <hr class="my-4 border-light">
                        
                        <div class="d-flex align-items-center justify-content-between flex-wrap gap-3">
                            <div>
                                <h6 class="text-uppercase text-muted small fw-bold mb-1">GSTIN</h6>
                                <span class="badge bg-dark text-white p-2 font-monospace fs-6">06AAICV3524D1ZK</span>
                            </div>
                            <div>
                                <h6 class="text-uppercase text-muted small fw-bold mb-1">Status</h6>
                                <span class="badge bg-success bg-opacity-10 text-success p-2">Active & Compliant</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Side: Leadership -->
            <div class="col-lg-7">
                <div class="ps-lg-4">
                    <span class="badge bg-primary bg-opacity-10 text-primary mb-3 px-3 py-2 rounded-pill tracking-wider">LEADERSHIP</span>
                    <h2 class="display-6 fw-bold mb-4">Key Management</h2>
                    <p class="text-muted mb-4 lead">Driven by experienced leadership committed to excellence and integrity.</p>
                    
                    <div class="row g-4">
                        <!-- Director 1 -->
                        <div class="col-md-6">
                            <div class="card border-0 shadow-sm rounded-4 h-100 hover-lift text-center p-4">
                                <div class="avatar mx-auto mb-3 bg-primary bg-opacity-10 text-primary rounded-circle d-flex align-items-center justify-content-center fw-bold fs-3" style="width: 80px; height: 80px;">
                                    J
                                </div>
                                <h4 class="fw-bold mb-1">Jatin</h4>
                                <span class="badge bg-primary bg-opacity-10 text-primary mb-3">DIRECTOR</span>
                                <div class="mt-auto">
                                    <p class="text-muted small mb-0"><i class="fas fa-map-marker-alt me-2 text-danger"></i>Resident of Haryana</p>
                                </div>
                            </div>
                        </div>

                        <!-- Director 2 -->
                        <div class="col-md-6">
                            <div class="card border-0 shadow-sm rounded-4 h-100 hover-lift text-center p-4">
                                <div class="avatar mx-auto mb-3 bg-secondary bg-opacity-10 text-secondary rounded-circle d-flex align-items-center justify-content-center fw-bold fs-3" style="width: 80px; height: 80px;">
                                    M
                                </div>
                                <h4 class="fw-bold mb-1">Meghna Lakra</h4>
                                <span class="badge bg-secondary bg-opacity-10 text-secondary mb-3">DIRECTOR</span>
                                <div class="mt-auto">
                                    <p class="text-muted small mb-0"><i class="fas fa-map-marker-alt me-2 text-danger"></i>Resident of Haryana</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Map Section -->
<section class="section p-0">
    <div class="map-container">
        <iframe src="https://maps.google.com/maps?q=Ground+Floor%2C+116%2C+Sector+80%2C+Near+Jagjeet+Gas+Agency%2C+Village+Badoli%2C+Piala%2C+Faridabad%2C+Haryana+121004&t=&z=15&ie=UTF8&iwloc=&output=embed" 
                width="100%" 
                height="450" 
                style="border:0;" 
                allowfullscreen="" 
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">
        </iframe>
    </div>
</section>

<style>
.map-container {
    position: relative;
    overflow: hidden;
    line-height: 0; /* Removes potential bottom gap */
}

.map-container iframe {
    display: block;
    width: 100%;
}
</style>

<?php require_once 'includes/footer.php'; ?>
