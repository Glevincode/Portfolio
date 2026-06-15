<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Portfolio</title>
    <link rel="stylesheet" href="{{ asset('css/portfolio.css') }}">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  
</head>

<body>

<!-- ── HEADER ── -->
<header id="header">
    <a href="#home" class="logo">
        <img src="{{ asset('images/logo.png') }}" alt="Glevin's Logo" class="logo-img">
    </a>
    <nav class="navigation" id="navbar">
        <a href="#home"       class="nav-link active"><i class='bx bx-home-alt-2'></i><span data-i18n="nav.home">Home</span></a>
        <a href="#about"      class="nav-link"><i class='bx bx-user'></i><span data-i18n="nav.about">About</span></a>
        <a href="#stack"      class="nav-link"><i class='bx bx-code-alt'></i><span data-i18n="nav.stack">Stack</span></a>
        <a href="#projects"   class="nav-link"><i class='bx bx-grid-alt'></i><span data-i18n="nav.projects">Projects</span></a>
        <a href="#experience" class="nav-link"><i class='bx bx-briefcase'></i><span data-i18n="nav.experience">Experience</span></a>
        <a href="#contact"    class="nav-link"><i class='bx bx-envelope'></i><span data-i18n="nav.contact">Contact</span></a>

        <!-- Language inside mobile hamburger menu (hidden on desktop via CSS) -->
        <div class="nav-lang-row" id="nav-lang-row">
            <p class="nav-lang-section-label"><span data-i18n="nav.language">Language</span></p>
            <button class="nav-lang-toggle" id="nav-lang-toggle" onclick="toggleNavLang(event)" aria-expanded="false">
                <i class='bx bx-globe'></i>
                <span class="nav-lang-badge" id="nav-lang-badge">
                    <span class="nl-flag" id="nav-lang-flag">🇺🇸</span>
                    <span class="nl-name" id="nav-lang-name">English</span>
                </span>
                <i class='bx bx-chevron-down nav-lang-chev'></i>
            </button>
            <div class="nav-lang-opts" id="nav-lang-opts">
                <button class="nav-lang-opt active-lang" data-lang="en" onclick="switchLang('en')">
                    <span class="nl-flag">🇺🇸</span>
                    <span>English</span>
                    <i class='bx bx-check nl-check'></i>
                </button>
                <button class="nav-lang-opt" data-lang="fil" onclick="switchLang('fil')">
                    <span class="nl-flag">🇵🇭</span>
                    <span>Filipino</span>
                    <i class='bx bx-check nl-check'></i>
                </button>
                <button class="nav-lang-opt" data-lang="ja" onclick="switchLang('ja')">
                    <span class="nl-flag">🇯🇵</span>
                    <span>日本語</span>
                    <i class='bx bx-check nl-check'></i>
                </button>
            </div>
        </div>
    </nav>

    <!-- Language Switcher — desktop only (hidden on mobile via CSS) -->
    <div class="lang-switcher" id="lang-switcher">
        <button class="lang-trigger" id="lang-trigger" aria-haspopup="listbox" aria-expanded="false" aria-label="Select language">
            <span class="lang-flag" id="lang-flag">🇺🇸</span>
            <span class="lang-label" id="lang-label">EN</span>
            <i class='bx bx-chevron-down lang-chevron'></i>
        </button>
        <div class="lang-dropdown" role="listbox" id="lang-dropdown">
            <button class="lang-option active" data-lang="en" role="option" aria-selected="true">
                <span class="lang-flag">🇺🇸</span>
                <span class="lang-name">English</span>
                <i class='bx bx-check lang-check'></i>
            </button>
            <button class="lang-option" data-lang="fil" role="option" aria-selected="false">
                <span class="lang-flag">🇵🇭</span>
                <span class="lang-name">Filipino</span>
                <i class='bx bx-check lang-check'></i>
            </button>
            <button class="lang-option" data-lang="ja" role="option" aria-selected="false">
                <span class="lang-flag">🇯🇵</span>
                <span class="lang-name">日本語</span>
                <i class='bx bx-check lang-check'></i>
            </button>
        </div>
    </div>

    <button class="menu-btn" id="menu-btn" aria-label="Toggle navigation">
        <span></span><span></span><span></span>
    </button>
</header>

<!-- ── HOME ── -->
<section class="home" id="home">
    <div class="particles" aria-hidden="true">
        <span></span><span></span><span></span><span></span>
        <span></span><span></span><span></span><span></span>
    </div>
    <div class="home-content">
        <p class="home-tagline" data-i18n="home.greeting">Hello, I'm</p>
        <h1 class="home-name">Glevin Bonganciso</h1>
        <p class="home-role"><span class="typed-role"></span></p>
        <p class="home-sub" data-i18n="home.sub">
            I design and build full-stack web applications and cross-platform mobile apps 
            turning ideas into clean, functional products using Laravel, Next.js, and React Native.
        </p>
        <div class="home-actions">
            <a href="#projects" class="btn btn-primary" data-i18n="home.viewProjects">View Projects</a>
            <a href="#" class="btn btn-outline" onclick="openCvModal(); return false;" data-i18n="home.downloadCv">
                Download CV <i class='bx bx-download'></i>
            </a>
        </div>
        <div class="social-row">
            <a href="#" class="social-icon" aria-label="Facebook"><i class='bx bxl-facebook'></i></a>
            <a href="#" class="social-icon" aria-label="Instagram"><i class='bx bxl-instagram'></i></a>
            <a href="#" class="social-icon" aria-label="Twitter"><i class='bx bxl-twitter'></i></a>
            <a href="#" class="social-icon" aria-label="GitHub"><i class='bx bxl-github'></i></a>
            <a href="mailto:glevinbonganciso529@gmail.com" class="social-icon" aria-label="Email"><i class='bx bx-envelope'></i></a>
        </div>
    </div>
    <div class="home-image-wrap">
        <div class="home-image-ring"></div>
        <div class="home-image-ring-2"></div>
        <img src="{{ asset('images/formal.png') }}" alt="Glevin Bonganciso" class="home-photo">
    </div>
    <a href="#about" class="scroll-hint" aria-label="Scroll down">
        <span class="scroll-dot"></span>
    </a>
</section>

<!-- ── CV MODAL ── -->
<div class="cv-modal-overlay" id="cv-modal" onclick="cvBgClick(event)" role="dialog" aria-modal="true" aria-label="CV Viewer">
    <div class="cv-modal-box" onclick="event.stopPropagation()">
        <div class="cv-modal-header">
            <div class="cv-modal-title">
                <i class='bx bx-file'></i>
                <span>Glevin Bonganciso   CV</span>
            </div>
            <div class="cv-modal-actions">
                <a href="{{ asset('files/cv.pdf') }}"
                   download="Glevin_Bonganciso_CV.pdf"
                   class="btn btn-primary">
                    <i class='bx bx-download'></i>
                    <span class="cv-btn-label" data-i18n="cv.download">Download</span>
                </a>
                <a href="{{ asset('files/cv.pdf') }}"
                   target="_blank"
                   class="btn btn-outline"
                   onclick="printCv(); return false;">
                    <i class='bx bx-printer'></i>
                    <span class="cv-btn-label" data-i18n="cv.print">Print</span>
                </a>
                <button class="cv-close-btn" onclick="closeCvModal()" aria-label="Close">
                    <i class='bx bx-x'></i>
                </button>
            </div>
        </div>
        <div class="cv-modal-body">
            <div class="cv-loading" id="cv-loading">
                <i class='bx bx-loader-alt bx-spin'></i>
                <span data-i18n="cv.loading">Loading preview…</span>
            </div>
            <iframe id="cv-iframe" src="" title="CV Preview" onload="cvLoaded()"></iframe>
        </div>
    </div>
</div>

