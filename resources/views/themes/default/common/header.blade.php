<!DOCTYPE html>
<html>
<head>
    <title>{{ $setting->site_name }} @yield('trip_title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="google-site-verification" content=""/>
     <meta name="keywords" content="@yield('meta_keyword')" />
            <meta name="description" content="@yield('meta_description')" />
             <meta property="og:type" content="website" />
        <meta property="og:title" content="@yield('title')" />
        <meta property="og:url" content="{{url()->current()}}" />
        <meta property="og:site_name" content="{{$setting->site_name}}" />
        <meta property="og:description" content="@yield('meta_description')" />
      
         @if (trim($__env->yieldContent('thumbnail')))
       <meta property="og:image" content="{{ asset( env('PUBLIC_PATH') . 'uploads/original/' ) }}/@yield('thumbnail')" />
       @else
       <meta property="og:image" content="{{asset(env('PUBLIC_PATH'))}}/images/logo.png" />
        @endif
        <meta property="og:image:width" content="1000" />
        <meta property="og:image:height" content="600" />
        
        <meta name="twitter:image" content="{{ asset( env('PUBLIC_PATH') . 'uploads/original/' ) }}/@yield('thumbnail')" />
        <meta name="twitter:url" content="{{url()->current()}}">
        <meta name="twitter:title" content="@yield('title')">
        <meta name="twitter:description" content="@yield('meta_description')">
        <meta name="twitter:card" content="summary_large_image" />

    <!-- favicon -->
    <link rel="icon" href="{{asset('images/favicon.png')}}" type="image/png">
    <meta name="theme-color" content="#0e5d97">
    <!-- end favicon -->
    <!-- required css  -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}"/>

    <!-- end -->
</head>
<body>
<!-- header start -->
 <div id="loader" class="loader">
         <div class="uk-position-relative">
            <div class="uk-flex uk-flex-middle uk-flex-center  uk-height-viewport ">
            <span class="uk-margin-small-right uk-text-white" uk-spinner="ratio: 2"></span>
            </div>
         </div>
      </div>
