<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" href="/assets/img/EDOC.webp" type="image/webp">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Edoc Ventures | Global Enterprise IT & Venture Studio</title>
    <meta name="description" content="15 years of engineering excellence in SaaS, Fintech, and Cloud Infrastructure.">

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
            --edoc-primary: #4f46e5; /* Modern Indigo */
            --edoc-cyan: #06b6d4;
            --edoc-dark: #0f172a;    
            --edoc-topbar: #1e293b;
            --edoc-footer: #020617;
        }

        body { font-family: 'Inter', sans-serif; color: #475569; overflow-x: hidden; line-height: 1.6; }
        h1, h2, h3, h4, h5, .display-5 { font-family: 'Outfit', sans-serif; font-weight: 800; color: var(--edoc-dark); letter-spacing: -0.02em; }

        /* --- HERO --- */
        .hero-premium { background: linear-gradient(135deg, #0f172a 0%, #1e1b4b 100%); padding: 140px 0 100px; color: #fff; overflow: hidden; }
        .btn-edoc { background: var(--edoc-primary); color: white; border-radius: 10px; padding: 14px 32px; font-weight: 600; border: none; transition: 0.3s; text-decoration: none; display: inline-block; }
        .btn-edoc:hover { background: #4338ca; transform: translateY(-2px); box-shadow: 0 10px 20px rgba(79, 70, 229, 0.3); color: white; }

        /* --- VENTURE STUDIO SECTION (Requested Content) --- */
        .studio-badge { background: var(--edoc-primary); color: white; padding: 25px; border-radius: 20px; display: inline-block; text-align: center; box-shadow: 0 20px 40px rgba(79, 70, 229, 0.2); }
        .feature-item { padding: 20px; border-radius: 15px; background: #f8fafc; border: 1px solid #e2e8f0; transition: 0.3s; height: 100%; }
        .feature-item:hover { border-color: var(--edoc-primary); background: #fff; box-shadow: 0 10px 30px rgba(0,0,0,0.05); }
        .feature-icon { width: 50px; height: 50px; background: #fff; color: var(--edoc-primary); border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 1.5rem; margin-bottom: 15px; box-shadow: 0 5px 15px rgba(0,0,0,0.05); }

    </style>
</head>

<body>

    <div class="main-wrapper">
        <?php include 'topmenu.php'; ?>
       
        <!-- HERO SECTION -->
        <section class="hero-premium">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7" data-aos="fade-up">
                        <h1 class="display-3 text-white mb-4">Engineering the <span class="text-cyan">Digital Future</span> of Enterprise.</h1>
                        <p class="lead text-white-50 mb-5">15 years of excellence in architecting high-scale software, secure Fintech, and robust cloud nodes for global leaders.</p>
                        <div class="d-flex flex-column flex-sm-row gap-3">
                            <a href="services" class="btn btn-edoc">Explore Solutions</a>
                            <a href="about" class="btn btn-outline-light px-4 py-3 border-2 fw-bold text-decoration-none">
                                <i class="fa-solid fa-play me-2"></i> Vision 2026
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-5 d-none d-lg-block" data-aos="zoom-in">
                        <img src="https://images.unsplash.com/photo-1551288049-bbb652167014?auto=format&fit=crop&q=80&w=800" class="img-fluid rounded-4 shadow-lg" alt="Analytics">
                    </div>
                </div>
            </div>
        </section>

        <!-- THE VENTURE STUDIO SECTION (Requested Integrated Content) -->
        <section class="py-120 bg-white">
            <div class="container py-5">
                <div class="row align-items-center">
                    <div class="col-lg-6 mb-5" data-aos="fade-right">
                        <div class="position-relative">
                            <!-- Team/Office Image -->
                            <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&q=80&w=700" class="img-fluid rounded-4 shadow-lg" alt="Edoc Venture Studio">
                            <div class="studio-badge position-absolute bottom-0 end-0 translate-middle-y me-n4 d-none d-md-block">
                                <h2 class="text-white mb-0">15+</h2>
                                <p class="small mb-0 text-white-50 uppercase fw-bold">Years Experience</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 ps-lg-5" data-aos="fade-left">
                        <h6 class="text-primary fw-bold text-uppercase mb-3">The Venture Studio</h6>
                        <h2 class="display-5 mb-4">We Build Infrastructure that Defies Complexity.</h2>
                        <p class="lead mb-5 text-muted">
                            We combine deep technical expertise with strategic product thinking to deliver software that doesn't just work—it scales.
                        </p>
                        
                        <!-- Specific Features -->
                        <div class="row g-4">
                            <div class="col-md-6">
                                <div class="feature-item">
                                    <div class="feature-icon"><i class="fa-solid fa-microchip"></i></div>
                                    <h5>R&D Labs</h5>
                                    <p class="small mb-0 text-muted">Pioneering new standards in Fintech and Cloud computing.</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="feature-item">
                                    <div class="feature-icon"><i class="fa-solid fa-globe"></i></div>
                                    <h5>Global Scale</h5>
                                    <p class="small mb-0 text-muted">Distributed infrastructure serving millions of transactions.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- FOOTER (FIXED) -->
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