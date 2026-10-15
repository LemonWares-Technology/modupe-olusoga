@extends('layouts.admin')

@section('title', 'Write New Insight')

@section('content')
<div class="max-w-4xl mx-auto space-y-6">

    <!-- Top Action Breadcrumb -->
    <div class="flex items-center justify-between pb-4 border-b border-brand-stone/70">
        <div>
            <div class="flex items-center gap-2 text-xs text-brand-muted">
                <a href="{{ route('admin.insights.index') }}" class="hover:text-brand-navy">&larr; Back to Insights</a>
                <span>/</span>
                <span class="text-brand-gold-dark font-medium">New Publication</span>
            </div>
            <h1 class="font-serif text-3xl font-normal text-brand-navy mt-1">
                Compose Thought Leadership Essay
            </h1>
        </div>
        <div class="flex items-center gap-3">
            <a href="{{ route('admin.insights.index') }}" class="px-4 py-2 rounded-lg border border-brand-stone text-brand-muted hover:text-brand-navy text-xs">
                Cancel
            </a>
            <button type="submit" form="insight-form" class="px-6 py-2 rounded-lg bg-brand-gold text-brand-navy font-semibold text-xs uppercase tracking-wider hover:bg-brand-gold-light transition-all shadow-sm">
                Publish Insight &rarr;
            </button>
        </div>
    </div>

    <!-- Main Creation Form -->
    <form id="insight-form" action="{{ route('admin.insights.store') }}" method="POST" class="space-y-8">
        @csrf

        <!-- Metadata Section Card -->
        <div class="bg-white rounded-2xl border border-brand-stone/80 p-6 sm:p-8 shadow-sm space-y-6">
            <h2 class="font-serif text-lg text-brand-navy font-medium pb-2 border-b border-brand-stone/60">
                Editorial Metadata &amp; Categorization
            </h2>

            <div class="space-y-4">
                
                <!-- Article Title -->
                <div class="space-y-1.5">
                    <label for="title" class="block text-xs uppercase tracking-wider font-semibold text-brand-navy">
                        Article Headline / Title <span class="text-red-500">*</span>
                    </label>
                    <input
                        type="text"
                        id="title"
                        name="title"
                        value="{{ old('title') }}"
                        required
                        placeholder="e.g. Building the Transgenerational Law Firm: The 5 Fault Lines of Founder Dependency"
                        class="w-full px-4 py-3 rounded-lg border border-brand-stone text-base font-serif text-brand-navy focus:outline-none focus:ring-2 focus:ring-brand-gold/40 focus:border-brand-gold"
                    >
                    @error('title')
                        <p class="text-red-600 text-xs">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Slug & URL -->
                <div class="space-y-1.5">
                    <div class="flex items-center justify-between">
                        <label for="slug" class="block text-xs uppercase tracking-wider font-semibold text-brand-navy">
                            URL Slug <span class="text-red-500">*</span>
                        </label>
                        <span class="text-[11px] text-brand-muted font-light">Auto-generated from title</span>
                    </div>
                    <div class="flex items-center rounded-lg border border-brand-stone bg-brand-cream/40 overflow-hidden focus-within:ring-2 focus-within:ring-brand-gold/40 focus-within:border-brand-gold">
                        <span class="px-3.5 py-2.5 text-xs text-brand-muted font-mono bg-brand-stone/40 border-r border-brand-stone select-none">
                            /insights/
                        </span>
                        <input
                            type="text"
                            id="slug"
                            name="slug"
                            value="{{ old('slug') }}"
                            required
                            placeholder="building-the-transgenerational-law-firm"
                            class="w-full px-3 py-2 text-xs font-mono text-brand-charcoal bg-transparent focus:outline-none"
                        >
                    </div>
                    @error('slug')
                        <p class="text-red-600 text-xs">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Category, Date & Read Time Row -->
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 pt-2">
                    
                    <!-- Category -->
                    <div class="space-y-1.5 sm:col-span-1">
                        <label for="category" class="block text-xs uppercase tracking-wider font-semibold text-brand-navy">
                            Category <span class="text-red-500">*</span>
                        </label>
                        <input
                            type="text"
                            id="category"
                            name="category"
                            value="{{ old('category', 'Institutional Governance') }}"
                            required
                            list="category-suggestions"
                            class="w-full px-3 py-2.5 rounded-lg border border-brand-stone text-xs text-brand-charcoal focus:outline-none focus:border-brand-gold"
                            placeholder="Select or enter category"
                        >
                        <datalist id="category-suggestions">
                            <option value="Institutional Governance">
                            <option value="Law Firm Management">
                            <option value="Leadership & Succession">
                            <option value="Professional Excellence">
                            <option value="Executive Commentary">
                            @foreach($categories as $cat)
                                <option value="{{ $cat }}">
                            @endforeach
                        </datalist>
                        
                        <!-- Quick category buttons -->
                        <div class="flex flex-wrap gap-1.5 pt-1">
                            <button type="button" onclick="setCategory('Institutional Governance')" class="text-[10px] px-2 py-0.5 rounded bg-brand-cream hover:bg-brand-stone text-brand-navy border border-brand-stone/60">Governance</button>
                            <button type="button" onclick="setCategory('Law Firm Management')" class="text-[10px] px-2 py-0.5 rounded bg-brand-cream hover:bg-brand-stone text-brand-navy border border-brand-stone/60">Firm Mgmt</button>
                            <button type="button" onclick="setCategory('Leadership & Succession')" class="text-[10px] px-2 py-0.5 rounded bg-brand-cream hover:bg-brand-stone text-brand-navy border border-brand-stone/60">Succession</button>
                        </div>
                        @error('category')
                            <p class="text-red-600 text-xs">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Published Date -->
                    <div class="space-y-1.5">
                        <label for="published_date" class="block text-xs uppercase tracking-wider font-semibold text-brand-navy">
                            Publication Date <span class="text-red-500">*</span>
                        </label>
                        <input
                            type="date"
                            id="published_date"
                            name="published_date"
                            value="{{ old('published_date', date('Y-m-d')) }}"
                            required
                            class="w-full px-3 py-2.5 rounded-lg border border-brand-stone text-xs text-brand-charcoal focus:outline-none focus:border-brand-gold"
                        >
                        @error('published_date')
                            <p class="text-red-600 text-xs">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Read Time -->
                    <div class="space-y-1.5">
                        <label for="read_time" class="block text-xs uppercase tracking-wider font-semibold text-brand-navy">
                            Read Time
                        </label>
                        <input
                            type="text"
                            id="read_time"
                            name="read_time"
                            value="{{ old('read_time') }}"
                            placeholder="Auto-calculated (e.g. 6 min read)"
                            class="w-full px-3 py-2.5 rounded-lg border border-brand-stone text-xs text-brand-charcoal focus:outline-none focus:border-brand-gold"
                        >
                        <span class="text-[10px] text-brand-muted block font-light">Leave blank to auto-calculate</span>
                        @error('read_time')
                            <p class="text-red-600 text-xs">{{ $message }}</p>
                        @enderror
                    </div>

                </div>

                <!-- Featured Article Toggle -->
                <div class="pt-3 border-t border-brand-stone/60">
                    <label class="inline-flex items-center gap-3 cursor-pointer">
                        <input
                            type="checkbox"
                            name="is_featured"
                            value="1"
                            {{ old('is_featured') ? 'checked' : '' }}
                            class="w-4 h-4 rounded text-brand-gold border-brand-stone focus:ring-brand-gold"
                        >
                        <div>
                            <span class="text-xs font-semibold text-brand-navy block">Promote as Featured Insight</span>
                            <span class="text-[11px] text-brand-muted font-light block">Featured articles receive primary placement on the homepage and journal masthead.</span>
                        </div>
                    </label>
                </div>

            </div>
        </div>

        <!-- Executive Summary Section -->
        <div class="bg-white rounded-2xl border border-brand-stone/80 p-6 sm:p-8 shadow-sm space-y-4">
            <div class="flex items-center justify-between pb-2 border-b border-brand-stone/60">
                <h2 class="font-serif text-lg text-brand-navy font-medium">
                    Executive Summary / Lead Abstract <span class="text-red-500">*</span>
                </h2>
                <span id="summary-counter" class="text-xs text-brand-muted font-mono">0 / 500 chars</span>
            </div>
            
            <p class="text-xs text-brand-muted font-light">
                A concise 2-to-3 sentence executive abstract that appears on article cards, search results, and at the top of the article.
            </p>

            <textarea
                id="summary"
                name="summary"
                rows="3"
                required
                maxlength="500"
                placeholder="e.g. A candid structural breakdown of why high-performing partnerships unravel during generational handover, and the governing frameworks needed to build enduring value beyond founders."
                class="w-full px-4 py-3 rounded-lg border border-brand-stone text-xs sm:text-sm text-brand-charcoal leading-relaxed focus:outline-none focus:ring-2 focus:ring-brand-gold/40 focus:border-brand-gold"
            >{{ old('summary') }}</textarea>
            @error('summary')
                <p class="text-red-600 text-xs">{{ $message }}</p>
            @enderror
        </div>

        <!-- Full Article Body Editor -->
        <div class="bg-white rounded-2xl border border-brand-stone/80 p-6 sm:p-8 shadow-sm space-y-4">
            <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-2 pb-2 border-b border-brand-stone/60">
                <div>
                    <h2 class="font-serif text-lg text-brand-navy font-medium">
                        Full Article Content <span class="text-red-500">*</span>
                    </h2>
                    <span class="text-xs text-brand-muted">Supports Markdown, numbered sections, and paragraph breaks</span>
                </div>
                
                <div class="flex items-center gap-2">
                    <span id="word-count" class="text-xs text-brand-muted font-mono mr-2">0 words</span>
                    <button type="button" onclick="togglePreview()" id="preview-btn" class="px-3 py-1 rounded bg-brand-cream border border-brand-stone text-xs text-brand-navy font-medium hover:bg-brand-stone">
                        Live Preview Tab
                    </button>
                </div>
            </div>

            <!-- Formatting Helper Toolbar -->
            <div class="flex flex-wrap items-center gap-1.5 p-2 rounded-lg bg-brand-cream/60 border border-brand-stone/60 text-xs">
                <span class="text-[10px] uppercase font-semibold text-brand-muted px-1">Format:</span>
                <button type="button" onclick="insertFormat('**', '**', 'bold text')" class="px-2 py-1 rounded hover:bg-white text-brand-navy font-bold" title="Bold">B</button>
                <button type="button" onclick="insertFormat('*', '*', 'italic text')" class="px-2 py-1 rounded hover:bg-white text-brand-navy italic" title="Italic">I</button>
                <span class="text-brand-stone">|</span>
                <button type="button" onclick="insertLine('## ')" class="px-2 py-1 rounded hover:bg-white text-brand-navy font-medium" title="Heading 2">H2</button>
                <button type="button" onclick="insertLine('### ')" class="px-2 py-1 rounded hover:bg-white text-brand-navy font-medium" title="Heading 3">H3</button>
                <span class="text-brand-stone">|</span>
                <button type="button" onclick="insertLine('> ')" class="px-2 py-1 rounded hover:bg-white text-brand-navy" title="Blockquote">&ldquo; Quote</button>
                <button type="button" onclick="insertLine('- ')" class="px-2 py-1 rounded hover:bg-white text-brand-navy" title="Bullet List">&bull; List</button>
                <button type="button" onclick="insertLine('1. ')" class="px-2 py-1 rounded hover:bg-white text-brand-navy" title="Numbered List">1. List</button>
                <span class="text-brand-stone">|</span>
                <button type="button" onclick="insertContinuum()" class="px-2.5 py-1 rounded bg-brand-navy text-white text-[10px] uppercase tracking-wider font-semibold hover:bg-brand-charcoal" title="Insert Execution Continuum Callout">
                    + Insert Continuum Callout
                </button>
            </div>

            <!-- Textarea Editor Area -->
            <div id="editor-container">
                <textarea
                    id="content"
                    name="content"
                    rows="16"
                    required
                    placeholder="Write the full body of the article here. Separate paragraphs with double enter lines.