<header uk-sticky="top:600; animation: uk-animation-slide-top  uk-animation-slow uk-transform-origin-bottom-center">
    <div class="uk-middle-header uk-flex-middle">
        <div class="uk-container uk-container-large">
            <nav class="uk-navbar">
                <div class="uk-navbar-left">
                    <a class="uk-logo" href="{{url('/')}}">
                        <img src="{{asset('images/logo.png')}}" alt="{{$setting->site_name}}">
                    </a>
                </div>
                <div class="uk-navbar-right">
                    <div class="uk-navigation ">
                        <!-- menu -->
                        <nav class="" uk-navbar>
                            <ul class="uk-navbar-nav  uk-visible@m  uk-position-relative">
                                <li><a href="{{url('/')}}"><i class="fa fa-home fa-lg"></i></a></li>
                                <!--mega menu -->
                                @if ($navigations->count())
                                    @foreach ($navigations as $row)
                                        @if ($loop->iteration == 1)

                                            <li>
                                                <a href="{{ url('page/' . posttype_url($row->uri)) }}"
                                                   title="">{{$row->post_type}}
                                                    <span class="" uk-icon="icon: chevron-down; ratio: .75;"></span>
                                                </a>
                                                <div
                                                    class="uk-navbar-dropdown uk-mega-menu uk-margin-remove uk-padding-remove uk-border-top"
                                                    uk-drop="delay-hide: 10; uk-animation-slide-top-small; duration: 300; boundary: header; boundary-align: true; pos: bottom-justify;">
                                                    <div class="uk-container">
                                                        <!--  -->
                                                        <div
                                                            class="uk-grid  uk-grid-divider uk-margin-medium uk-child-width-1-3@s uk-mega-list"
                                                            uk-grid
                                                            uk-scrollspy="cls: uk-animation-slide-top-small; delay: 300; repeat: false;">
                                                            <!--  -->
                                                            @if (getposts($row->id)->count() > 0)
                                                                <div>
                                                                    <div class="uk-padding-menu">
                                                                        <ul class="uk-list uk-margin-remove">
                                                                            @foreach (getposts($row->id) as $_row)
                                                                                <li>
                                                                                    @if($_row->external_link)
                                                                                     <a href="{{ $_row->external_link }}"
                                                                                       title="" target="_blank">{{ \Illuminate\Support\Str::ucfirst($_row->post_title) }}</a>
                                                                                       @else
                                                                                    <a href="{{ url(geturl($_row['uri'], $_row['page_key'])) }}"
                                                                                       title="">{{ \Illuminate\Support\Str::ucfirst($_row->post_title) }}</a>
                                                                                       @endif
                                                                                </li>

                                                                                @continue($loop->iteration == 9)

                                                                                @if ($loop->iteration % 3 == 0)

                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <!--  -->
                                                                <!--  -->
                                                                <div>
                                                                    <div class="uk-padding-menu">
                                                                        <ul class="uk-list uk-margin-remove">
                                                                            @endif
                                                                            @endforeach
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                        @endif
                                                        <!--  -->

                                                        </div>
                                                        <!--  -->
                                                    </div>
                                                </div>
                                            </li>
                                        @endif
                                    @endforeach
                                @endif
                            <!-- end mega menu -->
                                <!--mega menu -->
                                @if ($navigations->count())
                                    @foreach ($navigations as $row)
                                        @if ($loop->iteration == 2)
                                            <li>
                                                <a href="{{ url('page/' . posttype_url($row->uri)) }}"
                                                   title="">{{$row->post_type}}
                                                    <span class="" uk-icon="icon: chevron-down; ratio: .75;"></span>
                                                </a>
                                                <div
                                                    class="uk-navbar-dropdown uk-mega-menu uk-margin-remove uk-padding-remove uk-border-top"
                                                    uk-drop="delay-hide: 10; uk-animation-slide-top-small; duration: 300; boundary: header; boundary-align: true; pos: bottom-justify;">
                                                    <div class="uk-container">
                                                        <!--  -->
                                                        <div
                                                            class="uk-grid  uk-grid-divider uk-margin-medium uk-child-width-1-4@s uk-mega-list"
                                                            uk-grid
                                                            uk-scrollspy="cls: uk-animation-slide-top-small; delay: 300; repeat: false;">
                                                            <!--  -->
                                                            @if (has_posts($row->id))
                                                                @foreach (has_posts($row->id) as $_row)
                                                                    <div>
                                                                        <div class="uk-padding-menu">
                                                                            <h5 class="uk-text-bold uk-margin-small">
                                                                                 @if($_row->external_link)
                                                                                     <a href="{{$_row->external_link}}" title="" class="text-white" target="_blank">{{$_row->post_title}}</a>
                                                                                       @else
                                                                                   <a href="{{url(geturl($_row->uri))}}" title="" class="text-white">{{$_row->post_title}}</a>
                                                                                       @endif
                                                                            </h5>
                                                                            <ul class="uk-list  uk-margin-remove">
                                                                                @if(has_child_post($_row->id))
                                                                                    @foreach (has_child_post($_row->id) as $__row)

                                                                                        <li>
                                                                                             @if($__row->external_link)
                                                                                   <a href="{{$__row->external_link}}"
                                                                                               title="">{{$__row->post_title}}
                                                                                            </a>
                                                                                       @else
                                                                                 <a href="{{url(strtolower($_row->uri).'/'.geturl($__row->uri))}}"
                                                                                               title="">{{$__row->post_title}}
                                                                                            </a>
                                                                                       @endif
                                                                                            </li>
                                                                                    @endforeach
                                                                                @endif
                                                                               
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                            @endforeach
                                                        @endif
                                                        <!--  -->

                                                        </div>
                                                        <!--  -->
                                                    </div>
                                                </div>
                                            </li>
                                        @endif
                                    @endforeach
                                @endif


                            <!-- end mega menu -->
                                <!--mega menu -->
                                @if ($navigations->count())
                                    @foreach ($navigations as $row)
                                        @if ($loop->iteration == 3)
                                            <li>
                                                <a href="#" title="">{{$row->post_type}}
                                                    <span class="" uk-icon="icon: chevron-down; ratio: .75;"></span>
                                                </a>
                                                <div
                                                    class="uk-navbar-dropdown uk-mega-menu uk-margin-remove uk-padding-remove uk-border-top"
                                                    uk-drop="delay-hide: 10; uk-animation-slide-top-small; duration: 300; boundary: header; boundary-align: true; pos: bottom-justify;">
                                                    <div class="uk-container">
                                                        <!--  -->
                                                        <div
                                                            class="uk-grid  uk-grid-divider uk-margin-medium uk-child-width-1-4@s uk-mega-list"
                                                            uk-grid
                                                            uk-scrollspy="cls: uk-animation-slide-top-small; delay: 300; repeat: false;">
                                                            <!--  -->
                                                            <div>
                                                               <div class="uk-padding-menu">
                                                                    <a href="{{ url('page/' . posttype_url($contact->uri)) }}" title=""
                                                                       class="uk-button uk-button-secondary uk-display-block uk-margin-bottom">Contact
                                                                        Us</a>
                                                                    <a href="{{url(geturl($career->uri))}}" title=""
                                                                       class="uk-button uk-button-white uk-display-block">Join
                                                                        Us</a>
                                                                </div>
                                                            </div>
                                                            <!--  -->
                                                            @if (getposts($row->id)->count() > 0)
                                                                <div>
                                                                    <div class="uk-padding-menu">
                                                                        <ul class="uk-list uk-margin-remove">
                                                                            @foreach (getposts($row->id) as $_row)
                                                                                <li>
                                                                                     @if($_row->external_link)
                                                                                     <a href="{{ $_row->external_link }}"
                                                                                       title="" target="_blank">{{ \Illuminate\Support\Str::ucfirst($_row->post_title) }}</a>
                                                                                       @else
                                                                                    <a href="{{ url(geturl($_row['uri'], $_row['page_key'])) }}"
                                                                                       title="">{{ \Illuminate\Support\Str::ucfirst($_row->post_title) }}</a>
                                                                                       @endif
                                                                                    
                                                                                </li>

                                                                                @continue($loop->iteration == 9)

                                                                                @if ($loop->iteration % 3 == 0)

                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <!--  -->
                                                                <!--  -->
                                                                <div>
                                                                    <div class="uk-padding-menu">
                                                                        <ul class="uk-list uk-margin-remove">
                                                                            @endif
                                                                            @endforeach
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            @endif


                                                        </div>
                                                        <!--  -->
                                                    </div>
                                                </div>
                                            </li>
                                        @endif
                                    @endforeach
                                @endif
                            <!-- end mega menu -->
                                @if ($navigations->count())
                                    @foreach ($navigations as $row)
                                        @if ($loop->iteration == 4)
                                            <li>
                                                <a href="{{ url('page/' . posttype_url($row->uri)) }}">{{ $row->post_type }}</a>
                                            </li>
                                        @endif
                                    @endforeach
                                @endif

                                @if ($navigations->count())
                                    @foreach ($navigations as $row)
                                        @if ($loop->iteration == 5)
                                            <li>
                                                <a href="{{ url('page/' . posttype_url($row->uri)) }}"
                                                   title="">{{$row->post_type}}<span
                                                        class="uk-margin-xsmall-left"
                                                        uk-icon="icon: chevron-down; ratio: .75;"></span></a>
                                                @if (getposts($row->id)->count() > 0)
                                                    <div uk-dropdown="pos: bottom-left; offset:0; delay-hide: 200;">
                                                        <ul class="uk-nav uk-dropdown-nav">
                                                            @foreach (getposts($row->id) as $_row)
                                                                <li>
                                                                 @if($_row->external_link)
                                                                     <a href="{{ $_row->external_link }}"
                                                                       title="" target="_blank">{{ \Illuminate\Support\Str::ucfirst($_row->post_title) }}</a>
                                                                       @else
                                                                    <a href="{{ url(geturl($_row['uri'], $_row['page_key'])) }}"
                                                                       title="">{{ \Illuminate\Support\Str::ucfirst($_row->post_title) }}</a>
                                                                       @endif
                                                                </li>

                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                @endif
                                            </li>
                                        @endif
                                    @endforeach
                                @endif

                                @if ($navigations->count())
                                    @foreach ($navigations as $row)
                                        @if ($loop->iteration == 6)
                                            <li>
                                                <a href="{{ url('page/' . posttype_url($row->uri)) }}">{{ $row->post_type }}</a>
                                            </li>
                                        @endif
                                    @endforeach
                                @endif
                            </ul>
                        </nav>
                        <!-- menu -->
                    </div>
                    <!-- mobile menu button -->
                    <button class="uk-navbar-toggle uk-hidden@m  " uk-toggle="target: #offcanvas-reveal"
                            uk-navbar-toggle-icon></button>
                    <!-- mobile menu button -->
                </div>
            </nav>
        </div>
        <div class="uk-clearfix"></div>
    </div>
    <!-- start mobile menu -->
    <div id="offcanvas-reveal" uk-offcanvas="mode: reveal; flip: true">
        <div class="uk-offcanvas-bar uk-padding-remove">
            <div class="uk-margin-remove bg-white uk-position-relative  ">
                <button class="uk-offcanvas-close uk-close-large" type="button" uk-close></button>
                <a class="uk-navbar-item uk-background-white uk-padding-small" href="{{url('/')}}">
                    <img src="{{asset('images/logo.png')}}" alt="{{$setting->site_name}}" class="uk-logo-light" width="80">
                </a>
            </div>
            <nav>
                <ul class="uk-navsidebar  uk-nav-parent-icon uk-nav-left uk-margin-auto-vertical"
                    uk-nav="multiple: false">
                    <li><a href="{{url('/')}}" title=""> Home</a>
                    </li>
                    @if ($navigations->count())
                        @foreach ($navigations as $row)
                            @if (getposts($row->id)->count() > 0)
                                <li class="uk-parent">
                                    <a href="#" title="">{{$row->post_type}}</a>
                                    <ul class="uknavsub">
                                       
                                            @foreach (getposts($row->id) as $_row)
                                                <li>
                                                    <a href="{{ url(geturl($_row['uri'], $_row['page_key'])) }}"
                                                       title="">{{ \Illuminate\Support\Str::ucfirst($_row->post_title) }}</a>
                                                </li>
                                            @endforeach
                                      

                                    </ul>
                                </li>
                                @else
                                  <li><a href="{{ url('page/' . posttype_url($row->uri)) }}"
                                       title="">{{ $row->post_type }}</a></li>
                            @endif
                        @endforeach
                    @endif
                  
                </ul>
            </nav>
            <nav class="uk-card-body">
                <ul class="uk-iconnav uk-flex-center">
                    <li><a class="instagramBtn smGlobalBtn" href="{{$setting->instagram_link}}" target="_blank"></a></li>
                    <li><a class="facebookBtn smGlobalBtn" href="{{$setting->facebook_link}}" target="_blank"></a></li>
                    <li><a class="twitterBtn smGlobalBtn" href="{{$setting->twitter_link}}" target="_blank"></a></li>
                    <li> <a class="linkedinBtn smGlobalBtn" href="{{$setting->linkedin_link}}" target="_blank"></a></li>
                </ul>
            </nav>
        </div>
    </div>
    <!-- end mobile menu -->
</header>
<!-- end header -->
