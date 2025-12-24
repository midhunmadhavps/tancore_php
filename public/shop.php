<?php
    require_once "../config/csrf.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Jewellery" />
    <meta name="author" content="itgeeksin.com" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="csrf-token" content="<?= $_SESSION['csrf_token']; ?>">
    <title>Tanore</title>
    <link rel="shortcut icon" href="./assets/img/favicon.ico" type="image/x-icon">
    <link rel="icon" href="./assets/img/favicon.ico" type="image/x-icon">
    <link href="main.css" rel="stylesheet">
    <link href="./assets/plugin/switcher/css/switcher.css" rel="stylesheet">
    <link href="./assets/css/color.css" rel="stylesheet" id="colors">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <link rel="stylesheet" href="./assets/font-awesome/css/font-awesome.min.css"> -->
    <style>
        .search_terms {
            width: 100% !important;
            padding: 10px !important;
            border: 1px solid #ccc !important;
        }

    </style>
</head>

<body>

    <header>
        <!--//==preloader Start==//-->
        <div class="loading">
            <div>
                <div class="c1"></div>
                <div class="c2"></div>
                <div class="c3"></div>
                <div class="c4"></div>
            </div>
            <h3>Loading</h3>
        </div>
        <!--//==preloader End==//-->

        <!--//==mega menu start==//-->
        <div id="main-menu" class="wa-main-menu">
            <!-- Menu -->
            <div class="wathemes-menu relative">
                <!-- navbar -->
                <div class="navbar navbar-default navbar-bg-dark" role="navigation">
                    <div class="container">
                        <div class="row ">
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <div class="navbar-header pad-top15 pad-bottom15">
                                    <!-- Button For Responsive toggle -->
                                    <button type="button" class="navbar-toggle" data-toggle="collapse"
                                        data-target=".navbar-collapse">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                    <div class="icons-section boxx pull-right">
                                        <ul>
                                            <li class="hidden-sm hidden-md hidden-lg hover-mini-cart">
                                                <a href="cart.html" class="mini-cart-icon"><i
                                                        class="fa fa-shopping-cart" aria-hidden="true"></i></a>

                                            </li>
                                        </ul>
                                    </div>
                                    <a class="navbar-brand hidden-sm hidden-md hidden-lg logo-second" href="index.html">
                                        <img class="site_logo" alt="Site Logo" src="./assets/img/all/logo.svg">
                                    </a>
                                </div>
                                <!-- Navbar Collapse -->
                                <div class="navbar-collapse collapse">
                                    <!-- nav -->
                                    <ul class="nav navbar-nav">
                                        <li>
                                            <a id="homeClick">Home</a>
                                        </li>
                                        <li>
                                            <a id="cartClick">Cart</a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- navbar-collapse -->
                            </div>
                            <div class="col-md-4 col-sm-12 col-xs-12">
                                <div class="row pad-top-5 head-top-sec">
                                    <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                                        <figure class="logo-box">
                                            <a class="" href="index.html">
                                                <img alt="" src="./assets/img/all/logo.svg"></a>
                                        </figure>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-9 hidden-xs">
                                <div class="icons-section pad-top20 pull-right">
                                    <ul>
                                        <li class="hidden-xs hover-mini-cart">
                                            <a href="cart.html" class="mini-cart-icon">
                                                <i class=" fa fa-shopping-cart" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!--//==top bar End==//-->

    <div class="breadcrumb-section-box">

        <div class="special-style special-style-full special-style-semidark col-md-12 col-md-offset-0 pull-right">

            <div class="bg-image" style="background-image:url('./assets/img/all/breadcrumb-img.png');"></div>

        </div>

        <div class="container">

            <div class="row">

                <div class="col-md-12 col-sm-12 pad-top100 pad-bottom100 heading-box">

                    <h3 class="heading-breadcrumb box-z text-center">Our Collection</h3>

                    <div class="clear"></div>

                    <div class="headding-icons">

                        <ul>

                            <li><span class="mar-top15"><i class="fa fa-diamond" aria-hidden="true"></i></span></li>

                            <li><span class="style mar-top15"><i class="fa fa-diamond" aria-hidden="true"></i></span>
                            </li>

                            <li><span class="mar-top15"><i class="fa fa-diamond" aria-hidden="true"></i></span></li>

                        </ul>

                    </div>

                    <div class="breadcrumb-box">

                        <ul class="breadcrumb">

                            <li>

                                <a class="sab-heading-breadcrumb box-z" href="index.html">home</a>

                            </li>

                            <li class="heading-wa box-z activ">Collection</li>

                        </ul>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <div class="pad-bottom80 pad-top80 blog-griad">

        <div class="container">

            <div class="row">

                <!--//==blog section Start==//-->

                <section>

                    <div class="products-section">

                        <div class="container">

                            <div class="row">

                                <div id="collectiongrid">

                                    <div class="col-md-9 col-sm-8 col-xs-12 pull-right">
                                        <div class="input-group">
                                            <input type="text" 
                                                id="search" 
                                                name="search" 
                                                class="form-control search_terms" 
                                                placeholder="Search products...">

                                            <span class="input-group-btn">
                                                <button id="searchBtn" class="btn btn-primary" type="button">
                                                    Search
                                                </button>
                                            </span>
                                        </div>
                                        <div class="row">
                                            <div id="productsgriads" class="products mar-top30" style="display: block;">

                                            </div>
                                        </div>
                                        <div id="pagination" class="text-center mt-4"></div>
                                    </div>

                                    <div class="col-md-3 col-sm-4 col-xs-12 siad-bar-sec ">

                                        <div class="row">



                                            <!--//==Categories Start==//-->

                                            <div class="col-md-12">

                                                <div class="Categories">

                                                    <h4 class="theme-headdings">Filter By Categories</h4>

                                                    <div class="Categories-title-box pad-top30">

                                                        <div class="faq-section">

                                                            <div id="faq"
                                                                class="marB30 ui-accordion ui-widget ui-helper-reset"
                                                                role="tablist">


                                                                <h3 class="mar-top20 ui-accordion-header ui-corner-top ui-accordion-header-collapsed ui-corner-all ui-state-default ui-accordion-icons"
                                                                    role="tab" id="ui-id-7" aria-controls="ui-id-8"
                                                                    aria-selected="false" aria-expanded="false"
                                                                    tabindex="-1"><span
                                                                        class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span>Categories
                                                                </h3>

                                                                <div class="ui-accordion-content ui-corner-bottom ui-helper-reset ui-widget-content"
                                                                    id="ui-id-8" aria-labelledby="ui-id-7"
                                                                    role="tabpanel" aria-hidden="true"
                                                                    style="display: none; height: 248px;">

                                                                    <div class="Categories">

                                                                        <div class="col-md-12 row">

                                                                            <div class="checbox-section mar-top10">

                                                                                <div class="col-md-12 row">

                                                                                    <div class="content">

                                                                                        <div id="categoriesList" class="box">
                                                                                            
                                                                                        </div>

                                                                                    </div>

                                                                                </div>

                                                                            </div>

                                                                        </div>

                                                                    </div>

                                                                </div>


                                                            </div>

                                                        </div>

                                                    </div>

                                                </div>

                                            </div>

                                            <!--//==Categories End==//-->

                                            <div class="col-md-12 col-sm-12 col-xs-12">

                                                <div id="rangslider" class="price-filter-box pad-top30">

                                                    <h4 class="theme-headdings mar-bottom30">Filter By Price</h4>

                                                    <p>

                                                    </p>

                                                    <div id="slider-range"
                                                        class="ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content">
                                                        <div class="ui-slider-range ui-corner-all ui-widget-header"
                                                            style="left: 0%; width: 0%;"></div><span tabindex="0"
                                                            class="ui-slider-handle ui-corner-all ui-state-default"
                                                            style="left: 15%;"></span><span tabindex="0"
                                                            class="ui-slider-handle ui-corner-all ui-state-default"
                                                            style="left: 60%;"></span>
                                                    </div>

                                                    <div class="price-box row mar-top30">

                                                        <div class="col-md-6 col-sm-6 col-xs-6">

                                                            <button id="filter" class="itg-button">Filter</button>

                                                        </div>

                                                        <div class="col-md-6 col-sm-6 col-xs-6 price-text">

                                                            <p><input type="text" id="amount" readonly=""
                                                                    style="border:0; color:#000; font-weight:bold;"></p>

                                                        </div>

                                                    </div>

                                                </div>

                                            </div>

                                            <div class="clear"></div>




                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </section>

                <!--//==blog section End==//-->

            </div>

        </div>

    </div>

    <!--//===product-items-section End==//-->



    <!--//===footer-main-section Start==//-->
        <?php include __DIR__ . '/../includes/footer.php'; ?>
    <!--//===footer-main-section End==//-->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

    <script src="./assets/js/jquery.min.js"></script>

    <script src="./assets/js/bootstrap.min.js"></script>

    <script src="./assets/plugin/owl-carousel-slider/js/owl.carousel.min.js"></script>

    <script src="./assets/plugin/menu-menu/js/hover-dropdown-menu.js"></script>

    <script src="./assets/plugin/fancyBox/js/jquery.fancybox.pack.js"></script>

    <script src="./assets/plugin/fancyBox/js/jquery.fancybox-media.js"></script>

    <script src="./assets/plugin/vertical-slider/js/jquery.bxslider.js"></script>

    <script src="./assets/plugin/acordian/js/jquery-ui.js"></script>

    <script src="./assets/plugin/menu-menu/js/jquery.hover-dropdown-menu-addon.js"></script>

    <script src="./assets/plugin/switcher/js/switcher.js"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->

    <script src="./assets/plugin/alert/sweetalert.js"></script>
    <script src="./assets/js/main.js"></script>
    <script src="./assets/js/nodemain.js"></script>

    <script>

        let currentPage = 1;
        const perPage = 9;
        let category_ids;
        let min_price;
        let max_price;
        let categoryNames = null;
        let categoryFromURL = true;


        function updateFilters() {
            const selectedCategories = Array.from(
                document.querySelectorAll('input[type="checkbox"]:checked')
            ).map(cb => cb.value);

            category_ids = selectedCategories.join(",");
            if ($("#slider-range").hasClass("ui-slider")) {
                min_price = $("#slider-range").slider("values", 0);
                max_price = $("#slider-range").slider("values", 1);
            } else {
                min_price = 0;
                max_price = 0;
            }
        }

        $(document).ready(function () {
            rangSliderint();
            updateFilters();
            loadCategories();
            loadProducts();
        });

            

        $(document).on("click", ".addtoCart", function (e) {
            e.preventDefault();
            
            const productId = String($(this).data("id"));
            const cart = addToCartId(productId, { unique: true });
            Swal.fire({
                icon: "success",
                title: "Added to cart successfully",
                text: "Added",
                timer: 1500,
                showConfirmButton: false
            });
            console.log("Cart updated:", cart);
        });

        $(document).on("click", "#filter", function (e) {
            e.preventDefault();
            currentPage = 1;
            categoryNames = "";
            loadProducts();
        });

        $(document).on("click", "#searchBtn", function (e) {
            e.preventDefault();
            currentPage = 1;
            data = {
                search: $("#search").val()
            }
            loadProducts(data);
        });

        function loadProducts(data = {}) {

            updateFilters();
            data.category_ids = category_ids;
            data.min_price = min_price;
            data.max_price = max_price;

            if (categoryFromURL) {
                const urlParams = new URLSearchParams(window.location.search);
                categoryNames = urlParams.get('category');
                categoryFromURL = false;
            }

            if(categoryNames){
                data.categoryNames = categoryNames;
            }else{
                data.categoryNames = '';
            }
            
            data.page = currentPage;
            data.per_page = perPage;

            $.ajax({
                url: "/tanore/controller/get-products.php",
                type: "GET",         
                dataType: "json",
                data: data,
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr('content')
                },
                success: function (response) {

                    if (response.value === true) {

                        const products = response.data;
                        const container = document.getElementById("productsgriads");
                        container.innerHTML = "";

                        if (!products || products.length === 0) {
                            const cardHTML = `
                                <div class="col-md-12 col-sm-12 col-xs-12 product_itm no-data">
                                    Out of stock!
                                </div>
                            `;
                            container.innerHTML = cardHTML;
                            $('#pagination').hide();
                            return; // stop here
                        }

                        products.forEach(product => {
                            const description = product.product_description ? product.product_description : "";

                            let sliderItems ="";
                            if (product.images && product.images.trim() !== "") {
                                const images = product.images.split(",");
                                // Build the image slider items
                                if (images.length > 0) {
                                    sliderItems = images.map(img => `
                                        <div class="item">
                                            <img src="${window.location.origin}/tanore/uploads/${img}" alt="">
                                        </div>`).join("");
                                }
                            }
                            if (!sliderItems) {
                                sliderItems = `
                                    <div class="item">
                                        <img src="${window.location.origin}/tanore/public/assets/img/no-image.png" alt="">
                                    </div>`;
                            }

                            // Product UI block
                            const cardHTML = `
                                    <div class="col-md-4 col-sm-6 col-xs-12 product_itm">
                                        <div class="row">
                                            <div class="owl-carousel owl-theme product-sidebar-slider">
                                                ${sliderItems}
                                            </div>

                                            <figcaption class="figure-boxx figure-section-hover">
                                                <div class="star-box-section text-center">
                                                    <h4 class="theme-headdings text-center pad-top10">
                                                        <a>${product.product_name}</a>
                                                    </h4>
                                                    <p>${description}</p>
                                                    <p>₹${Number(product.product_price).toLocaleString("en-IN")}</p>
                                                    <a data-id="${product.product_id}" class="addtoCart itg-button">Add to Cart</a>
                                                </div>
                                                
                                            </figcaption>
                                        </div>
                                    </div>
                                `;

                            container.innerHTML += cardHTML;
                        });

                        var prevNav = '<i class="fa fa-long-arrow-left"></i>';
                        var nextNav = '<i class="fa fa-long-arrow-right"></i>';

                        $(".product-sidebar-slider").owlCarousel({
                            loop: true,
                            margin: 0,
                            nav: true,
                            dots: false,
                            autoplay: false,
                            autoplayTimeout: 2000,
                            items: 1,
                            navText: [prevNav, nextNav]
                        });

                        renderPagination(response.pagination);

                        return;
                    }

                },
                error: function (xhr) {
                     console.error(xhr.responseText);
                    Swal.fire("Error", "Server error", "error");
                }
            });

            function renderPagination(pagination) {

                const container = document.getElementById("pagination");
                container.innerHTML = "";

                const totalPages = pagination.total_pages;
                const current = pagination.current_page;
                const maxButtons = 3;

                let startPage, endPage;

                if (totalPages <= maxButtons) {
                    // Few pages → show all
                    startPage = 1;
                    endPage = totalPages;
                } else {
                    // Sliding window
                    if (current === 1) {
                        startPage = 1;
                        endPage = maxButtons;
                    } else if (current === totalPages) {
                        startPage = totalPages - (maxButtons - 1);
                        endPage = totalPages;
                    } else {
                        startPage = current - 1;
                        endPage = current + 1;
                    }

                    // Safety clamp
                    if (startPage < 1) startPage = 1;
                    if (endPage > totalPages) endPage = totalPages;
                }

                /* Previous button */
                if (current > 1) {
                    container.innerHTML += `
                        <button class="btn btn-sm btn-outline-primary"
                            onclick="changePage(${current - 1})">
                            «
                        </button>
                    `;
                }

                /* Page numbers */
                for (let i = startPage; i <= endPage; i++) {
                    container.innerHTML += `
                        <button
                            class="btn btn-sm ${i === current ? 'btn-primary active' : 'btn-outline-primary'}"
                            onclick="changePage(${i})">
                            ${i}
                        </button>
                    `;
                }

                /* Next button */
                if (current < totalPages) {
                    container.innerHTML += `
                        <button class="btn btn-sm btn-outline-primary"
                            onclick="changePage(${current + 1})">
                            »
                        </button>
                    `;
                }
            }

        }

        function changePage(page) {
            currentPage = page;
            loadProducts();
        }

        function loadCategories() {
            $.ajax({
                url: "/tanore/controller/get-category.php",
                type: "GET",         
                dataType: "json",
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr('content')
                },
                success: function (response) {

                    if (response.value === true) {

                        const categories = response.data;
                        const container = document.getElementById("categoriesList");
                        container.innerHTML = "";

                        categories.forEach(category => {
                            const categoryId = category.id;
                            const categoryName = category.category_name.replace(/\s+/g, "_"); // remove spaces

                            const cardHTML = `
                                        <p>
                                            <input type="checkbox" id="cat_${categoryId}" value="${categoryId}">
                                            <label for="cat_${categoryId}">${category.category_name}</label>
                                        </p>
                                    `;

                            container.innerHTML += cardHTML;
                        });

                        return;
                    }

                    Swal.fire({
                        icon: "error",
                        title: "Failed!",
                        text: response.message || "Something went wrong!"
                    });
                },
                error: function (xhr) {
                     console.error(xhr.responseText);
                    Swal.fire("Error", "Server error", "error");
                }
            });
        }


    </script>

</body>

</html>