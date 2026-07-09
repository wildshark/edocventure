<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>eAccounting | Edco Ventures - AI-Powered Bookkeeping & Financial Reporting</title>
    <meta name="description" content="eAccounting: Advanced hybrid accounting system with AI-driven financial analysis and reporting for online and offline operations.">

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
            --ai-accent: #8b5cf6; /* Purple for AI Intelligence */
            --success-accent: #10b981;
        }

        body { font-family: 'Inter', sans-serif; color: #475569; overflow-x: hidden; line-height: 1.7; }
        h1, h2, h3, h4, .display-4, .display-5 { font-family: 'Outfit', sans-serif; font-weight: 800; color: var(--edco-dark); letter-spacing: -0.02em; }

        /* --- NAVIGATION --- */
        .navbar { background: #fff; border-bottom: 1px solid rgba(0,0,0,0.05); padding: 15px 0; }
        .nav-link { font-weight: 600; color: var(--edco-dark) !important; padding: 10px 18px !important; }

        /* --- PRODUCT HERO --- */
        .product-hero { 
            background: radial-gradient(circle at 100% 100%, #f5f3ff 0%, #fff 100%);
            padding: 120px 0 100px;
        }
        .hero-badge { 
            background: #f3f0ff; color: var(--ai-accent); 
            padding: 8px 20px; border-radius: 50px; 
            font-weight: 700; font-size: 0.85rem; text-transform: uppercase; 
            display: inline-block; margin-bottom: 20px;
        }

        /* --- AI FEATURE CARDS --- */
        .ai-card {
            background: #fff;
            padding: 40px;
            border-radius: 24px;
            border: 1px solid #e2e8f0;
            transition: 0.3s;
            height: 100%;
        }
        .ai-card:hover { transform: translateY(-10px); border-color: var(--ai-accent); box-shadow: 0 25px 50px rgba(139, 92, 246, 0.1); }
        .ai-icon { 
            width: 55px; height: 55px; background: #f3f0ff; 
            color: var(--ai-accent); border-radius: 14px; 
            display: flex; align-items: center; justify-content: center; 
            font-size: 1.6rem; margin-bottom: 25px; 
        }

        /* --- HYBRID/OFFLINE SECTION --- */
        .hybrid-box {
            background: var(--edco-dark);
            color: white;
            border-radius: 30px;
            padding: 80px 60px;
            position: relative;
            overflow: hidden;
            border-left: 8px solid var(--success-accent);
        }

        /* --- AI ANALYSIS SECTION --- */
        .ai-analysis-preview {
            background: #fff;
            border: 1px solid #e2e8f0;
            border-radius: 20px;
            padding: 30px;
            box-shadow: 0 20px 40px rgba(0,0,0,0.05);
        }
        .analysis-bar { height: 8px; border-radius: 4px; background: #f1f5f9; margin-bottom: 15px; overflow: hidden; }
        .analysis-progress { height: 100%; background: var(--ai-accent); }

        /* --- CTA BUTTONS --- */
        .btn-ai { 
            background: var(--ai-accent); color: white; border: none; 
            padding: 16px 35px; border-radius: 12px; font-weight: 700; 
            transition: 0.3s; box-shadow: 0 10px 20px rgba(139, 92, 246, 0.3);
            text-decoration: none; display: inline-block;
        }
        .btn-ai:hover { background: var(--edco-primary); color: white; transform: translateY(-3px); }

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
        body[data-theme="dark"] .ai-card,
        body[data-theme="dark"] .stat-card { background: #1e293b !important; border-color: rgba(255,255,255,0.08) !important; }
        body[data-theme="dark"] .ai-card h1, body[data-theme="dark"] .ai-card h2,
        body[data-theme="dark"] .ai-card h3, body[data-theme="dark"] .ai-card h4,
        body[data-theme="dark"] .ai-card h5, body[data-theme="dark"] .ai-card h6 { color: #f1f5f9 !important; }
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
                        <span class="hero-badge"><i class="fa-solid fa-microchip me-2"></i> AI-Integrated Finance</span>
                        <h1 class="display-3 mb-4">Financial Intelligence <br><span class="text-primary">Without Boundaries.</span></h1>
                        <p class="lead mb-5 text-muted">
                            eAccounting is the definitive bookkeeping ecosystem for the modern dynamic business. Engineered with AI financial analysis and a hybrid offline-online architecture, we ensure your fiscal records are secure, synchronized, and strategically analyzed across all continents.
                        </p>
                        <div class="d-flex flex-column flex-sm-row gap-3">
                            <a href="?page=quation" class="btn-ai"><i class="fa-solid fa-chart-line me-2"></i> Launch AI Demo</a>
                            <a href="?page=quation" class="btn btn-outline-dark px-4 py-3 border-2 fw-bold rounded-3">Request Architecture Brief</a>
                        </div>
                        <div class="mt-4 small text-muted">
                            <i class="fa-solid fa-wifi-slash me-2 text-danger"></i> Offline-First Database & Cloud Sync
                        </div>
                    </div>
                    <div class="col-lg-5 text-center" data-aos="zoom-in">
                        <div class="ai-analysis-preview mx-auto">
                            <div class="d-flex justify-content-between align-items-center mb-4">
                                <h6 class="fw-bold mb-0 text-uppercase small"><i class="fa-solid fa-brain me-2 text-primary"></i> AI Analysis: Q3 Cash Flow</h6>
                                <span class="badge bg-success-subtle text-success">Optimized</span>
                            </div>
                            <div class="text-start">
                                <p class="small text-muted mb-2">Predictive Profit Growth</p>
                                <div class="analysis-bar"><div class="analysis-progress" style="width: 82%;"></div></div>
                                <p class="small text-muted mb-2">Operational Cost Efficiency</p>
                                <div class="analysis-bar"><div class="analysis-progress" style="width: 65%; background: #10b981;"></div></div>
                            </div>
                            <div class="mt-4 p-3 rounded bg-light text-start border-start border-4 border-primary">
                                <p class="small mb-0 fw-bold">AI Insight:</p>
                                <p class="small text-muted mb-0">"Infrastructure overhead has decreased by 12%. Recommending reinvestment into R&D Labs for Q4 expansion."</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- CORE CAPABILITIES -->
        <section class="py-120 bg-white">
            <div class="container">
                <div class="text-center mb-5" data-aos="fade-up">
                    <h6 class="text-primary fw-bold text-uppercase">Financial Infrastructure</h6>
                    <h2 class="display-5">Hybrid Bookkeeping Ecosystem</h2>
                </div>
                <div class="row g-4">
                    <!-- Feature 1 -->
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="ai-card">
                            <div class="ai-icon"><i class="fa-solid fa-book-journal-whills"></i></div>
                            <h5 class="fw-bold">Automated Ledger</h5>
                            <p class="small text-muted mb-0">Bind your sales and inventories to an automated double-entry ledger system. Minimize manual errors and risk of data loss through automation.</p>
                        </div>
                    </div>
                    <!-- Feature 2 -->
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="ai-card">
                            <div class="ai-icon"><i class="fa-solid fa-brain"></i></div>
                            <h5 class="fw-bold">AI Financial Analysis</h5>
                            <p class="small text-muted mb-0">Leverage emerging AI technologies to identify spending patterns, detect anomalies, and forecast future cash flows based on historical data.</p>
                        </div>
                    </div>
                    <!-- Feature 3 -->
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="ai-card">
                            <div class="ai-icon"><i class="fa-solid fa-wifi-slash"></i></div>
                            <h5 class="fw-bold">Offline Resilience</h5>
                            <p class="small text-muted mb-0">Critical for remote sites. Continue your bookkeeping without internet. Data synchronizes automatically once the connection is restored.</p>
                        </div>
                    </div>
                    <!-- Feature 4 -->
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                        <div class="ai-card">
                            <div class="ai-icon"><i class="fa-solid fa-file-invoice-dollar"></i></div>
                            <h5 class="fw-bold">Dynamic Reporting</h5>
                            <p class="small text-muted mb-0">Generate P&L statements, Balance Sheets, and Tax reports tailored to your specific demands and local regulations instantly.</p>
                        </div>
                    </div>
                    <!-- Feature 5 -->
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                        <div class="ai-card">
                            <div class="ai-icon"><i class="fa-solid fa-boxes-stacked"></i></div>
                            <h5 class="fw-bold">Inventory Integration</h5>
                            <p class="small text-muted mb-0">The bridge between warehouse and finance. Every stock movement is automatically reflected in your financial reporting suite.</p>
                        </div>
                    </div>
                    <!-- Feature 6 -->
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
                        <div class="ai-card">
                            <div class="ai-icon"><i class="fa-solid fa-shield-halved"></i></div>
                            <h5 class="fw-bold">Audit-Ready Security</h5>
                            <p class="small text-muted mb-0">Ensure business continuity with 256-bit encryption and immutable audit trails, meeting the complex demands of global organizations.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- HYBRID IMPACT SECTION -->
        <section class="py-120 bg-light">
            <div class="container">
                <div class="hybrid-box" data-aos="fade-up">
                    <div class="row align-items-center">
                        <div class="col-lg-7">
                            <h2 class="text-white display-5 mb-4">The Advantage of <br>Hybrid Infrastructure.</h2>
                            <p class="lead text-white-50 mb-5">eAccounting strives towards technology that provides a real advantage to your business. We bind together offline reliability and online intelligence.</p>
                            
                            <div class="row g-4 mb-5">
                                <div class="col-sm-6">
                                    <h6 class="text-white fw-bold"><i class="fa-solid fa-circle-check text-success me-2"></i> Minimize Downtime</h6>
                                    <p class="small text-white-50">Virtualization and local caching ensure operations continue during connectivity drops.</p>
                                </div>
                                <div class="col-sm-6">
                                    <h6 class="text-white fw-bold"><i class="fa-solid fa-circle-check text-success me-2"></i> Maximize Value</h6>
                                    <p class="small text-white-50">Cut operational costs by utilizing AI to optimize your IT and financial strategy.</p>
                                </div>
                            </div>

                            <a href="?page=quation" class="btn btn-ai px-5 py-3 fw-bold">Explore AI Analytics</a>
                        </div>
                        <div class="col-lg-5 d-none d-lg-block text-center">
                            <img src="assets/img/eaccounting-dashboard-ghana.png" class="img-fluid rounded-4 shadow-lg border-primary" alt="Financial Dashboard">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- FINAL CTA -->
        <section class="py-5 bg-white text-center">
            <div class="container py-5">
                <h2 class="display-5 mb-4">Modernize Your Fiscal Infrastructure</h2>
                <p class="text-muted lead mb-5 mx-auto" style="max-width: 600px;">Unlock a more efficient way to manage books and analyze performance with the eAccounting ecosystem.</p>
                <div class="d-flex justify-content-center gap-3">
                    <a href="?page=quation" class="btn-ai"><i class="fa-solid fa-bolt me-2"></i> Experience AI Reporting</a>
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