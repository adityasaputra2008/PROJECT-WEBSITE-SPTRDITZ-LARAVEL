<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>SPTRDITZ — CONTACT</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

    <!-- NAVBAR -->
    <header class="navbar">

        <div class="logo">
            <a href="/">
                <img
                    src="{{ asset('assets/images/logo-sptrditz.png') }}"
                    alt="SPTRDITZ"
                >
            </a>
        </div>

        <nav class="nav-menu">
            <a href="/">Home</a>
            <a href="/shop">Shop</a>
            <a href="/collection">Collection</a>
            <a href="/about">About</a>
            <a
                href="/contact"
                aria-current="page"
            >
                Contact
            </a>
        </nav>

        <div class="nav-actions">
            <a href="/shop#shop-search">Search</a>
            <a href="/cart">Cart</a>
        </div>

    </header>


    <!-- CONTACT PAGE -->
    <main class="contact-page">

        <!-- CONTACT HEADER -->
        <section class="contact-page-header">

            <div class="contact-page-label">
                <span>05</span>
                <span>CONTACT</span>
            </div>

            <div class="contact-page-heading">

                <div>

                    <p class="contact-page-eyebrow">
                        GET IN TOUCH
                    </p>

                    <h1>
                        LET'S TALK.
                    </h1>

                </div>

                <div class="contact-page-intro">

                    <p>
                        Have a question, collaboration idea, or simply want
                        to connect with SPTRDITZ? Send us a message.
                    </p>

                </div>

            </div>

        </section>


        <!-- CONTACT CONTENT -->
        <section class="contact-page-content">

            <div class="contact-page-grid">

                <!-- CONTACT INFORMATION -->
                <div class="contact-page-info">

                    <div class="contact-info-heading">

                        <span>CONTACT</span>

                        <div class="contact-info-line"></div>

                    </div>

                    <h2>
                        CONNECT<br>
                        WITH US.
                    </h2>

                    <p class="contact-info-description">
                        For questions, collaborations, or general inquiries,
                        feel free to reach out through any of the channels below.
                    </p>


                    <div class="contact-details">

                        <div class="contact-detail-item">

                            <span class="contact-detail-label">
                                WHATSAPP
                            </span>

                            <span>
                                +62 000 0000 0000
                            </span>

                        </div>


                        <div class="contact-detail-item">

                            <span class="contact-detail-label">
                                EMAIL
                            </span>

                            <a href="mailto:info@sptrditz.com">
                                info@sptrditz.com
                            </a>

                        </div>


                        <div class="contact-detail-item">

                            <span class="contact-detail-label">
                                INSTAGRAM
                            </span>

                            <span>
                                @sptrditz
                            </span>

                        </div>


                        <div class="contact-detail-item">

                            <span class="contact-detail-label">
                                TIKTOK
                            </span>

                            <span>
                                @sptrditz
                            </span>

                        </div>

                    </div>

                </div>


                <!-- CONTACT FORM -->
                <div class="contact-page-form">

                    <div class="contact-form-heading">
                        <span>MESSAGE</span>
                    </div>


                    <form>

                        <div class="contact-form-field">

                            <label for="name">
                                NAME
                            </label>

                            <input
                                type="text"
                                id="name"
                                name="name"
                                placeholder="Your name"
                            >

                        </div>


                        <div class="contact-form-field">

                            <label for="email">
                                EMAIL
                            </label>

                            <input
                                type="email"
                                id="email"
                                name="email"
                                placeholder="Your email"
                            >

                        </div>


                        <div class="contact-form-field">

                            <label for="subject">
                                SUBJECT
                            </label>

                            <input
                                type="text"
                                id="subject"
                                name="subject"
                                placeholder="Subject"
                            >

                        </div>


                        <div class="contact-form-field">

                            <label for="message">
                                MESSAGE
                            </label>

                            <textarea
                                id="message"
                                name="message"
                                rows="7"
                                placeholder="Write your message..."
                            ></textarea>

                        </div>


                        <button
                            type="button"
                            class="contact-submit"
                        >
                            SEND MESSAGE
                        </button>

                    </form>

                </div>

            </div>

        </section>


        <!-- CTA -->
        <section class="cta-section">

            <div class="cta-content">

                <p class="cta-label">
                    SPTRDITZ COLLECTION
                </p>

                <h2>
                    FIND YOUR OWN<br>
                    EXPRESSION.
                </h2>

                <a
                    href="/collection"
                    class="cta-button"
                >
                    VIEW COLLECTION
                </a>

            </div>

        </section>

    </main>


    <!-- FOOTER -->
    <footer class="footer">

        <div class="footer-top">

            <!-- FOOTER BRAND -->
            <div class="footer-brand">

                <img
                    src="{{ asset('assets/images/logo-sptrditz.png') }}"
                    alt="SPTRDITZ"
                >

                <p>
                    Modern clothing designed for a new generation.
                </p>

            </div>


            <!-- FOOTER NAVIGATION -->
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


            <!-- FOOTER SOCIAL -->
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


            <!-- FOOTER CONTACT -->
            <div class="footer-column">

                <span class="footer-title">
                    CONTACT
                </span>

                <span>
                    WhatsApp
                </span>

                <a href="mailto:info@sptrditz.com">
                    Email
                </a>

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


    

</body>

</html>
