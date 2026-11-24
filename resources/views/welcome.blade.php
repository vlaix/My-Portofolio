<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Reyvaldi Tri Hanggara Putra - Game Programmer & Technical Designer Portfolio // Cyberpunk 2077 Edition">
    <title>Reyvaldi Tri Hanggara Putra // Game Developer & Designer</title>

    <!-- Favicon / Brand Logo in Browser Tab -->
    <link rel="icon" type="image/svg+xml" href="{{ asset('favicon.svg') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon.png') }}">
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">

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
<body class="bg-[#050505] text-slate-200 font-cyber selection:bg-[#FCEE0A] selection:text-black overflow-x-hidden antialiased cp-grid-bg"
      x-data="{
          activeSection: 'home',
          mobileMenuOpen: false,
          updateActiveSection() {
              const sections = ['home', 'about', 'skills', 'projects', 'contact'];
              const scrollPos = window.scrollY + 200;
              for (const section of sections) {
                  const el = document.getElementById(section);
                  if (el) {
                      const top = el.offsetTop;
                      const height = el.offsetHeight;
                      if (scrollPos >= top && scrollPos < top + height) {
                          this.activeSection = section;
                          break;
                      }
                  }
              }
          }
      }"
      @scroll.window="updateActiveSection()"
      x-init="updateActiveSection()">

    <!-- ========================================== -->
    <!-- 1. CYBERPUNK 2077 NAVBAR                   -->
    <!-- ========================================== -->
    <header class="sticky top-0 z-50 w-full bg-[#050505]/95 backdrop-blur-md border-b border-[#FCEE0A]/30 transition-colors duration-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-24">

                <!-- Left: Cyberpunk Brand Mark -->
                <div class="flex items-center gap-4">
                    <a href="#home" class="group flex items-center gap-3 focus:outline-none">
                        <span class="w-10 h-10 bg-[#FCEE0A] text-black font-display font-black text-2xl flex items-center justify-center cp-cut-br group-hover:bg-[#00F0FF] transition-colors shadow-[0_0_12px_rgba(252,238,10,0.35)]">
                            R
                        </span>
                        <span class="font-display text-3xl sm:text-4xl tracking-wider text-[#FCEE0A] font-black uppercase leading-none group-hover:text-white transition-colors">
                            REYVALDI
                        </span>
                    </a>
                </div>

                <!-- Center: Trapezoidal HUD Navigation Menu -->
                <nav class="hidden md:flex items-center gap-1.5 bg-[#12141a] px-4 py-2 border border-[#242731] cp-cut-tl-br">
                    <a href="#home"
                       :class="activeSection === 'home' ? 'text-black bg-[#FCEE0A] cp-cut-tl-br font-black shadow-[0_0_12px_rgba(252,238,10,0.4)]' : 'text-slate-300 hover:text-[#FCEE0A] hover:bg-[#1a1c24]'"
                       class="px-4 py-2 text-sm uppercase tracking-wider font-extrabold transition-all duration-150">
                        Home
                    </a>
                    <a href="#about"
                       :class="activeSection === 'about' ? 'text-black bg-[#FCEE0A] cp-cut-tl-br font-black shadow-[0_0_12px_rgba(252,238,10,0.4)]' : 'text-slate-300 hover:text-[#FCEE0A] hover:bg-[#1a1c24]'"
                       class="px-4 py-2 text-sm uppercase tracking-wider font-extrabold transition-all duration-150">
                        About & Education
                    </a>
                    <a href="#skills"
                       :class="activeSection === 'skills' ? 'text-black bg-[#FCEE0A] cp-cut-tl-br font-black shadow-[0_0_12px_rgba(252,238,10,0.4)]' : 'text-slate-300 hover:text-[#FCEE0A] hover:bg-[#1a1c24]'"
                       class="px-4 py-2 text-sm uppercase tracking-wider font-extrabold transition-all duration-150">
                        Skills
                    </a>
                    <a href="#projects"
                       :class="activeSection === 'projects' ? 'text-black bg-[#FCEE0A] cp-cut-tl-br font-black shadow-[0_0_12px_rgba(252,238,10,0.4)]' : 'text-slate-300 hover:text-[#FCEE0A] hover:bg-[#1a1c24]'"
                       class="px-4 py-2 text-sm uppercase tracking-wider font-extrabold transition-all duration-150">
                        Projects
                    </a>
                    <a href="#contact"
                       :class="activeSection === 'contact' ? 'text-black bg-[#FCEE0A] cp-cut-tl-br font-black shadow-[0_0_12px_rgba(252,238,10,0.4)]' : 'text-slate-300 hover:text-[#FCEE0A] hover:bg-[#1a1c24]'"
                       class="px-4 py-2 text-sm uppercase tracking-wider font-extrabold transition-all duration-150">
                        Contact
                    </a>
                </nav>

                <!-- Mobile Hamburger Button -->
                <div class="flex md:hidden items-center">
                    <button @click="mobileMenuOpen = !mobileMenuOpen"
                            type="button"
                            class="p-2.5 bg-[#12141a] border border-[#FCEE0A]/40 text-[#FCEE0A] cp-cut-br focus:outline-none"
                            aria-label="Toggle menu">
                        <svg x-show="!mobileMenuOpen" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                        </svg>
                        <svg x-show="mobileMenuOpen" x-cloak class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Drawer Menu -->
        <div x-show="mobileMenuOpen"
             x-cloak
             class="md:hidden bg-[#0a0b0e] border-b-2 border-[#FCEE0A] px-4 py-4 space-y-2 font-cyber">
            <a @click="mobileMenuOpen = false" href="#home" class="block px-3 py-2 text-sm uppercase tracking-wider font-bold text-slate-300 hover:text-black hover:bg-[#FCEE0A] cp-cut-br">Home</a>
            <a @click="mobileMenuOpen = false" href="#about" class="block px-3 py-2 text-sm uppercase tracking-wider font-bold text-slate-300 hover:text-black hover:bg-[#FCEE0A] cp-cut-br">About & Education</a>
            <a @click="mobileMenuOpen = false" href="#skills" class="block px-3 py-2 text-sm uppercase tracking-wider font-bold text-slate-300 hover:text-black hover:bg-[#FCEE0A] cp-cut-br">Skills</a>
            <a @click="mobileMenuOpen = false" href="#projects" class="block px-3 py-2 text-sm uppercase tracking-wider font-bold text-slate-300 hover:text-black hover:bg-[#FCEE0A] cp-cut-br">Projects</a>
            <a @click="mobileMenuOpen = false" href="#contact" class="block px-3 py-2 text-sm uppercase tracking-wider font-bold text-slate-300 hover:text-black hover:bg-[#FCEE0A] cp-cut-br">Contact</a>
        </div>
    </header>

    <main class="relative z-10">

        <!-- ========================================== -->
        <!-- 2. HERO SECTION (Cyberpunk 2077 Vibe)      -->
        <!-- ========================================== -->
        <section id="home" class="relative min-h-[calc(100vh-5rem)] flex items-center justify-center py-16 lg:py-24 border-b border-[#242731] overflow-hidden">

            <!-- Background HUD Ticks & Crosshairs (Screenshot 1 Reference) -->
            <div class="absolute inset-0 pointer-events-none z-0">
                <div class="absolute top-8 left-8 text-[#FCEE0A]/40 font-mono text-[10px] uppercase tracking-widest">
                    ┌ // SYS_VER: 2.077_PENS // COORD: 07°16'S 112°47'E ┐
                </div>
                <div class="absolute top-8 right-8 text-[#00F0FF]/40 font-mono text-[10px] uppercase tracking-widest hidden sm:block">
                    [ STATUS: OPERATIONAL // NETWORK: ONLINE ]
                </div>
                <div class="absolute bottom-8 left-8 text-slate-600 font-mono text-[10px] hidden sm:block">
                    + + + NIGHT CITY GAME ARCHIVES + + +
                </div>
                <div class="absolute bottom-8 right-8 text-[#FCEE0A]/40 font-mono text-[10px] tracking-widest">
                    └ PROTOCOL: OCN_M_04X_06F2 ┘
                </div>
            </div>

            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full relative z-10">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-center">

                    <!-- Left Column: Hero Text & Identity -->
                    <div class="lg:col-span-7 space-y-6 text-center lg:text-left" data-aos="fade-right" data-aos-duration="800">

                        <!-- Cyber Laurel / Spec Label (Screenshot 1 Reference) -->
                        <div class="inline-flex items-center gap-3 text-xs font-mono font-bold tracking-widest text-[#FCEE0A] uppercase">
                            <span class="text-white text-base">»</span>
                            <span>UNITY ENGINE & C# SPECIALIST</span>
                            <span class="text-slate-600">•</span>
                            <span>GAMEPLAY & MECHANICS</span>
                            <span class="text-white text-base">«</span>
                        </div>

                        <!-- Name (Massive Cyberpunk Stencil / Display) -->
                        <div class="space-y-2">
                            <h1 class="text-5xl sm:text-6xl md:text-7xl lg:text-8xl font-display font-black text-white tracking-tight uppercase leading-[0.92]">
                                REYVALDI <br>
                                <span class="text-[#FCEE0A] drop-shadow-[0_0_25px_rgba(252,238,10,0.35)]">TRI HANGGARA PUTRA</span>
                            </h1>

                            <div class="pt-2 flex items-center justify-center lg:justify-start gap-2">
                                <span class="w-2.5 h-2.5 bg-[#00F0FF]"></span>
                                <p class="text-lg sm:text-xl font-bold uppercase tracking-wider text-[#00F0FF] font-cyber">
                                    GAME PROGRAMMER & TECHNICAL DESIGNER
                                </p>
                            </div>
                        </div>

                        <!-- Bio Narrative -->
                        <p class="text-slate-300 text-base sm:text-lg max-w-2xl mx-auto lg:mx-0 leading-relaxed font-sans">
                            Game Technology student at Electronic Engineering Polytechnic Institute of Surabaya (PENS) with a deep passion for game development, specializing in gameplay logic and game mechanics. Passionate about exploring game development through game jams, solving programming challenges in Unity & C#, and continuously learning to build engaging and interactive player experiences.
                        </p>

                        <!-- Cyberpunk Action Buttons -->
                        <div class="flex flex-wrap items-center justify-center lg:justify-start gap-4 pt-2">
                            <a href="#projects"
                               class="px-8 py-3.5 bg-[#FCEE0A] hover:bg-white text-black font-extrabold uppercase tracking-widest text-sm cp-cut-br shadow-[0_0_20px_rgba(252,238,10,0.35)] hover:shadow-[0_0_25px_#ffffff] transition-all flex items-center gap-2">
                                <span>VIEW GAME SHOWCASE</span>
                                <span class="font-mono text-xs">►</span>
                            </a>

                            <a href="{{ asset('assets/pdf_file/CV_Reyvaldi_Tri_Hanggara_Putra.pdf') }}"
                               target="_blank"
                               rel="noopener noreferrer"
                               class="px-8 py-3.5 bg-[#12141a] hover:bg-[#FF003C] text-white hover:text-black border-2 border-[#FF003C] font-extrabold uppercase tracking-widest text-sm cp-cut-br transition-all flex items-center gap-2 shadow-[0_0_15px_rgba(255,0,60,0.25)] hover:shadow-[0_0_20px_rgba(255,0,60,0.6)] group">
                                <svg class="w-4 h-4 text-[#FF003C] group-hover:text-black transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                                </svg>
                                <span>OPEN PREVIEW CV</span>
                                <span class="font-mono text-xs text-[#FF003C] group-hover:text-black">↗</span>
                            </a>
                        </div>

                        <!-- Direct Verified Social Links with Cyan Accents -->
                        <div class="pt-6 border-t border-[#242731] flex flex-wrap items-center justify-center lg:justify-start gap-5 text-xs text-slate-300 font-mono">
                            <span class="text-[#FCEE0A] font-bold tracking-wider">// COMM_CHANNELS:</span>

                            <!-- itch.io -->
                            <a href="https://vlaixx.itch.io/" target="_blank" rel="noopener noreferrer"
                               class="inline-flex items-center gap-1.5 hover:text-[#00F0FF] transition-colors"
                               title="itch.io Profile">
                                <svg class="w-4 h-4 fill-current text-[#FF003C]" viewBox="0 0 24 24"><path d="M2.518 0c-.57 0-1.033.463-1.033 1.033v2.859c0 .57.463 1.033 1.033 1.033.57 0 1.033-.463 1.033-1.033V1.033C3.551.463 3.088 0 2.518 0zm18.964 0c-.57 0-1.033.463-1.033 1.033v2.859c0 .57.463 1.033 1.033 1.033.57 0 1.033-.463 1.033-1.033V1.033c0-.57-.463-1.033-1.033-1.033zM7.227 3.498a3.727 3.727 0 00-3.727 3.727c0 2.058 1.669 3.727 3.727 3.727 2.058 0 3.727-1.669 3.727-3.727 0-2.058-1.669-3.727-3.727-3.727zm9.546 0a3.727 3.727 0 00-3.727 3.727c0 2.058 1.669 3.727 3.727 3.727 2.058 0 3.727-1.669 3.727-3.727 0-2.058-1.669-3.727-3.727-3.727zM0 13.906v7.352C0 22.628 1.372 24 3.064 24h17.872c1.692 0 3.064-1.372 3.064-2.742v-7.352H0zm6.545 2.182h1.636v2.182H6.545v-2.182zm9.273 0h1.636v2.182h-1.636v-2.182z"/></svg>
                                <span>itch.io</span>
                            </a>

                            <!-- GitHub -->
                            <a href="https://github.com/vlaix" target="_blank" rel="noopener noreferrer"
                                class="inline-flex items-center gap-1.5 hover:text-[#00F0FF] transition-colors"
                                title="GitHub Repositories">
                                <svg class="w-4 h-4 fill-current text-white" viewBox="0 0 24 24"><path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/></svg>
                                <span>GitHub</span>
                            </a>

                            <!-- LinkedIn -->
                            <a href="https://www.linkedin.com/in/reyvaldi-tri-hanggara-putra-7433b5174/" target="_blank" rel="noopener noreferrer"
                               class="inline-flex items-center gap-1.5 hover:text-[#00F0FF] transition-colors"
                               title="LinkedIn Profile">
                                <svg class="w-4 h-4 fill-current text-[#00F0FF]" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
                                <span>LinkedIn</span>
                            </a>

                            <!-- WhatsApp -->
                            <a href="https://wa.me/6289676682773" target="_blank" rel="noopener noreferrer"
                               class="inline-flex items-center gap-1.5 hover:text-[#00F0FF] transition-colors"
                               title="WhatsApp">
                                <svg class="w-4 h-4 fill-current text-[#FCEE0A]" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/></svg>
                                <span>WhatsApp</span>
                            </a>
                        </div>
                    </div>

                    <!-- Right Column: Cyberpunk Character/Portrait Frame -->
                    <div class="lg:col-span-5 flex justify-center" data-aos="fade-left" data-aos-duration="800">
                        <div class="relative w-full max-w-sm">

                            <!-- Corner Brackets HUD Accents -->
                            <div class="absolute -top-3 -left-3 w-6 h-6 border-t-2 border-l-2 border-[#FCEE0A] z-20"></div>
                            <div class="absolute -top-3 -right-3 w-6 h-6 border-t-2 border-r-2 border-[#00F0FF] z-20"></div>
                            <div class="absolute -bottom-3 -left-3 w-6 h-6 border-b-2 border-l-2 border-[#00F0FF] z-20"></div>
                            <div class="absolute -bottom-3 -right-3 w-6 h-6 border-b-2 border-r-2 border-[#FCEE0A] z-20"></div>

                            <!-- Decorative HUD Corner Tech Marks -->
                            <div class="absolute -top-6 left-0 text-[10px] font-mono text-[#FCEE0A]/60">
                                // TARGET: VALDI_PORTFOLIO_PRIMARY
                            </div>
                            <div class="absolute -bottom-6 right-0 text-[10px] font-mono text-[#00F0FF]/60">
                                [ SYSTEM_DIAG: NORMAL ]
                            </div>

                            <!-- Outer Frame with Cut Corner -->
                            <div class="p-2.5 bg-[#101217] border-2 border-[#242731] cp-cut-br shadow-[0_0_35px_rgba(252,238,10,0.2)] relative">

                                <!-- Photo Container -->
                                <div class="aspect-[4/5] w-full overflow-hidden bg-black cp-cut-br relative">
                                    <img src="{{ asset('valdi.png') }}"
                                         alt="Reyvaldi Tri Hanggara Putra"
                                         class="w-full h-full object-cover filter contrast-[1.08] saturate-[1.05]">

                                    <!-- Cyberpunk Gradient Scanline Overlay -->
                                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent pointer-events-none"></div>

                                    <!-- Single Clean Cyberpunk Technical Stamp (NC_ID) -->
                                    <div class="absolute top-3 right-3 px-2.5 py-1 bg-black/85 border border-[#FCEE0A]/60 text-[#FCEE0A] font-mono text-[10px] font-bold uppercase tracking-widest shadow-[0_0_10px_rgba(252,238,10,0.3)]">
                                        NC_ID // 2424
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </section>


        <!-- ========================================== -->
        <!-- 3. ABOUT ME & EDUCATION (Cyber Dossier)     -->
        <!-- ========================================== -->
        <section id="about" class="py-24 border-b border-[#242731] relative">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

                <!-- Header -->
                <div class="max-w-3xl mb-14" data-aos="fade-up">
                    <div class="flex items-center gap-2 text-xs font-mono font-bold text-[#FCEE0A] uppercase tracking-widest mb-2">
                        <span class="w-3 h-1 bg-[#FCEE0A]"></span>
                        <span>// ARCHIVE // PERSONNEL DOSSIER</span>
                    </div>
                    <h2 class="text-4xl sm:text-5xl lg:text-6xl font-display font-black text-white tracking-tight uppercase">
                        ABOUT ME & BACKGROUND
                    </h2>
                </div>

                <!-- 2 Columns: Bio Dossier & Academic Records -->
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">

                    <!-- Left: Bio Dossier -->
                    <div class="lg:col-span-6 space-y-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="p-6 sm:p-8 bg-[#101217] border border-[#242731] border-l-4 border-l-[#FCEE0A] cp-cut-br space-y-4 shadow-[0_0_20px_rgba(0,0,0,0.5)]">
                            <div class="flex items-center justify-between border-b border-[#242731] pb-3">
                                <h3 class="text-lg font-bold text-[#FCEE0A] tracking-wider uppercase font-cyber flex items-center gap-2">
                                    <span class="font-mono text-xs text-[#00F0FF]">[01]</span>
                                    <span>GAME DEVELOPER PROFILE</span>
                                </h3>
                                <span class="text-[10px] font-mono text-slate-500 uppercase tracking-widest">
                                    STATUS: ACTIVE
                                </span>
                            </div>

                            <p class="text-slate-300 leading-relaxed text-sm sm:text-base font-sans">
                                Hello, I am <strong class="text-white font-semibold">Reyvaldi Tri Hanggara Putra</strong>, a student and game developer focused on building gameplay mechanics with tactile controls, interactive physics systems, and clean, modular C# code architecture.
                            </p>

                            <p class="text-slate-300 leading-relaxed text-sm sm:text-base font-sans">
                                Through participating in multiple <strong class="text-[#FCEE0A] font-semibold">game jams</strong> and completing various <strong class="text-[#FCEE0A] font-semibold">game projects</strong>, I am experienced in designing asymmetric co-op mechanics, dynamic Cinemachine camera systems, and managing rapid game development sprints under strict deadlines.
                            </p>

                            <!-- Cyber Spec Bar -->
                            <div class="pt-3 border-t border-[#242731] flex flex-wrap items-center gap-2 text-xs font-mono text-slate-400">
                                <span class="px-2 py-0.5 bg-black border border-[#242731] text-[#00F0FF]">CORE: UNITY ENGINE</span>
                                <span class="px-2 py-0.5 bg-black border border-[#242731] text-[#FCEE0A]">LANG: C#</span>
                                <span class="px-2 py-0.5 bg-black border border-[#242731] text-slate-300">METHOD: SPRINT AGILE</span>
                            </div>
                        </div>
                    </div>

                    <!-- Right: Academic Timeline Cards -->
                    <div class="lg:col-span-6 space-y-4" data-aos="fade-up" data-aos-delay="200">

                        <!-- University: PENS -->
                        <div class="p-6 bg-[#101217] border border-[#242731] border-l-4 border-l-[#00F0FF] cp-cut-br space-y-3 shadow-[0_0_20px_rgba(0,0,0,0.5)]">
                            <div class="flex items-start justify-between gap-4">
                                <div class="space-y-1">
                                    <div class="flex items-center gap-2">
                                        <span class="px-2.5 py-0.5 text-xs font-black uppercase tracking-wider bg-[#00F0FF] text-black cp-cut-br">
                                            Higher Education
                                        </span>
                                        <span class="text-xs text-[#FCEE0A] font-mono font-bold tracking-wider">[ 2024 - Now ]</span>
                                    </div>

                                    <h4 class="text-xl font-bold text-white uppercase tracking-wider font-cyber pt-1">
                                        Electronic Engineering Polytechnic Institute of Surabaya (PENS)
                                    </h4>

                                    <p class="text-xs text-slate-300 font-mono">
                                        Major: <span class="text-[#00F0FF] font-bold">Game Technology (Bachelor of Applied Science)</span>
                                    </p>
                                    <p class="text-[11px] font-mono text-slate-500 uppercase">Surabaya, East Java // ID</p>
                                </div>

                                <!-- GPA Callout Box -->
                                <div class="text-right shrink-0 p-3 bg-black border border-[#00F0FF]/50 cp-cut-br shadow-[0_0_15px_rgba(0,240,255,0.25)]">
                                    <span class="block text-[10px] font-mono uppercase tracking-wider text-slate-400">Current GPA</span>
                                    <span class="text-2xl font-black font-mono text-[#00F0FF]">3.63</span>
                                </div>
                            </div>
                        </div>

                        <!-- High School: SMAN 02 Jember -->
                        <div class="p-6 bg-[#101217] border border-[#242731] border-l-4 border-l-[#FCEE0A] cp-cut-br space-y-3 shadow-[0_0_20px_rgba(0,0,0,0.5)]">
                            <div class="space-y-1">
                                <div class="flex items-center gap-2">
                                    <span class="px-2.5 py-0.5 text-xs font-black uppercase tracking-wider bg-[#FCEE0A] text-black cp-cut-br">
                                        Senior High School
                                    </span>
                                    <span class="text-xs text-slate-400 font-mono font-bold tracking-wider">[ 2021 - 2024 ]</span>
                                </div>

                                <h4 class="text-xl font-bold text-white uppercase tracking-wider font-cyber pt-1">
                                    SMAN 02 Jember
                                </h4>

                                <p class="text-xs text-slate-300 font-mono">
                                    Major: <span class="text-[#FCEE0A] font-bold">Natural Sciences & Mathematics</span>
                                </p>
                                <p class="text-[11px] font-mono text-slate-500 uppercase">Jember, East Java // ID</p>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </section>


        <!-- ========================================== -->
        <!-- 4. TECHNICAL SKILLS (Cyberware Tech Grid)   -->
        <!-- ========================================== -->
        <section id="skills" class="py-24 border-b border-[#242731] relative">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

                <!-- Header -->
                <div class="max-w-3xl mb-14" data-aos="fade-up">
                    <div class="flex items-center gap-2 text-xs font-mono font-bold text-[#00F0FF] uppercase tracking-widest mb-2">
                        <span class="w-3 h-1 bg-[#00F0FF]"></span>
                        <span>// CYBERWARE // TECHNICAL COMPETENCIES</span>
                    </div>
                    <h2 class="text-4xl sm:text-5xl lg:text-6xl font-display font-black text-white tracking-tight uppercase">
                        TECHNICAL SKILLS & GAME ENGINES
                    </h2>
                    <p class="text-slate-400 mt-2 text-base font-sans">
                        Technologies, tools, and methodologies I actively use across game development projects.
                    </p>
                </div>

                <!-- Structured Competencies Grid -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4" data-aos="fade-up" data-aos-delay="100">
                    @forelse($skills as $skill)
                        <div class="p-4 bg-[#101217] border border-[#242731] hover:border-[#FCEE0A] hover:shadow-[0_0_15px_rgba(252,238,10,0.2)] cp-cut-br flex flex-col justify-between transition-all duration-200 group">
                            <div class="space-y-2">
                                <div class="flex items-center justify-between">
                                    <span class="text-[11px] font-mono text-[#00F0FF] uppercase font-bold tracking-wider">
                                        // {{ $skill->category }}
                                    </span>
                                    <span class="w-1.5 h-1.5 bg-[#FCEE0A] group-hover:bg-[#00F0FF] transition-colors"></span>
                                </div>
                                <h3 class="text-base font-bold text-white group-hover:text-[#FCEE0A] transition-colors font-cyber">
                                    {{ $skill->name }}
                                </h3>
                            </div>
                        </div>
                    @empty
                        <div class="col-span-full text-center py-8 text-slate-500 font-mono text-sm">
                            [ NO TECHNICAL COMPETENCY LOGGED ]
                        </div>
                    @endforelse
                </div>

            </div>
        </section>


        <!-- ========================================== -->
        <!-- 5. PROJECTS (Zig-Zag Game Showcase)        -->
        <!-- ========================================== -->
        <section id="projects" class="py-24 border-b border-[#242731] relative">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

                <!-- Header -->
                <div class="max-w-3xl mb-16" data-aos="fade-up">
                    <div class="flex items-center gap-2 text-xs font-mono font-bold text-[#FCEE0A] uppercase tracking-widest mb-2">
                        <span class="w-3 h-1 bg-[#FCEE0A]"></span>
                        <span>// DATABASE // MISSION LOGS</span>
                    </div>
                    <h2 class="text-4xl sm:text-5xl lg:text-6xl font-display font-black text-white tracking-tight uppercase">
                        FEATURED GAME PROJECTS
                    </h2>
                    <p class="text-slate-400 mt-2 text-base font-sans">
                        Curated game development projects focusing on tactile mechanics, physics simulation, and design leadership. Click any card to read detailed documentation and technical breakdowns.
                    </p>
                </div>

                <!-- Alternating Zig-Zag Showcase -->
                <div class="space-y-24 md:space-y-32">
                    @forelse($projects as $index => $project)
                        @php
                            $isEven = ($index % 2 !== 0);
                        @endphp

                        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-14 items-center"
                             data-aos="{{ $isEven ? 'fade-left' : 'fade-right' }}"
                             data-aos-duration="800">

                            <!-- Cover Image Container -->
                            <div class="lg:col-span-7 {{ $isEven ? 'lg:order-2' : 'lg:order-1' }}">
                                <a href="{{ route('projects.show', $project->slug) }}"
                                   class="block group relative p-2 bg-[#12141a] border-2 border-[#242731] hover:border-[#FCEE0A] cp-cut-br transition-all duration-300 shadow-[0_0_25px_rgba(0,0,0,0.6)] hover:shadow-[0_0_30px_rgba(252,238,10,0.25)]">

                                    <div class="aspect-[16/10] overflow-hidden bg-black cp-cut-br relative">
                                        <img src="{{ asset($project->image) }}"
                                             alt="{{ $project->title }}"
                                             class="w-full h-full object-cover transition-transform duration-700 ease-out group-hover:scale-105 filter contrast-[1.05]">

                                        <!-- Bottom Right HUD Index Code -->
                                        <div class="absolute bottom-3 right-3 z-10 px-2.5 py-1 bg-black/90 border border-[#FCEE0A]/50 text-[#FCEE0A] font-mono text-[10px] font-bold uppercase tracking-wider shadow-[0_0_10px_rgba(0,0,0,0.8)]">
                                            // GAME_INDEX: 0{{ $index + 1 }}
                                        </div>
                                    </div>

                                    <!-- Bottom Hover Prompt -->
                                    <div class="absolute bottom-4 left-4 right-4 p-3 bg-black/90 border-l-4 border-[#00F0FF] text-[#00F0FF] font-mono text-xs font-bold uppercase flex items-center justify-between opacity-0 group-hover:opacity-100 transition-opacity duration-200 z-20">
                                        <span>[ ACCESS MISSION SPECS // VIEW GAMEPLAY & SCREENSHOTS ]</span>
                                        <span class="text-white">►</span>
                                    </div>
                                </a>
                            </div>

                            <!-- Text & Specs Container -->
                            <div class="lg:col-span-5 space-y-4 {{ $isEven ? 'lg:order-1' : 'lg:order-2' }}">
                                <div class="space-y-1.5">
                                    <div class="flex items-center gap-2">
                                        <span class="px-2.5 py-0.5 text-xs font-black uppercase tracking-wider bg-[#FCEE0A] text-black cp-cut-br">
                                            {{ $project->category }}
                                        </span>
                                        <span class="text-xs font-mono text-[#00F0FF]">
                                            // LOG_0{{ $index + 1 }}
                                        </span>
                                        @if(count($project->gallery) > 1)
                                            <span class="text-[10px] font-mono text-[#FCEE0A] bg-black px-2 py-0.5 border border-[#242731] cp-cut-br flex items-center gap-1">
                                                <span class="w-1.5 h-1.5 bg-[#FCEE0A]"></span>
                                                <span>{{ count($project->gallery) }} CAPTURES</span>
                                            </span>
                                        @endif
                                    </div>

                                    <a href="{{ route('projects.show', $project->slug) }}" class="block group">
                                        <h3 class="text-3xl sm:text-4xl lg:text-5xl font-display font-black text-white tracking-wide group-hover:text-[#FCEE0A] uppercase transition-colors leading-none pt-1">
                                            {{ $project->title }}
                                        </h3>
                                    </a>

                                    @if($project->role_title)
                                        <p class="text-xs font-mono text-[#00F0FF] font-bold uppercase tracking-wide">
                                            // ROLE: {{ $project->role_title }}
                                        </p>
                                    @endif
                                </div>

                                <!-- Summary -->
                                <p class="text-slate-300 text-sm sm:text-base leading-relaxed font-sans">
                                    {{ $project->summary }}
                                </p>

                                <!-- Tech Stack Badges (Cyberware Style) -->
                                @if(!empty($project->technologies))
                                    @php
                                        $techList = is_array($project->technologies) 
                                            ? $project->technologies 
                                            : array_map('trim', explode(',', (string) $project->technologies));
                                    @endphp
                                    <div class="flex flex-wrap gap-2 pt-1">
                                        @foreach($techList as $tech)
                                            <span class="px-2.5 py-1 text-xs font-mono font-bold bg-[#101217] border border-[#242731] text-[#00F0FF] cp-cut-br">
                                                # {{ $tech }}
                                            </span>
                                        @endforeach
                                    </div>
                                @endif

                                <!-- Cyberpunk Action Buttons -->
                                <div class="flex flex-wrap items-center gap-3 pt-3">
                                    <a href="{{ route('projects.show', $project->slug) }}"
                                       class="px-5 py-2.5 bg-[#FCEE0A] hover:bg-white text-black font-extrabold uppercase text-xs tracking-wider cp-cut-br shadow-[0_0_15px_rgba(252,238,10,0.3)] transition-all flex items-center gap-2">
                                        <span>VIEW GAME DETAILS</span>
                                        <span class="font-mono text-xs">►</span>
                                    </a>

                                    @if($project->live_url)
                                        <a href="{{ $project->live_url }}" target="_blank" rel="noopener noreferrer"
                                           class="inline-flex items-center gap-2 px-4 py-2.5 bg-[#101217] border border-[#FF003C] hover:bg-[#FF003C] hover:text-black text-[#FF003C] font-mono text-xs uppercase font-bold tracking-wider cp-cut-br transition-all"
                                           title="Play on itch.io">
                                            <svg class="w-3.5 h-3.5 fill-current" viewBox="0 0 24 24"><path d="M2.518 0c-.57 0-1.033.463-1.033 1.033v2.859c0 .57.463 1.033 1.033 1.033.57 0 1.033-.463 1.033-1.033V1.033C3.551.463 3.088 0 2.518 0zm18.964 0c-.57 0-1.033.463-1.033 1.033v2.859c0 .57.463 1.033 1.033 1.033.57 0 1.033-.463 1.033-1.033V1.033c0-.57-.463-1.033-1.033-1.033zM7.227 3.498a3.727 3.727 0 00-3.727 3.727c0 2.058 1.669 3.727 3.727 3.727 2.058 0 3.727-1.669 3.727-3.727 0-2.058-1.669-3.727-3.727-3.727zm9.546 0a3.727 3.727 0 00-3.727 3.727c0 2.058 1.669 3.727 3.727 3.727 2.058 0 3.727-1.669 3.727-3.727 0-2.058-1.669-3.727-3.727-3.727zM0 13.906v7.352C0 22.628 1.372 24 3.064 24h17.872c1.692 0 3.064-1.372 3.064-2.742v-7.352H0zm6.545 2.182h1.636v2.182H6.545v-2.182zm9.273 0h1.636v2.182h-1.636v-2.182z"/></svg>
                                            <span>itch.io</span>
                                        </a>
                                    @endif

                                    @if($project->github_url)
                                        <a href="{{ $project->github_url }}" target="_blank" rel="noopener noreferrer"
                                           class="inline-flex items-center gap-2 px-4 py-2.5 bg-[#101217] border border-[#00F0FF] hover:bg-[#00F0FF] hover:text-black text-[#00F0FF] font-mono text-xs uppercase font-bold tracking-wider cp-cut-br transition-all"
                                           title="Source Code on GitHub">
                                            <svg class="w-3.5 h-3.5 fill-current" viewBox="0 0 24 24"><path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/></svg>
                                            <span>GitHub</span>
                                        </a>
                                    @endif
                                </div>
                            </div>

                        </div>
                    @empty
                        <div class="text-center py-12 text-slate-500 font-mono text-sm">
                            [ NO PROJECTS LOGGED IN CURRENT PROTOCOL ]
                        </div>
                    @endforelse
                </div>

            </div>
        </section>


        <!-- ========================================== -->
        <!-- 6. CONTACT ME & CHANNELS                   -->
        <!-- ========================================== -->
        <section id="contact" class="py-24 relative">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

                <!-- Header -->
                <div class="max-w-3xl mb-16" data-aos="fade-up">
                    <div class="flex items-center gap-2 text-xs font-mono font-bold text-[#FCEE0A] uppercase tracking-widest mb-2">
                        <span class="w-3 h-1 bg-[#FCEE0A]"></span>
                        <span>// TRANSMISSION // COMM-LINK</span>
                    </div>
                    <h2 class="text-4xl sm:text-5xl lg:text-6xl font-display font-black text-white tracking-tight uppercase">
                        LET'S CONNECT
                    </h2>
                    <p class="text-slate-400 mt-2 text-base font-sans">
                        Interested in discussing game development opportunities, team collaboration, or technical exploration? Send a transmission via the form or reach out directly below.
                    </p>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 items-start">

                    <!-- Left: Verified Direct Channels -->
                    <div class="lg:col-span-5 space-y-4" data-aos="fade-right" data-aos-duration="800">
                        <div class="p-6 bg-[#101217] border border-[#242731] border-l-4 border-l-[#00F0FF] cp-cut-br space-y-4 shadow-[0_0_20px_rgba(0,0,0,0.5)]">
                            <h3 class="text-base font-bold text-white tracking-widest uppercase font-cyber flex items-center gap-2">
                                <span class="w-2 h-2 bg-[#00F0FF]"></span>
                                <span>DIRECT COMMUNICATION CHANNELS</span>
                            </h3>

                            <div class="space-y-2.5">
                                <!-- Email -->
                                <a href="mailto:vlaix24@gmail.com" target="_blank" rel="noopener noreferrer"
                                   class="flex items-center gap-3 p-3 bg-black border border-[#242731] hover:border-[#FCEE0A] cp-cut-br transition-colors group">
                                    <div class="w-9 h-9 bg-[#101217] text-[#00F0FF] flex items-center justify-center shrink-0 cp-cut-br group-hover:bg-[#00F0FF] group-hover:text-black transition-colors">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                                    </div>
                                    <div class="min-w-0">
                                        <p class="text-[10px] text-[#FCEE0A] font-mono uppercase tracking-wider">// PRIMARY EMAIL</p>
                                        <p class="text-sm font-bold text-white truncate font-mono">vlaix24@gmail.com</p>
                                    </div>
                                </a>

                                <!-- WhatsApp -->
                                <a href="https://wa.me/6289676682773" target="_blank" rel="noopener noreferrer"
                                   class="flex items-center gap-3 p-3 bg-black border border-[#242731] hover:border-[#00F0FF] cp-cut-br transition-colors group">
                                    <div class="w-9 h-9 bg-[#101217] text-[#00F0FF] flex items-center justify-center shrink-0 cp-cut-br group-hover:bg-[#00F0FF] group-hover:text-black transition-colors">
                                        <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/></svg>
                                    </div>
                                    <div class="min-w-0">
                                        <p class="text-[10px] text-[#FCEE0A] font-mono uppercase tracking-wider">// WHATSAPP DIRECT</p>
                                        <p class="text-sm font-bold text-white truncate font-mono">+62 896-7668-2773</p>
                                    </div>
                                </a>

                                <!-- GitHub -->
                                <a href="https://github.com/vlaix" target="_blank" rel="noopener noreferrer"
                                   class="flex items-center gap-3 p-3 bg-black border border-[#242731] hover:border-[#00F0FF] cp-cut-br transition-colors group">
                                    <div class="w-9 h-9 bg-[#101217] text-white flex items-center justify-center shrink-0 cp-cut-br group-hover:bg-white group-hover:text-black transition-colors">
                                        <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/></svg>
                                    </div>
                                    <div class="min-w-0">
                                        <p class="text-[10px] text-[#FCEE0A] font-mono uppercase tracking-wider">// CODE REPOSITORY</p>
                                        <p class="text-sm font-bold text-white truncate font-mono">github.com/vlaix</p>
                                    </div>
                                </a>

                                <!-- LinkedIn -->
                                <a href="https://www.linkedin.com/in/reyvaldi-tri-hanggara-putra-7433b5174/" target="_blank" rel="noopener noreferrer"
                                   class="flex items-center gap-3 p-3 bg-black border border-[#242731] hover:border-[#00F0FF] cp-cut-br transition-colors group">
                                    <div class="w-9 h-9 bg-[#101217] text-[#00F0FF] flex items-center justify-center shrink-0 cp-cut-br group-hover:bg-[#00F0FF] group-hover:text-black transition-colors">
                                        <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
                                    </div>
                                    <div class="min-w-0">
                                        <p class="text-[10px] text-[#FCEE0A] font-mono uppercase tracking-wider">// NETWORK PROTOCOL</p>
                                        <p class="text-sm font-bold text-white truncate font-cyber">Reyvaldi Tri Hanggara Putra</p>
                                    </div>
                                </a>

                                <!-- itch.io -->
                                <a href="https://vlaixx.itch.io/" target="_blank" rel="noopener noreferrer"
                                   class="flex items-center gap-3 p-3 bg-black border border-[#242731] hover:border-[#FF003C] cp-cut-br transition-colors group">
                                    <div class="w-9 h-9 bg-[#101217] text-[#FF003C] flex items-center justify-center shrink-0 cp-cut-br group-hover:bg-[#FF003C] group-hover:text-black transition-colors">
                                        <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M2.518 0c-.57 0-1.033.463-1.033 1.033v2.859c0 .57.463 1.033 1.033 1.033.57 0 1.033-.463 1.033-1.033V1.033C3.551.463 3.088 0 2.518 0zm18.964 0c-.57 0-1.033.463-1.033 1.033v2.859c0 .57.463 1.033 1.033 1.033.57 0 1.033-.463 1.033-1.033V1.033c0-.57-.463-1.033-1.033-1.033zM7.227 3.498a3.727 3.727 0 00-3.727 3.727c0 2.058 1.669 3.727 3.727 3.727 2.058 0 3.727-1.669 3.727-3.727 0-2.058-1.669-3.727-3.727-3.727zm9.546 0a3.727 3.727 0 00-3.727 3.727c0 2.058 1.669 3.727 3.727 3.727 2.058 0 3.727-1.669 3.727-3.727 0-2.058-1.669-3.727-3.727-3.727zM0 13.906v7.352C0 22.628 1.372 24 3.064 24h17.872c1.692 0 3.064-1.372 3.064-2.742v-7.352H0zm6.545 2.182h1.636v2.182H6.545v-2.182zm9.273 0h1.636v2.182h-1.636v-2.182z"/></svg>
                                    </div>
                                    <div class="min-w-0">
                                        <p class="text-[10px] text-[#FCEE0A] font-mono uppercase tracking-wider">// GAME DEPLOYMENT</p>
                                        <p class="text-sm font-bold text-white truncate font-mono">vlaixx.itch.io</p>
                                    </div>
                                </a>

                                <!-- Instagram -->
                                <a href="https://www.instagram.com/vlaaix/" target="_blank" rel="noopener noreferrer"
                                   class="flex items-center gap-3 p-3 bg-black border border-[#242731] hover:border-[#FCEE0A] cp-cut-br transition-colors group">
                                    <div class="w-9 h-9 bg-[#101217] text-[#00F0FF] flex items-center justify-center shrink-0 cp-cut-br group-hover:bg-[#FCEE0A] group-hover:text-black transition-colors">
                                        <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                                    </div>
                                    <div class="min-w-0">
                                        <p class="text-[10px] text-[#FCEE0A] font-mono uppercase tracking-wider">// SOCIAL NETWORK</p>
                                        <p class="text-sm font-bold text-white truncate font-mono">@vlaaix</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Right: Functional Contact Form -->
                    <div class="lg:col-span-7" data-aos="fade-left" data-aos-duration="800">
                        <div class="p-6 sm:p-8 bg-[#101217] border-2 border-[#FCEE0A] cp-cut-br shadow-[0_0_30px_rgba(252,238,10,0.15)]"
                             x-data="{ isSubmitting: false }">

                            <div class="flex items-center justify-between pb-3 border-b border-[#242731] mb-5">
                                <h3 class="text-lg font-bold text-white tracking-widest uppercase font-cyber flex items-center gap-2">
                                    <span class="w-2.5 h-2.5 bg-[#FCEE0A]"></span>
                                    <span>TRANSMIT MESSAGE // SEND</span>
                                </h3>
                                <span class="text-[10px] font-mono text-[#00F0FF] uppercase tracking-wider">
                                    [ ENCRYPTION: TLS_v1.3 ]
                                </span>
                            </div>

                            <p class="text-xs text-slate-400 mb-6 font-mono">
                                Messages are stored in the system and notifications are forwarded directly to <span class="text-[#00F0FF]">vlaix24@gmail.com</span>
                            </p>

                            <!-- Success Banner -->
                            @if(session('success'))
                                <div class="mb-6 p-4 bg-black border-l-4 border-l-[#00F0FF] text-[#00F0FF] text-sm font-mono flex items-center gap-3 cp-cut-br">
                                    <span class="text-base">✓</span>
                                    <span>{{ session('success') }}</span>
                                </div>
                            @endif

                            <!-- Error Banner -->
                            @if($errors->any())
                                <div class="mb-6 p-4 bg-black border-l-4 border-l-[#FF003C] text-[#FF003C] text-sm font-mono cp-cut-br">
                                    <ul class="list-disc list-inside space-y-1">
                                        @foreach($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <form action="{{ route('contact.send') }}"
                                  method="POST"
                                  @submit="isSubmitting = true"
                                  class="space-y-4">
                                @csrf

                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                    <div class="space-y-1.5">
                                        <label for="name" class="block text-xs text-[#FCEE0A] font-mono uppercase font-bold tracking-wider">
                                            Full Name *
                                        </label>
                                        <input type="text"
                                               name="name"
                                               id="name"
                                               required
                                               value="{{ old('name') }}"
                                               placeholder="Your Name"
                                               class="w-full px-3.5 py-3 bg-black border border-[#242731] text-white placeholder-slate-600 text-sm focus:outline-none focus:border-[#00F0FF] focus:shadow-[0_0_15px_rgba(0,240,255,0.3)] cp-cut-br font-mono">
                                    </div>

                                    <div class="space-y-1.5">
                                        <label for="email" class="block text-xs text-[#FCEE0A] font-mono uppercase font-bold tracking-wider">
                                            Email Address *
                                        </label>
                                        <input type="email"
                                               name="email"
                                               id="email"
                                               required
                                               value="{{ old('email') }}"
                                               placeholder="email@example.com"
                                               class="w-full px-3.5 py-3 bg-black border border-[#242731] text-white placeholder-slate-600 text-sm focus:outline-none focus:border-[#00F0FF] focus:shadow-[0_0_15px_rgba(0,240,255,0.3)] cp-cut-br font-mono">
                                    </div>
                                </div>

                                <div class="space-y-1.5">
                                    <label for="subject" class="block text-xs text-[#FCEE0A] font-mono uppercase font-bold tracking-wider">
                                        Subject
                                    </label>
                                    <input type="text"
                                           name="subject"
                                           id="subject"
                                           value="{{ old('subject') }}"
                                           placeholder="Game project discussion / collaboration opportunity"
                                           class="w-full px-3.5 py-3 bg-black border border-[#242731] text-white placeholder-slate-600 text-sm focus:outline-none focus:border-[#00F0FF] focus:shadow-[0_0_15px_rgba(0,240,255,0.3)] cp-cut-br font-mono">
                                </div>

                                <div class="space-y-1.5">
                                    <label for="message" class="block text-xs text-[#FCEE0A] font-mono uppercase font-bold tracking-wider">
                                        Message *
                                    </label>
                                    <textarea name="message"
                                              id="message"
                                              rows="4"
                                              required
                                              placeholder="Describe your project needs or discussion topic..."
                                              class="w-full px-3.5 py-3 bg-black border border-[#242731] text-white placeholder-slate-600 text-sm focus:outline-none focus:border-[#00F0FF] focus:shadow-[0_0_15px_rgba(0,240,255,0.3)] cp-cut-br font-mono resize-y">{{ old('message') }}</textarea>
                                </div>

                                <button type="submit"
                                        :disabled="isSubmitting"
                                        class="w-full py-4 px-6 text-sm font-black uppercase tracking-widest text-black bg-[#FCEE0A] hover:bg-[#00F0FF] disabled:opacity-50 cp-cut-br transition-all duration-200 shadow-[0_0_20px_rgba(252,238,10,0.35)] hover:shadow-[0_0_25px_rgba(0,240,255,0.5)] flex items-center justify-center gap-2">
                                    <span x-show="!isSubmitting">TRANSMIT MESSAGE // SEND</span>
                                    <span x-show="isSubmitting" x-cloak>TRANSMITTING DATA...</span>
                                    <span class="font-mono text-xs">►</span>
                                </button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Signature Cyberpunk Sawtooth Divider -->
            <div class="cp-sawtooth-divider mt-24"></div>
        </section>

    </main>

    <!-- ========================================== -->
    <!-- 7. FOOTER                                  -->
    <!-- ========================================== -->
    <footer class="py-12 bg-black text-slate-400 font-mono text-xs">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-6">

            <div class="flex flex-col md:flex-row items-center justify-between gap-4 border-b border-[#242731] pb-6">
                <div class="flex items-center gap-3">
                    <span class="w-6 h-6 bg-[#FCEE0A] text-black font-display font-black text-sm flex items-center justify-center cp-cut-br">
                        R
                    </span>
                    <span class="font-display text-xl tracking-widest text-white font-black uppercase">
                        REYVALDI TRI HANGGARA PUTRA
                    </span>
                </div>

                <div class="flex items-center gap-3 text-[#00F0FF]">
                    <span>STATUS: READY FOR GAME INDUSTRY</span>
                    <span class="text-[#FCEE0A]">▲</span>
                </div>
            </div>

            <div class="flex flex-col sm:flex-row items-center justify-between gap-3 text-slate-500">
                <p>&copy; {{ date('Y') }} Reyvaldi Tri Hanggara Putra. All rights reserved.</p>
                <p class="text-slate-400">Electronic Engineering Polytechnic Institute of Surabaya (PENS) • SMAN 02 Jember</p>
            </div>
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
