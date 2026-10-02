<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>SPTRDITZ COLLECTION</title>

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
            <a
                href="/collection"
                aria-current="page"
            >
                Collection
            </a>
            <a href="/about">About</a>
            <a href="/contact">Contact</a>
        </nav>

        <div class="nav-actions">
            <a href="/shop#shop-search">Search</a>
            <a href="/cart">Cart</a>
        </div>

    </header>


    <!-- COLLECTION HEADER -->
    <main>

        <section class="collection-page-header">

            <div class="collection-page-label">
                <span>01</span>
                <span>COLLECTION</span>
            </div>

            <div class="collection-page-heading">

                <div>

                    <p class="collection-page-eyebrow">
                        SPTRDITZ / COLLECTION
                    </p>

                    <h1>
                        DROP 01
                    </h1>

                </div>

                <div class="collection-page-intro">

                    <p>
                        A selection of products from the first
                        SPTRDITZ collection.
                    </p>

                </div>

            </div>

        </section>


        <!-- COLLECTION PRODUCTS -->
        <section class="collection-products">

            <div class="collection-products-header">

                <p>
                    SPTRDITZ / DROP 01
                </p>

                <span>
                    04 PRODUCTS
                </span>

            </div>


            <div class="collection-product-grid">


                <!-- PRODUCT 01 -->
                <a
                    href="/product-detail?id=1"
                    class="collection-product-card"
                >

                    <div class="collection-product-image">

                        <img
                            src="{{ asset('assets/images/product-1.png') }}"
                            alt="SPTRDITZ Product 01"
                        >

                    </div>

                    <div class="collection-product-info">

                        <h3>
                            SPTRDITZ PRODUCT 01
                        </h3>

                        <p>
                            Rp249.000
                        </p>

                    </div>

                </a>


                <!-- PRODUCT 02 -->
                <a
                    href="/product-detail?id=2"
                    class="collection-product-card"
                >

                    <div class="collection-product-image">

                        <img
                            src="{{ asset('assets/images/product-2.png') }}"
                            alt="SPTRDITZ Product 02"
                        >

                    </div>

                    <div class="collection-product-info">

                        <h3>
                            SPTRDITZ PRODUCT 02
                        </h3>

                        <p>
                            Rp249.000
                        </p>

                    </div>

                </a>


                <!-- PRODUCT 03 -->
                <a
                    href="/product-detail?id=3"
                    class="collection-product-card"
                >

                    <div class="collection-product-image">

                        <img
                            src="{{ asset('assets/images/product-3.png') }}"
                            alt="SPTRDITZ Product 03"
                        >

                    </div>

                    <div class="collection-product-info">

                        <h3>
                            SPTRDITZ PRODUCT 03
                        </h3>

                        <p>
                            Rp249.000
                        </p>

                    </div>

                </a>


                <!-- PRODUCT 04 -->
                <a
                    href="/product-detail?id=4"
                    class="collection-product-card"
                >

                    <div class="collection-product-image">

                        <img
                            src="{{ asset('assets/images/product-4.png') }}"
                            alt="SPTRDITZ Product 04"
                        >

                    </div>

                    <div class="collection-product-info">

                        <h3>
                            SPTRDITZ PRODUCT 04
                        </h3>

                        <p>
                            Rp249.000
                        </p>

                    </div>

                </a>


            </div>

        </section>


        <!-- COLLECTION CTA -->
        <section class="collection-page-cta">

            <p>
                SPTRDITZ / CONTEMPORARY FASHION
            </p>

            <h2>
                EXPLORE<br>
                THE COLLECTION.
            </h2>

            <a
                href="/shop"
                class="collection-cta-button"
            >
                VIEW SHOP
            </a>

        </section>

    </main>


    <!-- JAVASCRIPT -->
    

</body>

</html>
