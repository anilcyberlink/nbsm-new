        <footer>
            <div class="wrap">
                <div class="footer-top">
                    <div>
                        <img
                            src="{{ asset('themes-assets/assets/img/logo-ondark.png')}}"
                            alt="{{ $setting->site_name }}"
                            style="width:150px;height:auto;display:block;margin:0 0 12px 0;"
                        />
                        <h5 style="margin:0;">{{ $setting->site_name }}</h5>
                    </div>
                    <div>
                        <h5>Company</h5>
                        <ul>
                            @foreach ($footeer as $nav)
                                <li><a href="{{ url('page/' . posttype_url($nav->uri)) }}">{{ $nav->post_type }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                    <div>
                        <h5>Services</h5>
                        <ul>
                            <li><a href="services.php">Audit &amp; Assurance</a></li>
                            <li><a href="services.php">Tax</a></li>
                            <li><a href="services.php">Deal Advisory</a></li>
                            <li><a href="services.php">Risk &amp; Consulting</a></li>
                            <li><a href="global.php">Accounting &amp; Outsourcing</a></li>
                            <li><a href="services.php">Technology &amp; Digital</a></li>
                        </ul>
                    </div>
                    <div>
                        <h5>Global</h5>
                        <ul>
                            <li><a href="global.php">NBSM International</a></li>
                            <li><a href="global.php">Moore Global</a></li>
                            <li><a href="nepal.php">Doing Business in Nepal</a></li>
                            <li><a href="global.php">Global Outsourcing</a></li>
                        </ul>
                    </div>
                    <div>
                        <h5>Contact</h5>
                        <ul>
                            <li><a >{{ $setting->email_primary }}</a></li>
                            <li><a >{{ $setting->phone }}</a></li>
                            <li><a >{{ $setting->location1 }}</a></li>
                            <li><a >{{ $setting->address2 }}</a></li>
                        </ul>
                    </div>
                </div>
                <div class="footer-bottom">
                    <span>{{ $setting->copyright_text }}</span>
                    <span></span>
                </div>
            </div>
        </footer>

        <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
        <script src="{{ asset('themes-assets/assets/main.js') }}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    </body>

</html>
