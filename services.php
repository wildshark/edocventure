<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" href="/assets/img/EDOC.webp" type="image/webp">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Services | Edoc Ventures - Enterprise IT & Infrastructure</title>
    <meta name="description" content="Explore our core services: IT Consulting, Server Management, Software Development, and Cloud Infrastructure.">

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
        }

        body { font-family: 'Inter', sans-serif; color: #475569; overflow-x: hidden; line-height: 1.7; }
        h1, h2, h3, h4, .display-4, .display-5 { font-family: 'Outfit', sans-serif; font-weight: 800; color: var(--edoc-dark); letter-spacing: -0.02em; }

        /* --- TOP MENU & NAV - loaded from topmenu.php --- */

        /* --- HERO SECTION --- */
        .service-hero { 
            background: radial-gradient(circle at 70% 30%, #1e1b4b, #0f172a);
            padding: 120px 0 80px;
            color: #fff;
            text-align: center;
        }

        /* --- SERVICE SECTION BLOCKS --- */
        .service-block { padding: 100px 0; }
        .service-block:nth-child(even) { background-color: var(--edoc-light); }
        
        .service-icon-lg { 
            width: 70px; height: 70px; 
            background: var(--edoc-primary); 
            color: white; 
            border-radius: 18px; 
            display: flex; 
            align-items: center; 
            justify-content: center; 
            font-size: 2rem; 
            margin-bottom: 25px;
            box-shadow: 0 10px 20px rgba(79, 70, 229, 0.3);
        }

        .capability-list { list-style: none; padding: 0; }
        .capability-list li { margin-bottom: 15px; display: flex; align-items: start; }
        .capability-list i { color: var(--edoc-primary); margin-top: 5px; margin-right: 15px; }

        /* --- PERFORMANCE CARDS --- */
        .stat-card {
            background: white;
            padding: 40px;
            border-radius: 24px;
            text-align: center;
            border: 1px solid #e2e8f0;
            transition: 0.3s;
        }
        .stat-card:hover { transform: translateY(-10px); box-shadow: 0 20px 40px rgba(0,0,0,0.05); }
        .stat-card h2 { color: var(--edoc-primary); font-size: 3rem; margin-bottom: 10px; }

        /* --- CTA SECTION --- */
        .cta-box { 
            background: var(--edoc-primary); 
            color: white; 
            border-radius: 30px; 
            padding: 60px; 
            text-align: center;
            overflow: hidden;
            position: relative;
        }
        /* --- DARK MODE --- */
        body[data-theme="dark"] .service-block { background-color: #0b0f19 !important; }
        body[data-theme="dark"] .service-block:nth-child(even) { background-color: #0f172a !important; }
        body[data-theme="dark"] .stat-card { background: #1e293b !important; border-color: rgba(255,255,255,0.08) !important; }
        body[data-theme="dark"] .stat-card p { color: #94a3b8 !important; }
        body[data-theme="dark"] h1, body[data-theme="dark"] h2, body[data-theme="dark"] h3,
        body[data-theme="dark"] h4, body[data-theme="dark"] h5 { color: #f8fafc !important; }
        body[data-theme="dark"] p, body[data-theme="dark"] li { color: #cbd5e1 !important; }
    </style>
</head>

<body>

    <div class="main-wrapper">
        <?php include 'topmenu.php'; ?>

        <!-- HERO -->
        <section class="service-hero">
            <div class="container">
                <span class="badge-premium"><i class="fa-solid fa-chess-knight me-1"></i> Venture Studio Solutions</span>
                <h1 class="display-4 text-white">Full-Service IT Infrastructure</h1>
                <p class="lead text-white-50 mx-auto mt-4" style="max-width: 800px;">
                    From complex consulting to rapid software deployment, Edoc Ventures provides the tools and intelligence needed to scale your digital operations across continents.
                </p>
            </div>
        </section>

        <!-- SERVICE 1: CONSULTING -->
        <section class="service-block">
            <div class="container">
                <div class="row align-items-center g-5">
                    <div class="col-lg-6" data-aos="fade-right">
                        <div class="service-icon-lg"><i class="fa-solid fa-chess-knight"></i></div>
                        <h2 class="display-5 mb-4">Strategic IT Consulting</h2>
                        <p class="mb-4">We act as your virtual CTO, helping you navigate the increasingly complex demands of global business. Our consulting focus is on binding business logic with high-end technology to maximize your ROI.</p>
                        <ul class="capability-list">
                            <li><i class="fa-solid fa-circle-check"></i> <div><strong>IT Strategy Development:</strong> Crafting future-proof roadmaps for growth.</div></li>
                            <li><i class="fa-solid fa-circle-check"></i> <div><strong>Operational Cost Reduction:</strong> Tailor-made strategies to streamline your budget.</div></li>
                            <li><i class="fa-solid fa-circle-check"></i> <div><strong>Stakeholder Alignment:</strong> Bridging the gap between management and technology.</div></li>
                        </ul>
                    </div>
                    <div class="col-lg-6" data-aos="fade-left">
                        <img src="/assets/img/services-consulting.webp" class="img-fluid rounded-4 shadow-lg" alt="IT Consulting">
                    </div>
                </div>
            </div>
        </section>

        <!-- SERVICE 2: SERVER INFRASTRUCTURE -->
        <section class="service-block">
            <div class="container">
                <div class="row align-items-center g-5 flex-column-reverse flex-lg-row">
                    <div class="col-lg-6" data-aos="fade-right">
                        <img src="/assets/img/cloud-server-datacenter.webp" class="img-fluid rounded-4 shadow-lg" alt="Server Infrastructure">
                    </div>
                    <div class="col-lg-6" data-aos="fade-left">
                        <div class="service-icon-lg"><i class="fa-solid fa-server"></i></div>
                        <h2 class="display-5 mb-4">Server & Managed Hardware</h2>
                        <p class="mb-4">Edoc Ventures provides robust server solutions that minimize the risk of data loss and maximize uptime. We support remote sites across continents with unique Service Level Agreements (SLAs).</p>
                        <ul class="capability-list">
                            <li><i class="fa-solid fa-circle-check"></i> <div><strong>Hardware Deployment:</strong> On-site and remote server installation.</div></li>
                            <li><i class="fa-solid fa-circle-check"></i> <div><strong>24/7 Monitoring:</strong> Proactive identification of hardware issues.</div></li>
                            <li><i class="fa-solid fa-circle-check"></i> <div><strong>Data Redundancy:</strong> Advanced backup systems for business continuity.</div></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- SERVICE 3: SOFTWARE DEVELOPMENT -->
        <section class="service-block">
            <div class="container">
                <div class="row align-items-center g-5">
                    <div class="col-lg-6" data-aos="fade-right">
                        <div class="service-icon-lg"><i class="fa-solid fa-code"></i></div>
                        <h2 class="display-5 mb-4">Custom Software & Deployment</h2>
                        <p class="mb-4">From SaaS platforms to mobile banking engines, our development team builds software that scales. We focus on rapid deployment using modern DevOps and automation pipelines.</p>
                        <ul class="capability-list">
                            <li><i class="fa-solid fa-circle-check"></i> <div><strong>SaaS Architecture:</strong> Building multi-tenant cloud applications.</div></li>
                            <li><i class="fa-solid fa-circle-check"></i> <div><strong>Fintech & Payment Logic:</strong> Secure gateways and currency swap engines.</div></li>
                            <li><i class="fa-solid fa-circle-check"></i> <div><strong>Automated Deployment:</strong> CI/CD pipelines to keep your software agile.</div></li>
                        </ul>
                    </div>
                    <div class="col-lg-6" data-aos="fade-left">
                        <img src="/assets/img/ghana-software-developer.webp" class="img-fluid rounded-4 shadow-lg" alt="Software Development">
                    </div>
                </div>
            </div>
        </section>

        <!-- SERVICE 4: CLOUD INFRASTRUCTURE -->
        <section class="service-block">
            <div class="container">
                <div class="row align-items-center g-5 flex-column-reverse flex-lg-row">
                    <div class="col-lg-6" data-aos="fade-right">
                        <img src="/assets/img/services-cloud-infrastructure.webp" class="img-fluid rounded-4 shadow-lg" alt="Cloud Infrastructure">
                    </div>
                    <div class="col-lg-6" data-aos="fade-left">
                        <div class="service-icon-lg"><i class="fa-solid fa-cloud-arrow-up"></i></div>
                        <h2 class="display-5 mb-4">Cloud & Virtualization</h2>
                        <p class="mb-4">Our Cloud Node infrastructure provides the scalability required for modern worker mobility and globalization. We empower your business through high-performance virtualization.</p>
                        <ul class="capability-list">
                            <li><i class="fa-solid fa-circle-check"></i> <div><strong>Virtual Nodes:</strong> Scalable cloud servers for any application.</div></li>
                            <li><i class="fa-solid fa-circle-check"></i> <div><strong>VOD & Media Cloud:</strong> Video delivery networks and streaming infrastructure.</div></li>
                            <li><i class="fa-solid fa-circle-check"></i> <div><strong>Network Security:</strong> Firewalls and encrypted tunnels for global connectivity.</div></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- PERFORMANCE STATS -->
        <section class="py-120 bg-white">
            <div class="container">
                <div class="row g-4 text-center">
                    <div class="col-md-3">
                        <div class="stat-card">
                            <h2>15+</h2>
                            <p class="fw-bold text-uppercase mb-0">Years Excellence</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="stat-card">
                            <h2>99.9%</h2>
                            <p class="fw-bold text-uppercase mb-0">SLA Uptime</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="stat-card">
                            <h2>18+</h2>
                            <p class="fw-bold text-uppercase mb-0">Core Products</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="stat-card">
                            <h2>4</h2>
                            <p class="fw-bold text-uppercase mb-0">Continents</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA SECTION -->
        <section class="py-120">
            <div class="container">
                <div class="cta-box">
                    <h2 class="text-white display-5 mb-4">Ready to Architect Your Success?</h2>
                    <p class="text-white-50 lead mb-5 mx-auto" style="max-width: 600px;">Join the organizations that trust Edoc Ventures to bind their business goals with world-class technology.</p>
                    <a href="/quation" class="btn btn-light btn-lg px-5 py-3 fw-bold text-primary">Schedule a Consultation</a>
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