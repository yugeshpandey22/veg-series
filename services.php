<?php 
require_once 'includes/config.php';
$page_title = "Services";
$page_description = "Explore our comprehensive range of professional services";
require_once 'includes/header.php';
require_once 'includes/navbar.php';
?>

<!-- Page Header -->
<section class="hero-section d-flex align-items-center justify-content-center position-relative overflow-hidden" style="min-height: 400px; padding: 5rem 0; color: white;">
    <div class="hero-bg-animation" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: url('assets/images/business.jpg') center/cover no-repeat; z-index: 0;"></div>
    <div class="position-absolute top-0 start-0 w-100 h-100" style="background: rgba(0,0,0,0.5); z-index: 1;"></div>
    <div class="container text-center position-relative" style="z-index: 2;">
        <h1 class="hero-title fw-bold mb-3 text-white" data-aos="zoom-in" style="font-size: 3.5rem; text-shadow: 2px 2px 4px rgba(0,0,0,0.5);">Our Services</h1>
        <p class="hero-subtitle lead mb-0" data-aos="zoom-in" data-aos-delay="200" style="font-size: 1.5rem; text-shadow: 1px 1px 2px rgba(0,0,0,0.5);">Comprehensive solutions tailored to your needs</p>
    </div>
</section>

<style>
@keyframes heroZoom {
    0% { transform: scale(1); }
    100% { transform: scale(1.15); }
}
.hero-bg-animation {
    animation: heroZoom 10s infinite alternate cubic-bezier(0.4, 0, 0.2, 1);
}
</style>

<!-- Services Section -->
<section class="section bg-white">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="card-modern service-card">
                    <div class="card-icon" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);">
                        <i class="fas fa-truck"></i>
                    </div>
                    <h3>Product Supply</h3>
                    <p>We supply premium quality products across various categories. Our extensive network ensures timely delivery and competitive pricing for all your needs.</p>
                    <ul class="service-features">
                        <li><i class="fas fa-check-circle text-success"></i> Wide Product Range</li>
                        <li><i class="fas fa-check-circle text-success"></i> Quality Assurance</li>
                        <li><i class="fas fa-check-circle text-success"></i> Competitive Pricing</li>
                        <li><i class="fas fa-check-circle text-success"></i> Timely Delivery</li>
                    </ul>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="card-modern service-card">
                    <div class="card-icon" style="background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);">
                        <i class="fas fa-user-tie"></i>
                    </div>
                    <h3>Consulting Services</h3>
                    <p>Expert consultation to help you make informed decisions. Our team of professionals provides insights and recommendations tailored to your business.</p>
                    <ul class="service-features">
                        <li><i class="fas fa-check-circle text-success"></i> Business Analysis</li>
                        <li><i class="fas fa-check-circle text-success"></i> Market Research</li>
                        <li><i class="fas fa-check-circle text-success"></i> Strategic Planning</li>
                        <li><i class="fas fa-check-circle text-success"></i> Expert Guidance</li>
                    </ul>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="card-modern service-card">
                    <div class="card-icon" style="background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);">
                        <i class="fas fa-headset"></i>
                    </div>
                    <h3>24/7 Support</h3>
                    <p>Round-the-clock customer support to address your concerns. We're always available to ensure your satisfaction and resolve any issues promptly.</p>
                    <ul class="service-features">
                        <li><i class="fas fa-check-circle text-success"></i> 24/7 Availability</li>
                        <li><i class="fas fa-check-circle text-success"></i> Quick Response Time</li>
                        <li><i class="fas fa-check-circle text-success"></i> Multi-channel Support</li>
                        <li><i class="fas fa-check-circle text-success"></i> Expert Team</li>
                    </ul>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                <div class="card-modern service-card">
                    <div class="card-icon" style="background: linear-gradient(135deg, #43e97b 0%, #38f9d7 100%);">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <h3>Training & Development</h3>
                    <p>Comprehensive training programs to enhance skills and knowledge. We offer customized training sessions for teams and individuals.</p>
                    <ul class="service-features">
                        <li><i class="fas fa-check-circle text-success"></i> Customized Programs</li>
                        <li><i class="fas fa-check-circle text-success"></i> Experienced Trainers</li>
                        <li><i class="fas fa-check-circle text-success"></i> Hands-on Learning</li>
                        <li><i class="fas fa-check-circle text-success"></i> Certification</li>
                    </ul>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                <div class="card-modern service-card">
                    <div class="card-icon" style="background: linear-gradient(135deg, #fa709a 0%, #fee140 100%);">
                        <i class="fas fa-cogs"></i>
                    </div>
                    <h3>Custom Solutions</h3>
                    <p>Tailored solutions designed to meet your specific requirements. We work closely with you to develop customized strategies.</p>
                    <ul class="service-features">
                        <li><i class="fas fa-check-circle text-success"></i> Need Assessment</li>
                        <li><i class="fas fa-check-circle text-success"></i> Custom Development</li>
                        <li><i class="fas fa-check-circle text-success"></i> Implementation Support</li>
                        <li><i class="fas fa-check-circle text-success"></i> Ongoing Maintenance</li>
                    </ul>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
                <div class="card-modern service-card">
                    <div class="card-icon" style="background: linear-gradient(135deg, #30cfd0 0%, #330867 100%);">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Business Analytics</h3>
                    <p>Data-driven insights to optimize your business performance. Our analytics services help you make informed decisions.</p>
                    <ul class="service-features">
                        <li><i class="fas fa-check-circle text-success"></i> Data Analysis</li>
                        <li><i class="fas fa-check-circle text-success"></i> Performance Metrics</li>
                        <li><i class="fas fa-check-circle text-success"></i> Reporting Tools</li>
                        <li><i class="fas fa-check-circle text-success"></i> Actionable Insights</li>
                    </ul>
                </div>
            </div>

            <!-- New Service: Quality Checks -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="700">
                <div class="card-modern service-card">
                    <div class="card-icon" style="background: linear-gradient(135deg, #ff9a9e 0%, #fecfef 99%, #fecfef 100%);">
                        <i class="fas fa-leaf"></i>
                    </div>
                    <h3>Organic Certification</h3>
                    <p>We ensure all our Veg Series products meet strict organic farming standards. Complete traceability from farm to fork.</p>
                    <ul class="service-features">
                        <li><i class="fas fa-check-circle text-success"></i> Organic Verification</li>
                        <li><i class="fas fa-check-circle text-success"></i> Pesticide-Free Checks</li>
                        <li><i class="fas fa-check-circle text-success"></i> Freshness Guarantee</li>
                        <li><i class="fas fa-check-circle text-success"></i> Sustainability Audit</li>
                    </ul>
                </div>
            </div>

            <!-- New Service: Cold Chain -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="800">
                <div class="card-modern service-card">
                    <div class="card-icon" style="background: linear-gradient(135deg, #84fab0 0%, #8fd3f4 100%);">
                        <i class="fas fa-temperature-low"></i>
                    </div>
                    <h3>Cold Chain Logistics</h3>
                    <p>Advanced cold storage and transportation solutions to maintain the freshness and nutritional value of vegetables.</p>
                    <ul class="service-features">
                        <li><i class="fas fa-check-circle text-success"></i> Temperature Control</li>
                        <li><i class="fas fa-check-circle text-success"></i> Spoilage Prevention</li>
                        <li><i class="fas fa-check-circle text-success"></i> Hymidity Regulation</li>
                        <li><i class="fas fa-check-circle text-success"></i> Fast Transit</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Industries We Serve Section -->