<!-- ── ABOUT ── -->
<section class="about" id="about">
    <div class="section-label" data-i18n="about.label">Who I Am</div>
    <div class="about-grid">
        <div class="about-image-wrap">
            <div class="about-image-bg"></div>
            <img src="{{ asset('images/formal.png') }}" alt="About Glevin" class="about-photo">
            <div class="about-exp-badge">
                <span class="badge-num">💻</span>
                <span class="badge-text" data-i18n="about.badge">Full-Stack<br>Developer</span>
            </div>
        </div>
        <div class="about-text">
            <h2 class="section-title">About <span class="accent">Me</span></h2>
            <h4 class="about-role" data-i18n="about.role">Web &amp; Mobile Developer</h4>
            <p data-i18n="about.p1">
                I'm Glevin Bonganciso, a developer from Vallehermoso, Negros Oriental, Philippines. I specialize in building full-stack web applications and cross-platform mobile apps — with a strong focus on clean architecture, maintainable code, and smooth user experiences.
            </p>
            <p data-i18n="about.p2">
                From designing REST APIs with Laravel to crafting responsive frontends with Next.js, and deploying mobile apps with React Native — I enjoy owning the full product lifecycle and bringing ideas to life from scratch.
            </p>
            <div class="about-stats">
                <div class="stat"><span class="stat-num">5+</span><span class="stat-label" data-i18n="about.stat1">Projects Built</span></div>
                <div class="stat"><span class="stat-num">8+</span><span class="stat-label" data-i18n="about.stat2">Technologies</span></div>
                <div class="stat"><span class="stat-num">2</span><span class="stat-label" data-i18n="about.stat3">Platforms</span></div>
            </div>
            <a href="#contact" class="btn btn-primary" data-i18n="about.cta">Let's Work Together</a>
        </div>
    </div>
</section>

<!-- ── TECH STACK ── -->
<section class="stack" id="stack">
    <div style="text-align:center">
        <div class="section-label" style="display:inline-flex" data-i18n="stack.label">What I Use</div>
    </div>
    <h2 class="section-title center">My <span class="accent" data-i18n="stack.title">Tech Stack</span></h2>
    <p class="section-sub center" data-i18n="stack.sub">
        The tools and technologies I use to build web and mobile products.
    </p>
    <div class="stack-grid">
        <div class="stack-card">
            <div class="stack-card-header">
                <div class="stack-icon web"><i class='bx bx-globe'></i></div>
                <div>
                    <h3 class="stack-title" data-i18n="stack.web.title">Web Development</h3>
                    <p class="stack-sub" data-i18n="stack.web.sub">Full-stack web applications</p>
                </div>
            </div>
            <div class="tech-list">
                <div class="tech-item"><span class="tech-dot web"></span><div class="tech-info"><strong>Laravel</strong><span data-i18n="stack.laravel">PHP framework — REST APIs, routing, auth, Eloquent ORM</span></div></div>
                <div class="tech-item"><span class="tech-dot web"></span><div class="tech-info"><strong>PHP</strong><span data-i18n="stack.php">Server-side scripting &amp; backend logic</span></div></div>
                <div class="tech-item"><span class="tech-dot web"></span><div class="tech-info"><strong>TypeScript</strong><span data-i18n="stack.ts">Strongly typed JavaScript for safer, scalable code</span></div></div>
                <div class="tech-item"><span class="tech-dot web"></span><div class="tech-info"><strong>Next.js</strong><span data-i18n="stack.nextjs">React framework — SSR, SSG, and full-stack routing</span></div></div>
                <div class="tech-divider" data-i18n="stack.databases">Databases</div>
                <div class="tech-item"><span class="tech-dot db"></span><div class="tech-info"><strong>MySQL</strong><span data-i18n="stack.mysql">Relational database for structured web app data</span></div></div>
                <div class="tech-item"><span class="tech-dot db"></span><div class="tech-info"><strong>Supabase</strong><span data-i18n="stack.supabase">Open-source Firebase alternative — Postgres + auth + storage</span></div></div>
            </div>
        </div>
        <div class="stack-card">
            <div class="stack-card-header">
                <div class="stack-icon mobile"><i class='bx bx-mobile-alt'></i></div>
                <div>
                    <h3 class="stack-title" data-i18n="stack.mobile.title">Mobile Development</h3>
                    <p class="stack-sub" data-i18n="stack.mobile.sub">Cross-platform iOS &amp; Android apps</p>
                </div>
            </div>
            <div class="tech-list">
                <div class="tech-item"><span class="tech-dot mobile"></span><div class="tech-info"><strong>React Native</strong><span data-i18n="stack.rn">Cross-platform mobile apps with a single JavaScript codebase</span></div></div>
                <div class="tech-item"><span class="tech-dot mobile"></span><div class="tech-info"><strong>Expo</strong><span data-i18n="stack.expo">Managed React Native workflow — faster builds &amp; OTA updates</span></div></div>
                <div class="tech-divider" data-i18n="stack.database">Database</div>
                <div class="tech-item"><span class="tech-dot db"></span><div class="tech-info"><strong>Firebase</strong><span data-i18n="stack.firebase">Realtime database, authentication, cloud storage &amp; push notifications</span></div></div>
            </div>
        </div>
    </div>
</section>

