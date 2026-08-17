<!doctype html>
<html lang="en">

<head>
    <title>{{ $setting->site_name }} @yield('trip_title')</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="google-site-verification" content="" />
    <meta name="keywords" content="@yield('meta_keyword')" />
    <meta name="description" content="@yield('meta_description')" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="@yield('title')" />
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:site_name" content="{{ $setting->site_name }}" />
    <meta property="og:description" content="@yield('meta_description')" />

    @if (trim($__env->yieldContent('thumbnail')))
        <meta property="og:image" content="{{ asset(env('PUBLIC_PATH') . 'uploads/original/') }}/@yield('thumbnail')" />
    @else
        <meta property="og:image" content="{{ asset(env('PUBLIC_PATH')) }}/images/logo.png" />
    @endif
    <meta property="og:image:width" content="1000" />
    <meta property="og:image:height" content="600" />

    <meta name="twitter:image" content="{{ asset(env('PUBLIC_PATH') . 'uploads/original/') }}/@yield('thumbnail')" />
    <meta name="twitter:url" content="{{ url()->current() }}">
    <meta name="twitter:title" content="@yield('title')">
    <meta name="twitter:description" content="@yield('meta_description')">
    <meta name="twitter:card" content="summary_large_image" />

    <!-- favicon -->
    <link rel="icon" href="{{ asset('images/favicon.png') }}" type="image/png">
    <meta name="theme-color" content="#0e5d97">
    <!-- end favicon -->

    <link rel="stylesheet" href="{{ asset('themes-assets/assets/styles.css') }}" />
</head>

<body>
    <div class="utility-bar" id="utility-bar">
        <div class="wrap">
            <div class="utility-left">
                <a class="" href="insights.php">Insights</a>
                <a class="" href="about.php">Who We Are</a>
                <a class="" href="global.php">Global</a>
            </div>
            <div class="utility-right">
                <a href="nepal.php">Doing Business in Nepal</a>
                <span class="divider"></span>
                <a href="careers.php">Careers</a>
                <span class="divider"></span>
                <svg class="search-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4">
                    <circle cx="11" cy="11" r="7" />
                    <path d="M21 21l-4.35-4.35" />
                </svg>
            </div>
        </div>
    </div>

    <header id="site-header">
        <div class="wrap">
            <a href="index.php" class="logo-wrap">
                <img class="logo-mark logo-mark-dark" src="{{ asset('themes-assets/assets/img/logo-ondark.png') }}" alt="NBSM &amp; Associates"
                    style="display: none" />
                <img class="logo-mark logo-mark-light" src="{{ asset('themes-assets/assets/img/logo.png')}}" alt="NBSM &amp; Associates" />
            </a>
            <div class="nav-group">
                <nav>
                    <a class="nav-link featured" href="insights.php">Insights</a>
                    <a class="nav-link" href="about.php">Who We Are</a>
                    <a class="nav-link" href="services.php">Services</a>
                    <a class="nav-link" href="industries.php">Industries</a>
                    <a class="nav-link" href="global.php">Global</a>
                    <a class="nav-link" href="contact.php">Contact</a>
                </nav>
                <div class="header-cta">
                    <a href="contact.php" class="btn btn-cyan">Request a Proposal
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M5 12h14M13 6l6 6-6 6" />
                        </svg></a>
                </div>
            </div>
        </div>
    </header>
    <div id="top"></div>
