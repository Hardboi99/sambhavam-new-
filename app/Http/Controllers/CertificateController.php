<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CertificateController extends Controller
{
    public function index()
    {
        $certificates = [
            [
                'slug' => '12a',
                'title' => '12A Registration Certificate',
                'short_title' => '12A Registration',
                'badge' => 'Statutory Income Tax Exemption',
                'authority' => 'Income Tax Department, Ministry of Finance, Govt. of India',
                'form' => 'Form No. 10AC (Rule 17A / 11AA / 2C)',
                'reg_label' => 'Unique Registration Number (URN)',
                'reg_number' => 'ABSCS7736HE20251',
                'din' => 'ABSCS7736HE2025101',
                'section' => 'Section 12A(1)(ac)(i) / Section 12AB of the Income Tax Act, 1961',
                'pan' => 'ABSCS7736H',
                'issue_date' => '23-02-2026',
                'validity' => 'Assessment Years 2026-27 to 2028-29',
                'status' => 'Verified & Active',
                'color' => '#1a56db',
                'icon' => 'fa-certificate',
                'preview_image' => 'images/certificates/12_A_CERTIFICATE_SAMBHAVAM_FOUNDATION.png',
                'pdf_file' => 'images/OneDrive_1_9-21-2026/12 A CERTIFICATE SAMBHAVAM FOUNDATION.pdf',
                'description' => 'Grants Sambhavam Foundation statutory non-profit tax exemption on surplus and donations under Section 12A of the Income Tax Act, 1961.',
                'highlights' => [
                    'Exempts foundation operational revenue and program funds from income tax',
                    'Full transparency compliance under new Faceless Assessment Scheme',
                    'Mandatory prerequisite for receiving institutional philanthropic grants'
                ],
                'verify_url' => 'https://www.incometax.gov.in/'
            ],
            [
                'slug' => '80g',
                'title' => '80G Tax Exemption Certificate',
                'short_title' => '80G Tax Exemption',
                'badge' => '50% Donor Tax Deduction',
                'authority' => 'Income Tax Department, Ministry of Finance, Govt. of India',
                'form' => 'Form No. 10AC (Rule 17A / 11AA / 2C)',
                'reg_label' => 'Unique Registration Number (URN)',
                'reg_number' => 'ABSCS7736HF20261',
                'din' => 'ABSCS7736HF2026101',
                'section' => 'Clause (iv) of first proviso to subsection (5) of Section 80G',
                'pan' => 'ABSCS7736H',
                'issue_date' => '23-02-2026',
                'validity' => 'Assessment Years 2026-27 to 2028-29',
                'status' => 'Verified & Active',
                'color' => '#0d9488',
                'icon' => 'fa-shield',
                'preview_image' => 'images/certificates/80_G_CERTIFICATE_SAMBHAVAM_FOUNDATION.png',
                'pdf_file' => 'images/OneDrive_1_9-21-2026/80 G CERTIFICATE SAMBHAVAM FOUNDATION.pdf',
                'description' => 'Enables individual and corporate donors in India to claim 50% tax deduction on financial contributions to Sambhavam Foundation under Section 80G(5).',
                'highlights' => [
                    '50% tax deduction on taxable income for eligible donors',
                    'Instant 80G tax receipt generation with unique URN reference',
                    'Empowers philanthropic giving for educational & social development programs'
                ],
                'verify_url' => 'https://www.incometax.gov.in/'
            ],
            [
                'slug' => 'mca-incorporation',
                'title' => 'Certificate of Incorporation (Section 8 Non-Profit)',
                'short_title' => 'Section 8 Incorporation',
                'badge' => 'Ministry of Corporate Affairs',
                'authority' => 'Central Registration Centre, Ministry of Corporate Affairs, Govt. of India',
                'form' => 'Form MGT-7 / INC-11 (Companies Act, 2013)',
                'reg_label' => 'Corporate Identity Number (CIN)',
                'reg_number' => 'U88900MH2026NPL468368',
                'din' => 'Registration No: 468368',
                'section' => 'Section 8 of the Companies Act, 2013 (Non-Profit Company)',
                'pan' => 'ABSCS7736H',
                'issue_date' => '13-02-2026',
                'validity' => 'Perpetual Statutory Entity',
                'status' => 'Verified & Active',
                'color' => '#059669',
                'icon' => 'fa-building',
                'preview_image' => 'images/certificates/CERTIFICATE_SAMBHAVAM_FOUNDATION.png',
                'pdf_file' => 'images/OneDrive_1_9-21-2026/CERTIFICATE SAMBHAVAM FOUNDATION.pdf',
                'description' => 'Official certificate confirming Sambhavam Foundation is incorporated as a recognized, legally accountable Section 8 Non-Profit Company with limited liability.',
                'highlights' => [
                    'Highest standard of corporate governance and statutory oversight in India',
                    'Audited financial statements filed annually with ROC Mumbai',
                    'Legal entity authorized to enter into MOUs, public-private partnerships & institutional contracts'
                ],
                'verify_url' => 'https://www.mca.gov.in/'
            ],
            [
                'slug' => 'csr-1',
                'title' => 'CSR-1 Registration Certificate',
                'short_title' => 'CSR-1 Registration',
                'badge' => 'Approved for Corporate CSR Funding',
                'authority' => 'Office of the Registrar of Companies, Ministry of Corporate Affairs (ROC Mumbai II)',
                'form' => 'Form CSR-1 (Rule 4(2) of Companies (CSR Policy) Rules, 2014)',
                'reg_label' => 'CSR Registration Number',
                'reg_number' => 'CSR00109460',
                'din' => 'Service Request Number (SRN): AC2931533',
                'section' => 'Section 135 of the Companies Act, 2013 & Schedule VII',
                'pan' => 'ABSCS7736H',
                'issue_date' => '16-02-2026',
                'validity' => 'Permanent Approval for CSR Undertakings',
                'status' => 'Verified & Active',
                'color' => '#ea580c',
                'icon' => 'fa-briefcase',
                'preview_image' => 'images/certificates/CSR_1_CERTIFICATE___SAMBHAVAM_FOUNDATION.png',
                'pdf_file' => 'images/OneDrive_1_9-21-2026/CSR 1 CERTIFICATE - SAMBHAVAM FOUNDATION.pdf',
                'description' => 'Mandatory statutory authorization from the Ministry of Corporate Affairs enabling Sambhavam Foundation to partner with corporates for CSR fund implementation.',
                'highlights' => [
                    'Eligible to receive direct Corporate Social Responsibility (CSR) grant funds',
                    'Aligined with Schedule VII mandates (Education, Skilling, Sustainable Livelihoods)',
                    'Pre-cleared for CSR committee audits and statutory MCA reporting'
                ],
                'verify_url' => 'https://www.mca.gov.in/'
            ],
            [
                'slug' => 'darpan',
                'title' => 'NGO Darpan Registration',
                'short_title' => 'NITI Aayog NGO Darpan',
                'badge' => 'Government of India Accreditation',
                'authority' => 'NITI Aayog, Government of India',
                'form' => 'NGO Darpan Registry Profile',
                'reg_label' => 'Darpan Unique Identification ID',
                'reg_number' => 'MH/2026/0997299',
                'din' => 'State: Maharashtra | Registered Type: Section 8 Company',
                'section' => 'Central Government Voluntary Action Network (VANI / NITI Aayog)',
                'pan' => 'ABSCS7736H',
                'issue_date' => '16-02-2026',
                'validity' => 'Active Central Government Directory Record',
                'status' => 'Verified & Active',
                'color' => '#1a56db',
                'icon' => 'fa-id-card',
                'preview_image' => 'images/certificates/DARPAN_ID_Profile_Sambhavam_Foundation.png',
                'pdf_file' => 'images/OneDrive_1_9-21-2026/DARPAN ID Profile Sambhavam Foundation.pdf',
                'description' => 'Empanelled with NITI Aayog’s NGO Darpan database, linking Sambhavam Foundation directly with Ministries, Departments, and Central Government schemes.',
                'highlights' => [
                    'Official gateway for Central and State Government project grants',
                    'Publicly verifiable track record across all Union Ministries',
                    'Enables institutional collaborations with public-sector universities and academies'
                ],
                'verify_url' => 'https://ngodarpan.gov.in/'
            ],
            [
                'slug' => 'e-anudaan',
                'title' => 'E-Anudaan Accreditation Certificate',
                'short_title' => 'E-Anudaan Certified',
                'badge' => 'Ministry of Social Justice & Empowerment',
                'authority' => 'Ministry of Social Justice and Empowerment, Government of India',
                'form' => 'E-Anudaan Portal Organization Enrollment Certificate',
                'reg_label' => 'Organization ID',
                'reg_number' => 'MH/00053156',
                'din' => 'Portal Profile: sambhavamfoundation2026@gmail.com',
                'section' => 'Central Sector Scheme for Grant-in-Aid to Voluntary Organizations',
                'pan' => 'ABSCS7736H',
                'issue_date' => '2026',
                'validity' => 'Active Central Grant Portal Registration',
                'status' => 'Verified & Active',
                'color' => '#0d9488',
                'icon' => 'fa-handshake-o',
                'preview_image' => 'images/certificates/E_ANUDAAN_CERTIFICATE___SAMBHAVAM_FOUNDATION.png',
                'pdf_file' => 'images/OneDrive_1_9-21-2026/E-ANUDAAN CERTIFICATE - SAMBHAVAM FOUNDATION.pdf',
                'description' => 'Accreditation certificate on the Ministry of Social Justice & Empowerment e-Anudaan portal for executing social welfare and inclusive development programs.',
                'highlights' => [
                    'Direct submission and monitoring of proposals under Ministry Grant-in-Aid schemes',
                    'Transparent fund tracking and beneficiary impact reporting',
                    'Dedicated to inclusive empowerment, educational access, and marginalized upliftment'
                ],
                'verify_url' => 'https://ngogrants-msje.gov.in/'
            ],
            [
                'slug' => 'iso-9001',
                'title' => 'ISO 9001:2015 Quality Management System (QMS)',
                'short_title' => 'ISO 9001:2015 Certified',
                'badge' => 'International Quality Benchmark (IAF Accredited)',
                'authority' => 'Royal Assessments Pvt. Ltd. (Accredited by IAF & EGAC - CAB #119012)',
                'form' => 'Quality Management Systems ISO 9001:2015',
                'reg_label' => 'Certificate Number',
                'reg_number' => 'E20260243312',
                'din' => 'Reference No: QC/IV/15/103332',
                'section' => 'Scope: Educational, Vocational, Charitable, and Community Development Services',
                'pan' => 'ABSCS7736H',
                'issue_date' => '19-02-2026',
                'validity' => 'Valid until 18-02-2029 (Surveillance Audit 1: 18-02-2027)',
                'status' => 'Verified & Active',
                'color' => '#ea580c',
                'icon' => 'fa-check-circle',
                'preview_image' => 'images/certificates/ISO___QMS_SAMBHAVAM_FOUNDATION.png',
                'pdf_file' => 'images/OneDrive_1_9-21-2026/ISO - QMS SAMBHAVAM FOUNDATION .pdf',
                'description' => 'Internationally certified Quality Management System complying with ISO 9001:2015 standards across all educational, training, skilling, and outreach programs.',
                'highlights' => [
                    'Standardized program execution, student tracking, and curriculum evaluation',
                    'IAF (International Accreditation Forum) recognized worldwide',
                    'Continuous quality audits ensuring operational excellence and beneficiary satisfaction'
                ],
                'verify_url' => 'https://www.royalassessments.com'
            ]
        ];

        // Pre-compute full asset URLs and safely encoded PDF links
        foreach ($certificates as &$c) {
            $c['preview_url'] = asset($c['preview_image']);
            // Safely encode PDF path with spaces for direct browser access
            $pathParts = explode('/', $c['pdf_file']);
            $encodedParts = array_map('rawurlencode', $pathParts);
            $c['pdf_url'] = asset(implode('/', $encodedParts));
        }
        unset($c);

        return view('certificates', compact('certificates'));
    }
}