<section class="section bg-light">
    <div class="container">
        <div class="section-title text-center mb-5" data-aos="fade-up">
            <span class="badge bg-primary bg-opacity-10 text-primary text-uppercase tracking-wider mb-2 px-3 py-2 rounded-pill">Our Markets</span>
            <h2 class="display-5 fw-bold">INDUSTRIES WE SERVE</h2>
            <p class="lead text-muted">Delivering excellence across diverse sectors</p>
        </div>

        <div class="row g-4 justify-content-center">
            <!-- 1. Hotels & Restaurants & Cafe -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="card-modern h-100 text-center p-4">
                    <div class="icon-box bg-primary bg-opacity-10 text-primary rounded-circle mx-auto mb-3 d-flex align-items-center justify-content-center" style="width: 70px; height: 70px;">
                        <i class="fas fa-utensils fa-2x"></i>
                    </div>
                    <h4 class="fw-bold mb-3">Hotels, Restaurants & Cafes</h4>
                </div>
            </div>

            <!-- 2. Corporate Offices & IT Parks -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="card-modern h-100 text-center p-4">
                    <div class="icon-box bg-primary bg-opacity-10 text-primary rounded-circle mx-auto mb-3 d-flex align-items-center justify-content-center" style="width: 70px; height: 70px;">
                        <i class="fas fa-building fa-2x"></i>
                    </div>
                    <h4 class="fw-bold mb-3">Corporate Offices & IT Parks</h4>
                </div>
            </div>

            <!-- 3. Hospitals & Healthcare Facilities -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="card-modern h-100 text-center p-4">
                    <div class="icon-box bg-primary bg-opacity-10 text-primary rounded-circle mx-auto mb-3 d-flex align-items-center justify-content-center" style="width: 70px; height: 70px;">
                        <i class="fas fa-hospital fa-2x"></i>
                    </div>
                    <h4 class="fw-bold mb-3">Hospitals & Healthcare Facilities</h4>
                </div>
            </div>

            <!-- 4. Hostels & PG Accommodations -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                <div class="card-modern h-100 text-center p-4">
                    <div class="icon-box bg-primary bg-opacity-10 text-primary rounded-circle mx-auto mb-3 d-flex align-items-center justify-content-center" style="width: 70px; height: 70px;">
                        <i class="fas fa-bed fa-2x"></i>
                    </div>
                    <h4 class="fw-bold mb-3">Hostels & PG Accommodations</h4>
                </div>
            </div>

            <!-- 5. Factories & Industrial Units -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                <div class="card-modern h-100 text-center p-4">
                    <div class="icon-box bg-primary bg-opacity-10 text-primary rounded-circle mx-auto mb-3 d-flex align-items-center justify-content-center" style="width: 70px; height: 70px;">
                        <i class="fas fa-industry fa-2x"></i>
                    </div>
                    <h4 class="fw-bold mb-3">Factories & Industrial Units</h4>
                </div>
            </div>

            <!-- 6. Housing Societies & Retail Stores -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
                <div class="card-modern h-100 text-center p-4">
                    <div class="icon-box bg-primary bg-opacity-10 text-primary rounded-circle mx-auto mb-3 d-flex align-items-center justify-content-center" style="width: 70px; height: 70px;">
                        <i class="fas fa-store fa-2x"></i>
                    </div>
                    <h4 class="fw-bold mb-3">Housing Societies & Retail Stores</h4>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
