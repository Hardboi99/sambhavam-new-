@extends('admin.layouts.app')

@section('title', 'Edit Course')

@section('content')
<div class="bg-white rounded p-4">
    <form method="POST" action="{{ route('admin.courses.update', $course) }}" enctype="multipart/form-data" id="courseEditForm">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">Category</label>
            <select name="category_id" class="form-select">
                <option value="">Select a category</option>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}" {{ old('category_id', $course->category_id) == $category->id ? 'selected' : '' }}>
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
            @error('category_id') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Course Title</label>
            <input type="text" name="title" class="form-control" value="{{ old('title', $course->title) }}">
            @error('title') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Course Image</label>

            @if($course->image)
                <div class="mb-2">
                    <img src="{{ asset('storage/' . $course->image) }}" alt="{{ $course->title }}" style="max-width: 200px; border-radius: 8px;">
                    <div><small class="text-muted">Current image — upload a new one below only if you want to replace it.</small></div>
                </div>
            @endif

            <input type="file" name="image" class="form-control" accept="image/*">
            <small class="text-muted">Recommended size: 600x400px. Max 2MB.</small>
            @error('image') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="mb-3 editor-wrapper" id="descriptionWrapper">
            <div class="d-flex justify-content-between align-items-center mb-2">
                <label class="form-label mb-0 fw-semibold">Overview / Description</label>
                <div class="btn-group btn-group-sm" role="group">
                    <button type="button" class="btn btn-outline-primary active btn-mode-visual" title="Visual Rich Text Editor">
                        <i class="fa fa-eye me-1"></i> Visual
                    </button>
                    <button type="button" class="btn btn-outline-primary btn-mode-html" title="Raw HTML Code Editor">
                        <i class="fa fa-code me-1"></i> &lt;/&gt; HTML Code
                    </button>
                </div>
            </div>
            <div class="quill-editor-container">
                <div id="descriptionEditor" style="height: 180px; background: #fff;"></div>
            </div>
            <textarea name="description" id="descriptionInput" class="form-control html-code-textarea" style="display:none; min-height: 180px; font-family: 'Consolas', 'Fira Code', 'Courier New', monospace; font-size: 13.5px; background: #1e293b; color: #f8fafc; border-radius: 6px; padding: 12px; line-height: 1.6; resize: vertical;" placeholder="Enter or paste raw HTML code here, e.g. <p>...</p>">{{ old('description', $course->description) }}</textarea>
        </div>

        <div class="mb-3 editor-wrapper" id="curriculumWrapper">
            <div class="d-flex justify-content-between align-items-center mb-2">
                <label class="form-label mb-0 fw-semibold">Curriculum / Subjects Covered</label>
                <div class="btn-group btn-group-sm" role="group">
                    <button type="button" class="btn btn-outline-primary active btn-mode-visual" title="Visual Rich Text Editor">
                        <i class="fa fa-eye me-1"></i> Visual
                    </button>
                    <button type="button" class="btn btn-outline-primary btn-mode-html" title="Raw HTML Code Editor">
                        <i class="fa fa-code me-1"></i> &lt;/&gt; HTML Code
                    </button>
                </div>
            </div>
            <div class="quill-editor-container">
                <div id="curriculumEditor" style="height: 180px; background: #fff;"></div>
            </div>
            <textarea name="curriculum" id="curriculumInput" class="form-control html-code-textarea" style="display:none; min-height: 180px; font-family: 'Consolas', 'Fira Code', 'Courier New', monospace; font-size: 13.5px; background: #1e293b; color: #f8fafc; border-radius: 6px; padding: 12px; line-height: 1.6; resize: vertical;" placeholder="Enter or paste raw HTML code here, e.g. <p>...</p>">{{ old('curriculum', $course->curriculum) }}</textarea>
        </div>

        <div class="mb-3 editor-wrapper" id="keyFeaturesWrapper">
            <div class="d-flex justify-content-between align-items-center mb-2">
                <label class="form-label mb-0 fw-semibold">Key Features of the Batch</label>
                <div class="btn-group btn-group-sm" role="group">
                    <button type="button" class="btn btn-outline-primary active btn-mode-visual" title="Visual Rich Text Editor">
                        <i class="fa fa-eye me-1"></i> Visual
                    </button>
                    <button type="button" class="btn btn-outline-primary btn-mode-html" title="Raw HTML Code Editor">
                        <i class="fa fa-code me-1"></i> &lt;/&gt; HTML Code
                    </button>
                </div>
            </div>
            <div class="quill-editor-container">
                <div id="keyFeaturesEditor" style="height: 180px; background: #fff;"></div>
            </div>
            <textarea name="key_features" id="keyFeaturesInput" class="form-control html-code-textarea" style="display:none; min-height: 180px; font-family: 'Consolas', 'Fira Code', 'Courier New', monospace; font-size: 13.5px; background: #1e293b; color: #f8fafc; border-radius: 6px; padding: 12px; line-height: 1.6; resize: vertical;" placeholder="Enter or paste raw HTML code here, e.g. <p>...</p>">{{ old('key_features', $course->key_features) }}</textarea>
        </div>

        <div class="mb-3 editor-wrapper" id="eligibilityFeesWrapper">
            <div class="d-flex justify-content-between align-items-center mb-2">
                <label class="form-label mb-0 fw-semibold">Eligibility &amp; Fees</label>
                <div class="btn-group btn-group-sm" role="group">
                    <button type="button" class="btn btn-outline-primary active btn-mode-visual" title="Visual Rich Text Editor">
                        <i class="fa fa-eye me-1"></i> Visual
                    </button>
                    <button type="button" class="btn btn-outline-primary btn-mode-html" title="Raw HTML Code Editor">
                        <i class="fa fa-code me-1"></i> &lt;/&gt; HTML Code
                    </button>
                </div>
            </div>
            <div class="quill-editor-container">
                <div id="eligibilityFeesEditor" style="height: 180px; background: #fff;"></div>
            </div>
            <textarea name="eligibility_fees" id="eligibilityFeesInput" class="form-control html-code-textarea" style="display:none; min-height: 180px; font-family: 'Consolas', 'Fira Code', 'Courier New', monospace; font-size: 13.5px; background: #1e293b; color: #f8fafc; border-radius: 6px; padding: 12px; line-height: 1.6; resize: vertical;" placeholder="Enter or paste raw HTML code here, e.g. <p>...</p>">{{ old('eligibility_fees', $course->eligibility_fees) }}</textarea>
        </div>

        <div class="row">
            <div class="col-md-6 mb-3">
                <label class="form-label">Duration</label>
                <input type="text" name="duration" class="form-control" value="{{ old('duration', $course->duration) }}">
                @error('duration') <small class="text-danger">{{ $message }}</small> @enderror
            </div>

            <div class="col-md-6 mb-3">
                <label class="form-label">Mode</label>
                <select name="mode" class="form-select">
                    <option value="offline" {{ old('mode', $course->mode) === 'offline' ? 'selected' : '' }}>Offline</option>
                    <option value="online" {{ old('mode', $course->mode) === 'online' ? 'selected' : '' }}>Online</option>
                </select>
                @error('mode') <small class="text-danger">{{ $message }}</small> @enderror
            </div>
        </div>

        <div class="mb-3 form-check">
            <input type="checkbox" name="is_active" id="is_active" class="form-check-input" value="1"
                   {{ old('is_active', $course->is_active) ? 'checked' : '' }}>
            <label class="form-check-label" for="is_active">Active (visible on website)</label>
        </div>

        <div class=" mb-3">
            <label class="form-label">Sort Order (within category)</label>
            <input type="number" name="sort_order" class="form-control" value="{{ old('sort_order', $course->sort_order) }}" min="1">
            <small class="text-muted">If you change this to a number already used, other courses in this category shift automatically.</small>
        </div>

        <div class="mb-3">
            <label class="form-label">Course Fee (₹)</label>
            <input type="number" step="0.01" name="price" class="form-control" value="{{ old('price', $course->price ?? '') }}" placeholder="e.g. 63000">
        </div>

        <!-- Course FAQs Section -->
        <div class="card mb-4 border shadow-sm">
            <div class="card-header bg-light d-flex justify-content-between align-items-center py-3">
                <div>
                    <h5 class="mb-0 fw-bold text-dark">
                        <i class="fa fa-question-circle text-primary me-2"></i> Course FAQs (Frequently Asked Questions)
                    </h5>
                    <small class="text-muted">Add course-specific FAQs that will be displayed in an interactive accordion on the course details page.</small>
                </div>
                <button type="button" class="btn btn-sm btn-outline-primary" id="addFaqBtn">
                    <i class="fa fa-plus me-1"></i> Add FAQ
                </button>
            </div>
            <div class="card-body">
                <div id="faqContainer">
                    <!-- Dynamic FAQs inserted here -->
                </div>
                <div id="faqEmptyState" class="text-center py-4 text-muted border border-dashed rounded bg-light">
                    <i class="fa fa-comments-o fs-3 mb-2 d-block text-secondary"></i>
                    <p class="mb-2">No FAQs added for this course yet.</p>
                    <button type="button" class="btn btn-sm btn-primary" id="addFirstFaqBtn">
                        <i class="fa fa-plus me-1"></i> Add First FAQ
                    </button>
                </div>
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Save Changes</button>
        <a href="{{ route('admin.courses.index') }}" class="btn btn-light">Cancel</a>
    </form>
