<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" href="/assets/img/EDOC.webp" type="image/webp">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>eLearning Pro | Edoc Ventures - Future-Ready School Management</title>
    <meta name="description" content="eLearning Pro: The most comprehensive School Management & Learning Ecosystem for modern institutions.">

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
            --learning-accent: #6366f1;
        }

        body { font-family: 'Inter', sans-serif; color: #475569; overflow-x: hidden; line-height: 1.7; }
        h1, h2, h3, h4, .display-4, .display-5 { font-family: 'Outfit', sans-serif; font-weight: 800; color: var(--edoc-dark); letter-spacing: -0.02em; }

        /* --- NAVIGATION --- */
        .navbar { background: #fff; border-bottom: 1px solid rgba(0,0,0,0.05); padding: 15px 0; }
        .nav-link { font-weight: 600; color: var(--edoc-dark) !important; padding: 10px 18px !important; }

        /* --- PRODUCT HERO --- */
        .product-hero { 
            background: linear-gradient(135deg, #f8fafc 0%, #eef2ff 100%);
            padding: 120px 0 100px;
            overflow: hidden;
        }
        .hero-badge { 
            background: #e0e7ff; color: var(--edoc-primary); 
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
        .feature-card:hover { transform: translateY(-10px); border-color: var(--edoc-primary); box-shadow: 0 20px 40px rgba(0,0,0,0.05); }
        .feature-icon { 
            width: 50px; height: 50px; background: #f1f5f9; 
            color: var(--edoc-primary); border-radius: 12px; 
            display: flex; align-items: center; justify-content: center; 
            font-size: 1.5rem; margin-bottom: 25px; 
        }

        /* --- BENEFIT SECTION --- */
        .benefit-item { margin-bottom: 30px; display: flex; align-items: start; }
        .benefit-check { width: 25px; height: 25px; background: #dcfce7; color: #16a34a; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-right: 15px; flex-shrink: 0; margin-top: 5px; font-size: 0.8rem; }

        /* --- CTA BUTTONS --- */
        .btn-demo-live { 
            background: var(--edoc-primary); color: white; border: none; 
            padding: 16px 35px; border-radius: 12px; font-weight: 700; 
            transition: 0.3s; box-shadow: 0 10px 20px rgba(79, 70, 229, 0.3);
            text-decoration: none; display: inline-block;
        }
        .btn-demo-live:hover { background: var(--edoc-dark); color: white; transform: translateY(-3px); }

        /* --- DASHBOARD MOCKUP --- */
        .mockup-container { position: relative; z-index: 1; }
        .mockup-container::before {
            content: ''; position: absolute; top: 10%; left: 10%; width: 100%; height: 100%;
            background: var(--edoc-primary); opacity: 0.05; border-radius: 30% 70% 70% 30% / 30% 30% 70% 70%;
            z-index: -1; filter: blur(50px);
        }
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
                        <span class="hero-badge">Enterprise Education Suite</span>
                        <h1 class="display-3 mb-4">The Future of <span class="text-primary">Campus Intelligence.</span></h1>
                        <p class="lead mb-5 text-muted">
                            eLearning Pro is a full-service school management ecosystem. We enable educational institutions to focus on learning by providing a practical IT solution that creates an environment for academic success.
                        </p>
                        <div class="d-flex flex-column flex-sm-row gap-3">
                            <a href="/quation" class="btn-demo-live"><i class="fa-solid fa-play-circle me-2"></i> Launch Live Demo</a>
                            <a href="/quation" class="btn btn-outline-dark px-4 py-3 border-2 fw-bold rounded-3">Download Brochure</a>
                        </div>
                        <div class="mt-4 small text-muted">
                            <i class="fa-solid fa-shield-halved me-2"></i> ISO 27001 Certified & GDPR Compliant
                        </div>
                    </div>
                    <div class="col-lg-6" data-aos="zoom-in">
                        <div class="mockup-container text-center">
                            <!-- Placeholder: Replace with a dashboard UI screenshot -->
                            <img src="/assets/img/elearning-dashboard-ghana.webp" class="img-fluid rounded-4 shadow-lg" alt="eLearning Pro Dashboard">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- PRODUCT OVERVIEW -->
        <section class="py-120 bg-white">
            <div class="container">
                <div class="row justify-content-center text-center mb-5">
                    <div class="col-lg-8" data-aos="fade-up">
                        <h2 class="display-5">Binding Education and Technology</h2>
                        <p class="text-muted mt-4">
                            We bind together administrators, teachers, parents, and students through a unified platform that provides a real advantage to your institution. Our software touches every stakeholder, ensuring the most powerful connection possible.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- FEATURES GRID -->
        <section class="py-120 bg-light">
            <div class="container">
                <div class="text-center mb-5">
                    <h6 class="text-primary fw-bold text-uppercase">Core Features</h6>
                    <h2 class="display-5">Engineered for Complexity</h2>
                </div>
                <div class="row g-4">
                    <!-- Feature 1 -->
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="feature-card">
                            <div class="feature-icon"><i class="fa-solid fa-id-card"></i></div>
                            <h5>Student Lifecycle Management</h5>
                            <p class="small text-muted mb-0">From admission to graduation. Track academic records, attendance, and behavioral history in one secure database.</p>
                        </div>
                    </div>
                    <!-- Feature 2 -->
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="feature-card">
                            <div class="feature-icon"><i class="fa-solid fa-file-invoice-dollar"></i></div>
                            <h5>Automated Fee Collection</h5>
                            <p class="small text-muted mb-0">Integrated with PayMe and Quest Pay. Automated invoicing, receipt generation, and real-time financial reporting.</p>
                        </div>
                    </div>
                    <!-- Feature 3 -->
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="feature-card">
                            <div class="feature-icon"><i class="fa-solid fa-laptop-code"></i></div>
                            <h5>Hybrid LMS Integration</h5>
                            <p class="small text-muted mb-0">Deliver virtual classes, online examinations, and interactive assignments with VOD Manager streaming nodes.</p>
                        </div>
                    </div>
                    <!-- Feature 4 -->
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                        <div class="feature-card">
                            <div class="feature-icon"><i class="fa-solid fa-users-viewfinder"></i></div>
                            <h5>Stakeholder Portals</h5>
                            <p class="small text-muted mb-0">Dedicated portals for Parents, Teachers, and Students to ensure seamless engagement and worker mobility.</p>
                        </div>
                    </div>
                    <!-- Feature 5 -->
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                        <div class="feature-card">
                            <div class="feature-icon"><i class="fa-solid fa-chart-pie"></i></div>
                            <h5>AI-Driven Reporting</h5>
                            <p class="small text-muted mb-0">Generate complex insights into school performance, student progress, and operational efficiency with one click.</p>
                        </div>
                    </div>
                    <!-- Feature 6 -->
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
                        <div class="feature-card">
                            <div class="feature-icon"><i class="fa-solid fa-lock"></i></div>
                            <h5>Enterprise Redundancy</h5>
                            <p class="small text-muted mb-0">Powered by Edoc Cloud Nodes. Minimize data loss risk with automated backups and 99.9% virtualization uptime.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- BENEFITS SECTION -->
        <section class="py-120 bg-white">
            <div class="container">
                <div class="row align-items-center g-5">
                    <div class="col-lg-6" data-aos="fade-right">
                        <img src="/assets/img/elearning-institutional-success.webp" class="img-fluid rounded-4 shadow-lg" alt="Institutional Success">
                    </div>
                    <div class="col-lg-6" data-aos="fade-left">
                        <h2 class="display-5 mb-4">Empowering Your Institution</h2>
                        <p class="mb-5">Our eLearning Pro solution provides a real advantage by cutting operational costs and ensuring your business operations continue without friction.</p>
                        
                        <div class="benefit-item">
                            <div class="benefit-check"><i class="fa-solid fa-check"></i></div>
                            <div>
                                <h6 class="fw-bold mb-1">Operational Cost Reduction</h6>
                                <p class="small mb-0">Minimize administrative overhead through virtualization and process automation.</p>
                            </div>
                        </div>
                        <div class="benefit-item">
                            <div class="benefit-check"><i class="fa-solid fa-check"></i></div>
                            <div>
                                <h6 class="fw-bold mb-1">Enhanced Communication</h6>
                                <p class="small mb-0">Increase transparency between stakeholders essential for dynamic challenges like worker mobility.</p>
                            </div>
                        </div>
                        <div class="benefit-item">
                            <div class="benefit-check"><i class="fa-solid fa-check"></i></div>
                            <div>
                                <h6 class="fw-bold mb-1">Security & Continuity</h6>
                                <p class="small mb-0">Eliminate downtime and data loss threats through our robust cloud footprint.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- FINAL CTA -->
        <section class="py-5">
            <div class="container">
                <div class="p-5 rounded-5 text-center text-white" style="background: var(--edoc-dark);">
                    <h2 class="text-white display-5 mb-4">Experience eLearning Pro Today</h2>
                    <p class="text-white-50 lead mb-5 mx-auto" style="max-width: 600px;">Join hundreds of institutions worldwide leveraging Edoc technology to redefine education.</p>
                    <a href="/quation" class="btn-demo-live"><i class="fa-solid fa-rocket me-2"></i> Launch Live Environment</a>
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