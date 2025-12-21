<?php
    require_once "../config/csrf.php";

    if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
        header("Location: /tanore/public/login.php");
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
    <link rel="shortcut icon" href="./assets/img/favicon.ico" type="image/x-icon">
    <link rel="icon" href="./assets/img/favicon.ico" type="image/x-icon">
    <link href="main.css" rel="stylesheet">
    <link href="./assets/plugin/switcher/css/switcher.css" rel="stylesheet">
    <link href="./assets/css/color.css" rel="stylesheet" id="colors">
    <link href="./assets/css/login.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <link rel="stylesheet" href="/assets/font-awesome/css/font-awesome.min.css"> -->
    <style>
        .pointer {cursor: pointer;}
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
                                            <!-- <a href="#">Home</a> -->
                                            <button id="logout">Logout</button>
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


                    </div>

                </div>

            </div>

        </div>

    </div>

    <div class="pad-bottom80 pad-top80 blog-griad">

        <div class="container">

            <div class="row">

                <div class="col-md-12 col-sm-12 col-xs-12">

                    <div class="tab pad-bottom40">
                        <button class="tablinks active" id="add-products" data-id="allProducts">All Products</button>

                        <button class="tablinks" data-id="shippingDetail">Add Products</button>

                        <!-- <button class="tablinks" data-id="changePassword">Change Password</button> -->

                    </div>

                  
                    <section id ="allProducts"  class="tabcontent" style="display: block;">
                        <div class="products-section">

                            <div class="container">

                                <div class="row">

                                    <div id="collectiongrid">

                                        <div class="col-md-12 col-sm-12 col-xs-12 pull-right">
                                            <div class="row">
                                                <div id="productsgriads" class="products mar-top30" style="display: block;">

                                                </div>
                                            </div>
                                            <div id="pagination" class="text-center mt-4"></div>
                                        </div>

                                      

                                    </div>

                                </div>

                            </div>

                        </div>
                    </section>


                    <form id="productForm" enctype="multipart/form-data">
                        <div id="shippingDetail" class="tabcontent" style="display: none;">

                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-xs-12 Profile setting box">

                                    <p>
                                        <label>Select Category</label>
                                        <select name="category" id="category" class="search_terms">
                                        </select>
                                    </p>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12 Profile setting box">

                                    <p>
                                        <label>Product Name</label>
                                        <input type="text" id="p_name" name="name" class="search_terms" placeholder="">
                                    </p>
                                </div>

                                <div class="col-md-6 col-sm-6 col-xs-12 Profile setting box">
                                    <p>
                                        <label>Product price</label>
                                        <input type="number" name="price" class="search_terms" placeholder="">
                                    </p>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12 Profile setting box">
                                    <p>
                                        <label>Description</label>
                                        <textarea id="description" name="description" rows="1" cols="50"
                                            class="search_terms" placeholder=""></textarea>
                                    </p>
                                </div>
                                <div class="col-md-12 col-md-12 col-sm-12 col-xs-12 Profile setting box">
                                    <label>Add Products</label>
                                    <div>
                                        <div class="header">
                                            <p>Drag & drop files or click to browse</p>
                                        </div>

                                        <div class="dropbox" id="dropbox">
                                            <div class="dropbox-icon">📁</div>
                                            <div class="dropbox-text">Drop files here</div>
                                            <div class="dropbox-subtext">Supported formats: JPEG, PNG, PDF (Max 5MB)
                                            </div>
                                            <button type="button" class="browse-btn">Browse Files</button>
                                            <input type="file" name="image[]" id="fileInput" multiple hidden>
                                        </div>

                                        <div class="upload-stats" id="uploadStats">

                                            <div class="stats-info">
                                                <div class="stat-item">
                                                    <div class="stat-value" id="fileCount">0</div>
                                                    <div class="stat-label">Files</div>
                                                </div>
                                                <div class="stat-item">
                                                    <div class="stat-value" id="totalSize">0 KB</div>
                                                    <div class="stat-label">Total Size</div>
                                                </div>
                                            </div>
                                            <div class="progress-bar" style="margin-top: 15px;">
                                                <div class="progress-fill" id="progressFill"></div>
                                            </div>
                                        </div>

                                        <div class="empty-state" id="emptyState">
                                            No files uploaded yet
                                        </div>

                                        <div class="file-previews" id="filePreviews"></div>
                                    </div>

                                    <div class="upload-notification" id="notification">
                                        <span id="notificationText"></span>
                                        <div class="notification-progress"></div>
                                    </div>
                                </div>
                                <div class="text-right">
                                    <button type="submit" class="itg-button ">Submit</button>
                                </div>
                            </div>

                        </div>
                    </form>

                </div>

            </div>

        </div>

    </div>

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

    <script src="./assets/js/main.js"></script>
    <script src="./assets/plugin/alert/sweetalert.js"></script>
    <script src="./assets/js/nodemain.js"></script>
    <script>

        let currentPage = 1;
        const perPage = 24;

        $(document).ready(function () {
            loadProducts();
            loadCategories();
        });

        $(document).on("submit", "#productForm", function (e) {
            e.preventDefault();

            const name = document.getElementById("p_name").value.trim();
            const price = document.querySelector("input[name='price']").value.trim();
            const category = document.getElementById("category").value;
            const files = document.getElementById("fileInput").files;

            if (category === "") {
                return Swal.fire("Please select a category", "", "error");
            }
            if (!name) {
                return Swal.fire("Product name is required", "validation", "error");
            }
            if (!price || parseFloat(price) <= 0) {
                return Swal.fire("Please enter a valid price", "validation", "error");
            }
            if (files.length === 0) {
                return Swal.fire("Please upload at least 1 file", "validation", "error");
            }

            submitProductAddForm(); //load all products
        });        

        $(document).on("click", "#logout", function (e) {
            e.preventDefault();
            $.ajax({
                url: "/tanore/controller/logout.php",
                type: "POST",
                dataType: "json",
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr('content')
                },
                success: function (response) {
                    if (response.value === true) {
                        window.location.href = "/tanore/public/login.php";
                    }
                }
            });
        });

        $(document).on("click", "#deleteProduct", function (e) {
            e.preventDefault();
            const productId = $(this).data("id");
            const element = this;

            Swal.fire({
                title: "Are you sure?",
                text: "This product will be permanently deleted.",
                icon: "warning",
                showCancelButton: true,
                confirmButtonText: "Yes, delete it",
                cancelButtonText: "Cancel",
            }).then((result) => {
                if (result.isConfirmed) {
                    deleteProduct(productId, element); 
                }
            });
        });

        $(document).on("click", "#add-products", function (e) {
            e.preventDefault();
            currentPage = 1;
            loadProducts();
        });

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
                        const container = document.getElementById("category");
                        container.innerHTML = `<option value="">Select Category</option>`;

                        categories.forEach(category => {
                            container.innerHTML += `
                                <option value="${category.id}">
                                    ${category.category_name}
                                </option>
                            `;
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

        function submitProductAddForm() {
            
            let formData = new FormData(document.getElementById("productForm"));

            $.ajax({
                url: "/tanore/controller/add-product.php",
                type: "POST",
                data: formData,
                processData: false,
                contentType: false,
                dataType: "json",
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr('content')
                },
                success: function (response) {

                    if (response.data === true) {

                        resetProductForm();

                        Swal.fire({
                            icon: "success",
                            title: "Success",
                            text: "Product added successfully.",
                            timer: 1500,
                            showConfirmButton: false
                        });

                        $("#p_name").focus();
                        return;
                    }

                    Swal.fire({
                        icon: "error",
                        title: "Failed!",
                        text: response.message || "Something went wrong! Please try again later.",
                    });
                },

                error: function (xhr) {
                    Swal.fire("Error", "Something went wrong", "error");
                }
            });
        }

        function resetProductForm() {
            const form = document.getElementById("productForm");
            form.reset();

            document.getElementById("fileInput").value = "";
            document.getElementById("filePreviews").innerHTML = "";

            document.getElementById("fileCount").textContent = "0";
            document.getElementById("totalSize").textContent = "0 KB";
            document.getElementById("progressFill").style.width = "0%";

            document.getElementById("emptyState").style.display = "block";
        }

        function loadProducts(data = {}) {

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
                        console.log("products",products);
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
                                        <img src="${window.location.origin}/assets/img/no-image.png" alt="">
                                    </div>`;
                            }

                            // Product UI block
                            const cardHTML = `
                                    <div class="col-md-2 col-sm-2 col-xs-2 product_itm">
                                        <div class="row">
                                            <div class="owl-carousel owl-theme product-sidebar-slider">
                                                ${sliderItems}
                                            </div>

                                            <figcaption class="figure-boxx figure-section-hover">
                                                <h4 class="theme-headdings text-center pad-top10">
                                                    <a href="#">${product.product_name}</a>
                                                </h4>

                                                <div class="star-box-section text-center">
                                                    <p>${description}</p>
                                                    <span><i class="fa fa-trash pointer" data-id="${product.product_id}" id="deleteProduct"></i></span>
                                                </div>

                                                <p>₹${Number(product.product_price).toLocaleString("en-IN")}</p>
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

                        renderPagination(response.pagination)

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

        function deleteProduct(productId, element) {
            let formData2 = new FormData();
            formData2.append("id", productId);

            $.ajax({
                url: "/tanore/controller/delete-product.php",
                type: "POST",
                data: formData2,
                processData: false,
                contentType: false,
                dataType: "json",
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr('content')
                },
                success: function (response) {

                    if (response.value === true) {
                        $(element).closest(".product_itm").remove();

                        Swal.fire({
                            icon: "success",
                            title: "Deleted!",
                            text: "Product successfully deleted.",
                            timer: 1500,
                            showConfirmButton: false
                        });
                        return;
                    }

                    Swal.fire({
                        icon: "error",
                        title: "Failed!",
                        text: response.message || "Something went wrong! Please try again later.",
                    });
                },

                error: function (xhr) {
                    Swal.fire("Error", "Something went wrong", "error");
                }
            });
        }



        const dropbox = document.getElementById('dropbox');
        const fileInput = document.getElementById('fileInput');
        const filePreviews = document.getElementById('filePreviews');
        const notification = document.getElementById('notification');
        const browseBtn = document.querySelector('.browse-btn');
        const uploadStats = document.getElementById('uploadStats');
        const fileCountEl = document.getElementById('fileCount');
        const totalSizeEl = document.getElementById('totalSize');
        const progressFill = document.getElementById('progressFill');
        const emptyState = document.getElementById('emptyState');

        let fileCount = 0;
        let totalSize = 0;

        // Initialize display
        updateDisplay();

        // Prevent default behavior for drag and drop events
        dropbox.addEventListener('dragover', (e) => {
            e.preventDefault();
            dropbox.classList.add('dragover');
        });

        dropbox.addEventListener('dragleave', () => {
            dropbox.classList.remove('dragover');
        });

        // Handle file drop
        dropbox.addEventListener('drop', (e) => {
            e.preventDefault();
            dropbox.classList.remove('dragover');
            const files = e.dataTransfer.files;
            handleFiles(files);
        });

        // Handle file selection through the input
        fileInput.addEventListener('change', (e) => {
            const files = e.target.files;
            handleFiles(files);
        });

        // Trigger file input when dropbox or browse button is clicked
        dropbox.addEventListener('click', () => {
            fileInput.click();
        });

        browseBtn.addEventListener('click', (e) => {
            e.stopPropagation(); // Prevent event bubbling
            fileInput.click();
        });

        // Handle files
        function handleFiles(files) {
            const allowedTypes = ['image/jpeg', 'image/png', 'application/pdf'];
            const maxSize = 5 * 1024 * 1024; // 5 MB

            if (files.length > 0) {
                let validFiles = 0;
                let invalidFiles = 0;

                Array.from(files).forEach(file => {
                    if (!allowedTypes.includes(file.type)) {
                        showNotification(`${file.name} is not a valid file type.`, 'error');
                        invalidFiles++;
                        return;
                    }

                    if (file.size > maxSize) {
                        showNotification(`${file.name} is too large. Maximum file size is 5 MB.`, 'error');
                        invalidFiles++;
                        return;
                    }

                    // Handle valid file
                    displayFilePreview(file);
                    validFiles++;
                });

                if (validFiles > 0) {
                    simulateUpload(validFiles);
                    showNotification(`${validFiles} file${validFiles !== 1 ? 's' : ''} added successfully.`, 'success');
                }

                if (invalidFiles > 0) {
                    showNotification(`${invalidFiles} file${invalidFiles !== 1 ? 's' : ''} not added due to errors.`, 'error');
                }
            }
        }

        function displayFilePreview(file) {
            const reader = new FileReader();
            const fileId = `file-${Date.now()}-${Math.floor(Math.random() * 1000)}`;

            reader.onload = function (event) {
                const preview = document.createElement('div');
                preview.classList.add('file-preview');
                preview.id = fileId;

                // Format file size
                const fileSize = formatFileSize(file.size);

                // Determine if it's an image or PDF
                const isImage = file.type.startsWith('image/');

                let previewContent;
                if (isImage) {
                    previewContent = `<img src="${event.target.result}" class="preview-img">`;
                } else {
                    previewContent = `<div class="file-icon">📄</div>`;
                }

                preview.innerHTML = `
            <div class="preview-img-container">
                ${previewContent}
            </div>
            <div class="file-info">
                <div class="file-name">${file.name}</div>
                <div class="file-size">${fileSize}</div>
                <div class="file-actions">
                <button class="remove-btn">Remove</button>
                </div>
            </div>
            `;

                // Add remove functionality
                const removeBtn = preview.querySelector('.remove-btn');
                removeBtn.addEventListener('click', () => {
                    removeFile(fileId, file.size);
                });

                filePreviews.appendChild(preview);

                // Update statistics
                fileCount++;
                totalSize += file.size;
                updateDisplay();
            };

            reader.readAsDataURL(file);
        }

        function removeFile(fileId, size) {
            const fileElement = document.getElementById(fileId);
            if (fileElement) {
                // Animate removal
                fileElement.style.opacity = '0';
                fileElement.style.transform = 'scale(0.9)';

                setTimeout(() => {
                    fileElement.remove();

                    // Update statistics
                    fileCount--;
                    totalSize -= size;
                    updateDisplay();

                    showNotification('File removed', 'success');
                }, 300);
            }

            resetFileInput();
        }

        function updateDisplay() {
            fileCountEl.textContent = fileCount;
            totalSizeEl.textContent = formatFileSize(totalSize);

            if (fileCount > 0) {
                uploadStats.style.display = 'block';
                emptyState.style.display = 'none';
                progressFill.style.width = '100%';
            } else {
                uploadStats.style.display = 'none';
                emptyState.style.display = 'block';
            }
        }

        function formatFileSize(bytes) {
            if (bytes === 0) return '0 Bytes';

            const k = 1024;
            const sizes = ['Bytes', 'KB', 'MB', 'GB'];
            const i = Math.floor(Math.log(bytes) / Math.log(k));

            return parseFloat((bytes / Math.pow(k, i)).toFixed(2)) + ' ' + sizes[i];
        }

        function showNotification(message, type = 'success') {
            // Clear any existing timeout
            clearTimeout(notification.timeout);

            // Hide notification if it's already showing
            notification.classList.remove('show', 'success', 'error');

            // Set content and show
            document.getElementById('notificationText').textContent = message;
            notification.classList.add('show', type);

            // Reset progress bar
            const progressBar = notification.querySelector('.notification-progress');
            progressBar.style.transition = 'none';
            progressBar.style.transform = 'scaleX(0)';

            // Force reflow to restart animation
            void notification.offsetWidth;

            // Start progress animation
            progressBar.style.transition = 'transform 3s linear';
            progressBar.style.transform = 'scaleX(1)';

            // Auto-hide after 3 seconds
            notification.timeout = setTimeout(() => {
                notification.classList.remove('show');
            }, 3000);
        }

        function simulateUpload(fileCount) {
            // This would be where you'd actually upload to a server
            // For now we're just showing the progress visually
            progressFill.style.width = '0%';

            setTimeout(() => {
                progressFill.style.width = '30%';

                setTimeout(() => {
                    progressFill.style.width = '60%';

                    setTimeout(() => {
                        progressFill.style.width = '100%';
                    }, 200);
                }, 200);
            }, 100);
        }

        // Reset the file input after a file is removed
        function resetFileInput() {
            fileInput.value = '';
        }

        // Initial UI setup
        function initUI() {
            if (fileCount === 0) {
                uploadStats.style.display = 'none';
                emptyState.style.display = 'block';
            }
        }

        // Initialize UI
        initUI();
    </script>


</body>

</html>