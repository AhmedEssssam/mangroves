<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-3 footer-logo">
                <img src="{{ asset('images/logo.png') }}" alt="Mangrove Oases" class="logo">
                <p class="footer-about">Leading Saudi Arabia's environmental transformation through innovative mangrove
                    restoration, sustainable design, and comprehensive coastal solutions aligned with Vision 2030.</p>
            </div>

            <!-- Quick Links -->
            <div class="col-md-2 d-flex align-items-start justify-content-end quick-links">
                <div>

                    <h5>Quick Links</h5>
                    <ul class="list-unstyled pages">
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li><a href="{{ url('/#services') }}">Services</a></li>
                        <li><a href="{{ url('/#projects') }}">Projects</a></li>
                        <li><a href="{{ url('/#about') }}">About</a></li>
                        <li><a href="{{ url('/#contact') }}">Contact</a></li>
                        <li><a href="{{ url('/#technology') }}">Technology</a></li>
                    </ul>
                </div>
            </div>

            <!-- Downloads -->
            <div class="col-md-3 d-flex align-items-start justify-content-end downloads">
                <div>
                    <h5>Downloads</h5>
                    <ul class="list-unstyled pages">
                        <li><a href="{{ asset('docs/mangrove oases company profile.pdf') }}" target="_blank"><img
                                    src="{{ asset('icons/download.svg') }}" alt="download" class="me-1">
                                Company Profile</a></li>
                        <li><a href="#"><img src="{{ asset('icons/download.svg') }}" alt="download" class="me-1">
                                Nurseries Technical Brief</a></li>
                        <li><a href="#"><img src="{{ asset('icons/download.svg') }}" alt="download" class="me-1">
                                MRV Methodology</a></li>
                        <li><a href="#"><img src="{{ asset('icons/download.svg') }}" alt="download" class="me-1">
                                Case Studies Collection</a></li>
                    </ul>
                </div>
            </div>

            <!-- Connect -->
            <div class="col-md-4 connect d-flex align-items-start justify-content-end">
                <div class="">

                    <h5>Connect</h5>
                    <p class="mb-0">Social Media</p>
                    <div class="social-icons">
                        <a href="https://www.linkedin.com/company/mangroves-oases/" target="_blank"><img
                                src="{{ asset('images/linkedin.png') }}" alt=""></a>
                        {{-- <a href="https://www.facebook.com" target="_blank"><img
                                src="{{ asset('images/facebook.png') }}" alt=""></a> --}}
                        <a href="https://www.instagram.com" target="_blank"><img
                                src="{{ asset('images/instagram.png') }}" alt=""></a>
                        <a href="https://www.twitter.com" target="_blank"><img src="{{ asset('images/x.png') }}"
                                alt=""></a>
                        <a href="https://www.snapchat.com" target="_blank"><img
                                src="{{ asset('images/snapchat.png') }}" alt=""></a>
                        <a href="https://vt.tiktok.com/ZSDgXwGF4" target="_blank"><img
                                src="{{ asset('images/tiktok.png') }}" alt=""></a>
                    </div>
                    <p class="mb-0 info">Contact Info</p>
                    <div class="item d-flex align-items-center" style="margin-bottom: 9px">
                        <div class="icon">
                            <img src="{{ asset('icons/email.svg') }}" alt="email">
                        </div>
                        <div class="deat">
                            <p class="mb-0 value">Info@mangroves.sa</p>
                        </div>
                    </div>
                    <div class="item d-flex align-items-center">
                        <div class="icon">
                            <img src="{{ asset('icons/phone.svg') }}" alt="phone">
                        </div>
                        <div class="deat">
                            <p class="mb-0 value">0545170000</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="row copyright" style="margin-top: 16px">
            <div class="col-md-6" style="text-align: left">
                <p style="opacity: 0.7">&copy; 2025 Mangrove Oasis. All rights reserved.</p>
            </div>
            <div class="col-md-6 mb-0" style="text-align: right">

                <a href="{{ url('privacy-policy') }}" class="page">
                    Privacy Policy
                </a>
            </div>
        </div>
    </div>
</footer>
