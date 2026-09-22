@extends('layouts.app')

@section('title', 'Scholarship & Fellowship Programme | Sambhavam - Learn. Innovate. Lead. Create Impact.')

@section('content')

<style>
/* =============================================================
   SAMBHAVAM SCHOLARSHIP PAGE — SCOPED THEME STYLES
   Inherits directly from Sambhavam Theme Variables (No :root defined)
   Uses: --ed-color-theme-primary, --sambhavam-blue, --sambhavam-teal,
         --sambhavam-gold, --ed-color-heading-primary, --ed-color-text-body
   ============================================================= */

.sch-page {
    background: #ffffff;
    color: var(--ed-color-heading-primary, #16243A);
    font-family: var(--ed-ff-body, 'Outfit', sans-serif);
    overflow: hidden;
}

/* =============================================================
   1. HERO STRIP (KEY HIGHLIGHTS)
   ============================================================= */
.sch-strip {
    background: #ffffff;
    border-bottom: 1px solid var(--ed-color-border-1, #E2E6EC);
    padding: 22px 0;
}

.sch-strip-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 20px;
}

.sch-strip-item {
    display: flex;
    align-items: center;
    gap: 14px;
    padding: 10px 14px;
    border-radius: 12px;
    transition: background 0.3s ease;
}

.sch-strip-item:hover {
    background: var(--ed-color-grey-1, #F7F9FC);
}

.sch-strip-icon {
    width: 44px;
    height: 44px;
    border-radius: 12px;
    background: rgba(3, 72, 97, 0.08);
    color: var(--ed-color-theme-primary, #034861);
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 18px;
    flex-shrink: 0;
}

.sch-strip-text h5 {
    font-family: var(--ed-ff-heading, 'Outfit', serif);
    margin: 0 0 2px;
    font-size: 14.5px;
    font-weight: 700;
    color: var(--ed-color-heading-primary, #16243A);
}

.sch-strip-text p {
    margin: 0;
    font-size: 12.5px;
    color: var(--ed-color-text-body, #5F6670);
}

/* =============================================================
   2. SECTION HEADINGS & BADGES
   ============================================================= */
.sch-eyebrow {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    padding: 6px 18px;
    border-radius: 50px;
    background: rgba(3, 72, 97, 0.08);
    color: var(--ed-color-theme-primary, #034861);
    font-size: 13px;
    font-weight: 700;
    letter-spacing: 0.5px;
    text-transform: uppercase;
    margin-bottom: 16px;
}

.sch-eyebrow.gold {
    background: rgba(222, 182, 94, 0.15);
    color: var(--sambhavam-gold, #deb65e);
}

.sch-eyebrow.teal {
    background: rgba(1, 109, 119, 0.1);
    color: var(--sambhavam-teal, #016d77);
}

.sch-section-head {
    margin-bottom: 45px;
}

.sch-section-head h2 {
    font-family: var(--ed-ff-heading, 'Outfit', serif);
    font-size: 36px;
    font-weight: 800;
    color: var(--ed-color-heading-primary, #16243A);
    line-height: 1.25;
    margin-bottom: 12px;
}

.sch-section-head p {
    font-size: 16px;
    color: var(--ed-color-text-body, #5F6670);
    max-width: 680px;
    line-height: 1.6;
    margin: 0;
}

.sch-section-head.text-center p {
    margin: 0 auto;
}

/* =============================================================
   3. COMMITMENT SECTION
   ============================================================= */
.sch-commit {
    padding: 80px 0 70px;
    background: linear-gradient(180deg, #ffffff 0%, var(--ed-color-grey-1, #F7F9FC) 100%);
}

.sch-commit-grid {
    display: grid;
    grid-template-columns: 1.15fr 0.85fr;
    gap: 50px;
    align-items: center;
}

.sch-commit-lead {
    font-size: 18px;
    line-height: 1.65;
    color: var(--ed-color-heading-primary, #16243A);
    font-weight: 500;
    margin-bottom: 20px;
}

.sch-commit-desc {
    font-size: 15px;
    line-height: 1.7;
    color: var(--ed-color-text-body, #5F6670);
    margin-bottom: 28px;
}

.sch-commit-points {
    display: flex;
    flex-direction: column;
    gap: 14px;
}

.sch-commit-pill {
    display: flex;
    align-items: flex-start;
    gap: 14px;
    padding: 16px 20px;
    background: #ffffff;
    border: 1px solid var(--ed-color-border-1, #E2E6EC);
    border-radius: 12px;
    box-shadow: 0 4px 15px rgba(3, 72, 97, 0.03);
    transition: transform 0.3s ease, border-color 0.3s ease;
}

.sch-commit-pill:hover {
    transform: translateX(6px);
    border-color: rgba(3, 72, 97, 0.25);
}

.sch-commit-pill-icon {
    width: 36px;
    height: 36px;
    border-radius: 10px;
    background: rgba(3, 72, 97, 0.08);
    color: var(--ed-color-theme-primary, #034861);
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 16px;
    flex-shrink: 0;
    margin-top: 2px;
}

.sch-commit-pill b {
    display: block;
    font-size: 15px;
    color: var(--ed-color-heading-primary, #16243A);
    margin-bottom: 3px;
}

.sch-commit-pill span {
    font-size: 13.5px;
    color: var(--ed-color-text-body, #5F6670);
    line-height: 1.5;
}

/* Quote Panel */
.sch-quote-panel {
    position: relative;
    background: #ffffff;
    border: 1px solid var(--ed-color-border-1, #E2E6EC);
    border-radius: 20px;
    padding: 40px 34px;
    box-shadow: 0 15px 40px rgba(3, 72, 97, 0.08);
    overflow: hidden;
}

.sch-quote-panel::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 5px;
    background: linear-gradient(90deg, var(--sambhavam-gold, #deb65e), var(--ed-color-theme-primary, #034861), var(--sambhavam-teal, #016d77));
}

.sch-quote-mark {
    font-size: 32px;
    color: rgba(3, 72, 97, 0.2);
    margin-bottom: 16px;
}

.sch-quote-text {
    font-size: 18px;
    line-height: 1.6;
    font-style: italic;
    color: var(--ed-color-heading-primary, #16243A);
    font-weight: 500;
    margin-bottom: 24px;
}

.sch-quote-author {
    display: flex;
    align-items: center;
    gap: 14px;
    padding-top: 20px;
    border-top: 1px dashed var(--ed-color-border-1, #E2E6EC);
}

.sch-quote-avatar {
    width: 48px;
    height: 48px;
    border-radius: 50%;
    background: rgba(3, 72, 97, 0.08);
    color: var(--ed-color-theme-primary, #034861);
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 20px;
    font-weight: 700;
}

.sch-quote-meta h5 {
    font-family: var(--ed-ff-heading, 'Outfit', serif);
    margin: 0 0 2px;
    font-size: 15px;
    font-weight: 700;
    color: var(--ed-color-heading-primary, #16243A);
}

.sch-quote-meta span {
    font-size: 13px;
    color: var(--ed-color-text-body, #5F6670);
}

/* =============================================================
   4. WHO WE SUPPORT (8 PATHWAYS)
   ============================================================= */
.sch-who {
    padding: 85px 0 80px;
    background: #ffffff;
}

.sch-who-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 22px;
}

.sch-who-card {
    position: relative;
    background: #ffffff;
    border: 1px solid var(--ed-color-border-1, #E2E6EC);
    border-radius: 16px;
    padding: 32px 24px 28px;
    box-shadow: 0 6px 20px rgba(3, 72, 97, 0.04);
    transition: all 0.35s ease;
    display: flex;
    flex-direction: column;
    height: 100%;
}

.sch-who-card::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 4px;
    border-radius: 16px 16px 0 0;
    background: var(--ed-color-theme-primary, #034861);
    transform: scaleX(0);
    transform-origin: left;
    transition: transform 0.35s ease;
}

.sch-who-card.accent-gold::before {
    background: var(--sambhavam-gold, #deb65e);
}

.sch-who-card:hover {
    transform: translateY(-7px);
    box-shadow: 0 16px 36px rgba(3, 72, 97, 0.12);
    border-color: rgba(3, 72, 97, 0.25);
}

.sch-who-card:hover::before {
    transform: scaleX(1);
}

.sch-who-card-top {
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-bottom: 20px;
}

.sch-who-icon {
    width: 52px;
    height: 52px;
    border-radius: 14px;
    background: rgba(3, 72, 97, 0.08);
    color: var(--ed-color-theme-primary, #034861);
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 22px;
    transition: all 0.3s ease;
}

.sch-who-card.accent-gold .sch-who-icon {
    background: rgba(222, 182, 94, 0.15);
    color: var(--sambhavam-gold, #deb65e);
}

.sch-who-card:hover .sch-who-icon {
    background: var(--ed-color-theme-primary, #034861);
    color: #ffffff;
    transform: scale(1.08);
}

.sch-who-card.accent-gold:hover .sch-who-icon {
    background: var(--sambhavam-gold, #deb65e);
    color: #ffffff;
}

.sch-who-num {
    font-size: 1.4rem;
    font-weight: 800;
    color: rgba(3, 72, 97, 0.12);
    letter-spacing: -0.5px;
}

.sch-who-card h3 {
    font-family: var(--ed-ff-heading, 'Outfit', serif);
    font-size: 17.5px;
    font-weight: 700;
    color: var(--ed-color-heading-primary, #16243A);
    margin: 0 0 10px;
    line-height: 1.35;
}

.sch-who-card p {
    font-size: 14px;
    color: var(--ed-color-text-body, #5F6670);
    line-height: 1.55;
    margin: 0;
    flex-grow: 1;
}

/* =============================================================
   5. ACTION HUB (APPLY / DONOR)
   ============================================================= */
.sch-action {
    padding: 85px 0 90px;
    background: var(--ed-color-grey-1, #F7F9FC);
}

.sch-action-grid {
    display: grid;
    grid-template-columns: 1.25fr 0.95fr;
    gap: 32px;
    align-items: stretch;
}

/* Student Application Card */
.sch-form-card {
    position: relative;
    background: #ffffff;
    border: 1px solid var(--ed-color-border-1, #E2E6EC);
    border-radius: 22px;
    padding: 45px 40px;
    box-shadow: 0 15px 40px rgba(3, 72, 97, 0.08);
}

.sch-form-badge {
    position: absolute;
    top: -15px;
    left: 40px;
    padding: 6px 18px;
    background: linear-gradient(135deg, var(--sambhavam-gold, #deb65e), #eed18c);
    color: var(--ed-color-heading-primary, #16243A);
    font-size: 13px;
    font-weight: 700;
    border-radius: 50px;
    box-shadow: 0 6px 18px rgba(222, 182, 94, 0.35);
}

.sch-form-card h2 {
    font-family: var(--ed-ff-heading, 'Outfit', serif);
    font-size: 28px;
    font-weight: 800;
    color: var(--ed-color-heading-primary, #16243A);
    margin: 6px 0 8px;
}

.sch-form-card > p {
    font-size: 14.5px;
    color: var(--ed-color-text-body, #5F6670);
    margin-bottom: 26px;
    line-height: 1.55;
}

.sch-trust-strip {
    display: flex;
    align-items: center;
    gap: 10px;
    flex-wrap: wrap;
    margin-bottom: 24px;
    padding-bottom: 16px;
    border-bottom: 1px dashed var(--ed-color-border-1, #E2E6EC);
}

.sch-trust-tag {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    font-size: 12px;
    font-weight: 600;
    color: var(--sambhavam-teal, #016d77);
    background: rgba(1, 109, 119, 0.07);
    padding: 5px 12px;
    border-radius: 20px;
}

.sch-form-row {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 16px;
}

.sch-field-group {
    margin-bottom: 18px;
}

.sch-field-label {
    display: flex;
    align-items: center;
    gap: 8px;
    font-size: 13.5px;
    font-weight: 600;
    color: var(--ed-color-heading-primary, #16243A);
    margin-bottom: 8px;
}

.sch-field-label i {
    color: var(--sambhavam-teal, #016d77);
    font-size: 13.5px;
}

.sch-field-label .sch-req {
    color: #e11d48;
    font-weight: 700;
}

.sch-input, .sch-textarea {
    width: 100%;
    padding: 12px 16px;
    border: 1.5px solid var(--ed-color-border-1, #E2E6EC);
    border-radius: 10px;
    font-size: 14.5px;
    color: var(--ed-color-heading-primary, #16243A);
    background: #ffffff;
    transition: all 0.25s ease;
    outline: none;
    font-family: inherit;
    box-sizing: border-box;
}

.sch-input::placeholder, .sch-textarea::placeholder {
    color: #94a3b8;
    font-size: 13.5px;
}

.sch-input:focus, .sch-textarea:focus {
    border-color: var(--ed-color-theme-primary, #034861);
    box-shadow: 0 0 0 4px rgba(3, 72, 97, 0.12);
    background: #ffffff;
}

.sch-textarea {
    resize: vertical;
    min-height: 95px;
    line-height: 1.55;
}

/* Override nice-select on scholarship application to ensure perfect appearance and no layout break */
.sch-action-form .nice-select {
    float: none !important;
    clear: none !important;
    display: flex !important;
    align-items: center !important;
    width: 100% !important;
    height: 48px !important;
    line-height: 46px !important;
    padding: 0 16px !important;
    border: 1.5px solid var(--ed-color-border-1, #E2E6EC) !important;
    border-radius: 10px !important;
    font-size: 14.5px !important;
    color: var(--ed-color-heading-primary, #16243A) !important;
    background: #ffffff !important;
    box-sizing: border-box !important;
    transition: all 0.25s ease !important;
}

.sch-action-form .nice-select .current {
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
    display: block;
    max-width: 90%;
    font-size: 14px;
    color: var(--ed-color-heading-primary, #16243A);
}

.sch-action-form .nice-select:after {
    right: 16px !important;
    width: 8px !important;
    height: 8px !important;
    border-bottom: 2px solid var(--sambhavam-teal, #016d77) !important;
    border-right: 2px solid var(--sambhavam-teal, #016d77) !important;
}

.sch-action-form .nice-select.open,
.sch-action-form .nice-select:focus {
    border-color: var(--ed-color-theme-primary, #034861) !important;
    box-shadow: 0 0 0 4px rgba(3, 72, 97, 0.12) !important;
}

.sch-action-form .nice-select .list {
    width: 100% !important;
    border-radius: 10px !important;
    box-shadow: 0 12px 35px rgba(3, 72, 97, 0.15) !important;
    border: 1px solid var(--ed-color-border-1, #E2E6EC) !important;
    max-height: 260px !important;
    overflow-y: auto !important;
    z-index: 100 !important;
}

.sch-action-form .nice-select .option {
    padding: 10px 16px !important;
    line-height: 1.4 !important;
    font-size: 14px !important;
}

.sch-action-form .nice-select .option:hover,
.sch-action-form .nice-select .option.focus,
.sch-action-form .nice-select .option.selected.focus {
    background-color: var(--ed-color-grey-1, #F7F9FC) !important;
    color: var(--ed-color-theme-primary, #034861) !important;
    font-weight: 600 !important;
}

.sch-btn-apply {
    width: 100%;
    padding: 15px 24px;
    background: linear-gradient(135deg, var(--ed-color-theme-primary, #034861) 0%, var(--sambhavam-teal, #016d77) 100%);
    color: #ffffff;
    font-size: 15.5px;
    font-weight: 700;
    border: none;
    border-radius: 12px;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 12px;
    cursor: pointer;
    transition: all 0.3s ease;
    box-shadow: 0 10px 25px rgba(3, 72, 97, 0.25);
    margin-top: 8px;
}

.sch-btn-apply:hover {
    transform: translateY(-3px);
    box-shadow: 0 15px 32px rgba(1, 109, 119, 0.35);
    background: linear-gradient(135deg, var(--sambhavam-teal, #016d77) 0%, var(--ed-color-theme-primary, #034861) 100%);
}

.sch-btn-apply i.fa-whatsapp {
    font-size: 20px;
    color: #25D366;
}

.sch-form-notice {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    font-size: 13px;
    color: var(--ed-color-text-body, #5F6670);
    margin-top: 14px;
    text-align: center;
}

.sch-form-notice i {
    color: var(--sambhavam-teal, #016d77);
}

/* Donor & Partner Card */
.sch-donor-card {
    position: relative;
    background: linear-gradient(145deg, #0B2D5C 0%, #16243A 60%, #034861 100%);
    border-radius: 22px;
    padding: 45px 38px;
    color: #ffffff;
    box-shadow: 0 15px 40px rgba(3, 72, 97, 0.15);
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    overflow: hidden;
}

.sch-donor-card::after {
    content: "";
    position: absolute;
    top: -50px;
    right: -50px;
    width: 200px;
    height: 200px;
    background: radial-gradient(circle, rgba(222, 182, 94, 0.25) 0%, transparent 70%);
    pointer-events: none;
}

.sch-donor-card h2 {
    font-family: var(--ed-ff-heading, 'Outfit', serif);
    font-size: 28px;
    font-weight: 800;
    color: #ffffff;
    margin: 6px 0 12px;
}

.sch-donor-card > div > p {
    font-size: 15px;
    color: rgba(255, 255, 255, 0.85);
    line-height: 1.6;
    margin-bottom: 26px;
}

.sch-donor-options {
    display: flex;
    flex-direction: column;
    gap: 12px;
    margin-bottom: 30px;
}

.sch-donor-item {
    display: flex;
    align-items: center;
    gap: 12px;
    padding: 12px 16px;
    background: rgba(255, 255, 255, 0.07);
    border: 1px solid rgba(255, 255, 255, 0.12);
    border-radius: 10px;
    font-size: 14px;
    color: rgba(255, 255, 255, 0.95);
}

.sch-donor-item i {
    color: var(--sambhavam-gold, #deb65e);
    font-size: 15px;
}

.sch-btn-donor {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 10px;
    padding: 14px 28px;
    background: #ffffff;
    color: var(--ed-color-heading-primary, #16243A);
    font-size: 15px;
    font-weight: 700;
    border-radius: 12px;
    text-decoration: none;
    transition: all 0.3s ease;
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
    margin-bottom: 24px;
}

.sch-btn-donor:hover {
    background: var(--sambhavam-gold, #deb65e);
    color: var(--ed-color-heading-primary, #16243A);
    transform: translateY(-2px);
    box-shadow: 0 12px 25px rgba(222, 182, 94, 0.35);
}

.sch-donor-contacts {
    display: flex;
    flex-direction: column;
    gap: 10px;
    padding-top: 20px;
    border-top: 1px solid rgba(255, 255, 255, 0.15);
}

.sch-donor-contacts a {
    display: flex;
    align-items: center;
    gap: 10px;
    font-size: 14px;
    color: rgba(255, 255, 255, 0.85);
    text-decoration: none;
    transition: color 0.2s ease;
}

.sch-donor-contacts a:hover {
    color: var(--sambhavam-gold, #deb65e);
}

.sch-donor-contacts a i {
    color: var(--sambhavam-gold, #deb65e);
    width: 16px;
}

/* =============================================================
   6. HOW IT WORKS (ROADMAP TIMELINE)
   ============================================================= */
.sch-how {
    padding: 85px 0 80px;
    background: #ffffff;
}

.sch-how-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 22px;
    position: relative;
    margin-top: 30px;
}

.sch-step-card {
    position: relative;
    background: #ffffff;
    border: 1px solid var(--ed-color-border-1, #E2E6EC);
    border-radius: 16px;
    padding: 32px 24px;
    box-shadow: 0 6px 20px rgba(3, 72, 97, 0.04);
    transition: all 0.35s ease;
}

.sch-step-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 15px 40px rgba(3, 72, 97, 0.12);
    border-color: rgba(3, 72, 97, 0.25);
}

.sch-step-top {
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-bottom: 18px;
}

.sch-step-badge {
    width: 46px;
    height: 46px;
    border-radius: 12px;
    background: rgba(3, 72, 97, 0.08);
    color: var(--ed-color-theme-primary, #034861);
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 18px;
    font-weight: 800;
}

.sch-step-time {
    font-size: 12px;
    font-weight: 700;
    text-transform: uppercase;
    color: var(--sambhavam-teal, #016d77);
    background: rgba(1, 109, 119, 0.1);
    padding: 4px 10px;
    border-radius: 50px;
}

.sch-step-card h3 {
    font-family: var(--ed-ff-heading, 'Outfit', serif);
    font-size: 17px;
    font-weight: 700;
    color: var(--ed-color-heading-primary, #16243A);
    margin: 0 0 8px;
}

.sch-step-card p {
    font-size: 14px;
    color: var(--ed-color-text-body, #5F6670);
    line-height: 1.55;
    margin: 0;
}

/* =============================================================
   7. ACADEMIC VERTICALS COVERED
   ============================================================= */
.sch-vert {
    padding: 85px 0 80px;
    background: var(--ed-color-grey-1, #F7F9FC);
}

.sch-vert-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 24px;
    margin-top: 30px;
}

.sch-vert-card {
    background: #ffffff;
    border: 1px solid var(--ed-color-border-1, #E2E6EC);
    border-radius: 18px;
    padding: 34px 28px;
    box-shadow: 0 8px 24px rgba(3, 72, 97, 0.05);
    transition: all 0.35s ease;
    display: flex;
    flex-direction: column;
    height: 100%;
}

.sch-vert-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 16px 36px rgba(3, 72, 97, 0.12);
    border-color: rgba(3, 72, 97, 0.25);
}

.sch-vert-icon {
    width: 56px;
    height: 56px;
    border-radius: 14px;
    background: rgba(3, 72, 97, 0.08);
    color: var(--ed-color-theme-primary, #034861);
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 22px;
    margin-bottom: 20px;
    transition: all 0.3s ease;
}

.sch-vert-card:hover .sch-vert-icon {
    background: var(--ed-color-theme-primary, #034861);
    color: #ffffff;
    transform: scale(1.08);
}

.sch-vert-card h3 {
    font-family: var(--ed-ff-heading, 'Outfit', serif);
    font-size: 19px;
    font-weight: 700;
    color: var(--ed-color-heading-primary, #16243A);
    margin: 0 0 10px;
}

.sch-vert-card p {
    font-size: 14.5px;
    color: var(--ed-color-text-body, #5F6670);
    line-height: 1.55;
    margin: 0 0 20px;
    flex-grow: 1;
}

.sch-vert-tags {
    display: flex;
    flex-wrap: wrap;
    gap: 8px;
}

.sch-vert-tag {
    font-size: 12.5px;
    font-weight: 600;
    padding: 4px 12px;
    border-radius: 6px;
    background: var(--ed-color-grey-2, #EEF2F6);
    color: var(--ed-color-heading-primary, #16243A);
}

/* =============================================================
   8. IMPACT OUTCOMES
   ============================================================= */
.sch-impact {
    padding: 85px 0 80px;
    background: #ffffff;
}

.sch-impact-grid {
    display: grid;
    grid-template-columns: repeat(5, 1fr);
    gap: 18px;
    margin-top: 35px;
}

.sch-impact-card {
    background: #ffffff;
    border: 1px solid var(--ed-color-border-1, #E2E6EC);
    border-radius: 16px;
    padding: 30px 18px;
    text-align: center;
    box-shadow: 0 6px 18px rgba(3, 72, 97, 0.04);
    transition: all 0.3s ease;
}

.sch-impact-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 15px 40px rgba(3, 72, 97, 0.12);
    border-color: rgba(1, 109, 119, 0.3);
}

.sch-impact-icon {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    background: rgba(1, 109, 119, 0.1);
    color: var(--sambhavam-teal, #016d77);
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 20px;
    margin: 0 auto 16px;
    transition: all 0.3s ease;
}

.sch-impact-card:hover .sch-impact-icon {
    background: var(--sambhavam-teal, #016d77);
    color: #ffffff;
}

.sch-impact-card h4 {
    font-family: var(--ed-ff-heading, 'Outfit', serif);
    font-size: 15.5px;
    font-weight: 700;
    color: var(--ed-color-heading-primary, #16243A);
    margin: 0 0 6px;
}

.sch-impact-card p {
    font-size: 13px;
    color: var(--ed-color-text-body, #5F6670);
    margin: 0;
    line-height: 1.45;
}

/* =============================================================
   9. FINAL CTA SECTION
   ============================================================= */
.sch-cta-section {
    padding: 40px 0 70px;
}

.sch-cta-box {
    position: relative;
    padding: 80px 48px;
    border-radius: 26px;
    background: linear-gradient(135deg, #0B2D5C 0%, #16243A 50%, #034861 100%);
    box-shadow: 0 20px 50px rgba(3, 72, 97, 0.25);
    border: 1px solid rgba(255, 255, 255, 0.12);
    overflow: hidden;
    color: #ffffff;
    text-align: center;
}

.sch-cta-box::before {
    content: "";
    position: absolute;
    inset: 0;
    background:
        radial-gradient(circle at 10% 20%, rgba(3, 72, 97, 0.4) 0%, transparent 50%),
        radial-gradient(circle at 90% 80%, rgba(222, 182, 94, 0.25) 0%, transparent 45%);
    pointer-events: none;
}

.sch-cta-content {
    position: relative;
    z-index: 2;
    max-width: 800px;
    margin: 0 auto;
}

.sch-cta-badge {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    padding: 7px 22px;
    border-radius: 50px;
    background: rgba(255, 255, 255, 0.12);
    backdrop-filter: blur(10px);
    -webkit-backdrop-filter: blur(10px);
    border: 1px solid rgba(255, 255, 255, 0.25);
    color: #ffffff;
    font-size: 13px;
    font-weight: 700;
    letter-spacing: 0.6px;
    text-transform: uppercase;
    margin-bottom: 22px;
}

.sch-cta-badge i {
    color: var(--sambhavam-gold, #deb65e);
}

.sch-cta-box h2 {
    font-family: var(--ed-ff-heading, 'Outfit', serif);
    font-size: 38px;
    font-weight: 800;
    color: #ffffff;
    line-height: 1.25;
    margin-bottom: 16px;
}

.sch-cta-box p {
    font-size: 16.5px;
    color: rgba(255, 255, 255, 0.85);
    line-height: 1.6;
    margin-bottom: 34px;
}

.sch-cta-btns {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 16px;
    flex-wrap: wrap;
    margin-bottom: 32px;
}

.sch-btn-gold {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 10px;
    padding: 14px 34px;
    border-radius: 100px;
    background: #ffffff;
    color: var(--ed-color-heading-primary, #16243A);
    font-size: 15px;
    font-weight: 700;
    text-decoration: none;
    transition: all 0.3s ease;
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
}

.sch-btn-gold:hover {
    background: var(--sambhavam-gold, #deb65e);
    color: var(--ed-color-heading-primary, #16243A);
    transform: translateY(-3px);
    box-shadow: 0 14px 30px rgba(222, 182, 94, 0.4);
}

.sch-btn-outline {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 10px;
    padding: 14px 32px;
    border-radius: 100px;
    background: rgba(255, 255, 255, 0.08);
    color: #ffffff;
    border: 1.5px solid rgba(255, 255, 255, 0.6);
    font-size: 15px;
    font-weight: 700;
    text-decoration: none;
    transition: all 0.3s ease;
    backdrop-filter: blur(8px);
    -webkit-backdrop-filter: blur(8px);
}

.sch-btn-outline:hover {
    background: rgba(255, 255, 255, 0.2);
    border-color: #ffffff;
    color: #ffffff;
    transform: translateY(-3px);
}

.sch-cta-contact {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 24px;
    flex-wrap: wrap;
    padding-top: 24px;
    border-top: 1px solid rgba(255, 255, 255, 0.15);
}

.sch-cta-contact a {
    color: rgba(255, 255, 255, 0.85);
    font-size: 14.5px;
    text-decoration: none;
    display: flex;
    align-items: center;
    gap: 8px;
    transition: color 0.25s ease;
}

.sch-cta-contact a:hover {
    color: var(--sambhavam-gold, #deb65e);
}

.sch-cta-contact a i {
    color: var(--sambhavam-gold, #deb65e);
}

/* =============================================================
   10. RESPONSIVE BREAKPOINTS
   ============================================================= */
@media (max-width: 1199px) {
    .sch-who-grid {
        grid-template-columns: repeat(3, 1fr);
    }
    .sch-strip-grid {
        grid-template-columns: repeat(2, 1fr);
    }
}

@media (max-width: 991px) {
    .sch-commit-grid,
    .sch-action-grid {
        grid-template-columns: 1fr;
    }
    .sch-who-grid {
        grid-template-columns: repeat(2, 1fr);
    }
    .sch-how-grid {
        grid-template-columns: repeat(2, 1fr);
    }
    .sch-vert-grid {
        grid-template-columns: repeat(2, 1fr);
    }
    .sch-impact-grid {
        grid-template-columns: repeat(3, 1fr);
    }
}

@media (max-width: 767px) {
    .sch-section-head h2,
    .sch-cta-box h2 {
        font-size: 28px;
    }
    .sch-strip-grid {
        grid-template-columns: 1fr;
    }
    .sch-who-grid {
        grid-template-columns: 1fr;
    }
    .sch-how-grid {
        grid-template-columns: 1fr;
    }
    .sch-vert-grid {
        grid-template-columns: 1fr;
    }
    .sch-impact-grid {
        grid-template-columns: repeat(2, 1fr);
    }
    .sch-form-row {
        grid-template-columns: 1fr;
    }
    .sch-form-card,
    .sch-donor-card {
        padding: 35px 22px;
    }
    .sch-cta-box {
        padding: 50px 24px;
    }
    .sch-cta-btns {
        flex-direction: column;
        width: 100%;
    }
    .sch-btn-gold, .sch-btn-outline {
        width: 100%;
    }
}

@media (max-width: 480px) {
    .sch-impact-grid {
        grid-template-columns: 1fr;
    }
}

/* Reduced Motion */
@media (prefers-reduced-motion: reduce) {
    .sch-who-card,
    .sch-step-card,
    .sch-vert-card,
    .sch-impact-card,
    .sch-btn-apply,
    .sch-btn-gold,
    .sch-btn-outline {
        transition: none !important;
        transform: none !important;
    }
}
</style>


<!-- ========================================================= -->
<!-- 1. PAGE HEADER -->
<!-- ========================================================= -->
<section class="page-header"
    data-background="{{ asset('images/banners/upsc1.avif') }}"
    style="background-image: url('{{ asset('images/banners/upsc1.avif') }}');">

    <div class="overlay"></div>

    <div class="container">
        <div class="page-header-content">
            <h1 class="title">Scholarship &amp; Fellowship Programme</h1>
            <h4 class="sub-title">
                <a class="home" href="{{ url('/') }}">Home</a>
                <span class="icon">/</span>
                <a class="inner-page" href="{{ url('scholarships') }}">Scholarship</a>
            </h4>
        </div>
    </div>
</section>

<div class="sch-page">

    <!-- ========================================================= -->
    <!-- 2. QUICK HIGHLIGHTS STRIP -->
    <!-- ========================================================= -->
    <section class="sch-strip">
        <div class="container">
            <div class="sch-strip-grid">
                <div class="sch-strip-item wow fade-in-bottom" data-wow-delay="100ms">
                    <div class="sch-strip-icon"><i class="fa fa-balance-scale"></i></div>
                    <div class="sch-strip-text">
                        <h5>100% Merit &amp; Need-Based</h5>
                        <p>Objective evaluation for every candidate</p>
                    </div>
                </div>

                <div class="sch-strip-item wow fade-in-bottom" data-wow-delay="200ms">
                    <div class="sch-strip-icon"><i class="fa fa-th-large"></i></div>
                    <div class="sch-strip-text">
                        <h5>8 Specialised Pathways</h5>
                        <p>Tailored criteria for diverse backgrounds</p>
                    </div>
                </div>

                <div class="sch-strip-item wow fade-in-bottom" data-wow-delay="300ms">
                    <div class="sch-strip-icon"><i class="fa fa-check-circle"></i></div>
                    <div class="sch-strip-text">
                        <h5>Zero Application Fee</h5>
                        <p>Completely free, accessible process</p>
                    </div>
                </div>

                <div class="sch-strip-item wow fade-in-bottom" data-wow-delay="400ms">
                    <div class="sch-strip-icon"><i class="fa fa-graduation-cap"></i></div>
                    <div class="sch-strip-text">
                        <h5>Comprehensive Support</h5>
                        <p>Academic tuition, mentoring &amp; coaching</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- ========================================================= -->
    <!-- 3. OUR COMMITMENT -->
    <!-- ========================================================= -->
    <section class="sch-commit" id="commitment">
        <div class="container">
            <div class="sch-commit-grid">

                <!-- Left Column -->
                <div class="sch-commit-info wow fade-in-bottom" data-wow-delay="200ms">
                    <span class="sch-eyebrow"><i class="fa fa-heart"></i> Our Commitment</span>
                    <h2 class="sch-section-head h2" style="font-size:36px; font-weight:800; color:var(--ed-color-heading-primary, #16243A); margin-bottom:18px;">
                        Every learner deserves a fair shot at their future.
                    </h2>
                    <p class="sch-commit-lead">
                        Cost, geography and circumstance should never decide who gets to learn, prepare and lead.
                    </p>
                    <p class="sch-commit-desc">
                        Our scholarship programmes exist to close the opportunity gap — connecting deserving students to top-tier faculty, comprehensive curriculum, personal mentorship, and the complete SAMBHAVAM Academy ecosystem.
                    </p>

                    <div class="sch-commit-points">
                        <div class="sch-commit-pill">
                            <div class="sch-commit-pill-icon"><i class="fa fa-lightbulb-o"></i></div>
                            <div>
                                <b>Possibility First</b>
                                <span>Every individual has the latent potential to grow, lead, and transform their community.</span>
                            </div>
                        </div>

                        <div class="sch-commit-pill">
                            <div class="sch-commit-pill-icon"><i class="fa fa-users"></i></div>
                            <div>
                                <b>Inclusive Outreach</b>
                                <span>Equitable opportunities spanning rural pockets, first-generation aspirants, and underserved communities.</span>
                            </div>
                        </div>

                        <div class="sch-commit-pill">
                            <div class="sch-commit-pill-icon"><i class="fa fa-rocket"></i></div>
                            <div>
                                <b>Measurable Impact</b>
                                <span>Tracked academic progression, holistic mentorship, and career milestones.</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Column: Leadership Quote Panel -->
                <div class="sch-commit-right wow fade-in-bottom" data-wow-delay="350ms">
                    <div class="sch-quote-panel">
                        <div class="sch-quote-mark"><i class="fa fa-quote-left"></i></div>
                        <p class="sch-quote-text">
                            "Potential shouldn't have to wait for circumstance to catch up. Our mission at SAMBHAVAM is to bridge that gap — empowering one ambitious learner at a time with world-class education and dignified opportunity."
                        </p>
                        <div class="sch-quote-author">
                            <div class="sch-quote-avatar"><i class="fa fa-user"></i></div>
                            <div class="sch-quote-meta">
                                <h5>Dr. Madhukar Sanap</h5>
                                <span>Founder &amp; Mentor, SAMBHAVAM Academy</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <!-- ========================================================= -->
    <!-- 4. WHO WE SUPPORT (8 DEDICATED PATHWAYS) -->
    <!-- ========================================================= -->
    <section class="sch-who" id="pathways">
        <div class="container">

            <div class="sch-section-head text-center wow fade-in-bottom" data-wow-delay="200ms">
                <span class="sch-eyebrow gold"><i class="fa fa-star"></i> Who Our Scholarships Support</span>
                <h2>Eight Pathways. One Shared Belief in Potential.</h2>
                <p>We provide merit-cum-need financial assistance across diverse categories so talent finds its true trajectory.</p>
            </div>

            @php
            $whoCards = [
                [
                    'n' => '01',
                    'icon' => 'fa-graduation-cap',
                    'title' => 'Academic Excellence',
                    'desc' => 'Meritorious students demonstrating exemplary academic performance, discipline, and a strong ambition to excel.',
                    'accent' => 'blue'
                ],
                [
                    'n' => '02',
                    'icon' => 'fa-bullseye',
                    'title' => 'Competitive Exams Focus',
                    'desc' => 'Dedicated aspirants rigorously preparing for Civil Services (UPSC/MPSC), Engineering (JEE/MHT-CET), and Medical (NEET-UG).',
                    'accent' => 'gold'
                ],
                [
                    'n' => '03',
                    'icon' => 'fa-female',
                    'title' => "Girls' Education & Leadership",
                    'desc' => 'Empowering ambitious girls and young women to break barriers and pursue higher academic and public leadership goals.',
                    'accent' => 'blue'
                ],
                [
                    'n' => '04',
                    'icon' => 'fa-tree',
                    'title' => 'Rural & Semi-Urban Talent',
                    'desc' => 'Bridging the urban-rural divide by extending top-quality guidance and resources to students in tier-2, tier-3, and village areas.',
                    'accent' => 'gold'
                ],
                [
                    'n' => '05',
                    'icon' => 'fa-wheelchair',
                    'title' => 'Persons with Disabilities',
                    'desc' => 'Inclusive, supportive learning environments ensuring capability, not physical barriers, defines student outcomes.',
                    'accent' => 'blue'
                ],
                [
                    'n' => '06',
                    'icon' => 'fa-book',
                    'title' => 'First-Generation Learners',
                    'desc' => 'Backing trailblazers who are the first in their families to venture into higher education and professional examinations.',
                    'accent' => 'gold'
                ],
                [
                    'n' => '07',
                    'icon' => 'fa-child',
                    'title' => 'Orphaned & Vulnerable Children',
                    'desc' => 'Extending emotional stability, structured mentorship, and unconditional academic backing to youth in difficult circumstances.',
                    'accent' => 'blue'
                ],
                [
                    'n' => '08',
                    'icon' => 'fa-trophy',
                    'title' => 'Exceptional Grassroots Talent',
                    'desc' => 'Recognising young innovators, sports achievers, and community changemakers demonstrating rare creative and leadership promise.',
                    'accent' => 'gold'
                ]
            ];
            @endphp

            <div class="sch-who-grid">
                @foreach ($whoCards as $i => $card)
                <div class="sch-who-card {{ $card['accent'] === 'gold' ? 'accent-gold' : '' }} wow fade-in-bottom" data-wow-delay="{{ 150 + ($i * 70) }}ms">
                    <div class="sch-who-card-top">
                        <div class="sch-who-icon">
                            <i class="fa {{ $card['icon'] }}"></i>
                        </div>
                        <span class="sch-who-num">{{ $card['n'] }}</span>
                    </div>
                    <h3>{{ $card['title'] }}</h3>
                    <p>{{ $card['desc'] }}</p>
                </div>
                @endforeach
            </div>

        </div>
    </section>


    <!-- ========================================================= -->
    <!-- 5. DUAL ACTION HUB: APPLY & SUPPORT -->
    <!-- ========================================================= -->
    <section class="sch-action" id="apply">
        <div class="container">
            <div class="sch-action-grid">

                <!-- 1. Student Application Portal (Left) -->
                <div class="sch-form-card wow fade-in-bottom" data-wow-delay="200ms">
                    <span class="sch-form-badge"><i class="fa fa-bolt"></i> Fast 60-Sec Application</span>

                    <span class="sch-eyebrow" style="margin-top: 12px;"><i class="fa fa-graduation-cap"></i> For Aspiring Students</span>
                    <h2>Apply for a Scholarship</h2>
                    <p>Share your academic targets and circumstances — our senior academic counselling team will personally evaluate your application and guide you through documentation and onboarding.</p>

                    <div class="sch-trust-strip">
                        <span class="sch-trust-tag"><i class="fa fa-check-circle"></i> Zero Application Fee</span>
                        <span class="sch-trust-tag"><i class="fa fa-shield"></i> 100% Confidential</span>
                        <span class="sch-trust-tag"><i class="fa fa-clock-o"></i> 24–48h Review</span>
                    </div>

                    <form class="sch-action-form" id="scholarshipApplyForm">
                        <div class="sch-form-row">
                            <div class="sch-field-group">
                                <label class="sch-field-label" for="applyName">
                                    <i class="fa fa-user"></i> Full Name <span class="sch-req">*</span>
                                </label>
                                <input type="text" id="applyName" name="name" class="sch-input" placeholder="e.g. Rahul Sharma" required>
                            </div>

                            <div class="sch-field-group">
                                <label class="sch-field-label" for="applyPhone">
                                    <i class="fa fa-phone"></i> Mobile Number (WhatsApp) <span class="sch-req">*</span>
                                </label>
                                <input type="tel" id="applyPhone" name="phone" class="sch-input" placeholder="e.g. +91 98765 43210" required>
                            </div>
                        </div>

                        <div class="sch-form-row">
                            <div class="sch-field-group">
                                <label class="sch-field-label" for="applyVertical">
                                    <i class="fa fa-university"></i> Target Academic Stream <span class="sch-req">*</span>
                                </label>
                                <select id="applyVertical" name="vertical" class="sch-select" required>
                                    <option value="">Select Target Academic Vertical *</option>
                                    <option value="Civil Services (UPSC & MPSC)">Civil Services (UPSC &amp; MPSC)</option>
                                    <option value="Engineering (JEE Main & Advanced / MHT-CET)">Engineering (JEE / MHT-CET)</option>
                                    <option value="Medical (NEET-UG)">Medical (NEET-UG)</option>
                                    <option value="School Foundation (Classes VI-X & Olympiads)">School Foundation (Classes VI–X)</option>
                                    <option value="Global Leadership & Life Skills">Global Leadership &amp; Life Skills</option>
                                    <option value="Career Advisory & Guidance">Career Advisory &amp; Guidance</option>
                                </select>
                            </div>

                            <div class="sch-field-group">
                                <label class="sch-field-label" for="applyCategory">
                                    <i class="fa fa-th-list"></i> Scholarship Pathway <span class="sch-req">*</span>
                                </label>
                                <select id="applyCategory" name="category" class="sch-select" required>
                                    <option value="">Select Scholarship Pathway *</option>
                                    <option value="Academic Merit & Excellence">Academic Merit &amp; Excellence</option>
                                    <option value="Civil Services Aspirant">Civil Services Aspirant</option>
                                    <option value="Girls' Education & Leadership">Girls' Education &amp; Leadership</option>
                                    <option value="Rural & Semi-Urban Talent">Rural &amp; Semi-Urban Talent</option>
                                    <option value="Persons with Disabilities (PwD)">Persons with Disabilities (PwD)</option>
                                    <option value="First-Generation Learner">First-Generation Learner</option>
                                    <option value="Orphaned & Vulnerable Youth">Orphaned &amp; Vulnerable Youth</option>
                                    <option value="Grassroots & Need-Cum-Merit">Grassroots &amp; Need-Cum-Merit</option>
                                </select>
                            </div>
                        </div>

                        <div class="sch-field-group">
                            <label class="sch-field-label" for="applyMessage">
                                <i class="fa fa-pencil-square-o"></i> Academic Goals &amp; Financial Need Details <span class="sch-req">*</span>
                            </label>
                            <textarea id="applyMessage" name="message" class="sch-textarea" rows="3" placeholder="Briefly describe your current academic background, dream goal, and why scholarship assistance will help you achieve it..." required></textarea>
                        </div>

                        <button type="submit" class="sch-btn-apply" id="schSubmitBtn">
                            <span>Submit Application via WhatsApp</span>
                            <i class="fa fa-whatsapp"></i>
                        </button>

                        <div class="sch-form-notice">
                            <i class="fa fa-lock"></i>
                            <span>100% Confidential &amp; Free. Direct one-to-one mentorship counselling.</span>
                        </div>
                    </form>
                </div>

                <!-- 2. Supporter & CSR Hub (Right) -->
                <div class="sch-donor-card wow fade-in-bottom" data-wow-delay="350ms">
                    <div>
                        <span class="sch-eyebrow gold" style="background: rgba(229, 173, 69, 0.2); color: #f1c66d;">
                            <i class="fa fa-handshake-o"></i> For Donors &amp; CSR Partners
                        </span>
                        <h2>Empower a Deserving Learner</h2>
                        <p>Sponsor a dedicated student's full academic seat, fund entrance exam preparation, or create institutional-scale impact through corporate CSR alliances.</p>

                        <div class="sch-donor-options">
                            <div class="sch-donor-item">
                                <i class="fa fa-check-circle"></i>
                                <span><b>Sponsor a Seat:</b> Direct tuition &amp; mentorship grant for one learner</span>
                            </div>
                            <div class="sch-donor-item">
                                <i class="fa fa-check-circle"></i>
                                <span><b>Corporate CSR:</b> Cohort-level sponsorships with verifiable impact reporting</span>
                            </div>
                            <div class="sch-donor-item">
                                <i class="fa fa-check-circle"></i>
                                <span><b>Memorial Fellowships:</b> Named scholarships honouring visionary leaders</span>
                            </div>
                        </div>
                    </div>

                    <div>
                        <a href="mailto:sambhavamfoundation@gmail.com?subject=CSR%20and%20Scholarship%20Partnership" class="sch-btn-donor">
                            <span>Partner With Us / Support</span>
                            <i class="fa fa-arrow-right"></i>
                        </a>

                        <div class="sch-donor-contacts">
                            <a href="mailto:sambhavamfoundation@gmail.com">
                                <i class="fa fa-envelope"></i>
                                <span>sambhavamfoundation@gmail.com</span>
                            </a>
                            <a href="tel:+912249789869">
                                <i class="fa fa-phone"></i>
                                <span>+91 22 4978 9869</span>
                            </a>
                            <a href="tel:+918850332700">
                                <i class="fa fa-mobile"></i>
                                <span>+91 88503 32700</span>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <!-- ========================================================= -->
    <!-- 6. HOW IT WORKS (ROADMAP TIMELINE) -->
    <!-- ========================================================= -->
    <section class="sch-how" id="process">
        <div class="container">

            <div class="sch-section-head text-center wow fade-in-bottom" data-wow-delay="200ms">
                <span class="sch-eyebrow teal"><i class="fa fa-compass"></i> Application Roadmap</span>
                <h2>From Application to Opportunity in Four Steps</h2>
                <p>A transparent, structured, and supportive onboarding process built to respect your time and ambition.</p>
            </div>

            <div class="sch-how-grid">

                <div class="sch-step-card wow fade-in-bottom" data-wow-delay="150ms">
                    <div class="sch-step-top">
                        <div class="sch-step-badge">01</div>
                        <span class="sch-step-time">Day 1</span>
                    </div>
                    <h3>Share Your Profile</h3>
                    <p>Fill out the quick scholarship application form with your academic details, target exam, and background.</p>
                </div>

                <div class="sch-step-card wow fade-in-bottom" data-wow-delay="250ms">
                    <div class="sch-step-top">
                        <div class="sch-step-badge">02</div>
                        <span class="sch-step-time">Days 2–3</span>
                    </div>
                    <h3>Eligibility &amp; Evaluation</h3>
                    <p>Our academic board assesses applications objectively against merit, household circumstances, and commitment.</p>
                </div>

                <div class="sch-step-card wow fade-in-bottom" data-wow-delay="350ms">
                    <div class="sch-step-top">
                        <div class="sch-step-badge">03</div>
                        <span class="sch-step-time">Days 4–5</span>
                    </div>
                    <h3>Mentor Conversation</h3>
                    <p>Shortlisted applicants engage in a 1-on-1 discussion with faculty to chart out the optimal learning roadmap.</p>
                </div>

                <div class="sch-step-card wow fade-in-bottom" data-wow-delay="450ms">
                    <div class="sch-step-top">
                        <div class="sch-step-badge">04</div>
                        <span class="sch-step-time">Day 7</span>
                    </div>
                    <h3>Onboarding &amp; Launch</h3>
                    <p>Recipients are officially inducted into SAMBHAVAM Academy with study materials, test series, and mentorship.</p>
                </div>

            </div>

        </div>
    </section>


    <!-- ========================================================= -->
    <!-- 7. ACADEMIC VERTICALS COVERED -->
    <!-- ========================================================= -->
    <section class="sch-vert" id="programmes">
        <div class="container">

            <div class="sch-section-head text-center wow fade-in-bottom" data-wow-delay="200ms">
                <span class="sch-eyebrow"><i class="fa fa-book"></i> Comprehensive Coverage</span>
                <h2>Where a SAMBHAVAM Scholarship Can Take You</h2>
                <p>Financial assistance applies to all premier academic streams taught by leading national faculty.</p>
            </div>

            <div class="sch-vert-grid">

                <!-- 01: Civil Services -->
                <div class="sch-vert-card wow fade-in-bottom" data-wow-delay="150ms">
                    <div class="sch-vert-icon"><i class="fa fa-university"></i></div>
                    <h3>Civil Services &amp; Governance</h3>
                    <p>Comprehensive foundation and test series guidance for UPSC Civil Services &amp; MPSC state examinations under experienced bureaucrat mentors.</p>
                    <div class="sch-vert-tags">
                        <span class="sch-vert-tag">UPSC GS &amp; CSAT</span>
                        <span class="sch-vert-tag">MPSC Rajyaseva</span>
                        <span class="sch-vert-tag">Interview Mentorship</span>
                    </div>
                </div>

                <!-- 02: Engineering -->
                <div class="sch-vert-card wow fade-in-bottom" data-wow-delay="250ms">
                    <div class="sch-vert-icon"><i class="fa fa-cogs"></i></div>
                    <h3>Engineering &amp; Technology</h3>
                    <p>Rigorous coaching for JEE Main, JEE Advanced, and MHT-CET with in-depth concept clarity, doubt-clearing, and mock tests.</p>
                    <div class="sch-vert-tags">
                        <span class="sch-vert-tag">IIT-JEE (Main + Adv)</span>
                        <span class="sch-vert-tag">MHT-CET</span>
                        <span class="sch-vert-tag">Physics/Chem/Maths</span>
                    </div>
                </div>

                <!-- 03: Medical -->
                <div class="sch-vert-card wow fade-in-bottom" data-wow-delay="350ms">
                    <div class="sch-vert-icon"><i class="fa fa-user-md"></i></div>
                    <h3>Medical &amp; Health Sciences</h3>
                    <p>Specialised preparation for NEET-UG with extensive NCERT decoding, topic-wise assessments, and biological diagram mastery.</p>
                    <div class="sch-vert-tags">
                        <span class="sch-vert-tag">NEET-UG</span>
                        <span class="sch-vert-tag">NCERT Mastery</span>
                        <span class="sch-vert-tag">All-India Test Series</span>
                    </div>
                </div>

                <!-- 04: School Foundation -->
                <div class="sch-vert-card wow fade-in-bottom" data-wow-delay="450ms">
                    <div class="sch-vert-icon"><i class="fa fa-graduation-cap"></i></div>
                    <h3>School Foundation (VI–X)</h3>
                    <p>Strong core building in Science and Mathematics for school students, coupled with early Olympiad and NTSE readiness.</p>
                    <div class="sch-vert-tags">
                        <span class="sch-vert-tag">Classes 6 to 10</span>
                        <span class="sch-vert-tag">Olympiads &amp; NTSE</span>
                        <span class="sch-vert-tag">Board Preparation</span>
                    </div>
                </div>

                <!-- 05: Leadership & Life Skills -->
                <div class="sch-vert-card wow fade-in-bottom" data-wow-delay="550ms">
                    <div class="sch-vert-icon"><i class="fa fa-compass"></i></div>
                    <h3>Leadership &amp; Life Skills</h3>
                    <p>Holistic training in public speaking, critical reasoning, environmental stewardship, digital literacy, and civic leadership.</p>
                    <div class="sch-vert-tags">
                        <span class="sch-vert-tag">Communication</span>
                        <span class="sch-vert-tag">Design Thinking</span>
                        <span class="sch-vert-tag">Civic Leadership</span>
                    </div>
                </div>

                <!-- 06: Career Advisory -->
                <div class="sch-vert-card wow fade-in-bottom" data-wow-delay="650ms">
                    <div class="sch-vert-icon"><i class="fa fa-briefcase"></i></div>
                    <h3>Career Advisory &amp; Pathways</h3>
                    <p>Continuous career mapping, college admission counselling, and mentorship sessions with industry and civil service experts.</p>
                    <div class="sch-vert-tags">
                        <span class="sch-vert-tag">Stream Guidance</span>
                        <span class="sch-vert-tag">Profile Building</span>
                        <span class="sch-vert-tag">Higher Education</span>
                    </div>
                </div>

            </div>

        </div>
    </section>


    <!-- ========================================================= -->
    <!-- 8. IMPACT PILLARS -->
    <!-- ========================================================= -->
    <section class="sch-impact" id="impact">
        <div class="container">

            <div class="sch-section-head text-center wow fade-in-bottom" data-wow-delay="200ms">
                <span class="sch-eyebrow teal"><i class="fa fa-line-chart"></i> Measurable Transformation</span>
                <h2>Accountable Impact, Proven Outcomes</h2>
                <p>We gauge success by how significantly our scholars progress in academic confidence, career prospects, and leadership contribution.</p>
            </div>

            <div class="sch-impact-grid">
                <div class="sch-impact-card wow fade-in-bottom" data-wow-delay="100ms">
                    <div class="sch-impact-icon"><i class="fa fa-bar-chart"></i></div>
                    <h4>Academic Growth</h4>
                    <p>Consistent percentile jump in mock examinations</p>
                </div>

                <div class="sch-impact-card wow fade-in-bottom" data-wow-delay="200ms">
                    <div class="sch-impact-icon"><i class="fa fa-check-square-o"></i></div>
                    <h4>Exam Readiness</h4>
                    <p>Comprehensive coverage of syllabi &amp; revision tests</p>
                </div>

                <div class="sch-impact-card wow fade-in-bottom" data-wow-delay="300ms">
                    <div class="sch-impact-icon"><i class="fa fa-users"></i></div>
                    <h4>Demographic Equity</h4>
                    <p>High participation from rural &amp; female scholars</p>
                </div>

                <div class="sch-impact-card wow fade-in-bottom" data-wow-delay="400ms">
                    <div class="sch-impact-icon"><i class="fa fa-comments-o"></i></div>
                    <h4>Continuous Mentoring</h4>
                    <p>Dedicated 1-on-1 advisor sessions every month</p>
                </div>

                <div class="sch-impact-card wow fade-in-bottom" data-wow-delay="500ms">
                    <div class="sch-impact-icon"><i class="fa fa-trophy"></i></div>
                    <h4>Lifelong Impact</h4>
                    <p>Alumni community committed to giving back</p>
                </div>
            </div>

        </div>
    </section>


    <!-- ========================================================= -->
    <!-- 9. FINAL CALL TO ACTION -->
    <!-- ========================================================= -->
    <section class="sch-cta-section container my-5">
        <div class="sch-cta-box wow fade-in-bottom" data-wow-delay="200ms">
            <div class="sch-cta-content">

                <div class="sch-cta-badge">
                    <i class="fa fa-bolt"></i>
                    <span>Turn Potential Into Opportunity</span>
                </div>

                <h2>Your Transformation Begins Here.</h2>

                <p>
                    Whether you are an aspiring student ready to pursue your dream examination or a supporter seeking to empower the next generation of leaders, SAMBHAVAM welcomes you.
                </p>

                <div class="sch-cta-btns">
                    <a href="#apply" class="sch-btn-gold">
                        <span>Apply for a Scholarship</span>
                        <i class="fa fa-arrow-right"></i>
                    </a>

                    <a href="mailto:sambhavamfoundation@gmail.com?subject=Support%20a%20Scholarship%20Learner" class="sch-btn-outline">
                        <span>Become a Supporter / Donor</span>
                        <i class="fa fa-handshake-o"></i>
                    </a>
                </div>

                <div class="sch-cta-contact">
                    <a href="mailto:sambhavamfoundation@gmail.com">
                        <i class="fa fa-envelope"></i>
                        <span>sambhavamfoundation@gmail.com</span>
                    </a>
                    <a href="tel:+912249789869">
                        <i class="fa fa-phone"></i>
                        <span>+91 22 4978 9869</span>
                    </a>
                    <a href="tel:+918850332700">
                        <i class="fa fa-mobile"></i>
                        <span>+91 88503 32700</span>
                    </a>
                </div>

            </div>
        </div>
    </section>

</div>


<!-- ========================================================= -->
<!-- 10. JAVASCRIPT: WHATSAPP APPLICATION & SCROLL ANIMATIONS -->
<!-- ========================================================= -->
<script>
document.addEventListener('DOMContentLoaded', function () {
    var applyForm = document.getElementById('scholarshipApplyForm');
    if (applyForm) {
        applyForm.addEventListener('submit', function (e) {
            e.preventDefault();

            var name = document.getElementById('applyName').value.trim();
            var phone = document.getElementById('applyPhone').value.trim();
            var vertical = document.getElementById('applyVertical').value;
            var category = document.getElementById('applyCategory') ? document.getElementById('applyCategory').value : '';
            var message = document.getElementById('applyMessage').value.trim();

            if (!name || !phone || !vertical || !message) {
                alert('Please fill in all mandatory fields.');
                return;
            }

            var btn = document.getElementById('schSubmitBtn');
            var originalHtml = btn.innerHTML;
            btn.innerHTML = '<span>Opening WhatsApp...</span> <i class="fa fa-spinner fa-spin"></i>';

            var body =
                "🎓 *SAMBHAVAM SCHOLARSHIP APPLICATION*%0A%0A" +
                "👤 *Applicant Name:* " + encodeURIComponent(name) + "%0A" +
                "📱 *Mobile (WhatsApp):* " + encodeURIComponent(phone) + "%0A" +
                "🎯 *Academic Stream:* " + encodeURIComponent(vertical) + "%0A" +
                (category ? ("🏅 *Scholarship Pathway:* " + encodeURIComponent(category) + "%0A") : "") +
                "📝 *Goals & Financial Need:*%0A" + encodeURIComponent(message) + "%0A%0A" +
                "Please review my scholarship application and guide me on the next steps.";

            setTimeout(function () {
                window.open("https://wa.me/919967100926?text=" + body, '_blank');
                btn.innerHTML = originalHtml;
                applyForm.reset();
                if (window.jQuery && window.jQuery.fn.niceSelect) {
                    window.jQuery('#applyVertical, #applyCategory').niceSelect('update');
                }
            }, 600);
        });
    }
});
</script>

@endsection