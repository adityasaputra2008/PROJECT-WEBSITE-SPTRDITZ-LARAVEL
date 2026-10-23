<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $product->name }} | SPTRDITZ COLLECTION</title>

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
            <a href="/contact">Contact</a>
        </nav>

        <div class="nav-actions">
            <a href="/shop#shop-search">Search</a>
            <a href="/cart">Cart</a>
        </div>

    </header>

    <!-- PRODUCT DETAIL -->
    <main>

        <section
            class="product-detail"
            data-product-id="{{ $product->id }}"
            data-product-name="{{ $product->name }}"
            data-product-category="{{ $product->category ?? 'SPTRDITZ COLLECTION' }}"
            data-product-price="{{ $product->price }}"
            data-product-image="{{ $product->image ? asset('assets/images/' . $product->image) : '' }}"
            data-product-description="{{ $product->description ?? '' }}"
        >

            <!-- PRODUCT IMAGE -->
            <div class="product-detail-image">

                @if ($product->image)
                    <img
                        src="{{ asset('assets/images/' . $product->image) }}"
                        alt="{{ $product->name }}"
                        id="product-detail-image"
                    >
                @else
                    <img
                        src=""
                        alt="{{ $product->name }}"
                        id="product-detail-image"
                        style="display: none;"
                    >
                @endif

            </div>

            <!-- PRODUCT INFORMATION -->
            <div class="product-detail-info">

                <p
                    class="product-detail-category"
                    id="product-detail-category"
                >
                    {{ strtoupper($product->category ?? 'SPTRDITZ COLLECTION') }}
                </p>

                <h1 id="product-detail-title">
                    {{ $product->name }}
                </h1>

                <p
                    class="product-detail-price"
                    id="product-detail-price"
                >
                    Rp{{ number_format((float) $product->price, 0, ',', '.') }}
                </p>

                <div class="product-detail-divider"></div>

                <!-- DESCRIPTION -->
                <p
                    class="product-detail-description"
                    id="product-detail-description"
                >
                    {{ $product->description ?? 'Modern clothing designed for a new generation.' }}
                </p>

                <!-- SIZE -->
                <div class="product-size">

                    <p class="size-title">SIZE</p>

                    <div class="size-options">

                        <button
                            type="button"
                            class="size-option"
                            data-size="S"
                            aria-pressed="false"
                        >
                            S
                        </button>

                        <button
                            type="button"
                            class="size-option"
                            data-size="M"
                            aria-pressed="false"
                        >
                            M
                        </button>

                        <button
                            type="button"
                            class="size-option"
                            data-size="L"
                            aria-pressed="false"
                        >
                            L
                        </button>

                        <button
                            type="button"
                            class="size-option"
                            data-size="XL"
                            aria-pressed="false"
                        >
                            XL
                        </button>

                    </div>

                </div>

                <!-- QUANTITY -->
                <div class="product-quantity">

                    <p class="quantity-title">QUANTITY</p>

                    <div class="quantity-control">

                        <button
                            type="button"
                            class="quantity-minus"
                            aria-label="Decrease quantity"
                        >
                            -
                        </button>

                        <span class="quantity-value">1</span>

                        <button
                            type="button"
                            class="quantity-plus"
                            aria-label="Increase quantity"
                        >
                            +
                        </button>

                    </div>

                </div>

                <!-- ADD TO CART -->
                <button
                    type="button"
                    class="add-to-cart"
                >
                    ADD TO CART
                </button>

            </div>

        </section>

    </main>

</body>
</html>