1. First strategic insight...
Use numbered paragraphs for structured frameworks.

Aspiration → Clarity → Action → Consistency → Results"
                    class="w-full px-4 py-3 rounded-lg border border-brand-stone text-sm text-brand-charcoal font-sans leading-relaxed focus:outline-none focus:ring-2 focus:ring-brand-gold/40 focus:border-brand-gold"
                >{{ old('content') }}</textarea>
                @error('content')
                    <p class="text-red-600 text-xs">{{ $message }}</p>
                @enderror
            </div>

            <!-- Live Preview Pane (Hidden by Default) -->
            <div id="preview-container" class="hidden p-6 rounded-xl bg-brand-cream border border-brand-stone/80 text-brand-charcoal">
                <div class="text-[10px] uppercase tracking-widest text-brand-gold-dark font-bold mb-3">Live Editorial Preview</div>
                <div id="preview-content" class="dropcap font-light text-base leading-relaxed space-y-6">
                    <!-- Preview rendered by JS -->
                </div>
            </div>

        </div>

        <!-- Footer Actions -->
        <div class="flex items-center justify-between pt-4 pb-12">
            <a href="{{ route('admin.insights.index') }}" class="text-xs text-brand-muted hover:text-brand-navy">
                &larr; Cancel and return to overview
            </a>
            <button type="submit" class="px-8 py-3.5 rounded-lg bg-brand-gold text-brand-navy font-semibold text-xs uppercase tracking-widest hover:bg-brand-gold-light transition-all shadow-md">
                Publish Insight &rarr;
            </button>
        </div>

    </form>

