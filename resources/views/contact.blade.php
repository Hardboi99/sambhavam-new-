@extends('layouts.app')
@section('title', 'Contact | Sambhavam - Learn. Innovate. Lead. Create Impact.')
@section('content')
<div>
   <main id="sm-main">

<section class="sc-contact py-5" id="contact-form">
    <div class="container">
        <div class="row g-4 align-items-start">

            {{-- LEFT: form --}}
            <div class="col-lg-7">
                <div class="card p-4 p-md-5">
                    <h2 class="fw-bold mb-2 ">Send Us a Message</h2>
                    <p class="text-muted mb-4">Tell us a little about yourself and what you'd like to discuss with Sambhavam Foundation.</p>

                    @if(session('success'))
                        <div class="alert alert-success" id="form-messages">{{ session('success') }}</div>
                    @endif

                    @if($errors->any())
                        <div class="alert alert-danger" id="form-messages">
                            <strong>Please check the form:</strong>
                            <ul class="mb-0 mt-1 ps-3">
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('contact.submit') }}" method="POST" id="contactForm" novalidate>
                        @csrf

                        {{-- Honeypot --}}
                        <div class="visually-hidden" aria-hidden="true">
                            <label for="website">Leave this field blank</label>
                            <input type="text" id="website" name="website" tabindex="-1" autocomplete="off">
                        </div>

                        <div class="row g-3 mb-1">
                            <div class="col-md-6" data-field>
                                <label for="name" class="visually-hidden">Full name</label>
                                <div class="input-group sc-input-group">
                                    <input type="text" id="name" name="name" class="form-control"
                                           placeholder="Your Name" value="{{ old('name') }}"
                                           required autocomplete="name" aria-describedby="name-error">
                                    <span class="input-group-text bg-white"><i class="fa fa-user"></i></span>
                                </div>
                                @error('name') <div class="invalid-feedback d-block small">{{ $message }}</div> @enderror
                            </div>
                            <div class="col-md-6" data-field>
                                <label for="email" class="visually-hidden">Email</label>
                                <div class="input-group sc-input-group">
                                    <input type="email" id="email" name="email" class="form-control"
                                           placeholder="Your Email" value="{{ old('email') }}"
                                           required autocomplete="email" aria-describedby="email-error">
                                    <span class="input-group-text bg-white"><i class="fa fa-envelope"></i></span>
                                </div>
                                @error('email') <div class="invalid-feedback d-block small">{{ $message }}</div> @enderror
                            </div>
                        </div>

                        <div class="row g-3 mb-1">
                            <div class="col-md-6" data-field>
                                <label for="phone" class="visually-hidden">Phone number</label>
                                <div class="input-group sc-input-group">
                                    <input type="tel" id="phone" name="phone" class="form-control"
                                           placeholder="Phone Number (optional)" value="{{ old('phone') }}"
                                           autocomplete="tel" aria-describedby="phone-error">
                                    <span class="input-group-text bg-white"><i class="fa fa-phone"></i></span>
                                </div>
                                @error('phone') <div class="invalid-feedback d-block small">{{ $message }}</div> @enderror
                            </div>
                            <div class="col-md-6" data-field>
                                <select name="subject" id="subject" class="form-select w-100 my-auto" required >
                                    <option value="" disabled {{ old('subject') ? '' : 'selected' }}>Select Subject</option>
                                    <option value="Sambhavam Academy" {{ old('subject') === 'Sambhavam Academy' ? 'selected' : '' }}>Sambhavam Academy</option>
                                    <option value="Partnership" {{ old('subject') === 'Partnership' ? 'selected' : '' }}>Partnership</option>
                                    <option value="Mentorship" {{ old('subject') === 'Mentorship' ? 'selected' : '' }}>Mentorship</option>
                                    <option value="Programs & Impact" {{ old('subject') === 'Programs & Impact' ? 'selected' : '' }}>Programs & Impact</option>
                                    <option value="General Enquiry" {{ old('subject') === 'General Enquiry' ? 'selected' : '' }}>General Enquiry</option>
                                </select>
                                @error('subject') <div class="invalid-feedback d-block small">{{ $message }}</div> @enderror
                            </div>
                        </div>

                        <div class="mb-2" data-field>
                            <label for="message" class="visually-hidden">Message</label>
                            <textarea id="message" name="message" rows="5" class="form-control"
                                      placeholder="Message" maxlength="2000" required
                                      aria-describedby="message-error message-count">{{ old('message') }}</textarea>
                            <div class="d-flex justify-content-end">
                                <small class="text-muted" id="message-count">0 / 2000</small>
                            </div>
                            @error('message') <div class="invalid-feedback d-block small">{{ $message }}</div> @enderror
                        </div>

                        <button id="submit" class="btn sc-btn w-100 mt-3" type="submit">
                            Submit Message <i class="fa fa-arrow-right ms-1"></i>
                        </button>
                    </form>
                </div>
            </div>

            {{-- RIGHT: office addresses only --}}
            <div class="col-lg-5">
                <div class="card p-4 p-md-5">
                    <h3 class="fw-bold mb-2 sc-heading">Get in Touch</h3>
                    <p class="text-muted mb-4">Connect with Sambhavam for education, innovation, leadership, partnerships, and impact-focused initiatives.</p>

                    <div class="d-flex gap-3 py-3 border-bottom">
                        <span class="sc-icon-box flex-shrink-0"><i class="fa fa-building"></i></span>
                        <div>
                            <h4 class="fs-6 fw-bold mb-1">Corporate Office</h4>
                            <p class="text-muted small mb-0">313 C, Bhumi Mall Premises, Plot No. 9, Sector 15,<br>
                               CBD Belapur, Navi Mumbai, District Thane,<br>
                               Maharashtra &ndash; 400614</p>
                        </div>
                    </div>

                    <div class="d-flex gap-3 pt-3">
                        <span class="sc-icon-box flex-shrink-0"><i class="fa fa-graduation-cap"></i></span>
                        <div>
                            <h4 class="fs-6 fw-bold mb-1">Sambhavam Academy</h4>
                            <p class="text-muted small mb-0">Office No. 13, Ground Floor, F-3, F-Type Building,<br>
                               Sector 3, CBD Belapur, Navi Mumbai,<br>
                               District Thane, Maharashtra &ndash; 400614</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        {{-- BELOW: animated info strip --}}
        <div class="row g-3 mt-2">
            <div class="col-6 col-lg-3">
                <div class="sc-strip-item h-100" style="--sc-delay:0s">
                    <span class="sc-icon-box mb-3"><i class="fa fa-map"></i></span>
                    <h4 class="fs-6 fw-bold mb-2">Our Centres</h4>
                    <p class="text-muted small mb-0">Navi Mumbai &middot; Barshi, Solapur &middot; Dharashiv &middot; Chhatrapati Sambhajinagar</p>
                </div>
            </div>

            <div class="col-6 col-lg-3">
                <div class="sc-strip-item h-100" style="--sc-delay:.1s">
                    <span class="sc-icon-box mb-3"><i class="fa fa-phone"></i></span>
                    <h4 class="fs-6 fw-bold mb-2">Phone &amp; Email</h4>
                    <p class="small mb-0">
                        <a href="tel:+912249789869" class=" d-block">+91 22 49789869</a>
                        <a href="tel:+918850332700" class=" d-block">+91 88503 32700</a>
                        <a href="tel:+917718892626" class=" d-block">+91 77188 92626</a>
                        <a href="mailto:sambhavamfoundation@gmail.com" class=" d-block">sambhavamfoundation@gmail.com</a>
                    </p>
                </div>
            </div>

            <div class="col-6 col-lg-3">
                <div class="sc-strip-item h-100" style="--sc-delay:.2s">
                    <span class="sc-icon-box mb-3"><i class="fa fa-clock"></i></span>
                    <h4 class="fs-6 fw-bold mb-2">Official Work Time</h4>
                    <p class="text-muted small mb-0">Monday &ndash; Friday: 09:00 &ndash; 20:00<br>
                       Saturday &amp; Sunday: 10:30 &ndash; 22:00</p>
                </div>
            </div>

            <div class="col-6 col-lg-3">
                <div class="sc-strip-item h-100" style="--sc-delay:.3s">
                    <span class="sc-icon-box mb-3"><i class="fa fa-share-nodes"></i></span>
                    <h4 class="fs-6 fw-bold mb-2">Follow Us</h4>
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item"><a href="https://linkedin.com/in/sambhavamfoundation" target="_blank" rel="noopener noreferrer" class="sc-social-btn" aria-label="LinkedIn"><i class="fa fa-linkedin"></i></a></li>
                        <li class="list-inline-item"><a href="https://www.facebook.com/share/1BpnFiZJKM/" target="_blank" rel="noopener noreferrer" class="sc-social-btn" aria-label="Facebook"><i class="fa fa-facebook"></i></a></li>
                        <li class="list-inline-item"><a href="https://www.instagram.com/sambhavamfoundation" target="_blank" rel="noopener noreferrer" class="sc-social-btn" aria-label="Instagram"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('contactForm');
    if (!form) return;

    const submitBtn = document.getElementById('submit');
    const fieldWraps = Array.from(form.querySelectorAll('[data-field]'));
    const phonePattern = /^[0-9+\-\s()]{7,20}$/;

    const messageInput = document.getElementById('message');
    const messageCount = document.getElementById('message-count');
    const updateCount = () => {
        if (!messageInput || !messageCount) return;
        const max = messageInput.maxLength > 0 ? messageInput.maxLength : 2000;
        const len = messageInput.value.length;
        messageCount.textContent = `${len} / ${max}`;
        messageCount.classList.toggle('text-danger', len >= max * 0.9);
    };
    messageInput?.addEventListener('input', updateCount);
    updateCount();

    const validateField = (wrap) => {
        const control = wrap.querySelector('.form-control, .form-select');
        const errorEl = wrap.querySelector('.invalid-feedback');
        if (!control) return true;

        let message = '';
        if (control.hasAttribute('required') && !control.value.trim()) {
            message = 'This field is required.';
        } else if (control.type === 'email' && control.value && !control.checkValidity()) {
            message = 'Enter a valid email address.';
        } else if (control.type === 'tel' && control.value && !phonePattern.test(control.value)) {
            message = 'Enter a valid phone number.';
        }

        wrap.classList.toggle('has-error', !!message);
        if (errorEl) errorEl.textContent = message || errorEl.textContent;
        return !message;
    };

    fieldWraps.forEach((wrap) => {
        const control = wrap.querySelector('.form-control, .form-select');
        if (!control) return;
        control.addEventListener('blur', () => validateField(wrap));
        control.addEventListener('input', () => {
            if (wrap.classList.contains('has-error')) validateField(wrap);
        });
        control.addEventListener('change', () => {
            if (wrap.classList.contains('has-error')) validateField(wrap);
        });
    });

    form.addEventListener('submit', (e) => {
        let firstInvalid = null;
        fieldWraps.forEach((wrap) => {
            const ok = validateField(wrap);
            if (!ok && !firstInvalid) firstInvalid = wrap.querySelector('.form-control, .form-select');
        });

        if (firstInvalid) {
            e.preventDefault();
            firstInvalid.focus();
            return;
        }

        if (submitBtn) {
            submitBtn.setAttribute('disabled', 'disabled');
            submitBtn.innerHTML = 'Sending&hellip;';
        }
    });
});
</script>

    </main>
</div>
@endsection