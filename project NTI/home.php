<?php
include_once("header.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Electro Store</title>

</head>

<body>


<!-- ================================================= -->
<!-- SLIDER -->
<!-- ================================================= -->

<div class="container mt-3">

    <div id="carouselExampleControls"
         class="carousel slide"
         data-bs-ride="carousel">

        <div class="carousel-inner">

            <div class="carousel-item active">

                <img src="images/slide2.jpg"
                     class="d-block w-100"
                     alt="Electronic Products">

            </div>

            <div class="carousel-item">

                <img src="images/slide1.jpg"
                     class="d-block w-100"
                     alt="Smartphones">

            </div>

            <div class="carousel-item">

                <img src="images/slide.jpg"
                     class="d-block w-100"
                     alt="Electronic Accessories">

            </div>

        </div>


        <button class="carousel-control-prev"
                type="button"
                data-bs-target="#carouselExampleControls"
                data-bs-slide="prev">

            <span class="carousel-control-prev-icon"
                  aria-hidden="true">
            </span>

            <span class="visually-hidden">
                Previous
            </span>

        </button>


        <button class="carousel-control-next"
                type="button"
                data-bs-target="#carouselExampleControls"
                data-bs-slide="next">

            <span class="carousel-control-next-icon"
                  aria-hidden="true">
            </span>

            <span class="visually-hidden">
                Next
            </span>

        </button>

    </div>

</div>



<!-- ================================================= -->
<!-- PRODUCTS -->
<!-- ================================================= -->

<div id="products"
     class="container py-5">

    <div class="text-center mb-5">

        <h2 class="fw-bold">
            Latest Products
        </h2>

        <p class="text-muted">
            Discover the latest laptops, smartphones, and electronic accessories
        </p>

    </div>


    <div class="row justify-content-center g-4">


        <!-- ================================================= -->
        <!-- CARD 1 - LAPTOP -->
        <!-- ================================================= -->

        <div class="col-lg-4 col-md-6 d-flex justify-content-center">

            <div class="card shadow-sm border-0 h-100"
                 style="width: 22rem;">

                <img src="images/Two MacBook Air M2 Space Gray.jpg"
                     class="card-img-top"
                     style="height: 230px; object-fit: contain;"
                     alt="Laptop">

                <div class="card-body text-center">

                    <span class="badge bg-primary mb-2">
                        Best Seller
                    </span>

                    <h5 class="card-title fw-bold">
                        Laptop
                    </h5>

                    <p class="card-text text-muted">
                        Powerful and reliable laptops suitable for
                        work, studying, programming, and gaming.
                    </p>

                    <p class="mb-2">

                        <span class="text-muted text-decoration-line-through">
                            28,000 EGP
                        </span>

                    </p>

                    <h4 class="fw-bold text-primary">
                        25,000 EGP
                    </h4>


                    <!-- Product Details Button -->

                    <button type="button"
                            class="btn btn-primary px-4 mt-2"
                            data-bs-toggle="modal"
                            data-bs-target="#exampleModal">

                        Product Details

                    </button>

                </div>

            </div>

        </div>



        <!-- ================================================= -->
        <!-- CARD 2 - SMARTPHONE -->
        <!-- ================================================= -->

        <div class="col-lg-4 col-md-6 d-flex justify-content-center">

            <div class="card shadow-sm border-0 h-100"
                 style="width: 22rem;">

                <img src="images/iPhone 17 Pro, iPhone 17 Pro Max.jpg"
                     class="card-img-top"
                     style="height: 230px; object-fit: contain;"
                     alt="Smartphone">

                <div class="card-body text-center">

                    <span class="badge bg-danger mb-2">
                        Special Offer
                    </span>

                    <h5 class="card-title fw-bold">
                        Smartphone
                    </h5>

                    <p class="card-text text-muted">
                        Modern smartphones with powerful performance,
                        excellent cameras, and long-lasting batteries.
                    </p>

                    <p class="mb-2">

                        <span class="text-muted text-decoration-line-through">
                            40,000 EGP
                        </span>

                    </p>

                    <h4 class="fw-bold text-primary">
                        35,000 EGP
                    </h4>


                    <!-- Product Details Button -->

                    <button type="button"
                            class="btn btn-primary px-4 mt-2"
                            data-bs-toggle="modal"
                            data-bs-target="#exampleModal">

                        Product Details

                    </button>

                </div>

            </div>

        </div>



        <!-- ================================================= -->
        <!-- CARD 3 - ACCESSORIES -->
        <!-- ================================================= -->

        <div class="col-lg-4 col-md-6 d-flex justify-content-center">

            <div class="card shadow-sm border-0 h-100"
                 style="width: 22rem;">

                <img src="images/Sony headphones 📍.jpg"
                     class="card-img-top"
                     style="height: 230px; object-fit: contain;"
                     alt="Electronic Accessories">

                <div class="card-body text-center">

                    <span class="badge bg-success mb-2">
                        Best Price
                    </span>

                    <h5 class="card-title fw-bold">
                        Electronic Accessories
                    </h5>

                    <p class="card-text text-muted">
                        High-quality headphones, chargers, cables,
                        power banks, and other useful accessories.
                    </p>

                    <p class="mb-2">

                        <span class="text-muted text-decoration-line-through">
                            2,000 EGP
                        </span>

                    </p>

                    <h4 class="fw-bold text-primary">
                        1,500 EGP
                    </h4>


                    <!-- Product Details Button -->

                    <button type="button"
                            class="btn btn-primary px-4 mt-2"
                            data-bs-toggle="modal"
                            data-bs-target="#exampleModal">

                        Product Details

                    </button>

                </div>

            </div>

        </div>


    </div>

</div>



<!-- ================================================= -->
<!-- PRODUCT DETAILS MODAL -->
<!-- ================================================= -->

<div class="modal fade"
     id="exampleModal"
     tabindex="-1"
     aria-labelledby="exampleModalLabel"
     aria-hidden="true">

    <div class="modal-dialog">

        <div class="modal-content">


            <!-- Modal Header -->

            <div class="modal-header">

                <h1 class="modal-title fs-5"
                    id="exampleModalLabel">

                    Product Details

                </h1>

                <button type="button"
                        class="btn-close"
                        data-bs-dismiss="modal"
                        aria-label="Close">
                </button>

            </div>


            <!-- Modal Body -->

            <div class="modal-body text-center">

                <h4 class="fw-bold">
                    Laptop
                </h4>

                <hr>

                <p>
                    <strong>Processor:</strong>
                    Intel Core i7
                </p>

                <p>
                    <strong>RAM:</strong>
                    16GB
                </p>

                <p>
                    <strong>Storage:</strong>
                    512GB SSD
                </p>

                <p>
                    <strong>Display:</strong>
                    15.6-inch Full HD
                </p>

                <h4 class="fw-bold text-primary mt-4">
                    Price: 25,000 EGP
                </h4>

            </div>


            <!-- Modal Footer -->

            <div class="modal-footer">

                <button type="button"
                        class="btn btn-secondary"
                        data-bs-dismiss="modal">

                    Close

                </button>

                <button type="button"
                        class="btn btn-primary">

                    Buy Now

                </button>

            </div>

        </div>

    </div>

</div>



<!-- ================================================= -->
<!-- SHOW MORE PRODUCTS BUTTON -->
<!-- ================================================= -->

<button type="button"
        class="btn btn-primary d-block mx-auto mb-5"
        data-bs-toggle="modal"
        data-bs-target="#productsModal">

    Show More Products

</button>



<!-- ================================================= -->
<!-- SHOW MORE PRODUCTS MODAL -->
<!-- ================================================= -->

<div class="modal fade"
     id="productsModal"
     tabindex="-1"
     aria-labelledby="productsModalLabel"
     aria-hidden="true">

    <div class="modal-dialog">

        <div class="modal-content">


            <!-- Modal Header -->

            <div class="modal-header">

                <h1 class="modal-title fs-5"
                    id="productsModalLabel">

                    Choose a Category

                </h1>

                <button type="button"
                        class="btn-close"
                        data-bs-dismiss="modal"
                        aria-label="Close">
                </button>

            </div>


            <!-- Modal Body -->

            <div class="modal-body text-center">

                <p class="text-muted mb-4">
                    Choose the category you want to explore
                </p>


                <!-- Laptops -->

                <a href="laptops.php"
                   class="btn btn-primary w-100 mb-3">

                    💻 Laptops

                </a>


                <!-- Smartphones -->

                <a href="mobiles.php"
                   class="btn btn-success w-100 mb-3">

                    📱 Smartphones

                </a>


                <!-- Accessories -->

                <a href="accessories.php"
                   class="btn btn-warning w-100">

                    🎧 Electronic Accessories

                </a>

            </div>


            <!-- Modal Footer -->

            <div class="modal-footer">

                <button type="button"
                        class="btn btn-secondary"
                        data-bs-dismiss="modal">

                    Close

                </button>

            </div>

        </div>

    </div>

</div>



<!-- ================================================= -->
<!-- ABOUT OUR STORE -->
<!-- ================================================= -->

<section class="container my-5">

    <div class="row align-items-center g-5">


        <!-- Text -->

        <div class="col-md-6">

            <h2 class="fw-bold mb-4">
                About Our Store
            </h2>

            <p class="lead">
                Everything you need from electronics in one place 💻📱
            </p>

            <p class="text-secondary">
                We provide a wide range of laptops, smartphones,
                and electronic accessories suitable for work,
                studying, entertainment, and everyday use.
            </p>

            <p class="text-secondary">
                We focus on providing high-quality products at
                competitive prices, along with excellent customer
                service to help you choose the right product.
            </p>

            <a href="about.php"
               class="btn btn-primary px-4">

                Learn More About Us

            </a>

        </div>


        <!-- Image -->

        <div class="col-md-6">

            <img src="images/download (13).jpg"
                 class="img-fluid rounded-4 shadow"
                 alt="Electronic Products">

        </div>

    </div>

</section>



<!-- ================================================= -->
<!-- WHY CHOOSE US -->
<!-- ================================================= -->

<section class="py-5">

    <div class="container">

        <div class="text-center mb-5">

            <h2>
                Why Choose Us?
            </h2>

            <p class="text-muted">
                Everything you need to enjoy the latest technology
            </p>

        </div>


        <div class="row g-4">


            <!-- Latest Technology -->

            <div class="col-lg-3 col-md-6">

                <div class="card h-100 border-0 shadow-sm text-center p-4">

                    <div class="fs-1">
                        💻
                    </div>

                    <h5 class="mt-3">
                        Latest Technology
                    </h5>

                    <p class="text-muted">
                        We offer the latest laptops, smartphones,
                        and electronic devices.
                    </p>

                </div>

            </div>


            <!-- High Quality -->

            <div class="col-lg-3 col-md-6">

                <div class="card h-100 border-0 shadow-sm text-center p-4">

                    <div class="fs-1">
                        ⭐
                    </div>

                    <h5 class="mt-3">
                        High Quality
                    </h5>

                    <p class="text-muted">
                        We provide high-quality products from
                        trusted brands.
                    </p>

                </div>

            </div>


            <!-- Fast Shipping -->

            <div class="col-lg-3 col-md-6">

                <div class="card h-100 border-0 shadow-sm text-center p-4">

                    <div class="fs-1">
                        🚚
                    </div>

                    <h5 class="mt-3">
                        Fast Shipping
                    </h5>

                    <p class="text-muted">
                        Fast and secure delivery for
                        all your orders.
                    </p>

                </div>

            </div>


            <!-- Best Prices -->

            <div class="col-lg-3 col-md-6">

                <div class="card h-100 border-0 shadow-sm text-center p-4">

                    <div class="fs-1">
                        💰
                    </div>

                    <h5 class="mt-3">
                        Best Prices
                    </h5>

                    <p class="text-muted">
                        Competitive prices and special offers
                        on our products.
                    </p>

                </div>

            </div>

        </div>

    </div>

</section>



<?php
include_once("footer.php");
?>

</body>

</html>