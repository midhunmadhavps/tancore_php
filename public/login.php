
<?php
    require_once "../config/csrf.php";

    if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
        header("Location: /tanore/public/addProduct.php");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="HTML5" />
    <meta name="description" content="Tanore" />
    <meta name="author" content="itgeeksin.com" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="csrf-token" content="<?= $_SESSION['csrf_token']; ?>">
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">
    <link rel="icon" href="assets/img/favicon.ico" type="image/x-icon">
    <link href="main.css" rel="stylesheet">
    <link href="assets/plugin/switcher/css/switcher.css" rel="stylesheet">
    <link href="assets/css/color.css" rel="stylesheet" id="colors">
    <link href="assets/css/login.css" rel="stylesheet">
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
                                        <img class="site_logo" alt="Site Logo" src="assets/img/all/logo.svg">
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
                                            <a id="shopClick">Our Products</a>
                                        </li>
                                        <li>
                                            <a id="cartClick">Cart</a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- navbar-collapse -->
                            </div>
                            <div class="col-md-4 col-sm-12 col-xs-12 mobile-header">
                                <div class="row pad-top-5 head-top-sec">
                                    <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                                        <figure class="logo-box">
                                            <a class="" href="index.html">
                                                <img alt="" src="assets/img/all/logo.svg"></a>
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

                <!-- <div class="col-md-12 col-sm-12 pad-top100 pad-bottom100 heading-box">

                    <h3 class="heading-breadcrumb box-z text-center">Account</h3>

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

                            <li class="heading-wa box-z activ">Account</li>

                        </ul>

                    </div>

                </div> -->

            </div>

        </div>

    </div>

    <div class="pad-bottom80 pad-top80 blog-griad">

        <div class="container">

            <div class="row">

                <div class="col-md-12 col-sm-12 col-xs-12">


                    <div id="changePassword" class="tabcontent">

                        <div class="row">
                            <div class="col-md-4 col-sm-4 col-xs-12 Profile setting box"></div>


                            <div class="col-md-4 col-sm-4 col-xs-12 Profile setting box login-box">
                                <div class="login_notification" id="login_notification">
                                    <span id="login_notificationText"></span>
                                </div>
                                <form id="loginForm" enctype="multipart/form-data">
                                    <p>
                                        <label>User Name</label>
                                        <input type="text" name="username" class="search_terms" placeholder="">
                                    </p>
                                    <p class="passwrd_p">
                                        <label>Password</label>
                                    <div class="toggleDiv">
                                        <input type="password" id="passwordInput" name="password" class="search_terms"
                                            placeholder="">
                                        <span id="togglePassword" class="toggle-eye">
                                            <i id="openeEye" class="fa fa-eye"></i>
                                            <i id="closeEye" class="fa fa-eye-slash"></i>
                                        </span>
                                    </div>

                                    </p>
                                    <button type="submit" class="itg-button ">Sign in</button>

                                </form>

                                <!-- <button type="button" class="itg-button ">Sign in</button> -->
                            </div>

                            <div class="col-md-4 col-sm-4 col-xs-12 Profile setting box"></div>

                        </div>

                    </div>


                </div>

            </div>

        </div>

    </div>

    <!--//===footer-main-section Start==//-->
        <?php include __DIR__ . '/../includes/footer.php'; ?>
    <!--//===footer-main-section End==//-->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

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

    <script src="assets/js/main.js"></script>
    <script src="assets/js/nodemain.js"></script>
    <script>

        document.getElementById("togglePassword").addEventListener("click", function () {
            const passwordField = document.getElementById("passwordInput");

            if (passwordField.type === "password") {
                passwordField.type = "text";
                $("#closeEye").hide();
                $("#openeEye").show();
            } else {
                passwordField.type = "password";
                $("#openeEye").hide();
                $("#closeEye").show();
            }
        });

        document.addEventListener("DOMContentLoaded", function () {
            document.getElementById("loginForm").addEventListener("submit", async function (e) {
                e.preventDefault();
                adminLogin();
            });
        });

        function adminLogin() {

            try {
                // sessionStorage.setItem("token", result.token);
               
                let username = document.querySelector("[name='username']").value;
                let password = document.querySelector("[name='password']").value;

                $.ajax({
                    url: "/tanore/controller/login.php",
                    type: "POST",
                    data: {
                        username: username,
                        password: password
                    },
                    dataType: "json",
                    headers: {
                        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function (response) {
                        if (response.value === true) {
                            showSuccess(response.message);
                            setTimeout(() => {
                                window.location.href = "/tanore/public/addProduct.php";
                            }, 1000);
                            return;
                        }
                        showError(response.message);
                    },
                    error: function (xhr) {
                        console.error("STATUS:", xhr.status);
                        console.error("RESPONSE:", xhr.responseText);
                        showError("Something went wrong.");
                    }
                });
            } catch (error) {
                console.error("Error:", error);
                showError("Network error, please try again.");
            }
        }

        function showError(msg) {
            const n = document.getElementById("login_notification");
            const t = document.getElementById("login_notificationText");
            t.textContent = msg;
            n.style.background = "red";
            n.style.display = "block";
            setTimeout(() => n.style.display = "none", 4000);
        }

        function showSuccess(msg) {
            const n = document.getElementById("login_notification");
            const t = document.getElementById("login_notificationText");
            t.textContent = msg;
            n.style.background = "#d4edda";
            n.style.display = "block";
            setTimeout(() => n.style.display = "none", 2000);
        }


    </script>

</body>

</html>