<!-- ── PROJECTS ── -->
<section class="projects" id="projects">
    <div style="text-align:center">
        <div class="section-label" style="display:inline-flex" data-i18n="projects.label">What I've Built</div>
    </div>
    <h2 class="section-title center">Finished <span class="accent" data-i18n="projects.title">Projects</span></h2>
    <p class="section-sub center" data-i18n="projects.sub">
        A selection of projects I've completed during my studies and internship.
    </p>

    <div class="projects-bento">
        @foreach ($projects as $index => $project)
        @php
            $allImages = [];
            if (!empty($project['images'])) {
                foreach ($project['images'] as $img) {
                    $clean = ltrim($img, '/ ');
                   $allImages[] = asset($clean);
                }
            } elseif (!empty($project['image'])) {
                $clean = ltrim($project['image'], '/ ');
                $allImages[] = asset($clean);
            }
            $hasImages  = count($allImages) > 0;
            $multiImage = count($allImages) > 1;
            $isOngoing  = !empty($project['ongoing']);
        @endphp

        <div class="project-card2 {{ !empty($project['featured']) ? 'project-featured2' : '' }}"
             onclick="openProjectModal({{ $index }})"
             role="button" tabindex="0"
             aria-label="View details for {{ $project['name'] }}"
             onkeydown="if(event.key==='Enter'||event.key===' ')openProjectModal({{ $index }})">

            <div class="project-img-area" id="card-img-area-{{ $index }}">
                @if ($hasImages)
                    @foreach ($allImages as $imgIdx => $imgUrl)
                        <img src="{{ $imgUrl }}"
                             alt="{{ $project['name'] }} screenshot {{ $imgIdx + 1 }}"
                             class="project-img2 card-slide{{ $imgIdx === 0 ? ' card-slide-active' : '' }}"
                             data-card="{{ $index }}"
                             style="{{ $imgIdx !== 0 ? 'opacity:0;position:absolute;inset:0;' : '' }}">
                    @endforeach
                    @if ($multiImage)
                        <button class="card-arrow card-prev" onclick="cardSlide(event,{{ $index }},-1)" aria-label="Previous screenshot"><i class='bx bx-chevron-left'></i></button>
                        <button class="card-arrow card-next" onclick="cardSlide(event,{{ $index }},1)"  aria-label="Next screenshot"><i class='bx bx-chevron-right'></i></button>
                        <div class="card-dots" id="card-dots-{{ $index }}">
                            @foreach ($allImages as $imgIdx => $imgUrl)
                                <span class="card-dot{{ $imgIdx === 0 ? ' on' : '' }}"
                                      onclick="cardGoTo(event,{{ $index }},{{ $imgIdx }})"
                                      data-card="{{ $index }}" data-idx="{{ $imgIdx }}"></span>
                            @endforeach
                        </div>
                        <div class="card-counter" id="card-counter-{{ $index }}">1 / {{ count($allImages) }}</div>
                    @endif
                @else
                    <div class="project-no-img"><i class='bx bx-image-add'></i></div>
                @endif
                <div class="project-img-overlay2">
                    <span class="project-overlay-btn"><i class='bx bx-expand-alt'></i> <span data-i18n="projects.viewProject">View Project</span></span>
                </div>
                @if (!empty($project['featured']))
                    <span class="project-featured-badge">★ <span data-i18n="projects.featured">Featured</span></span>
                @endif
                <span class="project-index-badge">{{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}</span>
            </div>

            <div class="project-body2">
                <div class="project-meta-row">
                    <span class="project-type2 {{ $project['type'] }}">
                        <i class='bx {{ $project["type"] === "web" ? "bx-globe" : "bx-mobile-alt" }}'></i>
                        {{ ucfirst($project['type']) }}
                    </span>
                    <span class="project-status-pill {{ $isOngoing ? 'ongoing' : '' }}">
                        @if($isOngoing)
                            <span data-i18n="projects.ongoing">Ongoing</span>
                        @else
                            <span data-i18n="projects.completed">Completed</span>
                        @endif
                    </span>
                </div>
                <h3 class="project-name2">{{ $project['name'] }}</h3>
                <p class="project-desc2">{{ Str::limit($project['description'], 130) }}</p>
                <div class="project-footer-row">
                    <div class="project-tags2">
                        @foreach (array_slice($project['tags'], 0, 3) as $tag)
                            <span class="tag2">{{ $tag }}</span>
                        @endforeach
                        @if (count($project['tags']) > 3)
                            <span class="tag2 tag2-more">+{{ count($project['tags']) - 3 }}</span>
                        @endif
                    </div>
                    <span class="project-arrow"><i class='bx bx-right-arrow-alt'></i></span>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>

<!-- ── EXPERIENCE ── -->
<section class="experience" id="experience">
    <div style="text-align:center">
        <div class="section-label" style="display:inline-flex" data-i18n="exp.label">Where I've Worked</div>
    </div>
    <h2 class="section-title center">Internship <span class="accent" data-i18n="exp.title">Experience</span></h2>
    <p class="section-sub center" data-i18n="exp.sub">
        My on-the-job training experience building real-world applications.
    </p>
    <div class="timeline">
        <div class="timeline-item">
            <div class="timeline-marker">
                <div class="timeline-dot"></div>
                <div class="timeline-line"></div>
            </div>
            <div class="timeline-card">
                <div class="timeline-header">
                    <div>
                        <h3 class="timeline-role" data-i18n="exp.role">Web Developer Intern</h3>
                        <p class="timeline-company"><i class='bx bx-buildings'></i> BizMatch Company — Cebu, Philippines</p>
                    </div>
                    <span class="timeline-period">Aug – Dec 2024</span>
                </div>
                <p class="timeline-desc" data-i18n="exp.desc">
                    Designed and developed a real-time synchronized monitoring software for PisoNet machines —
                    enabling operators to remotely track machine status, usage sessions, and revenue across
                    multiple units from a single dashboard.
                </p>
                <div class="timeline-tags">
                    <span class="tag">Laravel</span>
                    <span class="tag">PHP</span>
                    <span class="tag">MySQL</span>
                    <span class="tag">WebSockets</span>
                    <span class="tag">Real-time Sync</span>
                    <span class="tag">Dashboard</span>
                </div>
                <div class="gallery-block">
                    <p class="gallery-label"><i class='bx bx-image-alt'></i> <span data-i18n="exp.officePhotos">Office Photos</span></p>
                    <div class="gallery-strip">
                       @foreach ([
    ['src' => 'images/image1.jpg', 'alt' => 'Office Photo 1'],
    ['src' => 'images/image2.jpg', 'alt' => 'Office Photo 2'],
    ['src' => 'images/image3.jpg', 'alt' => 'Office Photo 3'],
] as $i => $photo)

    <div class="gallery-thumb" onclick="openLightbox({{ $i }})" title="{{ $photo['alt'] }}">
        <img src="{{ asset($photo['src']) }}" alt="{{ $photo['alt'] }}">
        <div class="gallery-thumb-overlay">
            <div class="gallery-expand-icon"><i class='bx bx-expand-alt'></i></div>
        </div>
    </div>

@endforeach
                    </div>
               
                       <div class="gallery-cert-row">
    <div class="cert-mini-wrap" onclick="openLightbox(3)">
        <div class="cert-mini-thumb">
            <img src="{{ asset('images/certificate.png') }}" alt="Certificate">
        </div>
        <div class="cert-mini-info">
            <p class="cert-mini-title">Certificate of Completion</p>
            <p class="cert-mini-sub">BizMatch Company · Aug–Dec 2024 · click to view</p>
        </div>
        <i class='bx bx-award cert-mini-icon'></i>
    </div>
</div>
                
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ── LIGHTBOX ── -->
<div class="lightbox" id="lightbox" onclick="lbBgClick(event)" role="dialog" aria-modal="true" aria-label="Image viewer">
    <div class="lb-box" id="lbBox">
        <button class="lb-close" onclick="closeLightbox()" aria-label="Close"><i class='bx bx-x'></i></button>
        <div class="lb-stage" id="lbStage"><img id="lbImg" src="" alt=""></div>
        <button class="lb-arrow lb-prev" onclick="lbGo(-1)" aria-label="Previous"><i class='bx bx-chevron-left'></i></button>
        <button class="lb-arrow lb-next" onclick="lbGo(1)"  aria-label="Next"><i class='bx bx-chevron-right'></i></button>
        <div class="lb-footer">
            <div class="lb-caption"><strong id="lbTitle"></strong><span id="lbSub"></span></div>
            <div class="lb-dots" id="lbDots"></div>
        </div>
        <div class="lb-thumbnails" id="lbThumbs"></div>
    </div>
</div>

<!-- ── CONTACT ── -->
<section class="contact" id="contact">
    <div style="text-align:center">
        <div class="section-label" style="display:inline-flex" data-i18n="contact.label">Get In Touch</div>
    </div>
    <h2 class="section-title center">Contact <span class="accent">Me</span></h2>
    <p class="section-sub center" data-i18n="contact.sub">
        Have a project in mind or just want to say hi? I'd love to hear from you.
    </p>
    @if (session('success'))
        <div class="alert alert-success"><i class='bx bx-check-circle'></i> {{ session('success') }}</div>
    @endif
    @if ($errors->any())
        <div class="alert alert-error"><i class='bx bx-error-circle'></i>
            @foreach ($errors->all() as $error) {{ $error }} @endforeach
        </div>
    @endif
    <div class="contact-grid">
        <div class="contact-info">
            <h3 class="contact-info-title" data-i18n="contact.letsTalk">Let's talk</h3>
            <p class="contact-info-sub" data-i18n="contact.openTo">
                I'm open to freelance projects, collaborations, and full-time opportunities.
            </p>
            <div class="info-items">
                <a href="#" class="info-item">
                    <div class="info-icon"><i class='bx bxs-map'></i></div>
                    <div><strong data-i18n="contact.address">Address</strong><span>Hda. Rita, Cabulihan, Vallehermoso,<br>Negros Oriental 6224</span></div>
                </a>
                <a href="mailto:glevinbonganciso529@gmail.com" class="info-item">
                    <div class="info-icon"><i class='bx bx-envelope'></i></div>
                    <div><strong data-i18n="contact.email">Email</strong><span>glevinbonganciso529@gmail.com</span></div>
                </a>
                <a href="https://facebook.com" target="_blank" class="info-item">
                    <div class="info-icon"><i class='bx bxl-facebook'></i></div>
                    <div><strong data-i18n="contact.facebook">Facebook</strong><span>Glevin Bonganciso</span></div>
                </a>
                <a href="tel:09311494339" class="info-item">
                    <div class="info-icon"><i class='bx bxs-phone'></i></div>
                    <div><strong data-i18n="contact.phone">Phone</strong><span>09631897072</span></div>
                </a>
            </div>
        </div>
        <div class="contact-form-wrap">
            <form action="{{ route('contact.send') }}" method="POST" class="contact-form">
                @csrf
                <div class="form-row">
                    <div class="form-group">
                        <label for="name" data-i18n="contact.form.name">Full Name</label>
                        <input type="text" id="name" name="name" value="{{ old('name') }}"
                               data-placeholder-en="Your full name"
                               data-placeholder-fil="Ang iyong buong pangalan"
                               data-placeholder-ja="フルネーム"
                               placeholder="Your full name" required>
                    </div>
                    <div class="form-group">
                        <label for="email" data-i18n="contact.form.email">Email Address</label>
                        <input type="email" id="email" name="email" value="{{ old('email') }}"
                               placeholder="your@email.com" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="subject" data-i18n="contact.form.subject">Subject</label>
                    <input type="text" id="subject" name="subject" value="{{ old('subject') }}"
                           data-placeholder-en="What's this about?"
                           data-placeholder-fil="Tungkol saan ito?"
                           data-placeholder-ja="件名は何ですか？"
                           placeholder="What's this about?">
                </div>
                <div class="form-group">
                    <label for="message" data-i18n="contact.form.message">Message</label>
                    <textarea id="message" name="message" rows="5"
                              data-placeholder-en="Tell me about your project..."
                              data-placeholder-fil="Sabihin mo sa akin ang tungkol sa iyong proyekto..."
                              data-placeholder-ja="プロジェクトについて教えてください..."
                              placeholder="Tell me about your project..." required>{{ old('message') }}</textarea>
                </div>
            <button type="submit" class="btn btn-primary full-width" id="contact-submit-btn">
                    <span class="btn-text" data-i18n="contact.form.send">Send Message</span>
                    <span class="btn-spinner" style="display:none"><i class='bx bx-loader-alt bx-spin'></i> Sending…</span>
                    <i class='bx bx-send btn-send-icon'></i>
                </button>

                
            </form>
        </div>
    </div>
</section>

<div class="contact-toast" id="contact-toast">
    <i class='bx toast-icon'></i>
    <span class="toast-msg"></span>
</div>

<!-- ── FOOTER ── -->
<footer class="footer">
    <p>&copy; {{ date('Y') }} Glevin Bonganciso. <span data-i18n="footer.built">Built with Laravel &amp; passion.</span></p>
    <div class="footer-socials">
        <a href="#" aria-label="Facebook"><i class='bx bxl-facebook'></i></a>
        <a href="#" aria-label="GitHub"><i class='bx bxl-github'></i></a>
        <a href="#" aria-label="Twitter"><i class='bx bxl-twitter'></i></a>
    </div>
</footer>

<a href="#home" class="back-top" id="back-top" aria-label="Back to top"><i class='bx bx-chevron-up'></i></a>

<!-- ── PROJECT MODAL ── -->
<div class="project-modal-overlay" id="project-modal" role="dialog" aria-modal="true" aria-labelledby="pm-title">
    <div class="project-modal-box" tabindex="-1">
        <div class="project-modal-img" id="pm-img">
            <div class="pm-img-placeholder">
                <i class='bx bx-image-add'></i>
                <span data-i18n="modal.screenshotSoon">Screenshot coming soon</span>
            </div>
        </div>
        <div class="project-modal-body">
            <div class="project-modal-header">
                <div class="project-modal-meta">
                    <span class="project-type2" id="pm-badge"></span>
                    <h3 class="project-modal-title" id="pm-title"></h3>
                </div>
                <button class="modal-close-btn" onclick="closeProjectModal()" aria-label="Close modal"><i class='bx bx-x'></i></button>
            </div>
            <p class="project-modal-desc" id="pm-desc"></p>
            <div id="pm-features-wrap">
                <p class="modal-section-label"><i class='bx bx-list-check'></i> <span data-i18n="modal.features">Features</span></p>
                <ul class="project-modal-features" id="pm-features"></ul>
            </div>
            <p class="modal-section-label"><i class='bx bx-code-alt'></i> <span data-i18n="modal.techStack">Tech Stack</span></p>
            <div class="project-modal-tags" id="pm-tags"></div>
            <div class="project-modal-links" id="pm-links"></div>
        </div>
    </div>
</div>

<!-- ── CERTIFICATE MODAL ── -->
<div class="cert-modal-overlay" id="cert-modal" onclick="closeCertModal()">
    <div class="cert-modal-box" onclick="event.stopPropagation()">
        <button class="modal-close-btn cert-close-btn" onclick="closeCertModal()" aria-label="Close"><i class='bx bx-x'></i></button>
        <img src="" alt="Certificate" id="cert-modal-img">
    </div>
</div>

<!-- ── SCRIPTS ── -->
<script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>
<script>

/* ════════════════════════════════════════
   TRANSLATIONS
════════════════════════════════════════ */
const translations = {
    en: {
        'nav.home': 'Home', 'nav.about': 'About', 'nav.stack': 'Stack',
        'nav.projects': 'Projects', 'nav.experience': 'Experience', 'nav.contact': 'Contact',
        'nav.language': 'Language',
        'home.greeting': "Hello, I'm",
        'home.sub': 'I design and build full-stack web applications and cross-platform mobile apps — turning ideas into clean, functional products using Laravel, Next.js, and React Native.',
        'home.viewProjects': 'View Projects', 'home.downloadCv': 'Download CV',
        'about.label': 'Who I Am', 'about.badge': 'Full-Stack Developer',
        'about.role': 'Web & Mobile Developer',
        'about.p1': "I'm Glevin Bonganciso, a developer from Vallehermoso, Negros Oriental, Philippines. I specialize in building full-stack web applications and cross-platform mobile apps — with a strong focus on clean architecture, maintainable code, and smooth user experiences.",
        'about.p2': 'From designing REST APIs with Laravel to crafting responsive frontends with Next.js, and deploying mobile apps with React Native — I enjoy owning the full product lifecycle and bringing ideas to life from scratch.',
        'about.stat1': 'Projects Built', 'about.stat2': 'Technologies', 'about.stat3': 'Platforms',
        'about.cta': "Let's Work Together",
        'stack.label': 'What I Use', 'stack.title': 'Tech Stack',
        'stack.sub': 'The tools and technologies I use to build web and mobile products.',
        'stack.web.title': 'Web Development', 'stack.web.sub': 'Full-stack web applications',
        'stack.laravel': 'PHP framework — REST APIs, routing, auth, Eloquent ORM',
        'stack.php': 'Server-side scripting & backend logic',
        'stack.ts': 'Strongly typed JavaScript for safer, scalable code',
        'stack.nextjs': 'React framework — SSR, SSG, and full-stack routing',
        'stack.databases': 'Databases',
        'stack.mysql': 'Relational database for structured web app data',
        'stack.supabase': 'Open-source Firebase alternative — Postgres + auth + storage',
        'stack.mobile.title': 'Mobile Development', 'stack.mobile.sub': 'Cross-platform iOS & Android apps',
        'stack.rn': 'Cross-platform mobile apps with a single JavaScript codebase',
        'stack.expo': 'Managed React Native workflow — faster builds & OTA updates',
        'stack.database': 'Database',
        'stack.firebase': 'Realtime database, authentication, cloud storage & push notifications',
        'projects.label': "What I've Built", 'projects.title': 'Projects',
        'projects.sub': "A selection of projects I've completed during my studies and internship.",
        'projects.viewProject': 'View Project', 'projects.featured': 'Featured',
        'projects.ongoing': 'Ongoing', 'projects.completed': 'Completed',
        'exp.label': "Where I've Worked", 'exp.title': 'Experience',
        'exp.sub': 'My on-the-job training experience building real-world applications.',
        'exp.role': 'Web Developer Intern',
        'exp.desc': 'Designed and developed a real-time synchronized monitoring software for PisoNet machines — enabling operators to remotely track machine status, usage sessions, and revenue across multiple units from a single dashboard.',
        'exp.officePhotos': 'Office Photos', 'exp.certTitle': 'Certificate of Completion',
        'exp.clickToView': 'click to view',
        'contact.label': 'Get In Touch',
        'contact.sub': "Have a project in mind or just want to say hi? I'd love to hear from you.",
        'contact.letsTalk': "Let's talk",
        'contact.openTo': "I'm open to freelance projects, collaborations, and full-time opportunities.",
        'contact.address': 'Address', 'contact.email': 'Email',
        'contact.facebook': 'Facebook', 'contact.phone': 'Phone',
        'contact.form.name': 'Full Name', 'contact.form.email': 'Email Address',
        'contact.form.subject': 'Subject', 'contact.form.message': 'Message',
        'contact.form.send': 'Send Message',
        'cv.download': 'Download', 'cv.print': 'Print', 'cv.loading': 'Loading preview…',
        'modal.screenshotSoon': 'Screenshot coming soon',
        'modal.features': 'Features', 'modal.techStack': 'Tech Stack',
        'footer.built': 'Built with Laravel & passion.',
        'typed': ['Web Developer.', 'Mobile Developer.']
    },
    fil: {
        'nav.home': 'Tahanan', 'nav.about': 'Tungkol', 'nav.stack': 'Stack',
        'nav.projects': 'Proyekto', 'nav.experience': 'Karanasan', 'nav.contact': 'Makipag-ugnayan',
        'nav.language': 'Wika',
        'home.greeting': 'Kamusta, Ako si',
        'home.sub': 'Nagdidisenyo at nagtatayo ako ng full-stack web applications at cross-platform mobile apps — ginagawang malinis at functional na produkto ang mga ideya gamit ang Laravel, Next.js, at React Native.',
        'home.viewProjects': 'Tingnan ang mga Proyekto', 'home.downloadCv': 'I-download ang CV',
        'about.label': 'Sino Ako', 'about.badge': 'Full-Stack Developer',
        'about.role': 'Web at Mobile Developer',
        'about.p1': 'Ako si Glevin Bonganciso, isang developer mula sa Vallehermoso, Negros Oriental, Pilipinas. Espesyalista ako sa pagtatayo ng full-stack web applications at cross-platform mobile apps — na may malakas na pokus sa malinis na arkitektura, mapanatiling code, at maayos na karanasan ng gumagamit.',
        'about.p2': 'Mula sa pagdidisenyo ng REST APIs gamit ang Laravel hanggang sa paggawa ng responsive frontends gamit ang Next.js, at pag-deploy ng mobile apps gamit ang React Native — nasisiyahan ako sa pag-aari ng buong product lifecycle at pagbibigay-buhay sa mga ideya mula sa simula.',
        'about.stat1': 'Proyektong Nagawa', 'about.stat2': 'Teknolohiya', 'about.stat3': 'Plataporma',
        'about.cta': 'Magtulungan Tayo',
        'stack.label': 'Ginagamit Ko', 'stack.title': 'Tech Stack',
        'stack.sub': 'Ang mga kasangkapan at teknolohiyang ginagamit ko para bumuo ng web at mobile na produkto.',
        'stack.web.title': 'Web Development', 'stack.web.sub': 'Full-stack web applications',
        'stack.laravel': 'PHP framework — REST APIs, routing, auth, Eloquent ORM',
        'stack.php': 'Server-side scripting at backend logic',
        'stack.ts': 'Strongly typed JavaScript para sa mas ligtas at scalable na code',
        'stack.nextjs': 'React framework — SSR, SSG, at full-stack routing',
        'stack.databases': 'Mga Database',
        'stack.mysql': 'Relational database para sa structured na web app data',
        'stack.supabase': 'Open-source Firebase alternative — Postgres + auth + storage',
        'stack.mobile.title': 'Mobile Development', 'stack.mobile.sub': 'Cross-platform iOS at Android apps',
        'stack.rn': 'Cross-platform mobile apps gamit ang iisang JavaScript codebase',
        'stack.expo': 'Managed React Native workflow — mas mabilis na builds at OTA updates',
        'stack.database': 'Database',
        'stack.firebase': 'Realtime database, authentication, cloud storage at push notifications',
        'projects.label': 'Mga Nagawa Ko', 'projects.title': 'Proyekto',
        'projects.sub': 'Isang seleksyon ng mga proyektong natapos ko sa panahon ng aking pag-aaral at internship.',
        'projects.viewProject': 'Tingnan ang Proyekto', 'projects.featured': 'Tampok',
        'projects.ongoing': 'Patuloy', 'projects.completed': 'Natapos',
        'exp.label': 'Kung Saan Ako Nagtrabaho', 'exp.title': 'Karanasan',
        'exp.sub': 'Ang aking karanasan sa on-the-job training sa pagtatayo ng tunay na mga aplikasyon.',
        'exp.role': 'Web Developer Intern',
        'exp.desc': 'Nagdisenyo at nagtatayo ng real-time synchronized monitoring software para sa PisoNet machines — nagbibigay-kakayahan sa mga operator na malayuang subaybayan ang katayuan ng makina, mga sesyon ng paggamit, at kita mula sa isang dashboard.',
        'exp.officePhotos': 'Mga Larawan sa Opisina', 'exp.certTitle': 'Sertipiko ng Pagkumpleto',
        'exp.clickToView': 'i-click para tingnan',
        'contact.label': 'Makipag-ugnayan',
        'contact.sub': 'May proyekto ka bang nasa isip o gusto mo lang mag-sabi ng kumusta? Gusto kong marinig mula sa iyo.',
        'contact.letsTalk': 'Mag-usap Tayo',
        'contact.openTo': 'Bukas ako sa mga freelance na proyekto, pakikipagtulungan, at full-time na oportunidad.',
        'contact.address': 'Tirahan', 'contact.email': 'Email',
        'contact.facebook': 'Facebook', 'contact.phone': 'Telepono',
        'contact.form.name': 'Buong Pangalan', 'contact.form.email': 'Email Address',
        'contact.form.subject': 'Paksa', 'contact.form.message': 'Mensahe',
        'contact.form.send': 'Magpadala ng Mensahe',
        'cv.download': 'I-download', 'cv.print': 'I-print', 'cv.loading': 'Nilo-load ang preview…',
        'modal.screenshotSoon': 'Screenshot coming soon',
        'modal.features': 'Mga Feature', 'modal.techStack': 'Tech Stack',
        'footer.built': 'Ginawa gamit ang Laravel at passion.',
        'typed': ['Web Developer.', 'Mobile Developer.', 'Full-Stack na Gumawa.']
    },
    ja: {
        'nav.home': 'ホーム', 'nav.about': '自己紹介', 'nav.stack': 'スタック',
        'nav.projects': 'プロジェクト', 'nav.experience': '経験', 'nav.contact': 'お問い合わせ',
        'nav.language': '言語',
        'home.greeting': 'こんにちは、私は',
        'home.sub': 'フルスタックWebアプリケーションとクロスプラットフォームモバイルアプリを設計・構築しています — Laravel、Next.js、React Nativeを使用して、アイデアをクリーンで機能的な製品に変えています。',
        'home.viewProjects': 'プロジェクトを見る', 'home.downloadCv': 'CVをダウンロード',
        'about.label': '私について', 'about.badge': 'フルスタック開発者',
        'about.role': 'Web・モバイル開発者',
        'about.p1': '私はGlevin Bonganciso、フィリピン・ネグロスオリエンタル州バジェエルモソ出身の開発者です。クリーンなアーキテクチャ、保守性の高いコード、スムーズなユーザー体験に重点を置いたフルスタックWebアプリケーションとクロスプラットフォームモバイルアプリの構築を専門としています。',
        'about.p2': 'LaravelでのREST API設計から、Next.jsでのレスポンシブフロントエンド構築、React Nativeでのモバイルアプリのデプロイまで — プロダクトのライフサイクル全体を担い、アイデアをゼロから形にすることに情熱を持っています。',
        'about.stat1': '完成プロジェクト', 'about.stat2': '使用技術', 'about.stat3': 'プラットフォーム',
        'about.cta': '一緒に働きましょう',
        'stack.label': '使用技術', 'stack.title': 'テックスタック',
        'stack.sub': 'Webとモバイルのプロダクトをゼロから構築するために使用するツールと技術。',
        'stack.web.title': 'Web開発', 'stack.web.sub': 'フルスタックWebアプリケーション',
        'stack.laravel': 'PHPフレームワーク — REST API、ルーティング、認証、Eloquent ORM',
        'stack.php': 'サーバーサイドスクリプティングとバックエンドロジック',
        'stack.ts': 'より安全でスケーラブルなコードのための強力な型付きJavaScript',
        'stack.nextjs': 'Reactフレームワーク — SSR、SSG、フルスタックルーティング',
        'stack.databases': 'データベース',
        'stack.mysql': '構造化Webアプリデータのためのリレーショナルデータベース',
        'stack.supabase': 'オープンソースのFirebase代替 — Postgres + 認証 + ストレージ',
        'stack.mobile.title': 'モバイル開発', 'stack.mobile.sub': 'クロスプラットフォームiOS・Androidアプリ',
        'stack.rn': '単一のJavaScriptコードベースでクロスプラットフォームモバイルアプリ',
        'stack.expo': 'マネージドReact Nativeワークフロー — 高速ビルド & OTAアップデート',
        'stack.database': 'データベース',
        'stack.firebase': 'リアルタイムデータベース、認証、クラウドストレージ & プッシュ通知',
        'projects.label': '制作実績', 'projects.title': 'プロジェクト',
        'projects.sub': '学業とインターンシップ中に完成させたプロジェクトの一覧です。',
        'projects.viewProject': 'プロジェクトを見る', 'projects.featured': '注目',
        'projects.ongoing': '進行中', 'projects.completed': '完成',
        'exp.label': '職務経験', 'exp.title': '経験',
        'exp.sub': 'リアルなアプリケーション構築のOJT（実地研修）経験。',
        'exp.role': 'Webデベロッパーインターン',
        'exp.desc': 'PisoNetマシン向けのリアルタイム同期監視ソフトウェアを設計・開発しました — オペレーターが単一のダッシュボードから複数ユニットのマシン状態、使用セッション、収益をリモートで追跡できるようにしました。',
        'exp.officePhotos': 'オフィス写真', 'exp.certTitle': '修了証明書',
        'exp.clickToView': 'クリックして表示',
        'contact.label': 'お問い合わせ',
        'contact.sub': 'プロジェクトのご相談やご挨拶など、お気軽にご連絡ください。',
        'contact.letsTalk': 'お話しましょう',
        'contact.openTo': 'フリーランス、コラボレーション、フルタイムの機会など、幅広くお受けしています。',
        'contact.address': '住所', 'contact.email': 'メール',
        'contact.facebook': 'Facebook', 'contact.phone': '電話',
        'contact.form.name': '氏名', 'contact.form.email': 'メールアドレス',
        'contact.form.subject': '件名', 'contact.form.message': 'メッセージ',
        'contact.form.send': 'メッセージを送る',
        'cv.download': 'ダウンロード', 'cv.print': '印刷', 'cv.loading': 'プレビューを読み込み中…',
        'modal.screenshotSoon': 'スクリーンショット準備中',
        'modal.features': '機能', 'modal.techStack': 'テックスタック',
        'footer.built': 'Laravelと情熱で構築。',
        'typed': ['Webデベロッパー。', 'モバイルデベロッパー。', 'フルスタック開発者。']
    }
};

const langMeta = {
    en:  { flag: '🇺🇸', label: 'EN' },
    fil: { flag: '🇵🇭', label: 'FIL' },
    ja:  { flag: '🇯🇵', label: 'JA' }
};

const navLangNames = {
    en:  '🇺🇸 English',
    fil: '🇵🇭 Filipino',
    ja:  '🇯🇵 日本語'
};

/* ════════════════════════════════════════
   LANGUAGE SWITCHER LOGIC
════════════════════════════════════════ */
let currentLang = '{{ $lang ?? "en" }}';
let typedInstance = null;

function initTyped(lang) {
    if (typedInstance) typedInstance.destroy();
    const el = document.querySelector('.typed-role');
    if (el) el.textContent = '';
    typedInstance = new Typed('.typed-role', {
        strings:   translations[lang]['typed'],
        typeSpeed: 75,
        backSpeed: 40,
        loop:      true
    });
}

function applyLang(lang) {
    const t = translations[lang];
    if (!t) return;

    const els = document.querySelectorAll('[data-i18n]');
    els.forEach(el => el.classList.add('lang-fade'));

    setTimeout(() => {
        els.forEach(el => {
            const key  = el.getAttribute('data-i18n');
            const text = t[key];
            if (text == null) return;

            const iconKids    = [...el.children].filter(c => c.tagName === 'I' || c.tagName === 'SVG');
            const nonIconKids = [...el.children].filter(c => c.tagName !== 'I' && c.tagName !== 'SVG' && c.tagName !== 'BR');

            if (iconKids.length === 0 && nonIconKids.length === 0) {
                el.innerHTML = text;
            } else {
                let updated = false;
                [...el.childNodes].forEach(node => {
                    if (!updated && node.nodeType === Node.TEXT_NODE && node.textContent.trim()) {
                        node.textContent = text + ' ';
                        updated = true;
                    }
                });
                if (!updated) {
                    el.insertBefore(document.createTextNode(text + ' '), el.firstChild);
                }
            }
        });

        document.querySelectorAll('[data-placeholder-en]').forEach(el => {
            const ph = el.getAttribute(`data-placeholder-${lang}`);
            if (ph) el.placeholder = ph;
        });

        initTyped(lang);
        els.forEach(el => el.classList.remove('lang-fade'));
    }, 160);

    /* Update desktop switcher */
    const meta = langMeta[lang];
    document.getElementById('lang-flag').textContent  = meta.flag;
    document.getElementById('lang-label').textContent = meta.label;

    document.querySelectorAll('.lang-option').forEach(opt => {
        const isActive = opt.dataset.lang === lang;
        opt.classList.toggle('active', isActive);
        opt.setAttribute('aria-selected', isActive);
    });

    document.getElementById('lang-trigger').setAttribute('aria-expanded', 'false');
    document.getElementById('lang-switcher').classList.remove('open');

    /* Update mobile in-menu badge */
    const mobileFlags = { en: '🇺🇸', fil: '🇵🇭', ja: '🇯🇵' };
    const mobileNames = { en: 'English', fil: 'Filipino', ja: '日本語' };
    const navFlag = document.getElementById('nav-lang-flag');
    const navName = document.getElementById('nav-lang-name');
    if (navFlag) navFlag.textContent = mobileFlags[lang] || '';
    if (navName) navName.textContent = mobileNames[lang] || '';

    /* Update active state on in-menu options */
    document.querySelectorAll('.nav-lang-opt').forEach(opt => {
        opt.classList.toggle('active-lang', opt.dataset.lang === lang);
    });
}

function switchLang(lang) {
    localStorage.setItem('portfolio-lang', lang);

    // Reload with ?lang= so the server returns translated project/experience content
    const url = new URL(window.location.href);
    url.searchParams.set('lang', lang);
    window.location.href = url.toString();
}

/* Desktop dropdown toggle */
function toggleLangDropdown(e) {
    e.stopPropagation();
    const sw = document.getElementById('lang-switcher');
    const isOpen = sw.classList.toggle('open');
    document.getElementById('lang-trigger').setAttribute('aria-expanded', isOpen);
}

document.getElementById('lang-trigger').addEventListener('click', toggleLangDropdown);

document.querySelectorAll('.lang-option').forEach(btn => {
    btn.addEventListener('click', function() {
        switchLang(this.dataset.lang);
    });
});

document.addEventListener('click', function(e) {
    const sw = document.getElementById('lang-switcher');
    if (!sw.contains(e.target)) {
        sw.classList.remove('open');
        document.getElementById('lang-trigger').setAttribute('aria-expanded', 'false');
    }
});

document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') {
        document.getElementById('lang-switcher').classList.remove('open');
        document.getElementById('lang-trigger').setAttribute('aria-expanded', 'false');
    }
});

