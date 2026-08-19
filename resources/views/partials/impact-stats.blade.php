{{-- ================================================================
     IMPACT NUMBERS STRIP — @include('partials.impact-stats')
     Reusable on any page (home, about, etc.)
================================================================ --}}
<section class="sb-stats-section">
    <div class="container">
        <div class="row gy-4 sb-stats-row">

            <div class="col-lg-3 col-6">
                <div class="sb-stat-card wow fade-in-bottom" data-wow-delay="100ms">
                    <div class="sb-stat-icon"><i class="fa fa-map-marker"></i></div>
                    <h3 class="sb-stat-number"><span class="sb-odometer" data-count="4">0</span></h3>
                    <p class="sb-stat-label">Learning Centres</p>
                </div>
            </div>

            <div class="col-lg-3 col-6">
                <div class="sb-stat-card wow fade-in-bottom" data-wow-delay="200ms">
                    <div class="sb-stat-icon"><i class="fa fa-book"></i></div>
                    <h3 class="sb-stat-number"><span class="sb-odometer" data-count="6">0</span></h3>
                    <p class="sb-stat-label">Academic Verticals</p>
                </div>
            </div>

            <div class="col-lg-3 col-6">
                <div class="sb-stat-card wow fade-in-bottom" data-wow-delay="300ms">
                    <div class="sb-stat-icon"><i class="fa fa-users"></i></div>
                    <h3 class="sb-stat-number"><span class="sb-odometer" data-count="500">0</span><span class="sb-plus">+</span></h3>
                    <p class="sb-stat-label">Students Guided</p>
                </div>
            </div>

            <div class="col-lg-3 col-6">
                <div class="sb-stat-card wow fade-in-bottom" data-wow-delay="400ms">
                    <div class="sb-stat-icon"><i class="fa fa-user-circle"></i></div>
                    <h3 class="sb-stat-number"><span class="sb-odometer" data-count="30">0</span><span class="sb-plus">+</span></h3>
                    <p class="sb-stat-label">Mentors &amp; Faculty</p>
                </div>
            </div>

        </div>
    </div>
</section>

@once
<style>
.sb-stats-section{ padding:60px 0; background:linear-gradient(135deg,#0b2e4a 0%,#0e4d5c 100%); position:relative; overflow:hidden; }
.sb-stats-section::before{ content:""; position:absolute; inset:0; background:radial-gradient(circle at 15% 20%, rgba(255,255,255,.06) 0%, transparent 40%), radial-gradient(circle at 85% 80%, rgba(255,255,255,.06) 0%, transparent 40%); pointer-events:none; }
.sb-stat-card{ text-align:center; padding:18px 10px; border-right:1px solid rgba(255,255,255,.12); transition:transform .3s ease; }
.sb-stats-row .col-lg-3:last-child .sb-stat-card{ border-right:none; }
.sb-stat-card:hover{ transform:translateY(-6px); }
.sb-stat-icon{ width:56px;height:56px; margin:0 auto 14px; border-radius:50%; background:rgba(255,255,255,.1); display:flex;align-items:center;justify-content:center; font-size:22px; color:#ffb648; border:1px solid rgba(255,255,255,.18); }
.sb-stat-number{ color:#ffffff; font-size:38px; font-weight:700; margin-bottom:6px; display:flex; justify-content:center; align-items:baseline; gap:2px; }
.sb-plus{ color:#ffb648; font-size:26px; }
.sb-stat-label{ color:rgba(255,255,255,.75); margin:0; font-size:15px; letter-spacing:.3px; }
@media (max-width:991px){ .sb-stat-card{ border-right:none; margin-bottom:10px; } .sb-stat-number{ font-size:30px; } }
</style>
@endonce

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function () {
    var odoEls = document.querySelectorAll('.sb-odometer');
    if ('IntersectionObserver' in window && odoEls.length) {
        var odoObserver = new IntersectionObserver(function (entries, obs) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    var el = entry.target;
                    var target = parseInt(el.getAttribute('data-count'), 10) || 0;
                    if (window.Odometer) {
                        var od = new Odometer({ el: el, value: 0, format: '(,ddd)' });
                        setTimeout(function () { od.update(target); }, 100);
                    } else {
                        el.textContent = target;
                    }
                    obs.unobserve(el);
                }
            });
        }, { threshold: 0.4 });
        odoEls.forEach(function (el) { odoObserver.observe(el); });
    }
});
</script>
@endpush
