<section class="uk-section bg-light uk-text-center"
         uk-scrollspy="cls: uk-animation-slide-top-small; target:div, h1, p, a;  delay: 20; repeat: false;">
    <div class="uk-container uk-container-xsmall"
         uk-scrollspy="cls: uk-animation-slide-top-small; target:div, h1, p, a;  delay: 20; repeat: false;">
        <h1 class="uk-h2 uk-heading-line uk-text-bold uk-margin-medium-bottom"><span>How can we help you?</span></h1>
        <div class="ug-grid" uk-grid>
            <div class="uk-width-1-2@s">
                @if ($navigations->count())
                    @foreach ($navigations as $row)
                        @if ($loop->iteration == 6)
                            <a href="{{ url('page/' . posttype_url($row->uri)) }}"
                               class="uk-button uk-button-primary uk-width-1-1">{{$row->post_type}}</a>
                        @endif
                    @endforeach
                @endif
            </div>
            
            <div class="uk-width-1-2@s">
                <a href="{{route('proposal-request')}}" class="uk-button uk-button-primary-dark uk-width-1-1">Request For Proposal</a>
            </div>
              
        </div>
    </div>
</section>
<!-- footer start -->
<footer class="uk-position-relative">
    <section class="uk-section-small bg-white" style="border-top:4px solid var(--secondary);"
             uk-scrollspy="cls: uk-animation-slide-top-small; target:div, h1, p, a;  delay: 20; repeat: false;">
        <div class="uk-container uk-container-large">
            <!--  -->
            <div class="uk-grid-large uk-margin-remove-bottom uk-flex-middle" uk-grid>
                <div class="uk-width-auto@m uk-margin-large-right">
                    <img src="{{asset('images/logo.png')}}" alt="">
                </div>
                <div class="uk-width-expand@m">
                    <ul class="uk-grid-medium  uk-footer-list  uk-text-center" uk-grid>
                        @foreach ($navigations as $row)
                            @if ($loop->iteration == 2)
                                @if (has_posts($row->id))
                                    @foreach (has_posts($row->id) as $_row)
                                        <li><a href="{{url(geturl($_row->uri))}}">{{$_row->post_title}}</a></li>
                                    @endforeach
                                @endif
                            @endif
                        @endforeach

                    </ul>
                </div>
                <div class="uk-width-auto@m">
                    <h1 class="uk-margin-small uk-h5 uk-text-bold  text-primary">In Association with</h1>
                    <a href="https://www.moore-global.com/" target="_blank"><img src="{{asset(env('PUBLIC_PATH'))}}/images/moore.png" alt="Moree"></a>
                </div>
            </div>
            <!--  -->
        </div>
    </section>
    <section class="uk-section bg-light">
        <div class="uk-container uk-container-large">
            <!--  -->
            <div class="uk-margin-remove-bottom tm-grid-expand uk-grid-large uk-margin-xlarge uk-grid" uk-grid=""
                 uk-scrollspy="cls: uk-animation-slide-left-small; target:div,  li, img, p, h1;  delay: 20; repeat: false;">
                <div class="uk-width-1-2@s  uk-width-1-2  uk-width-expand@m">
                    <ul class="uk-list-varticle">
                        <li><a href="{{url('/')}}"><span class="uk-margin-small-right text-secondary"
                                                      uk-icon="icon:minus; ratio: 1.2;"></span>Home</a></li>
                        @foreach($quick_links->take(3) as $value)
                        <li><a href="{{ url(geturl($value['uri'], $value['page_key'])) }}"><span class="uk-margin-small-right text-secondary"
                                                         uk-icon="icon:minus; ratio: 1.2;"></span>{{$value->post_title}}</a></li>
                        @endforeach

                    </ul>
                </div>
                <div class="uk-width-1-2@s  uk-width-1-2  uk-width-expand@m">
                    <ul class="uk-list-varticle">
                        @if ($navigations->count())
                            @foreach ($navigations as $row)
                                @if ($loop->iteration == 2)
                        <li><a href="{{ url('page/' . posttype_url($row->uri)) }}"><span class="uk-margin-small-right text-secondary"
                                                              uk-icon="icon:minus; ratio: 1.2;"></span>{{$row->post_type}}</a></li>
                                @elseif($loop->iteration==1)
                        <li><a href="{{ url('page/' . posttype_url($row->uri)) }}"><span class="uk-margin-small-right text-secondary"
                                                                uk-icon="icon:minus; ratio: 1.2;"></span>{{$row->post_type}}</a>
                        </li>
                                @endif
                            @endforeach
                        @endif
                            @foreach ($navigations as $row)
                                @if ($loop->iteration == 4)
                        <li><a href="{{ url('page/' . posttype_url($row->uri)) }}"><span class="uk-margin-small-right text-secondary"
                                                              uk-icon="icon:minus; ratio: 1.2;"></span>{{$row->post_type}}</a>
                            @endif
                            @endforeach
                             @foreach ($navigations as $row)
                                @if ($loop->iteration == 6)
                        <li><a href="{{ url('page/' . posttype_url($row->uri)) }}"><span class="uk-margin-small-right text-secondary"
                                                              uk-icon="icon:minus; ratio: 1.2;"></span>{{$row->post_type}}</a>
                            @endif
                            @endforeach
                        </li>
                        
                    </ul>
                </div>
                <div class="uk-width-1-2@s  uk-width-1-2  uk-width-expand@m">
                    <ul class="uk-list-varticle">
                        @foreach($quick_links->skip(3)->take(4) as $value)
                            <li><a href="{{ url(geturl($value['uri'], $value['page_key'])) }}"><span class="uk-margin-small-right text-secondary"
                                                                              uk-icon="icon:minus; ratio: 1.2;"></span>{{$value->post_title}}</a></li>
                        @endforeach
                           
                    </ul>
                </div>
                <div class="uk-width-1-3@s">
                    <ul class="uk-list-varticle">
                        <li class=" uk-flex"><i
                                class="fa fa-map-marker uk-margin-small-right uk-text-large"></i>{{$setting->location1}}
                        </li>
                        <li class=" uk-flex"><i
                                class="fa fa-phone uk-margin-small-right uk-text-large"></i> {{$setting->phone}}</li>
                        <li class=" uk-flex"><i
                                class="fa fa-envelope uk-margin-small-right uk-text-large"></i> {{$setting->email_primary}}
                        </li>
                    </ul>
                    <div id="social" class="uk-margin-medium">
                        <a class="instagramBtn smGlobalBtn" href="{{$setting->instagram_link}}" target="_blank"></a>
                        <a class="facebookBtn smGlobalBtn" href="{{$setting->facebook_link}}" target="_blank"></a>
                        <a class="twitterBtn smGlobalBtn" href="{{$setting->twitter_link}}" target="_blank"></a>
                         <a class="linkedinBtn smGlobalBtn" href="{{$setting->linkedin_link}}" target="_blank"></a>
                     
                    </div>
                </div>
            </div>
        </div>
        <!--  -->
        </div>
    </section>
    <div class="uk-text-center text-black uk-padding-small"
         uk-scrollspy="cls: uk-animation-slide-top-small; target:div, h1, p, a;  delay: 20; repeat: false;">
        <div class="uk-container uk-container-large">
            <div class="uk-grid-small uk-flex uk-flex-between uk-flex-middle " uk-grid>
                <!--  -->
                <div class="uk-text-small">{{$setting->copyright_text}}</div>
                <!--  -->
                <!--  -->
                 <div>
                    <a href="https://www.accaglobal.com/gb/en.html" target="_blank" uk-tooltip="title: Trainee Development - Gold">
                     <img src="{{asset(env('PUBLIC_PATH'))}}/images/acca.png" width="70">
                     </a>
                 </div>
                 <!--  -->
                <!--  -->
                <div class="uk-text-small">Made with <i class="fa fa-heart text-red"></i> by <a href=""
                                                                                                class="text-primary">Cyberlink
                        Pvt. Ltd.</a>
                </div>
                <!--  -->
            </div>
        </div>
</footer>
<!-- footer end -->
<!-- required javascript  -->
<a href="#" id="BackToTop" uk-scroll="" uk-totop class="show">
</a>
<script type="text/javascript" src="{{asset('js/app.js')}}"></script>
<script src="{{asset('js/youtube-video.js')}}"></script>
<script type='text/javascript'
        src='https://platform-api.sharethis.com/js/sharethis.js#property=606dac599269c20011a2a354&product=sop'
        async='async'></script>
</body>
</html>