</div>

@push('scripts')
<link href="https://cdn.jsdelivr.net/npm/quill@1.3.6/dist/quill.snow.css" rel="stylesheet">
<style>
    .ql-editor {
        font-size: 14.5px;
        line-height: 1.7;
        color: #1e293b;
        font-family: inherit;
    }
    .ql-editor p {
        margin-bottom: 12px;
    }
    .ql-editor p:last-child {
        margin-bottom: 0;
    }
    .ql-editor strong, .ql-editor b {
        color: #034861;
        font-weight: 700;
    }
</style>
<script src="https://cdn.jsdelivr.net/npm/quill@1.3.6/dist/quill.min.js"></script>
<script>
    const toolbarOptions = [
        [{ 'header': [1, 2, 3, 4, 5, 6, false] }],
        ['bold', 'italic', 'underline', 'strike'],
        [{ 'color': [] }, { 'background': [] }],
        [{ 'list': 'ordered'}, { 'list': 'bullet' }],
        [{ 'align': [] }],
        ['link', 'blockquote', 'code-block'],
        ['clean']
    ];

    const editorConfigs = [
        { key: 'description', editorId: 'descriptionEditor', inputId: 'descriptionInput', wrapperId: 'descriptionWrapper' },
        { key: 'curriculum', editorId: 'curriculumEditor', inputId: 'curriculumInput', wrapperId: 'curriculumWrapper' },
        { key: 'keyFeatures', editorId: 'keyFeaturesEditor', inputId: 'keyFeaturesInput', wrapperId: 'keyFeaturesWrapper' },
        { key: 'eligibilityFees', editorId: 'eligibilityFeesEditor', inputId: 'eligibilityFeesInput', wrapperId: 'eligibilityFeesWrapper' },
    ];

    const editorMap = {};

    editorConfigs.forEach(cfg => {
        const editorEl = document.getElementById(cfg.editorId);
        const inputEl = document.getElementById(cfg.inputId);
        const wrapperEl = document.getElementById(cfg.wrapperId);
        if (!editorEl || !inputEl) return;

        const quill = new Quill('#' + cfg.editorId, {
            theme: 'snow',
            modules: { toolbar: toolbarOptions }
        });

        // Preload initial value into Quill safely
        if (inputEl.value) {
            quill.clipboard.dangerouslyPasteHTML(0, inputEl.value);
        }

        // Smart HTML Paste handler for Visual Mode
        quill.root.addEventListener('paste', function (e) {
            const text = (e.clipboardData || window.clipboardData)?.getData('text/plain');
            if (text && /^\s*<[a-z][\s\S]*>/i.test(text.trim())) {
                e.preventDefault();
                const selection = quill.getSelection(true);
                const index = selection ? selection.index : quill.getLength();
                quill.clipboard.dangerouslyPasteHTML(index, text.trim());
            }
        });

        editorMap[cfg.key] = {
            quill: quill,
            input: inputEl,
            wrapper: wrapperEl,
            mode: 'visual'
        };

        if (wrapperEl) {
            const visualBtn = wrapperEl.querySelector('.btn-mode-visual');
            const htmlBtn = wrapperEl.querySelector('.btn-mode-html');
            const quillContainer = wrapperEl.querySelector('.quill-editor-container');

            if (visualBtn && htmlBtn && quillContainer) {
                visualBtn.addEventListener('click', function () {
                    if (editorMap[cfg.key].mode === 'visual') return;
                    // Sync HTML textarea -> Quill Visual
                    quill.setText('');
                    if (inputEl.value) {
                        quill.clipboard.dangerouslyPasteHTML(0, inputEl.value);
                    }
                    inputEl.style.display = 'none';
                    quillContainer.style.display = 'block';
                    visualBtn.classList.add('active');
                    htmlBtn.classList.remove('active');
                    editorMap[cfg.key].mode = 'visual';
                });

                htmlBtn.addEventListener('click', function () {
                    if (editorMap[cfg.key].mode === 'html') return;
                    // Sync Quill Visual -> HTML textarea
                    inputEl.value = quill.root.innerHTML;
                    quillContainer.style.display = 'none';
                    inputEl.style.display = 'block';
                    htmlBtn.classList.add('active');
                    visualBtn.classList.remove('active');
                    editorMap[cfg.key].mode = 'html';
                    inputEl.focus();
                });
            }
        }
    });

    // Copy each editor's HTML into its hidden textarea right before submitting
    document.getElementById('courseEditForm').addEventListener('submit', function () {
        Object.values(editorMap).forEach(({ quill, input, mode }) => {
            if (mode === 'visual') {
                input.value = quill.root.innerHTML;
            }
        });
    });

    // FAQ Repeater Logic
    let faqIndex = 0;
    const faqContainer = document.getElementById('faqContainer');
    const faqEmptyState = document.getElementById('faqEmptyState');
    const addFaqBtn = document.getElementById('addFaqBtn');
    const addFirstFaqBtn = document.getElementById('addFirstFaqBtn');

    function updateFaqNumbers() {
        const items = faqContainer.querySelectorAll('.faq-item-card');
        items.forEach((item, idx) => {
            const badge = item.querySelector('.faq-badge-num');
            if (badge) {
                badge.textContent = `FAQ #${idx + 1}`;
            }
        });
        if (items.length === 0) {
            faqEmptyState.style.display = 'block';
        } else {
            faqEmptyState.style.display = 'none';
        }
    }

    function addFaqItem(question = '', answer = '') {
        const currentIdx = faqIndex++;
        const card = document.createElement('div');
        card.className = 'faq-item-card card mb-3 border bg-white';
        card.innerHTML = `
            <div class="card-header bg-light d-flex justify-content-between align-items-center py-2">
                <span class="badge bg-secondary faq-badge-num">FAQ #${faqContainer.children.length + 1}</span>
                <button type="button" class="btn btn-sm btn-outline-danger py-0 px-2 remove-faq-btn" title="Delete FAQ">
                    <i class="fa fa-trash me-1"></i> Remove
                </button>
            </div>
            <div class="card-body">
                <div class="mb-3">
                    <label class="form-label fw-semibold">Question</label>
                    <input type="text" name="faqs[${currentIdx}][question]" class="form-control" placeholder="e.g. What is the batch timing and duration?" value="${question.replace(/"/g, '&quot;')}">
                </div>
                <div>
                    <label class="form-label fw-semibold">Answer</label>
                    <textarea name="faqs[${currentIdx}][answer]" class="form-control" rows="3" placeholder="Provide a detailed, clear answer...">${answer}</textarea>
                </div>
            </div>
        `;

        card.querySelector('.remove-faq-btn').addEventListener('click', function () {
            card.remove();
            updateFaqNumbers();
        });

        faqContainer.appendChild(card);
        updateFaqNumbers();
    }

    addFaqBtn?.addEventListener('click', () => addFaqItem());
    addFirstFaqBtn?.addEventListener('click', () => addFaqItem());

    // Prepopulate existing course FAQs or old input
    const initialFaqs = @json(old('faqs', $course->faqs ?? []));
    if (Array.isArray(initialFaqs) && initialFaqs.length > 0) {
        initialFaqs.forEach(faq => {
            if (faq && (faq.question || faq.answer)) {
                addFaqItem(faq.question || '', faq.answer || '');
            }
        });
    } else {
        updateFaqNumbers();
    }
</script>
@endpush
@endsection

