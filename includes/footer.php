<!-- Footer -->
<footer class="footer">
    <div class="footer-main">
        <div class="container-fluid px-4">
            <div class="row g-4">
                <!-- About Section -->
                <div class="col-lg-4 col-md-6">
                    <div class="footer-widget">
                        <div class="footer-logo mb-3">
                            <img src="<?php echo BASE_URL; ?>assets/images/logo.jpeg" alt="<?php echo SITE_NAME; ?>" class="img-fluid" style="max-height: 60px; border-radius: 8px;">
                        </div>
                        <p class="footer-text">
                            We are a leading enterprise providing top-notch products and services to our valued clients. 
                            Your satisfaction is our priority.
                        </p>
                        <div class="social-links-footer mt-4">
                            <a href="#" class="social-icon-footer"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="social-icon-footer"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="social-icon-footer"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#" class="social-icon-footer"><i class="fab fa-instagram"></i></a>
                            <a href="#" class="social-icon-footer"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
                
                <!-- Quick Links -->
                <div class="col-lg-2 col-md-6">
                    <div class="footer-widget">
                        <h3 class="footer-title">Quick Links</h3>
                        <ul class="footer-links">
                            <li><a href="<?php echo BASE_URL; ?>index.php"><i class="fas fa-chevron-right"></i> Home</a></li>
                            <li><a href="<?php echo BASE_URL; ?>about.php"><i class="fas fa-chevron-right"></i> About Us</a></li>
                            <li><a href="<?php echo BASE_URL; ?>products.php"><i class="fas fa-chevron-right"></i> Products</a></li>
                            <li><a href="<?php echo BASE_URL; ?>services.php"><i class="fas fa-chevron-right"></i> Services</a></li>
                            <li><a href="<?php echo BASE_URL; ?>contact.php"><i class="fas fa-chevron-right"></i> Contact</a></li>
                        </ul>
                    </div>
                </div>
                
                <!-- Services -->
                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget">
                        <h3 class="footer-title">Our Services</h3>
                        <ul class="footer-links">
                            <li><a href="#"><i class="fas fa-chevron-right"></i> Product Supply</a></li>
                            <li><a href="#"><i class="fas fa-chevron-right"></i> Consulting</a></li>
                            <li><a href="#"><i class="fas fa-chevron-right"></i> Support Services</a></li>
                            <li><a href="#"><i class="fas fa-chevron-right"></i> Training</a></li>
                            <li><a href="#"><i class="fas fa-chevron-right"></i> Custom Solutions</a></li>
                        </ul>
                    </div>
                </div>
                
                <!-- Contact Info -->
                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget">
                        <h3 class="footer-title">Contact Info</h3>
                        <ul class="contact-info">
                            <li>
                                <i class="fas fa-map-marker-alt"></i>
                                <span>Ground Floor, 116, Sector 80,<br>Near Jagjeet Gas Agency,<br>Village Badoli, Piala, Faridabad,<br>Haryana 121004</span>
                            </li>
                            <li>
                                <i class="fas fa-phone"></i>
                                <span>+91 98765 43210</span>
                            </li>
                            <li>
                                <i class="fas fa-envelope"></i>
                                <span><?php echo SITE_EMAIL; ?></span>
                            </li>
                            <li>
                                <i class="fas fa-clock"></i>
                                <span>Mon - Sat: 9:00 AM - 6:00 PM</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Footer Bottom -->
    <div class="footer-bottom">
        <div class="container-fluid px-4">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <p class="copyright">
                        &copy; <?php echo date('Y'); ?> <strong>Mineib Creative Technology</strong>. All Rights Reserved.
                    </p>
                </div>
                <div class="col-md-6 text-md-end">
                    <ul class="footer-bottom-links">
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Terms & Conditions</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Scroll to Top Button -->
<button class="scroll-top" id="scrollTop">
    <i class="fas fa-arrow-up"></i>
</button>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<!-- AOS Animation -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<!-- Custom JS -->
<script src="<?php echo BASE_URL; ?>assets/js/main.js?v=<?php echo time(); ?>"></script>
<script src="<?php echo BASE_URL; ?>assets/js/counter.js"></script>

</body>
</html>
