<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" href="/assets/img/EDCO.png" type="image/png">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Edco Academy | Professional IT Training & Career Development</title>
    <meta name="description" content="Edco Academy: Hands-on IT training, Data Technology, and Computing skills designed to launch global careers.">

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
            --academy-cyan: #06b6d4;
            --academy-light: #f8fafc;
        }

        body { font-family: 'Inter', sans-serif; color: #475569; overflow-x: hidden; line-height: 1.7; }
        h1, h2, h3, h4, .display-4, .display-5 { font-family: 'Outfit', sans-serif; font-weight: 800; color: var(--edco-dark); letter-spacing: -0.02em; }

        /* --- NAVIGATION --- */
        .navbar { background: #fff; border-bottom: 1px solid rgba(0,0,0,0.05); padding: 12px 0; }
        .nav-link { font-weight: 600; color: var(--edco-dark) !important; padding: 10px 15px !important; font-size: 0.9rem; }
        .btn-portal { border: 2px solid var(--edco-primary); color: var(--edco-primary); font-weight: 700; border-radius: 8px; transition: 0.3s; padding: 8px 20px; text-decoration: none; }
        .btn-portal:hover { background: var(--edco-primary); color: #fff; }
        .btn-register { background: var(--edco-primary); color: #fff; font-weight: 700; border-radius: 8px; padding: 10px 25px; text-decoration: none; transition: 0.3s; border: none; }
        .btn-register:hover { background: var(--edco-dark); color: #fff; transform: translateY(-2px); }

        /* --- ACADEMY HERO --- */
        .academy-hero { 
            background: linear-gradient(135deg, #0f172a 0%, #1e1b4b 100%);
            padding: 120px 0 100px;
            color: #fff;
            position: relative;
        }
        .academy-hero::after {
            content: ''; position: absolute; top: 0; right: 0; width: 40%; height: 100%;
            background: url('https://www.transparenttextures.com/patterns/circuit-board.png'); opacity: 0.05;
        }

        /* --- COURSE CARDS --- */
        .course-card {
            background: #fff;
            padding: 40px;
            border-radius: 24px;
            border: 1px solid #e2e8f0;
            transition: 0.3s;
            height: 100%;
        }
        .course-card:hover { transform: translateY(-10px); border-color: var(--edco-primary); box-shadow: 0 20px 40px rgba(0,0,0,0.05); }
        .course-icon { 
            width: 60px; height: 60px; background: #eef2ff; 
            color: var(--edco-primary); border-radius: 15px; 
            display: flex; align-items: center; justify-content: center; 
            font-size: 1.8rem; margin-bottom: 25px; 
        }

        /* --- LAB SECTION --- */
        .lab-box {
            background: var(--academy-light);
            border-radius: 30px;
            padding: 60px;
            border: 1px solid #e2e8f0;
        }
        .check-list { list-style: none; padding: 0; }
        .check-list li { margin-bottom: 12px; font-weight: 500; display: flex; align-items: center; }
        .check-list i { color: #10b981; margin-right: 12px; }

        /* --- REGISTRATION SECTION --- */
        .reg-section { background: var(--edco-dark); padding: 100px 0; color: #fff; }
        .reg-card { background: rgba(255,255,255,0.05); border: 1px solid rgba(255,255,255,0.1); padding: 40px; border-radius: 24px; backdrop-filter: blur(10px); }
        .form-control { background: rgba(255,255,255,0.1); border: 1px solid rgba(255,255,255,0.2); color: #fff; padding: 12px; border-radius: 10px; }
        .form-control:focus { background: rgba(255,255,255,0.15); color: #fff; border-color: var(--academy-cyan); box-shadow: none; }
        .form-control::placeholder { color: rgba(255,255,255,0.5); }

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

        <!-- ACADEMY HERO -->
        <section class="academy-hero">
            <div class="container">
                <div class="row align-items-center g-5">
                    <div class="col-lg-7" data-aos="fade-right">
                        <h6 class="text-info fw-bold text-uppercase mb-3"><i class="fa-solid fa-graduation-cap me-2"></i> Career Evolution</h6>
                        <h1 class="display-3 text-white mb-4">Architecting the Next Generation of <span class="text-info">IT Leaders.</span></h1>
                        <p class="lead mb-5 text-white-50">
                            Edco Academy binds professional theory with hands-on technical labs. Master Information Technology, Data Science, and Infrastructure management in an environment built for global success.
                        </p>
                        <div class="d-flex flex-column flex-sm-row gap-3">
                            <a href="#courses" class="btn-register py-3 px-5">Explore Curriculums</a>
                            <a href="?page=quation" class="btn btn-outline-light px-4 py-3 border-2 fw-bold rounded-3">
                                <i class="fa-solid fa-play-circle me-2"></i> Academy Tour
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-5" data-aos="zoom-in">
                        <img src="assets/img/academy-it-training.png" class="img-fluid rounded-4 shadow-lg" alt="Hands-on IT Training">
                    </div>
                </div>
            </div>
        </section>

        <!-- TRAINING PILLARS -->
        <section id="courses" class="py-120 bg-white">
            <div class="container">
                <div class="text-center mb-5" data-aos="fade-up">
                    <h2 class="display-5">Specialized Career Paths</h2>
                    <p class="text-muted mx-auto" style="max-width: 600px;">Our training focuses on the emerging technologies that drive global dynamic businesses.</p>
                </div>
                <div class="row g-4">
                    <!-- Path 1 -->
                    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="course-card">
                            <div class="course-icon"><i class="fa-solid fa-network-wired"></i></div>
                            <h4>Information Technology</h4>
                            <p class="small text-muted mb-4">Master Enterprise Infrastructure, Virtualization, and Network Security. Learn how to manage remote sites across multiple continents.</p>
                            <a href="#" class="text-primary fw-bold text-decoration-none small">View Syllabus <i class="fa-solid fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                    <!-- Path 2 -->
                    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="course-card">
                            <div class="course-icon"><i class="fa-solid fa-database"></i></div>
                            <h4>Data Technology</h4>
                            <p class="small text-muted mb-4">Deep dive into AI, Big Data analytics, and financial reporting systems. Learn to leverage data for predictive business intelligence.</p>
                            <a href="#" class="text-primary fw-bold text-decoration-none small">View Syllabus <i class="fa-solid fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                    <!-- Path 3 -->
                    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
                        <div class="course-card">
                            <div class="course-icon"><i class="fa-solid fa-laptop-code"></i></div>
                            <h4>Hands-on Computing</h4>
                            <p class="small text-muted mb-4">Practical, skill-based training in Software Development, Cloud Node management, and DevOps automation pipelines.</p>
                            <a href="#" class="text-primary fw-bold text-decoration-none small">View Syllabus <i class="fa-solid fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- EXPERIENCE SECTION -->
        <section class="py-120">
            <div class="container">
                <div class="lab-box" data-aos="fade-up">
                    <div class="row align-items-center g-5">
                        <div class="col-lg-6">
                            <h2 class="display-5 mb-4">Beyond the Textbook. <br><span class="text-primary">Real-World Labs.</span></h2>
                            <p class="lead mb-4">We provide solutions that enable career growth. Our students have direct access to the Edco Venture Studio infrastructure.</p>
                            <ul class="check-list mb-5">
                                <li><i class="fa-solid fa-circle-check"></i> Practice on Live Virtual Nodes</li>
                                <li><i class="fa-solid fa-circle-check"></i> Internship at Edco Venture Labs</li>
                                <li><i class="fa-solid fa-circle-check"></i> Industry-Standard Certification Preparation</li>
                                <li><i class="fa-solid fa-circle-check"></i> Global Stakeholder Networking</li>
                            </ul>
                            <a href="#register" class="btn btn-primary btn-lg px-5 py-3 rounded-3 shadow">Join the Next Cohort</a>
                        </div>
                        <div class="col-lg-6">
                            <img src="assets/img/services-software-dev.png" class="img-fluid rounded-4" alt="Computing Labs">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- REGISTRATION SECTION -->
        <section id="register" class="reg-section">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6" data-aos="fade-right">
                        <h2 class="display-4 text-white mb-4">Start Your Tech Journey.</h2>
                        <p class="lead text-white-50">Fill out the form to register for our career development programs. Our admissions team will bind your goals to the right technology path.</p>
                        <div class="mt-5">
                            <div class="d-flex mb-4">
                                <i class="fa-solid fa-headset fa-2x text-info me-3"></i>
                                <div>
                                    <h5 class="text-white mb-0">Admissions Counseling</h5>
                                    <p class="small text-white-50">Speak to an engineer about your career roadmap.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6" data-aos="fade-left">
                        <div class="reg-card">
                            <h4 class="mb-4 text-white">Student Registration</h4>
                            <form id="academyForm">
                                <input type="hidden" name="form_type" value="academy">
                                <div class="mb-3">
                                    <label class="form-label small text-white-50">Full Name</label>
                                    <input type="text" class="form-control" name="full_name" placeholder="John Asamoah" required>
                                </div>
                                <div class="row mb-3">
                                    <div class="col">
                                        <label class="form-label small text-white-50">Email Address</label>
                                        <input type="email" class="form-control" name="email" placeholder="john@example.com" required>
                                    </div>
                                    <div class="col">
                                        <label class="form-label small text-white-50">Phone</label>
                                        <input type="text" class="form-control" name="phone" placeholder="+234 ...">
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <label class="form-label small text-white-50">Program of Interest</label>
                                    <select class="form-control" name="program">
                                        <option>Select Path</option>
                                        <option>IT Infrastructure & Networking</option>
                                        <option>Data Tech & AI Analytics</option>
                                        <option>Software Engineering & Cloud</option>
                                    </select>
                                </div>
                                <!-- Confirmation Toast -->
                                <div id="academyToast" class="alert mt-3 d-none" role="alert"></div>

                                <button type="submit" id="academyBtn" class="btn btn-info w-100 py-3 fw-bold text-white" style="background: var(--academy-cyan); border: none;">Submit Application <i class="fa-solid fa-paper-plane ms-2"></i></button>
                            </form>
                        </div>
                    </div>
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

        // ── Academy Registration AJAX Submit ──────────────────
        $('#academyForm').on('submit', function(e) {
            e.preventDefault();
            const btn   = $('#academyBtn');
            const toast = $('#academyToast');

            btn.prop('disabled', true).html('<i class="fa-solid fa-spinner fa-spin me-2"></i> Submitting...');
            toast.addClass('d-none');

            $.ajax({
                url: 'submit.php',
                type: 'POST',
                data: $(this).serialize(),
                dataType: 'json',
                success: function(res) {
                    if (res.success) {
                        toast.removeClass('d-none alert-danger').addClass('alert-success')
                             .html('<i class="fa-solid fa-circle-check me-2"></i>' + res.message);
                        $('#academyForm')[0].reset();
                    } else {
                        toast.removeClass('d-none alert-success').addClass('alert-danger')
                             .html('<i class="fa-solid fa-circle-xmark me-2"></i>' + res.message);
                    }
                },
                error: function() {
                    toast.removeClass('d-none alert-success').addClass('alert-danger')
                         .html('<i class="fa-solid fa-circle-xmark me-2"></i> A server error occurred. Please try again.');
                },
                complete: function() {
                    btn.prop('disabled', false).html('Submit Application <i class="fa-solid fa-paper-plane ms-2"></i>');
                    $('html,body').animate({ scrollTop: toast.offset().top - 120 }, 400);
                }
            });
        });
    </script>
</body>
</html>