<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>CashWired | Edco Ventures - Digital Micro-Banking & Susu Engine</title>
    <meta name="description" content="CashWired: The ultimate digital banking engine for micro-banking, Susu savings, and community fund management.">

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
            --cash-accent: #10b981; /* Emerald Green for Wealth/Banking */
            --cash-soft: #ecfdf5;
        }

        body { font-family: 'Inter', sans-serif; color: #475569; overflow-x: hidden; line-height: 1.7; }
        h1, h2, h3, h4, .display-4, .display-5 { font-family: 'Outfit', sans-serif; font-weight: 800; color: var(--edco-dark); letter-spacing: -0.02em; }

        /* --- NAVIGATION --- */
        .navbar { background: #fff; border-bottom: 1px solid rgba(0,0,0,0.05); padding: 15px 0; }
        .nav-link { font-weight: 600; color: var(--edco-dark) !important; padding: 10px 18px !important; }

        /* --- PRODUCT HERO --- */
        .product-hero { 
            background: linear-gradient(135deg, #f0fdf4 0%, #fff 100%);
            padding: 120px 0 100px;
        }
        .hero-badge { 
            background: var(--cash-soft); color: var(--cash-accent); 
            padding: 8px 20px; border-radius: 50px; 
            font-weight: 700; font-size: 0.85rem; text-transform: uppercase; 
            display: inline-block; margin-bottom: 20px;
        }

        /* --- BANKING FEATURE CARDS --- */
        .bank-card {
            background: #fff;
            padding: 40px;
            border-radius: 24px;
            border: 1px solid #e2e8f0;
            transition: 0.3s;
            height: 100%;
        }
        .bank-card:hover { transform: translateY(-10px); border-color: var(--cash-accent); box-shadow: 0 25px 50px rgba(16, 185, 129, 0.1); }
        .bank-icon { 
            width: 50px; height: 50px; background: var(--cash-soft); 
            color: var(--cash-accent); border-radius: 12px; 
            display: flex; align-items: center; justify-content: center; 
            font-size: 1.5rem; margin-bottom: 25px; 
        }

        /* --- COMMUNITY SECTION --- */
        .community-box {
            background: var(--edco-dark);
            color: white;
            border-radius: 30px;
            padding: 80px 60px;
            position: relative;
            overflow: hidden;
            border-right: 8px solid var(--cash-accent);
        }

        /* --- CTA BUTTONS --- */
        .btn-cash { 
            background: var(--cash-accent); color: white; border: none; 
            padding: 16px 35px; border-radius: 12px; font-weight: 700; 
            transition: 0.3s; box-shadow: 0 10px 20px rgba(16, 185, 129, 0.3);
            text-decoration: none; display: inline-block;
        }
        .btn-cash:hover { background: var(--edco-dark); color: white; transform: translateY(-3px); }

        .app-mockup {
            border: 12px solid var(--edco-dark);
            border-radius: 40px;
            box-shadow: 0 40px 80px rgba(0,0,0,0.15);
            max-width: 320px;
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
                    <div class="col-lg-7" data-aos="fade-right">
                        <span class="hero-badge">Financial Inclusion Engine</span>
                        <h1 class="display-3 mb-4">The Engine of <br><span class="text-success">Community Wealth.</span></h1>
                        <p class="lead mb-5 text-muted">
                            CashWired is an advanced digital banking engine designed to digitize Susu savings, community contributions, and micro-banking. We empower cooperatives and small-scale banks with the infrastructure to manage funds with total transparency and security.
                        </p>
                        <div class="d-flex flex-column flex-sm-row gap-3">
                            <a href="?page=quation" class="btn-cash"><i class="fa-solid fa-play-circle me-2"></i> Launch Live Demo</a>
                            <a href="?page=quation" class="btn btn-outline-dark px-4 py-3 border-2 fw-bold rounded-3">Solution Blueprint</a>
                        </div>
                        <div class="mt-4 small text-muted">
                            <i class="fa-solid fa-vault me-2 text-success"></i> High-Security Vaulting & Real-Time Ledger Sync
                        </div>
                    </div>
                    <div class="col-lg-5 text-center" data-aos="zoom-in">
                        <img src="assets/img/cashwired-mobile-ghana.png" class="img-fluid app-mockup" alt="CashWired Mobile Interface">
                    </div>
                </div>
            </div>
        </section>

        <!-- CORE CAPABILITIES -->
        <section class="py-120 bg-white">
            <div class="container">
                <div class="text-center mb-5" data-aos="fade-up">
                    <h6 class="text-primary fw-bold text-uppercase">Micro-Banking Infrastructure</h6>
                    <h2 class="display-5">Purpose-Built for Community Finance</h2>
                </div>
                <div class="row g-4">
                    <!-- Feature 1 -->
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="bank-card">
                            <div class="bank-icon"><i class="fa-solid fa-piggy-bank"></i></div>
                            <h5 class="fw-bold">Digital Susu / Esusu</h5>
                            <p class="small text-muted mb-0">Digitize traditional rotational savings. Manage cycles, contribution ranks, and automated payouts with total algorithmic fairness.</p>
                        </div>
                    </div>
                    <!-- Feature 2 -->
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="bank-card">
                            <div class="bank-icon"><i class="fa-solid fa-users-rectangle"></i></div>
                            <h5 class="fw-bold">Community Savings</h5>
                            <p class="small text-muted mb-0">Perfect for staff welfare groups or community associations. Track collective contributions and manage fund withdrawals securely.</p>
                        </div>
                    </div>
                    <!-- Feature 3 -->
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="bank-card">
                            <div class="bank-icon"><i class="fa-solid fa-wallet"></i></div>
                            <h5 class="fw-bold">Micro-Wallet Engine</h5>
                            <p class="small text-muted mb-0">Allow members to deposit, transfer, and withdraw via Quest Pay or bank integration. Full wallet-as-a-service (WaaS) capabilities.</p>
                        </div>
                    </div>
                    <!-- Feature 4 -->
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                        <div class="bank-card">
                            <div class="bank-icon"><i class="fa-solid fa-shield-check"></i></div>
                            <h5 class="fw-bold">Fund Transparency</h5>
                            <p class="small text-muted mb-0">Immutable digital ledgers ensure that every penny is accounted for. Real-time audit trails for all stakeholders.</p>
                        </div>
                    </div>
                    <!-- Feature 5 -->
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                        <div class="bank-card">
                            <div class="bank-icon"><i class="fa-solid fa-message"></i></div>
                            <h5 class="fw-bold">Automated Alerts</h5>
                            <p class="small text-muted mb-0">Integrated with SMSBox-247. Members receive instant contribution reminders and payment confirmations via SMS.</p>
                        </div>
                    </div>
                    <!-- Feature 6 -->
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
                        <div class="bank-card">
                            <div class="bank-icon"><i class="fa-solid fa-chart-line-up"></i></div>
                            <h5 class="fw-bold">Micro-Credit Ready</h5>
                            <p class="small text-muted mb-0">Advanced data analytics to assess savings patterns and offer automated micro-loans based on community history.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- IMPACT SECTION -->
        <section class="py-120 bg-light">
            <div class="container">
                <div class="community-box" data-aos="fade-up">
                    <div class="row align-items-center">
                        <div class="col-lg-7">
                            <h2 class="text-white display-5 mb-4">Empowering Social <br>Success Through IT.</h2>
                            <p class="lead text-white-50 mb-5">By leveraging the Edco footprint, CashWired provides a practical banking solution that minimizes the risk of fund mismanagement and security threats.</p>
                            
                            <div class="row g-4 mb-5">
                                <div class="col-sm-6">
                                    <h6 class="text-white fw-bold"><i class="fa-solid fa-check-circle text-success me-2"></i> Cut Operational Costs</h6>
                                    <p class="small text-white-50">Eliminate paper-based tracking and reduce administrative overhead.</p>
                                </div>
                                <div class="col-sm-6">
                                    <h6 class="text-white fw-bold"><i class="fa-solid fa-check-circle text-success me-2"></i> Minimize Risk</h6>
                                    <p class="small text-white-50">Virtualization and automation ensure business operations continue flawlessly.</p>
                                </div>
                            </div>

                            <a href="?page=quation" class="btn btn-success btn-lg px-4 py-3 fw-bold">Digitize Your Community Fund</a>
                        </div>
                        <div class="col-lg-5 d-none d-lg-block text-center">
                            <img src="assets/img/ghana-merchant-success.png" class="img-fluid rounded-4 shadow-lg" alt="Digital Growth">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- FINAL CTA -->
        <section class="py-5 bg-white text-center">
            <div class="container py-5">
                <h2 class="display-5 mb-4">Modernize Your Banking Operations</h2>
                <p class="text-muted lead mb-5 mx-auto" style="max-width: 600px;">Bind your financial community to the most advanced micro-banking technology available. Secure, transparent, and scalable.</p>
                <a href="?page=quation" class="btn-cash"><i class="fa-solid fa-bolt me-2"></i> Launch CashWired Demo</a>
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