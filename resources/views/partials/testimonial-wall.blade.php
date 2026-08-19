{{-- ================================================================
     TESTIMONIAL WALL — @include('partials.testimonial-wall')
     White theme, 3-column vertical auto-scroll, reusable on any page.
================================================================ --}}
<section class="sb-wall-section">
    <div class="container sb-wall-shadow-box">
        <div class="sb-wall-heading pt-5">
            <h2 class="wow fade-in-bottom" data-wow-delay="200ms">
                Journeys we guided. <em>Stories</em><br>they still tell.
            </h2>
        </div>

        <div class="sb-wall-columns pb-5">

            <!-- COLUMN 1 -->
            <div class="sb-wall-col">
                <div class="sb-wall-track">
                    @for ($i = 0; $i < 2; $i++)
                    <div class="sb-wall-card">
                        <span class="sb-wall-quote">&rdquo;</span>
                        <p>Foundation classes gave me the discipline I never had before. Concepts finally started making sense.</p>
                        <div class="sb-wall-author">
                            <span class="sb-avatar sb-avatar-1 text-white">SK</span>
                            <div><h5>Sameer Kulkarni</h5><span>Civil Services, 2 yrs</span></div>
                            <div class="sb-stars">★★★★★</div>
                        </div>
                    </div>
                    <div class="sb-wall-card">
                        <span class="sb-wall-quote">&rdquo;</span>
                        <p>My mentor tracked my mock scores every single week and adjusted my plan. That kind of attention is rare.</p>
                        <div class="sb-wall-author">
                            <span class="sb-avatar sb-avatar-2 text-white">AD</span>
                            <div><h5>Anjali Deshmukh</h5><span>School Foundation, Class X</span></div>
                            <div class="sb-stars">★★★★★</div>
                        </div>
                    </div>
                    <div class="sb-wall-card">
                        <span class="sb-wall-quote">&rdquo;</span>
                        <p>The AI-based practice tests found my weak areas faster than I could myself. Genuinely useful, not gimmicky.</p>
                        <div class="sb-wall-author">
                            <span class="sb-avatar sb-avatar-3 text-white">RD</span>
                            <div><h5>Rohan Deshmukh</h5><span>JEE Advanced</span></div>
                            <div class="sb-stars">★★★★★</div>
                        </div>
                    </div>
                    @endfor
                </div>
            </div>

            <!-- COLUMN 2 -->
            <div class="sb-wall-col sb-wall-col-mid">
                <div class="sb-wall-track sb-track-rev">
                    @for ($i = 0; $i < 2; $i++)
                    <div class="sb-wall-card">
                        <span class="sb-wall-quote">&rdquo;</span>
                        <p>Last-minute scholarship application and they still got my documents verified within days. Impressive turnaround.</p>
                        <div class="sb-wall-author">
                            <span class="sb-avatar sb-avatar-4 text-white">IR</span>
                            <div><h5>Ishita Rao</h5><span>Scholarship Programme</span></div>
                            <div class="sb-stars">★★★★★</div>
                        </div>
                    </div>
                    <div class="sb-wall-card">
                        <span class="sb-wall-quote">&rdquo;</span>
                        <p>The leadership module gave me the confidence to speak on stage for the first time in my life.</p>
                        <div class="sb-wall-author">
                            <span class="sb-avatar sb-avatar-5 text-white">KJ</span>
                            <div><h5>Kunal Joshi</h5><span>Leadership &amp; Life Skills</span></div>
                            <div class="sb-stars">★★★★★</div>
                        </div>
                    </div>
                    <div class="sb-wall-card">
                        <span class="sb-wall-quote">&rdquo;</span>
                        <p>Regular parent updates meant I always knew exactly how my daughter was progressing. Rare transparency.</p>
                        <div class="sb-wall-author">
                            <span class="sb-avatar sb-avatar-6 text-white">SP</span>
                            <div><h5>Sunita Patil</h5><span>Parent, Foundation Programme</span></div>
                            <div class="sb-stars">★★★★★</div>
                        </div>
                    </div>
                    @endfor
                </div>
            </div>

            <!-- COLUMN 3 -->
            <div class="sb-wall-col">
                <div class="sb-wall-track">
                    @for ($i = 0; $i < 2; $i++)
                    <div class="sb-wall-card">
                        <span class="sb-wall-quote">&rdquo;</span>
                        <p>Zero dead time in the study plan — every week had a clear focus. Loved how structured it all was.</p>
                        <div class="sb-wall-author">
                            <span class="sb-avatar sb-avatar-7 text-white">FS</span>
                            <div><h5>Farhan Sheikh</h5><span>NEET-UG Aspirant</span></div>
                            <div class="sb-stars">★★★★★</div>
                        </div>
                    </div>
                    <div class="sb-wall-card">
                        <span class="sb-wall-quote">&rdquo;</span>
                        <p>The mock interview panel felt like the real thing. Every detail, down to the timing, was accurate.</p>
                        <div class="sb-wall-author">
                            <span class="sb-avatar sb-avatar-8 text-white">SP</span>
                            <div><h5>Sneha Patil</h5><span>Civil Services, Interview Batch</span></div>
                            <div class="sb-stars">★★★★★</div>
                        </div>
                    </div>
                    <div class="sb-wall-card">
                        <span class="sb-wall-quote">&rdquo;</span>
                        <p>Coordinating a group of 40 students for the innovation challenge could've been chaos. The team handled it flawlessly.</p>
                        <div class="sb-wall-author">
                            <span class="sb-avatar sb-avatar-9 text-white">DG</span>
                            <div><h5>Devansh Gupta</h5><span>Future Skills &amp; Innovation</span></div>
                            <div class="sb-stars">★★★★★</div>
                        </div>
                    </div>
                    @endfor
                </div>
            </div>

        </div>
    </div>
