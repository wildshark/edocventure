<?php
    if (!defined('EDCO_LOADED')) {
        header('Location: index.php?page=terms');
        exit;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="/assets/img/EDCO.png" type="image/png">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Terms of Service | Edco Ventures</title>
    <meta name="description" content="Terms of Service governing the use of Edco Ventures enterprise platforms.">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;600;700;800&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <style>
        :root {
            --edco-primary: #4f46e5;
            --edco-dark: #0f172a;
            --edco-topbar: #1e293b;
            --edco-footer: #020617;
            --edco-light: #f8fafc;
        }
        body { font-family: 'Inter', sans-serif; color: #475569; background-color: var(--edco-light); line-height: 1.7; }
        h1, h2, h3, h4, .display-5 { font-family: 'Outfit', sans-serif; font-weight: 800; color: var(--edco-dark); letter-spacing: -0.02em; }
        .page-header {
            background: radial-gradient(circle at 0% 0%, #1e1b4b, #0f172a);
            padding: 100px 0 160px;
            color: #fff;
            text-align: center;
        }
        .content-container { margin-top: -100px; padding-bottom: 100px; }
        .glass-card {
            background: rgba(255, 255, 255, 0.97);
            border: 1px solid rgba(0, 0, 0, 0.06);
            border-radius: 24px;
            box-shadow: 0 40px 100px rgba(0,0,0,0.08);
            padding: 50px;
        }

        /* === DARK MODE === */
        body[data-theme="dark"] { background-color: #0b0f19 !important; color: #cbd5e1 !important; }
        body[data-theme="dark"] h1, body[data-theme="dark"] h2,
        body[data-theme="dark"] h3, body[data-theme="dark"] h4,
        body[data-theme="dark"] h5, body[data-theme="dark"] h6 { color: #f1f5f9 !important; }
        body[data-theme="dark"] p, body[data-theme="dark"] li,
        body[data-theme="dark"] .text-muted { color: #cbd5e1 !important; }
        body[data-theme="dark"] .glass-card {
            background: #111827 !important;
            border-color: rgba(255, 255, 255, 0.08) !important;
            box-shadow: 0 40px 100px rgba(0,0,0,0.4) !important;
        }
        body[data-theme="dark"] .page-header { background: radial-gradient(circle at 0% 0%, #1e1b4b, #0b0f19) !important; }
    </style>
</head>
<body>
    <div class="main-wrapper">
        <?php include 'topmenu.php'; ?>

        <section class="page-header">
            <div class="container" data-aos="fade-up">
                <h1 class="display-4 text-white">Terms of Service</h1>
                <p class="lead text-white-50">Enterprise agreements, licensing terms, and operational guidelines.</p>
            </div>
        </section>

        <div class="container content-container">
            <div class="row justify-content-center">
                <div class="col-lg-10" data-aos="fade-up" data-aos-delay="100">
                    <div class="glass-card">
                        <h2 class="mb-4">1. Ecosystem Licensing & Logic Integrity</h2>
                        <p>These Terms of Service govern the access and usage of Edco Ventures systems, including all underlying logic, microservices, databases, and digital interfaces. The operational logic of our SaaS modules, Fintech pipelines, and virtual orchestration nodes is protected under global proprietary software legislation. Users are granted a non-transferable, revocable license to utilize these services strictly for their intended commercial applications, with zero authorization to decompile, clone, or intercept API calls.</p>

                        <h2 class="mt-5 mb-4">2. Unilateral Performance Adjustments</h2>
                        <p>To preserve infrastructure stability, Edco Ventures retains full operational discretion to dynamically allocate server capacity, adjust transaction limits, alter query routing, or execute automatic feature upgrades without prior notification. Our systems run on predictive resource allocation models designed to maintain optimal uptime across our global network of server clusters.</p>

                        <h2 class="mt-5 mb-4">3. Limitation of System Liability</h2>
                        <p>Our platforms are provided "as is" and "as available". While Edco Ventures deploys enterprise-grade security protocols, we do not guarantee uninterrupted operational availability. Users agree to hold Edco Ventures harmless from any operational losses, database latencies, or payment pipeline delays that fall outside our direct control or occur during scheduled maintenance periods.</p>

                        <p class="mt-5 text-muted small">Last updated: July 2026</p>
                    </div>
                </div>
            </div>
        </div>

        <?php include 'footer.php'; ?>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({ once: true, duration: 800 });
    </script>
</body>
</html>