/* Mobile in-menu language toggle */
function toggleNavLang(e) {
    e.stopPropagation();
    const toggle = document.getElementById('nav-lang-toggle');
    const opts   = document.getElementById('nav-lang-opts');
    const isOpen = opts.classList.toggle('open');
    toggle.classList.toggle('open', isOpen);
    toggle.setAttribute('aria-expanded', isOpen);
}

/* ════════════════════════
   CARD INLINE SLIDESHOW
════════════════════════ */
const cardStates = {};

function cardImgs(cardIndex) {
    return document.querySelectorAll(`.card-slide[data-card="${cardIndex}"]`);
}

function cardUpdateUI(cardIndex) {
    const imgs    = cardImgs(cardIndex);
    const cur     = cardStates[cardIndex] || 0;
    const counter = document.getElementById(`card-counter-${cardIndex}`);
    const dots    = document.querySelectorAll(`#card-dots-${cardIndex} .card-dot`);
    imgs.forEach((img, i) => {
        img.classList.toggle('card-slide-active', i === cur);
        img.style.opacity  = i === cur ? '1' : '0';
        img.style.position = i === cur ? 'relative' : 'absolute';
        img.style.inset    = i === cur ? 'auto' : '0';
    });
    if (counter) counter.textContent = `${cur + 1} / ${imgs.length}`;
    dots.forEach((d, i) => d.classList.toggle('on', i === cur));
}

