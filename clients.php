<?php 
require_once 'includes/config.php';
$page_title = "Our Clients";
$page_description = "Trusted by leading businesses across industries";
require_once 'includes/header.php';
require_once 'includes/navbar.php';
?>

<!-- Page Header -->
<!-- Page Header -->
<section class="section-banner position-relative py-5 text-center text-white" style="background-image: url('assets/images/banner4.jpg'); background-size: cover; background-attachment: fixed; background-position: center;">
    <div class="overlay" style="background: rgba(0,0,0,0.6); position: absolute; inset: 0;"></div>
    <div class="container position-relative py-5">
        <h1 class="display-3 fw-bold mb-3 animate__animated animate__fadeInDown" data-aos="fade-up" style="color: #ffffff !important; text-shadow: 2px 2px 4px rgba(0,0,0,0.5);">Our Clients</h1>
        <p class="lead mb-0 fs-4 animate__animated animate__fadeInUp" data-aos="fade-up" data-aos-delay="100">Trusted by leading businesses across various industries</p>
    </div>
</section>

<!-- Client Stats -->
<section class="section bg-white">
    <div class="container">
        <div class="row text-center g-4">
            <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="100">
                <div class="stat-card">
                    <div class="stat-icon mb-3">
                        <i class="fas fa-building fa-3x gradient-text"></i>
                    </div>
                    <h2 class="counter gradient-text" data-target="500">0</h2>
                    <p class="text-muted mb-0">Active Clients</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="200">
                <div class="stat-card">
                    <div class="stat-icon mb-3">
                        <i class="fas fa-globe fa-3x text-gradient-secondary"></i>
                    </div>
                    <h2 class="counter text-gradient-secondary" data-target="20">0</h2>
                    <p class="text-muted mb-0">Countries</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="300">
                <div class="stat-card">
                    <div class="stat-icon mb-3">
                        <i class="fas fa-industry fa-3x gradient-text"></i>
                    </div>
                    <h2 class="counter gradient-text" data-target="15">0</h2>
                    <p class="text-muted mb-0">Industries</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="400">
                <div class="stat-card">
                    <div class="stat-icon mb-3">
                        <i class="fas fa-smile fa-3x text-gradient-secondary"></i>
                    </div>
                    <h2 class="counter text-gradient-secondary" data-target="98">0</h2>
                    <span class="h2">%</span>
                    <p class="text-muted mb-0">Satisfaction Rate</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Client Logos -->
<section class="section" style="background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);">
    <div class="container">
        <div class="section-title" data-aos="fade-up">
            <h2>Our Trusted Partnerships</h2>
            <p class="lead text-muted">Empowering industry leaders with reliable supply chain solutions</p>
        </div>
        
        <div class="row g-4">
            <?php for($i = 1; $i <= 12; $i++): ?>
                <div class="col-lg-3 col-md-4 col-sm-6" data-aos="fade-up" data-aos-delay="<?php echo $i * 50; ?>">
                    <div class="client-card">
                        <div class="client-logo">
                            <img src="assets/images/client-<?php echo $i; ?>.png" 
                                 alt="Client <?php echo $i; ?>" 
                                 class="img-fluid"
                                 onerror="this.parentElement.innerHTML='<div class=\'placeholder-logo\'><i class=\'fas fa-building fa-3x text-muted\'></i></div>'">
                        </div>
                    </div>
                </div>
            <?php endfor; ?>
        </div>
    </div>
</section>

