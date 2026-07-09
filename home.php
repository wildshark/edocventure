<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Edoc Ventures | Global Enterprise IT & Venture Studio</title>
    <meta name="description" content="15 years of engineering excellence in SaaS, Fintech, and Cloud Infrastructure.">
    <meta property="og:title" content="Edoc Ventures | Global Enterprise IT & Venture Studio">
    <meta property="og:description" content="15 years of engineering excellence in SaaS, Fintech, and Cloud Infrastructure.">
    <meta property="og:image" content="https://www.edocventures.com/assets/img/EDOC.webp">
    <meta property="og:url" content="https://www.edocventures.com">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:image" content="https://www.edocventures.com/assets/img/EDOC.webp">
    <link rel="icon" href="/assets/img/EDOC.webp" type="image/webp">

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
            --edoc-primary: #4f46e5; /* Modern Indigo */
            --edoc-cyan: #06b6d4;
            --edoc-dark: #0f172a;    
            --edoc-topbar: #1e293b;
            --edoc-footer: #020617;
            --edoc-light: #f8fafc;
        }

        body { font-family: 'Inter', sans-serif; color: #475569; overflow-x: hidden; line-height: 1.6; }
        h1, h2, h3, h4, h5, .display-5 { font-family: 'Outfit', sans-serif; font-weight: 800; color: var(--edoc-dark); letter-spacing: -0.02em; }
        .text-primary { color: var(--edoc-primary) !important; }
        .bg-light-subtle { background-color: var(--edoc-light); }

        /* --- TOP MENU & NAV - loaded from topmenu.php --- */

        /* --- HERO --- */
        .hero-premium { background: radial-gradient(circle at top right, #1e1b4b, #0f172a); padding: 140px 0 100px; color: #fff; overflow: hidden; position: relative; }
        .hero-premium::after { content: ''; position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: url('https://www.transparenttextures.com/patterns/carbon-fibre.png'); opacity: 0.05; }
        .btn-edoc { background: var(--edoc-primary); color: white; border-radius: 10px; padding: 14px 32px; font-weight: 600; border: none; transition: 0.3s; text-decoration: none; display: inline-block; }
        .btn-edoc:hover { background: #4338ca; transform: translateY(-2px); box-shadow: 0 10px 20px rgba(79, 70, 229, 0.3); color: white; }

        /* --- STUDIO SECTION --- */
        .studio-badge { background: var(--edoc-primary); color: white; padding: 25px; border-radius: 20px; display: inline-block; text-align: center; }
        .feature-card { padding: 30px; border-radius: 20px; background: #fff; border: 1px solid #e2e8f0; transition: 0.3s; height: 100%; }
        .feature-card:hover { transform: translateY(-10px); border-color: var(--edoc-primary); box-shadow: 0 20px 40px rgba(0,0,0,0.05); }
        .feature-icon-box { width: 60px; height: 60px; background: #eef2ff; color: var(--edoc-primary); border-radius: 15px; display: flex; align-items: center; justify-content: center; font-size: 1.5rem; margin-bottom: 20px; }

        /* --- PRODUCT GRID --- */
        .product-item { background: #fff; border-radius: 16px; padding: 20px; border: 1px solid #f1f5f9; transition: 0.3s; text-decoration: none; display: block; height: 100%; }
        .product-item:hover { border-color: var(--edoc-primary); box-shadow: 0 10px 25px rgba(0,0,0,0.05); }
        .product-icon { color: var(--edoc-primary); font-size: 1.8rem; margin-bottom: 15px; }

        /* --- FOOTER --- */
        .footer-main { background: var(--edoc-footer); color: #94a3b8; padding: 100px 0 0 0; }
        .footer-heading { color: #fff; font-size: 1.1rem; font-weight: 700; margin-bottom: 25px; }
        .footer-links { list-style: none; padding: 0; }
        .footer-links li { margin-bottom: 12px; }
        .footer-links a { color: #94a3b8; text-decoration: none; transition: 0.3s; }
        .footer-links a:hover { color: var(--edoc-primary); padding-left: 5px; }
        .social-circle { width: 38px; height: 38px; background: rgba(255,255,255,0.05); border-radius: 50%; display: inline-flex; align-items: center; justify-content: center; color: #fff; margin-right: 12px; transition: 0.3s; text-decoration: none; }
        .social-circle:hover { background: var(--edoc-primary); transform: translateY(-3px); }
        .footer-bottom { border-top: 1px solid rgba(255,255,255,0.05); padding: 30px 0; margin-top: 80px; font-size: 0.85rem; }

        /* --- RESPONSIVE: HOME PAGE --- */
        @media (max-width: 991.98px) {
            .hero-premium { padding: 110px 0 70px; text-align: center; }
        }
        @media (max-width: 767.98px) {
            .hero-premium { padding: 90px 0 60px; }
            .hero-premium h1 { font-size: clamp(1.8rem, 7vw, 2.5rem) !important; }
            .hero-premium .lead { font-size: 0.95rem; }
            .hero-premium .d-flex { flex-direction: column; align-items: center; gap: 12px !important; }
            .hero-premium .btn { width: 100%; max-width: 320px; text-align: center; }
            .studio-badge { display: none; } /* hide badge overlap on mobile */
        }
        @media (max-width: 575.98px) {
            .hero-premium { padding: 80px 0 50px; }
            .product-item { padding: 16px; }
            .product-icon { font-size: 1.5rem; }
        }
    </style>
</head>

<body>

    <div class="main-wrapper">
        <?php include 'topmenu.php'; ?>

        <!-- HERO SECTION -->
        <section class="hero-premium">
            <div class="container position-relative" style="z-index: 2;">
                <div class="row align-items-center text-center text-lg-start">
                    <div class="col-lg-7" data-aos="fade-up">
                        <h1 class="display-3 text-white mb-4">The Architectural Backbone of <span class="text-info">Global Enterprise.</span></h1>
                        <p class="lead text-white-50 mb-5">From multi-currency Fintech to secure education ecosystems, Edoc Ventures engineers high-scale software that transforms industries.</p>
                        <div class="d-flex flex-column flex-sm-row gap-3 justify-content-center justify-content-lg-start">
                            <a href="/quation" class="btn btn-edoc">Explore the Ecosystem</a>
                            <a href="/quation" class="btn btn-outline-light px-4 py-3 border-2 fw-bold text-decoration-none">
                                <i class="fa-solid fa-play me-2"></i> Watch Our Vision
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-5 d-none d-lg-block" data-aos="zoom-in">
                        <img src="/assets/img/data-analytics-hero.webp" class="img-fluid rounded-4 shadow-lg" alt="Data Analytics Dashboard">
                    </div>
                </div>
            </div>
        </section>

        <!-- THE VENTURE STUDIO SECTION -->
        <section class="py-120 bg-white mt-5 pt-5">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 mb-5" data-aos="fade-right">
                        <div class="position-relative">
                            <img src="/assets/img/ghana-team-venture.webp" class="img-fluid rounded-4 shadow-lg" alt="Edoc Team">
                            <div class="studio-badge position-absolute bottom-0 end-0 translate-middle-y me-n4 d-none d-md-block shadow-lg">
                                <h2 class="text-white mb-0">15+</h2>
                                <p class="small mb-0 text-white-50 uppercase fw-bold">Years Experience</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 ps-lg-5" data-aos="fade-left">
                        <span class="badge-premium"><i class="fa-solid fa-rocket me-1"></i> The Venture Studio</span>
                        <h2 class="display-5 mb-4">We Build Infrastructure that Defies Complexity.</h2>
                        <p class="lead mb-5 text-muted">
                            We combine deep technical expertise with strategic product thinking to deliver software that doesn't just work—it scales.
                        </p>
                        <div class="row g-4">
                            <div class="col-md-6">
                                <div class="feature-card">
                                    <div class="feature-icon-box"><i class="fa-solid fa-microchip"></i></div>
                                    <h5>R&D Labs</h5>
                                    <p class="small mb-0 text-muted">Pioneering new standards in Fintech and Cloud computing labs.</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="feature-card">
                                    <div class="feature-icon-box"><i class="fa-solid fa-globe"></i></div>
                                    <h5>Global Scale</h5>
                                    <p class="small mb-0 text-muted">Distributed infrastructure serving millions of transactions daily.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- PRODUCT CATEGORY GRID -->
        <section class="py-120 bg-light-subtle mt-5 pt-5">
            <div class="container">
                <div class="text-center mb-5" data-aos="fade-up">
                    <span class="badge-premium"><i class="fa-solid fa-folder-open me-1"></i> Our Portfolio</span>
                    <h2 class="display-5">A Diverse Tech Ecosystem</h2>
                    <p class="text-muted mx-auto" style="max-width: 600px;">From school management to currency exchange, our products are engineered for precision.</p>
                </div>

                <div class="row g-4">
                    <!-- SaaS Group -->
                    <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <a href="/elearningpro" class="product-item">
                            <i class="fa-solid fa-graduation-cap product-icon"></i>
                            <h5 class="fw-bold">eLearning Pro</h5>
                            <p class="small text-muted">Advanced school management and e-learning integration.</p>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <a href="/sms" class="product-item">
                            <i class="fa-solid fa-comments product-icon"></i>
                            <h5 class="fw-bold">SMSBox-247</h5>
                            <p class="small text-muted">Enterprise-grade bulk messaging and gateway solutions.</p>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <a href="/eaccounting" class="product-item">
                            <i class="fa-solid fa-book-bookmark product-icon"></i>
                            <h5 class="fw-bold">eBook Keeping</h5>
                            <p class="small text-muted">Sales, inventories, and smart store management.</p>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
                        <a href="/ebankinghub" class="product-item">
                            <i class="fa-solid fa-money-check-dollar product-icon"></i>
                            <h5 class="fw-bold">eBanking Hub</h5>
                            <p class="small text-muted">Modern digital banking and mobile wallet solutions.</p>
                        </a>
                    </div>
                    <!-- Fintech Group -->
                    <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <a href="/swaplabs" class="product-item">
                            <i class="fa-solid fa-repeat product-icon"></i>
                            <h5 class="fw-bold">Swap Labs</h5>
                            <p class="small text-muted">Real-time currency exchange and liquidity management.</p>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <a href="/questpay" class="product-item">
                            <i class="fa-solid fa-qrcode product-icon"></i>
                            <h5 class="fw-bold">Quest Pay</h5>
                            <p class="small text-muted">High-speed scan-to-pay delivery payment systems.</p>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <a href="/virtualhode" class="product-item">
                            <i class="fa-solid fa-server product-icon"></i>
                            <h5 class="fw-bold">Cloud Nodes</h5>
                            <p class="small text-muted">Virtual machine orchestration and cloud hosting.</p>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
                        <a href="/vod" class="product-item">
                            <i class="fa-solid fa-video product-icon"></i>
                            <h5 class="fw-bold">VOD Manager</h5>
                            <p class="small text-muted">Professional video content delivery and streaming.</p>
                        </a>
                    </div>
                </div>

            </div>
        </section>

        <!-- ACADEMY & SERVICES -->
        <section class="py-120 bg-white">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-5 order-2 order-lg-1" data-aos="fade-right">
                        <h6 class="text-primary fw-bold text-uppercase">Edoc Academy</h6>
                        <h2 class="display-5 mb-4">Training the Next Generation of Engineers.</h2>
                        <p class="mb-4 text-muted">We don't just build technology; we build people. Our IT Academy offers world-class training in software engineering, cloud architecture, and cybersecurity.</p>
                        <ul class="list-unstyled mb-5">
                            <li class="mb-2"><i class="fa-solid fa-check-circle text-success me-2"></i> Software Development Mentorship</li>
                            <li class="mb-2"><i class="fa-solid fa-check-circle text-success me-2"></i> Cloud & Network Engineering</li>
                            <li class="mb-2"><i class="fa-solid fa-check-circle text-success me-2"></i> Fintech Logic & Security</li>
                        </ul>
                        <a href="/quation" class="btn btn-edoc">Enroll Now</a>
                    </div>
                    <div class="col-lg-7 order-1 order-lg-2" data-aos="fade-left">
                        <img src="/assets/img/home-academy-preview.webp" class="img-fluid rounded-4" alt="Edoc Academy">
                    </div>
                </div>
            </div>
        </section>

        <?php include 'footer.php'; ?>
    </div>

    <!-- SCRIPTS (CDN ONLY) -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        // Initialize AOS
        AOS.init({ once: true, duration: 800 });

        // Sticky Navbar Effect
        $(window).scroll(function() {
            if ($(this).scrollTop() > 100) { $('.navbar').addClass('sticky-header'); }
            else { $('.navbar').removeClass('sticky-header'); }
        });
    </script>
</body>
</html>