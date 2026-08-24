@extends('themes.default.common.master')
@section('post_title', $data->post_title)
@section('meta_keyword', $data->meta_keyword)
@section('meta_description', $data->meta_description)
@section('content')

    <section class="page-header">
        <div class="ascent-strip" id="ascent-strip" aria-hidden="true"></div>
        <div class="wrap">
            <div class="breadcrumb"><a href="{{ url('/') }}">Home</a> &nbsp;/&nbsp; <span>{{ $data->post_type }}</span>
            </div>
            <span class="eyebrow hero-eyebrow" style="color:var(--cyan)">{{ $data->uid }}</span>
            <h1 style="margin-top:16px;">{{ $data->caption }}</h1>
            <div class="lead">{!! $data->content !!}</div>
        </div>
    </section>
    
    <section class="section">
        <div class="wrap">
            <div class="detail-block" style="padding:44px 0;">
                <div class="detail-grid reveal">
                    <div>
                        <div class="tag-num">01</div>
                        <h2 style="font-size:22px;">Why Nepal</h2>
                    </div>
                    <div>
                        <p
                            style="font-size:13.5px;color:var(--cyan);font-weight:700;text-transform:uppercase;letter-spacing:.04em;">
                            Economy &middot; Market &middot; Workforce &middot; Infrastructure</p>
                        <p style="margin-top:14px;font-size:15px;color:var(--slate);">Nepal offers a young workforce,
                            growing digital infrastructure, and a strategic position between two of the world&rsquo;s
                            largest economies.</p>
                    </div>
                </div>
            </div>
            <div class="detail-block" style="padding:44px 0;">
                <div class="detail-grid reveal">
                    <div>
                        <div class="tag-num">02</div>
                        <h2 style="font-size:22px;">Establish &amp; invest</h2>
                    </div>
                    <div>
                        <p
                            style="font-size:13.5px;color:var(--cyan);font-weight:700;text-transform:uppercase;letter-spacing:.04em;">
                            Registration &middot; FDI &middot; Approvals &middot; Repatriation</p>
                        <p style="margin-top:14px;font-size:15px;color:var(--slate);">We guide investors through company
                            registration, FDI approval routes (including the new Automatic Route), and profit repatriation
                            requirements.</p>
                    </div>
                </div>
            </div>
            <div class="detail-block" style="padding:44px 0;">
                <div class="detail-grid reveal">
                    <div>
                        <div class="tag-num">03</div>
                        <h2 style="font-size:22px;">Tax &amp; operate</h2>
                    </div>
                    <div>
                        <p
                            style="font-size:13.5px;color:var(--cyan);font-weight:700;text-transform:uppercase;letter-spacing:.04em;">
                            Corporate tax &middot; VAT &middot; Accounting &middot; Payroll &middot; Audit</p>
                        <p style="margin-top:14px;font-size:15px;color:var(--slate);">Ongoing compliance support once
                            you&rsquo;re operating &mdash; corporate tax filings, VAT, statutory accounting, payroll and
                            annual audit.</p>
                    </div>
                </div>
            </div>
            <div class="detail-block" style="padding:44px 0;">
                <div class="detail-grid reveal">
                    <div>
                        <div class="tag-num">04</div>
                        <h2 style="font-size:22px;">Transact &amp; grow</h2>
                    </div>
                    <div>
                        <p
                            style="font-size:13.5px;color:var(--cyan);font-weight:700;text-transform:uppercase;letter-spacing:.04em;">
                            M&amp;A &middot; Valuation &middot; Due diligence &middot; Resources</p>
                        <p style="margin-top:14px;font-size:15px;color:var(--slate);">As your Nepal operation matures, we
                            support acquisitions, valuations, and due diligence on your next move.</p>
                    </div>
                </div>
            </div>
            <div class="nepal-cta reveal">
                <p>Considering Nepal? Talk to NBSM.</p>
                <a href="contact.html" class="btn btn-cyan">Start the conversation <svg viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2">
                        <path d="M5 12h14M13 6l6 6-6 6" />
                    </svg></a>
            </div>
        </div>
    </section>

@stop
