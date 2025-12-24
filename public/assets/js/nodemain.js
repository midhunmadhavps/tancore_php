

$(document).on("click", "#shopClick", function () {
    const name = $(this).data("name");
    window.location.href = "/tanore/public/shop.php?category=" + encodeURIComponent(name);
});
$(document).on("click", "#homeClick", function () {
    window.location.href = "/";
});
$(document).on("click", "#cartClick", function () {
    window.location.href = "/tanore/public/cart.php";
});

function getCart() {
    try {
        const raw = localStorage.getItem("productcart");
        if (!raw) return [];              // nothing saved yet
        const parsed = JSON.parse(raw);
        return Array.isArray(parsed) ? parsed : []; // if it's not array, fallback
    } catch (e) {
        console.warn("Failed to parse cart JSON:", e);
        return [];
    }
}

function saveCart(cart) {
    try {
        localStorage.setItem("productcart", JSON.stringify(cart));
    } catch (e) {
        console.error("Failed to save cart:", e);
    }
}

function addToCartId(productId, { unique = false } = {}) {
    const cart = getCart();
    if (unique) {
        if (!cart.includes(productId)) cart.push(productId);
    } else {
        cart.push(productId);
    }
    saveCart(cart);
    return cart;
}

function removeFromCart(productId) {
    let cart = getCart();
    cart = cart.filter(id => id !== productId);
    saveCart(cart);
    return cart;
}