function cardGoTo(e, cardIndex, idx) {
    e.stopPropagation();
    cardStates[cardIndex] = idx;
    cardUpdateUI(cardIndex);
}

function cardSlide(e, cardIndex, dir) {
    e.stopPropagation();
    const total = cardImgs(cardIndex).length;
    cardStates[cardIndex] = ((cardStates[cardIndex] || 0) + dir + total) % total;
    cardUpdateUI(cardIndex);
}

document.querySelectorAll('.card-slide').forEach(img => {
    const idx = parseInt(img.dataset.card);
    if (!(idx in cardStates)) cardStates[idx] = 0;
});

/* ════════════════════════
   LIGHTBOX
════════════════════════ */
const slides = [
    { src: "{{ asset('images/image1.jpg') }}",      title: "Office Photo 1",            sub: "BizMatch Company, Cebu" },
    { src: "{{ asset('images/image2.jpg') }}",      title: "Office Photo 2",            sub: "BizMatch Company, Cebu" },
    { src: "{{ asset('images/image3.jpg') }}",      title: "Office Photo 3",            sub: "BizMatch Company, Cebu" },
    { src: "{{ asset('images/certificate.png') }}", title: "Certificate of Completion", sub: "BizMatch Company · Aug–Dec 2024" }
];

let lbCur = 0;
const lb       = document.getElementById('lightbox');
const lbTitle  = document.getElementById('lbTitle');
const lbSub    = document.getElementById('lbSub');
const lbDots   = document.getElementById('lbDots');
const lbThumbs = document.getElementById('lbThumbs');

