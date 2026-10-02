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
        content="Shop the SPTRDITZ contemporary fashion collection."
    >

    <title>Shop — SPTRDITZ</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])


    <style>

        /* =========================================================
           SHOP SEARCH
        ========================================================== */

        .shop-search-section {
            padding: 0 6vw 70px;
        }

        .shop-search-wrap {
            display: flex;
            align-items: center;

            border-bottom: 1px solid rgba(255, 255, 255, 0.25);

            padding-bottom: 14px;
        }

        .shop-search-label {
            font-size: 11px;
            letter-spacing: 0.16em;
            text-transform: uppercase;

            margin-right: 25px;

            white-space: nowrap;

            opacity: 0.6;
        }

        .shop-search-input {
            width: 100%;

            background: transparent;
            border: none;
            outline: none;

            color: #fff;

            font-family: inherit;
            font-size: 15px;
            letter-spacing: 0.04em;
        }

        .shop-search-input::placeholder {
            color: rgba(255, 255, 255, 0.4);
        }


        /* =========================================================
           NO RESULTS
        ========================================================== */

        .shop-no-results {
            display: none;

            width: 100%;

            padding: 80px 20px;

            text-align: center;

            font-size: 12px;
            letter-spacing: 0.18em;
            text-transform: uppercase;

            opacity: 0.55;
        }


        /* =========================================================
           PRODUCT PLACEHOLDER
        ========================================================== */

        .shop-product-placeholder {
            width: 100%;
            height: 100%;
            min-height: 420px;

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

        .shop-product-placeholder span {
            display: block;

            font-size: 11px;
            letter-spacing: 0.18em;
            text-transform: uppercase;

            opacity: 0.7;
        }

        .shop-product-placeholder small {
            display: block;

            margin-top: 8px;

            font-size: 9px;
            letter-spacing: 0.14em;
            text-transform: uppercase;

            opacity: 0.35;
        }


        /* =========================================================
           MOBILE
        ========================================================== */

        @media (max-width: 768px) {

            .shop-search-section {
                padding: 0 5vw 50px;
            }

            .shop-search-wrap {
                display: block;
            }

            .shop-search-label {
                display: block;

                margin-right: 0;
                margin-bottom: 12px;
            }

            .shop-search-input {
                font-size: 14px;
            }

            .shop-product-placeholder {
                min-height: 320px;
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

            <a
                href="/shop"
                aria-current="page"
            >
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
             SHOP HEADER
        ====================================================== -->

        <section class="shop-page-header">


            <div class="shop-page-label">

                <span>
                    08
                </span>

                <span>
                    SHOP
                </span>

            </div>



            <div class="shop-page-heading">


                <div>

                    <p class="shop-page-eyebrow">
                        SPTRDITZ / COLLECTION
                    </p>

                    <h1>
                        SHOP
                        <br>
                        COLLECTION.
                    </h1>

                </div>



                <p class="shop-page-description">
                    Explore the latest SPTRDITZ collection,
                    built around contemporary fashion,
                    graphics and culture.
                </p>


            </div>


        </section>



        <!-- =====================================================
             SHOP SEARCH
        ====================================================== -->

        <section
            class="shop-search-section"
            id="shop-search"
        >


            <div class="shop-search-wrap">


                <span class="shop-search-label">
                    SEARCH
                </span>


                <input
                    type="search"
                    id="shop-search-input"
                    class="shop-search-input"
                    placeholder="Search products..."
                    autocomplete="off"
                    aria-label="Search products"
                >


            </div>


        </section>



        <!-- =====================================================
             SHOP FILTER
        ====================================================== -->

        <section class="shop-filter-section">


            <div class="shop-filter-header">

                <span>
                    EXPLORE BY CATEGORY
                </span>

                <span id="shop-filter-status">
                    ALL PRODUCTS
                </span>

            </div>



            <div class="shop-filter-list">


                <button
                    type="button"
                    class="shop-filter-item active"
                    data-category="all"
                >
                    ALL
                </button>


                <button
                    type="button"
                    class="shop-filter-item"
                    data-category="t-shirts"
                >
                    T-SHIRTS
                </button>


                <button
                    type="button"
                    class="shop-filter-item"
                    data-category="boxy-tees"
                >
                    BOXY TEES
                </button>


                <button
                    type="button"
                    class="shop-filter-item"
                    data-category="fitted-tees"
                >
                    FITTED TEES
                </button>


                <button
                    type="button"
                    class="shop-filter-item"
                    data-category="workshirts"
                >
                    WORKSHIRTS
                </button>


                <button
                    type="button"
                    class="shop-filter-item"
                    data-category="jeans"
                >
                    JEANS
                </button>


            </div>


        </section>



        <!-- =====================================================
             PRODUCT COLLECTION
        ====================================================== -->

        <section class="shop-products-section">


            <div class="shop-products-header">


                <div>

                    <span class="shop-products-label">
                        SPTRDITZ COLLECTION
                    </span>


                    <h2 id="shop-products-title">
                        ALL PRODUCTS
                    </h2>

                </div>



                <span
                    class="shop-products-count"
                    id="shop-products-count"
                >
                    08 PRODUCTS
                </span>


            </div>



            <div class="shop-product-grid">


                <!-- =================================================
                     PRODUCT 01
                ================================================== -->

                <a
                    href="/product-detail?id=1"
                    class="shop-product-card"
                    data-product-id="1"
                    data-category="t-shirts"
                >

                    <div class="shop-product-image">

                        <img
                            src="{{ asset('assets/images/product-1.png') }}"
                            alt="SPTRDITZ Product 01"
                            loading="lazy"
                        >

                    </div>



                    <div class="shop-product-info">

                        <div>

                            <h3>
                                SPTRDITZ PRODUCT 01
                            </h3>

                            <p>
                                T-SHIRT
                            </p>

                        </div>


                        <span>
                            Rp249.000
                        </span>

                    </div>

                </a>



                <!-- =================================================
                     PRODUCT 02
                ================================================== -->

                <a
                    href="/product-detail?id=2"
                    class="shop-product-card"
                    data-product-id="2"
                    data-category="boxy-tees"
                >

                    <div class="shop-product-image">

                        <img
                            src="{{ asset('assets/images/product-2.png') }}"
                            alt="SPTRDITZ Product 02"
                            loading="lazy"
                        >

                    </div>



                    <div class="shop-product-info">

                        <div>

                            <h3>
                                SPTRDITZ PRODUCT 02
                            </h3>

                            <p>
                                BOXY TEE
                            </p>

                        </div>


                        <span>
                            Rp249.000
                        </span>

                    </div>

                </a>



                <!-- =================================================
                     PRODUCT 03
                ================================================== -->

                <a
                    href="/product-detail?id=3"
                    class="shop-product-card"
                    data-product-id="3"
                    data-category="fitted-tees"
                >

                    <div class="shop-product-image">

                        <img
                            src="{{ asset('assets/images/product-3.png') }}"
                            alt="SPTRDITZ Product 03"
                            loading="lazy"
                        >

                    </div>



                    <div class="shop-product-info">

                        <div>

                            <h3>
                                SPTRDITZ PRODUCT 03
                            </h3>

                            <p>
                                FITTED TEE
                            </p>

                        </div>


                        <span>
                            Rp249.000
                        </span>

                    </div>

                </a>



                <!-- =================================================
                     PRODUCT 04
                ================================================== -->

                <a
                    href="/product-detail?id=4"
                    class="shop-product-card"
                    data-product-id="4"
                    data-category="workshirts"
                >

                    <div class="shop-product-image">

                        <img
                            src="{{ asset('assets/images/product-4.png') }}"
                            alt="SPTRDITZ Product 04"
                            loading="lazy"
                        >

                    </div>



                    <div class="shop-product-info">

                        <div>

                            <h3>
                                SPTRDITZ PRODUCT 04
                            </h3>

                            <p>
                                WORKSHIRT
                            </p>

                        </div>


                        <span>
                            Rp249.000
                        </span>

                    </div>

                </a>



                <!-- =================================================
                     PRODUCT 05
                     PLACEHOLDER
                ================================================== -->

                <a
                    href="/product-detail?id=5"
                    class="shop-product-card"
                    data-product-id="5"
                    data-category="t-shirts"
                >

                    <div class="shop-product-image">

                        <div class="shop-product-placeholder">

                            <span>
                                PRODUCT 05
                            </span>

                            <small>
                                IMAGE PLACEHOLDER
                            </small>

                        </div>

                    </div>



                    <div class="shop-product-info">

                        <div>

                            <h3>
                                SPTRDITZ PRODUCT 05
                            </h3>

                            <p>
                                T-SHIRT
                            </p>

                        </div>


                        <span>
                            Rp249.000
                        </span>

                    </div>

                </a>



                <!-- =================================================
                     PRODUCT 06
                     PLACEHOLDER
                ================================================== -->

                <a
                    href="/product-detail?id=6"
                    class="shop-product-card"
                    data-product-id="6"
                    data-category="boxy-tees"
                >

                    <div class="shop-product-image">

                        <div class="shop-product-placeholder">

                            <span>
                                PRODUCT 06
                            </span>

                            <small>
                                IMAGE PLACEHOLDER
                            </small>

                        </div>

                    </div>



                    <div class="shop-product-info">

                        <div>

                            <h3>
                                SPTRDITZ PRODUCT 06
                            </h3>

                            <p>
                                BOXY TEE
                            </p>

                        </div>


                        <span>
                            Rp249.000
                        </span>

                    </div>

                </a>



                <!-- =================================================
                     PRODUCT 07
                     PLACEHOLDER
                ================================================== -->

                <a
                    href="/product-detail?id=7"
                    class="shop-product-card"
                    data-product-id="7"
                    data-category="jeans"
                >

                    <div class="shop-product-image">

                        <div class="shop-product-placeholder">

                            <span>
                                PRODUCT 07
                            </span>

                            <small>
                                IMAGE PLACEHOLDER
                            </small>

                        </div>

                    </div>



                    <div class="shop-product-info">

                        <div>

                            <h3>
                                SPTRDITZ PRODUCT 07
                            </h3>

                            <p>
                                JEANS
                            </p>

                        </div>


                        <span>
                            Rp249.000
                        </span>

                    </div>

                </a>



                <!-- =================================================
                     PRODUCT 08
                     PLACEHOLDER
                ================================================== -->

                <a
                    href="/product-detail?id=8"
                    class="shop-product-card"
                    data-product-id="8"
                    data-category="jeans"
                >

                    <div class="shop-product-image">

                        <div class="shop-product-placeholder">

                            <span>
                                PRODUCT 08
                            </span>

                            <small>
                                IMAGE PLACEHOLDER
                            </small>

                        </div>

                    </div>



                    <div class="shop-product-info">

                        <div>

                            <h3>
                                SPTRDITZ PRODUCT 08
                            </h3>

                            <p>
                                JEANS
                            </p>

                        </div>


                        <span>
                            Rp249.000
                        </span>

                    </div>

                </a>


            </div>



            <div
                class="shop-no-results"
                id="shop-no-results"
            >
                NO PRODUCTS FOUND
            </div>


        </section>



        <!-- =====================================================
             SHOP CTA
        ====================================================== -->

        <section class="shop-page-cta">


            <div class="shop-page-cta-label">

                <span>
                    SPTRDITZ
                </span>

                <span>
                    CONTEMPORARY FASHION
                </span>

            </div>



            <div class="shop-page-cta-content">

                <h2>
                    FIND YOUR
                    <br>
                    OWN STYLE.
                </h2>


                <p>
                    Discover contemporary pieces designed
                    around fashion, attitude and culture.
                </p>


                <a href="/">
                    BACK TO HOME
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


                        <a
                            href="/shop"
                            aria-current="page"
                        >
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



    <!-- =========================================================
         JAVASCRIPT
    ========================================================== -->

    


</body>

</html>