</div>

@push('scripts')
<script>
    // Category helper
    function setCategory(cat) {
        document.getElementById('category').value = cat;
    }

    // Auto slug generator from title
    const titleInput = document.getElementById('title');
    const slugInput = document.getElementById('slug');
    let userEditedSlug = false;

    slugInput.addEventListener('input', () => {
        userEditedSlug = slugInput.value.trim().length > 0;
    });

    titleInput.addEventListener('input', () => {
        if (!userEditedSlug) {
            slugInput.value = titleInput.value
                .toLowerCase()
                .trim()
                .replace(/[^\w\s-]/g, '')
                .replace(/[\s_-]+/g, '-')
                .replace(/^-+|-+$/g, '');
        }
    });

    // Summary character counter
    const summaryInput = document.getElementById('summary');
    const summaryCounter = document.getElementById('summary-counter');
    summaryInput.addEventListener('input', () => {
        summaryCounter.textContent = `${summaryInput.value.length} / 500 chars`;
    });
    summaryCounter.textContent = `${summaryInput.value.length} / 500 chars`;

    // Word counter and auto read time estimation
    const contentTextarea = document.getElementById('content');
    const wordCountSpan = document.getElementById('word-count');
    const readTimeInput = document.getElementById('read_time');

    function updateWordCount() {
        const text = contentTextarea.value.trim();
        const words = text ? text.split(/\s+/).length : 0;
        wordCountSpan.textContent = `${words} words`;
        
        if (!readTimeInput.value || readTimeInput.dataset.autocalc === 'true') {
            const minutes = Math.max(1, Math.ceil(words / 200));
            readTimeInput.placeholder = `Auto: ${minutes} min read`;
        }
    }
    contentTextarea.addEventListener('input', updateWordCount);
    updateWordCount();

    // Editor formatting helper
    function insertFormat(start, end, placeholder) {
        const textarea = document.getElementById('content');
        const startPos = textarea.selectionStart;
        const endPos = textarea.selectionEnd;
        const selected = textarea.value.substring(startPos, endPos) || placeholder;
        const replacement = start + selected + end;
        textarea.setRangeText(replacement, startPos, endPos, 'select');
        textarea.focus();
        updateWordCount();
    }

    function insertLine(prefix) {
        const textarea = document.getElementById('content');
        const startPos = textarea.selectionStart;
        textarea.setRangeText(prefix, startPos, startPos, 'end');
        textarea.focus();
        updateWordCount();
    }

    function insertContinuum() {
        const callout = "\n\nAspiration → Clarity → Action → Consistency → Results\n\n";
        const textarea = document.getElementById('content');
        const startPos = textarea.selectionStart;
        textarea.setRangeText(callout, startPos, startPos, 'end');
        textarea.focus();
        updateWordCount();
    }

    // Toggle Preview
    let isPreview = false;
    function togglePreview() {
        isPreview = !isPreview;
        const editorContainer = document.getElementById('editor-container');
        const previewContainer = document.getElementById('preview-container');
        const previewBtn = document.getElementById('preview-btn');
        const previewContent = document.getElementById('preview-content');

        if (isPreview) {
            editorContainer.classList.add('hidden');
            previewContainer.classList.remove('hidden');
            previewBtn.textContent = 'Edit Content Tab';
            previewBtn.classList.add('bg-brand-navy', 'text-white');

            // Simple preview renderer
            const text = contentTextarea.value.trim();
            const paragraphs = text.split(/\n\s*\n/);
            let html = '';
            paragraphs.forEach(p => {
                if (p.includes('Aspiration → Clarity → Action → Consistency → Results')) {
                    html += `<div class="my-6 p-6 rounded bg-brand-navy text-white text-center shadow-lg border border-brand-gold/30">
                        <span class="text-[10px] uppercase tracking-widest text-brand-gold font-bold block mb-1">The Execution Continuum</span>
                        <p class="font-serif text-lg font-normal tracking-wide">${escapeHtml(p)}</p>
                    </div>`;
                } else if (/^\d+\./.test(p.trim())) {
                    html += `<div class="p-5 rounded bg-white border border-brand-stone shadow-sm my-4 text-sm leading-relaxed">${escapeHtml(p).replace(/\n/g, '<br>')}</div>`;
                } else if (p.startsWith('## ')) {
                    html += `<h2 class="font-serif text-2xl text-brand-navy font-normal mt-6">${escapeHtml(p.replace('## ', ''))}</h2>`;
                } else if (p.startsWith('### ')) {
                    html += `<h3 class="font-serif text-xl text-brand-navy font-normal mt-4">${escapeHtml(p.replace('### ', ''))}</h3>`;
                } else if (p.startsWith('> ')) {
                    html += `<blockquote class="border-l-2 border-brand-gold pl-4 italic text-brand-charcoal/80 my-4">${escapeHtml(p.replace('> ', ''))}</blockquote>`;
                } else {
                    html += `<p class="leading-relaxed">${escapeHtml(p).replace(/\n/g, '<br>')}</p>`;
                }
            });
            previewContent.innerHTML = html;
        } else {
            editorContainer.classList.remove('hidden');
            previewContainer.classList.add('hidden');
            previewBtn.textContent = 'Live Preview Tab';
            previewBtn.classList.remove('bg-brand-navy', 'text-white');
        }
    }

    function escapeHtml(text) {
        const div = document.createElement('div');
        div.innerText = text;
        return div.innerHTML;
    }
</script>
@endpush
@endsection
