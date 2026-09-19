@extends('layouts.app')

@section('content')
<main class="page-wrapper">
    <!-- 1. Hero Section -->
    <section class="home-hero" id="home">
        <div class="w-layout-blockcontainer container-default w-container">
            <div class="home-hero-wrapper">
                <div class="home-hero-content-block">
                    <div class="hero-content-top-block">
                        <div class="home-hero-title-wrapper" data-w-id="a884db8c-6ffb-9c5a-1151-b58e76e77182">
                            <h1 class="home-hero-title">Empowering Financial Futures With Strategic Advisory</h1>
                        </div>
                        <p class="home-hero-text" data-w-id="fb77d5e9-ae20-0f0b-4d9b-d79effe6f38e">
                            Discover the versatility of our solutions designed for financial advisors, investment firms, and consulting agencies to build trust and drive long-term growth.
                        </p>
                        <div class="home-hero-buttons-wrapper" data-w-id="eeed24eb-cd6b-5eef-aaa3-b582913bdbee">
                            <a class="primary-button w-inline-block" href="#solutions">
                                <div class="primary-button-icon w-embed">
                                    <svg fill="none" height="24" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M18 2V4M6 2V4" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></path>
                                        <path d="M10 17L9.99999 13.3472C9.99999 13.1555 9.86325 13 9.69458 13H9M13.6297 17L14.9842 13.3492C15.0475 13.1785 14.9128 13 14.7207 13H13" stroke="currentColor" stroke-linecap="round" stroke-width="1.5"></path>
                                        <path d="M2.5 12.2432C2.5 7.88594 2.5 5.70728 3.75212 4.35364C5.00424 3 7.01949 3 11.05 3H12.95C16.9805 3 18.9958 3 20.2479 4.35364C21.5 5.70728 21.5 7.88594 21.5 12.2432V12.7568C21.5 17.1141 21.5 19.2927 20.2479 20.6464C18.9958 22 16.9805 22 12.95 22H11.05C7.01949 22 5.00424 22 3.75212 20.6464C2.5 19.2927 2.5 17.1141 2.5 12.7568V12.2432Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></path>
                                        <path d="M6 8H18" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></path>
                                    </svg>
                                </div>
                                <p class="button-text">Explore Solutions</p>
                            </a>
                            <a class="primary-button style-two hero-button w-inline-block" href="#about">
                                <p class="button-text">About Us</p>
                            </a>
                        </div>
                    </div>
                    <!-- Partner Logos Marquee -->
                    <div class="home-hero-logo-marquee" data-w-id="9725a2ab-99f3-4bc6-b054-9360766f3d9c">
                        <p class="title-text-v4 home-logo-marquee-title">Collaborating with Leading Financial Institutions &amp; Universities</p>
                        <div class="clients-logo-marquee" data-w-id="c5d3be0d-ebd3-fa41-cc74-01ad2e158ff5">
                            <div class="clients-logos-wrapper">
                                <div class="clients-logo-item"><img alt="Clients Logo" class="clients-logo" loading="lazy" src="{{ asset('assets/cdn_prod_website-files_com/67c0042b87279d5a0f828374/67c68e94febb0fcb9494f90e_Logo_202.png') }}"/></div>
                                <div class="clients-logo-item"><img alt="Clients Logo" class="clients-logo" loading="lazy" src="{{ asset('assets/cdn_prod_website-files_com/67c0042b87279d5a0f828374/67c68e94f412c8d6a21912e5_Logo_201.png') }}"/></div>
                                <div class="clients-logo-item"><img alt="Clients Logo" class="clients-logo" loading="lazy" src="{{ asset('assets/cdn_prod_website-files_com/67c0042b87279d5a0f828374/67c68e942b20a85f685fe9e1_Logo_203.png') }}"/></div>
                                <div class="clients-logo-item"><img alt="Clients Logo" class="clients-logo" loading="lazy" src="{{ asset('assets/cdn_prod_website-files_com/67c0042b87279d5a0f828374/67c68e944cfb6c4a38dec397_Logo_206.png') }}"/></div>
                                <div class="clients-logo-item"><img alt="Clients Logo" class="clients-logo" loading="lazy" src="{{ asset('assets/cdn_prod_website-files_com/67c0042b87279d5a0f828374/67c68e948341c9cd0b615130_Logo_204.png') }}"/></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Hero Image Block -->
                <div class="home-hero-image-block" data-w-id="15da6e66-e4fd-4aa9-6c33-ac3402baf4d2">
                    <img alt="Home Hero Image" class="home-hero-image" loading="lazy" sizes="(max-width: 645px) 100vw, 645px" src="{{ asset('assets/cdn_prod_website-files_com/67c0042b87279d5a0f828374/67c68cc4b5a2037965d57212_Home_20Hero_20Image.jpg') }}"/>
                </div>
            </div>
        </div>
    </section>

    <!-- 2. About Us Section + Rolling Counters -->
    <section class="about-us" id="about">
        <div class="section-gap">
            <div class="w-layout-blockcontainer container-default w-container">
                <div class="about-us-wrapper">
                    <div class="section-top-block no-margin">
                        <p class="subtitle" data-w-id="f7febfed-47b7-1979-3587-0ab4794210cb">About AHTC</p>
                        <div class="animated-title-block" data-w-id="35de10ba-bb8c-4a8d-4ac4-9107958c5fa4">
                            <h2 class="section-title">In a rapidly shifting global financial landscape, we bridge the gap between market complexities and sustainable growth through high-impact talent development and strategic consultancy.</h2>
                            <div class="title-overlay"></div>
                        </div>
                    </div>
                    <!-- Animated Rolling Counters -->
                    <div class="about-us-counters-wrapper">
                        <div class="about-us-counter-item" data-w-id="11dfd2a2-b068-f2f6-fde7-c796aa8709b1">
                            <div class="fun-fact-number-wrapper">
                                <div class="fun-fact-number-block upper-movement"><h3 class="fun-fact-number">1</h3><h3 class="fun-fact-number">2</h3><h3 class="fun-fact-number">3</h3><h3 class="fun-fact-number">4</h3><h3 class="fun-fact-number">5</h3></div>
                                <div class="fun-fact-number-block lower-movement"><h3 class="fun-fact-number">0</h3><h3 class="fun-fact-number">1</h3><h3 class="fun-fact-number">2</h3><h3 class="fun-fact-number">3</h3><h3 class="fun-fact-number">4</h3></div>
                                <div class="fun-fact-number-block upper-movement"><h3 class="fun-fact-number">4</h3><h3 class="fun-fact-number">3</h3><h3 class="fun-fact-number">2</h3><h3 class="fun-fact-number">1</h3><h3 class="fun-fact-number">0</h3></div>
                                <h3 class="fun-fact-suffix">+</h3>
                            </div>
                            <p class="fun-fact-text">Institutional Clients</p>
                        </div>
                        <div class="about-us-counter-item" data-w-id="7ae93091-cb1a-1fb5-c47b-8e609ac01cc6">
                            <div class="fun-fact-number-wrapper">
                                <div class="fun-fact-number-block upper-movement"><h3 class="fun-fact-number">7</h3><h3 class="fun-fact-number">6</h3><h3 class="fun-fact-number">5</h3><h3 class="fun-fact-number">4</h3><h3 class="fun-fact-number">3</h3></div>
                                <div class="fun-fact-number-block lower-movement"><h3 class="fun-fact-number">0</h3><h3 class="fun-fact-number">1</h3><h3 class="fun-fact-number">2</h3><h3 class="fun-fact-number">3</h3><h3 class="fun-fact-number">4</h3></div>
                                <div class="fun-fact-number-block upper-movement"><h3 class="fun-fact-number">4</h3><h3 class="fun-fact-number">3</h3><h3 class="fun-fact-number">2</h3><h3 class="fun-fact-number">1</h3><h3 class="fun-fact-number">0</h3></div>
                                <h3 class="fun-fact-suffix">+</h3>
                            </div>
                            <p class="fun-fact-text">Training Initiatives</p>
                        </div>
                        <div class="about-us-counter-item" data-w-id="8f45528b-3a3c-2abd-b57e-a707cdea920e">
                            <div class="fun-fact-number-wrapper">
                                <div class="fun-fact-number-block upper-movement"><h3 class="fun-fact-number">3</h3><h3 class="fun-fact-number">4</h3><h3 class="fun-fact-number">5</h3><h3 class="fun-fact-number">6</h3><h3 class="fun-fact-number">7</h3></div>
                                <div class="fun-fact-number-block lower-movement"><h3 class="fun-fact-number">5</h3><h3 class="fun-fact-number">4</h3><h3 class="fun-fact-number">3</h3><h3 class="fun-fact-number">2</h3><h3 class="fun-fact-number">1</h3></div>
                                <h3 class="fun-fact-suffix">+</h3>
                            </div>
                            <p class="fun-fact-text">University Modules</p>
                        </div>
                        <div class="about-us-counter-item" data-w-id="c6e79b53-7c9c-a9ca-5fa4-da4938fc737e">
                            <div class="fun-fact-number-wrapper">
                                <div class="fun-fact-number-block upper-movement"><h3 class="fun-fact-number">6</h3><h3 class="fun-fact-number">5</h3><h3 class="fun-fact-number">4</h3><h3 class="fun-fact-number">3</h3><h3 class="fun-fact-number">2</h3></div>
                                <div class="fun-fact-number-block lower-movement"><h3 class="fun-fact-number">5</h3><h3 class="fun-fact-number">4</h3><h3 class="fun-fact-number">3</h3><h3 class="fun-fact-number">2</h3><h3 class="fun-fact-number">1</h3></div>
                                <h3 class="fun-fact-suffix">+</h3>
                            </div>
                            <p class="fun-fact-text">Years of Excellence</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. Training & Learning Solutions Section -->
    <section class="our-services" id="solutions">
        <div class="section-gap">
            <div class="w-layout-blockcontainer container-default w-container">
                <div class="our-services-cards-wrapper" data-w-id="dfa11918-73c7-3d99-54b9-f5061bf8f6b2">
                    <div class="section-top-block align-center">
                        <p class="subtitle" data-w-id="6dd52b2f-7495-51a8-21ed-328803cd2bb4">Training &amp; Learning Solutions</p>
                        <h2 class="section-title" data-w-id="6dd52b2f-7495-51a8-21ed-328803cd2bb7">Explore AHTC Specialized Programs</h2>
                    </div>
                    <div class="services-cards-items-wrapper" data-w-id="7885df3e-df23-771e-eb5f-9c66fbf488d7">
                        <div class="service-collection-wrapper w-dyn-list">
                            <div class="services-cards-items-list w-dyn-items" role="list">
                                <div class="service-collection-list-item w-dyn-item" role="listitem">
                                    <div class="services-card-item">
                                        <img alt="Corporate Solutions" class="services-card-icon" loading="lazy" src="{{ asset('assets/cdn_prod_website-files_com/67c7df18985a0ca7e27b1104/67c7e1872d33dcbfe90b69e1_Icon_20_2_.svg') }}"/>
                                        <a class="service-card-link w-inline-block" href="#contact">
                                            <h3 class="title-text-v4 service-card-title">Corporate &amp; Enterprise Solutions</h3>
                                        </a>
                                        <p class="services-card-text">Corporate Programmes, Customized In-house Training, Professional Certification via University collaborations, and SME Capacity Building.</p>
                                    </div>
                                </div>
                                <div class="service-collection-list-item w-dyn-item" role="listitem">
                                    <div class="services-card-item">
                                        <img alt="Executive Development" class="services-card-icon" loading="lazy" src="{{ asset('assets/cdn_prod_website-files_com/67c7df18985a0ca7e27b1104/67c7e143a1afdeff4ca18299_Icon_20_1_.svg') }}"/>
                                        <a class="service-card-link w-inline-block" href="#contact">
                                            <h3 class="title-text-v4 service-card-title">Executive &amp; Leadership Development</h3>
                                        </a>
                                        <p class="services-card-text">Executive Programmes for C-suite and Board members, Leadership Academies, and Graduate Development Onboarding.</p>
                                    </div>
                                </div>
                                <div class="service-collection-list-item w-dyn-item" role="listitem">
                                    <div class="services-card-item">
                                        <img alt="Digital Ecosystems" class="services-card-icon" loading="lazy" src="{{ asset('assets/cdn_prod_website-files_com/67c7df18985a0ca7e27b1104/67c7e1246a84540c70a0cbba_Icon.svg') }}"/>
                                        <a class="service-card-link w-inline-block" href="#contact">
                                            <h3 class="title-text-v4 service-card-title">Institutional &amp; Digital Ecosystems</h3>
                                        </a>
                                        <p class="services-card-text">University Executive modules bridging academic theory with practice, and Digital Learning Solutions for flexible hybrid ecosystems.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 4. Our Impact Section -->
    <section class="our-impact-section">
        <div class="section-gap">
            <div class="w-layout-blockcontainer container-default w-container">
                <div class="common-content-grid center-aligned">
                    <div class="common-grid-image-wrapper style-two" data-w-id="76b312a6-4a7f-24fb-fc63-d9f04b3b5ede">
                        <img alt="Our Impact Image" class="common-grid-image" loading="lazy" sizes="(max-width: 645px) 100vw, 645px" src="{{ asset('assets/cdn_prod_website-files_com/67c0042b87279d5a0f828374/67c9112d4ebcbc13e69c26d0_Our_20Impact_20Image.jpg') }}"/>
                    </div>
                    <div class="common-grid-content-wrapper">
                        <div class="section-top-block no-margin">
                            <p class="subtitle" data-w-id="ca57e78b-1a4f-0d33-5bf6-e42dc8db975c">Our Impact</p>
                            <div class="section-top-title-wrapper">
                                <h2 class="section-title inline-title" data-w-id="ca57e78b-1a4f-0d33-5bf6-e42dc8db975e">Fortifying Institutional Capabilities &amp; Talent</h2>
                            </div>
                            <p class="our-impact-text" data-w-id="8a1c9c17-a5f7-348a-11e3-7a6d695fce78">We collaborate closely with leading institutions to close critical capability gaps and cultivate forward-thinking talent.</p>
                        </div>
                        <ul class="our-impact-list" role="list">
                            <li class="our-impact-list-item" data-w-id="7fc7f509-a30c-5510-6828-ccb3f026a6c0">Leading Financial Institutions &amp; Islamic Banks</li>
                            <li class="our-impact-list-item" data-w-id="853dd7f8-ef20-ec1f-9fea-c75d7262394e">Government Agencies &amp; Regulatory Bodies</li>
                            <li class="our-impact-list-item" data-w-id="22f92289-f683-21fd-882b-286ce6bf3297">Universities &amp; Institutes of Higher Learning</li>
                            <li class="our-impact-list-item" data-w-id="b0fe0f8c-a992-f9f7-b49a-9df43d501867">Corporations, SMEs &amp; Professional Bodies</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <style>
        .subtitle {
            background-image: none !important;
            padding-left: 0 !important;
        }
        .home-hero-wrapper {
            display: flex;
            align-items: flex-start;
            gap: 30px;
            width: 100%;
        }
        .home-hero-content-block {
            width: 50%;
            flex: 0 0 50%;
            max-width: 50%;
            box-sizing: border-box;
        }
        .home-hero-image-block {
            width: 50%;
            flex: 0 0 50%;
            max-width: 50%;
            box-sizing: border-box;
        }
        .home-hero-image {
            width: 100%;
            height: auto;
            object-fit: cover;
            border-radius: 16px;
        }
        .home-hero-logo-marquee {
            width: 100%;
            margin-top: 30px;
        }
        .strategic-pillars-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 24px;
            margin-top: 40px;
        }
        .contact-quick-selectors {
            display: flex;
            gap: 12px;
            margin-bottom: 24px;
            flex-wrap: wrap;
        }
        .contact-quick-btn {
            flex: 1;
            min-width: 200px;
            text-align: center;
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 8px;
            padding: 14px 20px !important;
        }
        @media (max-width: 991px) {
            .home-hero-wrapper {
                flex-direction: column;
            }
            .home-hero-content-block,
            .home-hero-image-block {
                width: 100%;
                flex: 0 0 100%;
                max-width: 100%;
            }
            .strategic-pillars-grid {
                grid-template-columns: repeat(2, 1fr);
            }
            .contact-form-content-wrapper {
                grid-template-columns: 1fr !important;
                flex-direction: column !important;
            }
        }
        @media (max-width: 767px) {
            .strategic-pillars-grid {
                grid-template-columns: 1fr;
            }
            .home-hero-title {
                font-size: 32px !important;
                line-height: 1.2 !important;
            }
            .contact-field-row {
                flex-direction: column !important;
                gap: 16px !important;
            }
            .contact-field-row .contact-form-field-wrapper {
                width: 100% !important;
            }
            .contact-quick-selectors {
                flex-direction: column !important;
            }
            .contact-quick-btn {
                width: 100% !important;
                min-width: 100% !important;
            }
            .contact-form-wrapper {
                padding: 20px 16px !important;
            }
            .contact-form-button {
                width: 100% !important;
            }
        }
    </style>

    <!-- 6. Why Choose Us Section -->
    <section class="why-choose-section">
        <div class="section-gap-bottom">
            <div class="w-layout-blockcontainer container-default w-container">
                <div class="why-choose-wrapper">
                    <div class="section-top-block align-center">
                        <p class="subtitle" data-w-id="10d5286c-5ab2-5dfd-476b-99e2e98a3297">Why Choose AHTC</p>
                        <h2 class="section-title why-choose-section-title" data-w-id="10d5286c-5ab2-5dfd-476b-99e2e98a3299">Why Select AHTC for Islamic Banking &amp; Advisory?</h2>
                    </div>
                    <div class="common-content-grid">
                        <div class="common-grid-content-wrapper" data-w-id="70eb8bc1-6218-5300-ed04-e153dc9cffa3">
                            <div class="common-card-style">
                                <img alt="Why Choose Icon" class="common-card-icon" loading="lazy" src="{{ asset('assets/cdn_prod_website-files_com/67c0042b87279d5a0f828374/67c52bfd0f2742b61293c71b_theme_20icon_20_5_.svg') }}"/>
                                <h3 class="common-card-title">Deep Industry Expertise</h3>
                                <p class="common-card-text">Specialized knowledge across Islamic banking operations, credit management, and risk mitigation frameworks.</p>
                            </div>
                            <div class="common-card-style">
                                <img alt="Why Choose Icon" class="common-card-icon" loading="lazy" src="{{ asset('assets/cdn_prod_website-files_com/67c0042b87279d5a0f828374/67c52bfc82aba6829dbe89aa_theme_20icon_20_4_.svg') }}" width="Auto"/>
                                <h3 class="common-card-title">Shariah Governance</h3>
                                <p class="common-card-text">Comprehensive understanding of regulatory compliance, operationalizing Shariah contracts, and trade finance.</p>
                            </div>
                            <div class="common-card-style">
                                <img alt="Why Choose Icon" class="common-card-icon" loading="lazy" src="{{ asset('assets/cdn_prod_website-files_com/67c0042b87279d5a0f828374/67c52bfc3b53ebcc8e060889_theme_20icon_20_3_.svg') }}"/>
                                <h3 class="common-card-title">Customized In-house Tracks</h3>
                                <p class="common-card-text">Tailored modules engineered around exact business bottlenecks, corporate culture, and strategic goals.</p>
                            </div>
                            <div class="common-card-style">
                                <img alt="Why Choose Icon" class="common-card-icon" loading="lazy" src="{{ asset('assets/cdn_prod_website-files_com/67c0042b87279d5a0f828374/67c52bfccd96a68be6f1dba0_theme_20icon_20_2_.svg') }}"/>
                                <h3 class="common-card-title">Academic &amp; Global Standards</h3>
                                <p class="common-card-text">Strategic collaborations with Institutes of Higher Learning &amp; Universities for accredited credentialing.</p>
                            </div>
                        </div>
                        <div class="common-grid-image-wrapper" data-w-id="70eb8bc1-6218-5300-ed04-e153dc9cffb0" id="w-node-_70eb8bc1-6218-5300-ed04-e153dc9cffb0-294c3207">
                            <img alt="Common grid Image" class="common-grid-image" loading="lazy" sizes="(max-width: 645px) 100vw, 645px" src="{{ asset('assets/cdn_prod_website-files_com/67c0042b87279d5a0f828374/67c92e7d82849093fe4ba793_Why_20Choose_20Image.jpg') }}"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 7. Contact Us Form & Direct Info Section -->
    <section class="contact-form-section" id="contact">
        <div class="section-gap">
            <div class="w-layout-blockcontainer container-default w-container">
                <div class="section-top-block align-center">
                    <p class="subtitle">Get In Touch</p>
                    <h2 class="section-title">Connect With Al-Hijrah Consultancy</h2>
                </div>
                <div class="contact-form-content-wrapper">
                    <div class="contact-image-wrapper">
                        <img alt="Contact AHTC" class="contact-image" loading="lazy" sizes="(max-width: 615px) 100vw, 615px" src="{{ asset('assets/cdn_prod_website-files_com/67c0042b87279d5a0f828374/67d2994758ef0af84d115743_Contact_20Image.jpg') }}"/>
                    </div>
                    <div class="contact-form-wrapper">
                        <!-- Direct Contact Method Quick Selectors -->
                        <div class="contact-quick-selectors">
                            <a href="https://wa.me/60192680787?text=Hello%20AHTC,%20I%20would%20like%20to%20enquire%20about%20your%20Islamic%20Banking%20training%20and%20consultancy%20services." target="_blank" class="primary-button contact-quick-btn w-inline-block" style="background-color: #25D366; border-color: #25D366;">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M19.05 4.91A9.816 9.816 0 0 0 12.04 2c-5.46 0-9.91 4.45-9.91 9.91 0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21 5.46 0 9.91-4.45 9.91-9.91 0-2.65-1.03-5.14-2.9-7.01zm-7.01 15.24c-1.48 0-2.93-.4-4.2-1.15l-.3-.18-3.12.82.83-3.04-.2-.32a8.19 8.19 0 0 1-1.26-4.38c0-4.54 3.7-8.24 8.24-8.24 2.2 0 4.27.86 5.82 2.42a8.18 8.18 0 0 1 2.41 5.83c0 4.54-3.7 8.24-8.24 8.24zm4.52-6.16c-.25-.12-1.47-.72-1.69-.8-.23-.09-.39-.12-.56.12-.17.25-.66.8-.81.97-.15.17-.3.19-.55.07-.25-.12-1.05-.39-2.01-1.24-.74-.66-1.24-1.47-1.39-1.72-.15-.25-.02-.38.11-.5.11-.11.25-.29.37-.44.12-.15.17-.25.25-.42.08-.17.04-.31-.02-.44-.06-.12-.56-1.34-.76-1.84-.2-.48-.41-.42-.56-.43h-.48c-.17 0-.44.06-.67.31-.23.25-.88.86-.88 2.1 0 1.24.9 2.44 1.03 2.61.12.17 1.77 2.71 4.29 3.8.6.26 1.07.41 1.44.53.6.19 1.15.16 1.59.1.48-.07 1.47-.6 1.68-1.18.21-.58.21-1.07.15-1.18-.06-.11-.22-.17-.47-.3z"/>
                                </svg>
                                <p class="button-text" style="color: #ffffff; margin: 0;">Chat on WhatsApp</p>
                            </a>
                            <a href="mailto:enquiry@alhijrahtraining.com?subject=Inquiry%20regarding%20AHTC%20Training%20%26%20Consultancy" class="primary-button style-two hero-button contact-quick-btn w-inline-block">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                                    <polyline points="22,6 12,13 2,6"></polyline>
                                </svg>
                                <p class="button-text" style="margin: 0;">Send Email Direct</p>
                            </a>
                        </div>
                        
                        <div class="contact-form w-form">
                            <form class="contact-form-block" id="email-form" name="email-form" onsubmit="event.preventDefault(); alert('Thank you! Your message has been sent to Al-Hijrah Training & Consultancy.');">
                                <div class="contact-field-row">
                                    <div class="contact-form-field-wrapper">
                                        <label class="contact-form-label" for="name">Full Name*</label>
                                        <input class="contact-form-field w-input" id="name" maxlength="256" name="name" placeholder="Your Name" required="" type="text"/>
                                    </div>
                                    <div class="contact-form-field-wrapper">
                                        <label class="contact-form-label" for="Email">Your Email*</label>
                                        <input class="contact-form-field w-input" id="Email" maxlength="256" name="Email" placeholder="enquiry@alhijrahtraining.com" required="" type="email"/>
                                    </div>
                                </div>
                                <div class="contact-field-row">
                                    <div class="contact-form-field-wrapper">
                                        <label class="contact-form-label" for="Phone-No">Phone Number*</label>
                                        <input class="contact-form-field w-input" id="Phone-No" maxlength="256" name="Phone-No" placeholder="+6019 268 0787" required="" type="tel"/>
                                    </div>
                                    <div class="contact-form-field-wrapper">
                                        <label class="contact-form-label" for="Preferred-Contact">Preferred Contact Channel*</label>
                                        <select class="contact-form-field w-select" id="Preferred-Contact" name="Preferred-Contact" required="" style="padding: 12px 16px;">
                                            <option value="WhatsApp">WhatsApp</option>
                                            <option value="Email" selected>Email</option>
                                            <option value="Phone Call">Phone Call</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-message-form-wrapper">
                                    <label class="contact-form-label" for="Your-Message">Your Message*</label>
                                    <textarea class="contact-form-field message-field w-input" id="Your-Message" maxlength="5000" name="Your-Message" placeholder="Please type your message here..."></textarea>
                                </div>
                                <input class="form-button contact-form-button w-button" type="submit" value="Submit Enquiry"/>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 8. FAQ & Request A Call Back Section -->
    <section class="section-gap-bottom" id="faq-contact" style="padding: 80px 0; background-color: #f8fafc;">
        <div class="w-layout-blockcontainer container-default w-container">
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 40px; align-items: start;">
                
                <!-- Left Side: FAQ -->
                <div>
                    <div style="margin-bottom: 24px;">
                        <p class="subtitle" style="color: #28AFAC; font-weight: 600; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 8px;">FAQ</p>
                        <h2 class="section-title" style="font-size: 32px; font-weight: 700; color: #0f172a; margin: 0 0 12px 0;">Frequently Asked Questions</h2>
                        <p style="color: #64748b; font-size: 15px; line-height: 1.6;">Have questions about our strategic advisory or learning roadmaps? Here are quick answers to our most common client inquiries.</p>
                    </div>

                    <div class="faq-items-wrapper" style="display: flex; flex-direction: column; gap: 16px;">
                        <div class="faq-item" style="background: #ffffff; padding: 20px; border-radius: 12px; box-shadow: 0 2px 10px rgba(0,0,0,0.04); border: 1px solid #e2e8f0;">
                            <h4 style="font-size: 17px; font-weight: 600; color: #1e293b; margin: 0 0 8px 0;">What learning & advisory solutions does AHTC provide?</h4>
                            <p style="color: #64748b; font-size: 14px; line-height: 1.6; margin: 0;">We specialize in tailored executive learning programs, Shariah risk governance restructuring, Green Sukuk framework advisory, and leadership talent acceleration for financial institutions.</p>
                        </div>

                        <div class="faq-item" style="background: #ffffff; padding: 20px; border-radius: 12px; box-shadow: 0 2px 10px rgba(0,0,0,0.04); border: 1px solid #e2e8f0;">
                            <h4 style="font-size: 17px; font-weight: 600; color: #1e293b; margin: 0 0 8px 0;">How do we initiate an advisory session with your team?</h4>
                            <p style="color: #64748b; font-size: 14px; line-height: 1.6; margin: 0;">You can request a call back directly using the form on this page, or reach out to our team via WhatsApp or email to schedule an initial consultation.</p>
                        </div>

                        <div class="faq-item" style="background: #ffffff; padding: 20px; border-radius: 12px; box-shadow: 0 2px 10px rgba(0,0,0,0.04); border: 1px solid #e2e8f0;">
                            <h4 style="font-size: 17px; font-weight: 600; color: #1e293b; margin: 0 0 8px 0;">Are the executive programs customizable for corporate teams?</h4>
                            <p style="color: #64748b; font-size: 14px; line-height: 1.6; margin: 0;">Yes, all training modules and advisory roadmaps are tailored specifically to meet the strategic operational and compliance goals of your institution.</p>
                        </div>
                    </div>
                </div>

                <!-- Right Side: Request A Call Back Form -->
                <div style="background: #ffffff; padding: 36px; border-radius: 16px; box-shadow: 0 10px 30px rgba(0,0,0,0.06); border: 1px solid #e2e8f0;">
                    <div style="margin-bottom: 20px;">
                        <span style="font-size: 13px; font-weight: 700; color: #28AFAC; text-transform: uppercase; letter-spacing: 1.5px;">SEND A MESSAGE</span>
                        <h3 style="font-size: 26px; font-weight: 700; color: #0f172a; margin: 6px 0 10px 0;">Request A Call Back</h3>
                        <p style="color: #64748b; font-size: 14px; margin: 0;">Fill out your details below and our advisory experts will get in touch with you promptly.</p>
                    </div>

                    <form id="callBackFormMain" style="display: flex; flex-direction: column; gap: 16px;">
                        <div>
                            <label for="cb_name_main" style="display: block; font-size: 13px; font-weight: 600; color: #334155; margin-bottom: 6px;">Name *</label>
                            <input type="text" id="cb_name_main" required placeholder="Your Full Name" style="width: 100%; padding: 12px 16px; border: 1px solid #cbd5e1; border-radius: 8px; font-size: 14px; outline: none; transition: border 0.2s;" onfocus="this.style.borderColor='#28AFAC'" onblur="this.style.borderColor='#cbd5e1'">
                        </div>

                        <div>
                            <label for="cb_phone_main" style="display: block; font-size: 13px; font-weight: 600; color: #334155; margin-bottom: 6px;">Phone *</label>
                            <input type="tel" id="cb_phone_main" required placeholder="+6012-345 6789" style="width: 100%; padding: 12px 16px; border: 1px solid #cbd5e1; border-radius: 8px; font-size: 14px; outline: none; transition: border 0.2s;" onfocus="this.style.borderColor='#28AFAC'" onblur="this.style.borderColor='#cbd5e1'">
                        </div>

                        <div>
                            <label for="cb_email_main" style="display: block; font-size: 13px; font-weight: 600; color: #334155; margin-bottom: 6px;">Email *</label>
                            <input type="email" id="cb_email_main" required placeholder="business@domain.com" style="width: 100%; padding: 12px 16px; border: 1px solid #cbd5e1; border-radius: 8px; font-size: 14px; outline: none; transition: border 0.2s;" onfocus="this.style.borderColor='#28AFAC'" onblur="this.style.borderColor='#cbd5e1'">
                        </div>

                        <div>
                            <label for="cb_message_main" style="display: block; font-size: 13px; font-weight: 600; color: #334155; margin-bottom: 6px;">How can we help? *</label>
                            <textarea id="cb_message_main" rows="3" required placeholder="Briefly describe your enquiry or strategic requirement..." style="width: 100%; padding: 12px 16px; border: 1px solid #cbd5e1; border-radius: 8px; font-size: 14px; outline: none; resize: vertical; transition: border 0.2s;" onfocus="this.style.borderColor='#28AFAC'" onblur="this.style.borderColor='#cbd5e1'"></textarea>
                        </div>

                        <div style="display: flex; gap: 12px; margin-top: 8px; flex-wrap: wrap;">
                            <button type="button" onclick="sendMainEmail()" style="flex: 1; min-width: 140px; padding: 14px 20px; background-color: #0f172a; color: #ffffff; border: none; border-radius: 8px; font-weight: 600; font-size: 14px; cursor: pointer; display: flex; align-items: center; justify-content: center; gap: 8px; transition: background 0.2s;">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                                Send Email
                            </button>
                            <button type="button" onclick="sendMainWhatsApp()" style="flex: 1; min-width: 140px; padding: 14px 20px; background-color: #25D366; color: #ffffff; border: none; border-radius: 8px; font-weight: 600; font-size: 14px; cursor: pointer; display: flex; align-items: center; justify-content: center; gap: 8px; transition: background 0.2s;">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M12.012 2c-5.506 0-9.989 4.478-9.99 9.984a9.964 9.964 0 001.333 4.993L2 22l5.233-1.237a9.982 9.982 0 004.779 1.221h.004c5.505 0 9.988-4.478 9.989-9.984 0-2.669-1.038-5.176-2.925-7.062A9.925 9.925 0 0012.012 2zm5.827 14.283c-.244.688-1.427 1.314-1.97 1.372-.511.054-1.173.08-3.712-.971-3.253-1.348-5.34-4.66-5.501-4.877-.161-.218-1.31-1.744-1.31-3.327 0-1.583.824-2.36 1.118-2.682.293-.322.641-.403.855-.403.214 0 .428.002.614.011.196.009.462-.074.724.554.271.65.922 2.25.1003 2.413.081.163.136.353.027.57-.108.217-.163.353-.326.543-.163.19-.342.424-.147.76.195.337.868 1.433 1.864 2.32 1.28 1.14 2.359 1.493 2.696 1.657.337.163.533.136.73-.09.196-.226.842-.98.1066-1.317.225-.337.447-.282.748-.171.301.112 1.91 1.002 2.237 1.165.327.163.544.244.626.381.082.136.082.789-.162 1.477z"/></svg>
                                Send WhatsApp
                            </button>
                        </div>
                    </form>

                    <script>
                        function sendMainEmail() {
                            var name = document.getElementById('cb_name_main').value || '';
                            var phone = document.getElementById('cb_phone_main').value || '';
                            var email = document.getElementById('cb_email_main').value || '';
                            var message = document.getElementById('cb_message_main').value || '';

                            if (!name || !phone || !email || !message) {
                                alert('Please complete all required fields.');
                                return;
                            }

                            var subject = encodeURIComponent('Request A Call Back - ' + name);
                            var body = encodeURIComponent('Name: ' + name + '\nPhone: ' + phone + '\nEmail: ' + email + '\n\nHow can help you:\n' + message);
                            window.location.href = 'mailto:enquiry@alhijrahtraining.com?subject=' + subject + '&body=' + body;
                        }

                        function sendMainWhatsApp() {
                            var name = document.getElementById('cb_name_main').value || '';
                            var phone = document.getElementById('cb_phone_main').value || '';
                            var email = document.getElementById('cb_email_main').value || '';
                            var message = document.getElementById('cb_message_main').value || '';

                            if (!name || !phone || !email || !message) {
                                alert('Please complete all required fields.');
                                return;
                            }

                            var text = encodeURIComponent('Hello AHTC,\n\nI would like to request a call back.\n\nName: ' + name + '\nPhone: ' + phone + '\nEmail: ' + email + '\nEnquiry: ' + message);
                            window.open('https://wa.me/60192680787?text=' + text, '_blank');
                        }
                    </script>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
