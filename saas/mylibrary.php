<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" href="/assets/img/EDCO.png" type="image/png">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>myLibrary | Edco Ventures - Hybrid Asset Management Ecosystem</title>
    <meta name="description" content="myLibrary: Advanced management for books, audio, and VOD. The ultimate educational asset hub with full online and offline capabilities.">

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
            --library-accent: #f59e0b; /* Amber for Knowledge/Library feel */
        }

        body { font-family: 'Inter', sans-serif; color: #475569; overflow-x: hidden; line-height: 1.7; }
        h1, h2, h3, h4, .display-4, .display-5 { font-family: 'Outfit', sans-serif; font-weight: 800; color: var(--edco-dark); letter-spacing: -0.02em; }

        /* --- NAVIGATION --- */
        .navbar { background: #fff; border-bottom: 1px solid rgba(0,0,0,0.05); padding: 15px 0; }
        .nav-link { font-weight: 600; color: var(--edco-dark) !important; padding: 10px 18px !important; }

        /* --- PRODUCT HERO --- */
        .product-hero { 
            background: linear-gradient(135deg, #fffcf5 0%, #f1f5f9 100%);
            padding: 120px 0 100px;
        }
        .hero-badge { 
            background: #fef3c7; color: #92400e; 
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
        .feature-card:hover { transform: translateY(-10px); border-color: var(--library-accent); box-shadow: 0 20px 40px rgba(0,0,0,0.05); }
        .feature-icon { 
            width: 50px; height: 50px; background: #fffbeb; 
            color: var(--library-accent); border-radius: 12px; 
            display: flex; align-items: center; justify-content: center; 
            font-size: 1.5rem; margin-bottom: 25px; 
        }

        /* --- HYBRID BLOCK --- */
        .hybrid-box {
            background: var(--edco-dark);
            color: white;
            border-radius: 30px;
            padding: 60px;
            position: relative;
            overflow: hidden;
            border-left: 8px solid var(--library-accent);
        }

        /* --- CTA BUTTONS --- */
        .btn-demo-live { 
            background: var(--edco-primary); color: white; border: none; 
            padding: 16px 35px; border-radius: 12px; font-weight: 700; 
            transition: 0.3s; box-shadow: 0 10px 20px rgba(79, 70, 229, 0.3);
            text-decoration: none; display: inline-block;
        }
        .btn-demo-live:hover { background: var(--edco-dark); color: white; transform: translateY(-3px); }

        .tag-offline { background: #dcfce7; color: #166534; padding: 4px 12px; border-radius: 6px; font-size: 0.7rem; font-weight: 700; }
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
                    <div class="col-lg-7" data-aos="fade-right">
                        <span class="hero-badge">Educational Asset Hub</span>
                        <h1 class="display-3 mb-4">Digitize Knowledge. <br><span class="text-primary">Anywhere, Anytime.</span></h1>
                        <p class="lead mb-5 text-muted">
                            myLibrary is a unified asset management ecosystem designed to bind physical books, digital audio, and high-definition video into a single educational hub. Built for institutions that demand both high-speed online streaming and reliable offline access.
                        </p>
                        <div class="d-flex flex-column flex-sm-row gap-3">
                            <a href="?page=quation" class="btn-demo-live"><i class="fa-solid fa-play-circle me-2"></i> Launch Live Demo</a>
                            <a href="?page=quation" class="btn btn-outline-dark px-4 py-3 border-2 fw-bold rounded-3">Solution Blueprint</a>
                        </div>
                        <div class="mt-4">
                            <span class="tag-offline me-2"><i class="fa-solid fa-wifi-slash me-1"></i> OFFLINE MODE READY</span>
                            <span class="tag-offline" style="background: #e0f2fe; color: #0369a1;"><i class="fa-solid fa-file-video me-1"></i> VOD INTEGRATED</span>
                        </div>
                    </div>
                    <div class="col-lg-5" data-aos="zoom-in">
                        <img src="assets/img/mylibrary-dashboard-ghana.png" class="img-fluid rounded-4 shadow-lg border" alt="Digital Library Mockup">
                    </div>
                </div>
            </div>
        </section>

        <!-- CORE FEATURES -->
        <section class="py-120 bg-white">
            <div class="container">
                <div class="text-center mb-5" data-aos="fade-up">
                    <h6 class="text-primary fw-bold text-uppercase">The Repository Suite</h6>
                    <h2 class="display-5">Total Asset Control</h2>
                </div>
                <div class="row g-4">
                    <!-- Feature 1 -->
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="feature-card">
                            <div class="feature-icon"><i class="fa-solid fa-book-atlas"></i></div>
                            <h5 class="fw-bold">Smart Cataloging</h5>
                            <p class="small text-muted mb-0">Manage thousands of physical and digital books. Includes ISBN scanning, automated metadata fetching, and real-time inventory tracking.</p>
                        </div>
                    </div>
                    <!-- Feature 2 -->
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="feature-card">
                            <div class="feature-icon"><i class="fa-solid fa-clapperboard"></i></div>
                            <h5 class="fw-bold">VOD For Education</h5>
                            <p class="small text-muted mb-0">Powered by Edco VOD Manager. Stream high-definition educational videos and lectures directly through the library portal.</p>
                        </div>
                    </div>
                    <!-- Feature 3 -->
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="feature-card">
                            <div class="feature-icon"><i class="fa-solid fa-headphones-simple"></i></div>
                            <h5 class="fw-bold">Audio Resource Hub</h5>
                            <p class="small text-muted mb-0">Host audiobooks, recorded seminars, and language labs. Advanced playback features including speed control and bookmarks.</p>
                        </div>
                    </div>
                    <!-- Feature 4 -->
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                        <div class="feature-card">
                            <div class="feature-icon"><i class="fa-solid fa-cloud-arrow-down"></i></div>
                            <h5 class="fw-bold">Offline Sync Engine</h5>
                            <p class="small text-muted mb-0">Allow students to download assets for study in low-connectivity environments. Progress syncs automatically once re-connected.</p>
                        </div>
                    </div>
                    <!-- Feature 5 -->
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                        <div class="feature-card">
                            <div class="feature-icon"><i class="fa-solid fa-id-card-clip"></i></div>
                            <h5 class="fw-bold">E-Card & Lending</h5>
                            <p class="small text-muted mb-0">Automated borrowing systems for physical books with barcode generation and late-return SMS notifications via SMSBox-247.</p>
                        </div>
                    </div>
                    <!-- Feature 6 -->
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
                        <div class="feature-card">
                            <div class="feature-icon"><i class="fa-solid fa-magnifying-glass-chart"></i></div>
                            <h5 class="fw-bold">Asset Intelligence</h5>
                            <p class="small text-muted mb-0">Comprehensive reports on asset popularity, student engagement metrics, and resource utilization for administrative planning.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- OFFLINE/HYBRID IMPACT -->
        <section class="py-120 bg-light">
            <div class="container">
                <div class="hybrid-box" data-aos="fade-up">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <h2 class="text-white display-5 mb-4">Education Without Borders.</h2>
                            <p class="lead text-white-50 mb-5">By leveraging our global infrastructure, myLibrary defies connectivity challenges, ensuring educational materials are available even in the most remote locations.</p>
                            
                            <div class="d-flex mb-4">
                                <div class="me-3 text-warning"><i class="fa-solid fa-circle-check fa-xl"></i></div>
                                <div><h6 class="text-white mb-0">Local Server Deployment for Schools</h6></div>
                            </div>
                            <div class="d-flex mb-4">
                                <div class="me-3 text-warning"><i class="fa-solid fa-circle-check fa-xl"></i></div>
                                <div><h6 class="text-white mb-0">Zero-Latency Offline Playback</h6></div>
                            </div>
                            <div class="d-flex mb-5">
                                <div class="me-3 text-warning"><i class="fa-solid fa-circle-check fa-xl"></i></div>
                                <div><h6 class="text-white mb-0">Cross-Continent Asset Distribution</h6></div>
                            </div>

                            <a href="?page=quation" class="btn btn-warning btn-lg px-4 py-3 fw-bold">Discuss Offline Infrastructure</a>
                        </div>
                        <div class="col-lg-6 d-none d-lg-block">
                            <img src="assets/img/ghana-digital-library.png" class="img-fluid rounded-4" alt="Library Infrastructure">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- FINAL CTA -->
        <section class="py-5 bg-white text-center">
            <div class="container py-5">
                <h2 class="display-5 mb-4">Bind Your Knowledge to Technology</h2>
                <p class="text-muted lead mb-5 mx-auto" style="max-width: 600px;">Join the institutions that are redefining the library experience through Edco Ventures' intelligent ecosystems.</p>
                <a href="?page=quation" class="btn-demo-live"><i class="fa-solid fa-rocket me-2"></i> Launch myLibrary Demo</a>
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