function lbBuildNav() {
    lbDots.innerHTML = '';
    lbThumbs.innerHTML = '';
    slides.forEach((s, i) => {
        const d = document.createElement('button');
        d.className = 'lb-dot' + (i === lbCur ? ' on' : '');
        d.setAttribute('aria-label', 'Slide ' + (i + 1));
        d.onclick = () => lbGoTo(i);
        lbDots.appendChild(d);

        const tb = document.createElement('button');
        tb.className = 'lb-thumb-btn' + (i === lbCur ? ' on' : '');
        tb.setAttribute('aria-label', s.title);
        tb.innerHTML = `<img src="${s.src}" alt="${s.title}">`;
        tb.onclick = () => lbGoTo(i);
        lbThumbs.appendChild(tb);
    });
}

function openLightbox(i) {
    lbCur = i;
    const img = document.getElementById('lbImg');
    img.src = slides[i].src; img.alt = slides[i].title; img.className = 'active';
    lbTitle.textContent = slides[i].title;
    lbSub.textContent   = slides[i].sub;
    lbBuildNav();
    lb.classList.add('open');
    document.body.classList.add('modal-open');
}

function closeLightbox() {
    lb.classList.remove('open');
    document.body.classList.remove('modal-open');
}

function lbGoTo(next) {
    if (next === lbCur) return;
    const dir    = next > lbCur ? 1 : -1;
    const stage  = document.getElementById('lbStage');
    const oldImg = document.getElementById('lbImg');
    const newImg = document.createElement('img');
    newImg.src = slides[next].src; newImg.alt = slides[next].title;
    newImg.id = 'lbImg';
    newImg.className = dir > 0 ? 'entering-left' : 'entering-right';
    stage.appendChild(newImg);
    oldImg.className = dir > 0 ? 'leaving-left' : 'leaving-right';
    requestAnimationFrame(() => requestAnimationFrame(() => { newImg.className = 'active'; }));
    setTimeout(() => oldImg.remove(), 450);
    lbCur = next;
    lbTitle.textContent = slides[lbCur].title;
    lbSub.textContent   = slides[lbCur].sub;
    lbBuildNav();
}