<!-- D2B & Veg Series Section -->
<section class="section position-relative overflow-hidden" style="background-color: #fff;">
    <div class="container">
        <div class="row g-5 align-items-center">
            <!-- D2B Side -->
            <div class="col-lg-6" data-aos="fade-right">
                <div class="d2b-content p-5 bg-light rounded-4 shadow-sm position-relative overflow-hidden h-100 border border-light">
                    <div class="decorative-circle" style="position: absolute; top: -50px; right: -50px; width: 150px; height: 150px; background: rgba(var(--primary-rgb), 0.1); border-radius: 50%;"></div>
                    <span class="badge bg-primary mb-3 px-3 py-2 rounded-pill">B2B Excellence</span>
                    <h2 class="mb-4 fw-bold display-6">Direct to Business <span class="text-primary">Partnerships</span></h2>
                    <p class="text-muted mb-4 lead">Empowering businesses with streamlined supply chains and premium quality products directly from the source. Our D2B model ensures maximum efficiency and value for your enterprise.</p>
                    <ul class="list-unstyled mb-4">
                        <li class="mb-3 d-flex align-items-center"><i class="fas fa-check-circle text-success me-3 fa-lg"></i> <span class="fw-medium">Bulk Supply Management</span></li>
                        <li class="mb-3 d-flex align-items-center"><i class="fas fa-check-circle text-success me-3 fa-lg"></i> <span class="fw-medium">Custom Business Solutions</span></li>
                        <li class="mb-3 d-flex align-items-center"><i class="fas fa-check-circle text-success me-3 fa-lg"></i> <span class="fw-medium">Priority Support & Logistics</span></li>
                    </ul>
                    <a href="contact.php" class="btn btn-primary rounded-pill px-4 py-2">Partner With Us <i class="fas fa-arrow-right ms-2"></i></a>
                </div>
            </div>
            
            <!-- Veg Series Side -->
            <div class="col-lg-6" data-aos="fade-left">
                <div class="veg-series-card text-white p-5 rounded-4 position-relative shadow-lg" style="background: linear-gradient(135deg, #11998e 0%, #38ef7d 100%); overflow: hidden;">
                    <!-- Abstract Background Shapes -->
                    <div style="position: absolute; top: -20%; left: -20%; width: 300px; height: 300px; background: rgba(255,255,255,0.1); border-radius: 50%;"></div>
                    <div style="position: absolute; bottom: -20%; right: -20%; width: 200px; height: 200px; background: rgba(255,255,255,0.1); border-radius: 50%;"></div>
                    
                    <div class="position-relative z-2">
                        <div class="d-flex align-items-center mb-4">
                            <div class="icon-box bg-white text-success rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 60px; height: 60px;">
                                <i class="fas fa-leaf fa-2x"></i>
                            </div>
                            <h2 class="h1 fw-bold mb-0">The Veg Series</h2>
                        </div>
                        <p class="lead mb-4" style="opacity: 0.95;">Freshness Redefined. Experience the finest selection of organic and farm-fresh produce delivered with care. Elevate your business offerings with our premium green line.</p>
                        
                        <div class="row g-3 mt-2">
                            <div class="col-6">
                                <div class="glass-stat p-3 rounded-3" style="background: rgba(255,255,255,0.2); backdrop-filter: blur(5px);">
                                    <h3 class="h2 fw-bold mb-1">100%</h3>
                                    <small class="text-uppercase tracking-wider" style="letter-spacing: 1px; font-size: 0.75rem;">Organic Certified</small>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="glass-stat p-3 rounded-3" style="background: rgba(255,255,255,0.2); backdrop-filter: blur(5px);">
                                    <h3 class="h2 fw-bold mb-1">24h</h3>
                                    <small class="text-uppercase tracking-wider" style="letter-spacing: 1px; font-size: 0.75rem;">Farm to Business</small>
                                </div>
                            </div>
                        </div>
                        
                        <div class="mt-4 pt-2">
                            <button class="btn btn-light text-success fw-bold rounded-pill w-100">Explore Veg Series</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Excellence Process -->
