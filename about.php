<?php 
require_once 'includes/config.php';
$page_title = "About Us";
$page_description = "Learn more about Hyper2 Enterprise - Our mission, vision, and values";
require_once 'includes/header.php';
require_once 'includes/navbar.php';
?>

<!-- Page Header -->
<!-- Page Header -->
<section class="section-banner position-relative py-5 text-center text-white overflow-hidden" style="min-height: 400px;">
    <div class="banner-bg-animation" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: url('assets/images/banner3.jpg') center/cover no-repeat; z-index: 0;"></div>
    <div class="overlay" style="background: rgba(0,0,0,0.6); position: absolute; inset: 0; z-index: 1;"></div>
    <div class="container position-relative py-5" style="z-index: 2;">
        <h1 class="display-3 fw-bold mb-3 text-white" data-aos="zoom-in" style="text-shadow: 2px 2px 4px rgba(0,0,0,0.5);">About Us</h1>
        <p class="lead mb-0 fs-4 text-white" data-aos="zoom-in" data-aos-delay="100" style="text-shadow: 1px 1px 2px rgba(0,0,0,0.5);">Discover our story, mission, and commitment to excellence</p>
    </div>
</section>

<style>
@keyframes bannerZoom {
    0% { transform: scale(1); }
    100% { transform: scale(1.15); }
}
.banner-bg-animation {
    animation: bannerZoom 10s infinite alternate cubic-bezier(0.4, 0, 0.2, 1);
}
</style>

<!-- About Content -->
<section class="section bg-white">
    <div class="container">
        <div class="row align-items-center mb-5">
            <div class="col-lg-6" data-aos="fade-right">
                <div class="image-wrapper position-relative">
                    <img src="assets/images/vegetables-1.jpg" alt="Our Company" class="img-fluid rounded-3 shadow-lg hover-lift">
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <div class="ps-lg-4">
                    <h2 class="mb-4">Our <span class="gradient-text">Transformation Story</span></h2>
                    <h5 class="text-primary mb-3 text-uppercase fw-bold" style="letter-spacing: 1px;">From Vision to D2B Leaders</h5>
                    <p class="lead">Founded with a vision to revolutionize the supply chain, <strong class="text-dark"></strong> has evolved into a powerhouse of innovation with the launch of <strong class="text-success">The Veg Series</strong>.</p>
                    <p>Our journey began with a singular mission: to bridge the gap between farm-fresh quality and business needs. Recognizing the demand for transparent, high-quality organic produce, we pioneered our <strong class="text-primary">Direct-to-Business (D2B)</strong> model. This strategic evolution allowed us to eliminate middlemen, ensuring that our partners receive only the freshest, nutrient-rich produce within 24 hours of harvest.</p>
                    <p>Today, we stand as industry leaders not just in logistics, but in trust. Whether it's our sustainable farming partnerships or our commitment to zero-compromise quality, every step we take is designed to empower your business. At  we don't just deliver products; we deliver promises of excellence, integrity, and growth.</p>
                </div>
            </div>
        </div>
        
        <div class="row align-items-center">
            <div class="col-lg-6 order-lg-2" data-aos="fade-left">
                <div class="image-wrapper position-relative">
                    <img src="assets/images/schnitzel.jpg" alt="Our Team" class="img-fluid rounded-3 shadow-lg hover-lift">
                </div>
            </div>
            <div class="col-lg-6 order-lg-1" data-aos="fade-right">
                <div class="pe-lg-4">
                    <h2 class="mb-4">Meet The <span class="gradient-text">Experts</span></h2>
                    <h5 class="text-primary mb-3 text-uppercase fw-bold" style="letter-spacing: 1px;">Driven by Passion, Defined by Quality</h5>
                    <p class="lead">Behind every successful delivery is a team of relentless professionals who breathe life into our vision of excellence.</p>
                    <p>Our workforce is a blend of seasoned agronomists, logistics experts, and customer success champions. United by a shared commitment to sustainable agriculture, we don't just move products; we manage trust. We continuously invest in advanced training, ensuring our team remains at the forefront of global food safety standards and supply chain innovations.</p>
                    <p>From the fields to your facility, every member of the family plays a pivotal role. We are not just employees; we are partners in your growth, dedicated to ensuring that  is nothing short of exceptional.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Mission & Vision -->
<section class="section" style="background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);">
    <div class="container">
        <div class="section-title" data-aos="fade-up">
            <h2>Mission & Vision</h2>
            <p>Our guiding principles and future aspirations</p>
        </div>
        
        <div class="row g-4">
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                <div class="card-modern">
                    <div class="card-icon" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);">
                        <i class="fas fa-bullseye"></i>
                    </div>
                    <h3>Our Mission</h3>
                    <p>To provide exceptional products and services that exceed customer expectations while maintaining the highest standards of quality, integrity, and professionalism. We strive to build long-lasting relationships based on trust and mutual success.</p>
                </div>
            </div>
            
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                <div class="card-modern">
                    <div class="card-icon" style="background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);">
                        <i class="fas fa-eye"></i>
                    </div>
                    <h3>Our Vision</h3>
                    <p>To be the industry leader recognized for innovation, quality, and customer satisfaction. We envision a future where our products and services set the benchmark for excellence and help our clients achieve their goals.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Core Values -->
<section class="section bg-white">
    <div class="container">
        <div class="section-title" data-aos="fade-up">
            <h2>Our Core Values</h2>
            <p>The principles that guide everything we do</p>
        </div>
        
        <div class="row g-4">
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="card-modern text-center">
                    <div class="card-icon mx-auto" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);">
                        <i class="fas fa-award"></i>
                    </div>
                    <h3>Quality</h3>
                    <p>We never compromise on quality and always deliver the best products and services</p>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="card-modern text-center">
                    <div class="card-icon mx-auto" style="background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);">
                        <i class="fas fa-handshake"></i>
                    </div>
                    <h3>Integrity</h3>
                    <p>Honesty and transparency are at the core of all our business relationships</p>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="card-modern text-center">
                    <div class="card-icon mx-auto" style="background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);">
                        <i class="fas fa-lightbulb"></i>
                    </div>
                    <h3>Innovation</h3>
                    <p>We continuously innovate to stay ahead and provide cutting-edge solutions</p>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                <div class="card-modern text-center">
                    <div class="card-icon mx-auto" style="background: linear-gradient(135deg, #43e97b 0%, #38f9d7 100%);">
                        <i class="fas fa-heart"></i>
                    </div>
                    <h3>Customer Focus</h3>
                    <p>Our customers are at the heart of everything we do</p>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                <div class="card-modern text-center">
                    <div class="card-icon mx-auto" style="background: linear-gradient(135deg, #fa709a 0%, #fee140 100%);">
                        <i class="fas fa-users"></i>
                    </div>
                    <h3>Teamwork</h3>
                    <p>Together we achieve more through collaboration and mutual support</p>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
                <div class="card-modern text-center">
                    <div class="card-icon mx-auto" style="background: linear-gradient(135deg, #30cfd0 0%, #330867 100%);">
                        <i class="fas fa-leaf"></i>
                    </div>
                    <h3>Sustainability</h3>
                    <p>We are committed to sustainable and responsible business practices</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require_once 'includes/footer.php'; ?>
