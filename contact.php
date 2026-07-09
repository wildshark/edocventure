<?php
    // Check if the router is loading this file via include
    // If someone accesses it directly, redirect to index
    if (!defined('EDOC_LOADED') && basename($_SERVER['PHP_SELF']) === 'contact.php') {
        header('Location: /contact');
        exit;
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" href="/assets/img/EDOC.webp" type="image/webp">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Contact Us | Edoc Ventures - Get in Touch</title>
    <meta name="description" content="Contact Edoc Ventures for enterprise IT solutions, cloud infrastructure, fintech development, and global support.">

    <!-- CDN: Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;600;700;800&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">

    <!-- CDN: CSS Frameworks & Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <style>
        :root {
            --edoc-primary: #4f46e5;
            --edoc-dark: #0f172a;
            --edoc-topbar: #1e293b;
            --edoc-footer: #020617;
            --edoc-light: #f8fafc;
        }

        body { font-family: 'Inter', sans-serif; color: #475569; background-color: var(--edoc-light); line-height: 1.7; }
        h1, h2, h3, h4, .display-5 { font-family: 'Outfit', sans-serif; font-weight: 800; color: var(--edoc-dark); letter-spacing: -0.02em; }

        /* --- TOP MENU & NAV - loaded from topmenu.php --- */

        /* --- PAGE HEADER --- */
        .contact-header {
            background: radial-gradient(circle at 0% 0%, #1e1b4b, #0f172a);
            padding: 100px 0 160px;
            color: #fff;
            text-align: center;
        }

        /* --- CONTACT CARD --- */
        .contact-container { margin-top: -100px; padding-bottom: 100px; }
        .contact-card {
            background: #fff;
            border: none;
            border-radius: 24px;
            box-shadow: 0 40px 100px rgba(0,0,0,0.1);
            padding: 50px;
        }

        .form-label { font-weight: 700; color: var(--edoc-dark); font-size: 0.9rem; margin-bottom: 10px; }
        .form-control, .form-select {
            padding: 14px 20px;
            border-radius: 12px;
            border: 1px solid #e2e8f0;
            background-color: #f8fafc;
            transition: 0.3s;
        }
        .form-control:focus {
            border-color: var(--edoc-primary);
            box-shadow: 0 0 0 4px rgba(79, 70, 229, 0.1);
            background-color: #fff;
        }

        /* --- CONTACT INFO BOX --- */
        .info-box { background: var(--edoc-primary); color: white; border-radius: 20px; padding: 40px; margin-bottom: 30px; }
        .info-item { display: flex; align-items: start; margin-bottom: 25px; }
        .info-icon { width: 40px; height: 40px; background: rgba(255,255,255,0.2); border-radius: 10px; display: flex; align-items: center; justify-content: center; margin-right: 20px; flex-shrink: 0; }
        /* === DARK MODE OVERRIDES === */
        body[data-theme="dark"] { background-color: #0b0f19 !important; }
        body[data-theme="dark"] h1, body[data-theme="dark"] h2, body[data-theme="dark"] h3,
        body[data-theme="dark"] h4, body[data-theme="dark"] h5, body[data-theme="dark"] h6,
        body[data-theme="dark"] .display-3, body[data-theme="dark"] .display-4, body[data-theme="dark"] .display-5,
        body[data-theme="dark"] strong { color: #f8fafc !important; }
        body[data-theme="dark"] p, body[data-theme="dark"] li,
        body[data-theme="dark"] .text-muted { color: #cbd5e1 !important; }
        body[data-theme="dark"] .feature-card,
        body[data-theme="dark"] .value-card,
        body[data-theme="dark"] .course-card,
        body[data-theme="dark"] .stat-card { background: #1e293b !important; border-color: rgba(255,255,255,0.08) !important; }
        body[data-theme="dark"] .product-hero, body[data-theme="dark"] .page-header,
        body[data-theme="dark"] .service-hero, body[data-theme="dark"] .academy-hero { color: #f8fafc !important; }
        body[data-theme="dark"] .hero-badge { background: rgba(99,102,241,0.15) !important; color: #818cf8 !important; }
        body[data-theme="dark"] .btn-outline-dark { color: #f8fafc !important; border-color: rgba(255,255,255,0.2) !important; }
    </style>
</head>

<body>

    <div class="main-wrapper">
        <?php include 'topmenu.php'; ?>

        <!-- PAGE HEADER -->
        <section class="contact-header">
            <div class="container" data-aos="fade-up">
                <h6 class="text-info fw-bold text-uppercase mb-3">Reach Out</h6>
                <h1 class="display-4 text-white">Contact Us</h1>
                <p class="lead text-white-50 mx-auto mt-4" style="max-width: 700px;">
                    Have a project in mind or need enterprise IT support? Our team is ready to help you architect your success.
                </p>
            </div>
        </section>

        <!-- CONTACT FORM SECTION -->
        <section class="contact-container">
            <div class="container">
                <div class="row g-5">
                    <!-- The Form -->
                    <div class="col-lg-8" data-aos="fade-up">
                        <div class="contact-card">
                            <form id="contactForm">
                                <h4 class="mb-4">Send Us a Message</h4>
                                <div class="row g-4 mb-4">
                                    <div class="col-md-6">
                                        <label class="form-label">Full Name</label>
                                        <input type="text" class="form-control" placeholder="John Asamoah" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Email Address</label>
                                        <input type="email" class="form-control" placeholder="john@company.com" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Company (Optional)</label>
                                        <input type="text" class="form-control" placeholder="Enterprise Ltd">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Subject</label>
                                        <select class="form-select">
                                            <option selected disabled>Select a topic</option>
                                            <option>General Enquiry</option>
                                            <option>Sales & Partnerships</option>
                                            <option>Technical Support</option>
                                            <option>Billing</option>
                                        </select>
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label">Message</label>
                                        <textarea class="form-control" rows="6" placeholder="How can we help you?"></textarea>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary btn-lg w-100 py-3 fw-bold" style="background: var(--edoc-primary); border: none; border-radius: 12px;">
                                    Send Message <i class="fa-solid fa-paper-plane ms-2"></i>
                                </button>
                            </form>
                        </div>
                    </div>

                    <!-- Sidebar -->
                    <div class="col-lg-4" data-aos="fade-left">
                        <div class="info-box">
                            <h4 class="text-white mb-4">Contact Information</h4>
                            <div class="info-item">
                                <div class="info-icon"><i class="fa-solid fa-envelope"></i></div>
                                <div>
                                    <h6 class="mb-1 text-white">Email</h6>
                                    <p class="small text-white-50 mb-0">solutions@edocventures.com</p>
                                </div>
                            </div>
                            <div class="info-item">
                                <div class="info-icon"><i class="fa-solid fa-globe"></i></div>
                                <div>
                                    <h6 class="mb-1 text-white">Global Operations</h6>
                                    <p class="small text-white-50 mb-0">Supporting remote sites across multiple continents.</p>
                                </div>
                            </div>
                            <div class="info-item mb-0">
                                <div class="info-icon"><i class="fa-solid fa-clock"></i></div>
                                <div>
                                    <h6 class="mb-1 text-white">Response Time</h6>
                                    <p class="small text-white-50 mb-0">Within 24 business hours guaranteed.</p>
                                </div>
                            </div>
                        </div>

                        <div class="bg-white p-4 rounded-4 border">
                            <h5 class="mb-3">Need a Quote?</h5>
                            <p class="small text-muted mb-4">For a detailed project quote, use our Request for Quotation form.</p>
                            <a href="/quation" class="btn btn-primary w-100 fw-bold" style="background: var(--edoc-primary); border: none; border-radius: 10px;">
                                Request a Quote <i class="fa-solid fa-arrow-right ms-2"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php include 'footer.php'; ?>
    </div>

    <!-- SCRIPTS (CDN) -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({ once: true, duration: 800 });

        $('#contactForm').on('submit', function(e) {
            e.preventDefault();
            alert('Your message has been received. Our team will get back to you shortly.');
            this.reset();
        });
    </script>
</body>
</html>