<section class="section bg-light position-relative">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <span class="text-primary fw-bold text-uppercase tracking-wider">How We Work</span>
            <h2 class="display-5 fw-bold mt-2">The Standard of Excellence</h2>
        </div>
        
        <div class="row position-relative g-4">
            <!-- Connecting Line (Desktop) -->
            <div class="d-none d-lg-block position-absolute start-0 top-50 translate-middle-y w-100" style="height: 2px; background: linear-gradient(90deg, transparent, var(--primary-color), transparent); z-index: 0;"></div>
            
            <!-- Step 1 -->
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="process-card text-center bg-white p-4 rounded-4 shadow-sm position-relative z-1 h-100">
                    <div class="icon-wrapper mb-4 mx-auto bg-primary text-white rounded-circle d-flex align-items-center justify-content-center" style="width: 70px; height: 70px; box-shadow: 0 10px 20px rgba(var(--primary-rgb), 0.3);">
                        <i class="fas fa-globe fa-2x"></i>
                    </div>
                    <h4 class="fw-bold mb-3">Global Sourcing</h4>
                    <p class="text-muted small">Identifying and procuring premium grade materials from validated international suppliers.</p>
                </div>
            </div>
            
            <!-- Step 2 -->
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="process-card text-center bg-white p-4 rounded-4 shadow-sm position-relative z-1 h-100">
                    <div class="icon-wrapper mb-4 mx-auto bg-success text-white rounded-circle d-flex align-items-center justify-content-center" style="width: 70px; height: 70px; box-shadow: 0 10px 20px rgba(25, 135, 84, 0.3);">
                        <i class="fas fa-microscope fa-2x"></i>
                    </div>
                    <h4 class="fw-bold mb-3">Quality Assurance</h4>
                    <p class="text-muted small">Rigorous 3-stage testing protocols ensuring only the finest products make the cut.</p>
                </div>
            </div>
            
            <!-- Step 3 -->
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="process-card text-center bg-white p-4 rounded-4 shadow-sm position-relative z-1 h-100">
                    <div class="icon-wrapper mb-4 mx-auto bg-info text-white rounded-circle d-flex align-items-center justify-content-center" style="width: 70px; height: 70px; box-shadow: 0 10px 20px rgba(13, 202, 240, 0.3);">
                        <i class="fas fa-box-open fa-2x"></i>
                    </div>
                    <h4 class="fw-bold mb-3">Precision Packing</h4>
                    <p class="text-muted small">Advanced packaging solutions that preserve freshness and ensure safe transit.</p>
                </div>
            </div>
            
            <!-- Step 4 -->
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
                <div class="process-card text-center bg-white p-4 rounded-4 shadow-sm position-relative z-1 h-100">
                    <div class="icon-wrapper mb-4 mx-auto bg-warning text-white rounded-circle d-flex align-items-center justify-content-center" style="width: 70px; height: 70px; box-shadow: 0 10px 20px rgba(255, 193, 7, 0.3);">
                        <i class="fas fa-rocket fa-2x"></i>
                    </div>
                    <h4 class="fw-bold mb-3">Swift Delivery</h4>
                    <p class="text-muted small">Integrated cold-chain logistics for on-time delivery right to your business doorstep.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Corporate Identity & Leadership -->
