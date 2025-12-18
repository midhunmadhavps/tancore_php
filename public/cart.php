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
        <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">
        <link rel="icon" href="assets/img/favicon.ico" type="image/x-icon">
        <link href="main.css" rel="stylesheet">
        <link href="assets/plugin/switcher/css/switcher.css" rel="stylesheet">
        <link href="assets/css/color.css" rel="stylesheet" id="colors">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- <link rel="stylesheet" href="/assets/font-awesome/css/font-awesome.min.css"> -->
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
                                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                        <span class="sr-only">Toggle navigation</span> 
                                        <span class="icon-bar"></span> 
                                        <span class="icon-bar"></span> 
                                        <span class="icon-bar"></span>
                                        </button>
                                        <div class="icons-section boxx pull-right">
                                            <ul>
                                                <li class="hidden-sm hidden-md hidden-lg hover-mini-cart">
                                                    <a href="cart.html" class="mini-cart-icon"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                                                   
                                                </li>
                                            </ul>
                                        </div>
                                        <a class="navbar-brand hidden-sm hidden-md hidden-lg logo-second" href="index.html">
                                        <img class="site_logo" alt="Site Logo" src="assets/img/all/logo.svg">
                                        </a>
                                    </div>
                                    <!-- Navbar Collapse -->
                                    <div class="navbar-collapse collapse">
                                        <!-- nav -->
                                        <ul class="nav navbar-nav">
                                            <li>
                                                <a id="homeClick">Home</a>
                                                <!-- <a href="index.html">Home</a> -->
                                            </li>
                                            <li>
                                                <!-- <a href="shop.html">Products</a> -->
                                                <a id="shopClick">Products</a>
                                            </li>
                                            <!-- <li>
                                                <a href="#">Cart</a> 
                                            </li> -->
                                        </ul>
                                    </div>
                                    <!-- navbar-collapse -->
                                </div>
                                <div class="col-md-4 col-sm-12 col-xs-12">
                            <div class="row pad-top-5 head-top-sec">
                                <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                                    <figure class="logo-box">
                                        <a class="" href="index.html">
                                        <img alt=""  src="assets/img/all/logo.svg"></a>
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

                <div class="bg-image" style="background-image:url('assets/img/all/breadcrumb-img.png');"></div>

            </div>

            <div class="container">

                <div class="row">

                    <div class="col-md-12 col-sm-12 pad-top100 pad-bottom100 heading-box">

                        <h3 class="heading-breadcrumb box-z text-center">Cart</h3>

                        <div class="clear"></div>

                        <div class="headding-icons">

                            <ul>

                                <li><span class="mar-top15"><i class="fa fa-diamond" aria-hidden="true"></i></span></li>

                                <li><span class="style mar-top15"><i class="fa fa-diamond" aria-hidden="true"></i></span></li>

                                <li><span class="mar-top15"><i class="fa fa-diamond" aria-hidden="true"></i></span></li>

                            </ul>

                        </div>

                        <div class="breadcrumb-box">

                            <ul class="breadcrumb">

                                <li>

                                    <a class="sab-heading-breadcrumb box-z" href="index.html">home</a>

                                </li>

                                <li class="heading-wa box-z activ">Cart</li>

                            </ul>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <div class="blog-griad">

            <div class="container">

                <div class="row">

                    <div class="col-md-12 col-sm-12  col-xs-12 pad-top80 pad-bottom80">

                        <div class="clear"></div>

                        <div class=" hidden-xs pad-top-bottom15 order-bosx price">

                            <div class=" row">

                                <div class=" col-md-12 col-sm-12 col-xs-12 ">

                                    <div class=" row ">

                                        <div class="col-md-1 col-sm-1 col-xs-12 ">

                                            <div class="text-c  order-data grey-bg text-center pad15"></div>

                                        </div>

                                        <div class="col-md-3 col-sm-3 col-xs-12 ">

                                            <div class="text-c  order-data grey-bg text-center pad15">

                                                <h4>Product</h4>

                                            </div>

                                        </div>

                                        <div class="col-md-2 col-sm-2 marB30 ">

                                            <div class="text-c  order-data grey-bg text-center pad15">

                                                <h4>Price</h4>

                                            </div>

                                        </div>

                                        <div class="col-md-3 col-sm-3 marB30">

                                            <div class="text-c  order-data grey-bg text-center pad15">

                                                <h4>Quantity</h4>

                                            </div>

                                        </div>

                                        <div class="col-md-3 col-sm-3 marB30">

                                            <div class="text-c  order-data grey-bg text-center pad15">

                                                <h4>Total</h4>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                        <div id="product-order-table" class="product-order-table">

                        </div>

                    </div>

                </div>

                <div class="row pad-bottom80">


                    <div class="col-md-12 col-sm-6 col-xs-12 responsive-top">

                        <div class="row pad-top20">

                            <div class="col-md-12">


                                <a id="cartCheckout" class="itg-button blog-box right-bt  pull-right">Prceed To Checkout</a>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

           
        </div>

      

       <!--//===footer-main-section Start==//-->
        <?php include __DIR__ . '/../includes/footer.php'; ?>
        <!--//===footer-main-section End==//-->

        <!-- jQuery-->

        <script src="assets/js/jquery.min.js"></script>

        <script src="assets/js/bootstrap.min.js"></script>

        <script src="assets/plugin/owl-carousel-slider/js/owl.carousel.min.js"></script>

        <script src="assets/plugin/menu-menu/js/hover-dropdown-menu.js"></script>

        <script src="assets/plugin/fancyBox/js/jquery.fancybox.pack.js"></script>

        <script src="assets/plugin/fancyBox/js/jquery.fancybox-media.js"></script>

        <script src="assets/plugin/vertical-slider/js/jquery.bxslider.js"></script>

        <script src="assets/plugin/acordian/js/jquery-ui.js"></script>

        <script src="assets/plugin/menu-menu/js/jquery.hover-dropdown-menu-addon.js"></script>

        <script src="assets/plugin/switcher/js/switcher.js"></script>

        <!-- Include all compiled plugins (below), or include individual files as needed -->

        <script src="./assets/plugin/alert/sweetalert.js"></script>
        <script src="assets/js/main.js"></script>
        <script src="assets/js/nodemain.js"></script>
        <script>

            $(document).on("click", "#cartCheckout", function () {

                if ($(".cart_row").length === 0) {
                    Swal.fire({
                        icon: "info",
                        title: "Cart is empty",
                        text: "Please add products to cart.",
                        timer: 1500,
                        showConfirmButton: false
                    });
                    return;
                }
                console.log("whatsapp message sending.");
                let message = "🛒 *Hello! I want to order the products in my cart*\n\n";

                $(".cart_row").each(function () {
                    const row = $(this);
                    const name = row.find(".product_name").text().trim();
                    const priceText = row.find(".product_price").text().trim().replace("₹", "").replace(/,/g, "");
                    const qty = parseInt(row.find(".quantity").val()) || 1;
                    const total = priceText * qty;

                    message += `• ${name}\n   Qty: ${qty}\n   Price: ₹${parseInt(priceText).toLocaleString("en-IN")}\n   Total: ₹${total.toLocaleString("en-IN")}\n\n`;
                });
                // Redirect to WhatsApp
                const whatsappUrl = "https://wa.me/9567223061?text=" + encodeURIComponent(message);
                window.location.href = whatsappUrl;
            });

            $(document).on("input", ".quantity", function () {

                const row = $(this).closest(".cart_row"); // get product row

                let priceText = row.find(".product_price").text();
                priceText = priceText.replace("₹", "").replace(/,/g, "").trim(); 
                const price = parseFloat(priceText);

                const qty = parseInt($(this).val()) || 1;

                const total = price * qty;

                // Update total
                row.find(".total").text("₹" + total.toLocaleString("en-IN"));

            });
            
            // function updateCartTotal() {
            //     let total = 0;

            //     $(".cart_row").each(function () {

            //         const rowTotalText = $(this)
            //             .find(".total")
            //             .text()
            //             .replace("₹", "")
            //             .trim();

            //         const rowTotal = parseFloat(rowTotalText) || 0;

            //         total += rowTotal;
            //     });

            //     $("#totalcart").text("₹" + total);
            // }


            $(document).on("click", ".deletefromcart", function () {
                const productId = String($(this).data("id"));
                removeFromCart(productId);
                const row = $(this).closest(".cart_row");
                row.remove();
                Swal.fire({
                    icon: "info",
                    title: "Removed from cart",
                    text: "Item removed successfully",
                    timer: 1500,
                    showConfirmButton: false
                });
            });

            function loadCartProducts() {
            
                const datas = {
                    ids: getCart()
                };
                console.log("ssss",getCart());
                console.log("ssss",datas);
                
                $.ajax({
                url: "/tanore/controller/get-all-Cart-products.php",
                type: "GET",         
                dataType: "json",
                data: datas,
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr('content')
                },
                    success: function (response) {
                        if (response.data && response.data.length > 0) {
                            const products = response.data;
                            console.log("products :- ", products);
                            console.log("productssss :- ");

                            const container = document.getElementById("product-order-table");
                            container.innerHTML = "";

                            products.forEach(product => {

                                const cardHTML = `
                                    <div class="row pad-top30 pad-bottom50 cart_row">
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="order-row padTB20">
                                                    <div class="col-md-1 col-sm-1 col-xs-1"></div>

                                                    <div class="col-md-3 col-sm-3 col-xs-12">
                                                        <h4 class="product_name product-title"><a>${product.product_name}</a></h4>
                                                    </div>

                                                    <div class="col-md-2 col-sm-2 col-xs-12">
                                                        <h4 class="product_price">₹${Number(product.product_price).toLocaleString("en-IN")}</h4>
                                                    </div>

                                                    <div class="col-md-3 col-sm-3 col-xs-12">
                                                        <input type="number" value="1" class="quantity" name="quantity">
                                                    </div>

                                                    <div class="col-md-2 col-sm-2 col-xs-12">
                                                        <h4 class="total">₹${Number(product.product_price).toLocaleString("en-IN")}</h4>
                                                    </div>

                                                    <div class="col-md-2 col-sm-2 col-xs-12">
                                                        <i class="fa fa-trash deletefromcart" data-id="${product.id}"></i>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                `;

                                container.innerHTML += cardHTML;
                            });
                            return; 

                        }else{
                            const container = document.getElementById("product-order-table");
                            container.innerHTML = "<div id='cartempty'>cart is empty</div";
                            $('#cartCheckout').hide();
                            return;
                        }

                    },
                    error: function (xhr) {
                        console.error(xhr.responseText);
                        Swal.fire("Error", "Server error", "error");
                    }
                });
 
            }

            loadCartProducts();
        </script>

    

</body>
</html>