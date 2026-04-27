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

</head>

<body>
    <?php if(isset($_GET['status'])): ?>

    <?php if($_GET['status'] == 'success'): ?>
    <div class="alert success alertBox">
        <span>✅ Application submitted successfully!</span>
        <button class="close-btn" onclick="closeAlert(this)">×</button>
    </div>
    <?php endif; ?>

    <?php if($_GET['status'] == 'error'): ?>
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
            <a href="#home"> <img src="images/logo2.png"></a>
        </div>

        <div class="nav-links">
            <div class="logo hiddenfordesktop">
                <a href="#home"> <img src="images/logo2.png"></a>
            </div>
            <a href="#story">Studio</a>
            <a href="#services">Services</a>
            <a href="#portfolio">Work</a>
            <a href="#clients">Clients</a>
            <a href="#join" class="nav-cta">Join Us</a>
            <div class="hiddenfordesktop labinta-info-div">
                <h3>LABINTA MALIK</h3>
                <p><span class="colormain">VFX </span><span class="italicspan">Artist</span></p>
            </div>
            <div class="contact-social hiddenfordesktop">


                <a class="social-link linkedin" title="LinkedIn"
                    href="https://www.linkedin.com/in/labintamalik?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=ios_app">
                    <svg class="social-icon-svg" viewBox="0 0 24 24" fill="none">

                        <!-- outer square -->
                        <rect x="3" y="3" width="18" height="18" rx="2.5" stroke="currentColor" stroke-width="1.6" />

                        <!-- "in" dot -->
                        <circle cx="8" cy="9" r="1.2" fill="currentColor" />

                        <!-- "i" line -->
                        <path d="M7.2 11V17" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" />

                        <!-- "n" shape -->
                        <path d="M11 17V11.5C11 10.2 12 9.2 13.3 9.2C14.6 9.2 15.6 10.2 15.6 11.5V17"
                            stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />

                    </svg>
                </a>

            </div>
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
            <div class="hero-label">Premier VFX & Animation Studio</div>
            <h1 class="hero-h1">
                <div>CRAFTING</div>
                <div class="glow-text">CINEMATIC</div>
                <div class="outline">REALITY</div>
            </h1>
            <p class="hero-sub">High-end VFX, animation, and visual storytelling that transforms imagination into
                breathtaking cinematic experiences. Trusted by brands, filmmakers, and digital creators worldwide.</p>
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
            <video src="videos/1.mp4" autoplay loop muted></video>

        </div>

        <div class="scroll-hint">SCROLL</div>
    </section>

    <!-- MARQUEE -->
    <div class="marquee-wrap">
        <div class="marquee-track">
            <span class="marquee-item">VFX & CGI</span>
            <span class="marquee-item"> <svg class="marquee-circle" width="10" height="10" viewBox="0 0 24 24" fill="#26b029">
        <circle cx="12" cy="12" r="6"></circle>
    </svg></span>
            <span class="marquee-item">3D ANIMATION</span>
            <span class="marquee-item"> <svg class="marquee-circle" width="10" height="10" viewBox="0 0 24 24" fill="#26b029">
        <circle cx="12" cy="12" r="6"></circle>
    </svg></span>
            <span class="marquee-item">MOTION TRACKING</span>
            <span class="marquee-item"> <svg class="marquee-circle" width="10" height="10" viewBox="0 0 24 24" fill="#26b029">
        <circle cx="12" cy="12" r="6"></circle>
    </svg></span>
            <span class="marquee-item">360 VR</span>
            <span class="marquee-item"> <svg class="marquee-circle" width="10" height="10" viewBox="0 0 24 24" fill="#26b029">
        <circle cx="12" cy="12" r="6"></circle>
    </svg></span>
            <span class="marquee-item">GREEN SCREEN COMPOSITING</span>
            <span class="marquee-item"> <svg class="marquee-circle" width="10" height="10" viewBox="0 0 24 24" fill="#26b029">
        <circle cx="12" cy="12" r="6"></circle>
    </svg></span>
            <span class="marquee-item">CONTENT PRODUCTION</span>
            <span class="marquee-item"> <svg class="marquee-circle" width="10" height="10" viewBox="0 0 24 24" fill="#26b029">
        <circle cx="12" cy="12" r="6"></circle>
    </svg></span>
            <span class="marquee-item">MOTION GRAPHICS</span>
            <span class="marquee-item"> <svg class="marquee-circle" width="10" height="10" viewBox="0 0 24 24" fill="#26b029">
        <circle cx="12" cy="12" r="6"></circle>
    </svg></span>
            <span class="marquee-item">CHARACTER DESIGN</span>
            <span class="marquee-item"> <svg class="marquee-circle" width="10" height="10" viewBox="0 0 24 24" fill="#26b029">
        <circle cx="12" cy="12" r="6"></circle>
    </svg></span>
            <!-- duplicate for seamless loop -->
            <span class="marquee-item">VFX & CGI</span>
            <span class="marquee-item"> <svg class="marquee-circle" width="10" height="10" viewBox="0 0 24 24" fill="#26b029">
        <circle cx="12" cy="12" r="6"></circle>
    </svg></span>
            <span class="marquee-item">3D ANIMATION</span>
            <span class="marquee-item"> <svg class="marquee-circle" width="10" height="10" viewBox="0 0 24 24" fill="#26b029">
        <circle cx="12" cy="12" r="6"></circle>
    </svg></span>
            <span class="marquee-item">MOTION TRACKING</span>
            <span class="marquee-item"> <svg class="marquee-circle" width="10" height="10" viewBox="0 0 24 24" fill="#26b029">
        <circle cx="12" cy="12" r="6"></circle>
    </svg></span>
            <span class="marquee-item">360 VR</span>
            <span class="marquee-item"> <svg class="marquee-circle" width="10" height="10" viewBox="0 0 24 24" fill="#26b029">
        <circle cx="12" cy="12" r="6"></circle>
    </svg></span>
            <span class="marquee-item">GREEN SCREEN COMPOSITING</span>
            <span class="marquee-item"><svg class="marquee-circle" width="10" height="10" viewBox="0 0 24 24" fill="#26b029">
        <circle cx="12" cy="12" r="6"></circle>
    </svg></span>
            <span class="marquee-item">CONTENT PRODUCTION</span>
            <span class="marquee-item"> <svg class="marquee-circle" width="10" height="10" viewBox="0 0 24 24" fill="#26b029">
        <circle cx="12" cy="12" r="6"></circle>
    </svg></span>
            <span class="marquee-item">MOTION GRAPHICS</span>
            <span class="marquee-item"> <svg class="marquee-circle" width="10" height="10" viewBox="0 0 24 24" fill="#26b029">
        <circle cx="12" cy="12" r="6"></circle>
    </svg></span>
            <span class="marquee-item">CHARACTER DESIGN</span>
            <span class="marquee-item"> <svg class="marquee-circle" width="10" height="10" viewBox="0 0 24 24" fill="#26b029">
        <circle cx="12" cy="12" r="6"></circle>
    </svg></span>
        </div>
    </div>

    <!-- STORY -->
    <section id="story">
        <div class="story-bg-text">BINTFX</div>
        <div class="section-tag reveal">The Studio.</div>
        <h2 class="section-h2 reveal">THE BINTFX <em>STORY</em></h2>
        <div class="story-layout">
            <div class="story-text">
                <p class="reveal">At <strong>Bintfx</strong>, we blend technical precision with boundless imagination to
                    redefine the landscape of visual storytelling. As a premier creative studio specializing in high-end
                    <strong>VFX and animation</strong>, we empower brands, filmmakers, and digital creators to transcend
                    the limits of reality.
                </p>
                <p class="reveal">Whether it's crafting <strong>hyper-realistic CGI</strong>, immersive 3D environments,
                    or fluid 2D animations, our mission is to turn complex concepts into breathtaking visual experiences
                    that resonate with audiences worldwide.</p>
                <p class="reveal">Our expertise spans a comprehensive suite of post-production services, including
                    <strong>motion graphics, 3D modeling, green screen compositing, and virtual asset
                        production</strong>. We take pride in our "out-of-the-box" approach, utilizing cutting-edge
                    technology such as interactive <strong>360 VR</strong> and advanced motion tracking.
                </p>
                <p class="reveal">From cinematic title sequences and character design to high-impact commercial
                    advertising, our team of skilled artists and animators works seamlessly to integrate visual effects
                    into any pipeline.</p>
                <div class="story-quote reveal">COLLABORATING TO CREATE MAGIC.</div>
            </div>
            <div class="story-right">
                <div class="ceo-card reveal reveal-right">

                    <div class="story-quote2 reveal2">Meet.</div>
                    <div class="ceo-name">Labinta Malik</div>
                    <div class="ceo-title">Founder & CEO· Bintfx</div>
                    <p class="ceo-bio">Under the visionary leadership of CEO <strong style="color:var(--text)">Labinta
                            Malik</strong>, Bintfx has emerged as a powerhouse of digital creativity and technical
                        innovation. Her philosophy of "boundless storytelling" serves as the foundation of the studio,
                        guiding a team of elite artists dedicated to pushing the envelope of what is possible in VFX and
                        animation.</p>
                    <div class="ceo-philosophy">
                        <p>"At Bintfx, we don't just fulfill project requirements” we curate immersive visual
                            journeys
                            that bridge the gap between abstract concepts and cinematic reality.</p>
                    </div>
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
                <p class="reveal" style="max-width:440px;color:var(--muted);font-size:15px;">Every frame
                    crafted with perfection. Every pixel a part of a larger story.</p>
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
                <div class="service-title">VFX & CGI</div>
                <p class="service-desc">High-end cinematic visual effects and computer-generated imagery. From set
                    extensions and complex compositing to particle simulations and photorealistic environments.</p>
                <div class="service-tags">
                    <span class="service-tag">Nuke</span>
                    <span class="service-tag">Houdini</span>
                    <span class="service-tag">After Effects</span>
                    <span class="service-tag">Compositing</span>
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
                <div class="service-title">3D Animation</div>
                <p class="service-desc">Characters, environments, simulations and immersive 3D worlds. Fluid 2D
                    animations to hyper-realistic CGI” we bring any concept to life.</p>
                <div class="service-tags">
                    <span class="service-tag">Blender</span>
                    <span class="service-tag">Maya</span>
                    <span class="service-tag">Character Design</span>
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
                <div class="service-title">Content Production</div>
                <p class="service-desc">Professional photography and videography tailored for brands and social media
                    marketing. Visuals that convert, engage, and elevate your identity.</p>
                <div class="service-tags">
                    <span class="service-tag">Photography</span>
                    <span class="service-tag">Videography</span>
                    <span class="service-tag">Brand Content</span>
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
                <div class="service-title">Motion Graphics</div>
                <p class="service-desc">Kinetic typography, animated infographics, and cinematic title sequences that
                    communicate with impact and elegance.</p>
                <div class="service-tags">
                    <span class="service-tag">After Effects</span>
                    <span class="service-tag">Cinema 4D</span>
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
                <div class="service-title">Interactive 360 VR</div>
                <p class="service-desc">Cutting-edge virtual reality experiences and immersive environments that place
                    audiences inside the story.</p>
                <div class="service-tags">
                    <span class="service-tag">VR Production</span>
                    <span class="service-tag">360 Capture</span>
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
                <div class="service-title">Green Screen & Compositing</div>
                <p class="service-desc">Seamless chroma key compositing, motion tracking, and set extension that
                    integrates real footage into any digital world.</p>
                <div class="service-tags">
                    <span class="service-tag">Rotoscoping</span>
                    <span class="service-tag">Tracking</span>
                    <span class="service-tag">Keying</span>
                </div>
            </div>
        </div>
    </section>
    <section id="capabilities-section section">
        <div class="cap-container">

            <div class="section-tag reveal">Capabilities.</div>
            <h2 class="section-h2 reveal">
                CORE <em>EXPERTISE</em>
            </h2>

            <div class="capabilities reveal">
                <div class="cap-grid">

                    <div class="cap-item">
                        <div class="cap-label">
                            <span class="cap-label-text-reversal">Visual Effects</span>
                            <span class="cap-label-per">97%</span>
                        </div>
                        <div class="cap-bar">
                            <div class="cap-fill" data-width="97"></div>
                        </div>
                    </div>

                    <div class="cap-item">
                        <div class="cap-label">
                            <span class="cap-label-text">3D Animation</span> <span class="cap-label-per">92%</span>
                        </div>
                        <div class="cap-bar">
                            <div class="cap-fill" data-width="92"></div>
                        </div>
                    </div>

                    <div class="cap-item">
                        <div class="cap-label">
                            <span class="cap-label-text">Content Creation</span> <span class="cap-label-per">88%</span>
                        </div>
                        <div class="cap-bar">
                            <div class="cap-fill" data-width="88"></div>
                        </div>
                    </div>

                    <div class="cap-item">
                        <div class="cap-label">

                            <span class="cap-label-text">Motion Graphics </span> <span class="cap-label-per">95%</span>
                        </div>
                        <div class="cap-bar">
                            <div class="cap-fill" data-width="95"></div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>
    <!-- PORTFOLIO -->
    <section id="portfolio">
        <div class="section-tag reveal">Selected Work.</div>
        <h2 class="section-h2 reveal">PORTFOLIO <em>REEL</em></h2>

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
   <!-- LIGHTBOX -->
