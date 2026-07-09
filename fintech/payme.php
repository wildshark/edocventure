<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" href="/assets/img/EDCO.png" type="image/png">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>PayMe | Edco Ventures - Fees Billing & Collection Portal</title>
    <meta name="description" content="PayMe: The intelligent billing and fee collection portal with integrated coupon management for modern enterprises and institutions.">

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
            --payme-accent: #8b5cf6; /* Violet for Billing/Finance */
            --payme-soft: #f5f3ff;
        }

        body { font-family: 'Inter', sans-serif; color: #475569; overflow-x: hidden; line-height: 1.7; }
        h1, h2, h3, h4, .display-4, .display-5 { font-family: 'Outfit', sans-serif; font-weight: 800; color: var(--edco-dark); letter-spacing: -0.02em; }

        /* --- NAVIGATION --- */
        .navbar { background: #fff; border-bottom: 1px solid rgba(0,0,0,0.05); padding: 15px 0; }
        .nav-link { font-weight: 600; color: var(--edco-dark) !important; padding: 10px 18px !important; }

        /* --- PRODUCT HERO --- */
        .product-hero { 
            background: linear-gradient(135deg, #f5f3ff 0%, #fff 100%);
            padding: 120px 0 100px;
        }
        .hero-badge { 
            background: var(--payme-soft); color: var(--payme-accent); 
            padding: 8px 20px; border-radius: 50px; 
            font-weight: 700; font-size: 0.85rem; text-transform: uppercase; 
            display: inline-block; margin-bottom: 20px;
        }

        /* --- FEATURE CARDS --- */
        .pay-card {
            background: #fff;
            padding: 40px;
            border-radius: 24px;
            border: 1px solid #e2e8f0;
            transition: 0.3s;
            height: 100%;
        }
        .pay-card:hover { transform: translateY(-10px); border-color: var(--payme-accent); box-shadow: 0 25px 50px rgba(139, 92, 246, 0.1); }
        .pay-icon { 
            width: 50px; height: 50px; background: var(--payme-soft); 
            color: var(--payme-accent); border-radius: 12px; 
            display: flex; align-items: center; justify-content: center; 
            font-size: 1.5rem; margin-bottom: 25px; 
        }

        /* --- COUPON SECTION --- */
        .coupon-box {
            background: var(--edco-dark);
            color: white;
            border-radius: 30px;
            padding: 80px 60px;
            position: relative;
            overflow: hidden;
            border-top: 8px solid var(--payme-accent);
        }

        /* --- CTA BUTTONS --- */
        .btn-payme { 
            background: var(--payme-accent); color: white; border: none; 
            padding: 16px 35px; border-radius: 12px; font-weight: 700; 
            transition: 0.3s; box-shadow: 0 10px 20px rgba(139, 92, 246, 0.3);
            text-decoration: none; display: inline-block;
        }
        .btn-payme:hover { background: var(--edco-primary); color: white; transform: translateY(-3px); }

        .invoice-mockup {
            border: 1px solid #e2e8f0;
            background: #fff;
            padding: 20px;
            border-radius: 15px;
            box-shadow: 0 20px 40px rgba(0,0,0,0.05);
            max-width: 400px;
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
        body[data-theme="dark"] .pay-card,
        body[data-theme="dark"] .stat-card { background: #1e293b !important; border-color: rgba(255,255,255,0.08) !important; }
        body[data-theme="dark"] .pay-card h1, body[data-theme="dark"] .pay-card h2,
        body[data-theme="dark"] .pay-card h3, body[data-theme="dark"] .pay-card h4,
        body[data-theme="dark"] .pay-card h5, body[data-theme="dark"] .pay-card h6 { color: #f1f5f9 !important; }
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
                        <span class="hero-badge">Smart Collection Ecosystem</span>
                        <h1 class="display-3 mb-4">Recover Revenue <br><span class="text-primary">Without the Friction.</span></h1>
                        <p class="lead mb-5 text-muted">
                            PayMe is a high-performance fees billing and collection portal engineered to bind institutional operations with modern payment technology. Automate your invoicing, manage coupons, and secure your cash flow with Edco's world-class infrastructure.
                        </p>
                        <div class="d-flex flex-column flex-sm-row gap-3">
                            <a href="?page=quation" class="btn-payme"><i class="fa-solid fa-play-circle me-2"></i> Launch Live Demo</a>
                            <a href="?page=quation" class="btn btn-outline-dark px-4 py-3 border-2 fw-bold rounded-3">Request Quote</a>
                        </div>
                        <div class="mt-4 small text-muted">
                            <i class="fa-solid fa-file-invoice me-2 text-primary"></i> Automated Invoicing & Bulk Reminders
                        </div>
                    </div>
                    <div class="col-lg-5 text-center" data-aos="zoom-in">
                        <div class="invoice-mockup mx-auto">
                            <div class="d-flex justify-content-between mb-4 border-bottom pb-2">
                                <span class="fw-bold">INVOICE #8821</span>
                                <span class="badge bg-success">PAID</span>
                            </div>
                            <div class="text-start mb-3">
                                <small class="text-muted d-block">Billed To:</small>
                                <span class="fw-bold">Global Enterprise Academy</span>
                            </div>
                            <div class="d-flex justify-content-between mb-2">
                                <span>Tuition Fees</span>
                                <span class="fw-bold">$1,200.00</span>
                            </div>
                            <div class="d-flex justify-content-between mb-2 text-success">
                                <span>Coupon (SUMMER24)</span>
                                <span class="fw-bold">-$200.00</span>
                            </div>
                            <div class="d-flex justify-content-between mt-3 pt-3 border-top">
                                <span class="h5 mb-0">Total Due</span>
                                <span class="h5 mb-0 fw-bold">$1,000.00</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- CORE FEATURES -->
        <section class="py-120 bg-white">
            <div class="container">
                <div class="text-center mb-5" data-aos="fade-up">
                    <h6 class="text-primary fw-bold text-uppercase">Collection Intelligence</h6>
                    <h2 class="display-5">Purpose-Built for Institutions</h2>
                </div>
                <div class="row g-4">
                    <!-- Feature 1 -->
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="pay-card">
                            <div class="pay-icon"><i class="fa-solid fa-receipt"></i></div>
                            <h5 class="fw-bold">Dynamic Billing Engine</h5>
                            <p class="small text-muted mb-0">Generate thousands of customized invoices for students or clients in seconds based on fixed-cost strategies or dynamic variables.</p>
                        </div>
                    </div>
                    <!-- Feature 2 -->
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="pay-card">
                            <div class="pay-icon"><i class="fa-solid fa-ticket-simple"></i></div>
                            <h5 class="fw-bold">Coupon & Grant Manager</h5>
                            <p class="small text-muted mb-0">Create scholarships, seasonal discounts, or early-bird coupons. Track usage metrics and limit redemptions per stakeholder.</p>
                        </div>
                    </div>
                    <!-- Feature 3 -->
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="pay-card">
                            <div class="pay-icon"><i class="fa-solid fa-vault"></i></div>
                            <h5 class="fw-bold">Centralized Collection</h5>
                            <p class="small text-muted mb-0">Seamlessly integrated with Quest Pay and CashWired. Accept credit cards, mobile wallets, and wire transfers in one portal.</p>
                        </div>
                    </div>
                    <!-- Feature 4 -->
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                        <div class="pay-card">
                            <div class="pay-icon"><i class="fa-solid fa-bell"></i></div>
                            <h5 class="fw-bold">Automated Reminders</h5>
                            <p class="small text-muted mb-0">Increase satisfaction by alerting stakeholders of upcoming fees via SMSBox-247 integration before deadlines occur.</p>
                        </div>
                    </div>
                    <!-- Feature 5 -->
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                        <div class="pay-card">
                            <div class="pay-icon"><i class="fa-solid fa-file-chart-column"></i></div>
                            <h5 class="fw-bold">Audit Transparency</h5>
                            <p class="small text-muted mb-0">Immutable records minimize risk of data loss. Every payment is tracked with a unique digital signature and verifiable receipt.</p>
                        </div>
                    </div>
                    <!-- Feature 6 -->
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
                        <div class="pay-card">
                            <div class="pay-icon"><i class="fa-solid fa-users-gear"></i></div>
                            <h5 class="fw-bold">SLA Compliance</h5>
                            <p class="small text-muted mb-0">Tailored to your budget. Manage branch-level billing for organizations operating across multiple continents.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- IMPACT SECTION -->
        <section class="py-120 bg-light">
            <div class="container">
                <div class="coupon-box" data-aos="fade-up">
                    <div class="row align-items-center">
                        <div class="col-lg-7">
                            <h2 class="text-white display-5 mb-4">Empower Your Business <br>Operations.</h2>
                            <p class="lead text-white-50 mb-5">PayMe provides a practical IT solution that enables you to focus on your core business while we ensure your revenue operations continue flawlessly through automation.</p>
                            
                            <div class="row g-4 mb-5">
                                <div class="col-sm-6">
                                    <h6 class="text-white fw-bold"><i class="fa-solid fa-circle-check text-info me-2"></i> Cut Operational Costs</h6>
                                    <p class="small text-white-50">Eliminate manual ledger entries and reduce error-based revenue loss.</p>
                                </div>
                                <div class="col-sm-6">
                                    <h6 class="text-white fw-bold"><i class="fa-solid fa-circle-check text-info me-2"></i> Minimize Downtime</h6>
                                    <p class="small text-white-50">Virtualization of billing ensures your portal is live 24/7 across all continents.</p>
                                </div>
                            </div>

                            <a href="?page=quation" class="btn btn-info btn-lg px-4 py-3 fw-bold text-white">Start Smart Billing</a>
                        </div>
                        <div class="col-lg-5 d-none d-lg-block text-center">
                            <img src="assets/img/fintech-payme-financial-success.png" class="img-fluid rounded-4 shadow-lg" alt="Financial Success">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- FINAL CTA -->
        <section class="py-5 bg-white text-center">
            <div class="container py-5">
                <h2 class="display-5 mb-4">Bind Your Revenue to Modern Tech</h2>
                <p class="text-muted lead mb-5 mx-auto" style="max-width: 600px;">Unlock a more efficient way to collect fees and manage institutional finance with the PayMe ecosystem.</p>
                <a href="?page=quation" class="btn-payme"><i class="fa-solid fa-bolt me-2"></i> Experience PayMe Demo</a>
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