<section class="section bg-white">
    <div class="container">
        <div class="section-title" data-aos="fade-up">
            <h2>Corporate Identity & Leadership</h2>
            <p>Official Verification & Management Details</p>
        </div>
        
        <div class="row g-4 justify-content-center">
            <!-- Company Details -->
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                <div class="card-modern h-100 p-4 border-0 shadow-sm" style="background: linear-gradient(to bottom right, #ffffff, #f8f9fa);">
                    <div class="d-flex align-items-center mb-4">
                        <div class="icon-wrapper bg-primary bg-opacity-10 text-primary rounded-circle p-3 me-3 d-flex align-items-center justify-content-center" style="width: 60px; height: 60px;">
                            <i class="fas fa-building fa-2x"></i>
                        </div>
                        <div>
                            <h3 class="h4 fw-bold mb-0">Registered Entity</h3>
                            <small class="text-muted">Government of India Verified</small>
                        </div>
                    </div>
                    <ul class="list-unstyled">
                        <li class="mb-3 p-3 bg-light rounded-3 border-start border-4 border-primary">
                            <small class="text-muted text-uppercase fw-bold d-block mb-1" style="font-size: 0.75rem;">Legal Name</small>
                            <span class="fw-bold text-dark">VEG-SERIES INDIA PRIVATE LIMITED</span>
                        </li>
                        <li class="mb-3 p-3 bg-light rounded-3 border-start border-4 border-primary">
                            <small class="text-muted text-uppercase fw-bold d-block mb-1" style="font-size: 0.75rem;">Trade Name</small>
                            <span class="fw-bold text-dark">VEG-SERIES INDIA PRIVATE LIMITED</span>
                        </li>
                        <li class="mb-0 p-3 bg-light rounded-3 border-start border-4 border-primary">
                            <small class="text-muted text-uppercase fw-bold d-block mb-1" style="font-size: 0.75rem;">GSTIN (Goods & Services Tax ID)</small>
                            <span class="font-monospace fw-bold text-primary">06AAICV3524D1ZK</span>
                        </li>
                    </ul>
                </div>
            </div>
            
            <!-- Leadership -->
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                <div class="card-modern h-100 p-4 border-0 shadow-sm" style="background: linear-gradient(to bottom right, #ffffff, #f8f9fa);">
                    <div class="d-flex align-items-center mb-4">
                        <div class="icon-wrapper bg-success bg-opacity-10 text-success rounded-circle p-3 me-3 d-flex align-items-center justify-content-center" style="width: 60px; height: 60px;">
                            <i class="fas fa-users-cog fa-2x"></i>
                        </div>
                        <div>
                            <h3 class="h4 fw-bold mb-0">Key Management</h3>
                            <small class="text-muted">Directors & Key Managerial Personnel</small>
                        </div>
                    </div>
                    
                    <div class="vstack gap-3">
                        <!-- Director 1 -->
                        <div class="director-card p-3 rounded-3 bg-white shadow-sm border border-light d-flex align-items-center transition-hover">
                            <div class="avatar bg-success text-white rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 50px; height: 50px; font-weight: bold; font-size: 1.2rem;">J</div>
                            <div class="flex-grow-1">
                                <h5 class="mb-0 fw-bold">Jatin</h5>
                                <span class="badge bg-success bg-opacity-10 text-success px-2 py-1 rounded-pill" style="font-size: 0.7rem;">DIRECTOR</span>
                            </div>
                            <div class="text-end">
                                <small class="d-block text-muted text-uppercase" style="font-size: 0.7rem;">Resident of</small>
                                <span class="fw-medium text-dark"><i class="fas fa-map-pin text-danger small"></i> Haryana</span>
                            </div>
                        </div>

                        <!-- Director 2 -->
                        <div class="director-card p-3 rounded-3 bg-white shadow-sm border border-light d-flex align-items-center transition-hover">
                            <div class="avatar bg-info text-white rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 50px; height: 50px; font-weight: bold; font-size: 1.2rem;">M</div>
                            <div class="flex-grow-1">
                                <h5 class="mb-0 fw-bold">Meghna Lakra</h5>
                                <span class="badge bg-info bg-opacity-10 text-info px-2 py-1 rounded-pill" style="font-size: 0.7rem;">DIRECTOR</span>
                            </div>
                        </div>
                        
                        <div class="alert alert-success d-flex align-items-center mb-0 mt-2 py-2">
                             <i class="fas fa-check-circle me-2"></i>
                             <small class="mb-0"><strong>Verified Status:</strong> Active & Compliant</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
.client-card {
    background: var(--white);
    border-radius: var(--radius-lg);
    padding: var(--spacing-md);
    box-shadow: var(--shadow-md);
    transition: var(--transition-normal);
    height: 150px;
    display: flex;
    align-items: center;
    justify-content: center;
}

.client-card:hover {
    transform: translateY(-5px);
    box-shadow: var(--shadow-xl);
}

.client-logo {
    width: 100%;
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
}

.client-logo img {
    max-height: 80px;
    width: auto;
    filter: grayscale(100%);
    transition: var(--transition-normal);
}

.client-card:hover .client-logo img {
    filter: grayscale(0%);
}

.placeholder-logo {
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100%;
}

.testimonial-card {
    border-left: 4px solid var(--primary-color);
}

.testimonial-text {
    font-style: italic;
    color: var(--gray);
    line-height: 1.8;
}

.client-info h5 {
    color: var(--dark);
}

/* Process Card Styles */
.process-card {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    border: 1px solid rgba(0,0,0,0.05);
}

.process-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 15px 30px rgba(0,0,0,0.1);
}
</style>

<?php require_once 'includes/footer.php'; ?>
