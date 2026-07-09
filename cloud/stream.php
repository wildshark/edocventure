<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>RadioStream | Edco Ventures - Enterprise Radio & Digital Broadcasting</title>
    <meta name="description" content="RadioStream: High-performance digital radio broadcasting with global reach, automated scheduling, and low-latency streaming.">

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
            --radio-accent: #a855f7; /* Vibrant Purple for Audio/Vibe */
            --radio-dark-bg: #020617;
        }

        body { font-family: 'Inter', sans-serif; color: #94a3b8; background-color: var(--radio-dark-bg); overflow-x: hidden; line-height: 1.7; }
        h1, h2, h3, h4, .display-4, .display-5 { font-family: 'Outfit', sans-serif; font-weight: 800; color: #fff; letter-spacing: -0.02em; }



        /* --- RADIO HERO --- */
        .hero-radio { 
            padding: 160px 0 120px;
            background: radial-gradient(circle at 100% 0%, #3b0764 0%, #020617 100%);
            position: relative;
        }
        .hero-badge { 
            background: rgba(168, 85, 247, 0.1); color: var(--radio-accent); 
            padding: 8px 20px; border-radius: 50px; border: 1px solid rgba(168, 85, 247, 0.2);
            font-weight: 700; font-size: 0.85rem; text-transform: uppercase; 
            display: inline-block; margin-bottom: 20px;
        }

        /* --- FEATURE CARDS --- */
        .radio-card {
            background: rgba(255,255,255,0.03);
            padding: 40px;
            border-radius: 24px;
            border: 1px solid rgba(255,255,255,0.05);
            transition: 0.3s;
            height: 100%;
        }
        .radio-card:hover { 
            transform: translateY(-10px); 
            border-color: var(--radio-accent); 
            background: rgba(255,255,255,0.05);
            box-shadow: 0 20px 40px rgba(168, 85, 247, 0.15);
        }
        .radio-icon { 
            width: 55px; height: 55px; background: rgba(168, 85, 247, 0.1); 
            color: var(--radio-accent); border-radius: 14px; 
            display: flex; align-items: center; justify-content: center; 
            font-size: 1.6rem; margin-bottom: 25px; 
        }

        /* --- PLAYER PREVIEW --- */
        .player-box {
            background: rgba(255,255,255,0.05);
            border: 1px solid rgba(255,255,255,0.1);
            border-radius: 20px;
            padding: 30px;
            backdrop-filter: blur(10px);
        }
        .wave-bar {
            width: 4px; height: 30px; background: var(--radio-accent);
            margin: 0 2px; border-radius: 2px;
            animation: wave 1s infinite alternate;
        }
        @keyframes wave {
            from { height: 10px; }
            to { height: 40px; }
        }

        /* --- CTA BUTTONS --- */
        .btn-radio { 
            background: var(--radio-accent); color: white; border: none; 
            padding: 16px 35px; border-radius: 12px; font-weight: 700; 
            transition: 0.3s; box-shadow: 0 10px 20px rgba(168, 85, 247, 0.3);
            text-decoration: none; display: inline-block;
        }
        .btn-radio:hover { background: #fff; color: var(--radio-dark-bg); transform: translateY(-3px); }

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
        body[data-theme="dark"] .radio-card,
        body[data-theme="dark"] .stat-card { background: #1e293b !important; border-color: rgba(255,255,255,0.08) !important; }
        body[data-theme="dark"] .radio-card h1, body[data-theme="dark"] .radio-card h2,
        body[data-theme="dark"] .radio-card h3, body[data-theme="dark"] .radio-card h4,
        body[data-theme="dark"] .radio-card h5, body[data-theme="dark"] .radio-card h6 { color: #f1f5f9 !important; }
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
        <section class="hero-radio">
            <div class="container">
                <div class="row align-items-center g-5">
                    <div class="col-lg-7" data-aos="fade-right">
                        <span class="hero-badge"><i class="fa-solid fa-tower-broadcast me-2"></i> Digital Audio Ecosystem</span>
                        <h1 class="display-3 mb-4">Broadcast Your Vision. <span class="text-purple" style="color:var(--radio-accent)">Bind Your Audience.</span></h1>
                        <p class="lead mb-5 text-white-50">
                            RadioStream is Edco Ventures' premier broadcasting suite. We leverage high-performance virtual nodes to deliver crystal-clear audio globally. Whether for community worship, enterprise communication, or education, we bind sound to technology.
                        </p>
                        <div class="d-flex flex-column flex-sm-row gap-3">
                            <a href="?page=quation" class="btn-radio"><i class="fa-solid fa-microphone-lines me-2"></i> Start Broadcasting</a>
                            <a href="?page=quation" class="btn btn-outline-light px-4 py-3 border-2 fw-bold rounded-3">Streaming SLA</a>
                        </div>
                        <div class="mt-4 small text-muted">
                            <i class="fa-solid fa-globe me-2 text-info"></i> Multi-Continent Edge Casting & Adaptive Bitrate
                        </div>
                    </div>
                    <div class="col-lg-5 text-center" data-aos="zoom-in">
                        <!-- Player UI Preview -->
                        <div class="player-box mx-auto">
                            <div class="d-flex align-items-center justify-content-center mb-4">
                                <div class="wave-bar" style="animation-delay: 0.1s"></div>
                                <div class="wave-bar" style="animation-delay: 0.3s"></div>
                                <div class="wave-bar" style="animation-delay: 0.2s"></div>
                                <div class="wave-bar" style="animation-delay: 0.4s"></div>
                                <div class="wave-bar" style="animation-delay: 0.5s"></div>
                                <div class="wave-bar" style="animation-delay: 0.1s"></div>
                            </div>
                            <h5 class="text-white mb-1">Live Global Stream</h5>
                            <p class="small text-white-50">12,408 Active Listeners</p>
                            <div class="mt-4">
                                <button class="btn btn-light btn-sm rounded-circle p-3"><i class="fa-solid fa-play text-dark"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- CORE FEATURES -->
        <section class="py-120">
            <div class="container">
                <div class="text-center mb-5" data-aos="fade-up">
                    <h6 class="fw-bold text-uppercase" style="color: var(--radio-accent)">The Broadcasting Edge</h6>
                    <h2 class="display-5">Engineered for Reliability</h2>
                </div>
                <div class="row g-4">
                    <!-- Feature 1 -->
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="radio-card">
                            <div class="radio-icon"><i class="fa-solid fa-robot"></i></div>
                            <h3>AutoDJ & Scheduling</h3>
                            <p>Automate your station 24/7. Upload your tracks to myLibrary and use our smart scheduler to run broadcasts even when you are offline.</p>
                        </div>
                    </div>
                    <!-- Feature 2 -->
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="radio-card">
                            <div class="radio-icon"><i class="fa-solid fa-gauge-high"></i></div>
                            <h3>Ultra-Low Latency</h3>
                            <p>Powered by Edco's Virtual Nodes. Deliver live commentary, sermons, or news with sub-second delay across multiple continents.</p>
                        </div>
                    </div>
                    <!-- Feature 3 -->
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="radio-card">
                            <div class="radio-icon"><i class="fa-solid fa-chart-area"></i></div>
                            <h3>Listener Intelligence</h3>
                            <p>Advanced real-time analytics. Understand your audience footprint, peak listening times, and device types with ISO-standard reporting.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- INTEGRATION SECTION -->
        <section class="py-120 bg-black">
            <div class="container">
                <div class="row align-items-center g-5">
                    <div class="col-lg-6" data-aos="fade-right">
                        <h2 class="display-5 mb-4">The Unified Voice <br>of Ekkilsia.</h2>
                        <p class="lead text-white-50 mb-4">
                            RadioStream integrates natively with the Ekkilsia Church Admin Suite. Reach your congregation's mobile devices directly during services or daily devotionals.
                        </p>
                        <ul class="list-unstyled mb-5">
                            <li class="mb-3 d-flex"><i class="fa-solid fa-check text-purple me-3 mt-1"></i> <div>One-Click Mobile App Streaming</div></li>
                            <li class="mb-3 d-flex"><i class="fa-solid fa-check text-purple me-3 mt-1"></i> <div>Integrated Donation Links (Quest Pay)</div></li>
                            <li class="mb-3 d-flex"><i class="fa-solid fa-check text-purple me-3 mt-1"></i> <div>Automatic Recording to myLibrary</div></li>
                        </ul>
                        <a href="?page=quation" class="btn btn-outline-light px-5 py-3 fw-bold">Church Broadcasting Solutions</a>
                    </div>
                    <div class="col-lg-6" data-aos="fade-left">
                        <img src="assets/img/stream-radio-integration.png" class="img-fluid rounded-4 shadow-lg" alt="Radio Integration">
                    </div>
                </div>
            </div>
        </section>

        <!-- PERFORMANCE STATS -->
        <section class="py-120">
            <div class="container">
                <div class="p-5 rounded-4 border border-secondary border-opacity-25" style="background: rgba(255,255,255,0.02);" data-aos="fade-up">
                    <div class="row g-4 text-center">
                        <div class="col-md-3">
                            <h2 class="text-purple" style="color:var(--radio-accent)">99.9%</h2>
                            <p class="small text-uppercase">Uptime Guarantee</p>
                        </div>
                        <div class="col-md-3">
                            <h2 class="text-purple" style="color:var(--radio-accent)">Unlimited</h2>
                            <p class="small text-uppercase">Peak Listeners</p>
                        </div>
                        <div class="col-md-3">
                            <h2 class="text-purple" style="color:var(--radio-accent)">320kbps</h2>
                            <p class="small text-uppercase">High-Fidelity Audio</p>
                        </div>
                        <div class="col-md-3">
                            <h2 class="text-purple" style="color:var(--radio-accent)">24/7</h2>
                            <p class="small text-uppercase">AutoDJ Support</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- FINAL CTA -->
        <section class="py-5 text-center">
            <div class="container py-5">
                <h2 class="display-5 mb-4">Empower Your Digital Voice</h2>
                <p class="text-white-50 lead mb-5 mx-auto" style="max-width: 600px;">Stop worrying about server limits. Start leveraging the most powerful connection a business can make with RadioStream.</p>
                <a href="?page=quation" class="btn-radio px-5 py-3"><i class="fa-solid fa-bolt me-2"></i> Launch Station Console</a>
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