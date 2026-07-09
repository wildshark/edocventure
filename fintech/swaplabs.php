<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" href="/assets/img/EDOC.webp" type="image/webp">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Swap Labs | Edoc Ventures - Real-time currency exchange and liquidity management</title>
    <meta name="description" content="Quest Pay: The ultimate payment solution for merchants and fundraisers. Instant scan-to-pay and secure crowdfunding powered by Edoc Ventures.">

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
            --quest-accent: #0ea5e9; /* Sky Blue for Fintech */
            --quest-soft: #f0f9ff;
        }

        body { font-family: 'Inter', sans-serif; color: #475569; overflow-x: hidden; line-height: 1.7; }
        h1, h2, h3, h4, .display-4, .display-5 { font-family: 'Outfit', sans-serif; font-weight: 800; color: var(--edoc-dark); letter-spacing: -0.02em; }

        /* --- NAVIGATION --- */
        .navbar { background: #fff; border-bottom: 1px solid rgba(0,0,0,0.05); padding: 15px 0; }
        .nav-link { font-weight: 600; color: var(--edoc-dark) !important; padding: 10px 18px !important; }

        /* --- PRODUCT HERO --- */
        .product-hero { 
            background: radial-gradient(circle at 100% 0%, #eef2ff 0%, #fff 100%);
            padding: 120px 0 100px;
        }
        .hero-badge { 
            background: #e0f2fe; color: var(--quest-accent); 
            padding: 8px 20px; border-radius: 50px; 
            font-weight: 700; font-size: 0.85rem; text-transform: uppercase; 
            display: inline-block; margin-bottom: 20px;
        }

        /* --- PILLAR BOXES --- */
        .pillar-card {
            background: #fff;
            padding: 40px;
            border-radius: 24px;
            border: 1px solid #e2e8f0;
            transition: 0.3s;
            height: 100%;
        }
        .pillar-card:hover { transform: translateY(-10px); border-color: var(--quest-accent); box-shadow: 0 25px 50px rgba(0,0,0,0.05); }
        .pillar-icon { 
            width: 60px; height: 60px; background: var(--quest-soft); 
            color: var(--quest-accent); border-radius: 15px; 
            display: flex; align-items: center; justify-content: center; 
            font-size: 1.8rem; margin-bottom: 25px; 
        }

        /* --- FEATURE LIST --- */
        .feature-item { display: flex; align-items: center; margin-bottom: 15px; font-weight: 500; font-size: 0.95rem; }
        .feature-item i { color: #10b981; margin-right: 12px; }

        /* --- IMPACT SECTION --- */
        .impact-bg {
            background: var(--edoc-dark);
            color: white;
            border-radius: 30px;
            padding: 80px 60px;
            position: relative;
            overflow: hidden;
        }

        /* --- CTA BUTTONS --- */
        .btn-quest { 
            background: var(--quest-accent); color: white; border: none; 
            padding: 16px 35px; border-radius: 12px; font-weight: 700; 
            transition: 0.3s; box-shadow: 0 10px 20px rgba(14, 165, 233, 0.3);
            text-decoration: none; display: inline-block;
        }
        .btn-quest:hover { background: var(--edoc-primary); color: white; transform: translateY(-3px); }

        .qr-mockup {
            max-width: 300px;
            border: 10px solid #fff;
            border-radius: 30px;
            box-shadow: 0 30px 60px rgba(0,0,0,0.1);
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
        body[data-theme="dark"] .pillar-card,
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
                        <span class="hero-badge">Next-Gen Payment Gateway</span>
                        <h1 class="display-3 mb-4">Real-time currency exchange and liquidity <span class="text-primary">management.</span></h1>
                        <p class="lead mb-5 text-muted">
                            Quest Pay is Edoc Ventures' flagship payment ecosystem. From high-speed Scan-to-Pay for retail merchants to secure, global crowdfunding for social impact, we provide the infrastructure for every transaction.
                        </p>
                        <div class="d-flex flex-column flex-sm-row gap-3">
                            <a href="/quation" class="btn-quest"><i class="fa-solid fa-qrcode me-2"></i> Launch Merchant Demo</a>
                            <a href="/quation" class="btn btn-outline-dark px-4 py-3 border-2 fw-bold rounded-3">Start a Fundraiser</a>
                        </div>
                        <div class="mt-4 small text-muted">
                            <i class="fa-solid fa-shield-check me-2 text-success"></i> PCI-DSS Compliant & Real-Time Fraud Monitoring
                        </div>
                    </div>
                    <div class="col-lg-5 text-center" data-aos="zoom-in">
                        <img src="/assets/img/fintech-swaplabs-qr-scanner.webp" class="img-fluid rounded-4 shadow-lg qr-mockup" alt="Quest Pay QR Scanner">
                    </div>
                </div>
            </div>
        </section>

        <!-- TWO PILLARS SECTION -->
        <section class="py-120 bg-white">
            <div class="container">
                <div class="text-center mb-5" data-aos="fade-up">
                    <h6 class="text-primary fw-bold text-uppercase">Dual-Purpose Infrastructure</h6>
                    <h2 class="display-5">One Gateway. Endless Possibilities.</h2>
                </div>
                <div class="row g-4">
                    <!-- Pillar 1: Merchant -->
                    <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
                        <div class="pillar-card">
                            <div class="pillar-icon"><i class="fa-solid fa-shop"></i></div>
                            <h3 class="fw-bold mb-3">Scan-to-Pay Merchant</h3>
                            <p class="text-muted mb-4">Empower your retail business with instant QR payments. Eliminate the need for expensive POS hardware and manual reconciliation.</p>
                            <div class="row g-2 mb-4">
                                <div class="col-6 feature-item"><i class="fa-solid fa-circle-check"></i> Instant Settlement</div>
                                <div class="col-6 feature-item"><i class="fa-solid fa-circle-check"></i> Zero Hardware Cost</div>
                                <div class="col-6 feature-item"><i class="fa-solid fa-circle-check"></i> Multi-Currency</div>
                                <div class="col-6 feature-item"><i class="fa-solid fa-circle-check"></i> Sales Analytics</div>
                            </div>
                            <a href="#" class="text-primary fw-bold text-decoration-none">Merchant Features <i class="fa-solid fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                    <!-- Pillar 2: Fundraising -->
                    <div class="col-lg-6" data-aos="fade-left" data-aos-delay="200">
                        <div class="pillar-card">
                            <div class="pillar-icon"><i class="fa-solid fa-hand-holding-heart"></i></div>
                            <h3 class="fw-bold mb-3">Go-Fund Crowdfunding</h3>
                            <p class="text-muted mb-4">Built for social impact and community growth. Launch secure fundraisers for education, health, or community projects in minutes.</p>
                            <div class="row g-2 mb-4">
                                <div class="col-6 feature-item"><i class="fa-solid fa-circle-check"></i> Viral Sharing Tools</div>
                                <div class="col-6 feature-item"><i class="fa-solid fa-circle-check"></i> Global Contributions</div>
                                <div class="col-6 feature-item"><i class="fa-solid fa-circle-check"></i> Transparency Logs</div>
                                <div class="col-6 feature-item"><i class="fa-solid fa-circle-check"></i> 0% Platform Fee*</div>
                            </div>
                            <a href="#" class="text-primary fw-bold text-decoration-none">Fundraising Vision <i class="fa-solid fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- FINTECH INFRASTRUCTURE IMPACT -->
        <section class="py-120 bg-light">
            <div class="container">
                <div class="impact-bg" data-aos="fade-up">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <h2 class="text-white display-5 mb-4">Binding Finance <br>to Stakeholders.</h2>
                            <p class="lead text-white-50 mb-5">Quest Pay leverages Edoc Ventures' global footprint to provide a practical payment solution that creates an environment for financial success and stakeholder engagement.</p>
                            
                            <div class="d-flex mb-4">
                                <div class="me-3 text-info"><i class="fa-solid fa-shield-halved fa-2x"></i></div>
                                <div>
                                    <h6 class="text-white fw-bold mb-1">Risk Minimization</h6>
                                    <p class="small text-white-50">Advanced encryption and automation ensure business operations continue through high-security virtualization.</p>
                                </div>
                            </div>
                            <div class="d-flex mb-5">
                                <div class="me-3 text-info"><i class="fa-solid fa-chart-line fa-2x"></i></div>
                                <div>
                                    <h6 class="text-white fw-bold mb-1">Cut Operational Costs</h6>
                                    <p class="small text-white-50">Our tailor-made strategies help you update your IT strategy while maximizing transaction value.</p>
                                </div>
                            </div>

                            <a href="/quation" class="btn btn-info btn-lg px-4 py-3 fw-bold text-white">Join the Payment Revolution</a>
                        </div>
                        <div class="col-lg-6 d-none d-lg-block text-center">
                            <img src="/assets/img/fintech-swaplabs-digital-economy.webp" class="img-fluid rounded-4 shadow-lg border-primary" alt="Digital Economy">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- FINAL CTA -->
        <section class="py-5 bg-white text-center">
            <div class="container py-5">
                <h2 class="display-5 mb-4">Launch Your Transactional Ecosystem</h2>
                <p class="text-muted lead mb-5 mx-auto" style="max-width: 600px;">Experience the power of Quest Pay. Secure, scalable, and engineered for the modern dynamic business.</p>
                <a href="/quation" class="btn-quest"><i class="fa-solid fa-bolt me-2"></i> Launch Quest Pay Demo</a>
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