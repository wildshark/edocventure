<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>VOD Manager | Edco Ventures - Enterprise Video Streaming & Storage</title>
    <meta name="description" content="VOD Manager: High-performance video-on-demand infrastructure for education, entertainment, and enterprise storage.">

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
            --vod-accent: #f43f5e; /* Vibrant Rose for Media/Video */
            --vod-dark-bg: #020617;
            --vod-soft: #fff1f2;
        }

        body { font-family: 'Inter', sans-serif; color: #94a3b8; background-color: var(--vod-dark-bg); overflow-x: hidden; line-height: 1.7; }
        h1, h2, h3, h4, .display-4, .display-5 { font-family: 'Outfit', sans-serif; font-weight: 800; color: #fff; letter-spacing: -0.02em; }



        /* --- VOD HERO --- */
        .hero-media { 
            padding: 160px 0 120px;
            background: radial-gradient(circle at 0% 0%, #312e81 0%, #020617 100%);
            position: relative;
        }
        .hero-badge { 
            background: rgba(244, 63, 94, 0.1); color: var(--vod-accent); 
            padding: 8px 20px; border-radius: 50px; border: 1px solid rgba(244, 63, 94, 0.2);
            font-weight: 700; font-size: 0.85rem; text-transform: uppercase; 
            display: inline-block; margin-bottom: 20px;
        }

        /* --- FEATURE CARDS --- */
        .vod-card {
            background: rgba(255,255,255,0.03);
            padding: 40px;
            border-radius: 24px;
            border: 1px solid rgba(255,255,255,0.05);
            transition: 0.3s;
            height: 100%;
        }
        .vod-card:hover { 
            transform: translateY(-10px); 
            border-color: var(--vod-accent); 
            background: rgba(255,255,255,0.05);
            box-shadow: 0 20px 40px rgba(244, 63, 94, 0.1);
        }
        .vod-icon { 
            width: 55px; height: 55px; background: rgba(244, 63, 94, 0.1); 
            color: var(--vod-accent); border-radius: 14px; 
            display: flex; align-items: center; justify-content: center; 
            font-size: 1.6rem; margin-bottom: 25px; 
        }

        /* --- SECTOR CARDS --- */
        .sector-card {
            border-radius: 20px;
            overflow: hidden;
            position: relative;
            height: 350px;
            border: 1px solid rgba(255,255,255,0.1);
        }
        .sector-overlay {
            position: absolute;
            bottom: 0; left: 0; width: 100%;
            padding: 30px;
            background: linear-gradient(to top, rgba(2,6,23,1), rgba(2,6,23,0));
        }

        /* --- CTA BUTTONS --- */
        .btn-vod { 
            background: var(--vod-accent); color: white; border: none; 
            padding: 16px 35px; border-radius: 12px; font-weight: 700; 
            transition: 0.3s; box-shadow: 0 10px 20px rgba(244, 63, 94, 0.3);
            text-decoration: none; display: inline-block;
        }
        .btn-vod:hover { background: #fff; color: var(--vod-dark-bg); transform: translateY(-3px); }

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
        <section class="hero-media">
            <div class="container">
                <div class="row align-items-center g-5">
                    <div class="col-lg-7" data-aos="fade-right">
                        <span class="hero-badge"><i class="fa-solid fa-play-circle me-2"></i> Content Delivery Ecosystem</span>
                        <h1 class="display-3 mb-4">Content Without <br><span class="text-danger">Boundaries.</span></h1>
                        <p class="lead mb-5 text-white-50">
                            VOD Manager is an advanced media infrastructure designed to collect, store, and stream high-definition content globally. Built on Edco's Virtual Nodes, we ensure your videos reach every stakeholder—from students to global audiences—with zero latency.
                        </p>
                        <div class="d-flex flex-column flex-sm-row gap-3">
                            <a href="?page=quation" class="btn-vod"><i class="fa-solid fa-cloud-arrow-up me-2"></i> Provision Media Storage</a>
                            <a href="?page=quation" class="btn btn-outline-light px-4 py-3 border-2 fw-bold rounded-3">Streaming SLA</a>
                        </div>
                        <div class="mt-4 small text-muted">
                            <i class="fa-solid fa-circle-check me-2 text-danger"></i> Adaptive Bitrate Streaming & Multi-Continent CDN
                        </div>
                    </div>
                    <div class="col-lg-5 text-center" data-aos="zoom-in">
                        <img src="assets/img/cloud-vod-streaming-infra.png" class="img-fluid rounded-4 shadow-lg border border-secondary border-opacity-25" alt="Streaming Infrastructure">
                    </div>
                </div>
            </div>
        </section>

        <!-- CORE CAPABILITIES -->
        <section class="py-120">
            <div class="container">
                <div class="text-center mb-5" data-aos="fade-up">
                    <h6 class="text-danger fw-bold text-uppercase">The Architectural Advantage</h6>
                    <h2 class="display-5">Video Infrastructure for the Dynamic Business</h2>
                </div>
                <div class="row g-4">
                    <!-- Feature 1 -->
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="vod-card">
                            <div class="vod-icon"><i class="fa-solid fa-box-archive"></i></div>
                            <h3>Secure Vault Storage</h3>
                            <p>Military-grade storage for your video assets. We minimize the risk of data loss through automated redundancy and high-security virtualization.</p>
                        </div>
                    </div>
                    <!-- Feature 2 -->
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="vod-card">
                            <div class="vod-icon"><i class="fa-solid fa-bolt-lightning"></i></div>
                            <h3>Instant Playback CDN</h3>
                            <p>Global Content Delivery Network ensures that worker mobility and globalization never slow down your content. Experience zero-buffer streaming on any device.</p>
                        </div>
                    </div>
                    <!-- Feature 3 -->
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="vod-card">
                            <div class="vod-icon"><i class="fa-solid fa-shield-halved"></i></div>
                            <h3>Digital Rights (DRM)</h3>
                            <p>Protect your intellectual property. Advanced encryption ensures that your entertainment or educational content is only accessible by authorized stakeholders.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- SECTOR SOLUTIONS -->
        <section class="py-120 bg-black">
            <div class="container">
                <div class="text-center mb-5" data-aos="fade-up">
                    <h2 class="display-5">Tailored to Every Purpose</h2>
                    <p class="text-white-50">Edco VOD Manager binds business and technology across diverse sectors.</p>
                </div>
                <div class="row g-4">
                    <!-- Education -->
                    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="sector-card" style="background: url('assets/img/vod-education-sector.png') center; background-size: cover;">
                            <div class="sector-overlay">
                                <h4 class="fw-bold">Educational Hubs</h4>
                                <p class="small text-white-50">Integrated with eLearning Pro to deliver recorded lectures and tutorials to remote sites across continents.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Entertainment -->
                    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="sector-card" style="background: url('assets/img/vod-sector-background.png') center; background-size: cover;">
                            <div class="sector-overlay">
                                <h4 class="fw-bold">Entertainment Media</h4>
                                <p class="small text-white-50">White-label streaming solutions for movie portals, music videos, and cultural content distribution.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Enterprise -->
                    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
                        <div class="sector-card" style="background: url('assets/img/cloud-global-network-2.png') center; background-size: cover;">
                            <div class="sector-overlay">
                                <h4 class="fw-bold">Enterprise Storage</h4>
                                <p class="small text-white-50">Secure collection and storage of internal corporate training, webinars, and archival data.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- THE TECHNICAL EDGE -->
        <section class="py-120">
            <div class="container">
                <div class="row align-items-center g-5">
                    <div class="col-lg-6" data-aos="fade-right">
                        <h2 class="display-5 mb-4">The Infrastructure Advantage.</h2>
                        <p class="mb-4 text-white-50">We strive towards technology that provides a real advantage to your business. VOD Manager is engineered to maximize value for our customers through virtualization and automation.</p>
                        <ul class="list-unstyled">
                            <li class="mb-3 d-flex align-items-center"><i class="fa-solid fa-circle-check text-danger me-3"></i> Adaptive Bitrate (480p to 4K)</li>
                            <li class="mb-3 d-flex align-items-center"><i class="fa-solid fa-circle-check text-danger me-3"></i> Hybrid Online/Offline Sync Capability</li>
                            <li class="mb-3 d-flex align-items-center"><i class="fa-solid fa-circle-check text-danger me-3"></i> Automated Subtitle & Metadata Generation</li>
                        </ul>
                    </div>
                    <div class="col-lg-6" data-aos="fade-left">
                        <div class="p-5 rounded-4 border border-secondary border-opacity-25" style="background: rgba(255,255,255,0.02);">
                            <h4 class="text-danger mb-4">Media Specs</h4>
                            <div class="d-flex justify-content-between border-bottom border-secondary border-opacity-25 pb-2 mb-3">
                                <span>Ingest Protocols</span>
                                <span class="text-white">RTMP, HLS, DASH</span>
                            </div>
                            <div class="d-flex justify-content-between border-bottom border-secondary border-opacity-25 pb-2 mb-3">
                                <span>Storage Tier</span>
                                <span class="text-white">NVMe Warm Storage</span>
                            </div>
                            <div class="d-flex justify-content-between border-bottom border-secondary border-opacity-25 pb-2 mb-3">
                                <span>Global Latency</span>
                                <span class="text-white">&lt; 150ms Average</span>
                            </div>
                            <div class="d-flex justify-content-between">
                                <span>Transcoding Engine</span>
                                <span class="text-white">AI-Powered HEVC</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- FINAL CTA -->
        <section class="py-5 text-center">
            <div class="container py-5">
                <h2 class="display-5 mb-4">Bind Your Content to Technology</h2>
                <p class="text-white-50 lead mb-5 mx-auto" style="max-width: 600px;">Experience the power of a unified media ecosystem. Secure, scalable, and engineered for the global dynamic business.</p>
                <a href="?page=quation" class="btn-vod px-5 py-3"><i class="fa-solid fa-bolt me-2"></i> Launch VOD Demo</a>
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