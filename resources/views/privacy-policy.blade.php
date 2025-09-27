@extends('layout.app')

@section('content')
    <section class="privacy-policy">
        <div class="container">
            <div class="text-center">
                <span class="badge-success rounded-pill"><img src="{{ asset('icons/ellipse.png') }}" alt="ellipse"
                        class = "me-2">Our Privacy</span>
                <h3>Privacy Policy</h3>
            </div>
            <div class="content">

                <p>
                    Last Updated: January 1, 2025
                    Mangrove Oasis (“we,” “our,” “us”) is committed to protecting your privacy and ensuring that your
                    personal information is handled in a safe and responsible manner. This Privacy Policy explains how we
                    collect, use, disclose, and safeguard your information when you visit our website [www.mangroves.sa] and
                    when you engage with our services.
                    By using our website or services, you consent to the practices described in this policy.
                </p>
                <h6 class="fw-bold">1. Information We Collect</h6>
                <p class="mb-0">We may collect the following types of information:</p>
                <ul>
                    <li>
                        Personal Information: Name, email address, phone number, organization, project details, or other
                        information you provide when contacting us, requesting a consultation, or filling out forms.
                    </li>
                    <li>
                        Technical Information: IP address, browser type, device identifiers, operating system, and browsing
                        behavior through cookies or analytics tools.
                    </li>
                    <li>
                        Project Information: Details you provide about your environmental or landscaping project, including
                        location and service requirements.
                    </li>
                </ul>
                <h6>2. How We Use Your Information</h6>
                <p class="mb-0">We use the information we collect to:</p>
                <ul>
                    <li>Provide and improve our services, including consultations, project execution, and ongoing support.
                    </li>
                    <li>
                        Communicate with you regarding inquiries, proposals, updates, and marketing (where permitted by
                        law).
                    </li>
                    <li>Analyze website performance and user engagement to enhance user experience.</li>
                    <li>Ensure compliance with legal, regulatory, and environmental reporting requirements.</li>
                    <li>Support research, monitoring, and reporting on environmental outcomes (e.g., carbon credits,
                        ecosystem
                        services).</li>
                </ul>
                <h6>3. Sharing of Information</h6>
                <p class="mb-0">We do not sell or rent your personal data. We may share your information only in the
                    following
                    circumstances:</p>
                <ul>
                    <li>
                        With Service Providers: Trusted partners who assist us in delivering services (e.g., IT providers,
                        consultants).
                    </li>
                    <li>
                        With Authorities: Where required to comply with laws, regulations, or government requests within the
                        Kingdom of Saudi Arabia.
                    </li>
                    <li>
                        For Business Operations: In connection with mergers, acquisitions, or restructuring.
                    </li>
                    <li>
                        With Your Consent: When you expressly authorize us to share information.
                    </li>
                </ul>
                <h6>4. Cookies & Tracking Technologies</h6>
                <p>
                    Our website uses cookies and similar technologies to improve functionality, analyze traffic, and
                    personalize
                    content. You may disable cookies in your browser settings, but some features of the website may not
                    function
                    properly without them.
                </p>
                <h6>5. Data Security</h6>
                <p>
                    We implement appropriate technical and organizational measures to protect your data from unauthorized
                    access, disclosure, alteration, or destruction. However, no internet-based system is completely secure,
                    and
                    we cannot guarantee absolute protection.
                </p>
                <h6>6. Data Retention</h6>
                <p>
                    We retain your personal data only for as long as necessary to fulfill the purposes outlined in this
                    Privacy
                    Policy, unless a longer retention period is required by law or regulation.
                </p>
                <h6>7. Your Rights</h6>
                <p class="mb-0">Depending on applicable law, you may have the right to:</p>
                <ul class="mb-0">
                    <li>Access, correct, or delete your personal data.</li>
                    <li>Restrict or object to our processing of your data.</li>
                    <li>Withdraw consent for marketing communications.</li>
                    <li>Request a copy of your personal data.</li>
                </ul>
                <p>To exercise these rights, please contact us at info@mangroves.sa.</p>
                <h6>8. Third-Party Links</h6>
                <p>
                    Our website may contain links to third-party websites. We are not responsible for the privacy practices
                    or
                    content of external sites, and we encourage you to review their privacy policies before providing any
                    personal data.
                </p>
                <h6>9. Children’s Privacy</h6>
                <p>
                    Our services are not directed at children under 13. We do not knowingly collect personal data from
                    children.
                    If we become aware that we have inadvertently collected data from a child, we will delete it promptly.
                </p>
                <h6>10. International Data Transfers</h6>
                <p>
                    As we operate primarily within Saudi Arabia, most data will be processed locally. If international data
                    transfer occurs, we ensure appropriate safeguards are applied in compliance with data protection
                    regulations.
                </p>
                <h6>11. Updates to This Policy</h6>
                <p>
                    We may update this Privacy Policy from time to time to reflect changes in our practices, technology, or
                    legal requirements. Updates will be posted on this page with a revised “Last Updated” date.
                </p>
                <h6>12. Contact Us</h6>
                <p>
                    If you have any questions, concerns, or requests regarding this Privacy Policy or our data practices,
                    please
                    contact us:
                </p>

            </div>
            <div class="signtaure">

                <img src="{{ asset('images/logo.png') }}" alt="Mangrove Oases" width="60">
                <p class="mb-0">Mangrove Oasis</p>
                <p class="mb-0">36D, Al Shulah, Dammam, Saudi Arabia</p>
                <p class="mb-0">Email: Info@mangroves.sa</p>
                <p class="mb-0">Phone: 0545170000</p>
            </div>
        </div>
    </section>
@endsection
