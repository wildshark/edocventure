<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>About Us | Edco Ventures - Global IT Intelligence</title>
    <meta name="description" content="Edco Ventures binds together business and technology to deliver world-class infrastructure across multiple continents.">

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
            --edco-primary: #4f46e5; 
            --edco-dark: #0f172a;    
            --edco-topbar: #1e293b;
            --edco-footer: #020617;
            --edco-light: #f8fafc;
        }

        body { font-family: 'Inter', sans-serif; color: #475569; overflow-x: hidden; line-height: 1.7; }
        h1, h2, h3, h4, .display-4, .display-5 { font-family: 'Outfit', sans-serif; font-weight: 800; color: var(--edco-dark); letter-spacing: -0.02em; }

        /* --- TOP MENU & NAV - loaded from topmenu.php --- */

        /* --- PAGE HEADER --- */
        .page-header { 
            background: linear-gradient(rgba(15, 23, 42, 0.85), rgba(15, 23, 42, 0.85)), url('assets/img/about-hero-background.png');
            background-size: cover;
            background-position: center;
            padding: 100px 0;
            color: #fff;
            text-align: center;
        }

        /* --- CORE ABOUT SECTION --- */
        .about-image-stack { position: relative; padding: 20px; }
        .about-image-stack img { border-radius: 20px; box-shadow: 0 30px 60px rgba(0,0,0,0.1); }
        
        /* --- VALUE PROP CARDS --- */
        .value-card { 
            background: #fff; 
            border: 1px solid #e2e8f0; 
            padding: 30px; 
            border-radius: 20px; 
            height: 100%; 
            transition: 0.3s;
        }
        .value-card:hover { 
            border-color: var(--edco-primary); 
            box-shadow: 0 20px 40px rgba(0,0,0,0.05);
            transform: translateY(-5px);
        }
        .value-icon { 
            width: 50px; height: 50px; 
            background: #eef2ff; color: var(--edco-primary); 
            border-radius: 12px; display: flex; 
            align-items: center; justify-content: center; 
            font-size: 1.4rem; margin-bottom: 20px; 
        }

        /* --- TEAM SECTION --- */
        .team-card { text-align: center; background: #fff; padding: 40px 20px; border-radius: 24px; border: 1px solid #f1f5f9; transition: 0.3s; }
        .team-card:hover { box-shadow: 0 30px 60px rgba(0,0,0,0.08); }
        .team-img { width: 150px; height: 150px; border-radius: 50%; object-fit: cover; margin-bottom: 25px; border: 5px solid #f8fafc; }
        .team-social a { color: #cbd5e1; margin: 0 10px; font-size: 1.1rem; transition: 0.3s; }
        .team-social a:hover { color: var(--edco-primary); }

        /* --- FOOTER (Consistent with Home) --- */
        .footer-main { background: var(--edco-footer); color: #94a3b8; padding: 100px 0 30px 0; }
        .footer-heading { color: #fff; font-size: 1.1rem; font-weight: 700; margin-bottom: 25px; }
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
        body[data-theme="dark"] .team-card,
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
        <section class="page-header">
            <div class="container">
                <h6 class="text-primary fw-bold text-uppercase mb-3">Our Identity</h6>
                <h1 class="display-4 text-white">Binding Business and Technology</h1>
                <p class="lead text-white-50 mx-auto mt-4" style="max-width: 700px;">
                    Evolutionizing as an advanced solutions provider focused on long-term relationships and emerging global infrastructure.
                </p>
            </div>
        </section>

        <!-- CORE CONTENT SECTION -->
        <section class="py-120 bg-white">
            <div class="container">
                <div class="row align-items-center g-5">
                    <div class="col-lg-6" data-aos="fade-right">
                        <div class="about-image-stack">
                            <img src="assets/img/about-corporate-strategy.png" class="img-fluid" alt="Edco Strategy">
                        </div>
                    </div>
                    <div class="col-lg-6" data-aos="fade-left">
                        <h2 class="display-5 mb-4">A Full-Service Global Solution Provider.</h2>
                        <p class="mb-4">
                            Edco Ventures supports remote sites across multiple continents. We place our focus on leveraging our infrastructure and footprint to support a broad spectrum of organizations with rapid deployment and emerging technologies.
                        </p>
                        <p class="mb-4">
                            Over the years, Edco Ventures has evolved into an advanced solutions provider, focused on servicing customers and creating value through long-term relationships. We have established unique service level agreements and fixed costs based on our customers’ needs and budget.
                        </p>
                        <div class="quote-box p-4 rounded-4">
                            <p class="fst-italic mb-0">
                                "The most powerful connection that a business can make is through all its stakeholders. Edco Ventures binds together business and technology."
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- LET US HANDLE YOUR IT SECTION -->
        <section class="py-120 bg-light">
            <div class="container">
                <div class="text-center mb-5" data-aos="fade-up">
                    <h2 class="display-5">Let Us Handle Your IT</h2>
                    <p class="text-muted mx-auto" style="max-width: 650px;">
                        We strive to deliver more efficient, effective and relevant quality services tailored to the increasingly complex demands of modern organizations.
                    </p>
                </div>
                
                <div class="row g-4">
                    <!-- Prop 1 -->
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="value-card">
                            <div class="value-icon"><i class="fa-solid fa-bullseye"></i></div>
                            <h5 class="fw-bold">Success Environment</h5>
                            <p class="small mb-0">Enable you to focus on your core business by providing practical IT solutions that create an environment for success.</p>
                        </div>
                    </div>
                    <!-- Prop 2 -->
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="value-card">
                            <div class="value-icon"><i class="fa-solid fa-shield-virus"></i></div>
                            <h5 class="fw-bold">Risk Management</h5>
                            <p class="small mb-0">Minimize risk of data loss, downtime, and security threats through high-end virtualization and automation.</p>
                        </div>
                    </div>
                    <!-- Prop 3 -->
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="value-card">
                            <div class="value-icon"><i class="fa-solid fa-users-gear"></i></div>
                            <h5 class="fw-bold">Customer Satisfaction</h5>
                            <p class="small mb-0">Improve overall customer service by ensuring you have the infrastructure to continuously engage with your market.</p>
                        </div>
                    </div>
                    <!-- Prop 4 -->
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                        <div class="value-card">
                            <div class="value-icon"><i class="fa-solid fa-chart-line"></i></div>
                            <h5 class="fw-bold">Operational Efficiency</h5>
                            <p class="small mb-0">Cut operational costs with tailor-made strategies that assist you in creating or updating your enterprise IT strategy.</p>
                        </div>
                    </div>
                    <!-- Prop 5 -->
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                        <div class="value-card">
                            <div class="value-icon"><i class="fa-solid fa-earth-africa"></i></div>
                            <h5 class="fw-bold">Stakeholder Connectivity</h5>
                            <p class="small mb-0">Increase communication across globalized teams and a mobile workforce through dynamic networking challenges.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- LEADERSHIP TEAM SECTION -->
        <section class="py-120 bg-white">
            <div class="container">
                <div class="text-center mb-5" data-aos="fade-up">
                    <h6 class="text-primary fw-bold text-uppercase">The Minds Behind Edco</h6>
                    <h2 class="display-5">Our Leadership Team</h2>
                </div>

                <div class="row g-4 justify-content-center">
                    <!-- Team 1 -->
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="team-card">
                            <img src="assets/img/Nesta Adjetey Osekre.png" class="team-img" alt="CEO">
                            <h5 class="fw-bold mb-1">Nesta Adjetey Osekre</h5>
                            <p class="text-primary small fw-bold mb-3">Chief Executive Officer</p>
                            <p class="small text-muted px-3 mb-4">Focusing on binding business and technology across global footprints.</p>
                            <div class="team-social">
                                <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                                <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- Team 2 -->
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="team-card">
                            <img src="assets/img/Andrew Quaye.png" class="team-img" alt="CTO">
                            <h5 class="fw-bold mb-1">Andrew Quaye</h5>
                            <p class="text-primary small fw-bold mb-3">Chief Technology Officer</p>
                            <p class="small text-muted px-3 mb-4">Architecting scalable infrastructures for remote sites across continents.</p>
                            <div class="team-social">
                                <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                                <a href="#"><i class="fa-brands fa-github"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- Team 3 -->
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="team-card">
                            <img src="assets/img/CA Beata Lamisi Akusung.JPG" class="team-img" alt="Senior Accountant">
                            <h5 class="fw-bold mb-1">Beata Lamisi Akusung</h5>
                            <p class="text-primary small fw-bold mb-3">Senior Accountant</p>
                            <p class="small text-muted px-3 mb-4">Driving financial excellence through meticulous accounting, budgeting and strategic cost management for clients across the business ecosystem.</p>
                            <div class="team-social">
                                <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                                <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                            </div>
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
    </script>
</body>
</html>