@extends('layout.app')

@section('content')
    <section class="hero">
        <div class="container">
            <div class="row">
                <div class="col-md-12  d-lg-none d-md-none d-sm-block d-xs-block" style="margin-top: 18px">
                    <img src="{{ asset('images/hero.svg') }}" alt="hero" class="w-100">
                </div>
                <div class="col-md-6 content">
                    <span class="badge-success rounded-pill"><img src="{{ asset('icons/ellipse.png') }}" alt="ellipse"
                            class = "me-2">Aligned with Saudi Vision 2030</span>
                    <h3>Complete Environmental & Softscape Solutions for Saudi Arabia's Green Future</h3>
                    <p class="lead text-secondary">Leading mangrove restoration, coastal resilience and integrated softscape
                        services — aligned with Saudi Vision 2030 & the Saudi Green Initiative.</p>
                    <ul>
                        <li class="text-secondary">Proven nursery survival >80% (target)</li>
                        <li class="text-secondary">Seawater-compatible propagation</li>
                        <li class="text-secondary">Measurable outcomes: coastal protection, fisheries recovery, carbon
                            credits</li>
                        <li class="text-secondary">4IR tech stack: drones, AI, IoT sensors, GHG monitoring</li>
                    </ul>
                    <div class="d-flex align-items-center">
                        <button class="btn btn-lg btn-primary">
                            Get Free Consultation
                            <img src="{{ asset('icons/arrow.png') }}" alt="arrow" class = "ms-1">
                        </button>
                        <button class="btn btn-lg btn-dark">
                            Explore Our Services
                            <img src="{{ asset('icons/arrow_white.png') }}" alt="arrow" class = "ms-1">

                        </button>
                    </div>
                </div>
                <div class="col-md-6 hero-bg">
                    <!-- Image -->
                </div>
            </div>
        </div>
    </section>
    <section class="categories">
        <div class="container">
            <div class="text-center mb-4">
                <h3>Our Services</h3>
            </div>
            <!-- Swiper Container -->
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide service-card">
                        <div class="icon">
                            <img src="{{ asset('icons/categories/cat_1.png') }}" alt="Softscape" />
                        </div>
                        <p class="mb-0">Softscape Design</p>
                    </div>
                    <div class="swiper-slide service-card">
                        <div class="icon">

                            <img src="{{ asset('icons/categories/cat_2.png') }}" alt="Irrigation" />
                        </div>
                        <p class="mb-0">Smart Irrigation</p>
                    </div>
                    <div class="swiper-slide service-card">
                        <div class="icon">

                            <img src="{{ asset('icons/categories/cat_3.png') }}" alt="Architecture" />
                        </div>
                        <p class="mb-0">Architecture & Finishes</p>
                    </div>
                    <div class="swiper-slide service-card">
                        <div class="icon">

                            <img src="{{ asset('icons/categories/cat_4.png') }}" alt="Interior" />
                        </div>
                        <p class="mb-0">Interior & Exterior Finishes</p>
                    </div>
                    <div class="swiper-slide service-card">
                        <div class="icon">

                            <img src="{{ asset('icons/categories/cat_5.png') }}" alt="Maintenance" />
                        </div>
                        <p class="mb-0">Maintenance</p>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <section class="stats">
        <div class="container">
            <div class="text-center">

                <span class="badge-success rounded-pill"><img src="{{ asset('icons/ellipse.png') }}" alt="ellipse"
                        class = "me-2">Saudi Green Initiative</span>
                <h3 class="mt-4 stat-heading">Partnering with Saudi Arabia's Environmental Vision</h3>
                <div class="row text-center">
                    <div class="col-md-3">
                        <div class="p-4 stat-item ">
                            <div class="icon">

                                <img src="{{ asset('icons/tree.png') }}" alt="Tree" width="32">
                            </div>
                            <div class="deat">

                                <h4 class="mb-0">600M+</h4>
                                <small class="">Trees by 2030</small>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="p-4 stat-item ">
                            <div class="icon">

                                <img src="{{ asset('icons/stats.png') }}" alt="Mangrove" width="32">
                            </div>
                            <div class="deat">
                                <h4 class="mb-0">100M</h4>
                                <small class="">Mangroves Target</small>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="p-4 stat-item  ">
                            <div class="icon">

                                <img src="{{ asset('icons/protection.png') }}" alt="Flood" width="32">
                            </div>
                            <div class="deat">
                                <h4 class="mb-0">855B$</h4>
                                <small class="">Global Flood Protection Value</small>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="p-4 stat-item  ">
                            <div class="icon">

                                <img src="{{ asset('icons/layers.png') }}" alt="Protection" width="32">
                            </div>
                            <div class="deat">
                                <h4 class="mb-0">30%</h4>
                                <small class="">Land & Sea Protected</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="about">
        <div class="container">
            <img src="{{ asset('images/about.png') }}" alt="about" class="img-about">
            <h3 class="fw-bold">About Mangrove Oasis</h3>
            <p class="lead">
                The company was founded with the aim of contributing to the goals of Saudi Vision 2030 and the Green Saudi
                Initiative. The Kingdom of Saudi Arabia targets planting over 100 million mangrove trees in the coming years
                as part of Vision 2030 goals. Mangrove trees are distinguished by their ability to absorb and store carbon
                from the atmosphere deep in their soil for decades, with the major advantage of being able to store 10 times
                the amount of carbon..
            </p>
            <div class="d-flex align-items-center justify-content-center">
                <button class="btn btn-lg btn-primary">
                    Download Our Profile
                    <img src="{{ asset('icons/arrow.png') }}" alt="arrow" class = "ms-1">
                </button>
                <button class="btn btn-lg btn-dark">
                    Get Free Consultation
                    <img src="{{ asset('icons/arrow_white.png') }}" alt="arrow" class = "ms-1">

                </button>
            </div>
        </div>
    </section>
    <section class="services">
        <div class="container">
            <div class="text-center">
                <h3 class="service-heading">9 Integrated Services for Complete Environmental Solutions</h3>
                <p class="lead">End-to-end service stack — from seedlings to urban design and carbon verification.</p>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="service-card">
                        <div class="d-flex align-items-start justify-content-between header">
                            <div class="icon">
                                <img src="{{ asset('icons/nurseries.png') }}" alt="Softscape" />
                            </div>
                            <span class="badge-success rounded-pill"><img src="{{ asset('icons/ellipse.png') }}"
                                    alt="ellipse" class = "me-2">Saudi Vision 2030</span>
                        </div>
                        <div class="deat">
                            <h4>Nurseries & Seedlings</h4>
                            <p class="lead mb-0">
                                Advanced propagation facilities producing climate-
                                resilient native seedlings with >80% survival rates
                                using seawater-compatible techniques and controlled environment systems.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="service-card">
                        <div class="d-flex align-items-start justify-content-between header">
                            <div class="icon">
                                <img src="{{ asset('icons/tree.png') }}" alt="tree" />
                            </div>
                            <span class="badge-success rounded-pill"><img src="{{ asset('icons/ellipse.png') }}"
                                    alt="ellipse" class = "me-2">Saudi Vision 2030</span>
                        </div>
                        <div class="deat">
                            <h4>Mangrove Restoration</h4>
                            <p class="lead mb-0">
                                Comprehensive mangrove ecosystem restoration
                                including site assessment, species selection, planting, and long-term monitoring for coastal
                                protection and biodiversity recovery.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="service-card">
                        <div class="d-flex align-items-start justify-content-between header">
                            <div class="icon">
                                <img src="{{ asset('icons/categories/cat_1.png') }}" alt="Softscape" />
                            </div>
                            <span class="badge-success rounded-pill"><img src="{{ asset('icons/ellipse.png') }}"
                                    alt="ellipse" class = "me-2">Saudi Vision 2030</span>
                        </div>
                        <div class="deat">
                            <h4>Softscape & Garden Design</h4>
                            <p class="lead mb-0">
                                Sustainable landscape architecture integrating native flora, water-efficient design
                                principles, and aesthetic excellence for residential, commercial, and public spaces.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="service-card">
                        <div class="d-flex align-items-start justify-content-between header">
                            <div class="icon">
                                <img src="{{ asset('icons/categories/cat_2.png') }}" alt="Softscape" />
                            </div>
                            <span class="badge-success rounded-pill"><img src="{{ asset('icons/ellipse.png') }}"
                                    alt="ellipse" class = "me-2">Saudi Vision 2030</span>
                        </div>
                        <div class="deat">
                            <h4>Irrigation Systems</h4>
                            <p class="lead mb-0">
                                Smart irrigation solutions featuring IoT sensors,
                                automated controls, and water recycling systems
                                optimized for arid climate conditions and resource
                                conservation.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="service-card">
                        <div class="d-flex align-items-start justify-content-between header">
                            <div class="icon">
                                <img src="{{ asset('icons/categories/cat_3.png') }}" alt="tree" />
                            </div>
                            <span class="badge-success rounded-pill"><img src="{{ asset('icons/ellipse.png') }}"
                                    alt="ellipse" class = "me-2">Saudi Vision 2030</span>
                        </div>
                        <div class="deat">
                            <h4>Architectural & Urban Design</h4>
                            <p class="lead mb-0">
                                Integrated urban planning and architectural services incorporating green infrastructure,
                                climate adaptation, and sustainable development principles aligned with Vision 2030.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="service-card">
                        <div class="d-flex align-items-start justify-content-between header">
                            <div class="icon">
                                <img src="{{ asset('icons/categories/cat_4.png') }}" alt="Softscape" />
                            </div>
                            <span class="badge-success rounded-pill"><img src="{{ asset('icons/ellipse.png') }}"
                                    alt="ellipse" class = "me-2">Saudi Vision 2030</span>
                        </div>
                        <div class="deat">
                            <h4>Interior & Exterior Finishes</h4>
                            <p class="lead mb-0">
                                Eco-friendly finishing solutions using sustainable
                                materials, energy-efficient systems, and biophilic
                                design elements for enhanced indoor and outdoor
                                environments.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="service-card">
                        <div class="d-flex align-items-start justify-content-between header">
                            <div class="icon">
                                <img src="{{ asset('icons/categories/cat_5.png') }}" alt="Softscape" />
                            </div>
                            <span class="badge-success rounded-pill"><img src="{{ asset('icons/ellipse.png') }}"
                                    alt="ellipse" class = "me-2">Saudi Vision 2030</span>
                        </div>
                        <div class="deat">
                            <h4>Garden Maintenance</h4>
                            <p class="lead mb-0">
                                Professional maintenance services including pruning, pest management, soil health
                                monitoring, and seasonal care programs to ensure long-term
                                landscape sustainability.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="service-card">
                        <div class="d-flex align-items-start justify-content-between header">
                            <div class="icon">
                                <img src="{{ asset('icons/fitness.png') }}" alt="fitness" />
                            </div>
                            <span class="badge-success rounded-pill"><img src="{{ asset('icons/ellipse.png') }}"
                                    alt="ellipse" class = "me-2">Saudi Vision 2030</span>
                        </div>
                        <div class="deat">
                            <h4>Fitness & Play Equipment</h4>
                            <p class="lead mb-0">
                                Installation of outdoor fitness and recreational
                                equipment designed for harsh climate conditions,
                                promoting community health and active lifestyles in
                                green spaces.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="service-card">
                        <div class="d-flex align-items-start justify-content-between header">
                            <div class="icon">
                                <img src="{{ asset('icons/env.png') }}" alt="Softscape" />
                            </div>
                            <span class="badge-success rounded-pill"><img src="{{ asset('icons/ellipse.png') }}"
                                    alt="ellipse" class = "me-2">Saudi Vision 2030</span>
                        </div>
                        <div class="deat">
                            <h4>Environmental Consulting</h4>
                            <p class="lead mb-0">
                                Expert advisory services for environmental impact
                                assessment, carbon footprint analysis, biodiversity
                                conservation planning, and regulatory compliance
                                support.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="restoration">
        <div class="container">
            <div class="d-flex justify-content-center">
                <div class="text-center">

                    <h3>Mangrove Restoration & Coastal Rehabilitation</h3>
                    <p>Our proven methodology ensures successful mangrove establishment and long-term ecosystem health.</p>
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="proccess-tab" data-bs-toggle="tab"
                                data-bs-target="#proccess" type="button" role="tab" aria-controls="proccess"
                                aria-selected="true"
                                onclick="changeBackgroundImage('images/restoration_1.png','images/restoration_sm_1.png')">Process
                                &
                                Approach</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="nurseries-tab" data-bs-toggle="tab" data-bs-target="#nurseries"
                                type="button" role="tab" aria-controls="nurseries" aria-selected="false"
                                onclick="changeBackgroundImage('images/restoration_2.png','images/restoration_sm_2.png')">Nurseries
                                &
                                Seedlings</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="impact-tab" data-bs-toggle="tab" data-bs-target="#impact"
                                type="button" role="tab" aria-controls="impact" aria-selected="false"
                                onclick="changeBackgroundImage('images/restoration_3.png','images/restoration_sm_3.png')">Impact
                                &
                                Benefits</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="mrv-tab" data-bs-toggle="tab" data-bs-target="#mrv"
                                type="button" role="tab" aria-controls="mrv" aria-selected="false"
                                onclick="changeBackgroundImage('images/restoration_4.png','images/restoration_sm_4.png')">MRV
                                &
                                Credits</button>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="proccess" role="tabpanel" aria-labelledby="proccess-tab">
                    <h4>Systematic Mangrove Restoration Process</h4>
                    <p class="lead mb-5">Our proven methodology ensures successful mangrove establishment and long-term
                        ecosystem health.</p>
                    <p class="point"><span class="me-1">•</span>Site assessment and environmental baseline studies</p>
                    <p class="point"><span class="me-1">•</span>Species selection based on salinity tolerance and local
                        conditions</p>
                    <p class="point"><span class="me-1">•</span>Nursery propagation using advanced seawater-compatible
                        techniques</p>
                    <p class="point"><span class="me-1">•</span>Strategic planting during optimal tidal and seasonal
                        windows</p>
                    <p class="point"><span class="me-1">•</span>Continuous monitoring and adaptive management protocols
                    </p>
                    <p class="point"><span class="me-1">•</span>Community engagement and capacity building programs</p>
                </div>
                <div class="tab-pane fade" id="nurseries" role="tabpanel" aria-labelledby="nurseries-tab">
                    <h4>Advanced Propagation Facilities</h4>
                    <p class="lead mb-5">State-of-the-art nurseries producing climate-resilient mangrove seedlings with
                        industry-leading survival rates.</p>
                    <p class="point"><span class="me-1">•</span>Controlled environment propagation systems</p>
                    <p class="point"><span class="me-1">•</span>Seawater irrigation and salinity management</p>
                    <p class="point"><span class="me-1">•</span>Disease prevention and quality control protocols</p>
                    <p class="point"><span class="me-1">•</span>Genetic diversity preservation techniques</p>
                    <p class="point"><span class="me-1">•</span>Seedling hardening and acclimatization processes</p>
                    <p class="point"><span class="me-1">•</span>Supply chain logistics for timely delivery</p>
                </div>
                <div class="tab-pane fade" id="impact" role="tabpanel" aria-labelledby="impact-tab">
                    <h4>Measurable Environmental & Economic Returns</h4>
                    <p class="lead mb-5">Quantifiable benefits across environmental, social, and economic dimensions.</p>
                    <p class="point"><span class="me-1">•</span>Coastal protection worth $855B globally in flood damage
                        prevention</p>
                    <p class="point"><span class="me-1">•</span>Carbon sequestration rates 3-5x higher than terrestrial
                        forests</p>
                    <p class="point"><span class="me-1">•</span>Fisheries productivity increases of 25-50% in restored
                        areas</p>
                    <p class="point"><span class="me-1">•</span>Biodiversity recovery with 200+ species supported per
                        hectare</p>
                    <p class="point"><span class="me-1">•</span>Job creation in coastal communities through green
                        employment</p>
                    <p class="point"><span class="me-1">•</span>Tourism revenue generation from eco-tourism activities
                    </p>
                </div>
                <div class="tab-pane fade" id="mrv" role="tabpanel" aria-labelledby="mrv-tab">
                    <h4>Monitoring, Reporting & Verification</h4>
                    <p class="lead mb-5">Comprehensive MRV systems enabling carbon credit generation and impact
                        verification.</p>
                    <p class="point"><span class="me-1">•</span>Satellite monitoring and drone-based assessments</p>
                    <p class="point"><span class="me-1">•</span>IoT sensor networks for real-time environmental data
                    </p>
                    <p class="point"><span class="me-1">•</span>Carbon stock measurement and modeling protocols</p>
                    <p class="point"><span class="me-1">•</span>Third-party verification and certification processes
                    </p>
                    <p class="point"><span class="me-1">•</span>Digital twin technology for predictive analysis</p>
                    <p class="point"><span class="me-1">•</span>Blockchain-verified carbon credit tokenization</p>
                </div>
            </div>
        </div>
        <div class="d-sm-block d-xs-block d-lg-none d-md-none">
            <img src="{{ asset('images/restoration_sm_1.png') }}" alt="" class="w-100" id="restoration_img">
        </div>
    </section>
    <section class="why-mangrove">
        <div class="container">
            <div class="text-center">
                <h3>Why Mangroves & Nature-based Solutions Matter</h3>
                <p class="lead">
                    Mangroves deliver exceptional returns across environmental, economic, and social
                    dimensions, making them critical infrastructure for sustainable coastal development.
                </p>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="box">
                        <img src="{{ asset('images/carbon.png') }}" alt="carbon">
                        <h4 class="text-center heading">3 - 5 X</h4>
                        <h4 class="text-center title">Carbon Powerhouse</h4>
                        <p class="lead mb-0">
                            Higher carbon sequestration rates than terrestrial forests, with potential for verified carbon
                            credits
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="box">
                        <img src="{{ asset('images/coastal.png') }}" alt="carbon">
                        <h4 class="text-center heading">$855B</h4>
                        <h4 class="text-center title">Coastal Safety</h4>
                        <p class="lead mb-0">
                            Global value of flood protection services provided by coastal ecosystems annually
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="box">
                        <img src="{{ asset('images/hectare.png') }}" alt="carbon">
                        <h4 class="text-center heading">$200K+</h4>
                        <h4 class="text-center title">Value per Hectare</h4>
                        <p class="lead mb-0">
                            Economic value per hectare from ecosystem services including fisheries and tourism
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="box">
                        <img src="{{ asset('images/biodiversity.png') }}" alt="carbon">
                        <h4 class="text-center heading">200+</h4>
                        <h4 class="text-center title">Biodiversity</h4>
                        <p class="lead mb-0">
                            Species supported per hectare in healthy mangrove ecosystems, including endangered species
                        </p>
                    </div>
                </div>

            </div>
            <div class="measurable">
                <h4>Measurable Environmental Impact</h4>
                <p class="point"><span class="me-1">•</span>Coastal protection reducing wave energy by up to 70%</p>
                <p class="point"><span class="me-1">•</span>Fisheries productivity increases of 25-50% in restored
                    areas</p>
                <p class="point"><span class="me-1">•</span>Water quality improvement through natural filtration</p>
                <p class="point"><span class="me-1">•</span>Job creation in coastal communities through green
                    employment</p>
            </div>
        </div>
    </section>
    <section class="projects">
        <div class="container">
            <div class="text-center">
                <h3>Projects & Impact Stories</h3>
                <p class="lead">
                    Explore our portfolio of successful environmental restoration and sustainable development projects
                    across Saudi Arabia, each delivering measurable environmental and economic returns.
                </p>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="project-card">
                        <div class="img"></div>
                        <div class="content">
                            <h5 class="heading">NEOM Sustainable Landscape Design</h5>
                            <div class="d-flex align-items-center info">
                                <div class="location d-flex align-items-center me-3">
                                    <img src="{{ asset('icons/location.svg') }}" alt="location" class="me-1">
                                    <p class="mb-0">NEOM, Tabuk Province</p>
                                </div>
                                <div class="date d-flex align-items-center">
                                    <img src="{{ asset('icons/date.svg') }}" alt="date" class="me-1">
                                    <p class="mb-0">2024</p>

                                </div>
                            </div>
                            <div class="item">
                                <h6 class="heading">Challenge</h6>
                                <p class="lead mb-0">
                                    Creating sustainable urban landscapes in extreme desert conditions while maintaining
                                    aesthetic appeal.
                                </p>
                            </div>
                            <div class="item">
                                <h6 class="heading">Solution</h6>
                                <p class="lead mb-0">
                                    Integrated softscape design with smart irrigation, native plant selection, and
                                    microclimate management.
                                </p>
                            </div>
                            <div class="item">
                                <h6 class="heading">Outcome</h6>
                                <p class="lead mb-0">
                                    Award-winning sustainable landscape supporting local biodiversity while reducing water
                                    consumption by 60%.
                                </p>
                            </div>
                            <div class="keys">
                                <h6 class="heading">
                                    <img src="{{ asset('icons/metrics.svg') }}" alt="Key Metrics">
                                    Key Metrics
                                </h6>
                                <p class="point"><span class="me-1">•</span>60% water reduction</p>
                                <p class="point"><span class="me-1">•</span>200+ native species</p>
                                <p class="point"><span class="me-1">•</span>95% plant survival</p>
                                <p class="point"><span class="me-1">•</span>30% cooling effect</p>
                            </div>
                            <div class="badges">
                                <span class="item">Urban Design</span>
                                <span class="item">Smart Irrigation</span>
                                <span class="item">Native Species</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="project-card">
                        <div class="img"></div>
                        <div class="content">
                            <h5 class="heading">NEOM Sustainable Landscape Design</h5>
                            <div class="d-flex align-items-center info">
                                <div class="location d-flex align-items-center me-3">
                                    <img src="{{ asset('icons/location.svg') }}" alt="location" class="me-1">
                                    <p class="mb-0">NEOM, Tabuk Province</p>
                                </div>
                                <div class="date d-flex align-items-center">
                                    <img src="{{ asset('icons/date.svg') }}" alt="date" class="me-1">
                                    <p class="mb-0">2024</p>

                                </div>
                            </div>
                            <div class="item">
                                <h6 class="heading">Challenge</h6>
                                <p class="lead mb-0">
                                    Creating sustainable urban landscapes in extreme desert conditions while maintaining
                                    aesthetic appeal.
                                </p>
                            </div>
                            <div class="item">
                                <h6 class="heading">Solution</h6>
                                <p class="lead mb-0">
                                    Integrated softscape design with smart irrigation, native plant selection, and
                                    microclimate management.
                                </p>
                            </div>
                            <div class="item">
                                <h6 class="heading">Outcome</h6>
                                <p class="lead mb-0">
                                    Award-winning sustainable landscape supporting local biodiversity while reducing water
                                    consumption by 60%.
                                </p>
                            </div>
                            <div class="keys">
                                <h6 class="heading">
                                    <img src="{{ asset('icons/metrics.svg') }}" alt="Key Metrics">
                                    Key Metrics
                                </h6>
                                <p class="point"><span class="me-1">•</span>60% water reduction</p>
                                <p class="point"><span class="me-1">•</span>200+ native species</p>
                                <p class="point"><span class="me-1">•</span>95% plant survival</p>
                                <p class="point"><span class="me-1">•</span>30% cooling effect</p>
                            </div>
                            <div class="badges">
                                <span class="item">Urban Design</span>
                                <span class="item">Smart Irrigation</span>
                                <span class="item">Native Species</span>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="action d-flex justify-content-center">
                <button class="btn btn-lg btn-dark">
                    See More
                    <img src="{{ asset('icons/arrow-down.svg') }}" alt="arrow" class = "ms-1">

                </button>
            </div>
        </div>
    </section>
    <section class="technology">
        <div class="container">
            <div class="text-center">

                <h3>4IR Technology & Sustainable Methods</h3>
                <p class="lead desc">
                    Leveraging cutting-edge Fourth Industrial Revolution technologies to deliver measurable, scalable
                    environmental solutions with unprecedented precision and efficiency.
                </p>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="item d-flex align-items-start">
                        <div class="icon">
                            <img src="{{ asset('images/done.png') }}" alt="done">
                        </div>
                        <div class="deat">
                            <h5 class="heading">Drone & Satellite Monitoring</h5>
                            <p class="lead mb-0">
                                Advanced aerial surveillance for real-time ecosystem health assessment, growth tracking, and
                                early intervention detection.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="item d-flex align-items-start">
                        <div class="icon">
                            <img src="{{ asset('images/ai.png') }}" alt="ai">
                        </div>
                        <div class="deat">
                            <h5 class="heading">AI-Powered Analytics</h5>
                            <p class="lead mb-0">
                                Machine learning algorithms analyze environmental data to predict outcomes, optimize
                                interventions, and maximize success rates.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="item d-flex align-items-start">
                        <div class="icon">
                            <img src="{{ asset('images/sensor.png') }}" alt="sensor">
                        </div>
                        <div class="deat">
                            <h5 class="heading">IoT Sensor Networks</h5>
                            <p class="lead mb-0">
                                Smart irrigation systems with soil moisture, salinity, and weather sensors enabling
                                precision water management and resource optimization.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="item d-flex align-items-start">
                        <div class="icon">
                            <img src="{{ asset('images/digital.png') }}" alt="digital">
                        </div>
                        <div class="deat">
                            <h5 class="heading">Digital Twin Planning</h5>
                            <p class="lead mb-0">
                                Virtual modeling and simulation capabilities for project planning, impact assessment, and
                                long-term ecosystem management strategies.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="stack">
            <div class="container">

                <div class="content">
                    <h4>Integrated Technology Stack</h4>
                    <p class="lead">
                        Our comprehensive technology platform combines multiple data sources and analytical tools to provide
                        unprecedented insight into ecosystem health and restoration success..
                    </p>
                    <p class="point"><span class="me-1">•</span>Coastal protection reducing wave energy by up to 70%
                    </p>
                    <p class="point"><span class="me-1">•</span>Fisheries productivity increases of 25-50% in restored
                        areas</p>
                    <p class="point"><span class="me-1">•</span>Water quality improvement through natural filtration
                    </p>
                    <p class="point"><span class="me-1">•</span>Job creation in coastal communities through green
                        employment</p>
                    <button class="btn btn-lg btn-primary">
                        Download Our Profile
                        <img src="{{ asset('icons/arrow.png') }}" alt="arrow" class = "ms-1">
                    </button>
                </div>
            </div>
            <div class="d-sm-block d-xs-block d-lg-none d-md-none">
                <img src="{{ asset('images/measurable_stack_sm.png') }}" alt="" class="w-100"
                    id="restoration_img">
            </div>
        </div>
    </section>
    <section class="contact">
        <div class="container">
            <div class="text-center">

                <h3>Ready to Transform Your Coastal Environment?</h3>
                <p class="lead">
                    Partner with us to create sustainable, impactful environmental solutions aligned with Saudi Arabia's
                    green
                    future.
                </p>
            </div>
            <div class="contact-card">
                <form>
                    <div class="row" style="margin-bottom: 38px">
                        <div class="col-md-6">
                            <div class="item">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control input-lg" id="name"
                                    placeholder="Your Name">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="item">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control input-lg" id="name"
                                    placeholder="example@gmail.com">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="item" style="margin-bottom: 38px">
                                <label for="project_type" class="form-label">Project Type</label>
                                <select name="project_type" id="project_type" class="form-control">
                                    <option value="Mangrove Restoration">Mangrove Restoration</option>
                                    <option value="Softscape Design">Softscape Design</option>
                                    <option value="Environmental Consulting">Environmental Consulting</option>
                                    <option value="Technology Solutions">Technology Solutions</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="item" style="margin-bottom: 32px">
                                <label for="message" class="form-label">Message</label>
                                <textarea name="message" id="message" cols="30" rows="6" class="form-control"
                                    placeholder="Tell Us about your Project.."></textarea>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-lg btn-primary d-block w-100">
                        Send Message
                        <img src="{{ asset('icons/arrow.png') }}" alt="arrow" class = "ms-1">
                    </button>
                </form>
            </div>
            <div class="get-touch">
                <div class="get-touch-card">
                    <div class="row align-items-end" style="margin-bottom: 32px">
                        <div class="col-lg-4">
                            <h3 class="mb-0">Get In Touch</h3>
                        </div>
                        <div class="col-lg-8">
                            <div class="divider"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="item d-flex align-items-center" style="margin-bottom: 21px">
                                <div class="icon">
                                    <img src="{{ asset('icons/contact_location.svg') }}" alt="location">
                                </div>
                                <div class="deat">
                                    <p class="mb-0 title">Location</p>
                                    <p class="mb-0 value">36D, Al Shulah, Dammam, Saudi Arabia</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="item d-flex align-items-center" style="margin-bottom: 21px">
                                <div class="icon">
                                    <img src="{{ asset('icons/phone.svg') }}" alt="phone">
                                </div>
                                <div class="deat">
                                    <p class="mb-0 title">Phone</p>
                                    <p class="mb-0 value">0545170000</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="item d-flex align-items-center">
                                <div class="icon">
                                    <img src="{{ asset('icons/email.svg') }}" alt="email">
                                </div>
                                <div class="deat">
                                    <p class="mb-0 title">Email</p>
                                    <p class="mb-0 value">Info@mangroves.sa</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('js')
    <script>
        function changeBackgroundImage(imagePath, imageMobilePath) {
            if (window.outerWidth > 991) {

                document.querySelector('.restoration').style.background =
                    `url('${imagePath}')`;
                document.querySelector('.restoration').style.backgroundSize = 'cover';
            } else {

                document.querySelector('#restoration_img').src = imageMobilePath;

            }
        }
    </script>
@endpush