.bg-black {
    background-color: #000 !important;
}

/* Color Cycling Animation */
@keyframes hueRotate {
    0% { filter: hue-rotate(0deg); }
    100% { filter: hue-rotate(360deg); }
}

.animate-hue {
    animation: hueRotate 10s infinite linear;
}

.industry-card {
    background: rgba(255, 255, 255, 0.03); /* Very subtle glass effect */
    border: 1px solid rgba(74, 222, 128, 0.5); /* Stronger initial border for color visibility */
    border-radius: 20px;
    transition: all 0.4s ease;
    cursor: default;
}

.industry-card:hover {
    transform: translateY(-10px);
    background: rgba(255, 255, 255, 0.08);
    box-shadow: 0 10px 40px rgba(74, 222, 128, 0.4); /* Stronger glow */
}

.industry-number {
    width: 70px;
    height: 70px;
    border-radius: 50%;
    background: transparent;
    color: #4ade80; /* Neon Green text */
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 2rem;
    font-weight: 800;
    border: 3px solid #4ade80;
    box-shadow: 0 0 15px rgba(74, 222, 128, 0.4);
    transition: all 0.4s ease;
}

.industry-card:hover .industry-number {
    background: #4ade80;
    color: #000;
    transform: scale(1.1) rotate(5deg);
    box-shadow: 0 0 30px rgba(74, 222, 128, 0.8);
}

.industry-card h4 {
    transition: color 0.3s ease;
}

.industry-card:hover h4 {
    color: #4ade80 !important; /* Text turns green on hover */
}
</style>

<!-- CTA Section -->
<section class="section" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white;">
    <div class="container text-center" data-aos="fade-up">
        <h2 class="mb-4">Need a Custom Solution?</h2>
        <p class="lead mb-4">Let's discuss how we can help your business grow</p>
        <a href="contact.php" class="btn btn-light btn-lg">Get in Touch</a>
    </div>
</section>

<style>
.service-card {
    position: relative;
    background: #fff;
    border-radius: 16px;
    padding: 2rem;
    height: 100%;
    z-index: 1;
    overflow: hidden;
    border: 3px solid transparent; /* Essential for the background-clip trick */
    background: 
        linear-gradient(#fff, #fff) padding-box, /* White background inside */
        linear-gradient(135deg, #FF3CAC 0%, #784BA0 50%, #2B86C5 100%) border-box; /* Gradient border */
    box-shadow: 0 10px 30px rgba(0,0,0,0.08);
    transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
}

.service-card:hover {
    transform: translateY(-10px) scale(1.02);
    box-shadow: 0 20px 40px rgba(0,0,0,0.15);
    background: 
        linear-gradient(#fff, #fff) padding-box,
        linear-gradient(135deg, #FFD700 0%, #FF8C00 50%, #FF4500 100%) border-box; /* Fire/Gold gradient change */
}

/* Add a subtle pseudo-element for extra glow on hover */
.service-card::after {
    content: '';
    position: absolute;
    inset: 0;
    z-index: -1;
    background: linear-gradient(135deg, #FF3CAC 0%, #784BA0 50%, #2B86C5 100%);
    filter: blur(20px);
    opacity: 0;
    transition: opacity 0.4s ease, background 0.4s ease;
}

.service-card:hover::after {
    opacity: 0.5;
    background: linear-gradient(135deg, #FFD700 0%, #FF8C00 50%, #FF4500 100%); /* Match hover border */
}

.service-features {
    list-style: none;
    padding: 0;
    margin-top: 1.5rem;
}

.service-features li {
    margin-bottom: 0.75rem;
    padding-left: 0.5rem;
}

.service-features i {
    margin-right: 0.5rem;
}
</style>

<?php require_once 'includes/footer.php'; ?>