</section>

@once
<style>
/* IMPORTANT: no overflow:hidden on .sb-wall-section itself — it would clip the box-shadow below.
   Clipping for the scroll effect happens at .sb-wall-col level instead. */
.sb-wall-section{ position:relative; padding:90px 0 60px; }
.sb-wall-shadow-box{ background:#fff; border-radius:24px; box-shadow:0px 0px 30px rgba(0,0,0,.08), 0px 30px 45px rgba(0,0,0,.137); }
.sb-wall-heading{ text-align:center; padding:0 20px 44px; }
.sb-wall-heading h2{ color:#0f2537; font-size:42px; font-weight:700; line-height:1.3; margin:0; }
.sb-wall-heading h2 em{ font-style:italic; font-weight:600; color:#ff8a3d; }

.sb-wall-columns{ position:relative; display:grid; grid-template-columns:repeat(3, 1fr); gap:24px; padding:0 20px; height:620px;
    -webkit-mask-image:linear-gradient(180deg, transparent 0, #000 40px, #000 90%, transparent 100%);
    mask-image:linear-gradient(180deg, transparent 0, #000 40px, #000 90%, transparent 100%); }
.sb-wall-col{ overflow:hidden; height:100%; position:relative; }
.sb-wall-col-mid{ margin-top:-60px; }

.sb-wall-track{ display:flex; flex-direction:column; gap:20px; animation:sbWallScrollUp 20s linear infinite; will-change:transform; transform:translate3d(0,0,0); backface-visibility:hidden; }
.sb-track-rev{ animation:sbWallScrollDown 24s linear infinite; }
.sb-wall-col:nth-child(3) .sb-wall-track{ animation-duration:22s; }

@keyframes sbWallScrollUp{ from{ transform:translate3d(0,0,0); } to{ transform:translate3d(0,-50%,0); } }
@keyframes sbWallScrollDown{ from{ transform:translate3d(0,-50%,0); } to{ transform:translate3d(0,0,0); } }

.sb-wall-col:hover .sb-wall-track{ animation-play-state:paused; }

.sb-wall-card{ background:#ffffff; border-radius:14px; padding:22px 22px 18px; box-shadow:0 8px 10px rgba(15,37,55,.08); border:1px solid #eef1f4; position:relative; }
.sb-wall-quote{ position:absolute; top:8px; left:16px; font-size:36px; line-height:1; color:#f0d7bb; font-family:Georgia, serif; }
.sb-wall-card p{ margin:12px 0 18px; font-size:14.5px; line-height:1.65; color:#3a4753; }
.sb-wall-author{ display:flex; align-items:center; gap:10px; }
.sb-wall-author > div:nth-child(2){ flex:1; }
.sb-wall-author h5{ margin:0; font-size:14px; color:#12222f; }
.sb-wall-author span{ font-size:12px; color:#8a949c; }
.sb-avatar{ width:38px;height:38px;border-radius:50%; display:flex;align-items:center;justify-content:center; color:#fff;font-weight:700;font-size:13px;flex-shrink:0; }
.sb-avatar-1{ background:#2f9e6e; } .sb-avatar-2{ background:#b5651d; } .sb-avatar-3{ background:#3b6ea5; }
.sb-avatar-4{ background:#a4344a; } .sb-avatar-5{ background:#0e4d5c; } .sb-avatar-6{ background:#6b4fa0; }
.sb-avatar-7{ background:#227a8f; } .sb-avatar-8{ background:#7a4fa0; } .sb-avatar-9{ background:#8a949c; }
.sb-stars{ font-size:11px; color:#ffb648; letter-spacing:1px; }

@media (max-width:991px){ .sb-wall-columns{ grid-template-columns:repeat(2, 1fr); height:560px; } .sb-wall-col:last-child{ display:none; } .sb-wall-heading h2{ font-size:30px; } }
@media (max-width:575px){ .sb-wall-columns{ grid-template-columns:1fr; height:480px; } .sb-wall-col-mid{ display:none; margin-top:0; } .sb-wall-heading h2{ font-size:24px; } .sb-wall-section{ padding:60px 0 30px; } }
</style>
@endonce
