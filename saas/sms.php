<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" href="/assets/img/EDOC.webp" type="image/webp">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>SMSBox-247 | Edoc Ventures - Enterprise Bulk SMS & Reseller Gateway</title>
    <meta name="description" content="SMSBox-247: High-performance bulk SMS gateway and white-label reseller platform for global communication.">

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
            --sms-accent: #0ea5e9;
        }

        body { font-family: 'Inter', sans-serif; color: #475569; overflow-x: hidden; line-height: 1.7; }
        h1, h2, h3, h4, .display-4, .display-5 { font-family: 'Outfit', sans-serif; font-weight: 800; color: var(--edoc-dark); letter-spacing: -0.02em; }

        /* --- NAVIGATION --- */
        .navbar { background: #fff; border-bottom: 1px solid rgba(0,0,0,0.05); padding: 15px 0; }
        .nav-link { font-weight: 600; color: var(--edoc-dark) !important; padding: 10px 18px !important; }

        /* --- PRODUCT HERO --- */
        .product-hero { 
            background: radial-gradient(circle at 0% 100%, #f0f9ff 0%, #eef2ff 100%);
            padding: 120px 0 100px;
        }
        .hero-badge { 
            background: #e0f2fe; color: var(--sms-accent); 
            padding: 8px 20px; border-radius: 50px; 
            font-weight: 700; font-size: 0.85rem; text-transform: uppercase; 
            display: inline-block; margin-bottom: 20px;
        }

        /* --- FEATURE CARDS --- */
        .feature-card {
            background: #fff;
            padding: 40px;
            border-radius: 24px;
            border: 1px solid #e2e8f0;
            transition: 0.3s;
            height: 100%;
        }
        .feature-card:hover { transform: translateY(-10px); border-color: var(--sms-accent); box-shadow: 0 20px 40px rgba(0,0,0,0.05); }
        .feature-icon { 
            width: 50px; height: 50px; background: #f0f9ff; 
            color: var(--sms-accent); border-radius: 12px; 
            display: flex; align-items: center; justify-content: center; 
            font-size: 1.5rem; margin-bottom: 25px; 
        }

        /* --- RESELLER BOX --- */
        .reseller-box {
            background: var(--edoc-dark);
            color: white;
            border-radius: 30px;
            padding: 60px;
            position: relative;
            overflow: hidden;
        }
        .reseller-box::after {
            content: "\f3cd"; font-family: "Font Awesome 6 Free"; font-weight: 900;
            position: absolute; right: -50px; bottom: -50px; font-size: 300px;
            opacity: 0.03; color: white;
        }

        /* --- CTA BUTTONS --- */
        .btn-demo-live { 
            background: var(--sms-accent); color: white; border: none; 
            padding: 16px 35px; border-radius: 12px; font-weight: 700; 
            transition: 0.3s; box-shadow: 0 10px 20px rgba(14, 165, 233, 0.3);
            text-decoration: none; display: inline-block;
        }
        .btn-demo-live:hover { background: var(--edoc-primary); color: white; transform: translateY(-3px); }

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
        <!-- NAVIGATION -->
        <?php include 'topmenu.php'; ?>

        <!-- HERO SECTION -->
        <section class="product-hero">
            <div class="container">
                <div class="row align-items-center g-5">
                    <div class="col-lg-6" data-aos="fade-right">
                        <span class="hero-badge">Messaging Infrastructure</span>
                        <h1 class="display-3 mb-4">Instant Connection. <br><span class="text-info">Global Scale.</span></h1>
                        <p class="lead mb-5 text-muted">
                            SMSBox-247 is a high-availability bulk SMS platform engineered to bind business and technology. Whether you are an enterprise or a reseller, our gateway ensures your stakeholders are reached across multiple continents instantly.
                        </p>
                        <div class="d-flex flex-column flex-sm-row gap-3">
                            <a href="/quation" class="btn-demo-live"><i class="fa-solid fa-play-circle me-2"></i> Launch Live Demo</a>
                            <a href="/quation" class="btn btn-outline-dark px-4 py-3 border-2 fw-bold rounded-3">Developer API</a>
                        </div>
                        <div class="mt-4 small text-muted">
                            <i class="fa-solid fa-bolt me-2 text-warning"></i> 99.9% Delivery Rate & 256-bit Encryption
                        </div>
                    </div>
                    <div class="col-lg-6" data-aos="zoom-in">
                        <img src="/assets/img/sms-bulk-messaging.webp" class="img-fluid rounded-4 shadow-lg border" alt="SMSBox Dashboard">
                    </div>
                </div>
            </div>
        </section>

        <!-- CORE FEATURES -->
        <section class="py-120 bg-white">
            <div class="container">
                <div class="text-center mb-5" data-aos="fade-up">
                    <h6 class="text-primary fw-bold text-uppercase">The Gateway Solution</h6>
                    <h2 class="display-5">Engineered for High-Throughput</h2>
                </div>
                <div class="row g-4">
                    <!-- Feature 1 -->
                    <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="feature-card">
                            <div class="feature-icon"><i class="fa-solid fa-users-rays"></i></div>
                            <h5 class="fw-bold">Bulk Messaging</h5>
                            <p class="small text-muted mb-0">Blast millions of messages to global contacts with smart routing technology for maximum delivery.</p>
                        </div>
                    </div>
                    <!-- Feature 2 -->
                    <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="feature-card">
                            <div class="feature-icon"><i class="fa-solid fa-code-branch"></i></div>
                            <h5 class="fw-bold">Robust API</h5>
                            <p class="small text-muted mb-0">Seamlessly integrate messaging into your existing apps, CRMs, or school management systems with our REST API.</p>
                        </div>
                    </div>
                    <!-- Feature 3 -->
                    <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="feature-card">
                            <div class="feature-icon"><i class="fa-solid fa-clock-rotate-left"></i></div>
                            <h5 class="fw-bold">Smart Scheduling</h5>
                            <p class="small text-muted mb-0">Automate your communication workflow by scheduling alerts, reminders, and campaigns for optimal timezones.</p>
                        </div>
                    </div>
                    <!-- Feature 4 -->
                    <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
                        <div class="feature-card">
                            <div class="feature-icon"><i class="fa-solid fa-chart-line"></i></div>
                            <h5 class="fw-bold">Live Analytics</h5>
                            <p class="small text-muted mb-0">Monitor delivery logs, failure reports, and cost analysis in real-time through our intuitive dashboard.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- RESELLER EMPOWERMENT -->
        <section class="py-120 bg-light">
            <div class="container">
                <div class="reseller-box" data-aos="fade-up">
                    <div class="row align-items-center">
                        <div class="col-lg-7">
                            <h2 class="text-white display-5 mb-4">Start Your Own SMS Business</h2>
                            <p class="lead text-white-50 mb-4">Our White-Label Reseller Program allows you to launch your own messaging platform using Edoc's world-class infrastructure.</p>
                            <ul class="list-unstyled mb-5">
                                <li class="mb-2"><i class="fa-solid fa-circle-check text-info me-2"></i> Custom White-Label Domain & Branding</li>
                                <li class="mb-2"><i class="fa-solid fa-circle-check text-info me-2"></i> Sub-Account & Credit Management</li>
                                <li class="mb-2"><i class="fa-solid fa-circle-check text-info me-2"></i> Set Your Own Profit Margins</li>
                                <li class="mb-2"><i class="fa-solid fa-circle-check text-info me-2"></i> Automated API for Sub-Resellers</li>
                            </ul>
                            <a href="/quation" class="btn btn-light btn-lg px-4 py-3 fw-bold text-primary">Become a Reseller Today</a>
                        </div>
                        <div class="col-lg-5 d-none d-lg-block">
                            <img src="/assets/img/sms-reseller-success.webp" class="img-fluid rounded-4 shadow-lg" alt="Reseller Success">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- BENEFITS -->
        <section class="py-120 bg-white">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6" data-aos="fade-right">
                        <h2 class="display-5 mb-4">Binding Global Communication</h2>
                        <p class="mb-5">SMSBox-247 empowers your business by creating an environment for seamless connectivity and reduced operational risks.</p>
                        
                        <div class="d-flex mb-4">
                            <div class="me-4 text-info"><i class="fa-solid fa-shield-halved fa-2x"></i></div>
                            <div>
                                <h5 class="fw-bold">Risk Minimization</h5>
                                <p class="small text-muted">Minimize data loss and downtime threats through our redundant server infrastructure and secure automation.</p>
                            </div>
                        </div>
                        <div class="d-flex mb-4">
                            <div class="me-4 text-info"><i class="fa-solid fa-globe"></i></div>
                            <div>
                                <h5 class="fw-bold">Worker Mobility</h5>
                                <p class="small text-muted">Increase communication for dynamic businesses facing challenges like globalization and increased worker mobility.</p>
                            </div>
                        </div>
                        <div class="d-flex mb-4">
                            <div class="me-4 text-info"><i class="fa-solid fa-sack-dollar"></i></div>
                            <div>
                                <h5 class="fw-bold">Cost-Effectiveness</h5>
                                <p class="small text-muted">Tailor-made pricing strategies designed to maximize value and ROI for your customer base.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6" data-aos="fade-left">
                        <img src="/assets/img/sms-business-growth.webp" class="img-fluid rounded-4 shadow-lg" alt="Business Growth">
                    </div>
                </div>
            </div>
        </section>

        <!-- FINAL CTA -->
        <section class="py-5 bg-white">
            <div class="container">
                <div class="p-5 rounded-5 text-center text-white" style="background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%);">
                    <h2 class="text-white display-5 mb-4">Connect Your Stakeholders Now</h2>
                    <p class="text-white-50 lead mb-5 mx-auto" style="max-width: 600px;">Unlock the most powerful connection a business can make with SMSBox-247.</p>
                    <a href="/quation" class="btn-demo-live"><i class="fa-solid fa-bolt me-2"></i> Launch Platform Demo</a>
                </div>
            </div>
        </section>

        <!-- FOOTER -->
        <?php include 'footer.php'; ?>
    </div>

    <!-- SCRIPTS (CDN) -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({ once: true, duration: 800 });
    </script>
</body>
</html>