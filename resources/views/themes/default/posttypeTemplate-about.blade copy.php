<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>About — posts section preview</title>
<style>
/* =====================================================================
   This is your ACTUAL styles.css, unmodified, so this preview matches
   production pixel-for-pixel. Only addition at the very bottom is
   .about-media, which is new for the description section.
   ===================================================================== */
:root {
    --ink: #0E3F69;
    --harbor: #0E5D97;
    --cyan: #1CA9E1;
    --cyan-soft: #E4F5FC;
    --paper: #F6F8FA;
    --paper-2: #EEF2F5;
    --white: #FFFFFF;
    --slate: #55636F;
    --slate-2: #7C8A96;
    --stone: #DCE2E7;
    --stone-2: #C7CFD6;
    --shadow: 0 20px 50px -20px rgba(14, 63, 105, 0.25);
    --maxw: 1240px;
    --font: Arial, Helvetica, "Helvetica Neue", sans-serif;
}
* { box-sizing: border-box; }
html { scroll-behavior: smooth; }
body { margin: 0; font-family: var(--font); color: var(--ink); background: var(--white); -webkit-font-smoothing: antialiased; overflow-x: hidden; }
img { max-width: 100%; display: block; }
a { color: inherit; text-decoration: none; }
.wrap { max-width: var(--maxw); margin: 0 auto; padding: 0 32px; }
.eyebrow { font-family: var(--font); font-size: 12px; letter-spacing: .14em; text-transform: uppercase; color: var(--cyan); font-weight: 700; display: inline-flex; align-items: center; gap: 10px; }
.eyebrow::before { content: ""; width: 22px; height: 2px; background: var(--cyan); display: inline-block; }
.eyebrow.on-light { color: var(--harbor); }
.eyebrow.on-light::before { background: var(--harbor); }
h1, h2, h3, h4 { font-family: var(--font); font-weight: 800; line-height: 1.12; margin: 0; letter-spacing: -.01em; color: var(--ink); }
p { line-height: 1.7; color: var(--slate); margin: 0; font-family: var(--font); }
section { position: relative; }
.btn { display: inline-flex; align-items: center; gap: 10px; font-family: var(--font); font-weight: 700; font-size: 14.5px; padding: 14px 26px; border-radius: 2px; border: 1px solid transparent; cursor: pointer; transition: transform .22s ease, box-shadow .22s ease, background .22s ease, border-color .22s ease; white-space: nowrap; }
.btn:hover { transform: translateY(-2px); }
.btn-line { border-color: var(--stone-2); color: var(--ink); }
.btn-line:hover { border-color: var(--ink); box-shadow: 0 12px 24px -12px rgba(14, 63, 105, 0.3); }
.btn svg { width: 14px; height: 14px; transition: transform .25s ease; }
.btn:hover svg { transform: translateX(3px); }

