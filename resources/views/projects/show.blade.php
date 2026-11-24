<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="{{ $project->title }} - Game Development Portfolio by Reyvaldi Tri Hanggara Putra // Cyberpunk 2077 Edition">
    <title>{{ $project->title }} // Reyvaldi Tri Hanggara Putra</title>

    <!-- Google Fonts: Teko (Display), Rajdhani (Cyber UI), JetBrains Mono (Tech/HUD) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Teko:wght@500;600;700&family=Rajdhani:wght@500;600;700&family=JetBrains+Mono:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- AOS (Animate On Scroll) -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- Alpine.js -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!-- Vite Assets -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-[#050505] text-slate-200 font-cyber selection:bg-[#FCEE0A] selection:text-black overflow-x-hidden antialiased cp-grid-bg">

    <!-- ========================================== -->
    <!-- 1. CYBERPUNK STICKY NAVIGATION             -->
    <!-- ========================================== -->
    <header class="sticky top-0 z-50 w-full bg-[#050505]/95 backdrop-blur-md border-b border-[#FCEE0A]/30">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-24">

                <a href="{{ route('portfolio.index') }}" class="group flex items-center gap-3 text-white focus:outline-none">
                    <span class="w-10 h-10 bg-[#FCEE0A] text-black font-display font-black text-2xl flex items-center justify-center cp-cut-br group-hover:bg-[#00F0FF] transition-colors shadow-[0_0_12px_rgba(252,238,10,0.35)]">
                        R
                    </span>
                    <span class="font-display text-3xl sm:text-4xl tracking-wider text-[#FCEE0A] font-black uppercase leading-none group-hover:text-white transition-colors">
                        REYVALDI
                    </span>
                </a>

                <div class="flex items-center gap-3">
                    <a href="{{ route('portfolio.index') }}#projects"
                       class="inline-flex items-center gap-2 px-4 py-2.5 text-xs font-bold uppercase tracking-wider text-slate-300 hover:text-black hover:bg-[#FCEE0A] bg-[#12141a] border border-[#242731] cp-cut-br transition-all">
                        <span class="font-mono text-xs">◄</span>
                        <span>BACK TO PORTFOLIO</span>
                    </a>
                </div>
            </div>
        </div>
    </header>

    <main class="py-12 md:py-16">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 space-y-10">

            <!-- Breadcrumb Navigation (Cyberpunk HUD Style) -->
            <nav class="flex items-center gap-2 text-xs font-mono text-slate-400">
                <a href="{{ route('portfolio.index') }}" class="hover:text-[#FCEE0A] transition-colors">// HOME</a>
                <span class="text-slate-600">/</span>
                <a href="{{ route('portfolio.index') }}#projects" class="hover:text-[#FCEE0A] transition-colors">PROJECTS</a>
                <span class="text-slate-600">/</span>
                <span class="text-[#00F0FF] truncate font-bold">{{ $project->title }}</span>
            </nav>

            <!-- Project Hero Overview -->
            <div class="space-y-4">
                <div class="flex flex-wrap items-center gap-2">
                    <span class="px-2.5 py-0.5 text-xs font-black uppercase tracking-wider bg-[#FCEE0A] text-black cp-cut-br">
                        {{ $project->category }}
                    </span>
                    @if($project->role_title)
                        <span class="px-2.5 py-0.5 text-xs font-mono font-bold text-[#00F0FF] bg-[#101217] border border-[#242731] cp-cut-br">
                            // ROLE: {{ $project->role_title }}
                        </span>
                    @endif
                </div>

                <h1 class="text-4xl sm:text-5xl md:text-6xl font-display font-black text-white tracking-wide uppercase leading-tight">
                    {{ $project->title }}
                </h1>

                @if($project->summary)
                    <p class="text-slate-300 text-base sm:text-lg max-w-3xl leading-relaxed font-sans">
                        {{ $project->summary }}
                    </p>
                @endif

                <!-- Play & Source Links -->
                <div class="flex flex-wrap items-center gap-3 pt-2">
                    @if($project->live_url)
                        <a href="{{ $project->live_url }}" target="_blank" rel="noopener noreferrer"
                           class="inline-flex items-center gap-2 px-6 py-3 text-xs font-extrabold uppercase tracking-wider text-black bg-[#FCEE0A] hover:bg-white cp-cut-br shadow-[0_0_20px_rgba(252,238,10,0.35)] transition-all">
                            <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M2.518 0c-.57 0-1.033.463-1.033 1.033v2.859c0 .57.463 1.033 1.033 1.033.57 0 1.033-.463 1.033-1.033V1.033C3.551.463 3.088 0 2.518 0zm18.964 0c-.57 0-1.033.463-1.033 1.033v2.859c0 .57.463 1.033 1.033 1.033.57 0 1.033-.463 1.033-1.033V1.033c0-.57-.463-1.033-1.033-1.033zM7.227 3.498a3.727 3.727 0 00-3.727 3.727c0 2.058 1.669 3.727 3.727 3.727 2.058 0 3.727-1.669 3.727-3.727 0-2.058-1.669-3.727-3.727-3.727zm9.546 0a3.727 3.727 0 00-3.727 3.727c0 2.058 1.669 3.727 3.727 3.727 2.058 0 3.727-1.669 3.727-3.727 0-2.058-1.669-3.727-3.727-3.727zM0 13.906v7.352C0 22.628 1.372 24 3.064 24h17.872c1.692 0 3.064-1.372 3.064-2.742v-7.352H0zm6.545 2.182h1.636v2.182H6.545v-2.182zm9.273 0h1.636v2.182h-1.636v-2.182z"/></svg>
                            <span>PLAY ON ITCH.IO</span>
                            <span class="font-mono text-xs">►</span>
                        </a>
                    @endif

                    @if($project->github_url)
                        <a href="{{ $project->github_url }}" target="_blank" rel="noopener noreferrer"
                           class="inline-flex items-center gap-2 px-6 py-3 text-xs font-extrabold uppercase tracking-wider text-[#00F0FF] hover:text-black bg-[#101217] hover:bg-[#00F0FF] border border-[#00F0FF] cp-cut-br transition-all">
                            <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/></svg>
                            <span>GITHUB REPOSITORY</span>
                            <span class="font-mono text-xs">►</span>
                        </a>
                    @endif
                </div>
            </div>

            <!-- ========================================== -->
            <!-- STEAM-STYLE INTERACTIVE MEDIA SHOWCASE     -->
            <!-- ========================================== -->
            @php
                $gallery = $project->gallery;
            @endphp

            <div class="p-2 sm:p-3 bg-[#101217] border-2 border-[#242731] cp-cut-br shadow-[0_0_35px_rgba(0,0,0,0.7)]"
                 x-data="{
                     activeSlide: 0,
                     fullscreen: false,
                     slides: {{ Js::from(array_map(fn($img) => asset($img), $gallery)) }},
                     isDragging: false,
                     get sliderThumbWidthPercent() {
                         return this.slides.length > 1 ? Math.max(14, Math.min(24, 100 / this.slides.length)) : 100;
                     },
                     get sliderLeftPercent() {
                         if (this.slides.length <= 1) return 0;
                         return (this.activeSlide / (this.slides.length - 1)) * (100 - this.sliderThumbWidthPercent);
                     },
                     init() {
                         this.$watch('fullscreen', value => {
                             document.body.style.overflow = value ? 'hidden' : '';
                         });
                     },
                     nextSlide() {
                         if (this.slides.length <= 1) return;
                         this.activeSlide = (this.activeSlide + 1) % this.slides.length;
                         this.scrollToActive();
                     },
                     prevSlide() {
                         if (this.slides.length <= 1) return;
                         this.activeSlide = (this.activeSlide - 1 + this.slides.length) % this.slides.length;
                         this.scrollToActive();
                     },
                     setSlide(index) {
                         this.activeSlide = index;
                         this.scrollToActive();
                     },
                     scrollToActive() {
                         this.$nextTick(() => {
                             const el = this.$refs['thumb_' + this.activeSlide];
                             if (el && this.$refs.thumbStrip) {
                                 el.scrollIntoView({ behavior: 'smooth', block: 'nearest', inline: 'center' });
                             }
                         });
                     },
                     startDrag(event) {
                         this.isDragging = true;
                         this.handleDrag(event);
                         const onMove = (e) => {
                             if (this.isDragging) this.handleDrag(e);
                         };
                         const onUp = () => {
                             this.isDragging = false;
                             window.removeEventListener('mousemove', onMove);
                             window.removeEventListener('mouseup', onUp);
                         };
                         window.addEventListener('mousemove', onMove);
                         window.addEventListener('mouseup', onUp);
                     },
                     handleDrag(event) {
                         const track = this.$refs.sliderTrack;
                         if (!track || this.slides.length <= 1) return;
                         const rect = track.getBoundingClientRect();
                         const ratio = Math.max(0, Math.min(1, (event.clientX - rect.left) / rect.width));
                         const targetIdx = Math.round(ratio * (this.slides.length - 1));
                         if (targetIdx !== this.activeSlide) {
                             this.setSlide(targetIdx);
                         }
                     }
                 }"
                 @keydown.left.window="prevSlide()"
                 @keydown.right.window="nextSlide()"
                 @keydown.escape.window="fullscreen = false">

                <!-- 1. Main Media Stage (16:9 Viewport) -->
                <div class="relative aspect-[16/9] w-full overflow-hidden bg-black cp-cut-br select-none group cursor-pointer"
                     @click="fullscreen = true">

                    <!-- Active Image Display -->
                    <template x-for="(slide, idx) in slides" :key="idx">
                        <div x-show="activeSlide === idx"
                             x-transition:enter="transition ease-out duration-300"
                             x-transition:enter-start="opacity-0 scale-[0.99]"
                             x-transition:enter-end="opacity-100 scale-100"
                             x-transition:leave="transition ease-in duration-150"
                             x-transition:leave-start="opacity-100"
                             x-transition:leave-end="opacity-0"
                             class="absolute inset-0 w-full h-full">
                            <img :src="slide"
                                 :alt="'{{ $project->title }} - Screenshot ' + (idx + 1)"
                                 class="w-full h-full object-contain filter contrast-[1.03]">
                        </div>
                    </template>

                    <!-- Overlay Chevrons: Left Navigation Arrow (Cyberpunk Themed, ONLY visible on hover) -->
                    <button type="button"
                            x-show="slides.length > 1"
                            @click.stop="prevSlide()"
                            class="absolute left-0 top-0 bottom-0 w-16 sm:w-20 z-20 flex items-center justify-start pl-3 sm:pl-4 bg-gradient-to-r from-black/80 via-black/20 to-transparent opacity-0 pointer-events-none group-hover:opacity-100 group-hover:pointer-events-auto transition-opacity duration-200 focus:outline-none"
                            aria-label="Previous screenshot">
                        <span class="w-10 h-16 sm:w-11 sm:h-20 bg-black/85 hover:bg-[#FCEE0A] text-[#FCEE0A] hover:text-black border border-[#FCEE0A]/60 hover:border-[#FCEE0A] flex items-center justify-center transition-all cp-cut-br shadow-[0_0_15px_rgba(252,238,10,0.3)]">
                            <svg class="w-6 h-6 stroke-current" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 19l-7-7 7-7"/></svg>
                        </span>
                    </button>

                    <!-- Overlay Chevrons: Right Navigation Arrow (Cyberpunk Themed, ONLY visible on hover) -->
                    <button type="button"
                            x-show="slides.length > 1"
                            @click.stop="nextSlide()"
                            class="absolute right-0 top-0 bottom-0 w-16 sm:w-20 z-20 flex items-center justify-end pr-3 sm:pr-4 bg-gradient-to-l from-black/80 via-black/20 to-transparent opacity-0 pointer-events-none group-hover:opacity-100 group-hover:pointer-events-auto transition-opacity duration-200 focus:outline-none"
                            aria-label="Next screenshot">
                        <span class="w-10 h-16 sm:w-11 sm:h-20 bg-black/85 hover:bg-[#FCEE0A] text-[#FCEE0A] hover:text-black border border-[#FCEE0A]/60 hover:border-[#FCEE0A] flex items-center justify-center transition-all cp-cut-br shadow-[0_0_15px_rgba(252,238,10,0.3)]">
                            <svg class="w-6 h-6 stroke-current" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"/></svg>
                        </span>
                    </button>

                    <!-- Cyberpunk Expand Button (Bottom Right, ONLY visible on hover) -->
                    <div class="absolute bottom-3 right-3 z-20 opacity-0 pointer-events-none group-hover:opacity-100 group-hover:pointer-events-auto transition-opacity duration-200">
                        <button type="button"
                                @click.stop="fullscreen = true"
                                class="px-3 py-1.5 bg-black/85 hover:bg-[#00F0FF] text-[#00F0FF] hover:text-black border border-[#00F0FF]/60 hover:border-[#00F0FF] font-mono text-xs font-bold uppercase tracking-wider flex items-center gap-1.5 cp-cut-br shadow-[0_0_15px_rgba(0,240,255,0.4)] transition-all"
                                title="Expand fullscreen">
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M4 8V4m0 0h4M4 4l5 5m11-5h-4m4 0v4m0-4l-5 5M4 16v4m0 0h4m-4 0l5-5m11 5l-5-5m5 5v-4m0 4h-4"/>
                            </svg>
                            <span>EXPAND</span>
                        </button>
                    </div>
                </div>

                <!-- 2. Steam-Style Thumbnail Carousel Filmstrip -->
                <div x-show="slides.length > 1" class="pt-2 space-y-1.5">
                    <!-- Thumbnail Row -->
                    <div x-ref="thumbStrip"
                         class="flex items-center gap-2 overflow-x-auto scroll-smooth py-1 px-0.5 select-none"
                         style="scrollbar-width: none; -ms-overflow-style: none;">
                        <template x-for="(slide, idx) in slides" :key="'thumb_' + idx">
                            <button type="button"
                                    :x-ref="'thumb_' + idx"
                                    @click="setSlide(idx)"
                                    :class="activeSlide === idx 
                                        ? 'border-2 border-[#FCEE0A] shadow-[0_0_12px_rgba(252,238,10,0.5)] opacity-100 ring-1 ring-[#FCEE0A]/40' 
                                        : 'border border-white/10 opacity-55 hover:opacity-100 hover:border-[#FCEE0A]/50'"
                                    class="w-28 sm:w-32 aspect-[16/9] shrink-0 overflow-hidden bg-black cp-cut-br transition-all duration-150 focus:outline-none cursor-pointer">
                                <img :src="slide"
                                     :alt="'Thumbnail ' + (idx + 1)"
                                     class="w-full h-full object-cover">
                            </button>
                        </template>
                    </div>

                    <!-- Steam-Style Scroll Track & Arrows Bar (Underneath Thumbnails) -->
                    <div class="flex items-center gap-2 bg-[#0c1017] p-1 border border-[#242731] cp-cut-br select-none">
                        <!-- Left Slide Button (Bottom) -->
                        <button type="button"
                                @click="prevSlide()"
                                class="w-9 h-7 bg-[#101217] hover:bg-[#FCEE0A] hover:text-black text-[#FCEE0A] border border-[#242731] hover:border-[#FCEE0A] cp-cut-br flex items-center justify-center font-mono text-xs transition-all focus:outline-none shadow-[0_0_8px_rgba(0,0,0,0.5)] cursor-pointer"
                                aria-label="Previous screenshot">
                            ◄
                        </button>

                        <!-- Steam-Style Scrubber Track with small thumb -->
                        <div x-ref="sliderTrack"
                             @mousedown="startDrag($event)"
                             @click="handleDrag($event)"
                             class="relative flex-1 h-3.5 sm:h-4 bg-[#080b10] border border-[#242731] cp-cut-br overflow-hidden cursor-pointer select-none">
                            <div class="absolute top-0.5 bottom-0.5 bg-[#25364b] hover:bg-[#FCEE0A] border border-[#3b4c63] hover:border-[#FCEE0A] transition-all duration-150 cp-cut-br shadow-inner"
                                 :style="'left: ' + sliderLeftPercent + '%; width: ' + sliderThumbWidthPercent + '%;'"></div>
                        </div>

                        <!-- Right Slide Button (Bottom) -->
                        <button type="button"
                                @click="nextSlide()"
                                class="w-9 h-7 bg-[#101217] hover:bg-[#FCEE0A] hover:text-black text-[#FCEE0A] border border-[#242731] hover:border-[#FCEE0A] cp-cut-br flex items-center justify-center font-mono text-xs transition-all focus:outline-none shadow-[0_0_8px_rgba(0,0,0,0.5)] cursor-pointer"
                                aria-label="Next screenshot">
                            ►
                        </button>
                    </div>
                </div>

                <!-- 3. Tech Stack & Modules Strip -->
                @if(!empty($project->technologies))
                    @php
                        $techList = is_array($project->technologies) 
                            ? $project->technologies 
                            : array_map('trim', explode(',', (string) $project->technologies));
                    @endphp
                    <div class="mt-2.5 p-3 sm:p-4 border border-[#242731] bg-black flex flex-wrap items-center justify-between gap-2 cp-cut-br">
                        <div class="flex flex-wrap items-center gap-2">
                            <span class="text-xs font-mono font-bold text-[#FCEE0A] mr-2">// TECH STACK & MODULES:</span>
                            @foreach($techList as $tech)
                                <span class="px-2.5 py-1 text-xs font-mono font-bold bg-[#101217] border border-[#242731] text-[#00F0FF] cp-cut-br">
                                    # {{ $tech }}
                                </span>
                            @endforeach
                        </div>
                    </div>
                @endif

                <!-- 4. True Fullscreen Lightbox Modal (Teleported to body to break container clipping) -->
                <template x-teleport="body">
                    <div x-show="fullscreen"
                         x-cloak
                         @click.self="fullscreen = false"
                         class="fixed inset-0 z-[99999] w-screen h-screen bg-black/98 flex items-center justify-center select-none overflow-hidden"
                         x-transition:enter="transition ease-out duration-200"
                         x-transition:enter-start="opacity-0"
                         x-transition:enter-end="opacity-100"
                         x-transition:leave="transition ease-in duration-150"
                         x-transition:leave-start="opacity-100"
                         x-transition:leave-end="opacity-0">

                        <!-- Top Bar: Counter & Close Button -->
                        <div class="absolute top-4 sm:top-6 left-4 sm:left-6 z-[100000] px-3 py-1 bg-black/85 border border-[#242731] font-mono text-xs text-slate-300 cp-cut-br flex items-center gap-2">
                            <span class="w-2 h-2 bg-[#00F0FF]"></span>
                            <span class="text-[#FCEE0A] font-bold" x-text="activeSlide + 1"></span>
                            <span class="text-slate-500">/</span>
                            <span x-text="slides.length"></span>
                            <span class="text-slate-500 text-[10px] hidden sm:inline ml-2">// PRESS ESC TO EXIT</span>
                        </div>

                        <button type="button"
                                @click="fullscreen = false"
                                class="absolute top-4 sm:top-6 right-4 sm:right-6 z-[100000] px-3.5 py-1.5 bg-black/85 hover:bg-[#FF003C] text-slate-200 hover:text-black border border-white/20 hover:border-[#FF003C] font-mono text-xs font-bold uppercase tracking-wider cp-cut-br flex items-center gap-2 transition-all shadow-[0_0_15px_rgba(255,0,60,0.4)] focus:outline-none cursor-pointer"
                                title="Close [ESC]">
                            <span>CLOSE [ESC]</span>
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M6 18L18 6M6 6l12 12"/></svg>
                        </button>

                        <!-- Fullscreen Image Stage (Full screen edge-to-edge) -->
                        <div class="relative w-screen h-screen flex items-center justify-center p-2 sm:p-6 group"
                             @click.self="fullscreen = false">
                            <img :src="slides[activeSlide]"
                                 :alt="'{{ $project->title }} - Fullscreen View'"
                                 class="max-w-[96vw] max-h-[94vh] w-auto h-auto object-contain filter contrast-[1.03] select-none shadow-[0_0_50px_rgba(0,0,0,0.95)]">

                            <!-- Left Chevron Navigation (Cyberpunk) -->
                            <button type="button"
                                    x-show="slides.length > 1"
                                    @click.stop="prevSlide()"
                                    class="absolute left-0 top-0 bottom-0 w-24 sm:w-32 flex items-center justify-start pl-4 sm:pl-6 bg-gradient-to-r from-black/80 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-200 focus:outline-none cursor-pointer"
                                    aria-label="Previous screenshot">
                                <span class="w-12 h-20 bg-black/85 hover:bg-[#FCEE0A] text-[#FCEE0A] hover:text-black border border-[#FCEE0A]/60 hover:border-[#FCEE0A] cp-cut-br flex items-center justify-center transition-all shadow-[0_0_20px_rgba(252,238,10,0.4)]">
                                    <svg class="w-8 h-8 stroke-current" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 19l-7-7 7-7"/></svg>
                                </span>
                            </button>

                            <!-- Right Chevron Navigation (Cyberpunk) -->
                            <button type="button"
                                    x-show="slides.length > 1"
                                    @click.stop="nextSlide()"
                                    class="absolute right-0 top-0 bottom-0 w-24 sm:w-32 flex items-center justify-end pr-4 sm:pr-6 bg-gradient-to-l from-black/80 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-200 focus:outline-none cursor-pointer"
                                    aria-label="Next screenshot">
                                <span class="w-12 h-20 bg-black/85 hover:bg-[#FCEE0A] text-[#FCEE0A] hover:text-black border border-[#FCEE0A]/60 hover:border-[#FCEE0A] cp-cut-br flex items-center justify-center transition-all shadow-[0_0_20px_rgba(252,238,10,0.4)]">
                                    <svg class="w-8 h-8 stroke-current" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"/></svg>
                                </span>
                            </button>
                        </div>
                    </div>
                </template>

            </div>

            <!-- Detailed Content with Key Contributions (Cyberpunk Dossier Style) -->
            <div class="p-6 sm:p-8 bg-[#101217] border border-[#242731] border-l-4 border-l-[#FCEE0A] cp-cut-br space-y-6 shadow-[0_0_20px_rgba(0,0,0,0.5)]">

                <!-- Header Bar -->
                <div class="flex items-center justify-between pb-4 border-b border-[#242731]">
                    <div class="flex items-center gap-2">
                        <span class="w-2.5 h-2.5 bg-[#FCEE0A]"></span>
                        <h2 class="text-xl font-bold text-white uppercase tracking-wider font-cyber">
                            TECHNICAL BREAKDOWN & DOCUMENTATION
                        </h2>
                    </div>

                    <span class="text-xs font-mono text-slate-500 uppercase tracking-widest hidden sm:inline">
                        // SECURE DOSSIER
                    </span>
                </div>

                <!-- Key Contributions Section -->
                <div class="space-y-4">
                    <div class="flex items-center gap-2">
                        <span class="w-2 h-2 bg-[#00F0FF]"></span>
                        <h3 class="text-base sm:text-lg font-bold text-[#00F0FF] uppercase tracking-wider font-cyber">
                            KEY CONTRIBUTIONS
                        </h3>
                    </div>

                    <div class="text-slate-300 leading-relaxed font-sans whitespace-pre-line text-sm sm:text-base leading-relaxed pl-3 border-l-2 border-[#00F0FF]/30">
                        {{ $project->description }}
                    </div>
                </div>

            </div>

            <!-- Other Projects Grid -->
            @if($otherProjects->count() > 0)
                <div class="pt-6 space-y-6">
                    <div class="flex items-center justify-between border-b border-[#242731] pb-3">
                        <div class="flex items-center gap-2">
                            <span class="w-2.5 h-2.5 bg-[#00F0FF]"></span>
                            <h3 class="text-2xl font-display font-black text-white tracking-wider uppercase">
                                EXPLORE OTHER PROJECTS
                            </h3>
                        </div>
                        <a href="{{ route('portfolio.index') }}#projects" class="text-xs font-mono text-[#00F0FF] hover:text-[#FCEE0A] transition-colors">
                            // VIEW ALL PROJECTS ►
                        </a>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-5">
                        @foreach($otherProjects as $other)
                            <a href="{{ route('projects.show', $other->slug) }}"
                               class="group p-2 bg-[#101217] border border-[#242731] hover:border-[#FCEE0A] cp-cut-br transition-all duration-200 flex flex-col">
                                <div class="aspect-[16/10] overflow-hidden bg-black cp-cut-br">
                                    <img src="{{ asset($other->image) }}"
                                         alt="{{ $other->title }}"
                                         class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105 filter contrast-[1.05]">
                                </div>
                                <div class="p-3.5 flex-1 flex flex-col justify-between space-y-2">
                                    <div>
                                        <span class="text-[10px] font-mono font-bold text-[#FCEE0A] uppercase tracking-wider">
                                            // {{ $other->category }}
                                        </span>
                                        <h4 class="text-lg font-display font-black text-white group-hover:text-[#FCEE0A] uppercase transition-colors leading-tight mt-1">
                                            {{ $other->title }}
                                        </h4>
                                        <p class="text-xs text-slate-400 line-clamp-2 mt-1 font-sans">
                                            {{ $other->summary ?? Str::limit($other->description, 85) }}
                                        </p>
                                    </div>
                                    <span class="text-xs font-mono font-bold text-[#00F0FF] group-hover:text-white flex items-center gap-1 pt-1">
                                        <span>[ VIEW BRIEF ]</span>
                                        <span>►</span>
                                    </span>
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>
            @endif

        </div>
    </main>

    <!-- Footer -->
    <footer class="border-t border-[#242731] py-8 bg-black mt-20 font-mono text-xs text-slate-500">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 text-center space-y-2">
            <p>&copy; {{ date('Y') }} Reyvaldi Tri Hanggara Putra. Electronic Engineering Polytechnic Institute of Surabaya (PENS) • SMAN 02 Jember.</p>
            <p class="text-[10px] text-slate-600 uppercase tracking-widest">// NIGHT CITY ARCHIVES // UNITY ENGINE 2077</p>
        </div>
    </footer>

    <!-- AOS (Animate On Scroll) Script -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            if (typeof AOS !== 'undefined') {
                AOS.init({
                    duration: 750,
                    once: true,
                    offset: 60,
                    easing: 'ease-out-cubic'
                });
            }
        });
    </script>

</body>
</html>
