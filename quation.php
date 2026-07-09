<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Request for Quotation | Edco Ventures - Architect Your Success</title>
    <meta name="description" content="Get a custom quote for Software Development, Cloud Infrastructure, or IT Consulting from Edco Ventures.">

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
            --edco-light: #f8fafc;
        }

        body { font-family: 'Inter', sans-serif; color: #475569; background-color: var(--edco-light); line-height: 1.7; }
        h1, h2, h3, h4, .display-5 { font-family: 'Outfit', sans-serif; font-weight: 800; color: var(--edco-dark); letter-spacing: -0.02em; }

        /* --- TOP MENU & NAV - loaded from topmenu.php --- */

        /* --- RFQ HEADER --- */
        .rfq-header { 
            background: radial-gradient(circle at 0% 0%, #1e1b4b, #0f172a);
            padding: 100px 0 160px;
            color: #fff;
            text-align: center;
        }

        /* --- FORM STYLING --- */
        .rfq-container { margin-top: -100px; padding-bottom: 100px; }
        .rfq-card { 
            background: #fff; 
            border: none; 
            border-radius: 24px; 
            box-shadow: 0 40px 100px rgba(0,0,0,0.1);
            padding: 50px;
        }

        .form-label { font-weight: 700; color: var(--edco-dark); font-size: 0.9rem; margin-bottom: 10px; }
        .form-control, .form-select { 
            padding: 14px 20px; 
            border-radius: 12px; 
            border: 1px solid #e2e8f0; 
            background-color: #f8fafc;
            transition: 0.3s;
        }
        .form-control:focus { 
            border-color: var(--edco-primary); 
            box-shadow: 0 0 0 4px rgba(79, 70, 229, 0.1); 
            background-color: #fff;
        }

        /* --- SERVICE SELECTION BOXES --- */
        .service-selector {
            border: 2px solid #e2e8f0;
            border-radius: 12px;
            padding: 15px 15px 15px 12px;
            cursor: pointer;
            transition: all 0.25s ease;
            display: flex;
            align-items: center;
            height: 100%;
            position: relative;
            user-select: none;
        }
        .service-selector:hover {
            border-color: var(--edco-primary);
            background: #f0f4ff;
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(79,70,229,0.1);
        }
        .service-selector.active {
            border-color: var(--edco-primary);
            background: #eef2ff;
            box-shadow: 0 0 0 3px rgba(79,70,229,0.25);
            transform: translateY(-2px);
        }
        .service-selector .svc-tick {
            display: none;
            position: absolute;
            top: 8px;
            right: 10px;
            width: 20px;
            height: 20px;
            background: var(--edco-primary);
            border-radius: 50%;
            align-items: center;
            justify-content: center;
            font-size: 0.6rem;
            color: #fff;
        }
        .service-selector.active .svc-tick { display: flex; }
        /* dark mode service boxes */
        body[data-theme="dark"] .service-selector { border-color: #334155; background: #1e293b; color: #cbd5e1; }
        body[data-theme="dark"] .service-selector:hover { background: #243147; border-color: #6366f1; }
        body[data-theme="dark"] .service-selector.active { background: #1e1b4b; border-color: #818cf8; box-shadow: 0 0 0 3px rgba(129,140,248,0.25); }
        body[data-theme="dark"] .service-selector i.text-primary { color: #818cf8 !important; }

        /* --- SIDEBAR INFO --- */
        .info-box { background: var(--edco-primary); color: white; border-radius: 20px; padding: 40px; margin-bottom: 30px; }
        .trust-item { display: flex; align-items: start; margin-bottom: 25px; }
        .trust-icon { width: 40px; height: 40px; background: rgba(255,255,255,0.2); border-radius: 10px; display: flex; align-items: center; justify-content: center; margin-right: 20px; flex-shrink: 0; }

        /* --- FOOTER --- */
        .footer-main { background: var(--edco-footer); color: #94a3b8; padding: 80px 0 30px 0; }
    </style>
</head>

<body>

    <div class="main-wrapper">
        <?php include 'topmenu.php'; ?>

        <!-- HEADER -->
        <section class="rfq-header">
            <div class="container" data-aos="fade-up">
                <h6 class="text-info fw-bold text-uppercase mb-3">Discovery Phase</h6>
                <h1 class="display-4 text-white">Request for Quotation</h1>
                <p class="lead text-white-50 mx-auto mt-4" style="max-width: 700px;">
                    Provide us with your project requirements and our expert team will architect a tailor-made strategy for your business.
                </p>
            </div>
        </section>

        <!-- RFQ FORM SECTION -->
        <section class="rfq-container">
            <div class="container">
                <div class="row g-5">
                    <!-- The Form -->
                    <div class="col-lg-8" data-aos="fade-up">
                        <div class="rfq-card">
                            <form id="rfqForm">
                                <input type="hidden" name="form_type" value="rfq">
                                <h4 class="mb-4">1. Project Overview</h4>
                                <div class="row g-4 mb-5">
                                    <div class="col-md-6">
                                        <label class="form-label">Full Name</label>
                                        <input type="text" class="form-control" name="full_name" placeholder="John Asamoah" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Company Email</label>
                                        <input type="email" class="form-control" name="email" placeholder="john@company.com" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Company Name</label>
                                        <input type="text" class="form-control" name="company" placeholder="Enterprise Ltd">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Estimated Budget (USD)</label>
                                        <select class="form-select" name="budget">
                                            <option selected disabled>Select Budget Range</option>
                                            <option>$5k - $20k</option>
                                            <option>$20k - $100k</option>
                                            <option>$100k+</option>
                                            <option>To be determined</option>
                                        </select>
                                    </div>
                                </div>

                                <h4 class="mb-4">2. Select Required Services</h4>
                                <div class="row g-3 mb-5" id="serviceGrid">
                                    <div class="col-md-4">
                                        <div class="service-selector" data-service="Software Dev">
                                            <span class="svc-tick"><i class="fa-solid fa-check"></i></span>
                                            <i class="fa-solid fa-code text-primary me-3"></i> Software Dev
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="service-selector" data-service="Cloud Infra">
                                            <span class="svc-tick"><i class="fa-solid fa-check"></i></span>
                                            <i class="fa-solid fa-cloud text-primary me-3"></i> Cloud Infra
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="service-selector" data-service="Consulting">
                                            <span class="svc-tick"><i class="fa-solid fa-check"></i></span>
                                            <i class="fa-solid fa-chess-knight text-primary me-3"></i> Consulting
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="service-selector" data-service="Server Setup">
                                            <span class="svc-tick"><i class="fa-solid fa-check"></i></span>
                                            <i class="fa-solid fa-server text-primary me-3"></i> Server Setup
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="service-selector" data-service="Fintech Lab">
                                            <span class="svc-tick"><i class="fa-solid fa-check"></i></span>
                                            <i class="fa-solid fa-money-bill-transfer text-primary me-3"></i> Fintech Lab
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="service-selector" data-service="Academy">
                                            <span class="svc-tick"><i class="fa-solid fa-check"></i></span>
                                            <i class="fa-solid fa-graduation-cap text-primary me-3"></i> Academy
                                        </div>
                                    </div>
                                </div>
                                <!-- hidden field populated by JS -->
                                <input type="hidden" name="services" id="servicesField">

                                <h4 class="mb-4">3. Project Scope & Timeline</h4>
                                <div class="row g-4 mb-4">
                                    <div class="col-12">
                                        <label class="form-label">Brief Project Description</label>
                                        <textarea class="form-control" name="description" rows="5" placeholder="Describe your objectives, current challenges, and desired outcomes..."></textarea>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Desired Launch Date</label>
                                        <input type="date" class="form-control" name="launch_date">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Urgency Level</label>
                                        <select class="form-select" name="urgency">
                                            <option>Standard (1-3 Months)</option>
                                            <option>Priority (4-6 Weeks)</option>
                                            <option>Critical (ASAP)</option>
                                        </select>
                                    </div>
                                </div>

                                <!-- Confirmation Toast -->
                                <div id="rfqToast" class="alert mt-4 d-none" role="alert"></div>

                                <button type="submit" id="rfqBtn" class="btn btn-primary btn-lg w-100 mt-4 py-3 fw-bold" style="background: var(--edco-primary); border: none; border-radius: 12px;">
                                    Generate Quotation Request <i class="fa-solid fa-paper-plane ms-2"></i>
                                </button>
                            </form>
                        </div>
                    </div>

                    <!-- Sidebar Content -->
                    <div class="col-lg-4" data-aos="fade-left">
                        <div class="info-box">
                            <h4 class="text-white mb-4">Why Edco Ventures?</h4>
                            <div class="trust-item">
                                <div class="trust-icon"><i class="fa-solid fa-globe"></i></div>
                                <div>
                                    <h6 class="mb-1 text-white">Global Presence</h6>
                                    <p class="small text-white-50 mb-0">Supporting remote sites across multiple continents since 2011.</p>
                                </div>
                            </div>
                            <div class="trust-item">
                                <div class="trust-icon"><i class="fa-solid fa-handshake"></i></div>
                                <div>
                                    <h6 class="mb-1 text-white">Value Driven</h6>
                                    <p class="small text-white-50 mb-0">Fixed-cost budgeting and SLAs tailored to your specific needs.</p>
                                </div>
                            </div>
                            <div class="trust-item">
                                <div class="trust-icon"><i class="fa-solid fa-microchip"></i></div>
                                <div>
                                    <h6 class="mb-1 text-white">Advanced R&D</h6>
                                    <p class="small text-white-50 mb-0">Leveraging emerging technologies to defy complexity.</p>
                                </div>
                            </div>
                        </div>

                        <div class="bg-white p-4 rounded-4 border">
                            <h5 class="mb-3">Our Guarantee</h5>
                            <p class="small text-muted mb-4">Once you submit this form, a Senior Solutions Architect will review your requirements and respond within 24 business hours.</p>
                            <div class="d-flex align-items-center">
                                <i class="fa-solid fa-circle-check text-success me-2"></i>
                                <span class="small fw-bold">ISO Certified Standards</span>
                            </div>
                            <div class="d-flex align-items-center mt-2">
                                <i class="fa-solid fa-circle-check text-success me-2"></i>
                                <span class="small fw-bold">99.9% Infrastructure Uptime</span>
                            </div>
                        </div>
                    </div>
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

        // ── Service Selector Toggle ───────────────────────────
        $(document).on('click', '.service-selector', function() {
            $(this).toggleClass('active');
            // Update the hidden field with all active selections
            const selected = [];
            $('.service-selector.active').each(function() {
                selected.push($(this).data('service'));
            });
            $('#servicesField').val(selected.join(', '));
        });

        // ── RFQ Form AJAX Submit ─────────────────────────────
        $('#rfqForm').on('submit', function(e) {
            e.preventDefault();
            const btn   = $('#rfqBtn');
            const toast = $('#rfqToast');

            // Ensure hidden services field is populated
            const selected = [];
            $('.service-selector.active').each(function() {
                selected.push($(this).data('service'));
            });
            $('#servicesField').val(selected.join(', '));

            const formData = $(this).serializeArray();

            btn.prop('disabled', true).html('<i class="fa-solid fa-spinner fa-spin me-2"></i> Submitting...');
            toast.addClass('d-none');

            $.ajax({
                url: 'submit.php',
                type: 'POST',
                data: formData,
                dataType: 'json',
                success: function(res) {
                    if (res.success) {
                        toast.removeClass('d-none alert-danger').addClass('alert-success')
                             .html('<i class="fa-solid fa-circle-check me-2"></i>' + res.message);
                        // Reset form and clear service selections
                        $('#rfqForm')[0].reset();
                        $('.service-selector').removeClass('active');
                        $('#servicesField').val('');
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
                    btn.prop('disabled', false).html('Generate Quotation Request <i class="fa-solid fa-paper-plane ms-2"></i>');
                    $('html,body').animate({ scrollTop: toast.offset().top - 120 }, 400);
                }
            });
        });
    </script>
</body>
</html>