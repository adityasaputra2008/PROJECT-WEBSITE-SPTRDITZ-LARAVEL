<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SPTRDITZ COLLECTION</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

<header class="navbar">

    <div class="logo">
        <a href="/" aria-label="SPTRDITZ Home">
            <img
                src="{{ asset('assets/images/logo-sptrditz.png') }}"
                alt="SPTRDITZ"
            >
        </a>
    </div>

    <nav class="nav-menu" aria-label="Main Navigation">

        <a href="/">Home</a>

        <a href="/shop">Shop</a>

        <a href="/collection" aria-current="page">
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

<main>

    <section class="collection-page-header">
        <p>SPTRDITZ / COLLECTION</p>

        <h1>DROP 01</h1>

        <p>A selection of products from the first SPTRDITZ collection.</p>
    </section>

    <section class="collection-products">

        <div class="collection-products-header">
            <p>SPTRDITZ / DROP 01</p>

            <span>
                {{ str_pad($products->count(), 2, '0', STR_PAD_LEFT) }}
                {{ $products->count() === 1 ? 'PRODUCT' : 'PRODUCTS' }}
            </span>
        </div>

        <div class="collection-product-grid">

            @forelse ($products as $product)

                <a
                    href="{{ route('products.show', $product->slug) }}"
                    class="collection-product-card"
                >

                    <div class="collection-product-image">
                        <img
                            src="{{ asset('assets/images/' . $product->image) }}"
                            alt="{{ $product->name }}"
                        >
                    </div>

                    <div class="collection-product-info">
                        <h3>{{ $product->name }}</h3>

                        <p>
                            Rp{{ number_format((float) $product->price, 0, ',', '.') }}
                        </p>
                    </div>

                </a>

            @empty

                <p class="collection-empty">
                    No products available at the moment.
                </p>

            @endforelse

        </div>

    </section>

    <section class="collection-page-cta">

        <p>SPTRDITZ / CONTEMPORARY FASHION</p>

        <h2>
            EXPLORE<br>
            THE COLLECTION.
        </h2>

        <a href="/shop" class="collection-cta-button">
            VIEW SHOP
        </a>

    </section>

</main>

</body>
</html>
