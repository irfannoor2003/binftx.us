<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>BINTFX | Cinematic VFX Studio</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Space+Mono:ital,wght@0,400;0,700;1,400&family=DM+Sans:wght@300;400;500&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
        integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

</head>

<body>

    <!-- CINEMATIC GATE -->
    <div id="cinematic-gate">
        <div class="gate-half gate-left"></div>
        <div class="gate-half gate-right"></div>
        <div class="contact-orb" style="z-index: 1;">
            <div class="orb-inner"></div>
        </div>
        <div class="gate-content">
            <h1 class="gate-title">BINT<span>FX</span><span class="dotspan">.</span></h1>
            <button class="btn-submit" id="gateBtn" style="width: max-content; display: inline-flex; align-items: center; justify-content: center; gap: 8px; margin-top: 0; padding: 14px 40px; z-index: 3;">
                <i class="fa-solid fa-globe" style="font-size: 14px;"></i>
                <span>Let's Discover </span>
                <span class="btn-arrow" style="margin-left: 4px;">
                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none">
                        <path d="M1 7h12M7 1l6 6-6 6" stroke="currentColor" stroke-width="1.5"
                            stroke-linecap="round" />
                    </svg>
                </span>
            </button>
        </div>
    </div>
    <?php if (isset($_GET['status'])): ?>

        <?php if ($_GET['status'] == 'success'): ?>
            <div class="alert success alertBox">
                <span>✅ Application submitted successfully!</span>
                <button class="close-btn" onclick="closeAlert(this)">×</button>
            </div>
        <?php endif; ?>

        <?php if ($_GET['status'] == 'error'): ?>
            <div class="alert error alertBox">
                <span>❌ Failed to send. Please Try again.</span>
                <button class="close-btn" onclick="closeAlert(this)">×</button>
            </div>
        <?php endif; ?>

    <?php endif; ?>
    <div class="cursor" id="cursor"></div>
    <div class="cursor-ring" id="cursorRing"></div>
    <div class="scroll-bar" id="scrollBar"></div>
    <!-- NAV -->
    <nav id="navbar">
        <div class="logo">
            <a href="#home"> <img src="images/logo_design.png" style="width:100px"></a>
        </div>

        <div class="nav-links">
            <div class="logo hiddenfordesktop">
                <a href="#home"> <img src="images/logo_design.png" style="width:100px;"></a>
            </div>
            <a href="#story">Studio</a>
            <a href="#services">Services</a>
            <!--<a href="#how-we-work">How We Work </a>-->
            <a href="#portfolio">Work</a>
            <!--<a href="#clients">Clients</a>-->
            <a href="#contact">Contact</a>
            <a href="#join" class="nav-cta">Join Us</a>
            <!--<div class="hiddenfordesktop labinta-info-div">-->
            <!--    <h3>LABINTA MALIK</h3>-->
            <!--    <p><span class="colormain">VFX </span><span class="italicspan">Artist</span></p>-->
            <!--</div>-->
            <!--<div class="contact-social hiddenfordesktop">-->


            <!--    <a class="social-link linkedin" title="LinkedIn"-->
            <!--        href="https://www.linkedin.com/in/labintamalik?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=ios_app">-->
            <!--        <svg class="social-icon-svg" viewBox="0 0 24 24" fill="none">-->

                        <!-- outer square -->
            <!--            <rect x="3" y="3" width="18" height="18" rx="2.5" stroke="currentColor" stroke-width="1.6" />-->

                        <!-- "in" dot -->
            <!--            <circle cx="8" cy="9" r="1.2" fill="currentColor" />-->

                        <!-- "i" line -->
            <!--            <path d="M7.2 11V17" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" />-->

                        <!-- "n" shape -->
            <!--            <path d="M11 17V11.5C11 10.2 12 9.2 13.3 9.2C14.6 9.2 15.6 10.2 15.6 11.5V17"-->
            <!--                stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />-->

            <!--        </svg>-->
            <!--    </a>-->

            <!--</div>-->
        </div>
        <div class="hamburger" id="hamburger">
            <span></span>
            <span></span>
            <span></span>
        </div>

    </nav>


    <!-- HERO -->
    <section id="home">
        <div class="hero-content">
            <div class="hero-label" style="font-size:12px">Full-Pipeline Post Film & VFX Studio</div>
            <h1 class="hero-h1">
                <div>CREATE </div>
                <!-- <div><span class="glow-text">VISION</span></div> -->
                <div><span class="glow-text">VISION</span></div>
                <!-- <div class="outline">IMPACT</div> -->
                <div>IMPACT</div>
            </h1>
            <p class="hero-sub">Build for productions that refuse to stay in reality </p>
            <div class="hero-btns">
                <a href="#portfolio" class="btn-primary">
                    <span>Explore Work</span>

                    <span class="btn-arrow">
                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none">
                            <path d="M1 7h12M7 1l6 6-6 6" stroke="currentColor" stroke-width="1.5"
                                stroke-linecap="round" />
                        </svg>
                    </span>

                </a>
                <a href="#join" class="btn-secondary">
                    <span>Join the Team</span>
                </a>
            </div>
        </div>
        <div class="hero-deco">
            <video src="videos/hero3.mp4" autoplay loop muted></video>
            <!-- <img src="images/hero.jpeg" alt=""> -->
        </div>

        <div class="scroll-hint">SCROLL</div>
    </section>


    <!-- STORY -->
    <section id="story">
        <div class="story-bg-text">BINTFX</div>
        <div class="section-tag reveal">The Studio.</div>
        <h2 class="section-h2 reveal">THE BINTFX <em>STORY</em></h2>
        <div class="story-layout">
            <div class="story-text">

                <p class="reveal">
                <span></span><strong>BINTFX</strong> is a full-pipeline Film and Visual Effects studio. We handle every stage of production
                    — from look development to shot design, visual effects and CGI animation, motion graphics, and film
                    post-production — under one roof, with one team, and zero dropped frames.
                </p>

                <p class="reveal">
                    We work across formats: feature film, short film, episodic, commercial, and branded content.
                </p>

                <p class="reveal">
                    We are built on talent around the world — rigorous, hungry, and trained across the complete production
                    pipeline. The kind of artists who treat every frame like it belongs on a cinema screen. Because at BINTFX,
                    it does.
                </p>

                <p class="reveal " style="margin-bottom: 40px;">
                    We partner with independent filmmakers, production houses, and creative agencies to deliver
                    cinematic-grade VFX, animation, and post-production — on time, on brief, and with the commitment
                    of a dedicated creative partner.
                </p>

                <div class="story-quote">
                    THE RESULT IS A STUDIO THAT THINKS IN FRAMES, WORKS IN SYSTEMS, AND DELIVERS WITHOUT COMPROMISE — REGARDLESS THE SIZE OF YOUR PRODUCTION OR THE COMPLEXITY OF YOUR BRIEF.
                </div>

                <div class="story-cta-strip reveal">
                    <a href="#contact" class="story-cta-btn">
                        <span class="story-cta-icon">
                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none">
                                <path d="M1 7h12M7 1l6 6-6 6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
                            </svg>
                        </span>
                        <span>Start a Project</span>
                    </a>
                    <div class="story-cta-divider"></div>
                    <a href="mailto:hello@bintfx.com" class="story-cta-email">
                        <i class="fa-solid fa-envelope" style="font-size:12px;"></i>
                        <span>hello@bintfx.com</span>
                    </a>
                </div>

            </div>

        </div>
    </section>

    <!-- SERVICES -->
    <section id="services">
        <div class="services-header">
            <div>
                <div class="section-tag reveal">What We Do.</div>
                <h2 class="section-h2 reveal">OUR <em>SERVICES</em></h2>
                <p class="reveal" style="max-width:540px;color:var(--muted);font-size:15px;">A Complete Production Pipeline. One Studio</p>
            </div>

        </div>
        <div class="services-grid">
            <div class="service-card featured reveal">
                <div class="service-num">01</div>
                <div class="service-icon">
                    <div class="pulse-wrap">

                        <!-- SVG ICON -->
                        <svg class="icon-svg" viewBox="0 0 24 24" fill="none">
                            <path d="M13 2L3 14h7l-1 8 10-12h-7l1-8z" stroke="currentColor" stroke-width="1.5"
                                fill="none" />
                        </svg>

                        <!-- WAVES -->
                        <span class="wave wave1"></span>
                        <span class="wave wave2"></span>

                    </div>
                </div>
                <div class="service-title">Visual Effects and CG</div>
                <!-- <p class="service-desc">High-end cinematic visual effects and computer-generated imagery. From set -->
                    <!-- extensions and complex compositing to particle simulations and photorealistic environments.</p> -->
                <div class="service-tags">
                    <span class="service-tag">FX Simulation</span>
                    <span class="service-tag">Match-Move</span>
                    <span class="service-tag">Atmosphere</span>
                    <span class="service-tag">Volume</span>
                </div>
            </div>
            <div class="service-card reveal">
                <div class="service-num">02</div>
                <div class="service-icon">
                    <div class="pulse-wrap">

                        <!-- SPIRAL SVG -->
                        <svg class="icon-svg" viewBox="0 0 24 24" fill="none">
                            <path
                                d="M12 12c-2 0-3.5-1.5-3.5-3.5S10 5 12 5s3.5 1.5 3.5 3.5c0 3-2.5 5.5-5.5 5.5S4.5 11 4.5 8 7.5 2 12 2s8 3.5 8 8-4 10-10 10"
                                stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>

                        <!-- WAVES -->
                        <span class="wave wave1"></span>
                        <span class="wave wave2"></span>

                    </div>
                </div>
                <div class="service-title">Animation</div>
                <!-- <p class="service-desc">Characters, environments, simulations and immersive 3D worlds. Fluid 2D
                    animations to hyper-realistic CGI” we bring any concept to life.</p> -->
                <div class="service-tags">
                    <span class="service-tag">Scene layout</span>
                    <span class="service-tag">Previs</span>
                    <span class="service-tag">Blocking</span>
                    <span class="service-tag">Spline And Polish</span>
                </div>
            </div>
            <div class="service-card reveal">
                <div class="service-num">03</div>
                <div class="service-icon">
                    <div class="pulse-wrap">

                        <!-- FILM PROJECTOR SVG -->
                        <svg class="icon-svg" viewBox="0 0 24 24" fill="none">
                            <!-- reels -->
                            <circle cx="6" cy="6" r="3" stroke="currentColor" stroke-width="1.5" />
                            <circle cx="14" cy="6" r="3" stroke="currentColor" stroke-width="1.5" />

                            <!-- body -->
                            <rect x="4" y="10" width="12" height="7" rx="1.5" stroke="currentColor"
                                stroke-width="1.5" />

                            <!-- lens -->
                            <path d="M16 11l4-2v8l-4-2z" stroke="currentColor" stroke-width="1.5" fill="none" />
                        </svg>

                        <!-- WAVES -->
                        <span class="wave wave1"></span>
                        <span class="wave wave2"></span>

                    </div>
                </div>
                <div class="service-title">Post Production</div>
                <!-- <p class="service-desc">Professional photography and videography tailored for brands and social media
                    marketing. Visuals that convert, engage, and elevate your identity.</p> -->
                <div class="service-tags">
                    <span class="service-tag">Edit</span>
                    <span class="service-tag">Color Grade </span>
                    <span class="service-tag">Sound Design</span>
                </div>
            </div>
            <div class="service-card reveal">
                <div class="service-num">04</div>
                <div class="service-icon">
                    <div class="pulse-wrap">

                        <!-- CLAPPERBOARD SVG -->
                        <svg class="icon-svg" viewBox="0 0 24 24" fill="none">
                            <!-- top clap -->
                            <path d="M3 7h14l2-3H5L3 7z" stroke="currentColor" stroke-width="1.5"
                                stroke-linejoin="round" />

                            <!-- stripes -->
                            <path d="M6 4l2 3M10 4l2 3M14 4l2 3" stroke="currentColor" stroke-width="1.5"
                                stroke-linecap="round" />

                            <!-- body -->
                            <rect x="3" y="7" width="18" height="13" rx="2" stroke="currentColor" stroke-width="1.5" />
                        </svg>

                        <!-- WAVES -->
                        <span class="wave wave1"></span>
                        <span class="wave wave2"></span>

                    </div>
                </div>
                <div class="service-title">Compositing</div>
                <!-- <p class="service-desc">Kinetic typography, animated infographics, and cinematic title sequences that
                    communicate with impact and elegance.</p> -->
                <div class="service-tags">
                    <span class="service-tag">camera tracking </span>
                    <span class="service-tag">Roto and paint cleanup </span>
                     <span class="service-tag">Dmp </span>
                      <span class="service-tag">Greenscreen and rig removal </span>
                       <span class="service-tag">visual enhancement </span>
                </div>
            </div>
            <div class="service-card reveal">
                <div class="service-num">05</div>
                <div class="service-icon">
                    <div class="pulse-wrap">

                        <!-- VR HEADSET SVG -->
                        <svg class="icon-svg" viewBox="0 0 24 24" fill="none">

                            <!-- headset frame -->
                            <rect x="3" y="7" width="18" height="10" rx="4" stroke="currentColor" stroke-width="1.5" />

                            <!-- left lens -->
                            <circle cx="9" cy="12" r="2.2" stroke="currentColor" stroke-width="1.5" />

                            <!-- right lens -->
                            <circle cx="15" cy="12" r="2.2" stroke="currentColor" stroke-width="1.5" />

                            <!-- top strap -->
                            <path d="M6 7C7 4 17 4 18 7" stroke="currentColor" stroke-width="1.5"
                                stroke-linecap="round" />

                        </svg>

                        <!-- WAVES -->
                        <span class="wave wave1"></span>
                        <span class="wave wave2"></span>

                    </div>
                </div>
                <div class="service-title">3D Modeling And Texturing</div>
                <!-- <p class="service-desc">
                    Professional editing, color grading, sound design, visual enhancement, and final delivery
                    for films, commercials, music videos, and digital content. We transform raw footage into
                    polished cinematic experiences.
                </p> -->

                <div class="service-tags">
                    <span class="service-tag">Character design and rig </span>
                    <span class="service-tag">Environment design </span>
                    <span class="service-tag">Prop and asset build</span>
                </div>
            </div>
            <div class="service-card reveal">
                <div class="service-num">06</div>
                <div class="service-icon">
                    <div class="pulse-wrap">

                        <!-- TARGET / CROSSHAIR SVG -->
                        <svg class="icon-svg" viewBox="0 0 24 24" fill="none">

                            <!-- outer circle -->
                            <circle cx="12" cy="12" r="8" stroke="currentColor" stroke-width="1.5" />

                            <!-- inner circle -->
                            <circle cx="12" cy="12" r="2" stroke="currentColor" stroke-width="1.5" />

                            <!-- cross lines -->
                            <path d="M12 2v4M12 18v4M2 12h4M18 12h4" stroke="currentColor" stroke-width="1.5"
                                stroke-linecap="round" />

                        </svg>

                        <!-- WAVES -->
                        <span class="wave wave1"></span>
                        <span class="wave wave2"></span>

                    </div>
                </div>
                <div class="service-title">Look Development </div>
                <!-- <p class="service-desc">
                    Creative development of unique characters, creatures, worlds, and environments
                    for animation, games, films, and virtual productions. Designed with storytelling,
                    aesthetics, and production readiness in mind.
                </p> -->

                <div class="service-tags">
                    <span class="service-tag">Concept</span>
                    <span class="service-tag">Research</span>
                    <span class="service-tag">Art Direction</span>
                     <span class="service-tag">Storyboarding</span>
                </div>
            </div>
        </div>
    </section>
    <!-- HOW WE WORK -->
    <section id="how-we-work" style="display:none">
        <div class="section-tag reveal">Process.</div>
        <h2 class="section-h2 reveal">HOW WE <em>WORK</em></h2>

        <div class="process-wrapper reveal">
            <!-- Connector Line (SVG) -->
            <svg class="process-line" viewBox="0 0 1200 300" preserveAspectRatio="none">
                <path d="M0,150 C150,150 200,50 300,50 C400,50 450,250 600,250 C750,250 800,50 900,50 C1000,50 1050,150 1200,150"
                    fill="none"
                    stroke="url(#lineGradient)"
                    stroke-width="3" />
                <defs>
                    <linearGradient id="lineGradient" x1="0%" y1="0%" x2="100%" y2="0%">
                        <stop offset="0%" stop-color="transparent" />
                        <stop offset="20%" stop-color="var(--accent)" />
                        <stop offset="80%" stop-color="var(--accent)" />
                        <stop offset="100%" stop-color="transparent" />
                    </linearGradient>
                </defs>
            </svg>

            <div class="steps-grid">
                <div class="step-item step-1">
                    <div class="step-point">1</div>
                    <div class="step-info">
                        <h3>The Spark</h3>
                        <p>We brainstorm, sketch, and define the visual DNA of your brand.</p>
                    </div>
                </div>

                <div class="step-item step-2">
                    <div class="step-point">2</div>
                    <div class="step-info">
                        <h3>The Blueprint</h3>
                        <p>3D Pre-Viz and storyboarding to lock in the flow.</p>
                    </div>
                </div>

                <div class="step-item step-3">
                    <div class="step-point">3</div>
                    <div class="step-info">
                        <h3>The Build</h3>
                        <p>Sculpting, texturing, and animating with precision.</p>
                    </div>
                </div>

                <div class="step-item step-4">
                    <div class="step-point">4</div>
                    <div class="step-info">
                        <h3>The Glow-Up</h3>
                        <p>Final VFX, lighting, and cinematic compositing.</p>
                    </div>
                </div>

                <div class="step-item step-5">
                    <div class="step-point">5</div>
                    <div class="step-info">
                        <h3>The Launch</h3>
                        <p>High-res delivery ready for the big screen.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- PORTFOLIO -->
    <section id="portfolio">
        <div class="section-tag reveal">Selected Work.</div>
        <h2 class="section-h2 reveal">OUR <em>WORK</em></h2>

        <div class="port-filters reveal">
            <button class="port-filter active" data-filter="all">All Work</button>
            <button class="port-filter" data-filter="video">Video & VFX</button>
            <button class="port-filter" data-filter="image">Photography</button>
        </div>

        <div class="portfolio-grid">

            <!-- VIDEO 1 large left -->
            <div class="port-item reveal" data-type="video" data-index="0">
                <video class="port-media-video" src="videos/1.mp4" muted autoplay loop playsinline
                    preload="metadata"></video>
                <div class="port-type-badge badge-video"> Video</div>
                <div class="port-play">
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="white">
                        <path d="M4 2l10 6-10 6V2z" />
                    </svg>
                </div>
                <div class="port-glow"></div>
                <div class="port-overlay"></div>
                <div class="port-item-inner">
                    <div class="port-info">
                        <div class="port-label">VFX & CGI· 2024</div>
                        <div class="port-title">Cinematic Showreel</div>
                    </div>
                </div>
            </div>

            <!-- VIDEO 2 -->
            <div class="port-item reveal" data-type="video" data-index="1">
                <video class="port-media-video" src="videos/2.mp4" muted autoplay loop playsinline
                    preload="metadata"></video>
                <div class="port-type-badge badge-video">Video</div>
                <div class="port-play">
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="white">
                        <path d="M4 2l10 6-10 6V2z" />
                    </svg>
                </div>
                <div class="port-glow"></div>
                <div class="port-overlay"></div>
                <div class="port-item-inner">
                    <div class="port-info">
                        <div class="port-label">3D Animation</div>
                        <div class="port-title">Character Pipeline</div>
                    </div>
                </div>
            </div>

            <!-- IMAGE 1 -->
            <div class="port-item reveal" data-type="image" data-index="2">
                <img class="port-media" src="images/1.jpg" alt="Brand Campaign" />
                <div class="port-type-badge badge-image">Photo</div>
                <div class="port-glow"></div>
                <div class="port-overlay"></div>
                <div class="port-item-inner">
                    <div class="port-info">
                        <div class="port-label">Content Production</div>
                        <div class="port-title">Brand Campaign</div>
                    </div>
                </div>
            </div>

            <!-- VIDEO 3 + VIDEO 4 wide -->
            <div class="port-item reveal" data-type="video" data-index="3">
                <video class="port-media-video" src="videos/3.mp4" muted autoplay loop playsinline
                    preload="metadata"></video>
                <div class="port-type-badge badge-video">Video</div>
                <div class="port-play">
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="white">
                        <path d="M4 2l10 6-10 6V2z" />
                    </svg>
                </div>
                <div class="port-glow"></div>
                <div class="port-overlay"></div>
                <div class="port-item-inner">
                    <div class="port-info">
                        <div class="port-label">Motion Graphics</div>
                        <div class="port-title">Broadcast Package</div>
                    </div>
                </div>
            </div>

            <!-- VIDEO 4 (spans col 2â€“4 bottom) -->
            <div class="port-item reveal" data-type="video" data-index="4">
                <video class="port-media-video" src="videos/4.mp4" muted autoplay loop playsinline
                    preload="metadata"></video>
                <div class="port-type-badge badge-video">Video</div>
                <div class="port-play">
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="white">
                        <path d="M4 2l10 6-10 6V2z" />
                    </svg>
                </div>
                <div class="port-glow"></div>
                <div class="port-overlay"></div>
                <div class="port-item-inner">
                    <div class="port-info">
                        <div class="port-label">VR Experience</div>
                        <div class="port-title">360 Environment</div>
                    </div>
                </div>
            </div>

            <!-- IMAGE 2 -->
            <div class="port-item reveal" data-type="image" data-index="5">
                <img class="port-media" src="images/2.jpg" alt="Visual Editorial" />
                <div class="port-type-badge badge-image"> Photo</div>
                <div class="port-glow"></div>
                <div class="port-overlay"></div>
                <div class="port-item-inner">
                    <div class="port-info">
                        <div class="port-label">Photography</div>
                        <div class="port-title">Visual Editorial</div>
                    </div>
                </div>
            </div>

        </div>
    </section>


    <!-- LIGHTBOX -->
    <div class="lightbox" id="lightbox">

        <button class="lightbox-close" id="lbClose">
            <!-- CLOSE (X) -->
            <svg viewBox="0 0 24 24" width="20" height="20" fill="none">
                <path d="M6 6L18 18M18 6L6 18" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" />
            </svg>
        </button>

        <button class="lightbox-nav lightbox-prev" id="lbPrev">
            <!-- LEFT ARROW -->
            <svg viewBox="0 0 24 24" width="24" height="24" fill="none">
                <path d="M15 5L8 12L15 19" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
        </button>

        <button class="lightbox-nav lightbox-next" id="lbNext">
            <!-- RIGHT ARROW -->
            <svg viewBox="0 0 24 24" width="24" height="24" fill="none">
                <path d="M9 5L16 12L9 19" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
        </button>

        <div class="lightbox-inner" id="lbInner"></div>
        <div class="lightbox-dots" id="lbDots"></div>
        <div class="lightbox-caption" id="lbCaption"></div>
    </div>

    <!-- WHO WE WORK WITH -->
    <section id="clients" style="display:none;">
        <div class="section-tag reveal">Who We Serve.</div>
        <h2 class="section-h2 reveal">CREATIVE <em>PARTNERS</em></h2>
        <div class="clients-slider-container reveal">
            <div class="slider-nav">
                <button class="slider-control prev" id="clientsPrev" aria-label="Previous Slide">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M15 18l-6-6 6-6" />
                    </svg>
                </button>
                <button class="slider-control next" id="clientsNext" aria-label="Next Slide">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M9 18l6-6-6-6" />
                    </svg>
                </button>
            </div>

            <div class="clients-slider">
                <div class="slider-track" id="clientsTrack">
                    <!-- PARTNER 1 -->
                    <div class="client-card-new">
                        <div class="card-glow"></div>
                        <div class="card-content">
                            <div class="card-front">
                                <div class="client-icon">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                                        <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </div>
                                <h3 class="client-name">VFX Hub</h3>
                                <span class="client-type">Strategic Partner</span>
                            </div>
                            <div class="card-hover">
                                <p class="client-details">We collaborate on high-end compositing and green screen pipelines, delivering seamless visual effects for feature films.</p>
                                <div class="card-tags">
                                    <span>Pipeline</span>
                                    <span>VFX</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- CLIENT 1 -->
                    <div class="client-card-new">
                        <div class="card-glow"></div>
                        <div class="card-content">
                            <div class="card-front">
                                <div class="client-icon">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                                        <path d="M15.5 17.41V19M8.5 17.41V19M3 7V19C3 20.1 3.9 21 5 21H19C20.1 21 21 20.1 21 19V7M3 7L12 3L21 7M3 7V5C3 3.9 3.9 3 5 3H19C20.1 3 21 3.9 21 5V7M12 12C10.34 12 9 10.66 9 9C9 7.34 10.34 6 12 6C13.66 6 15 7.34 15 9C15 10.66 13.66 12 12 12Z" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </div>
                                <h3 class="client-name">Aura Brands</h3>
                                <span class="client-type">Brand Identity</span>
                            </div>
                            <div class="card-hover">
                                <div class="rating">⭐⭐⭐⭐⭐</div>
                                <p class="review-text">"The 3D character animation BINTFX created for our campaign was breathtaking. Highly recommend!"</p>
                                <span class="reviewer">- Sarah J., Creative Director</span>
                            </div>
                        </div>
                    </div>

                    <!-- PARTNER 2 -->
                    <div class="client-card-new">
                        <div class="card-glow"></div>
                        <div class="card-content">
                            <div class="card-front">
                                <div class="client-icon">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                                        <path d="M21 16V8a2 2 0 00-1-1.73l-7-4a2 2 0 00-2 0l-7 4A2 2 0 003 8v8a2 2 0 001 1.73l7 4a2 2 0 002 0l7-4A2 2 0 0021 16z" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M3.27 6.96L12 12.01l8.73-5.05M12 22.08V12" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </div>
                                <h3 class="client-name">RenderFarm Co.</h3>
                                <span class="client-type">Technical Partner</span>
                            </div>
                            <div class="card-hover">
                                <p class="client-details">Our primary rendering infrastructure partner, ensuring fast turnaround times for complex 3D simulations and CGI.</p>
                                <div class="card-tags">
                                    <span>Infrastructure</span>
                                    <span>CGI</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- CLIENT 2 -->
                    <div class="client-card-new">
                        <div class="card-glow"></div>
                        <div class="card-content">
                            <div class="card-front">
                                <div class="client-icon">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                                        <rect x="2" y="3" width="20" height="14" rx="2" ry="2" />
                                        <line x1="8" y1="21" x2="16" y2="21" />
                                        <line x1="12" y1="17" x2="12" y2="21" />
                                    </svg>
                                </div>
                                <h3 class="client-name">StreamLine Media</h3>
                                <span class="client-type">Motion Graphics</span>
                            </div>
                            <div class="card-hover">
                                <div class="rating">⭐⭐⭐⭐⭐</div>
                                <p class="review-text">"Exceptional motion graphics and broadcast design. They truly understand modern aesthetics."</p>
                                <span class="reviewer">- Mike Ross, Lead Producer</span>
                            </div>
                        </div>
                    </div>

                    <!-- PARTNER 3 -->
                    <div class="client-card-new">
                        <div class="card-glow"></div>
                        <div class="card-content">
                            <div class="card-front">
                                <div class="client-icon">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                                        <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </div>
                                <h3 class="client-name">SecureVFX</h3>
                                <span class="client-type">Asset Protection</span>
                            </div>
                            <div class="card-hover">
                                <p class="client-details">We work together on secure asset management and cloud-based production pipelines for sensitive projects.</p>
                                <div class="card-tags">
                                    <span>Security</span>
                                    <span>Cloud</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- CLIENT 3 (Testing Slider) -->
                    <div class="client-card-new">
                        <div class="card-content">
                            <div class="card-front">
                                <div class="client-icon">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                                        <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </div>
                                <h3 class="client-name">Nova Studios</h3>
                                <span class="client-type">Film Production</span>
                            </div>
                            <div class="card-hover">
                                <div class="rating">⭐⭐⭐⭐⭐</div>
                                <p class="review-text">"The level of detail in their work is insane. BINTFX is our go-to for all high-end VFX."</p>
                                <span class="reviewer">- James C., Producer</span>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>

    </section>

    <!-- JOIN -->
    <section id="join">
        <div class="section-tag reveal">Open Positions.</div>
        <h2 class="section-h2 reveal">JOIN THE <em>NETWORK</em></h2>
        <div class="join-layout">
            <div class="join-left">
                <p class="reveal" style="color:var(--muted);line-height:1.8;font-size:16px;margin-bottom:40px; max-width:500px;">Work on
                    real client projects. Build meaningful experience. Grow alongside a team of elite visual artists
                    pushing the boundaries of what's possible.</p>
                <div class="flexboxinwork">
                    <div>
                        <div class="join-info-item reveal">
                            <div class="join-icon">

                                <svg class="join-icon-svg" viewBox="0 0 24 24" fill="none">

                                    <!-- outer circle -->
                                    <circle cx="12" cy="12" r="8" stroke="currentColor" stroke-width="1.5" />

                                    <!-- inner dot -->
                                    <circle cx="12" cy="12" r="2" stroke="currentColor" stroke-width="1.5" />

                                    <!-- cross lines -->
                                    <path d="M12 2v4M12 18v4M2 12h4M18 12h4" stroke="currentColor" stroke-width="1.5"
                                        stroke-linecap="round" />

                                </svg>

                            </div>
                            <div>
                                <div class="join-item-title">Real Projects</div>
                                <div class="join-item-desc">Contribute to live client work from day one — no busywork, no filler tasks, no unnecessary delays</div>
                            </div>
                        </div>
                        <div class="join-info-item reveal">
                            <div class="join-icon">
                                <svg class="join-icon-svg" viewBox="0 0 24 24" fill="none">

                                    <!-- axis -->
                                    <path d="M4 20V4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                    <path d="M4 20H20" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />

                                    <!-- chart line -->
                                    <path d="M6 16L10 12L14 14L20 6" stroke="currentColor" stroke-width="1.8"
                                        stroke-linecap="round" stroke-linejoin="round" />

                                    <!-- data points -->
                                    <circle cx="6" cy="16" r="1.2" fill="currentColor" />
                                    <circle cx="10" cy="12" r="1.2" fill="currentColor" />
                                    <circle cx="14" cy="14" r="1.2" fill="currentColor" />
                                    <circle cx="20" cy="6" r="1.2" fill="currentColor" />

                                </svg>
                            </div>
                            <div>
                                <div class="join-item-title">Grow Together</div>
                                <div class="join-item-desc">We invest in our team's growth through shared knowledge, pipeline
                                    access, and collaboration.</div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="join-info-item reveal">
                            <div class="join-icon">
                                <svg class="join-icon-svg" viewBox="0 0 24 24" fill="none">

                                    <!-- outer globe -->
                                    <circle cx="12" cy="12" r="9" stroke="currentColor" stroke-width="1.5" />

                                    <!-- vertical meridian -->
                                    <path d="M12 3C15 6 15 18 12 21C9 18 9 6 12 3Z" stroke="currentColor" stroke-width="1.5" />

                                    <!-- horizontal latitude -->
                                    <path d="M3 12H21" stroke="currentColor" stroke-width="1.5" />

                                    <!-- inner latitude curve -->
                                    <path d="M4 8C8 10 16 10 20 8" stroke="currentColor" stroke-width="1.2" opacity="0.7" />

                                    <path d="M4 16C8 14 16 14 20 16" stroke="currentColor" stroke-width="1.2" opacity="0.7" />

                                </svg>
                            </div>
                            <div>
                                <div class="join-item-title">Remote Network</div>
                                <div class="join-item-desc">Work from anywhere. Join a global creative network driven by passion
                                    and output.</div>
                            </div>
                        </div>
                        <div class="join-info-item reveal">
                            <div class="join-icon">
                                <svg class="join-icon-svg" viewBox="0 0 24 24" fill="none">

                                    <!-- flask neck -->
                                    <path d="M9 3H15" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />

                                    <path d="M10 3V9L6 16C5.4 17 6.1 18.2 7.3 18.2H16.7C17.9 18.2 18.6 17 18 16L14 9V3"
                                        stroke="currentColor" stroke-width="1.5" stroke-linejoin="round" />

                                    <!-- liquid -->
                                    <path d="M8 14C10 13 14 13 16 14" stroke="currentColor" stroke-width="1.2" opacity="0.7" />

                                    <!-- bubbles -->
                                    <circle cx="11" cy="16" r="1" fill="currentColor" />
                                    <circle cx="14" cy="15" r="0.8" fill="currentColor" />

                                </svg>
                            </div>
                            <div>
                                <div class="join-item-title">All Skill Levels</div>
                                <div class="join-item-desc">From beginners to advanced if you have drive and talent, there's
                                    a
                                    place for you here.</div>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <div class="flexboxinwork" style="margin-top:20px;">
                    <a href="#joinFormModal" class="btn-secondary btn-waves" id="formopenbtn">
                        <span>Join the Team Now </span>
                    </a>
                </div>
            </div>


    </section>

    <div class="join-form-modal" id="joinFormModal" aria-hidden="true">
        <div class="join-form-backdrop" data-close-join-form></div>
        <div class="join-form-dialog" role="dialog" aria-modal="true" aria-labelledby="joinFormTitle">
            <button type="button" class="join-form-close" aria-label="Close application form" data-close-join-form>
                <i class="fa-solid fa-xmark"></i>
            </button>
            <div class="section-tag">Apply Now.</div>
            <h2 class="join-form-title" id="joinFormTitle">JOIN THE <em>NETWORK</em></h2>
            <form action="send_mail.php" method="POST" enctype="multipart/form-data" class="join-form">
                <div class="form-row">
                    <div class="form-group">
                        <label>Full Name</label>
                        <input type="text" name="full_name" placeholder="Your name" required />
                    </div>

                    <div class="form-group">
                        <label>Email Address</label>
                        <input type="email" name="email" placeholder="you@email.com" required />
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label>Role</label>
                        <select name="role" required>
                            <option value="" disabled selected>Select a role</option>
                            <option>Compositor</option>
                            <option>Editor</option>
                            <option>3D Artist</option>
                            <option>Other</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Experience Level</label>
                        <select name="experience" required>
                            <option value="" disabled selected>Select level</option>
                            <option>Beginner</option>
                            <option>Intermediate</option>
                            <option>Advanced</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label>Software Skills</label>
                    <input type="text" name="skills" placeholder="Nuke, After Effects, Blender, Maya..." />
                </div>

                <div class="form-group">
                    <label>Portfolio Link</label>
                    <input type="url" name="portfolio" placeholder="https://yourportfolio.com" />
                </div>

                <div class="form-group">
                    <label>Short Message</label>
                    <textarea name="message" placeholder="Tell us about yourself..."></textarea>
                </div>

                <div class="form-group file-group">
                    <label>Attach CV / Showreel (Optional)</label>
                    <input type="file" name="file" accept=".pdf,.mp4,.mov" />
                </div>

                <button class="btn-submit" type="submit">Submit Application</button>
            </form>
        </div>
    </div>

    <!-- CONTACT -->
    <section id="contact">
        <div class="contact-orb">
            <div class="orb-inner"></div>
        </div>

        <div class="section-tag reveal" style="justify-content:center;display:flex;">Get In Touch.</div>
        <h2 class="section-h2 reveal margin-top-class" style="text-align:center;margin-bottom:10px; ">LET'S BUILD
            <em>SOMETHING</em>
        </h2>
        <p class="reveal"
            style="text-align:center;color:var(--muted);margin-bottom:18px;font-size:17px;line-height:1.7;max-width:500px;margin-left:auto;margin-right:auto;">
            Ready to bring your vision to life? Reach out and let's create something worth watching together.</p>
        <a href="mailto:contact@bintfx.us" class="contact-email reveal">"Bring us the brief, we will bring the pipeline"</a>

        <div class="contact-container reveal">

            <div class="contact-info">
                <div class="info-group">
                    <label>EMAIL</label>
                    <a href="mailto:contact@bintfx.us" class="info-link">
                        <i class="fa-solid fa-envelope" style="margin-right: 10px; font-size: 18px;"></i>contact@bintfx.us
                    </a>
                </div>
                <div class="info-group">
                    <label>LINKEDIN</label>
                    <a href="https://www.linkedin.com/in/labintamalik?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=ios_app" target="_blank" class="info-link">
                        <i class="fa-brands fa-linkedin" style="margin-right: 10px; font-size: 18px;"></i>Follow us
                    </a>
                </div>
            </div>

            <form action="contact_handler.php" method="POST" class="contact-form-simple">
                <div class="form-row">
                    <div class="form-group">
                        <label>NAME</label>
                        <input type="text" name="full_name" placeholder="Your name" required />
                    </div>
                    <div class="form-group">
                        <label>EMAIL</label>
                        <input type="email" name="email" placeholder="your@mail.com" required />
                    </div>
                </div>
                <div class="form-group">
                    <label>MESSAGE</label>
                    <textarea name="message" placeholder="How can we help you?" required></textarea>
                </div>
                <button type="submit" class="btn-submit dark-submit">Submit</button>
            </form>
        </div>
    </section>

    <!-- FOOTER -->
    <footer>
        <div class="footer-logo"><img src="images/logo_design.png" alt="" style="width:100px;"></div>
        <div class="footer-copy">&copy; 2026 BINTFX· ALL RIGHTS RESERVED</div>
        <div style="font-family:'Space Mono',monospace;font-size:10px;color:var(--muted);letter-spacing:2px;">CRAFTING
            YOUR CINEMATIC FUTURE</div>
    </footer>



    <script src="js/java.js"></script>
    <script>
        if (window.location.search.includes('status')) {
            setTimeout(() => {
                const url = new URL(window.location);
                url.searchParams.delete('status');
                window.history.replaceState({}, document.title, url.pathname);
            }, 10000); // 10 seconds
        }
    </script>
</body>

</html>