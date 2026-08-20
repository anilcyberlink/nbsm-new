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
            <p class="lead">{!! $data->content !!}</p>
        </div>
    </section>

    <section>
        <div class="detail-block" id="audit-assurance">
            <div class="wrap">
                <div class="detail-grid reveal">
                    <div>
                        <div class="icon-badge"><svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="1.6">
                                <path d="M12 3l8 4v5c0 5-3.5 8.5-8 9-4.5-.5-8-4-8-9V7z" />
                                <path d="M9 12l2 2 4-4" />
                            </svg></div>
                        <div class="tag-num">Service</div>
                        <h2>Audit &amp; Assurance</h2>
                    </div>
                    <div>
                        <p style="font-size:16px;color:var(--slate);">Confidence in financial reporting, governance and
                            compliance, delivered by a team of 35+ full-time Chartered Accountants.</p>
                        <h3>What&rsquo;s included</h3>
                        <ul>
                            <li>Statutory Audit Services</li>
                            <li>Tax Audit and Certification</li>
                        </ul>
                        <a href="contact.html" class="btn btn-line" style="margin-top:28px;">Talk to our audit team <svg
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M5 12h14M13 6l6 6-6 6" />
                            </svg></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="detail-block" id="tax">
            <div class="wrap">
                <div class="detail-grid reveal">
                    <div>
                        <div class="icon-badge"><svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="1.6">
                                <path d="M9 3v4M15 3v4M4 8h16M6 8v11a2 2 0 002 2h8a2 2 0 002-2V8M9 13h6M9 17h4" />
                            </svg></div>
                        <div class="tag-num">Service</div>
                        <h2>Tax</h2>
                    </div>
                    <div>
                        <p style="font-size:16px;color:var(--slate);">Practical tax advice for business in Nepal and across
                            borders, aligned to the Income Tax Act 2058, VAT Act and Finance Act.</p>
                        <h3>What&rsquo;s included</h3>
                        <ul>
                            <li>Domestic Tax Advisory Services</li>
                            <li>International Taxation</li>
                        </ul>
                        <a href="contact.html" class="btn btn-line" style="margin-top:28px;">Talk to our tax team <svg
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M5 12h14M13 6l6 6-6 6" />
                            </svg></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="detail-block" id="deal-advisory">
            <div class="wrap">
                <div class="detail-grid reveal">
                    <div>
                        <div class="icon-badge"><svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="1.6">
                                <path d="M12 2l3 6 6 1-4.5 4.5L18 20l-6-3-6 3 1.5-6.5L3 9l6-1z" />
                            </svg></div>
                        <div class="tag-num">Service</div>
                        <h2>Deal Advisory</h2>
                    </div>
                    <div>
                        <p style="font-size:16px;color:var(--slate);">Advisory across the full deal lifecycle &mdash; from
                            pre-deal strategy through integration.</p>
                        <h3>What&rsquo;s included</h3>
                        <ul>
                            <li>Pre-Merger Support Services</li>
                            <li>Due Diligence Review Services</li>
                            <li>Business Valuation Services</li>
                            <li>Post-Merger Support Services</li>
                        </ul>
                        <a href="contact.html" class="btn btn-line" style="margin-top:28px;">Talk to our deal advisory team
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M5 12h14M13 6l6 6-6 6" />
                            </svg></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="detail-block" id="risk-consulting">
            <div class="wrap">
                <div class="detail-grid reveal">
                    <div>
                        <div class="icon-badge"><svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="1.6">
                                <circle cx="12" cy="12" r="9" />
                                <path d="M12 7v5l3 3" />
                            </svg></div>
                        <div class="tag-num">Service</div>
                        <h2>Risk &amp; Consulting</h2>
                    </div>
                    <div>
                        <p style="font-size:16px;color:var(--slate);">Helping clients manage risk, invest with confidence,
                            and modernise their operations.</p>
                        <h3>What&rsquo;s included</h3>
                        <ul>
                            <li>Risk Advisory Services</li>
                            <li>IT Security &amp; Technology Consulting</li>
                            <li>Foreign Direct Investment Consulting</li>
                            <li>Business Consulting</li>
                        </ul>
                        <a href="contact.html" class="btn btn-line" style="margin-top:28px;">Talk to our risk team <svg
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M5 12h14M13 6l6 6-6 6" />
                            </svg></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="detail-block" id="accounting-outsourcing">
            <div class="wrap">
                <div class="detail-grid reveal">
                    <div>
                        <div class="icon-badge"><svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="1.6">
                                <path d="M4 4h16v4H4zM4 12h16v8H4z" />
                                <path d="M8 16h8" />
                            </svg></div>
                        <div class="tag-num">Service</div>
                        <h2>Accounting &amp; Outsourcing</h2>
                    </div>
                    <div>
                        <p style="font-size:16px;color:var(--slate);">Scalable finance and audit support, delivered from
                            Nepal &mdash; our dedicated growth engine, with its own platform-fluency and global-outsourcing
                            details.</p>
                        <h3>Where to look next</h3>
                        <p style="margin-top:12px;color:var(--slate);font-size:14.5px;">This is our dedicated growth engine
                            &mdash; see the full breakdown of accounting and audit outsourcing, plus the platforms we work
                            in, on the <a href="global.html#outsourcing"
                                style="color:var(--harbor);font-weight:700;">Global page</a>.</p>
                        <a href="contact.html" class="btn btn-line" style="margin-top:28px;">Talk to our accounting team
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M5 12h14M13 6l6 6-6 6" />
                            </svg></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="detail-block" id="technology-digital">
            <div class="wrap">
                <div class="detail-grid reveal">
                    <div>
                        <div class="icon-badge"><svg class="icon" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="1.6">
                                <rect x="3" y="4" width="18" height="14" rx="1.5" />
                                <path d="M8 21h8M12 18v3" />
                            </svg></div>
                        <div class="tag-num">Service</div>
                        <h2>Technology &amp; Digital</h2>
                    </div>
                    <div>
                        <p style="font-size:16px;color:var(--slate);">Technology, controls, security and digital
                            transformation for clients modernising their operations.</p>
                        <h3>What&rsquo;s included</h3>
                        <ul>
                            <li>IT Security &amp; Controls Assurance</li>
                            <li>Systems &amp; Process Automation</li>
                            <li>Data Analytics &amp; Reporting</li>
                            <li>Digital Transformation Advisory</li>
                        </ul>
                        <a href="contact.html" class="btn btn-line" style="margin-top:28px;">Talk to our technology team
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M5 12h14M13 6l6 6-6 6" />
                            </svg></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="career-banner">
        <div class="wrap">
            <h2>Not sure which service you need?</h2>
            <a href="contact.html" class="btn btn-ghost">Talk to an expert <svg viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2">
                    <path d="M5 12h14M13 6l6 6-6 6" />
                </svg></a>
        </div>
    </section>

@stop
