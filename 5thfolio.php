<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lance Ericson Geslani | BSIT Developer & Tech Portfolio</title>
    
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        brand: {
                            50: 'rgb(var(--brand-50) / <alpha-value>)',
                            100: 'rgb(var(--brand-100) / <alpha-value>)',
                            500: 'rgb(var(--brand-500) / <alpha-value>)',
                            600: 'rgb(var(--brand-600) / <alpha-value>)',
                            700: 'rgb(var(--brand-700) / <alpha-value>)',
                            900: 'rgb(var(--brand-900) / <alpha-value>)',
                            accent: 'rgb(var(--brand-accent) / <alpha-value>)',
                            emerald: 'rgb(var(--brand-emerald) / <alpha-value>)'
                        }
                    },
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                        mono: ['Fira Code', 'JetBrains Mono', 'monospace']
                    }
                }
            }
        }
    </script>
    <!-- Google Fonts & Font Awesome Icons -->
    <link href="https://fonts.googleapis.com/css2?family=Fira+Code:wght@400;500;600&family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Custom Glassmorphism & Accent Styles -->
    <style>
        :root {
            --brand-50: 236 253 245;
            --brand-100: 209 250 229;
            --brand-500: 34 197 94;
            --brand-600: 22 163 74;
            --brand-700: 21 128 61;
            --brand-900: 20 83 45;
            --brand-accent: 163 230 53;
            --brand-emerald: 74 222 128;
        }
        .dark {
            --brand-50: 239 246 255;
            --brand-100: 219 234 254;
            --brand-500: 59 130 246;
            --brand-600: 37 99 235;
            --brand-700: 29 78 216;
            --brand-900: 30 58 138;
            --brand-accent: 125 211 252;
            --brand-emerald: 96 165 250;
        }
        body {
            font-family: 'Inter', sans-serif;
        }
        .glass-panel {
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.3);
        }
        .dark .glass-panel {
            background: rgba(7, 30, 64, 0.78);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border: 1px solid rgba(147, 197, 253, 0.15);
        }
        .glass-card {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
        .glass-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 30px -10px rgb(var(--brand-500) / 0.25);
        }
        .glow-effect {
            position: relative;
        }
        .glow-effect::before {
            content: '';
            position: absolute;
            top: -2px; left: -2px; right: -2px; bottom: -2px;
            background: rgb(var(--brand-500));
            border-radius: inherit;
            z-index: -1;
            opacity: 0;
            transition: opacity 0.3s ease;
        }
        .glow-effect:hover::before {
            opacity: 1;
        }
        /* Custom Code Highlighting style overrides */
        .code-syntax-keyword { color: #f472b6; font-weight: 600; }
        .code-syntax-var { color: #38bdf8; }
        .code-syntax-string { color: #34d399; }
        .code-syntax-comment { color: #9ca3af; font-style: italic; }
        .code-syntax-fn { color: #fbbf24; }
    </style>
</head>
<body class="bg-emerald-50 dark:bg-blue-950 text-slate-800 dark:text-slate-100 transition-colors duration-300 min-h-screen flex flex-col selection:bg-brand-500 selection:text-white">

    <!-- Sticky Navigation Header -->
    <header class="sticky top-0 z-40 w-full glass-panel border-b border-slate-200 dark:border-slate-800/80 transition-all">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-20 flex items-center justify-between">
            <!-- Brand Logo -->
            <a href="#hero" class="flex items-center gap-3 group">
                <div class="w-10 h-10 rounded-xl bg-brand-700 flex items-center justify-center text-white font-bold text-xl shadow-lg shadow-brand-500/30 group-hover:scale-105 transition-transform">
                    LG
                </div>
                <div class="flex flex-col">
                    <span class="font-extrabold text-lg tracking-tight text-slate-900 dark:text-white">
                        Lance Geslani
                    </span>
                    <span class="text-xs font-medium text-brand-600 dark:text-brand-accent tracking-wider font-mono">
                        &lt;BSIT Developer /&gt;
                    </span>
                </div>
            </a>

            <!-- Desktop Navigation Links -->
            <nav class="hidden md:flex items-center gap-8 font-medium text-sm">
                <a href="#about" class="hover:text-brand-600 dark:hover:text-brand-accent transition-colors">About</a>
                <a href="#projects" class="hover:text-brand-600 dark:hover:text-brand-accent transition-colors">Projects</a>
                <a href="#skills" class="hover:text-brand-600 dark:hover:text-brand-accent transition-colors">Tech Stack</a>
                <a href="#php-snippets" class="hover:text-brand-600 dark:hover:text-brand-accent transition-colors flex items-center gap-1.5">
                    <i class="fa-brands fa-php text-brand-500 text-base"></i> PHP Architecture
                </a>
                <a href="#contact" class="hover:text-brand-600 dark:hover:text-brand-accent transition-colors">Contact</a>
            </nav>

            <!-- Action Buttons -->
            <div class="flex items-center gap-3">
                <!-- Dark Mode Toggle Button -->
                <button id="themeToggle" class="p-2.5 rounded-xl bg-slate-200/60 dark:bg-slate-800/60 text-slate-700 dark:text-slate-300 hover:bg-slate-300 dark:hover:bg-slate-700 transition-all" aria-label="Toggle Theme">
                    <i id="themeIcon" class="fa-solid fa-moon text-lg"></i>
                </button>

                <!-- Resume Download Mock / Contact Trigger CTA -->
                <a href="#contact" class="hidden sm:inline-flex items-center justify-center px-4 py-2.5 rounded-xl bg-brand-700 hover:bg-brand-600 text-white font-medium text-sm shadow-md shadow-brand-500/20 hover:shadow-brand-500/40 transition-all hover:-translate-y-0.5">
                    <i class="fa-solid fa-paper-plane mr-2 text-xs"></i> Get In Touch
                </a>

                <!-- Mobile Menu Button -->
                <button id="mobileMenuBtn" class="md:hidden p-2.5 rounded-xl bg-slate-200/60 dark:bg-slate-800/60 text-slate-700 dark:text-slate-300">
                    <i class="fa-solid fa-bars text-xl"></i>
                </button>
            </div>
        </div>

        <!-- Mobile Navigation Drawer -->
        <div id="mobileMenu" class="hidden md:hidden border-t border-slate-200 dark:border-slate-800 bg-slate-100/95 dark:bg-slate-900/95 backdrop-blur-lg px-6 py-4 space-y-3">
            <a href="#about" class="block py-2 font-medium hover:text-brand-500 transition-colors mobile-link">About</a>
            <a href="#projects" class="block py-2 font-medium hover:text-brand-500 transition-colors mobile-link">Projects</a>
            <a href="#skills" class="block py-2 font-medium hover:text-brand-500 transition-colors mobile-link">Tech Stack</a>
            <a href="#php-snippets" class="block py-2 font-medium hover:text-brand-500 transition-colors mobile-link">PHP Code Showcase</a>
            <a href="#contact" class="block py-2 font-medium hover:text-brand-500 transition-colors mobile-link">Contact</a>
        </div>
    </header>

    <main class="flex-grow">
        <!-- 1. Hero / Header Profile Section -->
        <section id="hero" class="relative py-20 lg:py-28 overflow-hidden">
            <!-- Background Glow Orbs -->
            <div class="absolute top-1/4 left-10 w-72 h-72 bg-brand-500/20 rounded-full blur-3xl -z-10 pointer-events-none"></div>
            <div class="absolute bottom-10 right-10 w-96 h-96 bg-brand-accent/20 rounded-full blur-3xl -z-10 pointer-events-none"></div>

            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
                    
                    <!-- Hero Info Text -->
                    <div class="lg:col-span-7 space-y-6 text-center lg:text-left">
                        <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-brand-500/10 border border-brand-500/20 text-brand-600 dark:text-brand-accent text-xs sm:text-sm font-semibold tracking-wide">
                            <span class="w-2 h-2 rounded-full bg-emerald-500 animate-pulse"></span>
                            Available for Full-Stack & System Projects
                        </div>

                        <h1 class="text-4xl sm:text-5xl lg:text-6xl font-black tracking-tight text-slate-900 dark:text-white leading-none">
                            Hi, I'm <span class="text-brand-accent">Lance Ericson Geslani</span>
                        </h1>

                        <p class="text-lg sm:text-xl text-slate-600 dark:text-slate-300 font-normal max-w-2xl mx-auto lg:mx-0 leading-relaxed">
                            BSIT Student & Software Developer passionate about engineering full-stack web applications, secure enterprise database structures, robust OOP applications, and data-driven systems.
                        </p>

                        <!-- Key Highlights Quick Bar -->
                        <div class="pt-2 flex flex-wrap justify-center lg:justify-start gap-4 text-xs font-mono text-slate-600 dark:text-slate-400">
                            <div class="flex items-center gap-1.5 px-3 py-1.5 rounded-lg bg-slate-200/50 dark:bg-slate-800/60 border border-slate-300 dark:border-slate-700">
                                <i class="fa-solid fa-code text-brand-500"></i> PHP / MySQL Backend
                            </div>
                            <div class="flex items-center gap-1.5 px-3 py-1.5 rounded-lg bg-slate-200/50 dark:bg-slate-800/60 border border-slate-300 dark:border-slate-700">
                                <i class="fa-solid fa-shield-halved text-emerald-500"></i> Secure RBAC Architecture
                            </div>
                            <div class="flex items-center gap-1.5 px-3 py-1.5 rounded-lg bg-slate-200/50 dark:bg-slate-800/60 border border-slate-300 dark:border-slate-700">
                                <i class="fa-brands fa-python text-brand-accent"></i> Data Pipelines & Visualizations
                            </div>
                        </div>

                        <!-- CTA Actions & Links -->
                        <div class="pt-4 flex flex-col sm:flex-row items-center justify-center lg:justify-start gap-4">
                            <a href="#projects" class="w-full sm:w-auto px-7 py-3.5 rounded-xl bg-brand-700 hover:bg-brand-600 text-white font-semibold text-center shadow-lg shadow-brand-600/30 hover:scale-[1.02] transition-transform flex items-center justify-center gap-2">
                                View Featured Projects <i class="fa-solid fa-arrow-right text-xs"></i>
                            </a>
                            <a href="https://github.com/LanceKafka" target="_blank" class="w-full sm:w-auto px-7 py-3.5 rounded-xl glass-panel border border-slate-300 dark:border-slate-700 hover:bg-slate-200/80 dark:hover:bg-slate-800/80 font-semibold text-center transition-all flex items-center justify-center gap-2">
                                <i class="fa-brands fa-github text-lg"></i> GitHub Profile
                            </a>
                        </div>
                    </div>

                    <!-- Developer Hero Card / Interactive Code Card -->
                    <div class="lg:col-span-5">
                        <div class="glass-panel rounded-2xl p-6 shadow-2xl border border-slate-200/80 dark:border-slate-800 relative overflow-hidden">
                            <!-- Terminal Top Bar -->
                            <div class="flex items-center justify-between pb-4 border-b border-slate-200 dark:border-slate-800">
                                <div class="flex items-center gap-2">
                                    <div class="w-3 h-3 rounded-full bg-rose-500"></div>
                                    <div class="w-3 h-3 rounded-full bg-amber-500"></div>
                                    <div class="w-3 h-3 rounded-full bg-emerald-500"></div>
                                </div>
                                <div class="text-xs font-mono text-slate-600 dark:text-slate-400">
                                    developer_profile.php
                                </div>
                            </div>

                            <!-- Terminal Content Code snippet -->
                            <pre class="mt-4 text-xs sm:text-sm font-mono text-slate-800 dark:text-slate-200 leading-relaxed overflow-x-auto p-2">
<span class="code-syntax-keyword">&lt;?php</span>
<span class="code-syntax-keyword">namespace</span> Portfolio\LanceGeslani;

<span class="code-syntax-keyword">class</span> <span class="code-syntax-fn">DeveloperInfo</span> {
    <span class="code-syntax-keyword">public string</span> <span class="code-syntax-var">$name</span> = <span class="code-syntax-string">'Lance Ericson Geslani'</span>;
    <span class="code-syntax-keyword">public string</span> <span class="code-syntax-var">$degree</span> = <span class="code-syntax-string">'BS Information Technology'</span>;
    <span class="code-syntax-keyword">public array</span> <span class="code-syntax-var">$coreSkills</span> = [
        <span class="code-syntax-string">'PHP / OOP & Dynamic Web'</span>,
        <span class="code-syntax-string">'MySQL / AES Encryption & RBAC'</span>,
        <span class="code-syntax-string">'Java Desktop / SQLite & ML Integration'</span>,
        <span class="code-syntax-string">'Python Analytics & Pandas Pipeline'</span>
    ];

    <span class="code-syntax-keyword">public function</span> <span class="code-syntax-fn">getStatus</span>(): <span class="code-syntax-keyword">string</span> {
        <span class="code-syntax-keyword">return</span> <span class="code-syntax-string">'Ready to engineer high-quality solutions.'</span>;
    }
}
<span class="code-syntax-keyword">?&gt;</span></pre>

                            <!-- Mini Metrics Overlay -->
                            <div class="mt-6 pt-4 border-t border-slate-200 dark:border-slate-800/80 grid grid-cols-3 gap-2 text-center font-mono">
                                <div class="p-2 rounded-lg bg-slate-100/60 dark:bg-slate-900/60">
                                    <div class="text-lg font-bold text-brand-600 dark:text-brand-accent">6+</div>
                                    <div class="text-[10px] text-slate-500">Featured Apps</div>
                                </div>
                                <div class="p-2 rounded-lg bg-slate-100/60 dark:bg-slate-900/60">
                                    <div class="text-lg font-bold text-emerald-500">100%</div>
                                    <div class="text-[10px] text-slate-500">Clean Code</div>
                                </div>
                                <div class="p-2 rounded-lg bg-slate-100/60 dark:bg-slate-900/60">
                                    <div class="text-lg font-bold text-brand-500">BSIT</div>
                                    <div class="text-[10px] text-slate-500">Degree Student</div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- 2. Projects Showcase / Grid with Filterable Tabs -->
        <section id="projects" class="py-16 bg-slate-100/60 dark:bg-slate-900/40 relative">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                
                <!-- Section Header -->
                <div class="text-center max-w-3xl mx-auto space-y-3 mb-12">
                    <h2 class="text-xs font-bold uppercase tracking-widest text-brand-600 dark:text-brand-accent">
                        Portfolio Portfolio
                    </h2>
                    <p class="text-3xl sm:text-4xl font-extrabold text-slate-900 dark:text-white">
                        Featured Systems & Engineering Projects
                    </p>
                    <p class="text-slate-600 dark:text-slate-400 text-sm sm:text-base">
                        Explore my recent work spanning web application backends, encrypted database systems, desktop OOP software, and python data pipelines.
                    </p>
                </div>

                <!-- Category Filter Tabs -->
                <div class="flex flex-wrap items-center justify-center gap-2 mb-10" id="projectFilterContainer">
                    <button data-filter="all" class="filter-btn active px-5 py-2 rounded-xl text-sm font-semibold transition-all bg-brand-600 text-white shadow-md">
                        All Projects
                    </button>
                    <button data-filter="web-php" class="filter-btn px-5 py-2 rounded-xl text-sm font-semibold transition-all bg-slate-200 dark:bg-slate-800 text-slate-700 dark:text-slate-300 hover:bg-slate-300 dark:hover:bg-slate-700">
                        <i class="fa-brands fa-php mr-1"></i> Web / PHP & MySQL
                    </button>
                    <button data-filter="java-python" class="filter-btn px-5 py-2 rounded-xl text-sm font-semibold transition-all bg-slate-200 dark:bg-slate-800 text-slate-700 dark:text-slate-300 hover:bg-slate-300 dark:hover:bg-slate-700">
                        <i class="fa-solid fa-laptop-code mr-1"></i> Java & Python Systems
                    </button>
                    <button data-filter="database" class="filter-btn px-5 py-2 rounded-xl text-sm font-semibold transition-all bg-slate-200 dark:bg-slate-800 text-slate-700 dark:text-slate-300 hover:bg-slate-300 dark:hover:bg-slate-700">
                        <i class="fa-solid fa-database mr-1"></i> Security & Database
                    </button>
                </div>

                <!-- Projects Dynamic Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8" id="projectsGrid">
                    
                    <!-- PROJECT 1: V-LINC -->
                    <div class="project-card glass-panel rounded-2xl overflow-hidden glass-card flex flex-col h-full border border-slate-200 dark:border-slate-800" data-category="web-php database">
                        <div class="h-48 bg-emerald-950 p-6 flex flex-col justify-between relative overflow-hidden group">
                            <div class="absolute inset-0 bg-brand-600/10 opacity-0 group-hover:opacity-100 transition-opacity"></div>
                            <div class="flex justify-between items-start z-10">
                                <span class="px-3 py-1 rounded-full text-xs font-mono font-semibold bg-brand-500/20 text-brand-300 border border-brand-500/30">Web & PHP</span>
                                <div class="w-8 h-8 rounded-full bg-slate-800/80 flex items-center justify-center text-slate-300">
                                    <i class="fa-solid fa-link"></i>
                                </div>
                            </div>
                            <div class="z-10">
                                <h3 class="text-2xl font-bold text-white tracking-wide">V-LINC</h3>
                                <p class="text-xs text-slate-300 mt-1 font-mono">Accessibility-Focused Community Web Platform</p>
                            </div>
                        </div>
                        <div class="p-6 flex flex-col flex-grow justify-between space-y-4">
                            <p class="text-sm text-slate-600 dark:text-slate-300 leading-relaxed">
                                A clean, accessible web-based platform tailored for streamlined user connectivity. Features modular PHP execution, parameterized MySQL queries, and intuitive user workflows.
                            </p>
                            <div>
                                <div class="flex flex-wrap gap-1.5 mb-4">
                                    <span class="px-2.5 py-1 rounded-md text-[11px] font-mono bg-slate-200 dark:bg-slate-800 text-slate-700 dark:text-slate-300">PHP 8.2</span>
                                    <span class="px-2.5 py-1 rounded-md text-[11px] font-mono bg-slate-200 dark:bg-slate-800 text-slate-700 dark:text-slate-300">MySQL</span>
                                    <span class="px-2.5 py-1 rounded-md text-[11px] font-mono bg-slate-200 dark:bg-slate-800 text-slate-700 dark:text-slate-300">Clean UI/UX</span>
                                </div>
                                <button onclick="openProjectModal('vlinc')" class="w-full py-2.5 px-4 rounded-xl border border-brand-500/30 hover:bg-brand-500/10 text-brand-600 dark:text-brand-accent text-sm font-semibold transition-colors flex items-center justify-center gap-2">
                                    View Architecture & Specs <i class="fa-solid fa-arrow-right text-xs"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- PROJECT 2: PC TRUST -->
                    <div class="project-card glass-panel rounded-2xl overflow-hidden glass-card flex flex-col h-full border border-slate-200 dark:border-slate-800" data-category="web-php database">
                        <div class="h-48 bg-slate-900 p-6 flex flex-col justify-between relative overflow-hidden group">
                            <div class="flex justify-between items-start z-10">
                                <span class="px-3 py-1 rounded-full text-xs font-mono font-semibold bg-emerald-500/20 text-emerald-300 border border-emerald-500/30">Security & E-Commerce</span>
                                <div class="w-8 h-8 rounded-full bg-slate-800/80 flex items-center justify-center text-emerald-400">
                                    <i class="fa-solid fa-shield-halved"></i>
                                </div>
                            </div>
                            <div class="z-10">
                                <h3 class="text-2xl font-bold text-white tracking-wide">PC TRUST</h3>
                                <p class="text-xs text-slate-300 mt-1 font-mono">E-Commerce & Encrypted Database System</p>
                            </div>
                        </div>
                        <div class="p-6 flex flex-col flex-grow justify-between space-y-4">
                            <p class="text-sm text-slate-600 dark:text-slate-300 leading-relaxed">
                                E-commerce & database project featuring strict Role-Based Access Control (RBAC) and MySQL integration utilizing AES-256 field-level encryption for user data safety.
                            </p>
                            <div>
                                <div class="flex flex-wrap gap-1.5 mb-4">
                                    <span class="px-2.5 py-1 rounded-md text-[11px] font-mono bg-slate-200 dark:bg-slate-800 text-slate-700 dark:text-slate-300">PHP PDO</span>
                                    <span class="px-2.5 py-1 rounded-md text-[11px] font-mono bg-slate-200 dark:bg-slate-800 text-slate-700 dark:text-slate-300">MySQL AES</span>
                                    <span class="px-2.5 py-1 rounded-md text-[11px] font-mono bg-slate-200 dark:bg-slate-800 text-slate-700 dark:text-slate-300">RBAC</span>
                                </div>
                                <button onclick="openProjectModal('pctrust')" class="w-full py-2.5 px-4 rounded-xl border border-brand-500/30 hover:bg-brand-500/10 text-brand-600 dark:text-brand-accent text-sm font-semibold transition-colors flex items-center justify-center gap-2">
                                    View Security & Specs <i class="fa-solid fa-arrow-right text-xs"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- PROJECT 3: AbiYarn -->
                    <div class="project-card glass-panel rounded-2xl overflow-hidden glass-card flex flex-col h-full border border-slate-200 dark:border-slate-800" data-category="web-php database">
                        <div class="h-48 bg-green-950 p-6 flex flex-col justify-between relative overflow-hidden group">
                            <div class="flex justify-between items-start z-10">
                                <span class="px-3 py-1 rounded-full text-xs font-mono font-semibold bg-fuchsia-500/20 text-fuchsia-300 border border-fuchsia-500/30">E-Commerce & Inventory</span>
                                <div class="w-8 h-8 rounded-full bg-slate-800/80 flex items-center justify-center text-fuchsia-400">
                                    <i class="fa-solid fa-[#]"></i>
                                </div>
                            </div>
                            <div class="z-10">
                                <h3 class="text-2xl font-bold text-white tracking-wide">AbiYarn</h3>
                                <p class="text-xs text-slate-300 mt-1 font-mono">Yarn & Craft Inventory Management</p>
                            </div>
                        </div>
                        <div class="p-6 flex flex-col flex-grow justify-between space-y-4">
                            <p class="text-sm text-slate-600 dark:text-slate-300 leading-relaxed">
                                Crafts e-commerce web application with stock tracking, dynamic product filtering, custom CSS Grid layouts, and relational database triggers for real-time inventory updates.
                            </p>
                            <div>
                                <div class="flex flex-wrap gap-1.5 mb-4">
                                    <span class="px-2.5 py-1 rounded-md text-[11px] font-mono bg-slate-200 dark:bg-slate-800 text-slate-700 dark:text-slate-300">PHP Backend</span>
                                    <span class="px-2.5 py-1 rounded-md text-[11px] font-mono bg-slate-200 dark:bg-slate-800 text-slate-700 dark:text-slate-300">Custom CSS Grid</span>
                                    <span class="px-2.5 py-1 rounded-md text-[11px] font-mono bg-slate-200 dark:bg-slate-800 text-slate-700 dark:text-slate-300">SQL Triggers</span>
                                </div>
                                <button onclick="openProjectModal('abiyarn')" class="w-full py-2.5 px-4 rounded-xl border border-brand-500/30 hover:bg-brand-500/10 text-brand-600 dark:text-brand-accent text-sm font-semibold transition-colors flex items-center justify-center gap-2">
                                    View Inventory Specs <i class="fa-solid fa-arrow-right text-xs"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- PROJECT 4: House of Origami -->
                    <div class="project-card glass-panel rounded-2xl overflow-hidden glass-card flex flex-col h-full border border-slate-200 dark:border-slate-800" data-category="web-php">
                        <div class="h-48 bg-lime-950 p-6 flex flex-col justify-between relative overflow-hidden group">
                            <div class="flex justify-between items-start z-10">
                                <span class="px-3 py-1 rounded-full text-xs font-mono font-semibold bg-amber-500/20 text-amber-300 border border-amber-500/30">Interactive Web UI</span>
                                <div class="w-8 h-8 rounded-full bg-slate-800/80 flex items-center justify-center text-amber-400">
                                    <i class="fa-solid fa-note-sticky"></i>
                                </div>
                            </div>
                            <div class="z-10">
                                <h3 class="text-2xl font-bold text-white tracking-wide">House of Origami</h3>
                                <p class="text-xs text-slate-300 mt-1 font-mono">Creative Interactive Showcase App</p>
                            </div>
                        </div>
                        <div class="p-6 flex flex-col flex-grow justify-between space-y-4">
                            <p class="text-sm text-slate-600 dark:text-slate-300 leading-relaxed">
                                Highly engaging web application highlighting creative frontend design, micro-interactions, responsive CSS layout structures, and JavaScript animation sequences.
                            </p>
                            <div>
                                <div class="flex flex-wrap gap-1.5 mb-4">
                                    <span class="px-2.5 py-1 rounded-md text-[11px] font-mono bg-slate-200 dark:bg-slate-800 text-slate-700 dark:text-slate-300">HTML5/CSS3</span>
                                    <span class="px-2.5 py-1 rounded-md text-[11px] font-mono bg-slate-200 dark:bg-slate-800 text-slate-700 dark:text-slate-300">Vanilla JS</span>
                                    <span class="px-2.5 py-1 rounded-md text-[11px] font-mono bg-slate-200 dark:bg-slate-800 text-slate-700 dark:text-slate-300">Animations</span>
                                </div>
                                <button onclick="openProjectModal('origami')" class="w-full py-2.5 px-4 rounded-xl border border-brand-500/30 hover:bg-brand-500/10 text-brand-600 dark:text-brand-accent text-sm font-semibold transition-colors flex items-center justify-center gap-2">
                                    View Interactive Specs <i class="fa-solid fa-arrow-right text-xs"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- PROJECT 5: Java Co-Working Space & ML System -->
                    <div class="project-card glass-panel rounded-2xl overflow-hidden glass-card flex flex-col h-full border border-slate-200 dark:border-slate-800" data-category="java-python database">
                        <div class="h-48 bg-slate-950 p-6 flex flex-col justify-between relative overflow-hidden group">
                            <div class="flex justify-between items-start z-10">
                                <span class="px-3 py-1 rounded-full text-xs font-mono font-semibold bg-red-500/20 text-red-300 border border-red-500/30">Java OOP & SQLite</span>
                                <div class="w-8 h-8 rounded-full bg-slate-800/80 flex items-center justify-center text-red-400">
                                    <i class="fa-brands fa-java"></i>
                                </div>
                            </div>
                            <div class="z-10">
                                <h3 class="text-xl font-bold text-white tracking-wide">Java Co-Working & ML System</h3>
                                <p class="text-xs text-slate-300 mt-1 font-mono">Desktop OOP Application</p>
                            </div>
                        </div>
                        <div class="p-6 flex flex-col flex-grow justify-between space-y-4">
                            <p class="text-sm text-slate-600 dark:text-slate-300 leading-relaxed">
                                Modular Java OOP application structured with multi-package architecture, SQLite database integration, seat reservation logic, and automated booking prediction modules.
                            </p>
                            <div>
                                <div class="flex flex-wrap gap-1.5 mb-4">
                                    <span class="px-2.5 py-1 rounded-md text-[11px] font-mono bg-slate-200 dark:bg-slate-800 text-slate-700 dark:text-slate-300">Java SE / OOP</span>
                                    <span class="px-2.5 py-1 rounded-md text-[11px] font-mono bg-slate-200 dark:bg-slate-800 text-slate-700 dark:text-slate-300">SQLite JDBC</span>
                                    <span class="px-2.5 py-1 rounded-md text-[11px] font-mono bg-slate-200 dark:bg-slate-800 text-slate-700 dark:text-slate-300">ML Simulations</span>
                                </div>
                                <button onclick="openProjectModal('javacowork')" class="w-full py-2.5 px-4 rounded-xl border border-brand-500/30 hover:bg-brand-500/10 text-brand-600 dark:text-brand-accent text-sm font-semibold transition-colors flex items-center justify-center gap-2">
                                    View Architecture & Specs <i class="fa-solid fa-arrow-right text-xs"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- PROJECT 6: Python Data Pipelines & Visualizations -->
                    <div class="project-card glass-panel rounded-2xl overflow-hidden glass-card flex flex-col h-full border border-slate-200 dark:border-slate-800" data-category="java-python database">
                        <div class="h-48 bg-teal-950 p-6 flex flex-col justify-between relative overflow-hidden group">
                            <div class="flex justify-between items-start z-10">
                                <span class="px-3 py-1 rounded-full text-xs font-mono font-semibold bg-emerald-500/20 text-emerald-300 border border-emerald-500/30">Data Science & Python</span>
                                <div class="w-8 h-8 rounded-full bg-slate-800/80 flex items-center justify-center text-emerald-400">
                                    <i class="fa-brands fa-python"></i>
                                </div>
                            </div>
                            <div class="z-10">
                                <h3 class="text-xl font-bold text-white tracking-wide">Python Data Pipelines</h3>
                                <p class="text-xs text-slate-300 mt-1 font-mono">ETL & Statistical Visualizations</p>
                            </div>
                        </div>
                        <div class="p-6 flex flex-col flex-grow justify-between space-y-4">
                            <p class="text-sm text-slate-600 dark:text-slate-300 leading-relaxed">
                                Automated data cleaning, transformation scripts, linear regression models, and exploratory charts built with Pandas, NumPy, Matplotlib, and Seaborn.
                            </p>
                            <div>
                                <div class="flex flex-wrap gap-1.5 mb-4">
                                    <span class="px-2.5 py-1 rounded-md text-[11px] font-mono bg-slate-200 dark:bg-slate-800 text-slate-700 dark:text-slate-300">Python 3.11</span>
                                    <span class="px-2.5 py-1 rounded-md text-[11px] font-mono bg-slate-200 dark:bg-slate-800 text-slate-700 dark:text-slate-300">Pandas / NumPy</span>
                                    <span class="px-2.5 py-1 rounded-md text-[11px] font-mono bg-slate-200 dark:bg-slate-800 text-slate-700 dark:text-slate-300">Matplotlib</span>
                                </div>
                                <button onclick="openProjectModal('pythonpipeline')" class="w-full py-2.5 px-4 rounded-xl border border-brand-500/30 hover:bg-brand-500/10 text-brand-600 dark:text-brand-accent text-sm font-semibold transition-colors flex items-center justify-center gap-2">
                                    View Pipeline Details <i class="fa-solid fa-arrow-right text-xs"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- 3. Tech Stack / Skills Section -->
        <section id="skills" class="py-20 relative">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                
                <div class="text-center max-w-3xl mx-auto space-y-3 mb-16">
                    <h2 class="text-xs font-bold uppercase tracking-widest text-brand-600 dark:text-brand-accent">
                        Technical Mastery
                    </h2>
                    <p class="text-3xl sm:text-4xl font-extrabold text-slate-900 dark:text-white">
                        Skills & Developer Tooling
                    </p>
                    <p class="text-slate-600 dark:text-slate-400 text-sm sm:text-base">
                        Core languages, frameworks, databases, and networking foundations learned through academic BSIT work and hands-on projects.
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                    
                    <!-- Skill Category 1: Backend & Web -->
                    <div class="glass-panel rounded-2xl p-6 border border-slate-200 dark:border-slate-800 hover:border-brand-500/40 transition-colors">
                        <div class="w-12 h-12 rounded-xl bg-brand-500/10 flex items-center justify-center text-brand-500 text-2xl mb-4">
                            <i class="fa-brands fa-php"></i>
                        </div>
                        <h3 class="text-lg font-bold text-slate-900 dark:text-white mb-3">Backend & Server</h3>
                        <ul class="space-y-2.5 text-sm text-slate-600 dark:text-slate-300 font-medium">
                            <li class="flex items-center gap-2"><i class="fa-solid fa-check text-xs text-brand-500"></i> PHP 8.x (OOP, Dynamic Forms)</li>
                            <li class="flex items-center gap-2"><i class="fa-solid fa-check text-xs text-brand-500"></i> RESTful Architecture</li>
                            <li class="flex items-center gap-2"><i class="fa-solid fa-check text-xs text-brand-500"></i> Session & Cookie Security</li>
                            <li class="flex items-center gap-2"><i class="fa-solid fa-check text-xs text-brand-500"></i> Apache Web Server Config</li>
                        </ul>
                    </div>

                    <!-- Skill Category 2: Databases & Security -->
                    <div class="glass-panel rounded-2xl p-6 border border-slate-200 dark:border-slate-800 hover:border-emerald-500/40 transition-colors">
                        <div class="w-12 h-12 rounded-xl bg-emerald-500/10 flex items-center justify-center text-emerald-500 text-2xl mb-4">
                            <i class="fa-solid fa-database"></i>
                        </div>
                        <h3 class="text-lg font-bold text-slate-900 dark:text-white mb-3">Databases & Security</h3>
                        <ul class="space-y-2.5 text-sm text-slate-600 dark:text-slate-300 font-medium">
                            <li class="flex items-center gap-2"><i class="fa-solid fa-check text-xs text-emerald-500"></i> MySQL & MariaDB Architecture</li>
                            <li class="flex items-center gap-2"><i class="fa-solid fa-check text-xs text-emerald-500"></i> AES-256 MySQL Encryption</li>
                            <li class="flex items-center gap-2"><i class="fa-solid fa-check text-xs text-emerald-500"></i> Role-Based Access Control (RBAC)</li>
                            <li class="flex items-center gap-2"><i class="fa-solid fa-check text-xs text-emerald-500"></i> SQLite & Stored Procedures</li>
                        </ul>
                    </div>

                    <!-- Skill Category 3: Desktop & Languages -->
                    <div class="glass-panel rounded-2xl p-6 border border-slate-200 dark:border-slate-800 hover:border-brand-accent/40 transition-colors">
                        <div class="w-12 h-12 rounded-xl bg-brand-accent/10 flex items-center justify-center text-brand-accent text-2xl mb-4">
                            <i class="fa-brands fa-java"></i>
                        </div>
                        <h3 class="text-lg font-bold text-slate-900 dark:text-white mb-3">Languages & Analytics</h3>
                        <ul class="space-y-2.5 text-sm text-slate-600 dark:text-slate-300 font-medium">
                            <li class="flex items-center gap-2"><i class="fa-solid fa-check text-xs text-brand-accent"></i> Java Standard Edition (SE)</li>
                            <li class="flex items-center gap-2"><i class="fa-solid fa-check text-xs text-brand-accent"></i> Python Data Analysis (Pandas)</li>
                            <li class="flex items-center gap-2"><i class="fa-solid fa-check text-xs text-brand-accent"></i> HTML5 / Modern CSS / JavaScript</li>
                            <li class="flex items-center gap-2"><i class="fa-solid fa-check text-xs text-brand-accent"></i> Tailwind CSS Framework</li>
                        </ul>
                    </div>

                    <!-- Skill Category 4: Tools & Infrastructure -->
                    <div class="glass-panel rounded-2xl p-6 border border-slate-200 dark:border-slate-800 hover:border-purple-500/40 transition-colors">
                        <div class="w-12 h-12 rounded-xl bg-purple-500/10 flex items-center justify-center text-purple-500 text-2xl mb-4">
                            <i class="fa-solid fa-network-wired"></i>
                        </div>
                        <h3 class="text-lg font-bold text-slate-900 dark:text-white mb-3">Networking & Tools</h3>
                        <ul class="space-y-2.5 text-sm text-slate-600 dark:text-slate-300 font-medium">
                            <li class="flex items-center gap-2"><i class="fa-solid fa-check text-xs text-purple-500"></i> Cisco Networking Principles</li>
                            <li class="flex items-center gap-2"><i class="fa-solid fa-check text-xs text-purple-500"></i> Git & GitHub Version Control</li>
                            <li class="flex items-center gap-2"><i class="fa-solid fa-check text-xs text-purple-500"></i> XAMPP / Local Environment</li>
                            <li class="flex items-center gap-2"><i class="fa-solid fa-check text-xs text-purple-500"></i> VS Code Studio</li>
                        </ul>
                    </div>

                </div>
            </div>
        </section>

        <!-- 4. Interactive PHP Code Showcase Section -->
        <section id="php-snippets" class="py-20 bg-slate-100/60 dark:bg-slate-900/40 border-y border-slate-200 dark:border-slate-800">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                
                <div class="text-center max-w-3xl mx-auto space-y-3 mb-12">
                    <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-brand-500/10 text-brand-600 dark:text-brand-accent text-xs font-mono font-bold">
                        <i class="fa-brands fa-php"></i> Backend Engineering
                    </div>
                    <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 dark:text-white">
                        PHP Backend Architecture Samples
                    </h2>
                    <p class="text-slate-600 dark:text-slate-400 text-sm sm:text-base">
                        Select a module below to inspect clean, modular PHP snippets powering database connections, dynamic router handlers, and role-based access checks.
                    </p>
                </div>

                <!-- Interactive Code Snippet Tabs -->
                <div class="glass-panel rounded-2xl border border-slate-200 dark:border-slate-800 shadow-xl overflow-hidden max-w-5xl mx-auto">
                    <!-- Tab Headers -->
                    <div class="flex flex-wrap border-b border-slate-200 dark:border-slate-800 bg-slate-200/50 dark:bg-slate-900/80 p-2 gap-2" id="snippetTabHeader">
                        <button onclick="switchSnippetTab('pdo')" id="tab-pdo" class="snippet-tab-btn active px-4 py-2 rounded-xl text-xs sm:text-sm font-mono font-semibold transition-all bg-brand-600 text-white flex items-center gap-2">
                            <i class="fa-solid fa-database"></i> Secure PDO Connection
                        </button>
                        <button onclick="switchSnippetTab('rbac')" id="tab-rbac" class="snippet-tab-btn px-4 py-2 rounded-xl text-xs sm:text-sm font-mono font-semibold transition-all text-slate-700 dark:text-slate-300 hover:bg-slate-300/50 dark:hover:bg-slate-800 flex items-center gap-2">
                            <i class="fa-solid fa-user-shield"></i> RBAC Middleware
                        </button>
                        <button onclick="switchSnippetTab('router')" id="tab-router" class="snippet-tab-btn px-4 py-2 rounded-xl text-xs sm:text-sm font-mono font-semibold transition-all text-slate-700 dark:text-slate-300 hover:bg-slate-300/50 dark:hover:bg-slate-800 flex items-center gap-2">
                            <i class="fa-solid fa-route"></i> Modular Router Handler
                        </button>
                    </div>

                    <!-- Tab Display Panel -->
                    <div class="p-4 sm:p-6 bg-slate-900 text-slate-100 font-mono text-xs sm:text-sm relative">
                        <button onclick="copySnippetCode()" class="absolute top-4 right-4 px-3 py-1.5 rounded-lg bg-slate-800 hover:bg-slate-700 text-slate-300 border border-slate-700 text-xs flex items-center gap-1.5 transition-colors">
                            <i class="fa-solid fa-copy"></i> <span id="copyBtnText">Copy Code</span>
                        </button>

                        <div id="snippetDisplayContainer" class="overflow-x-auto min-h-[300px] pt-4">
                            <!-- Injected JS Content -->
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <!-- 5. Interactive Contact Section -->
        <section id="contact" class="py-20 relative">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-start">
                    
                    <!-- Left: Contact Information -->
                    <div class="lg:col-span-5 space-y-6">
                        <h2 class="text-xs font-bold uppercase tracking-widest text-brand-600 dark:text-brand-accent">
                            Let's Connect
                        </h2>
                        <p class="text-3xl sm:text-4xl font-extrabold text-slate-900 dark:text-white leading-tight">
                            Interested in working together or discussing system development?
                        </p>
                        <p class="text-slate-600 dark:text-slate-400 text-sm leading-relaxed">
                            I am actively seeking software engineering opportunities, internships, and collaborative backend development projects.
                        </p>

                        <div class="space-y-4 pt-4">
                            <div class="flex items-center gap-4 glass-panel p-4 rounded-xl border border-slate-200 dark:border-slate-800">
                                <div class="w-10 h-10 rounded-lg bg-brand-500/10 flex items-center justify-center text-brand-500 text-lg">
                                    <i class="fa-solid fa-envelope"></i>
                                </div>
                                <div>
                                    <div class="text-xs text-slate-500 font-mono">Email Direct</div>
                                    <a href="mailto:geslanilanceericson@gmail.com" class="text-sm font-semibold hover:text-brand-500">geslanilanceericson@gmail.com</a>
                                </div>
                            </div>

                            <div class="flex items-center gap-4 glass-panel p-4 rounded-xl border border-slate-200 dark:border-slate-800">
                                <div class="w-10 h-10 rounded-lg bg-emerald-500/10 flex items-center justify-center text-emerald-500 text-lg">
                                    <i class="fa-solid fa-location-dot"></i>
                                </div>
                                <div>
                                    <div class="text-xs text-slate-500 font-mono">Location</div>
                                    <div class="text-sm font-semibold">Valenzuela / Metro Manila, Philippines</div>
                                </div>
                            </div>

                            <div class="flex items-center gap-4 glass-panel p-4 rounded-xl border border-slate-200 dark:border-slate-800">
                                <div class="w-10 h-10 rounded-lg bg-brand-accent/10 flex items-center justify-center text-brand-accent text-lg">
                                    <i class="fa-brands fa-github"></i>
                                </div>
                                <div>
                                    <div class="text-xs text-slate-500 font-mono">GitHub Profile</div>
                                    <a href="https://github.com/LanceKafka" target="_blank" class="text-sm font-semibold hover:text-brand-accent">github.com/LanceKafka</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Right: Interactive Contact Form & Live Dynamic Preview -->
                    <div class="lg:col-span-7">
                        <div class="glass-panel rounded-2xl p-6 sm:p-8 border border-slate-200 dark:border-slate-800 shadow-xl">
                            
                            <h3 class="text-xl font-bold text-slate-900 dark:text-white mb-6 flex items-center gap-2">
                                <i class="fa-solid fa-paper-plane text-brand-500 text-lg"></i> Send a Message
                            </h3>

                            <form id="contactForm" onsubmit="handleContactSubmit(event)" class="space-y-4">
                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                    <div>
                                        <label class="block text-xs font-semibold uppercase text-slate-600 dark:text-slate-400 mb-1.5">Your Name</label>
                                        <input type="text" id="senderName" required placeholder="John Doe" class="w-full px-4 py-3 rounded-xl bg-slate-100 dark:bg-slate-900/90 border border-slate-300 dark:border-slate-700 text-slate-900 dark:text-white focus:outline-none focus:ring-2 focus:ring-brand-500 text-sm">
                                    </div>
                                    <div>
                                        <label class="block text-xs font-semibold uppercase text-slate-600 dark:text-slate-400 mb-1.5">Your Email</label>
                                        <input type="email" id="senderEmail" required placeholder="john@company.com" class="w-full px-4 py-3 rounded-xl bg-slate-100 dark:bg-slate-900/90 border border-slate-300 dark:border-slate-700 text-slate-900 dark:text-white focus:outline-none focus:ring-2 focus:ring-brand-500 text-sm">
                                    </div>
                                </div>

                                <div>
                                    <label class="block text-xs font-semibold uppercase text-slate-600 dark:text-slate-400 mb-1.5">Project / Inquiry Subject</label>
                                    <input type="text" id="senderSubject" required placeholder="Web Development / System Architecture" class="w-full px-4 py-3 rounded-xl bg-slate-100 dark:bg-slate-900/90 border border-slate-300 dark:border-slate-700 text-slate-900 dark:text-white focus:outline-none focus:ring-2 focus:ring-brand-500 text-sm">
                                </div>

                                <div>
                                    <label class="block text-xs font-semibold uppercase text-slate-600 dark:text-slate-400 mb-1.5">Message Content</label>
                                    <textarea id="senderMessage" rows="4" required placeholder="Describe your project requirements or hello message..." class="w-full px-4 py-3 rounded-xl bg-slate-100 dark:bg-slate-900/90 border border-slate-300 dark:border-slate-700 text-slate-900 dark:text-white focus:outline-none focus:ring-2 focus:ring-brand-500 text-sm"></textarea>
                                </div>

                                <button type="submit" class="w-full py-3.5 px-6 rounded-xl bg-brand-700 hover:bg-brand-600 text-white font-semibold text-sm shadow-md transition-all flex items-center justify-center gap-2">
                                    <i class="fa-solid fa-paper-plane"></i> Transmit Message
                                </button>
                            </form>

                            <!-- Form Submission Confirmation Alert Box -->
                            <div id="formAlert" class="hidden mt-4 p-4 rounded-xl bg-emerald-500/10 border border-emerald-500/30 text-emerald-600 dark:text-emerald-400 text-xs sm:text-sm font-medium">
                                <div class="flex items-center gap-2">
                                    <i class="fa-solid fa-circle-check text-lg"></i>
                                    <span>Thank you! Your message simulation payload was processed successfully.</span>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="border-t border-slate-200 dark:border-slate-800 bg-slate-100 dark:bg-slate-950 py-10 transition-colors">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col sm:flex-row items-center justify-between gap-4">
            <div class="flex items-center gap-2 font-mono text-xs text-slate-500">
                <span>&copy; <span id="yearSpan"></span> Lance Ericson Geslani.</span>
                <span>BSIT Portfolio Platform.</span>
            </div>
            
            <div class="flex items-center gap-6 text-slate-500 text-lg">
                <a href="https://github.com/LanceKafka" target="_blank" class="hover:text-brand-accent transition-colors"><i class="fa-brands fa-github"></i></a>
                <a href="mailto:geslanilanceericson@gmail.com" class="hover:text-emerald-500 transition-colors"><i class="fa-solid fa-envelope"></i></a>
            </div>
        </div>
    </footer>

    <!-- Project Details Modal Lightbox -->
    <div id="projectModal" class="fixed inset-0 z-50 hidden flex items-center justify-center p-4 bg-slate-950/80 backdrop-blur-md transition-opacity">
        <div class="glass-panel w-full max-w-3xl rounded-2xl max-h-[90vh] overflow-y-auto border border-slate-200 dark:border-slate-800 p-6 sm:p-8 relative text-slate-800 dark:text-slate-100 shadow-2xl">
            <!-- Close Modal Button -->
            <button onclick="closeProjectModal()" class="absolute top-5 right-5 w-9 h-9 rounded-full bg-slate-200 dark:bg-slate-800 flex items-center justify-center hover:bg-slate-300 dark:hover:bg-slate-700 transition-colors text-slate-600 dark:text-slate-300">
                <i class="fa-solid fa-xmark text-lg"></i>
            </button>

            <!-- Dynamic Modal Content Injection Target -->
            <div id="modalBody">
                <!-- Content set via JS -->
            </div>
        </div>
    </div>

    <script>
        // Set dynamic copyright year
        document.getElementById('yearSpan').textContent = new Date().getFullYear();

        // Dark Mode Toggle Logic
        const themeToggle = document.getElementById('themeToggle');
        const themeIcon = document.getElementById('themeIcon');
        
        // Initial Theme Setup
        if (localStorage.theme === 'dark') {
            document.documentElement.classList.add('dark');
            themeIcon.className = 'fa-solid fa-moon text-lg';
        } else {
            document.documentElement.classList.remove('dark');
            themeIcon.className = 'fa-solid fa-sun text-lg text-amber-500';
        }

        themeToggle.addEventListener('click', () => {
            if (document.documentElement.classList.contains('dark')) {
                document.documentElement.classList.remove('dark');
                localStorage.theme = 'light';
                themeIcon.className = 'fa-solid fa-sun text-lg text-amber-500';
            } else {
                document.documentElement.classList.add('dark');
                localStorage.theme = 'dark';
                themeIcon.className = 'fa-solid fa-moon text-lg';
            }
        });

        // Mobile Menu Toggle
        const mobileMenuBtn = document.getElementById('mobileMenuBtn');
        const mobileMenu = document.getElementById('mobileMenu');
        
        mobileMenuBtn.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });

        document.querySelectorAll('.mobile-link').forEach(link => {
            link.addEventListener('click', () => mobileMenu.classList.add('hidden'));
        });

        // Category Filter Logic for Projects
        const filterBtns = document.querySelectorAll('.filter-btn');
        const projectCards = document.querySelectorAll('.project-card');

        filterBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                filterBtns.forEach(b => {
                    b.classList.remove('bg-brand-600', 'text-white', 'shadow-md');
                    b.classList.add('bg-slate-200', 'dark:bg-slate-800', 'text-slate-700', 'dark:text-slate-300');
                });

                btn.classList.remove('bg-slate-200', 'dark:bg-slate-800', 'text-slate-700', 'dark:text-slate-300');
                btn.classList.add('bg-brand-600', 'text-white', 'shadow-md');

                const filter = btn.getAttribute('data-filter');

                projectCards.forEach(card => {
                    if (filter === 'all' || card.getAttribute('data-category').includes(filter)) {
                        card.style.display = 'flex';
                    } else {
                        card.style.display = 'none';
                    }
                });
            });
        });

        // PHP Code Snippets Dictionary
        const snippetData = {
            pdo: `<pre class="text-xs sm:text-sm font-mono leading-relaxed"><span class="code-syntax-keyword">&lt;?php</span>
<span class="code-syntax-comment">// DatabaseConnection.php - Secure Singleton PDO Wrapper</span>
<span class="code-syntax-keyword">namespace</span> App\\Core;

<span class="code-syntax-keyword">use</span> PDO;
<span class="code-syntax-keyword">use</span> PDOException;

<span class="code-syntax-keyword">class</span> <span class="code-syntax-fn">Database</span> {
    <span class="code-syntax-keyword">private static</span> ?PDO <span class="code-syntax-var">$instance</span> = <span class="code-syntax-keyword">null</span>;

    <span class="code-syntax-keyword">public static function</span> <span class="code-syntax-fn">getConnection</span>(): PDO {
        <span class="code-syntax-keyword">if</span> (self::<span class="code-syntax-var">$instance</span> === <span class="code-syntax-keyword">null</span>) {
            <span class="code-syntax-var">$host</span> = <span class="code-syntax-string">'127.0.0.1'</span>;
            <span class="code-syntax-var">$db</span>   = <span class="code-syntax-string">'pc_trust_db'</span>;
            <span class="code-syntax-var">$user</span> = <span class="code-syntax-string">'app_sec_user'</span>;
            <span class="code-syntax-var">$pass</span> = <span class="code-syntax-string">'SecuredPassphrase_2026!'</span>;
            <span class="code-syntax-var">$dsn</span>  = <span class="code-syntax-string">"mysql:host=<span class="code-syntax-var">$host</span>;dbname=<span class="code-syntax-var">$db</span>;charset=utf8mb4"</span>;

            <span class="code-syntax-var">$options</span> = [
                PDO::ATTR_ERRMODE            =&gt; PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE =&gt; PDO::FETCH_ASSOC,
                PDO::ATTR_EMULATE_PREPARES   =&gt; <span class="code-syntax-keyword">false</span>,
            ];

            <span class="code-syntax-keyword">try</span> {
                self::<span class="code-syntax-var">$instance</span> = <span class="code-syntax-keyword">new</span> PDO(<span class="code-syntax-var">$dsn</span>, <span class="code-syntax-var">$user</span>, <span class="code-syntax-var">$pass</span>, <span class="code-syntax-var">$options</span>);
            } <span class="code-syntax-keyword">catch</span> (PDOException <span class="code-syntax-var">$e</span>) {
                <span class="code-syntax-fn">error_log</span>(<span class="code-syntax-var">$e</span>-&gt;<span class="code-syntax-fn">getMessage</span>());
                <span class="code-syntax-keyword">die</span>(<span class="code-syntax-string">'Database Connection Failure'</span>);
            }
        }
        <span class="code-syntax-keyword">return</span> self::<span class="code-syntax-var">$instance</span>;
    }
}
<span class="code-syntax-keyword">?&gt;</span></pre>`,

            rbac: `<pre class="text-xs sm:text-sm font-mono leading-relaxed"><span class="code-syntax-keyword">&lt;?php</span>
<span class="code-syntax-comment">// RBACMiddleware.php - Role Access Enforcement & Auth Validation</span>
<span class="code-syntax-keyword">namespace</span> App\\Middleware;

<span class="code-syntax-keyword">class</span> <span class="code-syntax-fn">RBACMiddleware</span> {
    <span class="code-syntax-keyword">public static function</span> <span class="code-syntax-fn">authorize</span>(<span class="code-syntax-keyword">array</span> <span class="code-syntax-var">$allowedRoles</span>): <span class="code-syntax-keyword">void</span> {
        <span class="code-syntax-fn">session_start</span>();

        <span class="code-syntax-keyword">if</span> (!<span class="code-syntax-keyword">isset</span>(<span class="code-syntax-var">$_SESSION</span>[<span class="code-syntax-string">'authenticated_user'</span>])) {
            <span class="code-syntax-fn">header</span>(<span class="code-syntax-string">'Location: /login.php?error=unauthorized'</span>);
            <span class="code-syntax-keyword">exit</span>();
        }

        <span class="code-syntax-var">$userRole</span> = <span class="code-syntax-var">$_SESSION</span>[<span class="code-syntax-string">'user_role'</span>] ?? <span class="code-syntax-string">'GUEST'</span>;

        <span class="code-syntax-keyword">if</span> (!<span class="code-syntax-fn">in_array</span>(<span class="code-syntax-var">$userRole</span>, <span class="code-syntax-var">$allowedRoles</span>, <span class="code-syntax-keyword">true</span>)) {
            <span class="code-syntax-fn">http_response_code</span>(403);
            <span class="code-syntax-keyword">echo</span> <span class="code-syntax-string">'&lt;h1&gt;403 Access Forbidden: Insufficient Role Permissions&lt;/h1&gt;'</span>;
            <span class="code-syntax-keyword">exit</span>();
        }
    }
}
<span class="code-syntax-keyword">?&gt;</span></pre>`,

            router: `<pre class="text-xs sm:text-sm font-mono leading-relaxed"><span class="code-syntax-keyword">&lt;?php</span>
<span class="code-syntax-comment">// Router.php - Front Controller Dynamic URL Dispatcher</span>
<span class="code-syntax-keyword">namespace</span> App\\Core;

<span class="code-syntax-keyword">class</span> <span class="code-syntax-fn">Router</span> {
    <span class="code-syntax-keyword">private array</span> <span class="code-syntax-var">$routes</span> = [];

    <span class="code-syntax-keyword">public function</span> <span class="code-syntax-fn">addRoute</span>(<span class="code-syntax-keyword">string</span> <span class="code-syntax-var">$path</span>, <span class="code-syntax-keyword">callable</span> <span class="code-syntax-var">$handler</span>): <span class="code-syntax-keyword">void</span> {
        <span class="code-syntax-var">$this</span>-&gt;routes[<span class="code-syntax-var">$path</span>] = <span class="code-syntax-var">$handler</span>;
    }

    <span class="code-syntax-keyword">public function</span> <span class="code-syntax-fn">dispatch</span>(<span class="code-syntax-keyword">string</span> <span class="code-syntax-var">$uri</span>): <span class="code-syntax-keyword">void</span> {
        <span class="code-syntax-var">$parsedPath</span> = <span class="code-syntax-fn">parse_url</span>(<span class="code-syntax-var">$uri</span>, PHP_URL_PATH);

        <span class="code-syntax-keyword">if</span> (<span class="code-syntax-fn">array_key_exists</span>(<span class="code-syntax-var">$parsedPath</span>, <span class="code-syntax-var">$this</span>-&gt;routes)) {
            <span class="code-syntax-fn">call_user_func</span>(<span class="code-syntax-var">$this</span>-&gt;routes[<span class="code-syntax-var">$parsedPath</span>]);
        } <span class="code-syntax-keyword">else</span> {
            <span class="code-syntax-fn">http_response_code</span>(404);
            <span class="code-syntax-keyword">echo</span> <span class="code-syntax-string">"Route {$parsedPath} not found."</span>;
        }
    }
}
<span class="code-syntax-keyword">?&gt;</span></pre>`
        };

        let currentActiveTab = 'pdo';

        function switchSnippetTab(tabKey) {
            currentActiveTab = tabKey;
            
            // Update Tab UI States
            document.querySelectorAll('.snippet-tab-btn').forEach(btn => {
                btn.classList.remove('bg-brand-600', 'text-white');
                btn.classList.add('text-slate-700', 'dark:text-slate-300');
            });

            const activeBtn = document.getElementById(`tab-${tabKey}`);
            activeBtn.classList.add('bg-brand-600', 'text-white');

            // Inject Snippet
            document.getElementById('snippetDisplayContainer').innerHTML = snippetData[tabKey];
        }

        // Initialize default snippet tab
        switchSnippetTab('pdo');

        // Copy Code Snippet Handler
        function copySnippetCode() {
            const tempTextArea = document.createElement('textarea');
            tempTextArea.value = snippetData[currentActiveTab].replace(/<[^>]*>?/gm, '');
            document.body.appendChild(tempTextArea);
            tempTextArea.select();
            document.execCommand('copy');
            document.body.removeChild(tempTextArea);

            const copyBtnText = document.getElementById('copyBtnText');
            copyBtnText.textContent = 'Copied!';
            setTimeout(() => {
                copyBtnText.textContent = 'Copy Code';
            }, 2000);
        }

        // Project Modal Lightbox Data
        const projectModalDetails = {
            vlinc: {
                title: "V-LINC - Community Web Platform",
                tagline: "PHP / MySQL Accessible Community Hub",
                badge: "Web & PHP Architecture",
                description: "V-LINC is a web-based platform designed with clean layouts, mobile responsivity, and accessibility compliance. Built to seamlessly connect user communities through simple dynamic interactions.",
                features: [
                    "Modular PHP MVC folder structure with clear separation of templates and logic",
                    "Parameterized PDO prepared queries for protection against SQL Injections",
                    "Session validation & custom error routing logic",
                    "Fully responsive layout utilizing utility-first CSS principles"
                ],
                tech: ["PHP 8.2", "MySQL", "JavaScript", "HTML5/CSS3"]
            },
            pctrust: {
                title: "PC TRUST - Encrypted E-Commerce & Database",
                tagline: "Role-Based Security & Encrypted MySQL Data",
                badge: "Security & Database",
                description: "PC TRUST is an enterprise computer hardware e-commerce platform prioritizing data integrity and protection through Role-Based Access Control (RBAC) and AES MySQL database field encryption.",
                features: [
                    "Field-level AES_ENCRYPT and AES_DECRYPT integration for user PII",
                    "Role-Based Access Control (RBAC) distinguishing Admin, Staff, and Customer privileges",
                    "Transactional SQL statements protecting order processing consistency",
                    "Secure password hashing utilizing modern Password_Bcrypt standards"
                ],
                tech: ["PHP PDO", "MySQL AES", "RBAC Security", "Tailwind CSS"]
            },
            abiyarn: {
                title: "AbiYarn - Yarn & Crafts Inventory System",
                tagline: "Custom Layouts & Dynamic Stock Management",
                badge: "E-Commerce & Inventory",
                description: "AbiYarn is a full-stack e-commerce and inventory management web app specifically tailored for yarn, craft materials, and custom artisan products.",
                features: [
                    "Custom CSS Grid & Flexbox layout engineered without heavy framework dependencies",
                    "Automated SQL Triggers that adjust inventory stock levels upon order confirmation",
                    "Advanced filtering capabilities across material types, yarn weight, and color palettes",
                    "Dynamic dashboard for sales metrics and fast stock replenishment tracking"
                ],
                tech: ["PHP", "MySQL Triggers", "Custom CSS Grid", "JS Async Fetch"]
            },
            origami: {
                title: "House of Origami",
                tagline: "Creative Interactive UI / UX Showcase",
                badge: "Interactive Web Application",
                description: "An interactive web application showcasing creative HTML, CSS, and JS frontend design with origami folding instructions and vector animations.",
                features: [
                    "Custom SVG vector paths with step-by-step interactive step indicators",
                    "Smooth CSS keyframe state transitions and micro-interactions",
                    "Lightweight JavaScript state controller for step progression",
                    "Cross-device mobile touch touch-swipe optimizations"
                ],
                tech: ["HTML5", "CSS Keyframes", "Vanilla JavaScript", "SVG Graphics"]
            },
            javacowork: {
                title: "Java Co-Working Space & Machine Learning System",
                tagline: "Multi-Package Desktop System with SQLite Integration",
                badge: "Java Desktop & ML",
                description: "A comprehensive Java Object-Oriented Desktop application managing desk reservations, member billing, and machine learning occupancy prediction models.",
                features: [
                    "Multi-package enterprise directory architecture (Model, View, Controller, DAO)",
                    "SQLite JDBC database connection with CTE (Common Table Expression) queries",
                    "Linear Regression algorithm simulation predicting peak occupancy hours",
                    "Strict encapsulation, interface implementations, and custom Exception handlers"
                ],
                tech: ["Java SE", "SQLite Database", "OOP Design Patterns", "ML Algorithms"]
            },
            pythonpipeline: {
                title: "Python Data Pipelines & Visualizations",
                tagline: "Automated Data Analysis & Statistical Charting",
                badge: "Data Science & ETL",
                description: "An automated data engineering pipeline performing dataset ingestion, outlier cleaning, regression modelling, and rich data chart generation.",
                features: [
                    "Data ETL scripts reading unformatted CSV/JSON datasets into Pandas DataFrames",
                    "Statistical regression analysis & correlation heatmap plotting with Seaborn",
                    "Automated PDF/PNG analytical report exporting pipeline",
                    "Optimized vectorized operations for fast execution"
                ],
                tech: ["Python 3.11", "Pandas", "NumPy", "Matplotlib / Seaborn"]
            }
        };

        function openProjectModal(key) {
            const data = projectModalDetails[key];
            if (!data) return;

            const modalBody = document.getElementById('modalBody');
            modalBody.innerHTML = `
                <div class="space-y-6">
                    <div>
                        <span class="px-3 py-1 rounded-full text-xs font-mono font-semibold bg-brand-500/20 text-brand-600 dark:text-brand-accent border border-brand-500/30">
                            ${data.badge}
                        </span>
                        <h2 class="text-2xl sm:text-3xl font-extrabold mt-3 text-slate-900 dark:text-white">
                            ${data.title}
                        </h2>
                        <p class="text-sm font-mono text-slate-500 dark:text-slate-400 mt-1">
                            ${data.tagline}
                        </p>
                    </div>

                    <p class="text-slate-600 dark:text-slate-300 text-sm leading-relaxed">
                        ${data.description}
                    </p>

                    <div class="space-y-3">
                        <h4 class="text-xs font-bold uppercase tracking-wider text-slate-900 dark:text-white">Key Architectural Features</h4>
                        <ul class="space-y-2 text-xs sm:text-sm text-slate-600 dark:text-slate-300">
                            ${data.features.map(f => `<li class="flex items-start gap-2"><i class="fa-solid fa-check-circle text-emerald-500 mt-0.5"></i> <span>${f}</span></li>`).join('')}
                        </ul>
                    </div>

                    <div>
                        <h4 class="text-xs font-bold uppercase tracking-wider text-slate-900 dark:text-white mb-2">Technologies Used</h4>
                        <div class="flex flex-wrap gap-2">
                            ${data.tech.map(t => `<span class="px-3 py-1 rounded-lg bg-slate-200 dark:bg-slate-800 text-xs font-mono font-semibold">${t}</span>`).join('')}
                        </div>
                    </div>

                    <div class="pt-4 border-t border-slate-200 dark:border-slate-800 flex justify-end">
                        <button onclick="closeProjectModal()" class="px-5 py-2.5 rounded-xl bg-slate-200 dark:bg-slate-800 hover:bg-slate-300 dark:hover:bg-slate-700 text-xs font-bold">
                            Close Preview
                        </button>
                    </div>
                </div>
            `;

            document.getElementById('projectModal').classList.remove('hidden');
        }

        function closeProjectModal() {
            document.getElementById('projectModal').classList.add('hidden');
        }

        // Close Modal on backdrop click
        document.getElementById('projectModal').addEventListener('click', (e) => {
            if (e.target === document.getElementById('projectModal')) {
                closeProjectModal();
            }
        });

        // Contact Form Submission Handler Simulation
        function handleContactSubmit(e) {
            e.preventDefault();
            const alertBox = document.getElementById('formAlert');
            alertBox.classList.remove('hidden');
            
            // Reset Form Fields
            document.getElementById('contactForm').reset();

            // Auto Hide Alert
            setTimeout(() => {
                alertBox.classList.add('hidden');
            }, 5000);
        }
    </script>
</body>
</html>