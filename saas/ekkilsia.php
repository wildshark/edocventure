<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" href="/assets/img/EDCO.png" type="image/png">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Ekkilsia | Edco Ventures - Next-Gen Church Administration Suite</title>
    <meta name="description" content="Ekkilsia: The most advanced administration software for modern ministries, streamlining member management, tithing, and engagement.">

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
            --ekkilsia-accent: #6366f1;
            --ekkilsia-soft: #f5f3ff;
        }

        body { font-family: 'Inter', sans-serif; color: #475569; overflow-x: hidden; line-height: 1.7; }
        h1, h2, h3, h4, .display-4, .display-5 { font-family: 'Outfit', sans-serif; font-weight: 800; color: var(--edco-dark); letter-spacing: -0.02em; }

        /* --- NAVIGATION --- */
        .navbar { background: #fff; border-bottom: 1px solid rgba(0,0,0,0.05); padding: 15px 0; }
        .nav-link { font-weight: 600; color: var(--edco-dark) !important; padding: 10px 18px !important; }

        /* --- PRODUCT HERO --- */
        .product-hero { 
            background: linear-gradient(135deg, #fdfcfb 0%, #eef2ff 100%);
            padding: 120px 0 100px;
        }
        .hero-badge { 
            background: #eef2ff; color: var(--edco-primary); 
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
        .feature-card:hover { transform: translateY(-10px); border-color: var(--edco-primary); box-shadow: 0 20px 40px rgba(0,0,0,0.05); }
        .feature-icon { 
            width: 50px; height: 50px; background: var(--ekkilsia-soft); 
            color: var(--edco-primary); border-radius: 12px; 
            display: flex; align-items: center; justify-content: center; 
            font-size: 1.5rem; margin-bottom: 25px; 
        }

        /* --- MINISTRY IMPACT SECTION --- */
        .impact-box {
            background: var(--edco-dark);
            color: white;
            border-radius: 30px;
            padding: 60px;
            position: relative;
            overflow: hidden;
        }

        /* --- CTA BUTTONS --- */
        .btn-demo-live { 
            background: var(--edco-primary); color: white; border: none; 
            padding: 16px 35px; border-radius: 12px; font-weight: 700; 
            transition: 0.3s; box-shadow: 0 10px 20px rgba(79, 70, 229, 0.3);
            text-decoration: none; display: inline-block;
        }
        .btn-demo-live:hover { background: var(--edco-dark); color: white; transform: translateY(-3px); }

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
                        <span class="hero-badge">Church Management Ecosystem</span>
                        <h1 class="display-3 mb-4">Focus on Ministry. <span class="text-primary">We'll handle the Admin.</span></h1>
                        <p class="lead mb-5 text-muted">
                            Ekkilsia is an advanced suite designed to bind faith and technology. Streamline your member database, automate donations, and increase stakeholder engagement with our world-class infrastructure.
                        </p>
                        <div class="d-flex flex-column flex-sm-row gap-3">
                            <a href="?page=quation" class="btn-demo-live"><i class="fa-solid fa-play-circle me-2"></i> Experience Live Demo</a>
                            <a href="?page=quation" class="btn btn-outline-dark px-4 py-3 border-2 fw-bold rounded-3">Request Pricing</a>
                        </div>
                        <div class="mt-4 small text-muted">
                            <i class="fa-solid fa-cloud me-2 text-info"></i> Secure Cloud Backups & Multi-Branch Support
                        </div>
                    </div>
                    <div class="col-lg-6" data-aos="zoom-in">
                        <img src="assets/img/ekkilsia-crm-ghana.png" class="img-fluid rounded-4 shadow-lg border" alt="Ministry Engagement">
                    </div>
                </div>
            </div>
        </section>

        <!-- CORE FEATURES -->
        <section class="py-120 bg-white">
            <div class="container">
                <div class="text-center mb-5" data-aos="fade-up">
                    <h6 class="text-primary fw-bold text-uppercase">Centralized Management</h6>
                    <h2 class="display-5">Purpose-Built for Modern Ministry</h2>
                </div>
                <div class="row g-4">
                    <!-- Feature 1 -->
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="feature-card">
                            <div class="feature-icon"><i class="fa-solid fa-users-viewfinder"></i></div>
                            <h5 class="fw-bold">Member CRM</h5>
                            <p class="small text-muted mb-0">Organize member data, track service attendance, and manage ministry groups with advanced filtration and reporting.</p>
                        </div>
                    </div>
                    <!-- Feature 2 -->
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="feature-card">
                            <div class="feature-icon"><i class="fa-solid fa-hand-holding-heart"></i></div>
                            <h5 class="fw-bold">Automated Tithing</h5>
                            <p class="small text-muted mb-0">Integrated with Quest Pay. Accept tithes, offerings, and special donations online with automated digital receipts.</p>
                        </div>
                    </div>
                    <!-- Feature 3 -->
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="feature-card">
                            <div class="feature-icon"><i class="fa-solid fa-bullhorn"></i></div>
                            <h5 class="fw-bold">Unified Communication</h5>
                            <p class="small text-muted mb-0">Powered by SMSBox-247. Send mass service reminders, newsletters, and devotional updates via SMS or Email instantly.</p>
                        </div>
                    </div>
                    <!-- Feature 4 -->
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                        <div class="feature-card">
                            <div class="feature-icon"><i class="fa-solid fa-calendar-check"></i></div>
                            <h5 class="fw-bold">Event & Service Manager</h5>
                            <p class="small text-muted mb-0">Schedule services, manage volunteer rotations, and organize community outreach events in a centralized calendar.</p>
                        </div>
                    </div>
                    <!-- Feature 5 -->
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                        <div class="feature-card">
                            <div class="feature-icon"><i class="fa-solid fa-chart-column"></i></div>
                            <h5 class="fw-bold">Ministry Intelligence</h5>
                            <p class="small text-muted mb-0">Visualize growth trends, financial health, and engagement metrics with AI-driven dashboards and reports.</p>
                        </div>
                    </div>
                    <!-- Feature 6 -->
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
                        <div class="feature-card">
                            <div class="feature-icon"><i class="fa-solid fa-shield-halved"></i></div>
                            <h5 class="fw-bold">Enterprise Redundancy</h5>
                            <p class="small text-muted mb-0">Maintain records with zero downtime. Built on Edco Cloud Nodes with high-end encryption for sensitive member data.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ENGAGEMENT SECTION -->
        <section class="py-120 bg-light">
            <div class="container">
                <div class="impact-box" data-aos="fade-up">
                    <div class="row align-items-center">
                        <div class="col-lg-7">
                            <h2 class="text-white display-5 mb-4">Empowering Stakeholder Connections</h2>
                            <p class="lead text-white-50 mb-4">The most powerful connection a church can make is through its members. Ekkilsia binds your ministry to technology for maximum impact.</p>
                            <div class="row g-4">
                                <div class="col-sm-6">
                                    <h6 class="text-white fw-bold"><i class="fa-solid fa-check-circle text-info me-2"></i> Global Remote Access</h6>
                                    <p class="small text-white-50">Manage your branch from anywhere in the world.</p>
                                </div>
                                <div class="col-sm-6">
                                    <h6 class="text-white fw-bold"><i class="fa-solid fa-check-circle text-info me-2"></i> Reduce Operational Risk</h6>
                                    <p class="small text-white-50">Automated backups ensure your legacy is preserved.</p>
                                </div>
                            </div>
                            <a href="?page=quation" class="btn btn-light btn-lg px-4 py-3 mt-5 fw-bold text-primary">Request Individual Branch Demo</a>
                        </div>
                        <div class="col-lg-5 d-none d-lg-block">
                            <img src="assets/img/ghana-church-community.png" class="img-fluid rounded-4 shadow-lg" alt="Faith Community">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- FINAL CTA -->
        <section class="py-5 bg-white">
            <div class="container text-center py-5">
                <h2 class="display-5 mb-4">Digital Transformation for your Ministry</h2>
                <p class="text-muted lead mb-5 mx-auto" style="max-width: 600px;">Join the growing number of churches leveraging Ekkilsia to create an environment for spiritual and administrative success.</p>
                <div class="d-flex justify-content-center gap-3">
                    <a href="?page=quation" class="btn-demo-live"><i class="fa-solid fa-rocket me-2"></i> Launch Live Environment</a>
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