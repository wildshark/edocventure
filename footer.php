<style>
/* --- FOOTER --- */
.footer-main { background: radial-gradient(circle at top right, #1e1b4b, #0f172a); color: #94a3b8; padding: 100px 0 0 0; }
.footer-heading { color: #fff; font-size: 1.1rem; font-weight: 700; margin-bottom: 25px; }
.footer-links { list-style: none; padding: 0; margin: 0; }
.footer-links li { margin-bottom: 12px; }
.footer-links a { color: #94a3b8; text-decoration: none; transition: 0.3s; font-size: 0.95rem; }
.footer-links a:hover { color: var(--edoc-primary, #4f46e5); padding-left: 5px; }
.social-circle { width: 35px; height: 35px; background: rgba(255,255,255,0.05); border-radius: 50%; display: inline-flex; align-items: center; justify-content: center; color: #fff; margin-right: 10px; transition: 0.3s; text-decoration: none; }
.social-circle:hover { background: var(--edoc-primary, #4f46e5); transform: translateY(-3px); }
.footer-bottom { border-top: 1px solid rgba(255,255,255,0.05); padding: 30px 0; margin-top: 80px; font-size: 0.85rem; }
</style>
 <footer class="footer-main">
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-4 col-md-6">
                        <a href="/home" class="d-inline-block">
                            <img src="/assets/img/EDOC.webp" alt="Edoc Ventures" style="height: 40px;" class="mb-4">
                        </a>
                        <p>Delivering high-performance IT solutions that empower enterprises to lead in the digital age. Your trusted partner for global innovation.</p>
                        <div class="mt-4">
                            <a href="https://www.linkedin.com" target="_blank" class="social-circle"><i class="fa-brands fa-linkedin-in"></i></a>
                            <a href="https://github.com" target="_blank" class="social-circle"><i class="fa-brands fa-github"></i></a>
                            <a href="https://x.com" target="_blank" class="social-circle"><i class="fa-brands fa-x-twitter"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6">
                        <h3 class="footer-heading">Ecosystem</h3>
                        <ul class="footer-links">
                            <li><a href="/elearningpro">eLearning Pro</a></li>
                            <li><a href="/sms">SMSBox-247</a></li>
                            <li><a href="/ekkilsia">Ekkilsia CRM</a></li>
                            <li><a href="/mylibrary">myLibrary</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-2 col-md-6">
                        <h3 class="footer-heading">Fintech</h3>
                        <ul class="footer-links">
                            <li><a href="/swaplabs">Swap Labs</a></li>
                            <li><a href="/questpay">Quest Pay</a></li>
                            <li><a href="/cashwired">CashWired</a></li>
                            <li><a href="/virtualhode">Digital Nodes</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <h3 class="footer-heading">Stay Updated</h3>
                        <div class="newsletter-box p-4 rounded-4 shadow-sm">
                            <p class="newsletter-text small fw-semibold mb-3">Join our network for the latest in tech evolution.</p>
                            <form id="newsletterForm" class="d-flex flex-column gap-2">
                                <input type="hidden" name="form_type" value="newsletter">
                                <div class="d-flex gap-2">
                                    <input type="email" name="email" class="form-control newsletter-input" placeholder="Email" required>
                                    <button type="submit" id="newsletterBtn" class="btn btn-primary px-3" style="background-color: var(--edoc-primary, #4f46e5); border: none;">Join</button>
                                </div>
                                <div id="newsletterToast" class="alert py-2 d-none small" role="alert"></div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="footer-bottom">
                    <div class="row align-items-center">
                        <div class="col-md-6 text-center text-md-start mb-2 mb-md-0">
                            &copy; 2026 Edoc Ventures. All Global Rights Reserved.
                        </div>
                        <div class="col-md-6 text-center text-md-end">
                            <a href="/privacy" class="text-white-50 text-decoration-none me-3">Privacy</a>
                            <a href="/terms" class="text-white-50 text-decoration-none me-3">Terms</a>
                            <a href="/sla" class="text-white-50 text-decoration-none">SLA</a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

<script>
// ── Newsletter AJAX Submit (footer — runs on every page) ──────────────
document.addEventListener('DOMContentLoaded', function() {
    var form = document.getElementById('newsletterForm');
    if (!form) return;
    form.addEventListener('submit', function(e) {
        e.preventDefault();
        var btn   = document.getElementById('newsletterBtn');
        var toast = document.getElementById('newsletterToast');
        var data  = new FormData(form);

        btn.disabled = true;
        btn.innerHTML = '<i class="fa-solid fa-spinner fa-spin"></i>';
        toast.className = 'alert py-2 d-none small';

        fetch('/submit.php', { method: 'POST', body: data })
            .then(function(r) { return r.json(); })
            .then(function(res) {
                toast.classList.remove('d-none');
                if (res.success) {
                    toast.classList.add('alert-success');
                    toast.innerHTML = '<i class="fa-solid fa-circle-check me-1"></i>' + res.message;
                    form.reset();
                } else {
                    toast.classList.add('alert-danger');
                    toast.innerHTML = '<i class="fa-solid fa-circle-xmark me-1"></i>' + res.message;
                }
            })
            .catch(function() {
                toast.classList.remove('d-none');
                toast.classList.add('alert-danger');
                toast.innerHTML = '<i class="fa-solid fa-circle-xmark me-1"></i> Server error. Please try again.';
            })
            .finally(function() {
                btn.disabled = false;
                btn.innerHTML = 'Join';
            });
    });
});
</script>