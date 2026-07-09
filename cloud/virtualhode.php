<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" href="/assets/img/EDOC.webp" type="image/webp">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Virtual Nodes | Edoc Ventures - Secure Cloud Hosting & App Infrastructure</title>
    <meta name="description" content="Virtual Nodes: High-performance, secure cloud hosting engineered for mission-critical applications and global scale.">

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
            --node-accent: #06b6d4; /* Electric Cyan for Cloud/Cyber */
            --node-dark-bg: #020617;
        }

        body { font-family: 'Inter', sans-serif; color: #94a3b8; background-color: var(--node-dark-bg); overflow-x: hidden; line-height: 1.7; }
        h1, h2, h3, h4, .display-4, .display-5 { font-family: 'Outfit', sans-serif; font-weight: 800; color: #fff; letter-spacing: -0.02em; }



        /* --- CLOUD HERO --- */
        .hero-infra { 
            padding: 160px 0 120px;
            background: radial-gradient(circle at 80% 20%, #1e1b4b 0%, #020617 100%);
            position: relative;
        }
        .hero-infra::before {
            content: ''; position: absolute; top: 0; left: 0; width: 100%; height: 100%;
            background: url('https://www.transparenttextures.com/patterns/carbon-fibre.png'); opacity: 0.1;
        }
        .hero-badge { 
            background: rgba(6, 182, 212, 0.1); color: var(--node-accent); 
            padding: 8px 20px; border-radius: 50px; border: 1px solid rgba(6, 182, 212, 0.2);
            font-weight: 700; font-size: 0.85rem; text-transform: uppercase; 
            display: inline-block; margin-bottom: 20px;
        }

        /* --- NODE FEATURE CARDS --- */
        .node-card {
            background: rgba(255,255,255,0.03);
            padding: 40px;
            border-radius: 24px;
            border: 1px solid rgba(255,255,255,0.05);
            transition: 0.3s;
            height: 100%;
        }
        .node-card:hover { 
            transform: translateY(-10px); 
            border-color: var(--node-accent); 
            background: rgba(255,255,255,0.05);
            box-shadow: 0 20px 40px rgba(0,0,0,0.4);
        }
        .node-icon { 
            width: 55px; height: 55px; background: rgba(6, 182, 212, 0.1); 
            color: var(--node-accent); border-radius: 14px; 
            display: flex; align-items: center; justify-content: center; 
            font-size: 1.6rem; margin-bottom: 25px; 
        }

        /* --- APP HOSTING SECTION --- */
        .hosting-box {
            background: linear-gradient(135deg, #0f172a 0%, #1e1b4b 100%);
            color: white;
            border-radius: 30px;
            padding: 80px 60px;
            position: relative;
            overflow: hidden;
            border: 1px solid rgba(255,255,255,0.1);
        }

        /* --- CTA BUTTONS --- */
        .btn-node { 
            background: var(--node-accent); color: white; border: none; 
            padding: 16px 35px; border-radius: 12px; font-weight: 700; 
            transition: 0.3s; box-shadow: 0 10px 20px rgba(6, 182, 212, 0.3);
            text-decoration: none; display: inline-block;
        }
        .btn-node:hover { background: #fff; color: var(--node-dark-bg); transform: translateY(-3px); }

        /* --- TECH SPECS GRID --- */
        .spec-item { border-left: 2px solid var(--node-accent); padding-left: 20px; margin-bottom: 30px; }
        .spec-item h4 { font-size: 1.25rem; margin-bottom: 5px; }
        .spec-item p { font-size: 0.85rem; margin-bottom: 0; color: #64748b; }

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
        body[data-theme="dark"] .node-card,
        body[data-theme="dark"] .stat-card { background: #1e293b !important; border-color: rgba(255,255,255,0.08) !important; }
        body[data-theme="dark"] .node-card h1, body[data-theme="dark"] .node-card h2,
        body[data-theme="dark"] .node-card h3, body[data-theme="dark"] .node-card h4,
        body[data-theme="dark"] .node-card h5, body[data-theme="dark"] .node-card h6 { color: #f1f5f9 !important; }
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
        <section class="hero-infra">
            <div class="container text-center">
                <div data-aos="fade-up">
                    <span class="hero-badge"><i class="fa-solid fa-microchip me-2"></i> Infrastructure as a Service</span>
                    <h1 class="display-3 mb-4">Cloud Nodes that <br><span class="text-info">Defy Complexity.</span></h1>
                    <p class="lead mb-5 text-white-50 mx-auto" style="max-width: 800px;">
                        Host your mission-critical applications on the most resilient cloud infrastructure in the market. Edoc Virtual Nodes provide the secure, scalable backbone required for the modern dynamic business.
                    </p>
                    <div class="d-flex flex-column flex-sm-row gap-3 justify-content-center">
                        <a href="/quation" class="btn-node"><i class="fa-solid fa-server me-2"></i> Provision a Node</a>
                        <a href="/quation" class="btn btn-outline-light px-4 py-3 border-2 fw-bold rounded-3">Infrastructure SLA</a>
                    </div>
                </div>
                <div class="mt-5 pt-5" data-aos="zoom-in">
                    <!-- Tech visual: Server Mesh -->
                    <img src="/assets/img/virtualhode-datacenter.webp" class="img-fluid rounded-4 shadow-lg border border-secondary border-opacity-25" alt="Data Center Architecture">
                </div>
            </div>
        </section>

        <!-- CORE FEATURES -->
        <section class="py-120">
            <div class="container">
                <div class="row g-4">
                    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="node-card">
                            <div class="node-icon"><i class="fa-solid fa-shield-halved"></i></div>
                            <h3>Fortified Security</h3>
                            <p>Hardened virtual instances with built-in DDoS protection, managed firewalls, and ISO-certified data centers to minimize risk of security threats.</p>
                        </div>
                    </div>
                    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="node-card">
                            <div class="node-icon"><i class="fa-solid fa-expand"></i></div>
                            <h3>Instant Elasticity</h3>
                            <p>Scale your resources in real-time. Whether you are hosting a small app or an enterprise-wide ecosystem, our nodes adapt to your demand instantly.</p>
                        </div>
                    </div>
                    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
                        <div class="node-card">
                            <div class="node-icon"><i class="fa-solid fa-bolt"></i></div>
                            <h3>Rapid Deployment</h3>
                            <p>Provision virtual machines and application stacks in seconds. Our automation engine ensures your business operations continue without friction.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- APP HOSTING CASE STUDY -->
        <section class="py-120">
            <div class="container">
                <div class="hosting-box" data-aos="fade-up">
                    <div class="row align-items-center g-5">
                        <div class="col-lg-6">
                            <h2 class="display-5 mb-4">Host Your Entire App Ecosystem.</h2>
                            <p class="lead text-white-50 mb-5">
                                Virtual Nodes are the native home for the Edoc product suite. We provide specialized optimizations for:
                            </p>
                            <div class="row g-4">
                                <div class="col-sm-6">
                                    <div class="spec-item">
                                        <h4>SaaS Hosting</h4>
                                        <p>Optimized for eLearning Pro & Ekkilsia performance.</p>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="spec-item">
                                        <h4>Fintech Gateways</h4>
                                        <p>High-security nodes for Quest Pay & CashWired transactions.</p>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="spec-item">
                                        <h4>VOD & Radio</h4>
                                        <p>High-bandwidth streaming nodes for myLibrary media.</p>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="spec-item">
                                        <h4>Dev Environments</h4>
                                        <p>Sandboxed nodes for rapid software development labs.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 text-center">
                            <img src="/assets/img/cloud-global-network.webp" class="img-fluid rounded-4 shadow-lg" alt="Global Cloud">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- TECHNICAL ADVANTAGE -->
        <section class="py-120">
            <div class="container">
                <div class="row align-items-center g-5">
                    <div class="col-lg-6" data-aos="fade-right">
                        <h2 class="display-5 mb-4">Infrastructure that Binds Business to Tech.</h2>
                        <p class="mb-4">Edoc Ventures binds together business and technology by creating a virtualization environment that eliminates the risk of data loss and downtime.</p>
                        <div class="d-flex align-items-start mb-4">
                            <i class="fa-solid fa-circle-check text-info me-3 mt-1"></i>
                            <div>
                                <h6 class="text-white mb-1">99.9% Virtualization Uptime</h6>
                                <p class="small">Our SLA ensures your business remains operational across all continents.</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-start">
                            <i class="fa-solid fa-circle-check text-info me-3 mt-1"></i>
                            <div>
                                <h6 class="text-white mb-1">Worker Mobility Ready</h6>
                                <p class="small">Encrypted cloud access for the dynamic challenges of a global workforce.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6" data-aos="fade-left">
                        <div class="p-5 rounded-4 bg-dark border border-secondary border-opacity-25">
                            <h5 class="text-info mb-4">Node Specifications</h5>
                            <ul class="list-unstyled mb-0">
                                <li class="d-flex justify-content-between mb-3 border-bottom border-secondary pb-2">
                                    <span>Storage Engine</span>
                                    <span class="text-white">NVMe Gen 4 SSD</span>
                                </li>
                                <li class="d-flex justify-content-between mb-3 border-bottom border-secondary pb-2">
                                    <span>Network Link</span>
                                    <span class="text-white">100Gbps Global Mesh</span>
                                </li>
                                <li class="d-flex justify-content-between mb-3 border-bottom border-secondary pb-2">
                                    <span>Virtualization</span>
                                    <span class="text-white">KVM / Hyper-V</span>
                                </li>
                                <li class="d-flex justify-content-between">
                                    <span>Data Center Tier</span>
                                    <span class="text-white">Tier IV Certified</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- FINAL CTA -->
        <section class="py-5 text-center">
            <div class="container py-5">
                <h2 class="display-5 mb-4">Provision Your Future Infrastructure</h2>
                <p class="text-white-50 lead mb-5 mx-auto" style="max-width: 600px;">Stop worrying about hardware. Start leveraging the most powerful connection a business can make with Virtual Nodes.</p>
                <a href="/quation" class="btn-node px-5 py-3"><i class="fa-solid fa-bolt me-2"></i> Launch Cloud Node Now</a>
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