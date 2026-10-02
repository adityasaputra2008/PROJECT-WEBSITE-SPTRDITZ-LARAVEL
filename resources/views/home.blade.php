<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <meta
        name="description"
        content="SPTRDITZ — Contemporary Youth Fashion."
    >

    <title>SPTRDITZ</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        /* =========================================================
           HOME PRODUCT PLACEHOLDER
        ========================================================== */

        .product-placeholder {
            width: 100%;
            height: 100%;
            min-height: 360px;

            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;

            background:
                linear-gradient(
                    135deg,
                    rgba(255, 255, 255, 0.045),
                    rgba(255, 255, 255, 0.015)
                );

            border: 1px solid rgba(255, 255, 255, 0.10);

            text-align: center;
            box-sizing: border-box;
        }

        .product-placeholder span {
            display: block;

            font-size: 11px;
            letter-spacing: 0.18em;
            text-transform: uppercase;

            opacity: 0.7;
        }

        .product-placeholder small {
            display: block;

            margin-top: 8px;

            font-size: 9px;
            letter-spacing: 0.14em;
            text-transform: uppercase;

            opacity: 0.35;
        }

        @media (max-width: 768px) {

            .product-placeholder {
                min-height: 300px;
            }

        }
    </style>

</head>


<body>


    <!-- =========================================================
         NAVBAR
    ========================================================== -->

    <header class="navbar">

        <div class="logo">

            <a
                href="/"
                aria-label="SPTRDITZ Home"
            >

                <img
                    src="{{ asset('assets/images/logo-sptrditz.png') }}"
                    alt="SPTRDITZ"
                >

            </a>

        </div>


        <nav
            class="nav-menu"
            aria-label="Main Navigation"
        >

            <a href="/">
                Home
            </a>

            <a href="/shop">
                Shop
            </a>

            <a href="/collection">
                Collection
            </a>

            <a href="/about">
                About
            </a>

            <a href="/contact">
                Contact
            </a>

        </nav>


        <div class="nav-actions">

            <a href="/shop#shop-search">
                Search
            </a>

            <a href="/cart">
                Cart
            </a>

        </div>

    </header>



    <main>


        <!-- =====================================================
             HERO
        ====================================================== -->

        <section class="hero">

            <div class="hero-content">

                <h1>
                    CONTEMPORARY YOUTH FASHION
                </h1>

                <p>
                    Modern clothing, graphics and culture
                    for a new generation.
                </p>

                <a
                    href="/collection"
                    class="hero-button"
                >
                    EXPLORE COLLECTION
                </a>

            </div>


            <div class="hero-image">

                <img
                    src="{{ asset('assets/images/hero-image.png') }}"
                    alt="SPTRDITZ Contemporary Youth Fashion"
                    fetchpriority="high"
                >

            </div>

        </section>



        <!-- =====================================================
             BRAND STATEMENT
        ====================================================== -->

        <section class="brand-statement">

            <div class="brand-statement-label">

                <span>
                    01
                </span>

                <span>
                    BRAND STATEMENT
                </span>

            </div>


            <div class="brand-statement-content">

                <h2>
                    MORE THAN<br>
                    JUST CLOTHES.
                </h2>


                <div class="brand-statement-text">

                    <p>
                        SPTRDITZ explores contemporary fashion through
                        clothing, graphics and visual culture.
                    </p>

                    <p>
                        Built around a modern perspective and a
                        constantly evolving generation.
                    </p>

                </div>

            </div>

        </section>



        <!-- =====================================================
             CATEGORY
        ====================================================== -->

        <section class="category-section">

            <div class="category-header">

                <div class="category-label">

                    <span>
                        02
                    </span>

                    <span>
                        CATEGORY
                    </span>

                </div>


                <p>
                    EXPLORE BY CATEGORY
                </p>

            </div>


            <div class="category-list">

                <button
                    type="button"
                    class="category-item active"
                    data-category="all"
                >
                    ALL
                </button>


                <button
                    type="button"
                    class="category-item"
                    data-category="t-shirts"
                >
                    T-SHIRTS
                </button>


                <button
                    type="button"
                    class="category-item"
                    data-category="boxy-tees"
                >
                    BOXY TEES
                </button>


                <button
                    type="button"
                    class="category-item"
                    data-category="fitted-tees"
                >
                    FITTED TEES
                </button>


                <button
                    type="button"
                    class="category-item"
                    data-category="workshirts"
                >
                    WORKSHIRTS
                </button>


                <button
                    type="button"
                    class="category-item"
                    data-category="jeans"
                >
                    JEANS
                </button>

            </div>

        </section>



        <!-- =====================================================
             CAMPAIGN
        ====================================================== -->

        <section class="campaign-section">

            <div class="campaign-header">

                <div class="campaign-label">

                    <span>
                        03
                    </span>

                    <span>
                        CAMPAIGN
                    </span>

                </div>


                <p>
                    SPTRDITZ VISUAL CAMPAIGN
                </p>

            </div>


            <div class="campaign-content">

                <div class="campaign-image">

                    <img
                        src="{{ asset('assets/images/campaign-image.png') }}"
                        alt="SPTRDITZ Visual Campaign"
                        loading="lazy"
                    >

                </div>


                <div class="campaign-info">

                    <p class="campaign-year">
                        SPTRDITZ / 2026
                    </p>


                    <h2>
                        CONTEMPORARY<br>
                        YOUTH FASHION
                    </h2>


                    <p class="campaign-description">
                        A visual exploration of contemporary fashion,
                        attitude and culture through the SPTRDITZ
                        perspective.
                    </p>


                    <a
                        href="/collection"
                        class="campaign-button"
                    >
                        VIEW COLLECTION
                    </a>

                </div>

            </div>

        </section>



        <!-- =====================================================
             SHOP
        ====================================================== -->

        <section class="shop">

            <div class="shop-section-label">

                <span>
                    04
                </span>

                <span>
                    SHOP
                </span>

            </div>


            <div class="product-grid">


                <!-- PRODUCT 01 -->

                <a
                    href="/product-detail?id=1"
                    class="product-card"
                    data-product-id="1"
                    data-category="t-shirts"
                >

                    <img
                        src="{{ asset('assets/images/product-1.png') }}"
                        alt="SPTRDITZ Product 01"
                        loading="lazy"
                    >

                    <h3>
                        SPTRDITZ PRODUCT 01
                    </h3>

                    <p>
                        Rp249.000
                    </p>

                </a>



                <!-- PRODUCT 02 -->

                <a
                    href="/product-detail?id=2"
                    class="product-card"
                    data-product-id="2"
                    data-category="boxy-tees"
                >

                    <img
                        src="{{ asset('assets/images/product-2.png') }}"
                        alt="SPTRDITZ Product 02"
                        loading="lazy"
                    >

                    <h3>
                        SPTRDITZ PRODUCT 02
                    </h3>

                    <p>
                        Rp249.000
                    </p>

                </a>



                <!-- PRODUCT 03 -->

                <a
                    href="/product-detail?id=3"
                    class="product-card"
                    data-product-id="3"
                    data-category="fitted-tees"
                >

                    <img
                        src="{{ asset('assets/images/product-3.png') }}"
                        alt="SPTRDITZ Product 03"
                        loading="lazy"
                    >

                    <h3>
                        SPTRDITZ PRODUCT 03
                    </h3>

                    <p>
                        Rp249.000
                    </p>

                </a>



                <!-- PRODUCT 04 -->

                <a
                    href="/product-detail?id=4"
                    class="product-card"
                    data-product-id="4"
                    data-category="workshirts"
                >

                    <img
                        src="{{ asset('assets/images/product-4.png') }}"
                        alt="SPTRDITZ Product 04"
                        loading="lazy"
                    >

                    <h3>
                        SPTRDITZ PRODUCT 04
                    </h3>

                    <p>
                        Rp249.000
                    </p>

                </a>



                <!-- PRODUCT 05 -->

                <a
                    href="/product-detail?id=5"
                    class="product-card"
                    data-product-id="5"
                    data-category="t-shirts"
                >

                    <div class="product-placeholder">

                        <span>
                            PRODUCT 05
                        </span>

                        <small>
                            IMAGE PLACEHOLDER
                        </small>

                    </div>


                    <h3>
                        SPTRDITZ PRODUCT 05
                    </h3>

                    <p>
                        Rp249.000
                    </p>

                </a>



                <!-- PRODUCT 06 -->

                <a
                    href="/product-detail?id=6"
                    class="product-card"
                    data-product-id="6"
                    data-category="boxy-tees"
                >

                    <div class="product-placeholder">

                        <span>
                            PRODUCT 06
                        </span>

                        <small>
                            IMAGE PLACEHOLDER
                        </small>

                    </div>


                    <h3>
                        SPTRDITZ PRODUCT 06
                    </h3>

                    <p>
                        Rp249.000
                    </p>

                </a>



                <!-- PRODUCT 07 -->

                <a
                    href="/product-detail?id=7"
                    class="product-card"
                    data-product-id="7"
                    data-category="jeans"
                >

                    <div class="product-placeholder">

                        <span>
                            PRODUCT 07
                        </span>

                        <small>
                            IMAGE PLACEHOLDER
                        </small>

                    </div>


                    <h3>
                        SPTRDITZ PRODUCT 07
                    </h3>

                    <p>
                        Rp249.000
                    </p>

                </a>



                <!-- PRODUCT 08 -->

                <a
                    href="/product-detail?id=8"
                    class="product-card"
                    data-product-id="8"
                    data-category="jeans"
                >

                    <div class="product-placeholder">

                        <span>
                            PRODUCT 08
                        </span>

                        <small>
                            IMAGE PLACEHOLDER
                        </small>

                    </div>


                    <h3>
                        SPTRDITZ PRODUCT 08
                    </h3>

                    <p>
                        Rp249.000
                    </p>

                </a>

            </div>

        </section>



        <!-- =====================================================
             ABOUT + CULTURE
        ====================================================== -->

        <section class="about-section">

            <div class="about-header">

                <div class="about-label">

                    <span>
                        05
                    </span>

                    <span>
                        ABOUT + CULTURE
                    </span>

                </div>


                <p>
                    SPTRDITZ
                </p>

            </div>


            <div class="about-content">


                <div class="about-image">

                    <img
                        src="{{ asset('assets/images/about-image.png') }}"
                        alt="SPTRDITZ About and Culture"
                        loading="lazy"
                    >

                </div>



                <div class="about-info">

                    <div class="about-brand">

                        <span>
                            SPTRDITZ
                        </span>

                        <span class="about-brand-line"></span>

                    </div>


                    <h2>
                        THE CULTURE<br>
                        BEHIND THE<br>
                        CLOTHING.
                    </h2>


                    <div class="about-description">

                        <p>
                            SPTRDITZ is more than just a clothing brand.
                            It represents a generation that keeps moving,
                            creating, and finding meaning in what they wear.
                        </p>


                        <p>
                            We build not only clothing,
                            but also a culture of perspectives,
                            attitudes, and everyday stories.
                        </p>

                    </div>


                    <div class="about-meta">

                        <span>
                            CULTURE / 2026
                        </span>

                    </div>

                </div>

            </div>

        </section>



        <!-- =====================================================
             CTA
        ====================================================== -->

        <section class="cta-section">

            <div class="cta-label">

                <span>
                    06
                </span>

                <span>
                    CTA
                </span>

            </div>


            <div class="cta-content">

                <p class="cta-small">
                    SPTRDITZ / CONTEMPORARY FASHION
                </p>


                <h2>
                    DEFINE YOUR<br>
                    OWN STYLE.
                </h2>


                <p class="cta-description">
                    Explore the collection and discover a visual
                    language built around contemporary youth culture.
                </p>


                <a
                    href="/collection"
                    class="cta-button"
                >
                    EXPLORE COLLECTION
                </a>

            </div>

        </section>



        <!-- =====================================================
             FOOTER
        ====================================================== -->

        <footer class="footer">

            <div class="footer-top">


                <div class="footer-brand">

                    <img
                        src="{{ asset('assets/images/logo-sptrditz.png') }}"
                        alt="SPTRDITZ"
                        loading="lazy"
                    >

                    <p>
                        CONTEMPORARY YOUTH FASHION
                    </p>

                </div>



                <div class="footer-links">


                    <!-- NAVIGATION -->

                    <div class="footer-column">

                        <span class="footer-title">
                            NAVIGATION
                        </span>


                        <a href="/">
                            Home
                        </a>


                        <a href="/shop">
                            Shop
                        </a>


                        <a href="/collection">
                            Collection
                        </a>


                        <a href="/about">
                            About
                        </a>


                        <a href="/contact">
                            Contact
                        </a>

                    </div>



                    <!-- SOCIAL -->

                    <div class="footer-column">

                        <span class="footer-title">
                            SOCIAL
                        </span>


                        <span>
                            Instagram
                        </span>


                        <span>
                            TikTok
                        </span>


                        <span>
                            WhatsApp
                        </span>

                    </div>



                    <!-- CONTACT -->

                    <div class="footer-column">

                        <span class="footer-title">
                            CONTACT
                        </span>


                        <a href="mailto:info@sptrditz.com">
                            info@sptrditz.com
                        </a>


                        <a href="/contact">
                            Contact Page
                        </a>


                        <span>
                            Indonesia
                        </span>

                    </div>

                </div>

            </div>



            <div class="footer-bottom">

                <span>
                    © 2026 SPTRDITZ
                </span>


                <span>
                    ALL RIGHTS RESERVED
                </span>

            </div>

        </footer>


    </main>

</body>

</html>