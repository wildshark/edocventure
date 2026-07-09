<?php
    if (!defined('EDCO_LOADED')) {
        header('Location: index.php?page=privacy');
        exit;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Privacy Policy | Edco Ventures</title>
    <meta name="description" content="Privacy Policy for Edco Ventures enterprise IT, SaaS, and Fintech applications.">
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
            background: rgba(255, 255, 255, 0.85);
            backdrop-filter: blur(20px) saturate(180%);
            -webkit-backdrop-filter: blur(20px) saturate(180%);
            border: 1px solid rgba(255, 255, 255, 0.5);
            border-radius: 24px;
            box-shadow: 0 40px 100px rgba(0,0,0,0.08);
            padding: 50px;
        }
    </style>
</head>
<body>
    <div class="main-wrapper">
        <?php include 'topmenu.php'; ?>

        <section class="page-header">
            <div class="container" data-aos="fade-up">
                <h1 class="display-4 text-white">Privacy Policy</h1>
                <p class="lead text-white-50">Data intelligence, protection, and operational governance policies.</p>
            </div>
        </section>

        <div class="container content-container">
            <div class="row justify-content-center">
                <div class="col-lg-10" data-aos="fade-up" data-aos-delay="100">
                    <div class="glass-card">
                        <h2 class="mb-4">1. Scope of Data Governance</h2>
                        <p>This Privacy Policy outlines how Edco Ventures ("we", "our", "us") collects, processes, and secure data across all SaaS platforms, Fintech labs, and cloud infrastructure applications in our ecosystem. By interacting with our products, you authorize Edco Ventures to utilize automated data processing logs to train, optimize, and fortify the operational logic of our enterprise nodes.</p>

                        <h2 class="mt-5 mb-4">2. Core Operational Authorization</h2>
                        <p>To deliver high-speed transactions and zero-latency analytics, our backend systems process metadata dynamically. Edco Ventures maintains absolute ownership of system telemetry, database indices, and anonymized logs generated through user interactions, using them to guarantee service stability, perform network updates, and prevent malicious exploits.</p>

                        <h2 class="mt-5 mb-4">3. Data Retention and Sovereignty</h2>
                        <p>All sensitive information, financial data logs, and school management database records are encrypted at rest and in transit. We maintain sovereign control over all data pipelines to insulate our software ecosystems from unauthorized third-party scraping and reverse-engineering, reserving the right to restrict system access immediately upon detection of anomalous telemetry.</p>

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