function lbGo(d) { lbGoTo((lbCur + d + slides.length) % slides.length); }
function lbBgClick(e) { if (e.target === lb) closeLightbox(); }

/* ════════════════════════
   PROJECT MODAL
════════════════════════ */
const portfolioProjects = @json($projects);
let pmCur    = 0;
let pmImages = [];
let pmIsMobile = false;

function projectImageUrl(path) {
    if (!path) return '';
    if (/^(https?:)?\/\//.test(path) || path.startsWith('/')) return path;
    return `/${path}`;
}

function openProjectModal(i) {
    const p     = portfolioProjects[i];
    const isWeb = p.type === 'web';

    const badge = document.getElementById('pm-badge');
    badge.className = 'project-type2 ' + p.type;
    badge.innerHTML = `<i class='bx ${isWeb ? 'bx-globe' : 'bx-mobile-alt'}'></i> ${isWeb ? 'Web' : 'Mobile'}`;

    document.getElementById('pm-title').textContent = p.name;
    document.getElementById('pm-desc').textContent  = p.description;

    if (p.images && p.images.length) {
        pmImages = p.images.map(projectImageUrl);
    } else if (p.image) {
        pmImages = [projectImageUrl(p.image)];
    } else {
        pmImages = [];
    }

    pmIsMobile = p.type === 'mobile';
    pmCur = 0;
    pmRenderSlide(null);

    const featWrap = document.getElementById('pm-features-wrap');
    const featList = document.getElementById('pm-features');
    if (p.features && p.features.length) {
        featList.innerHTML = p.features.map(f =>
            `<li><i class='bx bx-check'></i><span>${f}</span></li>`
        ).join('');
        featWrap.style.display = 'block';
    } else {
        featWrap.style.display = 'none';
    }

    document.getElementById('pm-tags').innerHTML = p.tags.map(t =>
        `<span class="tag">${t}</span>`
    ).join('');

    const linksWrap = document.getElementById('pm-links');
    let linksHTML   = '';
    if (p.github) linksHTML += `<a href="${p.github}" target="_blank" rel="noopener" class="btn btn-outline"><i class='bx bxl-github'></i> GitHub</a>`;
    if (p.demo)   linksHTML += `<a href="${p.demo}"   target="_blank" rel="noopener" class="btn btn-primary"><i class='bx bx-link-external'></i> Live Demo</a>`;
    if (!linksHTML) linksHTML = `<span class="pm-no-links"><i class='bx bx-time-five'></i> Links coming soon</span>`;
    linksWrap.innerHTML     = linksHTML;
    linksWrap.style.display = (p.github || p.demo) ? 'flex' : 'block';

    const modal = document.getElementById('project-modal');
    modal.classList.add('active');
    document.body.classList.add('modal-open');
    modal.querySelector('.project-modal-box').focus();
}

function closeProjectModal() {
    document.getElementById('project-modal').classList.remove('active');
    document.body.classList.remove('modal-open');
}

function pmRenderSlide(dir) {
    const wrap = document.getElementById('pm-img');
    if (!pmImages.length) {
        wrap.innerHTML = `<div class="pm-img-placeholder"><i class='bx bx-image-add'></i><span>Screenshot coming soon</span></div>`;
        return;
    }
    const oldCounter = wrap.querySelector('.pm-slide-counter');
    if (oldCounter) oldCounter.remove();
    wrap.querySelectorAll('.pm-arrow').forEach(el => el.remove());

    const oldImg = wrap.querySelector('img');
    const newImg = document.createElement('img');
    newImg.src = pmImages[pmCur];
    newImg.alt = `Screenshot ${pmCur + 1}`;

    if (pmIsMobile) {
        newImg.style.objectFit      = 'contain';
        newImg.style.objectPosition = 'center';
        newImg.style.background     = 'var(--bg-4)';
    } else {
        newImg.style.objectFit      = 'cover';
        newImg.style.objectPosition = 'top';
        newImg.style.background     = '';
    }

    newImg.onerror = () => {
        wrap.innerHTML = `<div class="pm-img-placeholder"><i class='bx bx-image-add'></i><span>Screenshot coming soon</span></div>`;
    };

    if (!oldImg || dir === null) {
        wrap.innerHTML   = '';
        newImg.className = 'pm-active';
        wrap.appendChild(newImg);
    } else {
        newImg.className = dir > 0 ? 'pm-entering-left' : 'pm-entering-right';
        wrap.appendChild(newImg);
        oldImg.className = dir > 0 ? 'pm-leaving-left' : 'pm-leaving-right';
        requestAnimationFrame(() => requestAnimationFrame(() => { newImg.className = 'pm-active'; }));
        setTimeout(() => oldImg.remove(), 450);
    }

    if (pmImages.length > 1) {
        const counter = document.createElement('div');
        counter.className   = 'pm-slide-counter';
        counter.textContent = `${pmCur + 1} / ${pmImages.length}`;
        wrap.appendChild(counter);

        const prev = document.createElement('button');
        prev.className  = 'pm-arrow pm-arrow-prev';
        prev.setAttribute('aria-label', 'Previous image');
        prev.innerHTML  = `<i class='bx bx-chevron-left'></i>`;
        prev.onclick    = () => pmSlideGo(-1);
        wrap.appendChild(prev);

        const next = document.createElement('button');
        next.className  = 'pm-arrow pm-arrow-next';
        next.setAttribute('aria-label', 'Next image');
        next.innerHTML  = `<i class='bx bx-chevron-right'></i>`;
        next.onclick    = () => pmSlideGo(1);
        wrap.appendChild(next);

        const dots = document.createElement('div');
        dots.className = 'pm-dot-strip';
        pmImages.forEach((_, idx) => {
            const d = document.createElement('span');
            d.className = 'pm-dot-item' + (idx === pmCur ? ' on' : '');
            d.onclick   = () => pmGoTo(idx);
            dots.appendChild(d);
        });
        wrap.appendChild(dots);
    }
}

function pmGoTo(next) {
    if (next === pmCur) return;
    const dir = next > pmCur ? 1 : -1;
    pmCur = next;
    pmRenderSlide(dir);
}

function pmSlideGo(d) { pmGoTo((pmCur + d + pmImages.length) % pmImages.length); }

/* ════════════════════════
   CERTIFICATE MODAL
════════════════════════ */
function openCertModal(src) {
    document.getElementById('cert-modal-img').src = src;
    document.getElementById('cert-modal').classList.add('active');
    document.body.classList.add('modal-open');
}

function closeCertModal() {
    document.getElementById('cert-modal').classList.remove('active');
    document.body.classList.remove('modal-open');
}

/* ════════════════════════
   CV MODAL
════════════════════════ */
const CV_URL = "{{ asset('files/cv.pdf') }}";

function openCvModal() {
    const iframe  = document.getElementById('cv-iframe');
    const loading = document.getElementById('cv-loading');
    if (!iframe.getAttribute('data-loaded')) {
        loading.classList.remove('hidden');
        iframe.src = CV_URL;
    }
    document.getElementById('cv-modal').classList.add('active');
    document.body.classList.add('modal-open');
}

function closeCvModal() {
    document.getElementById('cv-modal').classList.remove('active');
    document.body.classList.remove('modal-open');
}

function cvLoaded() {
    document.getElementById('cv-loading').classList.add('hidden');
    document.getElementById('cv-iframe').setAttribute('data-loaded', '1');
}

function cvBgClick(e) {
    if (e.target === document.getElementById('cv-modal')) closeCvModal();
}

function printCv() {
    const win = window.open(CV_URL, '_blank');
    win.onload = () => win.print();
}

/* ════════════════════════
   HEADER / SCROLL / NAV
════════════════════════ */
const header  = document.getElementById('header');
const backTop = document.getElementById('back-top');
const menuBtn = document.getElementById('menu-btn');
const navbar  = document.getElementById('navbar');

window.addEventListener('scroll', () => {
    header.classList.toggle('scrolled', window.scrollY > 60);
    backTop.classList.toggle('show', window.scrollY > 300);
    let current = '';
    document.querySelectorAll('section[id]').forEach(s => {
        if (window.scrollY >= s.offsetTop - 120) current = s.id;
    });
    document.querySelectorAll('.nav-link').forEach(a => {
        a.classList.toggle('active', a.getAttribute('href') === '#' + current);
    });
});

menuBtn.addEventListener('click', () => {
    menuBtn.classList.toggle('open');
    navbar.classList.toggle('active');
    /* Close lang panel whenever menu is toggled closed */
    if (!navbar.classList.contains('active')) {
        const toggle = document.getElementById('nav-lang-toggle');
        const opts   = document.getElementById('nav-lang-opts');
        if (toggle && opts) {
            toggle.classList.remove('open');
            opts.classList.remove('open');
            toggle.setAttribute('aria-expanded', 'false');
        }
    }
});

document.querySelectorAll('.nav-link').forEach(link => {
    link.addEventListener('click', () => {
        menuBtn.classList.remove('open');
        navbar.classList.remove('active');
    });
});

/* ════════════════════════
   MODAL KEYBOARD & BACKDROP
════════════════════════ */
document.getElementById('project-modal').addEventListener('click', function(e) {
    if (e.target === this) closeProjectModal();
});

document.addEventListener('keydown', e => {
    const pmOpen = document.getElementById('project-modal').classList.contains('active');
    const lbOpen = lb.classList.contains('open');
    const cvOpen = document.getElementById('cv-modal').classList.contains('active');

    if (e.key === 'Escape') {
        if (pmOpen) closeProjectModal();
        if (lbOpen) closeLightbox();
        if (cvOpen) closeCvModal();
        closeCertModal();
        return;
    }
    if (pmOpen && pmImages.length > 1) {
        if (e.key === 'ArrowLeft')  pmSlideGo(-1);
        if (e.key === 'ArrowRight') pmSlideGo(1);
    }
    if (lbOpen) {
        if (e.key === 'ArrowLeft')  lbGo(-1);
        if (e.key === 'ArrowRight') lbGo(1);
    }
});

/* ════════════════════════
   CONTACT FORM — AJAX
════════════════════════ */
(function () {
    const form    = document.querySelector('.contact-form');
    const btn     = document.getElementById('contact-submit-btn');
    const toast   = document.getElementById('contact-toast');
    const toastIcon = toast.querySelector('.toast-icon');
    const toastMsg  = toast.querySelector('.toast-msg');
    let toastTimer  = null;
function showToast(type, message) {
    clearTimeout(toastTimer);

    // Reset instantly (no transition) then re-apply
    toast.style.transition = 'none';
    toast.classList.remove('show');
    toast.className = `contact-toast ${type}`;
    toastIcon.className = `bx ${type === 'success' ? 'bx-check-circle' : 'bx-error-circle'} toast-icon`;
    toastMsg.textContent = message;

    // One frame later — re-enable transition and show
    requestAnimationFrame(() => {
        toast.style.transition = '';
        requestAnimationFrame(() => toast.classList.add('show'));
    });

    toastTimer = setTimeout(() => {
        toast.classList.remove('show');
    }, 5000);
}
    form.addEventListener('submit', async function (e) {
        e.preventDefault();

        btn.classList.add('loading');
        btn.disabled = true;

        const data = new FormData(form);

        try {
            const res = await fetch(form.action, {
                method: 'POST',
                headers: { 'X-Requested-With': 'XMLHttpRequest' },
                body: data,
            });

            const json = await res.json();

            if (res.ok && json.success) {
                showToast('success', json.message || "Message sent! I'll get back to you soon. ✨");
                form.reset();
            } else {
                // Validation errors come back as { errors: { field: ['msg'] } }
                const firstError = json.errors
                    ? Object.values(json.errors).flat()[0]
                    : (json.message || 'Something went wrong. Please try again.');
                showToast('error', firstError);
            }
        } catch (err) {
            showToast('error', 'Network error — please check your connection and try again.');
        } finally {
            btn.classList.remove('loading');
            btn.disabled = false;
        }
    });
})();
/* ════════════════════════
   INIT
════════════════════════ */
document.addEventListener('DOMContentLoaded', () => {
    /* Desktop switcher */
    document.querySelectorAll('.lang-option').forEach(btn => {
        btn.classList.toggle('active', btn.dataset.lang === currentLang);
        btn.setAttribute('aria-selected', btn.dataset.lang === currentLang);
    });
    const meta = langMeta[currentLang];
    document.getElementById('lang-flag').textContent  = meta.flag;
    document.getElementById('lang-label').textContent = meta.label;

    /* Mobile in-menu badge */
    const mobileFlags = { en: '🇺🇸', fil: '🇵🇭', ja: '🇯🇵' };
    const mobileNames = { en: 'English', fil: 'Filipino', ja: '日本語' };
    const navFlag = document.getElementById('nav-lang-flag');
    const navName = document.getElementById('nav-lang-name');
    if (navFlag) navFlag.textContent = mobileFlags[currentLang] || '';
    if (navName) navName.textContent = mobileNames[currentLang] || '';

    /* Mobile in-menu active option */
    document.querySelectorAll('.nav-lang-opt').forEach(opt => {
        opt.classList.toggle('active-lang', opt.dataset.lang === currentLang);
    });

    if (currentLang !== 'en') {
        applyLang(currentLang);
    } else {
        initTyped('en');
    }
});

</script>
</body>
</html>