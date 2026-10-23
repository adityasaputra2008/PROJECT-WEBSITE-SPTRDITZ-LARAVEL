/* =========================================================
   SPTRDITZ COLLECTION
   MAIN JAVASCRIPT
   PART 1 / 3

   Contains:
   - Product data
   - Helper functions
   - Toast notification
   - Cart count
   - Product detail
   - Quantity
   - Size selection
   - Add to cart
   ========================================================= */

document.addEventListener("DOMContentLoaded", () => {
    "use strict";

    /* =========================================================
       PRODUCT DATA
       ========================================================= */

    const products = [
        {
            id: 1,
            category: "T-SHIRTS",
            title: "SPTRDITZ T-SHIRT 01",
            price: 249000,
            image: "assets/images/product-1.png",
            description:
                "A clean SPTRDITZ essential designed for everyday wear."
        },

        {
            id: 2,
            category: "BOXY TEES",
            title: "SPTRDITZ BOXY TEE 02",
            price: 249000,
            image: "assets/images/product-2.png",
            description:
                "Relaxed proportions with a contemporary SPTRDITZ silhouette."
        },

        {
            id: 3,
            category: "FITTED TEES",
            title: "SPTRDITZ FITTED TEE 03",
            price: 249000,
            image: "assets/images/product-3.png",
            description:
                "A fitted everyday piece with a clean modern profile."
        },

        {
            id: 4,
            category: "WORKSHIRTS",
            title: "SPTRDITZ WORKSHIRT 04",
            price: 249000,
            image: "assets/images/product-4.png",
            description:
                "Structured workwear-inspired styling with a refined finish."
        },

        {
            id: 5,
            category: "T-SHIRTS",
            title: "SPTRDITZ T-SHIRT 05",
            price: 249000,
            image: null,
            description:
                "A versatile SPTRDITZ basic built for daily styling."
        },

        {
            id: 6,
            category: "BOXY TEES",
            title: "SPTRDITZ BOXY TEE 06",
            price: 249000,
            image: null,
            description:
                "A relaxed boxy silhouette designed for contemporary outfits."
        },

        {
            id: 7,
            category: "JEANS",
            title: "SPTRDITZ JEANS 07",
            price: 249000,
            image: null,
            description:
                "A straightforward denim essential with a modern streetwear character."
        },

        {
            id: 8,
            category: "JEANS",
            title: "SPTRDITZ JEANS 08",
            price: 249000,
            image: null,
            description:
                "A clean denim silhouette designed to work across everyday looks."
        }
    ];

    /* =========================================================
       HELPER FUNCTIONS
       ========================================================= */

    const getProductById = (id) => {
        return products.find(
            (product) => Number(product.id) === Number(id)
        );
    };

    const formatPrice = (price) => {
        return new Intl.NumberFormat("id-ID", {
            style: "currency",
            currency: "IDR",
            minimumFractionDigits: 0
        }).format(price);
    };

    const getCart = () => {
        try {
            const cart = JSON.parse(
                localStorage.getItem("cart")
            );

            return Array.isArray(cart) ? cart : [];
        } catch (error) {
            console.warn(
                "SPTRDITZ: Unable to read cart.",
                error
            );

            return [];
        }
    };

    const saveCart = (cart) => {
        localStorage.setItem(
            "cart",
            JSON.stringify(cart)
        );
    };

    const prefersReducedMotion = () => {
        return (
            window.matchMedia &&
            window.matchMedia(
                "(prefers-reduced-motion: reduce)"
            ).matches
        );
    };

    /* =========================================================
       TOAST NOTIFICATION
       ========================================================= */

    const showToast = (message) => {
        let toast = document.querySelector(
            ".sptrditz-toast"
        );

        if (!toast) {
            toast = document.createElement("div");

            toast.className =
                "sptrditz-toast";

            toast.setAttribute(
                "role",
                "status"
            );

            toast.setAttribute(
                "aria-live",
                "polite"
            );

            Object.assign(toast.style, {
                position: "fixed",
                left: "50%",
                bottom: "32px",
                transform:
                    "translate(-50%, 20px)",
                opacity: "0",
                zIndex: "99999",
                padding: "13px 20px",
                background: "#111111",
                color: "#ffffff",
                border:
                    "1px solid rgba(255,255,255,.18)",
                fontSize: "12px",
                lineHeight: "1.4",
                letterSpacing: ".08em",
                textTransform: "uppercase",
                pointerEvents: "none",
                whiteSpace: "nowrap",
                transition: prefersReducedMotion()
                    ? "none"
                    : "opacity .28s ease, transform .28s cubic-bezier(.22,1,.36,1)"
            });

            document.body.appendChild(toast);
        }

        toast.textContent = message;

        clearTimeout(
            toast._hideTimer
        );

        requestAnimationFrame(() => {
            toast.style.opacity = "1";
            toast.style.transform =
                "translate(-50%, 0)";
        });

        toast._hideTimer = setTimeout(() => {
            toast.style.opacity = "0";
            toast.style.transform =
                "translate(-50%, 20px)";
        }, 2200);
    };

    /* =========================================================
       CART COUNT
       ========================================================= */

    const updateCartCount = (
        animate = true
    ) => {
        const cart = getCart();

        const count = cart.reduce(
            (total, item) => {
                return (
                    total +
                    Number(item.quantity || 0)
                );
            },
            0
        );

        const counters =
            document.querySelectorAll(
                ".cart-count, #cart-count, [data-cart-count]"
            );

        counters.forEach((counter) => {
            const oldValue =
                counter.textContent;

            counter.textContent = count;

            if (
                animate &&
                oldValue !== String(count) &&
                !prefersReducedMotion()
            ) {
                counter.animate(
                    [
                        {
                            transform:
                                "scale(1)"
                        },
                        {
                            transform:
                                "scale(1.18)"
                        },
                        {
                            transform:
                                "scale(1)"
                        }
                    ],
                    {
                        duration: 280,
                        easing:
                            "cubic-bezier(.22,1,.36,1)"
                    }
                );
            }
        });
    };

    /* =========================================================
       PRODUCT DETAIL
       ========================================================= */

    const productDetailImage =
        document.getElementById(
            "product-detail-image"
        );

    const productDetailCategory =
        document.getElementById(
            "product-detail-category"
        );

    const productDetailTitle =
        document.getElementById(
            "product-detail-title"
        );

    const productDetailPrice =
        document.getElementById(
            "product-detail-price"
        );

    const productDetailDescription =
        document.getElementById(
            "product-detail-description"
        );

let currentProduct = null;

const renderProductDetail = () => {
    const productDetailSection = document.querySelector(".product-detail");

    if (!productDetailSection) {
        return;
    }

    const data = productDetailSection.dataset;

    if (!data.productId || !data.productName) {
        console.error("Data produk Laravel tidak ditemukan.");
        return;
    }

    currentProduct = {
        id: Number(data.productId),
        title: data.productName,
        category: data.productCategory || "SPTRDITZ COLLECTION",
        price: Number(data.productPrice) || 0,
        image: data.productImage || "",
        description: data.productDescription || ""
    };

    if (productDetailCategory) {
        productDetailCategory.textContent = currentProduct.category;
    }

    if (productDetailTitle) {
        productDetailTitle.textContent = currentProduct.title;
    }

    if (productDetailPrice) {
        productDetailPrice.textContent = formatPrice(currentProduct.price);
    }

    if (productDetailDescription) {
        productDetailDescription.textContent = currentProduct.description;
    }

    if (productDetailImage) {
        if (currentProduct.image) {
            productDetailImage.src = currentProduct.image;
            productDetailImage.alt = currentProduct.title;
            productDetailImage.style.display = "";
        } else {
            productDetailImage.removeAttribute("src");
            productDetailImage.alt = currentProduct.title;
            productDetailImage.style.display = "none";
        }
    }

    window.currentSPTRDITZProduct = currentProduct;
};

renderProductDetail();


    /* =========================================================
       PRODUCT QUANTITY
       ========================================================= */

    const quantityValue =
        document.querySelector(
            ".quantity-value"
        );

    const quantityMinus =
        document.querySelector(
            ".quantity-minus"
        );

    const quantityPlus =
        document.querySelector(
            ".quantity-plus"
        );

    const setQuantity = (value) => {
        if (!quantityValue) {
            return;
        }

        const safeValue =
            Math.max(
                1,
                Number(value) || 1
            );

        quantityValue.textContent =
            safeValue;

        if (!prefersReducedMotion()) {
            quantityValue.animate(
                [
                    {
                        transform:
                            "scale(1)"
                    },
                    {
                        transform:
                            "scale(1.08)"
                    },
                    {
                        transform:
                            "scale(1)"
                    }
                ],
                {
                    duration: 180,
                    easing:
                        "cubic-bezier(.22,1,.36,1)"
                }
            );
        }
    };

    if (
        quantityMinus &&
        quantityValue
    ) {
        quantityMinus.addEventListener(
            "click",
            () => {
                const current =
                    Number(
                        quantityValue.textContent
                    ) || 1;

                setQuantity(
                    current - 1
                );
            }
        );
    }

    if (
        quantityPlus &&
        quantityValue
    ) {
        quantityPlus.addEventListener(
            "click",
            () => {
                const current =
                    Number(
                        quantityValue.textContent
                    ) || 1;

                setQuantity(
                    current + 1
                );
            }
        );
    }

    /* =========================================================
       SIZE SELECTION
       ========================================================= */

    const sizeOptions =
        document.querySelectorAll(
            ".size-option"
        );

    sizeOptions.forEach((option) => {
        option.addEventListener(
            "click",
            () => {
                sizeOptions.forEach(
                    (item) => {
                        item.classList.remove(
                            "active"
                        );

                        item.setAttribute(
                            "aria-pressed",
                            "false"
                        );
                    }
                );

                option.classList.add(
                    "active"
                );

                option.setAttribute(
                    "aria-pressed",
                    "true"
                );

                if (
                    !prefersReducedMotion()
                ) {
                    option.animate(
                        [
                            {
                                transform:
                                    "scale(1)"
                            },
                            {
                                transform:
                                    "scale(.96)"
                            },
                            {
                                transform:
                                    "scale(1)"
                            }
                        ],
                        {
                            duration: 180,
                            easing: "ease-out"
                        }
                    );
                }
            }
        );
    });

    /* =========================================================
       ADD TO CART
       ========================================================= */

    const addToCartButton =
        document.querySelector(
            ".add-to-cart"
        );

    if (addToCartButton) {
        addToCartButton.addEventListener(
            "click",
            () => {
                if (!currentProduct) {
                    showToast(
                        "PRODUCT NOT FOUND"
                    );

                    return;
                }

                const activeSize =
                    document.querySelector(
                        ".size-option.active"
                    );

                if (!activeSize) {
                    showToast(
                        "PLEASE SELECT A SIZE"
                    );

                    return;
                }

                const size =
                    activeSize.dataset.size ||
                    activeSize.textContent.trim();

                const quantity =
                    Math.max(
                        1,
                        Number(
                            quantityValue?.textContent
                        ) || 1
                    );

                const cart = getCart();

                const existingItem =
                    cart.find((item) => {
                        return (
                            Number(
                                item.productId
                            ) ===
                                Number(
                                    currentProduct.id
                                ) &&
                            String(
                                item.size
                            ) ===
                                String(size)
                        );
                    });

                if (existingItem) {
                    existingItem.quantity =
                        Number(existingItem.quantity || 0) + quantity;
                } else {
                    cart.push({
                        productId: currentProduct.id,
                        productTitle: currentProduct.title,
                        productCategory: currentProduct.category,
                        productPrice: currentProduct.price,
                        productImage: currentProduct.image,
                        productDescription: currentProduct.description,
                        size: size,
                        quantity: quantity
                    });
                }

                saveCart(cart);

                localStorage.setItem(
                    "cartItem",
                    JSON.stringify({
                        productId:
                            currentProduct.id,

                        size: size,

                        quantity: quantity
                    })
                );

                updateCartCount(true);

                showToast(
                    "PRODUCT ADDED TO CART"
                );

                if (
                    !prefersReducedMotion()
                ) {
                    addToCartButton.animate(
                        [
                            {
                                transform:
                                    "translateY(0)"
                            },
                            {
                                transform:
                                    "translateY(-2px)"
                            },
                            {
                                transform:
                                    "translateY(0)"
                            }
                        ],
                        {
                            duration: 260,
                            easing:
                                "cubic-bezier(.22,1,.36,1)"
                        }
                    );
                }
            }
        );
    }

        /* =========================================================
       CART RENDER
       ========================================================= */

    const cartItemsContainer =
        document.getElementById(
            "cart-items"
        );

    const cartTotalItems =
        document.getElementById(
            "cart-total-items"
        );

    const cartTotalPrice =
        document.getElementById(
            "cart-total-price"
        );

   const getCartProduct = (item) => {
    const fallbackProduct = getProductById(
        item.productId
    );

    if (
        item.productTitle &&
        item.productPrice !== undefined
    ) {
        return {
            id: Number(item.productId),
            title: item.productTitle,
            category: item.productCategory || "SPTRDITZ COLLECTION",
            price: Number(item.productPrice),
            image: item.productImage || null,
            description: item.productDescription || ""
        };
    }

    return fallbackProduct;
};

    const renderCart = () => {
        if (!cartItemsContainer) {
            return;
        }

        const cart = getCart();

        if (cart.length === 0) {
            cartItemsContainer.innerHTML = `
                <div class="cart-empty">
                    <p>YOUR CART IS EMPTY</p>
                    <a href="/shop">
                        CONTINUE SHOPPING
                    </a>
                </div>
            `;

            if (cartTotalItems) {
                cartTotalItems.textContent =
                    "0";
            }

            if (cartTotalPrice) {
                cartTotalPrice.textContent =
                    formatPrice(0);
            }

            return;
        }

        let totalItems = 0;
        let totalPrice = 0;

        cartItemsContainer.innerHTML =
            cart.map(
                (item, index) => {
                    const product =
                        getCartProduct(item);

                    if (!product) {
                        return "";
                    }

                    const quantity =
                        Math.max(
                            1,
                            Number(
                                item.quantity
                            ) || 1
                        );

                    const subtotal =
                        product.price *
                        quantity;

                    totalItems +=
                        quantity;

                    totalPrice +=
                        subtotal;

                    const imageMarkup =
                        product.image
                            ? `
                                <img
                                    src="${product.image}"
                                    alt="${product.title}"
                                    loading="lazy"
                                >
                            `
                            : `
                                <div class="cart-item-image-placeholder">
                                    ${product.category}
                                </div>
                            `;

                    return `
                        <article
                            class="cart-item"
                            data-index="${index}"
                            data-product-id="${product.id}"
                            data-size="${item.size}"
                        >

                            <div class="cart-item-image">
                                ${imageMarkup}
                            </div>

                            <div class="cart-item-info">

                                <span class="cart-item-category">
                                    ${product.category}
                                </span>

                                <h3 class="cart-item-title">
                                    ${product.title}
                                </h3>

                                <p class="cart-item-size">
                                    SIZE: ${item.size}
                                </p>

                                <p class="cart-item-price">
                                    ${formatPrice(
                                        product.price
                                    )}
                                </p>

                            </div>

                            <div class="cart-item-controls">

                                <button
                                    type="button"
                                    class="cart-quantity-minus"
                                    data-index="${index}"
                                    aria-label="Decrease quantity"
                                >
                                    −
                                </button>

                                <span class="cart-quantity-value">
                                    ${quantity}
                                </span>

                                <button
                                    type="button"
                                    class="cart-quantity-plus"
                                    data-index="${index}"
                                    aria-label="Increase quantity"
                                >
                                    +
                                </button>

                            </div>

                            <div class="cart-item-subtotal">
                                ${formatPrice(
                                    subtotal
                                )}
                            </div>

                            <button
                                type="button"
                                class="cart-item-remove"
                                data-index="${index}"
                                aria-label="Remove ${product.title}"
                            >
                                REMOVE
                            </button>

                        </article>
                    `;
                }
            ).join("");

        if (cartTotalItems) {
            cartTotalItems.textContent =
                totalItems;
        }

        if (cartTotalPrice) {
            cartTotalPrice.textContent =
                formatPrice(
                    totalPrice
                );
        }

        if (
            !prefersReducedMotion()
        ) {
            cartItemsContainer
                .querySelectorAll(
                    ".cart-item"
                )
                .forEach(
                    (item, index) => {
                        item.animate(
                            [
                                {
                                    opacity: 0,
                                    transform:
                                        "translateY(8px)"
                                },
                                {
                                    opacity: 1,
                                    transform:
                                        "translateY(0)"
                                }
                            ],
                            {
                                duration: 320,
                                delay:
                                    Math.min(
                                        index *
                                            45,
                                        180
                                    ),
                                easing:
                                    "cubic-bezier(.22,1,.36,1)",
                                fill: "both"
                            }
                        );
                    }
                );
        }
    };

    renderCart();

    /* =========================================================
       CART CONTROLS
       ========================================================= */

    if (cartItemsContainer) {
        cartItemsContainer.addEventListener(
            "click",
            (event) => {

                const plusButton =
                    event.target.closest(
                        ".cart-quantity-plus"
                    );

                const minusButton =
                    event.target.closest(
                        ".cart-quantity-minus"
                    );

                const removeButton =
                    event.target.closest(
                        ".cart-item-remove"
                    );

                if (
                    !plusButton &&
                    !minusButton &&
                    !removeButton
                ) {
                    return;
                }

                const button =
                    plusButton ||
                    minusButton ||
                    removeButton;

                const index =
                    Number(
                        button.dataset.index
                    );

                if (
                    !Number.isInteger(
                        index
                    )
                ) {
                    return;
                }

                const cart =
                    getCart();

                if (!cart[index]) {
                    return;
                }

                /* -----------------------------------------
                   INCREASE QUANTITY
                   ----------------------------------------- */

                if (plusButton) {
                    cart[index].quantity =
                        Number(
                            cart[index]
                                .quantity || 1
                        ) + 1;

                    saveCart(cart);

                    renderCart();

                    updateCartCount(true);

                    return;
                }

                /* -----------------------------------------
                   DECREASE QUANTITY
                   ----------------------------------------- */

                if (minusButton) {
                    const currentQuantity =
                        Number(
                            cart[index]
                                .quantity || 1
                        );

                    if (
                        currentQuantity > 1
                    ) {
                        cart[index].quantity =
                            currentQuantity -
                            1;

                        saveCart(cart);

                        renderCart();

                        updateCartCount(
                            true
                        );
                    }

                    return;
                }

                /* -----------------------------------------
                   REMOVE PRODUCT
                   ----------------------------------------- */

                if (removeButton) {
                    const itemElement =
                        removeButton.closest(
                            ".cart-item"
                        );

                    const removeItem =
                        () => {
                            const updatedCart =
                                getCart();

                            if (
                                !updatedCart[
                                    index
                                ]
                            ) {
                                return;
                            }

                            updatedCart.splice(
                                index,
                                1
                            );

                            saveCart(
                                updatedCart
                            );

                            renderCart();

                            updateCartCount(
                                true
                            );

                            showToast(
                                "PRODUCT REMOVED"
                            );
                        };

                    if (
                        itemElement &&
                        !prefersReducedMotion()
                    ) {
                        itemElement
                            .animate(
                                [
                                    {
                                        opacity: 1,
                                        transform:
                                            "translateX(0)"
                                    },
                                    {
                                        opacity: 0,
                                        transform:
                                            "translateX(18px)"
                                    }
                                ],
                                {
                                    duration: 220,
                                    easing:
                                        "ease-in",
                                    fill:
                                        "forwards"
                                }
                            )
                            .finished
                            .then(
                                removeItem
                            )
                            .catch(
                                removeItem
                            );
                    } else {
                        removeItem();
                    }
                }
            }
        );
    }

    /* =========================================================
       CHECKOUT
       ========================================================= */

    const checkoutButton =
        document.getElementById(
            "checkout-button"
        );

    if (checkoutButton) {
        checkoutButton.addEventListener(
            "click",
            () => {

                const cart =
                    getCart();

                if (
                    cart.length === 0
                ) {
                    showToast(
                        "YOUR CART IS EMPTY"
                    );

                    return;
                }

                showToast(
                    "CHECKOUT READY"
                );
            }
        );
    }

   
/* =========================================================
   PRODUCT LINKS — LARAVEL ROUTES
   ========================================================= */

// Product cards already use Laravel URLs from Blade.
// Do not attach click handlers to every [data-product-id],
// because the product-detail section also has that attribute.


// =========================================================
// HOME CATEGORY → SHOP FILTER
// =========================================================

const homeCategoryButtons =
    document.querySelectorAll(
        ".category-item"
    );

homeCategoryButtons.forEach(
    (button) => {
        button.addEventListener(
            "click",
            () => {
                const category =
                    String(
                        button.dataset.category ||
                            "all"
                    )
                        .trim()
                        .toLowerCase();

               window.location.href =
                `/shop?category=${encodeURIComponent(
                    category
                )}`;
            }
        );
    }
);

 // =========================================================
// SHOP SEARCH + FILTER
// =========================================================

const shopSearchInput =
    document.querySelector(
        "#shop-search-input"
    );

const shopFilterButtons =
    document.querySelectorAll(
        ".shop-filter-item"
    );

const shopProductCards =
    document.querySelectorAll(
        ".shop-product-card"
    );

const shopProductsCount =
    document.querySelector(
        "#shop-products-count"
    );

const shopProductsTitle =
    document.querySelector(
        "#shop-products-title"
    );

const shopFilterStatus =
    document.querySelector(
        "#shop-filter-status"
    );

const shopNoResults =
    document.querySelector(
        "#shop-no-results"
    );

const shopFilterSection =
    document.querySelector(
        ".shop-filter-section"
    );


// =========================================================
// SHOP SEARCH + FILTER STATE
// =========================================================

let shopActiveCategory = "all";
let shopActiveSearch = "";


// =========================================================
// NORMALIZE SHOP SEARCH TEXT
// =========================================================

function normalizeShopSearch(value) {
    return String(
        value || ""
    )
        .trim()
        .toLowerCase();
}


// =========================================================
// UPDATE SHOP PRODUCTS
// =========================================================

function updateShopProducts() {

    if (
        shopProductCards.length === 0
    ) {
        return;
    }

    const searchValue =
        normalizeShopSearch(
            shopActiveSearch
        );

    const categoryValue =
        normalizeShopSearch(
            shopActiveCategory
        );

    let visibleProducts = 0;


    // =====================================================
    // CHECK EVERY PRODUCT CARD
    // =====================================================

    shopProductCards.forEach(
        function (card) {

            const productNameElement =
                card.querySelector(
                    "h3"
                );

            const productCategoryElement =
                card.querySelector(
                    "p"
                );


            const productName =
                normalizeShopSearch(
                    productNameElement
                        ? productNameElement.textContent
                        : ""
                );


            const productCategoryText =
                normalizeShopSearch(
                    productCategoryElement
                        ? productCategoryElement.textContent
                        : ""
                );


            const cardCategory =
                normalizeShopSearch(
                    card.dataset.category
                );


            // =================================================
            // SEARCH MATCH
            // =================================================

            const matchesSearch =
                !searchValue ||
                productName.includes(
                    searchValue
                ) ||
                productCategoryText.includes(
                    searchValue
                ) ||
                cardCategory.includes(
                    searchValue
                );


            // =================================================
            // CATEGORY MATCH
            // =================================================

            const matchesCategory =
                categoryValue === "all" ||
                cardCategory ===
                    categoryValue;


            // =================================================
            // FINAL MATCH
            // =================================================

            const shouldShow =
                matchesSearch &&
                matchesCategory;


            // =================================================
            // SHOW PRODUCT
            // =================================================

            if (shouldShow) {

                visibleProducts++;

                card.style.display = "";

                card.classList.remove(
                    "is-hiding"
                );

                card.classList.add(
                    "is-showing"
                );

            }


            // =================================================
            // HIDE PRODUCT
            // =================================================

            else {

                card.classList.remove(
                    "is-showing"
                );

                card.classList.add(
                    "is-hiding"
                );

                card.style.display =
                    "none";

            }

        }
    );


    // =====================================================
    // UPDATE PRODUCT COUNT
    // =====================================================

    if (shopProductsCount) {

        shopProductsCount.textContent =
            String(
                visibleProducts
            );

    }


    // =====================================================
    // UPDATE TITLE
    // =====================================================

    if (shopProductsTitle) {

        if (searchValue) {

            shopProductsTitle.textContent =
                "SEARCH RESULTS";

        }

        else if (
            categoryValue !== "all"
        ) {

            shopProductsTitle.textContent =
                categoryValue.toUpperCase();

        }

        else {

            shopProductsTitle.textContent =
                "ALL PRODUCTS";

        }

    }


    // =====================================================
    // UPDATE FILTER STATUS
    // =====================================================

    if (shopFilterStatus) {

        if (searchValue) {

            shopFilterStatus.textContent =
                `SEARCH: ${shopActiveSearch}`;

        }

        else if (
            categoryValue !== "all"
        ) {

            shopFilterStatus.textContent =
                `CATEGORY: ${shopActiveCategory}`;

        }

        else {

            shopFilterStatus.textContent =
                "SHOWING ALL PRODUCTS";

        }

    }


    // =====================================================
    // NO RESULTS
    // =====================================================

    if (shopNoResults) {

        if (
            visibleProducts === 0
        ) {

            shopNoResults.style.display =
                "";

        }

        else {

            shopNoResults.style.display =
                "none";

        }

    }

}


// =========================================================
// SHOP SEARCH INPUT
// =========================================================

if (shopSearchInput) {

    shopSearchInput.addEventListener(
        "input",
        function () {

            shopActiveSearch =
                normalizeShopSearch(
                    this.value
                );

            updateShopProducts();

        }
    );

}


// =========================================================
// SHOP CATEGORY FILTER
// =========================================================

shopFilterButtons.forEach(
    function (button) {

        button.addEventListener(
            "click",
            function () {

                shopActiveCategory =
                    normalizeShopSearch(
                        button.dataset.category ||
                        "all"
                    );


                shopFilterButtons.forEach(
                    function (item) {

                        item.classList.remove(
                            "active"
                        );

                    }
                );


                button.classList.add(
                    "active"
                );


                updateShopProducts();

            }
        );

    }
);


// =========================================================
// READ CATEGORY FROM URL
// =========================================================

const shopUrlParams =
    new URLSearchParams(
        window.location.search
    );

const urlCategory =
    normalizeShopSearch(
        shopUrlParams.get(
            "category"
        )
    );


// =========================================================
// APPLY CATEGORY FROM URL
// =========================================================

if (
    urlCategory
) {

    const matchingButton =
        Array.from(
            shopFilterButtons
        ).find(
            function (button) {

                return (
                    normalizeShopSearch(
                        button.dataset.category
                    ) ===
                    urlCategory
                );

            }
        );


    if (
        matchingButton
    ) {

        shopActiveCategory =
            urlCategory;


        shopFilterButtons.forEach(
            function (item) {

                item.classList.remove(
                    "active"
                );

            }
        );


        matchingButton.classList.add(
            "active"
        );

    }

}


// =========================================================
// INITIAL SHOP STATE
// =========================================================

updateShopProducts();


// =========================================================
// AUTO SCROLL FROM HOME CATEGORY
// =========================================================

if (
    urlCategory &&
    shopFilterSection
) {

    window.setTimeout(
        function () {

            shopFilterSection.scrollIntoView(
                {
                    behavior: "smooth",
                    block: "start"
                }
            );

        },
        150
    );

}

        /* =========================================================
       CART COUNT INITIALIZATION
       ========================================================= */

    updateCartCount(false);

    /* =========================================================
       SMOOTH ANCHOR SCROLL
       ========================================================= */

    document
        .querySelectorAll(
            'a[href^="#"]'
        )
        .forEach((link) => {

            link.addEventListener(
                "click",
                (event) => {

                    const href =
                        link.getAttribute(
                            "href"
                        );

                    if (
                        !href ||
                        href === "#"
                    ) {
                        return;
                    }

                    const target =
                        document.querySelector(
                            href
                        );

                    if (!target) {
                        return;
                    }

                    event.preventDefault();

                    target.scrollIntoView({
                        behavior:
                            prefersReducedMotion()
                                ? "auto"
                                : "smooth",

                        block: "start"
                    });
                }
            );
        });

    /* =========================================================
       NAVIGATION FEEDBACK
       ========================================================= */

    document
        .querySelectorAll(
            'a[href]:not([href^="#"]):not([href^="mailto:"]):not([href^="tel:"])'
        )
        .forEach((link) => {

            link.addEventListener(
                "click",
                () => {

                    if (
                        prefersReducedMotion() ||
                        link.target === "_blank"
                    ) {
                        return;
                    }

                    document.body.classList.add(
                        "sptrditz-page-leaving"
                    );

                    setTimeout(() => {
                        document.body.classList.remove(
                            "sptrditz-page-leaving"
                        );
                    }, 280);
                }
            );
        });

    /* =========================================================
       IMAGE LOAD FEEDBACK
       ========================================================= */

    document
        .querySelectorAll("img")
        .forEach((image) => {

            if (image.complete) {
                image.classList.add(
                    "is-loaded"
                );

                return;
            }

            image.addEventListener(
                "load",
                () => {
                    image.classList.add(
                        "is-loaded"
                    );
                },
                {
                    once: true
                }
            );
        });

    /* =========================================================
       PAGE LOAD
       ========================================================= */

    requestAnimationFrame(() => {
        document.body.classList.add(
            "sptrditz-page-ready"
        );
    });

    /* =========================================================
       DEBUG STATUS
       ========================================================= */

    console.log(
        "SPTRDITZ JavaScript loaded successfully."
    );

    console.log(
        `Products available: ${products.length}`
    );

});