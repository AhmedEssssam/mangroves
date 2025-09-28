<nav class="navbar navbar-expand-lg " data-bs-theme="dark">
    <div class="container">
        <a class="navbar-brand" href="{{ url('') }}">
            <img src="{{ asset('images/logo.png') }}" alt="Mangrove Oases">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav m-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link @if (url()->current() == url('/')) active @endif"
                        aria-current="page" href="{{ url('/') }}">Home</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="javascript:;" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Services
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a class="dropdown-item" href="{{ url('/#services') }}">
                                <img src="{{ asset('icons/tree.png') }}" alt="Tree" width="14">
                                <span>
                                    Mangrove Restoration
                                </span>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{ url('/#services') }}">
                                <img src="{{ asset('icons/nurseries.png') }}" alt="Tree" width="14">
                                <span>
                                    Nurseries & Seedlings
                                </span>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{ url('/#services') }}">
                                <img src="{{ asset('icons/categories/cat_1.png') }}" alt="Tree" width="14">
                                <span>
                                    Softscape Design
                                </span>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{ url('/#services') }}">
                                <img src="{{ asset('icons/categories/cat_2.png') }}" alt="Tree" width="14">
                                <span>
                                    Smart Irrigation
                                </span>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{ url('/#services') }}">
                                <img src="{{ asset('icons/categories/cat_3.png') }}" alt="Tree" width="14">
                                <span>
                                    Architecture & Finishes
                                </span>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{ url('/#services') }}">
                                <img src="{{ asset('icons/categories/cat_4.png') }}" alt="Tree" width="14">
                                <span>
                                    Interior & Exterior Finishes
                                </span>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{ url('/#services') }}">
                                <img src="{{ asset('icons/categories/cat_5.png') }}" alt="Tree" width="14">
                                <span>
                                    Maintenance
                                </span>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{ url('/#services') }}">
                                <img src="{{ asset('icons/fitness.png') }}" alt="Tree" width="14">
                                <span>
                                    Play & Fitness
                                </span>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{ url('/#services') }}">
                                <img src="{{ asset('icons/env.png') }}" alt="Tree" width="14">
                                <span>
                                    Environmental Consulting
                                </span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/#projects') }}">Projects</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/#about') }}">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/#contact') }}">Contact</a>
                </li>


            </ul>
            <a href = "{{ url('/#contact') }}" class="btn btn-primary">
                <img src="{{ asset('icons/ellipse.png') }}" alt="ellipse" class = "me-2">
                Get Consultation
            </a>
        </div>
    </div>
</nav>