<div class="lightbox" id="lightbox">
    
    <button class="lightbox-close" id="lbClose">
        <!-- CLOSE (X) -->
        <svg viewBox="0 0 24 24" width="20" height="20" fill="none">
            <path d="M6 6L18 18M18 6L6 18" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"/>
        </svg>
    </button>

    <button class="lightbox-nav lightbox-prev" id="lbPrev">
        <!-- LEFT ARROW -->
        <svg viewBox="0 0 24 24" width="24" height="24" fill="none">
            <path d="M15 5L8 12L15 19" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
    </button>

    <button class="lightbox-nav lightbox-next" id="lbNext">
        <!-- RIGHT ARROW -->
        <svg viewBox="0 0 24 24" width="24" height="24" fill="none">
            <path d="M9 5L16 12L9 19" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
    </button>

    <div class="lightbox-inner" id="lbInner"></div>
    <div class="lightbox-dots" id="lbDots"></div>
    <div class="lightbox-caption" id="lbCaption"></div>
</div>

    <!-- WHO WE WORK WITH -->
    <section id="clients">
        <div class="section-tag reveal">Who We Serve.</div>
        <h2 class="section-h2 reveal">CREATIVE <em>PARTNERS</em></h2>
        <div class="clients-grid">
            <div class="client-card reveal">
                <div class="client-num" style="color:#1ca325">01</div>
                <div class="client-title">VFX & Creative Collaborators</div>
                <p class="client-desc">We partner with talented compositors, 3D artists, editors, and animators to build
                    shared pipelines and deliver ambitious projects together. Our team provides the infrastructure
                    you
                    bring the talent.</p>
                <div class="client-tags">
                    <span class="client-tag">Artists</span>
                    <span class="client-tag">Compositors</span>
                    <span class="client-tag">Animators</span>
                    <span class="client-tag">Editors</span>
                </div>
            </div>
            <div class="client-card reveal reveal-right">
                <div class="client-num" style="color:#1ca325">02</div>
                <div class="client-title">Brands & Social Media</div>
                <p class="client-desc">Photography and videography crafted specifically for social media marketing. We
                    create high-impact visual content that builds brand identity, drives engagement, and converts
                    audiences into loyal customers.</p>
                <div class="client-tags">
                    <span class="client-tag">Photography</span>
                    <span class="client-tag">Videography</span>
                    <span class="client-tag">Social Media</span>
                    <span class="client-tag">Branding</span>
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
                <p class="reveal" style="color:var(--muted);line-height:1.8;font-size:16px;margin-bottom:40px;">Work on
                    real client projects. Build meaningful experience. Grow alongside a team of elite visual artists
                    pushing the boundaries of what's possible.</p>
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
                        <div class="join-item-desc">Contribute to live client work from day one no busywork, no
                            filler
                            tasks.</div>
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
            <form action="send_mail.php" method="POST" enctype="multipart/form-data"
                class="join-form reveal reveal-right">


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

    </section>

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
            style="text-align:center;color:var(--muted);margin-bottom:18px;font-size:17px;line-height:1.7;max-width:460px;margin-left:auto;margin-right:auto;">
            Ready to bring your vision to life? Reach out and let's create something extraordinary together.</p>
        <a href="mailto:hello@bintfx.us" class="contact-email reveal">"Crafting Your Cinematic Future"</a>
        <div class="contact-social">


            <a class="social-link linkedin" title="LinkedIn"
                href="https://www.linkedin.com/in/labintamalik?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=ios_app">
                <svg class="social-icon-svg" viewBox="0 0 24 24" fill="none">

                    <!-- outer square -->
                    <rect x="3" y="3" width="18" height="18" rx="2.5" stroke="currentColor" stroke-width="1.6" />

                    <!-- "in" dot -->
                    <circle cx="8" cy="9" r="1.2" fill="currentColor" />

                    <!-- "i" line -->
                    <path d="M7.2 11V17" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" />

                    <!-- "n" shape -->
                    <path d="M11 17V11.5C11 10.2 12 9.2 13.3 9.2C14.6 9.2 15.6 10.2 15.6 11.5V17" stroke="currentColor"
                        stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />

                </svg>
            </a>

        </div>
    </section>

    <!-- FOOTER -->
    <footer>
        <div class="footer-logo"><img src="images/logo2.png" alt=""></div>
        <div class="footer-copy">&copy; 2026 BINTFX· ALL RIGHTS RESERVED</div>
        <div style="font-family:'Space Mono',monospace;font-size:10px;color:var(--muted);letter-spacing:2px;">CRAFTING
            YOUR CINEMATIC FUTURE</div>
    </footer>



    <script src="js/java.js"></script>
</body>

</html>