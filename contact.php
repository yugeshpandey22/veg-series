<?php 
require_once 'includes/config.php';
$page_title = "Contact Us";
$page_description = "Get in touch with us for any queries or business inquiries";
require_once 'includes/header.php';
require_once 'includes/navbar.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'vendor/autoload.php';

$success_msg = '';
$error_msg = '';

// Enable Error Reporting for Debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Debug Funtion
function log_debug($msg) {
    file_put_contents('debug_log.txt', date('[Y-m-d H:i:s] ') . $msg . PHP_EOL, FILE_APPEND);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    log_debug("Form Submitted.");
    
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $mobile = htmlspecialchars($_POST['mobile']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    log_debug("Data Received: Name=$name, Email=$email");

    // 1. Database Insertion
    log_debug("Attempting Database Insert...");
    
    // Ensure table exists (Redundant check but safe)
    $conn->query("CREATE TABLE IF NOT EXISTS contact_queries (id INT AUTO_INCREMENT PRIMARY KEY, name VARCHAR(100), email VARCHAR(100), mobile VARCHAR(20), subject VARCHAR(200), message TEXT, created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP)");

    $stmt = $conn->prepare("INSERT INTO contact_queries (name, email, mobile, subject, message) VALUES (?, ?, ?, ?, ?)");
    if ($stmt) {
        $stmt->bind_param("sssss", $name, $email, $mobile, $subject, $message);
        if ($stmt->execute()) {
            log_debug("DB Insert SUCCESS. ID: " . $stmt->insert_id);
        } else {
            log_debug("DB Insert FAILED: " . $stmt->error);
            $error_msg .= "Database Error: " . $stmt->error . "<br>";
        }
        $stmt->close();
    } else {
        log_debug("DB Prepare FAILED: " . $conn->error);
        $error_msg .= "Database Prepare Error: " . $conn->error . "<br>";
    }

    // 2. Email Sending
    log_debug("Attempting Email Send...");
    $mail = new PHPMailer(true);

    try {
        //$mail->SMTPDebug = 3; // Enable detailed debug output in browser log
        //$mail->Debugoutput = function($str, $level) { log_debug("Mailer: $str"); };

        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'pyugesh66@gmail.com';
        $mail->Password   = 'bzgo hwig hlob dxsw';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;

        // SSL Bypass
        $mail->SMTPOptions = array(
            'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
            )
        );

        $mail->setFrom('pyugesh66@gmail.com', 'Hyper2 Website');
        $mail->addAddress('pyugesh66@gmail.com');

        $mail->isHTML(true);
        $mail->Subject = "New Contact: $subject";
        $mail->Body    = "<h3>Inquiry from $name</h3><p>Email: $email</p><p>Mobile: $mobile</p><p>Message: $message</p>";
        $mail->AltBody = "Name: $name\nEmail: $email\nMobile: $mobile\nMessage: $message";

        $mail->send();
        log_debug("Email Sent SUCCESS.");
        $success_msg = "Thank you $name! Your message has been sent successfully.";
    } catch (Exception $e) {
        log_debug("Email Sent FAILED: " . $mail->ErrorInfo);
        $error_msg .= "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
?>

<!-- Page Header -->
<!-- Page Header -->
<section class="section-banner position-relative py-5 text-center text-white" style="background-image: url('assets/images/register.jpg'); background-size: cover; background-attachment: fixed; background-position: center;">
    <div class="overlay" style="background: rgba(0,0,0,0.6); position: absolute; inset: 0;"></div>
    <div class="container position-relative py-5">
        <h1 class="display-3 fw-bold mb-3 animate__animated animate__fadeInDown" data-aos="fade-up" style="color: #ffffff !important; text-shadow: 2px 2px 4px rgba(0,0,0,0.5);">Contact Us</h1>
        <p class="lead mb-0 fs-4 animate__animated animate__fadeInUp" data-aos="fade-up" data-aos-delay="100">We'd love to hear from you. Get in touch today!</p>
    </div>
</section>

<!-- Contact Info -->
<section class="section bg-white">
    <div class="container">
        <div class="row g-4 mb-5">
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="card-modern text-center contact-info-card">
                    <div class="card-icon mx-auto" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <h3>Visit Us</h3>
                    <p class="mb-0">Ground Floor, 116, Sector 80,<br>Near Jagjeet Gas Agency,<br>Village Badoli, Piala, Faridabad,<br>Haryana 121004</p>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="card-modern text-center contact-info-card">
                    <div class="card-icon mx-auto" style="background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);">
                        <i class="fas fa-phone"></i>
                    </div>
                    <h3>Call Us</h3>
                    <p class="mb-0">+91 98765 43210<br>+91 98765 43211<br>Mon - Sat: 9:00 AM - 6:00 PM</p>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="card-modern text-center contact-info-card">
                    <div class="card-icon mx-auto" style="background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <h3>Email Us</h3>
                    <p class="mb-0"><?php echo SITE_EMAIL; ?><br>We reply within 24 hours</p>
                </div>
            </div>
        </div>
        
        <!-- Contact Form -->
        <div class="row justify-content-center">
            <div class="col-lg-8" data-aos="fade-up">
                <div class="card-modern">
                    <h2 class="text-center mb-4">Send Us a Message</h2>
                    
                    <?php if ($success_msg): ?>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <i class="fas fa-check-circle me-2"></i><?php echo $success_msg; ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        </div>
                    <?php endif; ?>
                    
                    <?php if ($error_msg): ?>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <i class="fas fa-exclamation-circle me-2"></i><?php echo $error_msg; ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        </div>
                    <?php endif; ?>
                    
                    <form method="POST" action="contact.php" class="needs-validation" novalidate>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label for="name" class="form-label">Full Name *</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                                <div class="invalid-feedback">Please provide your name.</div>
                            </div>
                            
                            <div class="col-md-6">
                                <label for="email" class="form-label">Email Address *</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                                <div class="invalid-feedback">Please provide a valid email.</div>
                            </div>
                            
                            <div class="col-md-6">
                                <label for="mobile" class="form-label">Mobile Number *</label>
                                <input type="tel" class="form-control" id="mobile" name="mobile" pattern="[0-9]{10}" required>
                                <div class="invalid-feedback">Please provide a valid 10-digit mobile number.</div>
                            </div>
                            
                            <div class="col-md-6">
                                <label for="subject" class="form-label">Subject *</label>
                                <input type="text" class="form-control" id="subject" name="subject" required>
                                <div class="invalid-feedback">Please provide a subject.</div>
                            </div>
                            
                            <div class="col-12">
                                <label for="message" class="form-label">Your Message *</label>
                                <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                                <div class="invalid-feedback">Please provide your message.</div>
                            </div>
                            
                            <div class="col-12 text-center">
                                <button type="submit" class="btn btn-primary btn-lg px-5">
                                    <i class="fas fa-paper-plane me-2"></i> Send Message
                                </button>
                            </div>
                        </div>
                    </form>
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
.contact-info-card {
    border: 2px solid transparent;
    transition: all 0.3s ease;
}

.contact-info-card:hover {
    border-color: var(--primary-color);
    transform: translateY(-5px);
}

.form-control {
    padding: 0.75rem 1rem;
    border: 2px solid var(--gray-light);
    border-radius: var(--radius-sm);
    transition: var(--transition-normal);
}

.form-control:focus {
    border-color: var(--primary-color);
    box-shadow: 0 0 0 0.2rem rgba(99, 102, 241, 0.25);
}

.map-container {
    position: relative;
    overflow: hidden;
}

.map-container iframe {
    display: block;
}
</style>

<?php require_once 'includes/footer.php'; ?>
