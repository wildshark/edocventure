<style>
/* --- GLOBAL SECTION SPACING (THEME 5.0) --- */
.py-120 {
    padding-top: 120px !important;
    padding-bottom: 120px !important;
}
@media (max-width: 768px) {
    .py-120 {
        padding-top: 80px !important;
        padding-bottom: 80px !important;
    }
}

/* --- TOP MENU --- */
.top-bar { background: var(--edco-topbar, #1e293b); color: rgba(255,255,255,0.7); padding: 10px 0; font-size: 0.85rem; }
.top-bar a { color: rgba(255,255,255,0.7); text-decoration: none; transition: 0.3s; }
.top-bar a:hover { color: #fff; }

/* --- NAVIGATION --- */
.navbar { padding: 15px 0; background: #fff; transition: 0.4s; border-bottom: 1px solid rgba(0,0,0,0.05); }
.sticky-header { box-shadow: 0 10px 30px rgba(0,0,0,0.05); }
.nav-link { font-weight: 600; color: var(--edco-dark, #0f172a) !important; padding: 10px 18px !important; font-size: 0.95rem; }

/* --- MEGA MENU --- */
.dropdown-menu { border: none; border-radius: 16px; padding: 25px; min-width: 750px; box-shadow: 0 20px 50px rgba(0,0,0,0.15); }
.drop-heading { color: var(--edco-primary, #4f46e5); font-size: 0.75rem; text-transform: uppercase; letter-spacing: 1.5px; font-weight: 800; margin-bottom: 15px; border-bottom: 1px solid #f1f5f9; padding-bottom: 5px; }
.dropdown-link { display: flex; align-items: start; padding: 12px; border-radius: 12px; text-decoration: none; transition: 0.3s; margin-bottom: 5px; }
.dropdown-link:hover { background: #f8fafc; transform: translateX(5px); }
.drop-icon { width: 32px; height: 32px; background: #eef2ff; color: var(--edco-primary, #4f46e5); border-radius: 8px; display: flex; align-items: center; justify-content: center; margin-right: 15px; flex-shrink: 0; font-size: 0.9rem; }
.drop-title { display: block; font-weight: 700; color: var(--edco-dark, #0f172a); font-size: 0.9rem; margin-bottom: 2px; }
.drop-desc { font-size: 0.75rem; color: #64748b; margin: 0; line-height: 1.2; }

/* --- THEME TOGGLE & GLOBAL STYLES --- */
.btn-theme-toggle {
    background: transparent;
    border: 1px solid rgba(0,0,0,0.1);
    color: var(--edco-dark, #0f172a);
    width: 40px;
    height: 40px;
    border-radius: 50%;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    transition: 0.3s;
    font-size: 1rem;
}
.btn-theme-toggle:hover {
    background: rgba(0,0,0,0.05);
    transform: rotate(15deg);
}

.btn-edco { background: var(--edco-primary, #4f46e5); color: white !important; border-radius: 10px; padding: 10px 24px; font-weight: 600; border: none; transition: 0.3s; text-decoration: none; display: inline-block; }
.btn-edco:hover { background: #4338ca; transform: translateY(-2px); box-shadow: 0 10px 20px rgba(79, 70, 229, 0.3); color: white !important; }

/* --- PREMIUM THEME 5.0 CORE STYLES --- */
:root {
    --edco-primary: #4f46e5;
    --edco-cyan: #06b6d4;
    --edco-purple: #8b5cf6;
    --edco-rose: #f43f5e;
    --bg-mesh: radial-gradient(circle at 15% 20%, rgba(79, 70, 229, 0.04) 0%, transparent 45%), 
               radial-gradient(circle at 85% 80%, rgba(6, 182, 212, 0.04) 0%, transparent 45%);
}

body {
    background-image: var(--bg-mesh) !important;
    background-attachment: fixed !important;
    transition: background 0.5s ease, color 0.3s ease;
}

/* Premium ribbon styles */
.accent-ribbon {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 5px;
    background: linear-gradient(90deg, transparent, var(--edco-primary), var(--edco-cyan), var(--edco-purple), transparent);
    z-index: 999;
}

/* Floating blur ribbon shapes in background */
.floating-ribbon {
    position: absolute;
    border-radius: 50%;
    filter: blur(80px);
    opacity: 0.5;
    pointer-events: none;
    z-index: 0;
    animation: float 20s infinite alternate ease-in-out;
}

.floating-ribbon-1 {
    width: 300px;
    height: 300px;
    background: radial-gradient(circle, rgba(79,70,229,0.15) 0%, rgba(0,0,0,0) 70%);
    top: 15%;
    left: -5%;
}

.floating-ribbon-2 {
    width: 400px;
    height: 400px;
    background: radial-gradient(circle, rgba(6,182,212,0.1) 0%, rgba(0,0,0,0) 70%);
    top: 55%;
    right: -5%;
    animation-delay: -5s;
}

@keyframes float {
    0% { transform: translate(0, 0) rotate(0deg) scale(1); }
    100% { transform: translate(50px, 80px) rotate(360deg) scale(1.1); }
}

/* Badge Premium styling */
.badge-premium {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    padding: 6px 16px;
    background: rgba(79, 70, 229, 0.08);
    border: 1px solid rgba(79, 70, 229, 0.15);
    color: var(--edco-primary);
    border-radius: 100px;
    font-size: 0.75rem;
    font-weight: 800;
    text-transform: uppercase;
    letter-spacing: 1.5px;
    margin-bottom: 20px;
    box-shadow: 0 4px 12px rgba(79, 70, 229, 0.05);
}

body[data-theme="dark"] .badge-premium {
    background: rgba(56, 189, 248, 0.1);
    border: 1px solid rgba(56, 189, 248, 0.2);
    color: #38bdf8;
}

/* Glassmorphic card styling overrides */
.product-item, .course-card, .value-card, .feature-card, .stat-card, .rfq-card, .contact-card, .lab-box {
    position: relative !important;
    background: rgba(255, 255, 255, 0.75) !important;
    backdrop-filter: blur(16px) saturate(180%) !important;
    -webkit-backdrop-filter: blur(16px) saturate(180%) !important;
    border: 1px solid rgba(255, 255, 255, 0.4) !important;
    box-shadow: 0 10px 30px rgba(15, 23, 42, 0.04) !important;
    transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1) !important;
    border-radius: 20px !important;
}

.product-item::before, .course-card::before, .value-card::before, .feature-card::before, .stat-card::before {
    content: '';
    position: absolute;
    top: 0; left: 0; width: 100%; height: 100%;
    background: linear-gradient(135deg, var(--edco-primary), var(--edco-cyan));
    opacity: 0;
    transition: opacity 0.4s ease;
    z-index: -1;
    border-radius: 20px;
}

.product-item:hover, .course-card:hover, .value-card:hover, .feature-card:hover, .stat-card:hover {
    transform: translateY(-8px) scale(1.01) !important;
    border-color: rgba(79, 70, 229, 0.3) !important;
    box-shadow: 0 30px 60px rgba(15, 23, 42, 0.08) !important;
}

.product-item:hover::before, .course-card:hover::before, .value-card:hover::before, .feature-card:hover::before {
    opacity: 0.03;
}

/* Dark Mode Overrides */
body[data-theme="dark"] {
    --bg-mesh: radial-gradient(circle at 15% 20%, rgba(79, 70, 229, 0.15) 0%, transparent 45%), 
               radial-gradient(circle at 85% 80%, rgba(6, 182, 212, 0.1) 0%, transparent 45%), 
               #0b0f19;
    --edco-light: #0b0f19 !important;
    --edco-footer: #0b0f19 !important;
    --edco-topbar: #0f172a !important;
    --academy-light: #111827 !important;
    background-image: var(--bg-mesh) !important;
    background-color: #0b0f19 !important;
    color: #94a3b8 !important;
}

body[data-theme="dark"] h1,
body[data-theme="dark"] h2,
body[data-theme="dark"] h3,
body[data-theme="dark"] h4,
body[data-theme="dark"] h5,
body[data-theme="dark"] h6,
body[data-theme="dark"] .display-3,
body[data-theme="dark"] .display-4,
body[data-theme="dark"] .display-5,
body[data-theme="dark"] .nav-link,
body[data-theme="dark"] .drop-title,
body[data-theme="dark"] .form-label,
body[data-theme="dark"] .feature-card h5,
body[data-theme="dark"] .value-card h3,
body[data-theme="dark"] .value-card h4,
body[data-theme="dark"] .value-card h5,
body[data-theme="dark"] .product-item h5,
body[data-theme="dark"] .course-card h4,
body[data-theme="dark"] .course-card h5,
body[data-theme="dark"] .stat-card h2,
body[data-theme="dark"] .stat-card h3,
body[data-theme="dark"] .stat-card p,
body[data-theme="dark"] label,
body[data-theme="dark"] strong {
    color: #f8fafc !important;
}

body[data-theme="dark"] .navbar {
    background: #0f172a !important;
    border-bottom: 1px solid rgba(255, 255, 255, 0.08) !important;
}

body[data-theme="dark"] .btn-theme-toggle {
    border-color: rgba(255,255,255,0.1);
    color: #f8fafc !important;
}

body[data-theme="dark"] .btn-theme-toggle:hover {
    background: rgba(255,255,255,0.05);
}

body[data-theme="dark"] .dropdown-menu {
    background: #0f172a !important;
    box-shadow: 0 20px 50px rgba(0,0,0,0.4) !important;
}

body[data-theme="dark"] .dropdown-link:hover {
    background: #1e293b !important;
}

body[data-theme="dark"] .drop-heading {
    border-bottom-color: rgba(255,255,255,0.08) !important;
}

body[data-theme="dark"] .footer-main {
    background: radial-gradient(circle at top right, #1e1b4b, #0f172a) !important;
}

body[data-theme="dark"] section.bg-white,
body[data-theme="dark"] section.py-120,
body[data-theme="dark"] section.bg-light,
body[data-theme="dark"] .bg-white,
body[data-theme="dark"] .bg-light,
body[data-theme="dark"] .bg-light-subtle {
    background-color: #0b0f19 !important;
    color: #cbd5e1 !important;
}

/* --- Inline white/light boxes — quote cards, info panels, newsletter box, etc. --- */
body[data-theme="dark"] [style*="background: #f8fafc"],
body[data-theme="dark"] [style*="background: #ffffff"],
body[data-theme="dark"] [style*="background: white"],
body[data-theme="dark"] [style*="background:#fff"],
body[data-theme="dark"] [style*="background: #fff"] {
    background: #1e293b !important;
    color: #e2e8f0 !important;
    border-color: rgba(255,255,255,0.08) !important;
}

/* --- text-dark becomes readable in dark mode --- */
body[data-theme="dark"] .text-dark,
body[data-theme="dark"] .fw-semibold.text-dark,
body[data-theme="dark"] .text-black {
    color: #e2e8f0 !important;
}

/* --- bg-white p-4 rounded boxes (inline in pages like quation, contact) --- */
body[data-theme="dark"] .bg-white.p-4,
body[data-theme="dark"] .bg-white.rounded-4 {
    background-color: #1e293b !important;
    border-color: rgba(255,255,255,0.08) !important;
}

/* --- Italic/quote text in dark mode --- */
body[data-theme="dark"] .fst-italic {
    color: #e2e8f0 !important;
}

/* --- bg-light form inputs --- */
body[data-theme="dark"] .form-control.bg-light,
body[data-theme="dark"] input.bg-light {
    background-color: #1f2937 !important;
    border-color: #374151 !important;
    color: #e2e8f0 !important;
}

body[data-theme="dark"] .text-muted,
body[data-theme="dark"] .text-white-50 {
    color: #94a3b8 !important;
}

body[data-theme="dark"] .lead {
    color: #cbd5e1 !important;
}

/* --- bg-light bordered info/tip boxes (e.g. eAccounting AI insight) --- */
body[data-theme="dark"] .bg-light.rounded,
body[data-theme="dark"] .bg-light.p-3,
body[data-theme="dark"] .bg-light.p-4,
body[data-theme="dark"] .bg-light.p-5 {
    background-color: #1e293b !important;
    color: #e2e8f0 !important;
}

/* --- Node spec table rows and dark bordered boxes --- */
body[data-theme="dark"] .p-5.rounded-4.bg-dark,
body[data-theme="dark"] .bg-dark {
    background-color: #111827 !important;
    border-color: rgba(255,255,255,0.08) !important;
}

/* --- AI analysis bar background --- */
body[data-theme="dark"] .ai-analysis-preview {
    background: #1e293b !important;
    border-color: rgba(255,255,255,0.08) !important;
}

body[data-theme="dark"] .course-card,
body[data-theme="dark"] .product-item,
body[data-theme="dark"] .value-card,
body[data-theme="dark"] .rfq-card,
body[data-theme="dark"] .contact-card,
body[data-theme="dark"] .lab-box,
body[data-theme="dark"] .stat-card,
body[data-theme="dark"] .team-card,
body[data-theme="dark"] .feature-card {
    background-color: #111827 !important;
    border-color: rgba(255, 255, 255, 0.08) !important;
    color: #94a3b8 !important;
    box-shadow: 0 20px 40px rgba(0,0,0,0.3) !important;
}

body[data-theme="dark"] .stat-card h2,
body[data-theme="dark"] .stat-card p {
    color: #f8fafc !important;
}

body[data-theme="dark"] .text-primary {
    color: #818cf8 !important;
}

body[data-theme="dark"] .course-icon,
body[data-theme="dark"] .drop-icon {
    background-color: #1e293b !important;
    color: #38bdf8 !important;
}

body[data-theme="dark"] input.form-control,
body[data-theme="dark"] select.form-select,
body[data-theme="dark"] textarea.form-control {
    background-color: #1f2937 !important;
    border-color: #374151 !important;
    color: #ffffff !important;
}

body[data-theme="dark"] input.form-control::placeholder,
body[data-theme="dark"] textarea.form-control::placeholder {
    color: #6b7280 !important;
}

body[data-theme="dark"] .reg-section {
    background: #0f172a !important;
}

body[data-theme="dark"] .reg-section h2,
body[data-theme="dark"] .reg-section p,
body[data-theme="dark"] .reg-section label,
body[data-theme="dark"] .reg-section .form-label {
    color: #ffffff !important;
}

body[data-theme="dark"] .reg-section select.form-select {
    background-color: rgba(255,255,255,0.1) !important;
    border: 1px solid rgba(255,255,255,0.2) !important;
    color: #ffffff !important;
}

body[data-theme="dark"] .reg-section select.form-select option {
    background-color: #0f172a !important;
    color: #ffffff !important;
}

body[data-theme="dark"] .product-hero,
body[data-theme="dark"] .page-header,
body[data-theme="dark"] .service-hero,
body[data-theme="dark"] .academy-hero,
body[data-theme="dark"] .rfq-header,
body[data-theme="dark"] .contact-header {
    background: radial-gradient(circle at 15% 20%, rgba(79, 70, 229, 0.2) 0%, transparent 45%), 
                radial-gradient(circle at 85% 80%, rgba(6, 182, 212, 0.15) 0%, transparent 45%), 
                #0b0f19 !important;
    color: #f8fafc !important;
}

body[data-theme="dark"] .hero-badge {
    background: rgba(99, 102, 241, 0.15) !important;
    color: #818cf8 !important;
}

body[data-theme="dark"] p,
body[data-theme="dark"] li,
body[data-theme="dark"] .text-muted {
    color: #cbd5e1 !important;
}

/* =====================================================
   COMPREHENSIVE RESPONSIVE STYLES — ALL BREAKPOINTS
   ===================================================== */

/* --- IMAGES always fluid --- */
img { max-width: 100%; height: auto; }

/* --- CUSTOM BOX RESPONSIVENESS (Mobile/Tablet) --- */
@media (max-width: 767.98px) {
    .hosting-box,
    .hybrid-box,
    .impact-bg,
    .community-box,
    .coupon-box {
        padding: 40px 20px !important;
        border-radius: 20px !important;
    }
}

/* --- MEGA MENU: mobile override --- */
@media (max-width: 991.98px) {
    .dropdown-menu {
        min-width: 100% !important;
        max-width: 100% !important;
        width: 100% !important;
        border-radius: 12px !important;
        padding: 12px !important;
        box-shadow: none !important;
        margin-top: 4px !important;
    }
    .dropdown-menu .row { flex-direction: column; }
    .dropdown-menu .col-md-4 { width: 100%; margin-bottom: 8px; }
    .dropdown-link { padding: 10px 8px; }
    .navbar-collapse { padding: 12px 0; }
    .navbar .btn-edco { display: none; } /* Hide CTA on small nav */
}

/* --- NAVBAR --- */
@media (max-width: 575.98px) {
    .navbar { padding: 10px 0; }
    .navbar-brand img { height: 38px !important; }
    .navbar-toggler { padding: 4px 8px; font-size: 1.1rem; }
}

/* --- TOP BAR --- */
@media (max-width: 991.98px) {
    .top-bar { display: none !important; }
}

/* --- HERO / DISPLAY TYPOGRAPHY --- */
@media (max-width: 767.98px) {
    .display-3, .display-4, .display-5 {
        font-size: clamp(1.7rem, 6vw, 2.4rem) !important;
        line-height: 1.2 !important;
    }
    h1 { font-size: clamp(1.6rem, 5.5vw, 2.2rem) !important; }
    h2 { font-size: clamp(1.3rem, 5vw, 1.9rem) !important; }
    h3 { font-size: clamp(1.1rem, 4vw, 1.5rem) !important; }
    .lead { font-size: 0.95rem !important; }
}

/* --- SECTION PADDING --- */
@media (max-width: 767.98px) {
    .py-120 { padding-top: 60px !important; padding-bottom: 60px !important; }
    section, .section { padding: 50px 0 !important; }
    .container { padding-left: 16px !important; padding-right: 16px !important; }
}
@media (max-width: 575.98px) {
    .py-120 { padding-top: 48px !important; padding-bottom: 48px !important; }
    section, .section { padding: 40px 0 !important; }
}

/* --- HERO SECTIONS (page header backgrounds) --- */
@media (max-width: 767.98px) {
    .product-hero,
    .page-header,
    .service-hero,
    .academy-hero,
    .rfq-header,
    .contact-header,
    .hero-media {
        padding: 70px 0 50px !important;
        text-align: center;
        min-height: auto !important;
    }
    .product-hero .btn, .page-header .btn, .hero-media .btn,
    .product-hero a.btn, .page-header a.btn {
        display: block;
        width: 100%;
        margin: 6px 0 !important;
    }
    .hero-media img, .product-hero img {
        margin-top: 30px;
        border-radius: 12px !important;
    }
}

/* --- CARD GRIDS --- */
@media (max-width: 575.98px) {
    .product-item, .course-card, .value-card,
    .feature-card, .stat-card, .rfq-card,
    .contact-card, .lab-box, .team-card {
        margin-bottom: 16px;
        border-radius: 16px !important;
    }
    /* Stack 2-col grids to 1 col on smallest screens */
    .row.g-4 > .col-sm-6, .row.g-5 > .col-sm-6 {
        flex: 0 0 100%; max-width: 100%;
    }
}

/* --- TEAM / LEADERSHIP CARDS --- */
.team-img {
    width: 100%;
    max-width: 220px;
    height: 220px;
    object-fit: cover;
    object-position: top;
    border-radius: 50%;
    margin: 0 auto 16px;
    display: block;
}
@media (max-width: 575.98px) {
    .team-img { max-width: 160px; height: 160px; }
}

/* --- SECTOR CARDS (VOD) --- */
.sector-card {
    min-height: 200px !important;
}
@media (max-width: 767.98px) {
    .sector-card { min-height: 160px !important; border-radius: 12px; }
}

/* --- STATS ROW --- */
@media (max-width: 575.98px) {
    .stat-card { padding: 20px 12px !important; }
    .stat-card h2, .stat-card h3 { font-size: 1.8rem !important; }
}

/* --- FOOTER --- */
@media (max-width: 767.98px) {
    .footer-main .row > div { margin-bottom: 32px; }
    .footer-main { padding: 60px 0 30px !important; }
    .social-circle { width: 36px; height: 36px; font-size: 0.8rem; }
}
@media (max-width: 575.98px) {
    .footer-main h5 { font-size: 1rem; }
    .footer-main p, .footer-main li, .footer-main a { font-size: 0.85rem; }
}

/* --- BUTTONS: stack on mobile --- */
@media (max-width: 575.98px) {
    .btn-lg, .btn.px-5 { padding: 10px 20px !important; font-size: 0.9rem !important; }
    .d-flex.gap-3 { flex-direction: column !important; gap: 10px !important; }
    .d-flex.gap-4 { flex-direction: column !important; gap: 10px !important; }
}

/* --- TABLES: scroll on mobile --- */
@media (max-width: 767.98px) {
    .table-responsive-mobile { overflow-x: auto; -webkit-overflow-scrolling: touch; }
}

/* --- IMAGES: no overflow --- */
@media (max-width: 767.98px) {
    .img-fluid, .app-mockup, .qr-mockup {
        border-radius: 12px !important;
        margin-top: 24px;
    }
}

/* --- TIMELINE / STEPS (services page) --- */
@media (max-width: 767.98px) {
    .process-step, .timeline-item { padding-left: 0 !important; text-align: center; }
    .process-step .step-number { margin: 0 auto 12px; }
}

/* --- FORMS: full width inputs on mobile --- */
@media (max-width: 575.98px) {
    .form-control, .form-select {
        font-size: 0.9rem !important;
        padding: 10px 14px !important;
    }
    .btn[type="submit"] { width: 100%; }
}

/* --- AOS: disable heavy animations on mobile (performance) --- */
@media (max-width: 575.98px) {
    [data-aos] {
        opacity: 1 !important;
        transform: none !important;
        transition: none !important;
    }
}

/* --- DARK MODE responsive adjustments --- */
@media (max-width: 991.98px) {
    body[data-theme="dark"] .navbar-collapse {
        background: #0f172a;
        padding: 12px 16px;
        border-radius: 0 0 12px 12px;
        border: 1px solid rgba(255,255,255,0.08);
    }
    body[data-theme="dark"] .dropdown-menu {
        border: 1px solid rgba(255,255,255,0.08) !important;
    }
}

/* =====================================================
   QUOTE BOX & NEWSLETTER BOX — Light + Dark Modes
   ===================================================== */

/* Light mode defaults */
.quote-box {
    background: #f8fafc;
    border-left: 4px solid var(--edco-primary, #4f46e5);
    color: #475569;
}
.quote-box p { color: #475569; }

.newsletter-box {
    background: #ffffff;
    border: 1px solid rgba(0,0,0,0.1);
    color: #1e293b;
}
.newsletter-text { color: #1e293b; }
.newsletter-input {
    background: #f1f5f9;
    border: 1px solid #cbd5e1 !important;
    color: #1e293b;
}
.newsletter-input::placeholder { color: #94a3b8; }

/* Dark mode overrides */
body[data-theme="dark"] .quote-box {
    background: #1e293b !important;
    border-left-color: #818cf8 !important;
    color: #e2e8f0 !important;
}
body[data-theme="dark"] .quote-box p,
body[data-theme="dark"] .quote-box .fst-italic {
    color: #e2e8f0 !important;
}

body[data-theme="dark"] .newsletter-box {
    background: #1e293b !important;
    border-color: rgba(255,255,255,0.08) !important;
    color: #e2e8f0 !important;
}
body[data-theme="dark"] .newsletter-text {
    color: #e2e8f0 !important;
}
body[data-theme="dark"] .newsletter-input {
    background: #0f172a !important;
    border-color: #374151 !important;
    color: #e2e8f0 !important;
}
body[data-theme="dark"] .newsletter-input::placeholder {
    color: #6b7280 !important;
}
</style>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        window.addEventListener('scroll', function() {
            var navbar = document.querySelector('.main-header .navbar');
            if (navbar) {
                if (window.scrollY > 50) { navbar.classList.add('sticky-header'); }
                else { navbar.classList.remove('sticky-header'); }
            }
        });

        // Theme Toggle Logic
        const toggleButton = document.getElementById("theme-toggle");
        const currentTheme = localStorage.getItem("theme") || (window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light");
        
        if (currentTheme === "dark") {
            document.body.setAttribute("data-theme", "dark");
            if (toggleButton) {
                toggleButton.innerHTML = '<i class="fa-solid fa-sun text-warning"></i>';
            }
        } else {
            document.body.setAttribute("data-theme", "light");
            if (toggleButton) {
                toggleButton.innerHTML = '<i class="fa-solid fa-moon"></i>';
            }
        }
        
        if (toggleButton) {
            toggleButton.addEventListener("click", function() {
                let theme = document.body.getAttribute("data-theme");
                if (theme === "dark") {
                    document.body.setAttribute("data-theme", "light");
                    localStorage.setItem("theme", "light");
                    toggleButton.innerHTML = '<i class="fa-solid fa-moon"></i>';
                } else {
                    document.body.setAttribute("data-theme", "dark");
                    localStorage.setItem("theme", "dark");
                    toggleButton.innerHTML = '<i class="fa-solid fa-sun text-warning"></i>';
                }
            });
        }
    });
</script>
<!-- PREMIUM ACCENTS & FLOATING SHAPES -->
<div class="accent-ribbon"></div>
<div class="floating-ribbon floating-ribbon-1 d-none d-md-block"></div>
<div class="floating-ribbon floating-ribbon-2 d-none d-md-block"></div>

 <!-- TOP MENU -->
        <div class="top-bar d-none d-lg-block">
            <div class="container d-flex justify-content-between">
                <div>
                    <span class="me-4"><i class="fa-solid fa-envelope me-2 text-info"></i> solutions@edcoventures.com</span>
                    <span><i class="fa-solid fa-phone me-2 text-info"></i> Global Support Enabled</span>
                </div>
                <div>
                    <a href="https://www.linkedin.com" target="_blank" class="ms-3"><i class="fa-brands fa-linkedin-in"></i></a>
                    <a href="https://x.com" target="_blank" class="ms-3"><i class="fa-brands fa-x-twitter"></i></a>
                    <a href="https://github.com" target="_blank" class="ms-3"><i class="fa-brands fa-github"></i></a>
                </div>
            </div>
        </div>

        <!-- NAVIGATION -->
        <header class="main-header sticky-top">
            <nav class="navbar navbar-expand-xl navbar-light">
                <div class="container">
                    <a href="?page=home" class="navbar-brand">
                        <img src="assets/img/EDCO.png" alt="Edco Ventures" style="height: 48px;" />
                    </a>
                    <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                        <i class="fa-solid fa-bars-staggered"></i>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav mx-auto">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Ecosystem</a>
                                <div class="dropdown-menu shadow-lg">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <h6 class="drop-heading">Enterprise SaaS</h6>
                                            <a href="?page=elearningpro" class="dropdown-link">
                                                <div class="drop-icon"><i class="fa-solid fa-graduation-cap"></i></div>
                                                <div><span class="drop-title">eLearning Pro</span><p class="drop-desc">Advanced school management and e-learning integration.</p></div>
                                            </a>
                                            <a href="?page=sms" class="dropdown-link">
                                                <div class="drop-icon"><i class="fa-solid fa-comments"></i></div>
                                                <div><span class="drop-title">SMSBox-247</span><p class="drop-desc">Enterprise-grade bulk messaging and gateway solutions.</p></div>
                                            </a>
                                            <a href="?page=eaccounting" class="dropdown-link">
                                                <div class="drop-icon"><i class="fa-solid fa-book-bookmark"></i></div>
                                                <div><span class="drop-title">eBook Keeping</span><p class="drop-desc">Sales, inventories, and smart store management.</p></div>
                                            </a>
                                        </div>
                                        <div class="col-md-4 border-start border-end">
                                            <h6 class="drop-heading">Fintech Labs</h6>
                                            <a href="?page=ebankinghub" class="dropdown-link">
                                                <div class="drop-icon"><i class="fa-solid fa-money-check-dollar"></i></div>
                                                <div><span class="drop-title">eBanking Hub</span><p class="drop-desc">Modern digital banking and mobile wallet solutions.</p></div>
                                            </a>
                                            <a href="?page=swaplabs" class="dropdown-link">
                                                <div class="drop-icon"><i class="fa-solid fa-repeat"></i></div>
                                                <div><span class="drop-title">Swap Labs</span><p class="drop-desc">Real-time currency exchange and liquidity management.</p></div>
                                            </a>
                                            <a href="?page=questpay" class="dropdown-link">
                                                <div class="drop-icon"><i class="fa-solid fa-qrcode"></i></div>
                                                <div><span class="drop-title">Quest Pay</span><p class="drop-desc">High-speed scan-to-pay delivery payment systems.</p></div>
                                            </a>
                                        </div>
                                        <div class="col-md-4">
                                            <h6 class="drop-heading">Infrastructure</h6>
                                            <a href="?page=cloud/virtualhode" class="dropdown-link">
                                                <div class="drop-icon"><i class="fa-solid fa-server"></i></div>
                                                <div><span class="drop-title">Cloud Nodes</span><p class="drop-desc">Virtual machine orchestration and cloud hosting.</p></div>
                                            </a>
                                            <a href="?page=cloud/vod" class="dropdown-link">
                                                <div class="drop-icon"><i class="fa-solid fa-video"></i></div>
                                                <div><span class="drop-title">VOD Manager</span><p class="drop-desc">Professional video content delivery and streaming.</p></div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item"><a href="?page=about" class="nav-link">Company</a></li>
                            <li class="nav-item"><a href="?page=services" class="nav-link">Intelligence</a></li>
                            <li class="nav-item"><a href="?page=academy" class="nav-link">Academy</a></li>
                        </ul>
                        <div class="d-flex align-items-center gap-3">
                            <button id="theme-toggle" class="btn-theme-toggle" aria-label="Toggle Theme">
                                <i class="fa-solid fa-moon"></i>
                            </button>
                            <a href="?page=quation" class="btn btn-edco">Get Started</a>
                        </div>
                    </div>
                </div>
            </nav>
        </header>
