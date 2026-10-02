<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>About — SPTRDITZ COLLECTION</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>


<body>


    <!-- =====================================================
         NAVBAR
    ====================================================== -->

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

            <a
                href="/about"
                aria-current="page"
            >
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



    <!-- =====================================================
         ABOUT PAGE
    ====================================================== -->

    <main>


        <!-- ABOUT INTRO -->

        <section class="about-page-intro">

            <div class="about-page-top">

                <span>
                    ABOUT
                </span>

                <span>
                    SPTRDITZ COLLECTION
                </span>

            </div>


            <div class="about-page-intro-content">

                <div class="about-page-intro-title">

                    <p>
                        WHO WE ARE
                    </p>

                    <h1>
                        MORE THAN<br>
                        JUST CLOTHES.
                    </h1>

                </div>


                <div class="about-page-intro-text">

                    <p>
                        SPTRDITZ COLLECTION is a contemporary
                        fashion brand built around identity,
                        expression, and everyday culture.
                    </p>

                </div>

            </div>

        </section>



        <!-- =================================================
             OUR STORY
        ================================================== -->

        <section class="about-page-story">

            <div class="about-page-section-label">

                <span>
                    01 / OUR STORY
                </span>

                <span>
                    SPTRDITZ COLLECTION
                </span>

            </div>


            <div class="about-page-story-content">

                <div class="about-page-story-heading">

                    <p>
                        THE BRAND
                    </p>

                    <h2>
                        BUILT FOR<br>
                        A NEW GENERATION.
                    </h2>

                </div>


                <div class="about-page-story-description">

                    <p>
                        SPTRDITZ COLLECTION was created as a
                        contemporary fashion brand that connects
                        clothing with identity and everyday
                        expression.
                    </p>

                    <p>
                        We believe clothing is more than something
                        to wear. It can become part of how people
                        express themselves, their perspective, and
                        the culture around them.
                    </p>

                    <p>
                        Every piece is developed with a focus on
                        modern form, visual character, and
                        wearability.
                    </p>

                </div>

            </div>

        </section>



        <!-- =================================================
             ABOUT IMAGE
        ================================================== -->

        <section class="about-page-image-section">

            <div class="about-page-image">

                <img
                    src="{{ asset('assets/images/about-image.png') }}"
                    alt="SPTRDITZ Collection"
                    loading="lazy"
                >

            </div>

        </section>



        <!-- =================================================
             OUR CULTURE
        ================================================== -->

        <section class="about-page-culture">

            <div class="about-page-section-label">

                <span>
                    02 / OUR CULTURE
                </span>

                <span>
                    THE APPROACH
                </span>

            </div>


            <div class="about-page-culture-intro">

                <h2>
                    IDENTITY IN<br>
                    EVERY DETAIL.
                </h2>

                <p>
                    SPTRDITZ explores fashion through a
                    contemporary perspective — combining
                    identity, expression, and lifestyle into
                    pieces made for everyday movement.
                </p>

            </div>


            <div class="about-page-culture-grid">


                <div class="about-page-culture-item">

                    <span>
                        01
                    </span>

                    <h3>
                        IDENTITY
                    </h3>

                    <p>
                        Clothing becomes part of personal
                        identity and the way we present
                        ourselves.
                    </p>

                </div>



                <div class="about-page-culture-item">

                    <span>
                        02
                    </span>

                    <h3>
                        EXPRESSION
                    </h3>

                    <p>
                        Every piece carries a visual character
                        that leaves space for individual
                        expression.
                    </p>

                </div>



                <div class="about-page-culture-item">

                    <span>
                        03
                    </span>

                    <h3>
                        LIFESTYLE
                    </h3>

                    <p>
                        SPTRDITZ is designed to live beyond
                        trends and become part of everyday
                        lifestyle.
                    </p>

                </div>

            </div>

        </section>



        <!-- =================================================
             BRAND STATEMENT
        ================================================== -->

        <section class="about-page-statement">

            <p>
                SPTRDITZ COLLECTION
            </p>

            <h2>
                MORE THAN<br>
                JUST CLOTHES.
            </h2>

            <span>
                IT'S A LIFESTYLE.
            </span>

        </section>



        <!-- =================================================
             ABOUT CTA
        ================================================== -->

        <section class="about-page-cta">

            <p>
                EXPLORE SPTRDITZ
            </p>

            <h2>
                FIND YOUR<br>
                OWN EXPRESSION.
            </h2>

            <a
                href="/collection"
                class="about-page-cta-button"
            >
                VIEW COLLECTION
            </a>

        </section>

    </main>



    <!-- =====================================================
         FOOTER
    ====================================================== -->

    <footer class="footer">

        <div class="footer-top">


            <div class="footer-brand">

                <a
                    href="/"
                    aria-label="SPTRDITZ Home"
                >

                    <img
                        src="{{ asset('assets/images/logo-sptrditz.png') }}"
                        alt="SPTRDITZ"
                        loading="lazy"
                    >

                </a>

                <p>
                    SPTRDITZ COLLECTION
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

                </div>



                <!-- CONTACT -->

                <div class="footer-column">

                    <span class="footer-title">
                        CONTACT
                    </span>

                    <span>
                        WhatsApp
                    </span>

                    <span>
                        Email
                    </span>

                </div>

            </div>

        </div>



        <div class="footer-bottom">

            <span>
                © 2026 SPTRDITZ COLLECTION
            </span>

            <span>
                ALL RIGHTS RESERVED
            </span>

        </div>

    </footer>



    <!-- JAVASCRIPT -->

    


</body>

</html>
