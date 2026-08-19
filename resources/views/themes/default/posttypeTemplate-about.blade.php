@extends('themes.default.common.master')
@section('post_title', $data->post_title)
@section('meta_keyword', $data->meta_keyword)
@section('meta_description', $data->meta_description)
@section('content')

    <section class="page-header">

        <div class="ascent-strip" id="ascent-strip" aria-hidden="true"></div>
        <div class="wrap">
            <div class="breadcrumb"><a href="{{url('/')}}">Home</a> &nbsp;/&nbsp; <span>{{ $data->post_type }}</span></div>
            <span class="eyebrow hero-eyebrow" style="color:var(--cyan)">{{ $data->post_type }}</span>
            <h1 style="margin-top:16px;">{{ $data->uid }}</h1>
            <p class="lead">{{ $data->caption }}</p>
        </div>
    </section>
    <section class="section">
        <div class="wrap">
            <div class="about-grid">
                <div class="reveal">
                    <span class="eyebrow on-light">Our story</span>
                    <h2 style="margin-top:18px;font-size:clamp(26px,3vw,38px);">From a Kathmandu practice to an
                        internationally connected firm.</h2>
                    <div class="about-copy" style="margin-top:24px;">
                        <p>NBSM is a premier accounting and consulting firm of Nepal, offering a full range of services in
                            Audit, Tax, Deal Advisory, Risk &amp; Consulting, Accounting &amp; Outsourcing and Technology
                            &amp; Digital to national and multinational companies of every size.</p>
                        <p>We enhance the value of our clients by focusing on solutions that are innovative, yet practical
                            and implementable &mdash; blending domain expertise with analytical rigor, and an uncompromising
                            focus on quality. We hire and nurture high-quality professionals with a genuine passion for
                            excellence.</p>
                        <p>Founded in 2009, NBSM has positioned itself as one of the leading and most reputed accounting
                            firms in Nepal within a very short span of time. As a member of Moore Global and local partner
                            to Big Four firms in Nepal, we combine that local depth with genuine international reach.</p>
                    </div>
                </div>
                <div class="about-panel reveal">
                    <div class="row"><span class="l">Founded</span><span class="n">2009</span></div>
                    <div class="row"><span class="l">Team of professionals</span><span class="n">130+</span>
                    </div>
                    <div class="row"><span class="l">Full-time Chartered Accountants</span><span
                            class="n">35+</span></div>
                    <div class="row"><span class="l">Global network member</span><span class="n">Moore
                            Global</span></div>
                    <div class="row"><span class="l">Local Big 4 partner firm</span><span
                            class="n">Nepal</span></div>
                </div>
            </div>
        </div>
    </section>

    <section class="section bg-paper" id="way-we-work">
        <div class="wrap">
            <div class="section-head reveal">
                <span class="eyebrow on-light">The way we work</span>
                <h2>A disciplined process, a dedicated team.</h2>
            </div>
            <div class="process reveal">
                <div class="step">
                    <div class="num">01</div>
                    <h4>Understand</h4>
                    <p>We invest time up front to understand your business, sector and risk profile before proposing an
                        approach.</p>
                </div>
                <div class="step">
                    <div class="num">02</div>
                    <h4>Assign</h4>
                    <p>A consistent, senior-led team is assigned to your engagement &mdash; with a dedicated partner as your
                        point of contact.</p>
                </div>
                <div class="step">
                    <div class="num">03</div>
                    <h4>Deliver</h4>
                    <p>Work is executed with analytical rigor and quality control, on the timeline your business requires.
                    </p>
                </div>
                <div class="step">
                    <div class="num">04</div>
                    <h4>Sustain</h4>
                    <p>We stay engaged beyond delivery &mdash; ready to act fast as your circumstances, risks and
                        opportunities change.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="section" id="leaders">
        <div class="wrap">
            <div class="section-head reveal">
                <span class="eyebrow on-light">Leadership</span>
                <h2>Senior people, on every engagement.</h2>
                <p>Every NBSM client works directly with experienced partners and department heads &mdash; not just
                    delegated staff.</p>
            </div>
            <div class="industry-grid reveal" style="grid-template-columns:repeat(4,1fr);">
                <div class="person-card">
                    <div class="person-avatar">NS</div>
                    <h4>Nil Saru</h4>
                    <div class="role">Managing Partner</div>
                </div>
                <div class="person-card">
                    <div class="person-avatar">DG</div>
                    <h4>Durga Pd. Gnawali</h4>
                    <div class="role">Senior Partner</div>
                </div>
                <div class="person-card">
                    <div class="person-avatar">RS</div>
                    <h4>Rajesh Kumar Sah</h4>
                    <div class="role">Senior Partner</div>
                </div>
                <div class="person-card">
                    <div class="person-avatar">VN</div>
                    <h4>Vijay Deep Neupane</h4>
                    <div class="role">Partner</div>
                </div>
                <div class="person-card">
                    <div class="person-avatar">YS</div>
                    <h4>Yogendra Sen</h4>
                    <div class="role">Head, Audit &amp; Assurance</div>
                </div>
                <div class="person-card">
                    <div class="person-avatar">PP</div>
                    <h4>Pratima Pandey</h4>
                    <div class="role">Head, Internal Audit</div>
                </div>
                <div class="person-card">
                    <div class="person-avatar">AS</div>
                    <h4>Amrit Sapkota</h4>
                    <div class="role">Head, Consulting</div>
                </div>
                <div class="person-card">
                    <div class="person-avatar">SP</div>
                    <h4>Sanish Poudel</h4>
                    <div class="role">Head, Taxation</div>
                </div>
            </div>
        </div>
    </section>

    <section class="career-banner">
        <div class="wrap">
            <h2>Take your career to the next level with NBSM.</h2>
            <a href="careers.html" class="btn btn-ghost">Explore careers <svg viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2">
                    <path d="M5 12h14M13 6l6 6-6 6" />
                </svg></a>
        </div>
    </section>

@stop