/* ---------- INNER PAGE HEADER ---------- */
.page-header { background: linear-gradient(180deg, #0A3358 0%, var(--ink) 60%, #082A48 100%); color: #fff; padding: 190px 0 70px; position: relative; overflow: hidden; }
.page-header::before { content: ""; position: absolute; inset: 0; background-image: radial-gradient(circle at 85% 20%, rgba(28, 169, 225, .16), transparent 45%), radial-gradient(circle at 10% 90%, rgba(28, 169, 225, .10), transparent 40%); pointer-events: none; }
.page-header { border-bottom: 1px solid rgba(255, 255, 255, .08); }
.page-header .wrap { position: relative; z-index: 2; }
.breadcrumb { display: flex; align-items: center; gap: 8px; font-size: 12.5px; color: rgba(255, 255, 255, .55); margin-bottom: 18px; flex-wrap: wrap; }
.breadcrumb a { color: rgba(255, 255, 255, .75); }
.breadcrumb a:hover { color: var(--cyan); }
.page-header h1 { font-size: clamp(30px, 4vw, 46px); color: #fff; max-width: 22ch; font-weight: 800; }
.page-header p.lead, .page-header .lead { margin-top: 16px; max-width: 60ch; color: rgba(255, 255, 255, .72); font-size: 16px; }
.page-header .lead *{ color: rgba(255,255,255,.72) !important; }

/* ---------- SECTION GENERIC ---------- */
.section { padding: 110px 0; }
.section-head { max-width: 660px; margin-bottom: 56px; }
.section-head h2 { font-size: clamp(27px, 3.1vw, 40px); margin-top: 16px; }
.section-head p { margin-top: 16px; font-size: 16px; }
.bg-paper { background: var(--paper); }

/* ---------- AT A GLANCE / DESCRIPTION GRID ---------- */
.about-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 70px; align-items: center; }
.about-copy p + p { margin-top: 16px; }

/* ---------- DETAIL BLOCK (posts loop) ---------- */
.detail-block { padding: 70px 0; border-bottom: 1px solid var(--stone); }
.detail-block:last-of-type { border-bottom: none; }
.detail-block:nth-of-type(even) { background: var(--paper); }
.detail-block { transition: background .2s ease; }
.detail-grid { display: grid; grid-template-columns: 1fr 2fr; gap: 50px; align-items: start; }
.detail-grid .tag-num { font-size: 13px; font-weight: 800; color: var(--cyan); }
.detail-grid h2 { margin-top: 12px; font-size: 26px; }
.detail-grid h3 { font-size: 15px; font-weight: 800; text-transform: uppercase; letter-spacing: .04em; color: var(--harbor); margin-top: 26px; }
.detail-grid ul { margin: 14px 0 0; padding-left: 0; list-style: none; display: flex; flex-direction: column; gap: 10px; }
.detail-grid ul li { font-size: 14.5px; color: var(--slate); padding-left: 18px; position: relative; }
.detail-grid ul li::before { content: "—"; position: absolute; left: 0; color: var(--cyan); }
.detail-grid p + p { margin-top: 14px; }

@media (max-width:980px) {
    .about-grid { grid-template-columns: 1fr; }
    .detail-grid { grid-template-columns: 1fr; }
}

/* ---------- REVEAL ---------- */
.reveal { opacity: 0; transform: translateY(24px); transition: opacity .8s cubic-bezier(.16,.84,.24,1), transform .8s cubic-bezier(.16,.84,.24,1); }
.reveal.in { opacity: 1; transform: none; }

/* =====================================================================
   NEW — only addition needed for the description-with-image section
   ===================================================================== */
.about-media{
    border-radius: 2px;
    overflow: hidden;
    box-shadow: var(--shadow);
}
.about-media img{
    width: 100%;
    height: 100%;
    object-fit: cover;
    aspect-ratio: 4/3;
}
</style>
</head>
<body>

<!-- ============ HERO (context only, so spacing/rhythm reads correctly) ============ -->
<section class="page-header">
    <div class="wrap">
        <div class="breadcrumb"><a href="#">Home</a>&nbsp;/&nbsp;<span>About</span></div>
        <span class="eyebrow" style="color:var(--cyan)">About NBSM</span>
        <h1 style="margin-top:16px;">From a Kathmandu practice to an internationally connected firm.</h1>
        <div class="lead">Founded in 2009, NBSM has grown into one of Nepal's most reputed accounting and consulting firms — a local partner to Big Four firms and a member of Moore Global.</div>
    </div>
</section>

<!-- ============ DESCRIPTION — one image max, sits between hero and the post loop ============ -->
<section class="section">
    <div class="wrap">
        <div class="about-grid reveal in">
            <div>
                <span class="eyebrow on-light">Who we are</span>
                <h2 style="margin-top:18px;font-size:clamp(26px,3vw,38px);">A premier accounting and consulting firm, built for Nepal's ambitions.</h2>
                <div class="about-copy" style="margin-top:24px;">
                    <p>NBSM is a premier accounting and consulting firm of Nepal, offering a full range of services in Audit, Tax, Deal Advisory, Risk &amp; Consulting, Accounting &amp; Outsourcing and Technology &amp; Digital to national and multinational companies of every size.</p>
                    <p>We enhance the value of our clients by focusing on solutions that are innovative, yet practical and implementable — blending domain expertise with analytical rigor.</p>
                </div>
            </div>
            <div class="about-media">
                <img src="https://images.unsplash.com/photo-1497366216548-37526070297c?q=80&w=900&auto=format&fit=crop" alt="NBSM office">
            </div>
        </div>
    </div>
</section>

<!-- ============ POSTS — repeatable @foreach($posts as $i => $post) loop ============ -->

<div class="detail-block reveal in" id="our-story">
    <div class="wrap">
        <div class="detail-grid">
            <div>
                <div class="tag-num">01</div>
                <h2>Our story</h2>
            </div>
            <div>
                <p>NBSM was founded in 2009 by a small group of chartered accountants who saw an opportunity to bring international standards of audit and advisory work to Nepal's fast-growing private sector.</p>
                <p>What began as a single Kathmandu office has grown into a firm of over 130 professionals across two locations, serving clients from local manufacturers to multinational investors entering the Nepali market.</p>
                <p>In 2018, NBSM became the exclusive Nepal member of Moore Global, connecting our local expertise to a network spanning 116+ countries — a milestone that reshaped how we serve cross-border clients.</p>
            </div>
        </div>
    </div>
</div>

<div class="detail-block reveal in" id="the-way-we-work">
    <div class="wrap">
        <div class="detail-grid">
            <div>
                <div class="tag-num">02</div>
                <h2>The way we work</h2>
            </div>
            <div>
                <p>Every engagement follows a disciplined process, led by a senior partner from the first conversation through delivery — never delegated entirely to junior staff.</p>
                <h3>What clients can expect</h3>
                <ul>
                    <li>Time invested up front to understand your business, sector and risk profile before we propose an approach</li>
                    <li>A consistent, senior-led team assigned for the life of the engagement</li>
                    <li>Work executed with analytical rigor and quality control, on your timeline</li>
                    <li>Continued engagement after delivery, so we can act fast as circumstances change</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="detail-block reveal in" id="client-commitment">
    <div class="wrap">
        <div class="detail-grid">
            <div>
                <div class="tag-num">03</div>
                <h2>Client commitment</h2>
            </div>
            <div>
                <p>This third card is here purely to demonstrate the loop scaling past two entries — note the background automatically alternates via <code>:nth-of-type(even)</code>, so a 3rd, 4th, or 10th post needs no extra styling.</p>
            </div>
        </div>
    </div>
</div>

</body>
</html>
