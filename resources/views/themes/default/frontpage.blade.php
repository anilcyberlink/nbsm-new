@extends('themes.default.common.master')
@section('content')
    <!-- ============ HERO ============ -->
    <section class="hero">
        <div class="hero-scene" aria-hidden="true">
            <img class="hero-photo" src="assets/img/hero-kathmandu.jpg" alt="" />
            <div class="hero-scrim"></div>
            <div class="ascent-strip" id="ascent-strip"></div>
        </div>

        <div class="wrap">
            <div class="hero-inner">
                <span class="eyebrow hero-eyebrow">Chartered Accountants &middot; Est. 2009 &middot; Kathmandu,
                    Nepal</span>
                <h1>
                    An internationally connected professional-services firm,
                    headquartered in Nepal.
                </h1>
                <p class="lead">
                    NBSM &amp; Associates brings global standards and local expertise
                    together &mdash; for corporate decision makers, international
                    investors, and finance teams looking to outsource to Nepal. Member
                    of Moore Global.
                </p>
                <div class="hero-actions">
                    <a href="contact.html" class="btn btn-cyan">Talk to an expert
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M5 12h14M13 6l6 6-6 6" />
                        </svg></a>
                    <a href="about.html" class="btn btn-ghost">Learn about NBSM</a>
                </div>
                <div class="hero-tagline">
                    Trusted Advice. <span>Global Perspective.</span> Local Expertise.
                </div>
            </div>
        </div>

        <div class="stat-strip">
            <div class="wrap">
                <div class="stat">
                    <div class="n">130+</div>
                    <div class="l">Professionals</div>
                </div>
                <div class="stat">
                    <div class="n">35+</div>
                    <div class="l">Chartered Accountants</div>
                </div>
                <div class="stat">
                    <div class="n">2009</div>
                    <div class="l">Founded</div>
                </div>
                <div class="stat">
                    <div class="n">116+</div>
                    <div class="l">Countries &mdash; Moore Global network</div>
                </div>
                <div class="stat">
                    <div class="n">2</div>
                    <div class="l">Offices &mdash; Kathmandu &amp; Butwal</div>
                </div>
            </div>
        </div>
    </section>

    <!-- ============ INSIGHTS FLAGSHIP ============ -->
    <section class="insights-flagship" id="insights">
        <div class="wrap">
            <div class="if-head reveal">
                <span class="eyebrow">Our thinking</span>
                <h2>Insights &mdash; the asset we build every day.</h2>
                <p>
                    NBSM&rsquo;s research and analysis on the Nepali economy, tax policy
                    and regulation is read by the CFOs, boards and investors who rely on
                    us most.
                </p>
            </div>
        </div>

        <div class="if-stage">
            <div class="if-panel active" data-panel="0">
                <div class="if-visual">
                    <svg viewBox="0 0 600 400" preserveAspectRatio="xMidYMid slice" xmlns="http://www.w3.org/2000/svg">
                        <defs>
                            <linearGradient id="g1" x1="0" y1="0" x2="1" y2="1">
                                <stop offset="0%" stop-color="#1CA9E1" stop-opacity="0.5" />
                                <stop offset="100%" stop-color="#0E3F69" stop-opacity="0" />
                            </linearGradient>
                        </defs>
                        <rect width="600" height="400" fill="url(#g1)" />
                        <g stroke="#ffffff" stroke-opacity="0.18" stroke-width="1">
                            <line x1="0" y1="80" x2="600" y2="80" />
                            <line x1="0" y1="160" x2="600" y2="160" />
                            <line x1="0" y1="240" x2="600" y2="240" />
                            <line x1="0" y1="320" x2="600" y2="320" />
                        </g>
                        <polyline points="20,320 100,280 180,300 260,220 340,240 420,140 500,170 580,80" fill="none"
                            stroke="#1CA9E1" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" />
                        <circle cx="580" cy="80" r="7" fill="#ffffff" />
                    </svg>
                </div>
                <div class="if-content">
                    <span class="tag">Publication</span>
                    <h3>Nepal Budget 2083/84 (2026/27) &mdash; Key Highlights</h3>
                    <p>
                        Finance Minister Dr. Swarnim Wagle presented one of the most
                        reform-oriented budgets in recent memory, allocating a record NPR
                        2,124 billion &mdash; an 8.2% increase over the previous year.
                    </p>
                    <span class="date">29 May 2026</span>
                    <a href="insights.html#nepal-budget-2083-84" class="btn btn-primary">Read the full analysis
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M5 12h14M13 6l6 6-6 6" />
                        </svg></a>
                </div>
            </div>

            <div class="if-panel" data-panel="1">
                <div class="if-visual">
                    <svg viewBox="0 0 600 400" preserveAspectRatio="xMidYMid slice" xmlns="http://www.w3.org/2000/svg">
                        <rect width="600" height="400" fill="#0E3F69" />
                        <g fill="none" stroke="#1CA9E1" stroke-width="2" stroke-opacity="0.7">
                            <circle cx="300" cy="200" r="60" />
                            <circle cx="300" cy="200" r="110" />
                            <circle cx="300" cy="200" r="160" />
                        </g>
                        <circle cx="300" cy="200" r="10" fill="#ffffff" />
                        <path d="M300,200 L420,120" stroke="#ffffff" stroke-width="2" stroke-opacity="0.5" />
                        <path d="M300,200 L180,270" stroke="#ffffff" stroke-width="2" stroke-opacity="0.5" />
                    </svg>
                </div>
                <div class="if-content">
                    <span class="tag">Publication</span>
                    <h3>Automatic Route for Foreign Investment in Nepal</h3>
                    <p>
                        Nepal introduces an Automatic Route for FDI, removing red tape and
                        making it faster and easier for global investors to enter the
                        market.
                    </p>
                    <span class="date">2026</span>
                    <a href="insights.html#automatic-route-fdi" class="btn btn-primary">Read the full analysis
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M5 12h14M13 6l6 6-6 6" />
                        </svg></a>
                </div>
            </div>

            <div class="if-panel" data-panel="2">
                <div class="if-visual">
                    <svg viewBox="0 0 600 400" preserveAspectRatio="xMidYMid slice" xmlns="http://www.w3.org/2000/svg">
                        <rect width="600" height="400" fill="#0E3F69" />
                        <rect x="60" y="260" width="40" height="90" fill="#1CA9E1" opacity="0.5" />
                        <rect x="130" y="220" width="40" height="130" fill="#1CA9E1" opacity="0.65" />
                        <rect x="200" y="180" width="40" height="170" fill="#1CA9E1" opacity="0.8" />
                        <rect x="270" y="120" width="40" height="230" fill="#1CA9E1" />
                        <rect x="340" y="150" width="40" height="200" fill="#1CA9E1" opacity="0.85" />
                        <rect x="410" y="90" width="40" height="260" fill="#ffffff" />
                        <rect x="480" y="130" width="40" height="220" fill="#1CA9E1" opacity="0.7" />
                    </svg>
                </div>
                <div class="if-content">
                    <span class="tag">Publication</span>
                    <h3>Nepal Economic Update &mdash; 2025/26 (11 Months)</h3>
                    <p>
                        Remittances rose 38.2% to NPR 2,121 billion, lifting reserves to
                        19.1 months of import cover, with inflation averaging a benign
                        2.89%.
                    </p>
                    <span class="date">2026</span>
                    <a href="insights.html#nepal-economic-update-2025-26" class="btn btn-primary">Read the full analysis
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M5 12h14M13 6l6 6-6 6" />
                        </svg></a>
                </div>
            </div>

            <div class="if-tabs" id="if-tabs">
                <button class="if-tab active" data-index="0">
                    Nepal Budget 2083/84 &mdash; Key Highlights<span class="bar"></span>
                </button>
                <button class="if-tab" data-index="1">
                    Automatic Route for Foreign Investment<span class="bar"></span>
                </button>
                <button class="if-tab" data-index="2">
                    Nepal Economic Update 2025/26<span class="bar"></span>
                </button>
            </div>
        </div>

        <div class="wrap">
            <div class="if-more">
                <p>
                    New analysis published as Nepal&rsquo;s fiscal and regulatory
                    landscape evolves.
                </p>
                <a href="insights.html" class="btn btn-line"
                    style="border-color: rgba(255, 255, 255, 0.4); color: #fff">View all publications
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M5 12h14M13 6l6 6-6 6" />
                    </svg></a>
            </div>
        </div>
    </section>

    <!-- ============ NBSM DIFFERENCE ============ -->
    <section class="section" style="padding-top: 90px; padding-bottom: 90px">
        <div class="wrap">
            <div class="section-head reveal">
                <span class="eyebrow on-light">The NBSM difference</span>
                <h2>Five attributes, legible in ten seconds.</h2>
                <p>
                    Not claims &mdash; proof. Every one of these is demonstrated through
                    the numbers, the network and the way we frame our work, not just
                    stated.
                </p>
            </div>
            <div class="attr-grid reveal">
                <div class="attr-card">
                    <div class="idx">01</div>
                    <h4>Credibility</h4>
                    <p>Named clients, mandates and standing.</p>
                </div>
                <div class="attr-card">
                    <div class="idx">02</div>
                    <h4>Scale</h4>
                    <p>130+ professionals, two locations.</p>
                </div>
                <div class="attr-card">
                    <div class="idx">03</div>
                    <h4>Expertise</h4>
                    <p>Multidisciplinary depth across six services.</p>
                </div>
                <div class="attr-card">
                    <div class="idx">04</div>
                    <h4>International reach</h4>
                    <p>Moore Global &mdash; 116+ countries.</p>
                </div>
                <div class="attr-card">
                    <div class="idx">05</div>
                    <h4>Commercial relevance</h4>
                    <p>Outcomes framed, not services listed.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ============ AT A GLANCE ============ -->
    <section class="section bg-paper">
        <div class="wrap">
            <div class="about-grid">
                <div class="reveal">
                    <span class="eyebrow on-light">Who we are</span>
                    <h2 style="margin-top: 18px; font-size: clamp(26px, 3vw, 38px)">
                        A premier accounting and consulting firm, built for Nepal&rsquo;s
                        ambitions.
                    </h2>
                    <div class="about-copy" style="margin-top: 24px">
                        <p>
                            NBSM is a premier accounting and consulting firm of Nepal,
                            offering a full range of services in Audit, Tax, Deal Advisory,
                            Risk &amp; Consulting, Accounting &amp; Outsourcing and
                            Technology &amp; Digital to national and multinational companies
                            of every size.
                        </p>
                        <p>
                            Founded in 2009, NBSM has positioned itself as one of the
                            leading and most reputed accounting firms in Nepal within a very
                            short span of time.
                        </p>
                    </div>
                    <a href="about.html" class="btn btn-line" style="margin-top: 28px">More about NBSM
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M5 12h14M13 6l6 6-6 6" />
                        </svg></a>
                </div>
                <div class="about-panel reveal">
                    <div class="row">
                        <span class="l">Founded</span><span class="n">2009</span>
                    </div>
                    <div class="row">
                        <span class="l">Team of professionals</span><span class="n">130+</span>
                    </div>
                    <div class="row">
                        <span class="l">Full-time Chartered Accountants</span><span class="n">35+</span>
                    </div>
                    <div class="row">
                        <span class="l">Global network member</span><span class="n">Moore Global</span>
                    </div>
                    <div class="row">
                        <span class="l">Local Big 4 partner firm</span><span class="n">Nepal</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ============ SERVICES TEASER ============ -->
    <section class="section" id="services">
        <div class="wrap">
            <div class="section-head reveal">
                <span class="eyebrow on-light">Service architecture</span>
                <h2>Six services &mdash; led by the outcome.</h2>
                <p>
                    Each service leads with the benefit it delivers, then the capability
                    behind it.
                </p>
            </div>
            <div class="services-grid reveal">
                <div class="service-card">
                    <div class="icon-badge">
                        <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="1.6">
                            <path d="M12 3l8 4v5c0 5-3.5 8.5-8 9-4.5-.5-8-4-8-9V7z" />
                            <path d="M9 12l2 2 4-4" />
                        </svg>
                    </div>
                    <h3>Audit &amp; Assurance</h3>
                    <p>Confidence in financial reporting, governance and compliance.</p>
                    <a class="more" href="services.html#audit-assurance">Learn more
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M5 12h14M13 6l6 6-6 6" />
                        </svg></a>
                </div>
                <div class="service-card">
                    <div class="icon-badge">
                        <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="1.6">
                            <path d="M9 3v4M15 3v4M4 8h16M6 8v11a2 2 0 002 2h8a2 2 0 002-2V8M9 13h6M9 17h4" />
                        </svg>
                    </div>
                    <h3>Tax</h3>
                    <p>
                        Practical tax advice for business in Nepal and across borders.
                    </p>
                    <a class="more" href="services.html#tax">Learn more
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M5 12h14M13 6l6 6-6 6" />
                        </svg></a>
                </div>
                <div class="service-card">
                    <div class="icon-badge">
                        <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="1.6">
                            <path d="M12 2l3 6 6 1-4.5 4.5L18 20l-6-3-6 3 1.5-6.5L3 9l6-1z" />
                        </svg>
                    </div>
                    <h3>Deal Advisory</h3>
                    <p>
                        Better decisions around transactions, valuation and diligence.
                    </p>
                    <a class="more" href="services.html#deal-advisory">Learn more
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M5 12h14M13 6l6 6-6 6" />
                        </svg></a>
                </div>
                <div class="service-card">
                    <div class="icon-badge">
                        <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="1.6">
                            <circle cx="12" cy="12" r="9" />
                            <path d="M12 7v5l3 3" />
                        </svg>
                    </div>
                    <h3>Risk &amp; Consulting</h3>
                    <p>Stronger governance, controls, performance and resilience.</p>
                    <a class="more" href="services.html#risk-consulting">Learn more
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M5 12h14M13 6l6 6-6 6" />
                        </svg></a>
                </div>
                <div class="service-card flagship">
                    <span class="tag">Growth engine</span>
                    <h3 style="margin-top: 12px">Accounting &amp; Outsourcing</h3>
                    <p>Scalable finance and audit support, delivered from Nepal.</p>
                    <a class="more" href="global.html#outsourcing">See the outsourcing platform
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M5 12h14M13 6l6 6-6 6" />
                        </svg></a>
                </div>
                <div class="service-card">
                    <div class="icon-badge">
                        <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="1.6">
                            <rect x="3" y="4" width="18" height="14" rx="1.5" />
                            <path d="M8 21h8M12 18v3" />
                        </svg>
                    </div>
                    <h3>Technology &amp; Digital</h3>
                    <p>Technology, controls, security and digital transformation.</p>
                    <a class="more" href="services.html#technology-digital">Learn more
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M5 12h14M13 6l6 6-6 6" />
                        </svg></a>
                </div>
            </div>
            <div style="text-align: center; margin-top: 36px" class="reveal">
                <a href="services.html" class="btn btn-line">Explore all services
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M5 12h14M13 6l6 6-6 6" />
                    </svg></a>
            </div>
        </div>
    </section>

    <!-- ============ INDUSTRIES TEASER ============ -->
    <section class="section bg-paper" id="industries">
        <div class="wrap">
            <div class="section-head reveal">
                <span class="eyebrow on-light">Sector expertise</span>
                <h2>Expertise where it matters &mdash; nine sectors.</h2>
                <p>
                    Our teams are organised around the sectors that power Nepal&rsquo;s
                    economy.
                </p>
            </div>
            <div class="industry-grid reveal">
                <div class="industry-tile">
                    <span class="num">01</span>
                    <h4>Banking &amp; Financial Services</h4>
                </div>
                <div class="industry-tile">
                    <span class="num">02</span>
                    <h4>Energy &amp; Infrastructure</h4>
                </div>
                <div class="industry-tile">
                    <span class="num">03</span>
                    <h4>Manufacturing</h4>
                </div>
                <div class="industry-tile">
                    <span class="num">04</span>
                    <h4>Technology &amp; Telecommunications</h4>
                </div>
                <div class="industry-tile">
                    <span class="num">05</span>
                    <h4>Trading &amp; Consumer</h4>
                </div>
                <div class="industry-tile">
                    <span class="num">06</span>
                    <h4>Hospitality &amp; Tourism</h4>
                </div>
                <div class="industry-tile">
                    <span class="num">07</span>
                    <h4>Healthcare &amp; Education</h4>
                </div>
                <div class="industry-tile">
                    <span class="num">08</span>
                    <h4>Development &amp; Non-Profit</h4>
                </div>
                <div class="industry-tile">
                    <span class="num">09</span>
                    <h4>Real Estate &amp; Construction</h4>
                </div>
            </div>
            <div style="text-align: center; margin-top: 36px" class="reveal">
                <a href="industries.html" class="btn btn-line">See all industries
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M5 12h14M13 6l6 6-6 6" />
                    </svg></a>
            </div>
        </div>
    </section>

    <!-- ============ GLOBAL REACH TEASER ============ -->
    <section class="section vision2030" id="global"
        style="
        background: radial-gradient(
          120% 140% at 100% 0%,
          #124d80 0%,
          var(--ink) 45%,
          #082a48 100%
        );
        color: #fff;
      ">
        <div class="wrap">
            <div class="section-head reveal">
                <span class="eyebrow">Global reach</span>
                <h2 style="color: #fff">Nepal expertise. Global connectivity.</h2>
                <p style="color: rgba(255, 255, 255, 0.65)">
                    An independent firm associated with Moore Global &mdash; access to
                    international expertise across markets.
                </p>
            </div>
            <div class="journeys reveal">
                <div class="journey">
                    <div class="idx">Invest in Nepal</div>
                    <h4>FDI &amp; market entry</h4>
                    <p>
                        FDI and market entry support for foreign investors evaluating
                        Nepal.
                    </p>
                </div>
                <div class="journey">
                    <div class="idx">Operate in Nepal</div>
                    <h4>On-the-ground advisory</h4>
                    <p>
                        Accounting, tax, compliance and advisory delivered on the ground.
                    </p>
                </div>
                <div class="journey">
                    <div class="idx">Outsource to Nepal</div>
                    <h4>Finance operations, delivered</h4>
                    <p>
                        Accounting, audit and finance operations delivered from Nepal.
                    </p>
                </div>
            </div>
            <div class="moore-badge reveal">
                <img class="moore-logo" src="assets/img/moore-logo-ondark.png" alt="Moore Global" />
                <span class="moore-divider"></span>
                <span class="n">116+</span>
                <span class="l">countries in the Moore Global network.</span>
            </div>
            <div style="margin-top: 32px" class="reveal">
                <a href="global.html" class="btn btn-cyan">Explore our global network
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M5 12h14M13 6l6 6-6 6" />
                    </svg></a>
            </div>
        </div>
    </section>

    <!-- ============ DOING BUSINESS IN NEPAL TEASER ============ -->
    <section class="section bg-paper" id="nepal">
        <div class="wrap">
            <div class="section-head reveal">
                <span class="eyebrow on-light">Doing business in Nepal &middot; microsite</span>
                <h2>Your gateway to the Nepalese market.</h2>
                <p>
                    A dedicated journey for the international-business audience &mdash;
                    from why Nepal, through to ongoing compliance.
                </p>
            </div>
            <div class="nepal-cta reveal">
                <p>Considering Nepal? Talk to NBSM.</p>
                <a href="nepal.html" class="btn btn-cyan">Start the conversation
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M5 12h14M13 6l6 6-6 6" />
                    </svg></a>
            </div>
        </div>
    </section>

    <!-- ============ EXPERIENCE & PROOF ============ -->
    <section class="section">
        <div class="wrap">
            <div class="section-head reveal">
                <span class="eyebrow on-light">Proof &amp; people</span>
                <h2>Make it feel like a firm, not a portal.</h2>
                <p>
                    Real case studies in a consistent format, and partner-led content on
                    every major service page.
                </p>
            </div>
            <div class="case-grid reveal">
                <div class="case-card">
                    <span class="tag">Case study</span>
                    <h4>Restructuring a hydropower financing package</h4>
                    <div class="steps">
                        <span>Challenge</span><span>Complexity</span><span>Approach</span><span>Outcome</span>
                    </div>
                </div>
                <div class="case-card">
                    <span class="tag">Case study</span>
                    <h4>Due diligence for a cross-border acquisition</h4>
                    <div class="steps">
                        <span>Challenge</span><span>Complexity</span><span>Approach</span><span>Outcome</span>
                    </div>
                </div>
                <div class="case-card">
                    <span class="tag">Case study</span>
                    <h4>Standing up accounting outsourcing for a UK CPA firm</h4>
                    <div class="steps">
                        <span>Challenge</span><span>Complexity</span><span>Approach</span><span>Outcome</span>
                    </div>
                </div>
            </div>
            <div class="partner-note reveal">
                <p>
                    <strong>Partner-led content.</strong> Every major service page names
                    the responsible partner and offers a direct route to contact them.
                </p>
                <a href="about.html#leaders" class="btn btn-line">Meet the team
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M5 12h14M13 6l6 6-6 6" />
                    </svg></a>
            </div>
        </div>
    </section>

    <!-- ============ CAREERS BANNER ============ -->
    <section class="career-banner" id="careers">
        <div class="wrap">
            <h2>Take your career to the next level with NBSM.</h2>
            <a href="careers.html" class="btn btn-ghost">Explore careers
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M5 12h14M13 6l6 6-6 6" />
                </svg></a>
        </div>
    </section>

    <!-- ============ FINAL CTA ============ -->
    <section class="final-cta">
        <div class="wrap">
            <span class="step-num">LET&rsquo;S TALK ABOUT YOUR BUSINESS</span>
            <h2>Trusted advice. Global perspective. Local expertise.</h2>
            <div class="actions">
                <a href="contact.html" class="btn btn-cyan">Talk to an expert
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M5 12h14M13 6l6 6-6 6" />
                    </svg></a>
                <a href="contact.html" class="btn btn-ghost">Request a proposal</a>
            </div>
        </div>
    </section>

    <!-- ============ CONTACT TEASER ============ -->
    <section class="section" id="contact">
        <div class="wrap">
            <div class="section-head reveal">
                <span class="eyebrow on-light">Get in touch</span>
                <h2>How can we help you?</h2>
                <p>
                    Reach out to discuss an engagement, request a proposal, or speak
                    with a specific practice.
                </p>
            </div>
            <div class="contact-grid">
                <div class="reveal">
                    <div class="office">
                        <span class="label">Head Office &mdash; Kathmandu</span>
                        <h4>Four Square Complex</h4>
                        <p>
                            6th Floor, Block C &amp; D, Naryanchaur, Naxal, Kathmandu, Nepal
                        </p>
                        <p>977-1-4533069, 4515242 &middot; info@nbsm.com.np</p>
                    </div>
                    <div class="office">
                        <span class="label">Branch Office &mdash; Butwal</span>
                        <h4>Kalikanagar</h4>
                        <p>Kalikanagar, Butwal, Rupandehi, Nepal</p>
                        <p>071-415065 &middot; vijay.neupane@nbsm.com.np</p>
                    </div>
                </div>
                <div class="reveal"
                    style="
              display: flex;
              flex-direction: column;
              justify-content: center;
              gap: 20px;
            ">
                    <p style="font-size: 15.5px">
                        Prefer to fill out a form? Head to our dedicated contact page for
                        the full enquiry form and office details.
                    </p>
                    <a href="contact.html" class="btn btn-primary" style="align-self: flex-start">Go to contact page
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M5 12h14M13 6l6 6-6 6" />
                        </svg></a>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('libraries')
@endsection
