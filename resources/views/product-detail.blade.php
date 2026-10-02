<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>SPTRDITZ PRODUCT</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>


<body>


    <!-- =========================================================
         NAVBAR
    ========================================================== -->

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



    <!-- =========================================================
         PRODUCT DETAIL
    ========================================================== -->

    <main>

        <section class="product-detail">


            <!-- =================================================
                 PRODUCT IMAGE
            ================================================== -->

            <div class="product-detail-image">

                <img
                    src="{{ asset('assets/images/product-1.png') }}"
                    alt="SPTRDITZ Product"
                    id="product-detail-image"
                >

            </div>



            <!-- =================================================
                 PRODUCT INFORMATION
            ================================================== -->

            <div class="product-detail-info">


                <p
                    class="product-detail-category"
                    id="product-detail-category"
                >
                    SPTRDITZ COLLECTION
                </p>


                <h1 id="product-detail-title">
                    SPTRDITZ PRODUCT
                </h1>


                <p
                    class="product-detail-price"
                    id="product-detail-price"
                >
                    Rp249.000
                </p>


                <div class="product-detail-divider"></div>



                <!-- =================================================
                     DESCRIPTION
                ================================================== -->

                <p
                    class="product-detail-description"
                    id="product-detail-description"
                >
                    Modern clothing designed for a new generation.
                </p>



                <!-- =================================================
                     SIZE
                ================================================== -->

                <div class="product-size">

                    <p class="size-title">
                        SIZE
                    </p>


                    <div class="size-options">

                        <button
                            type="button"
                            class="size-option"
                        >
                            S
                        </button>


                        <button
                            type="button"
                            class="size-option"
                        >
                            M
                        </button>


                        <button
                            type="button"
                            class="size-option"
                        >
                            L
                        </button>


                        <button
                            type="button"
                            class="size-option"
                        >
                            XL
                        </button>

                    </div>

                </div>



                <!-- =================================================
                     QUANTITY
                ================================================== -->

                <div class="product-quantity">

                    <p class="quantity-title">
                        QUANTITY
                    </p>


                    <div class="quantity-control">

                        <button
                            type="button"
                            class="quantity-minus"
                        >
                            -
                        </button>


                        <span class="quantity-value">
                            1
                        </span>


                        <button
                            type="button"
                            class="quantity-plus"
                        >
                            +
                        </button>

                    </div>

                </div>



                <!-- =================================================
                     ADD TO CART
                ================================================== -->

                <button
                    type="button"
                    class="add-to-cart"
                >
                    ADD TO CART
                </button>


            </div>

        </section>

    </main>



    <!-- =========================================================
         JAVASCRIPT
    ========================================================== -->

    


</body>

</html>
