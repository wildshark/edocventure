<?php if(!defined('EDCO_LOADED')) { header('Location: /'); exit; } ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Service Level Agreement | Edco Ventures</title>
    <meta name="description" content="Edco Ventures Service Level Agreement. Understand our commitment to uptime, response times, support tiers and client obligations.">

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
            --edco-footer: #020617;
        }
        body { font-family: 'Inter', sans-serif; color: #475569; background-color: #f8fafc; line-height: 1.8; }
        h1, h2, h3, h4, h5 { font-family: 'Outfit', sans-serif; font-weight: 800; color: var(--edco-dark); letter-spacing: -0.02em; }

        /* ── HERO ── */
        .sla-hero {
            background: radial-gradient(circle at 10% 20%, #1e1b4b, #0f172a 70%);
            padding: 110px 0 160px;
            color: #fff;
            text-align: center;
            position: relative;
            overflow: hidden;
        }
        .sla-hero::before {
            content: '';
            position: absolute; inset: 0;
            background: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%234f46e5' fill-opacity='0.05'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
        }
        .sla-badge {
            display: inline-block;
            background: rgba(99,102,241,0.2);
            color: #a5b4fc;
            padding: 8px 22px;
            border-radius: 50px;
            font-size: 0.82rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.08em;
            margin-bottom: 20px;
        }

        /* ── CONTENT WRAPPER ── */
        .sla-wrap { margin-top: -100px; padding-bottom: 100px; }
        .sla-card {
            background: #fff;
            border-radius: 24px;
            box-shadow: 0 40px 100px rgba(0,0,0,0.08);
            padding: 60px 70px;
        }

        /* ── SECTION TITLES ── */
        .sla-section { margin-bottom: 48px; }
        .sla-section-title {
            font-size: 1.25rem;
            font-weight: 800;
            color: var(--edco-dark);
            border-left: 4px solid var(--edco-primary);
            padding-left: 16px;
            margin-bottom: 18px;
        }
        .sla-section p, .sla-section li { color: #475569; font-size: 0.97rem; }
        .sla-section ul { padding-left: 1.4rem; }
        .sla-section ul li { margin-bottom: 8px; }

        /* ── UPTIME TABLE ── */
        .uptime-table th { background: var(--edco-primary); color: #fff; font-weight: 700; font-size: 0.88rem; text-transform: uppercase; letter-spacing: 0.05em; }
        .uptime-table td { font-size: 0.93rem; vertical-align: middle; }
        .uptime-table tbody tr:hover { background: #f0f4ff; }
        .badge-green  { background: #dcfce7; color: #15803d; border-radius: 8px; padding: 4px 12px; font-weight: 700; font-size: 0.8rem; }
        .badge-blue   { background: #dbeafe; color: #1d4ed8; border-radius: 8px; padding: 4px 12px; font-weight: 700; font-size: 0.8rem; }
        .badge-orange { background: #ffedd5; color: #c2410c; border-radius: 8px; padding: 4px 12px; font-weight: 700; font-size: 0.8rem; }
        .badge-gray   { background: #f1f5f9; color: #475569; border-radius: 8px; padding: 4px 12px; font-weight: 700; font-size: 0.8rem; }

        /* ── HIGHLIGHT BOXES ── */
        .sla-note {
            background: #eef2ff;
            border-left: 4px solid var(--edco-primary);
            border-radius: 0 12px 12px 0;
            padding: 16px 20px;
            font-size: 0.93rem;
            color: #3730a3;
            margin: 20px 0;
        }
        .sla-warning {
            background: #fff7ed;
            border-left: 4px solid #f97316;
            border-radius: 0 12px 12px 0;
            padding: 16px 20px;
            font-size: 0.93rem;
            color: #9a3412;
            margin: 20px 0;
        }

        /* ── QUICK-STATS STRIP ── */
        .sla-stat-strip { background: var(--edco-primary); border-radius: 20px; padding: 40px 50px; color: #fff; margin-bottom: 48px; }
        .sla-stat-strip .stat-num { font-family: 'Outfit', sans-serif; font-size: 2.6rem; font-weight: 800; color: #fff; }
        .sla-stat-strip .stat-lbl { font-size: 0.85rem; color: rgba(255,255,255,0.7); margin-top: 4px; }

        /* ── SIDEBAR TOC ── */
        .toc-card { background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 20px; padding: 30px; position: sticky; top: 100px; }
        .toc-card h6 { font-family: 'Outfit', sans-serif; font-weight: 800; color: var(--edco-dark); margin-bottom: 16px; }
        .toc-card a { display: block; color: #64748b; font-size: 0.88rem; padding: 6px 0; text-decoration: none; border-bottom: 1px solid #f1f5f9; transition: 0.2s; }
        .toc-card a:hover { color: var(--edco-primary); padding-left: 6px; }
        .toc-card a:last-child { border-bottom: none; }

        /* ── DARK MODE ── */
        body[data-theme="dark"] { background-color: #0b0f19 !important; }
        body[data-theme="dark"] h1, body[data-theme="dark"] h2, body[data-theme="dark"] h3,
        body[data-theme="dark"] h4, body[data-theme="dark"] h5, body[data-theme="dark"] h6,
        body[data-theme="dark"] strong { color: #f8fafc !important; }
        body[data-theme="dark"] p, body[data-theme="dark"] li,
        body[data-theme="dark"] .text-muted { color: #cbd5e1 !important; }
        body[data-theme="dark"] .sla-card { background: #111827 !important; box-shadow: 0 40px 100px rgba(0,0,0,0.4) !important; }
        body[data-theme="dark"] .toc-card { background: #1e293b !important; border-color: rgba(255,255,255,0.08) !important; }
        body[data-theme="dark"] .toc-card a { color: #94a3b8; border-color: rgba(255,255,255,0.05); }
        body[data-theme="dark"] .toc-card a:hover { color: #818cf8; }
        body[data-theme="dark"] .sla-section p, body[data-theme="dark"] .sla-section li { color: #cbd5e1 !important; }
        body[data-theme="dark"] .sla-section-title { color: #f1f5f9 !important; }
        body[data-theme="dark"] .sla-note { background: rgba(79,70,229,0.15) !important; color: #a5b4fc !important; }
        body[data-theme="dark"] .sla-warning { background: rgba(249,115,22,0.12) !important; color: #fdba74 !important; }
        body[data-theme="dark"] .uptime-table td { color: #cbd5e1 !important; background: transparent !important; }
        body[data-theme="dark"] .uptime-table tbody tr:hover { background: rgba(79,70,229,0.08) !important; }
        body[data-theme="dark"] .uptime-table { border-color: rgba(255,255,255,0.08) !important; }

        /* ── RESPONSIVE ── */
        @media (max-width: 991.98px) {
            .sla-card { padding: 35px 25px; }
            .toc-card { position: static; margin-bottom: 30px; }
            .sla-stat-strip { padding: 30px 25px; }
        }
        @media (max-width: 575.98px) {
            .sla-card { padding: 25px 18px; }
        }
    </style>
</head>

<body>
    <div class="main-wrapper">
        <?php include 'topmenu.php'; ?>

        <!-- HERO -->
        <section class="sla-hero">
            <div class="container" data-aos="fade-up">
                <span class="sla-badge"><i class="fa-solid fa-shield-halved me-2"></i>Legal &amp; Compliance</span>
                <h1 class="display-4 text-white mb-3">Service Level Agreement</h1>
                <p class="lead text-white-50 mx-auto" style="max-width:680px;">
                    Our commitment to performance, availability, and support — clearly defined so you can plan with confidence.
                </p>
                <p class="small text-white-50 mt-3">Effective Date: 1st January 2025 &nbsp;|&nbsp; Version 2.1</p>
            </div>
        </section>

        <!-- MAIN CONTENT -->
        <section class="sla-wrap">
            <div class="container">
                <div class="row g-5">

                    <!-- TABLE OF CONTENTS (Sidebar) -->
                    <div class="col-lg-3" data-aos="fade-right">
                        <div class="toc-card">
                            <h6><i class="fa-solid fa-list-ul me-2 text-primary"></i>Contents</h6>
                            <a href="#s1">1. Parties &amp; Scope</a>
                            <a href="#s2">2. Service Uptime</a>
                            <a href="#s3">3. Response &amp; Resolution</a>
                            <a href="#s4">4. Support Tiers</a>
                            <a href="#s5">5. Credits &amp; Remedies</a>
                            <a href="#s6">6. Client Obligations</a>
                            <a href="#s7">7. Exclusions</a>
                            <a href="#s8">8. Security</a>
                            <a href="#s9">9. Limitations</a>
                            <a href="#s10">10. Governing Law</a>
                            <a href="#s11">11. Amendments</a>
                            <a href="#s12">12. Contact</a>
                        </div>
                    </div>

                    <!-- DOCUMENT BODY -->
                    <div class="col-lg-9" data-aos="fade-up">
                        <div class="sla-card">

                            <!-- QUICK STATS -->
                            <div class="sla-stat-strip mb-5">
                                <div class="row g-4 text-center">
                                    <div class="col-6 col-md-3">
                                        <div class="stat-num">99.9%</div>
                                        <div class="stat-lbl">Uptime Commitment</div>
                                    </div>
                                    <div class="col-6 col-md-3">
                                        <div class="stat-num">1 hr</div>
                                        <div class="stat-lbl">Critical Response</div>
                                    </div>
                                    <div class="col-6 col-md-3">
                                        <div class="stat-num">24/7</div>
                                        <div class="stat-lbl">Monitoring</div>
                                    </div>
                                    <div class="col-6 col-md-3">
                                        <div class="stat-num">256-bit</div>
                                        <div class="stat-lbl">Encryption</div>
                                    </div>
                                </div>
                            </div>

                            <!-- SECTION 1 -->
                            <div class="sla-section" id="s1">
                                <div class="sla-section-title">1. Parties &amp; Scope</div>
                                <p>This Service Level Agreement ("SLA") is entered into between <strong>Edco Ventures Ltd</strong> ("Provider," "we," "us") and the client entity that has executed a Master Service Agreement or Purchase Order referencing this SLA ("Client").</p>
                                <p>This SLA governs the delivery of the following service categories:</p>
                                <ul>
                                    <li>Custom Software Development &amp; Deployment</li>
                                    <li>Cloud Infrastructure &amp; Managed Hosting (VirtualHode, VOD, Stream)</li>
                                    <li>SaaS Platform Subscriptions (eLearning Pro, eAccounting, SMSBox-247, Ekkilsia, myLibrary)</li>
                                    <li>Fintech Solutions (QuestPay, CashWired, eBanking Hub, SwapLabs, PayMe)</li>
                                    <li>IT Consulting, Academy Programs, and Managed Server Setup</li>
                                </ul>
                                <div class="sla-note">
                                    <i class="fa-solid fa-circle-info me-2"></i>
                                    This SLA is incorporated by reference into all active contracts. In the event of a conflict between this SLA and a signed contract, the signed contract shall prevail.
                                </div>
                            </div>

                            <!-- SECTION 2 -->
                            <div class="sla-section" id="s2">
                                <div class="sla-section-title">2. Service Uptime Commitment</div>
                                <p>Edco Ventures commits to the following monthly uptime targets, measured on a rolling 30-day basis, excluding Scheduled Maintenance Windows:</p>
                                <div class="table-responsive mt-3 mb-4">
                                    <table class="table uptime-table table-bordered align-middle">
                                        <thead>
                                            <tr>
                                                <th>Service Tier</th>
                                                <th>Target Uptime</th>
                                                <th>Max Monthly Downtime</th>
                                                <th>Monitoring</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><strong>Enterprise Cloud</strong></td>
                                                <td><span class="badge-green">99.9%</span></td>
                                                <td>43.8 minutes</td>
                                                <td><span class="badge-blue">24/7 Active</span></td>
                                            </tr>
                                            <tr>
                                                <td><strong>SaaS Platforms</strong></td>
                                                <td><span class="badge-green">99.5%</span></td>
                                                <td>3.65 hours</td>
                                                <td><span class="badge-blue">24/7 Active</span></td>
                                            </tr>
                                            <tr>
                                                <td><strong>Fintech Services</strong></td>
                                                <td><span class="badge-green">99.9%</span></td>
                                                <td>43.8 minutes</td>
                                                <td><span class="badge-blue">24/7 Active</span></td>
                                            </tr>
                                            <tr>
                                                <td><strong>Academy &amp; Consulting</strong></td>
                                                <td><span class="badge-orange">98.0%</span></td>
                                                <td>14.4 hours</td>
                                                <td><span class="badge-gray">Business Hours</span></td>
                                            </tr>
                                            <tr>
                                                <td><strong>Development Projects</strong></td>
                                                <td colspan="3"><em>Governed by individual project milestone agreements</em></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <p><strong>Scheduled Maintenance:</strong> Edco Ventures reserves the right to perform maintenance between <strong>00:00–04:00 GMT on Sundays</strong>. Clients will receive a minimum <strong>72 hours advance notice</strong> via email for any planned outages exceeding 30 minutes.</p>
                            </div>

                            <!-- SECTION 3 -->
                            <div class="sla-section" id="s3">
                                <div class="sla-section-title">3. Incident Response &amp; Resolution Targets</div>
                                <div class="table-responsive mt-3 mb-4">
                                    <table class="table uptime-table table-bordered align-middle">
                                        <thead>
                                            <tr>
                                                <th>Priority Level</th>
                                                <th>Description</th>
                                                <th>Response Time</th>
                                                <th>Resolution Target</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><span class="badge" style="background:#ef4444;color:#fff;border-radius:8px;padding:4px 12px;font-weight:700;">P1 — Critical</span></td>
                                                <td>Full service outage or data breach</td>
                                                <td><strong>1 hour</strong></td>
                                                <td>4 hours</td>
                                            </tr>
                                            <tr>
                                                <td><span class="badge" style="background:#f97316;color:#fff;border-radius:8px;padding:4px 12px;font-weight:700;">P2 — High</span></td>
                                                <td>Major feature unavailable, business blocked</td>
                                                <td><strong>4 hours</strong></td>
                                                <td>12 hours</td>
                                            </tr>
                                            <tr>
                                                <td><span class="badge" style="background:#eab308;color:#fff;border-radius:8px;padding:4px 12px;font-weight:700;">P3 — Medium</span></td>
                                                <td>Feature degraded, workaround available</td>
                                                <td><strong>8 hours</strong></td>
                                                <td>3 business days</td>
                                            </tr>
                                            <tr>
                                                <td><span class="badge-gray">P4 — Low</span></td>
                                                <td>Cosmetic issues, general enquiries</td>
                                                <td><strong>2 business days</strong></td>
                                                <td>10 business days</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <p>Response time begins when the Client submits a support ticket through the official support portal. Edco Ventures does not guarantee resolution within target times where the root cause lies with third-party infrastructure providers (e.g., AWS, Azure, Twilio).</p>
                            </div>

                            <!-- SECTION 4 -->
                            <div class="sla-section" id="s4">
                                <div class="sla-section-title">4. Support Tiers</div>
                                <div class="table-responsive mt-3 mb-4">
                                    <table class="table uptime-table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Feature</th>
                                                <th>Standard</th>
                                                <th>Professional</th>
                                                <th>Enterprise</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr><td>Support Hours</td><td>Business days</td><td>Mon–Sat</td><td>24/7</td></tr>
                                            <tr><td>Response Channel</td><td>Email only</td><td>Email + Phone</td><td>Email + Phone + Dedicated Manager</td></tr>
                                            <tr><td>Priority Levels</td><td>P3, P4</td><td>P2–P4</td><td>P1–P4</td></tr>
                                            <tr><td>Monthly Check-ins</td><td>—</td><td>1× call</td><td>4× calls</td></tr>
                                            <tr><td>Uptime Reports</td><td>On request</td><td>Monthly</td><td>Weekly</td></tr>
                                            <tr><td>Dedicated Architect</td><td>—</td><td>—</td><td><i class="fa-solid fa-circle-check text-success"></i></td></tr>
                                        </tbody>
                                    </table>
                                </div>
                                <p>Support tier allocation is determined at contract signing. Upgrades take effect at the start of the following billing cycle.</p>
                            </div>

                            <!-- SECTION 5 -->
                            <div class="sla-section" id="s5">
                                <div class="sla-section-title">5. Service Credits &amp; Remedies</div>
                                <p>In the event that Edco Ventures fails to meet the uptime commitment in Section 2, the Client may request Service Credits as follows:</p>
                                <ul>
                                    <li><strong>99.5%–99.9%</strong> actual uptime (missed commitment): 5% credit of monthly fee for affected service</li>
                                    <li><strong>95.0%–99.4%</strong> actual uptime: 10% credit of monthly fee</li>
                                    <li><strong>Below 95.0%</strong>: 20% credit of monthly fee</li>
                                </ul>
                                <div class="sla-warning">
                                    <i class="fa-solid fa-triangle-exclamation me-2"></i>
                                    <strong>Credit Cap:</strong> Total Service Credits shall not exceed 30% of the Client's monthly invoice for the affected service. Credits are the sole and exclusive remedy for service availability failures and do not constitute a waiver of any other remedy.
                                </div>
                                <p>Credits must be claimed within <strong>30 days</strong> of the incident. Claims submitted after this period will not be honoured. Credits are applied to the next invoice and are non-transferable and non-refundable as cash.</p>
                            </div>

                            <!-- SECTION 6 -->
                            <div class="sla-section" id="s6">
                                <div class="sla-section-title">6. Client Obligations</div>
                                <p>To ensure optimal service delivery, the Client agrees to:</p>
                                <ul>
                                    <li>Provide accurate and timely information required for project delivery or incident resolution.</li>
                                    <li>Designate a primary point of contact who is authorised to make decisions on behalf of the Client.</li>
                                    <li>Report incidents through the official support channel only — not via personal staff contacts.</li>
                                    <li>Maintain timely payment of all invoices. Support response for accounts with overdue balances exceeding 14 days may be downgraded to Standard tier.</li>
                                    <li>Comply with all acceptable use policies and not use services for unlawful or harmful activities.</li>
                                    <li>Ensure their own systems (hardware, network, third-party integrations) meet minimum compatibility requirements as advised by Edco Ventures.</li>
                                </ul>
                            </div>

                            <!-- SECTION 7 -->
                            <div class="sla-section" id="s7">
                                <div class="sla-section-title">7. Exclusions</div>
                                <p>This SLA does not apply to downtime or performance degradation resulting from:</p>
                                <ul>
                                    <li>Scheduled maintenance communicated in advance (see Section 2)</li>
                                    <li>Client-side network, hardware, or software failures</li>
                                    <li>Actions or omissions by the Client or any third party authorised by the Client</li>
                                    <li>Force majeure events (natural disasters, war, government orders, widespread internet outages)</li>
                                    <li>Failure of third-party services not within Edco Ventures' direct control (e.g., telecommunications providers, cloud CDN providers)</li>
                                    <li>Beta features, developer sandbox environments, or services explicitly marked as preview</li>
                                    <li>Incidents caused by the Client exceeding agreed usage quotas without prior authorisation</li>
                                </ul>
                            </div>

                            <!-- SECTION 8 -->
                            <div class="sla-section" id="s8">
                                <div class="sla-section-title">8. Security Commitments</div>
                                <p>Edco Ventures maintains the following security standards across all managed services:</p>
                                <ul>
                                    <li><strong>Encryption:</strong> All data at-rest and in-transit is encrypted using AES-256 and TLS 1.3 or higher.</li>
                                    <li><strong>Access Control:</strong> Role-based access control (RBAC) with multi-factor authentication for administrative systems.</li>
                                    <li><strong>Backups:</strong> Daily automated backups with 30-day retention. Point-in-time recovery available on Enterprise tier.</li>
                                    <li><strong>Vulnerability Scanning:</strong> Quarterly penetration testing and continuous vulnerability monitoring.</li>
                                    <li><strong>Breach Notification:</strong> Client will be notified within <strong>48 hours</strong> of confirmed data breach discovery.</li>
                                    <li><strong>Compliance:</strong> Services are designed to support GDPR, NDPR (Nigeria), and Ghana Data Protection Act compliance obligations of our clients.</li>
                                </ul>
                            </div>

                            <!-- SECTION 9 -->
                            <div class="sla-section" id="s9">
                                <div class="sla-section-title">9. Limitation of Liability</div>
                                <p>To the maximum extent permitted by applicable law:</p>
                                <ul>
                                    <li>Edco Ventures' total aggregate liability for all claims arising under this SLA shall not exceed the fees paid by the Client in the <strong>3 months preceding the incident</strong>.</li>
                                    <li>Edco Ventures shall not be liable for any indirect, incidental, consequential, punitive, or special damages, including loss of profits, data, or business opportunity, even if advised of such possibility.</li>
                                    <li>Service Credits described in Section 5 constitute the Client's sole and exclusive remedy for service availability failures.</li>
                                </ul>
                                <div class="sla-note">
                                    <i class="fa-solid fa-circle-info me-2"></i>
                                    Nothing in this SLA excludes liability for death or personal injury caused by our negligence, or for fraud or fraudulent misrepresentation.
                                </div>
                            </div>

                            <!-- SECTION 10 -->
                            <div class="sla-section" id="s10">
                                <div class="sla-section-title">10. Governing Law &amp; Disputes</div>
                                <p>This SLA shall be governed by and construed in accordance with the laws of the <strong>Republic of Ghana</strong>. Any disputes arising out of or in connection with this SLA that cannot be resolved amicably within 30 days shall be submitted to binding arbitration in Accra, Ghana, under the rules of the Ghana Arbitration Centre.</p>
                                <p>Both parties agree to attempt good-faith negotiation before initiating any formal legal proceedings.</p>
                            </div>

                            <!-- SECTION 11 -->
                            <div class="sla-section" id="s11">
                                <div class="sla-section-title">11. Amendments</div>
                                <p>Edco Ventures reserves the right to amend this SLA at any time. Clients will be notified of material changes via email at least <strong>30 days before the changes take effect</strong>. Continued use of the services after the effective date constitutes acceptance of the revised SLA.</p>
                                <p>If a Client does not accept the revised terms, they must notify Edco Ventures in writing within the 30-day notice period and may terminate their service subscription without penalty.</p>
                            </div>

                            <!-- SECTION 12 -->
                            <div class="sla-section" id="s12">
                                <div class="sla-section-title">12. Contact &amp; Support</div>
                                <p>For all SLA-related queries, incident reporting, or credit claims, please contact us through:</p>
                                <ul>
                                    <li><strong>Support Portal:</strong> <a href="?page=contact" class="text-primary">Contact Page</a></li>
                                    <li><strong>Email:</strong> support@edcoventures.com</li>
                                    <li><strong>Emergency Hotline (Enterprise Clients):</strong> Provided at contract signing</li>
                                </ul>
                                <div class="mt-4 d-flex flex-wrap gap-3">
                                    <a href="?page=quation" class="btn btn-primary px-4 py-3 fw-bold rounded-3" style="background:var(--edco-primary);border:none;">
                                        <i class="fa-solid fa-paper-plane me-2"></i>Request a Quotation
                                    </a>
                                    <a href="?page=contact" class="btn btn-outline-secondary px-4 py-3 fw-bold rounded-3">
                                        <i class="fa-solid fa-headset me-2"></i>Contact Support
                                    </a>
                                </div>
                            </div>

                            <!-- FOOTER NOTE -->
                            <hr class="mt-4">
                            <p class="small text-muted mt-3">
                                <i class="fa-solid fa-file-contract me-1"></i>
                                <strong>Edco Ventures Ltd</strong> — Registered in Ghana. This SLA is effective from 1 January 2025 and supersedes all prior SLA versions.
                                <a href="?page=terms" class="text-primary ms-2">Terms of Service</a> &nbsp;|&nbsp;
                                <a href="?page=privacy" class="text-primary">Privacy Policy</a>
                            </p>

                        </div><!-- /sla-card -->
                    </div>
                </div>
            </div>
        </section>

        <?php include 'footer.php'; ?>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({ once: true, duration: 800 });

        // Smooth scroll for TOC links
        document.querySelectorAll('.toc-card a[href^="#"]').forEach(function(anchor) {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    window.scrollTo({ top: target.getBoundingClientRect().top + window.scrollY - 110, behavior: 'smooth' });
                }
            });
        });
    </script>
</body>
</html>
