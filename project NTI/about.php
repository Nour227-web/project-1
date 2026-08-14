<?php
include_once"header.php";
?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Tech Store - About & Contact</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets\css\bootstrap.min.css">

    
</head>

<body>

    

    <section class="py-5 bg-light">

        <div class="container">

            
            <div class="text-center mb-5">

                <h1 class="fw-bold">
                    About Us
                </h1>

                <p class="text-secondary">
                    Your trusted destination for modern electronics
                </p>

            </div>


            <div class="row align-items-center g-5">

            

                <div class="col-lg-6">

                    <img
                        src="https://images.unsplash.com/photo-1550009158-9ebf69173e03"
                        class="img-fluid rounded-4 shadow"
                        alt="Electronics">

                </div>


                

                <div class="col-lg-6">

                    <h2 class="fw-bold mb-3">
                        Welcome To Tech Store
                    </h2>

                    <p class="text-secondary">
                        Tech Store is your trusted online destination for
                        the latest electronics and technology products.
                        We offer a wide range of high-quality products
                        at competitive prices.
                    </p>

                    <p class="text-secondary">
                        From laptops and mobile phones to accessories and
                        other electronic devices, we provide everything
                        you need in one place.
                    </p>


                

                    <div class="row g-3 mt-4">

                        

                        <div class="col-md-6">

                            <div class="d-flex align-items-center">

                                <i class="bi bi-laptop fs-2 text-primary me-3"></i>

                                <div>

                                    <h5 class="fw-bold mb-1">
                                        Laptops
                                    </h5>

                                    <p class="text-secondary mb-0">
                                        Modern & Powerful
                                    </p>

                                </div>

                            </div>

                        </div>


                        

                        <div class="col-md-6">

                            <div class="d-flex align-items-center">

                                <i class="bi bi-phone fs-2 text-primary me-3"></i>

                                <div>

                                    <h5 class="fw-bold mb-1">
                                        Mobiles
                                    </h5>

                                    <p class="text-secondary mb-0">
                                        Latest Smartphones
                                    </p>

                                </div>

                            </div>

                        </div>


                    

                        <div class="col-md-6">

                            <div class="d-flex align-items-center">

                                <i class="bi bi-headphones fs-2 text-primary me-3"></i>

                                <div>

                                    <h5 class="fw-bold mb-1">
                                        Accessories
                                    </h5>

                                    <p class="text-secondary mb-0">
                                        Useful Accessories
                                    </p>

                                </div>

                            </div>

                        </div>


                

                        <div class="col-md-6">

                            <div class="d-flex align-items-center">

                                <i class="bi bi-shield-check fs-2 text-success me-3"></i>

                                <div>

                                    <h5 class="fw-bold mb-1">
                                        Quality
                                    </h5>

                                    <p class="text-secondary mb-0">
                                        Trusted Products
                                    </p>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>



    

    <section class="py-5">

        <div class="container">

            <!-- Title -->

            <div class="text-center mb-5">

                <h1 class="fw-bold">
                    Contact Us
                </h1>

                <p class="text-secondary">
                    Have a question? We are here to help you.
                </p>

            </div>


            <div class="row g-4">

                <!-- Contact Information -->

                <div class="col-lg-5">

                    <div class="bg-light rounded-4 p-4 h-100">

                        <h3 class="fw-bold mb-4">
                            Get In Touch
                        </h3>


                        

                        <div class="d-flex mb-4">

                            <i class="bi bi-geo-alt-fill fs-3 text-primary me-3"></i>

                            <div>

                                <h5 class="fw-bold mb-1">
                                    Address
                                </h5>

                                <p class="text-secondary mb-0">
                                    Minya, Egypt
                                </p>

                            </div>

                        </div>


                        

                        <div class="d-flex mb-4">

                            <i class="bi bi-telephone-fill fs-3 text-primary me-3"></i>

                            <div>

                                <h5 class="fw-bold mb-1">
                                    Phone
                                </h5>

                                <p class="text-secondary mb-0">
                                    +20 123 456 7890
                                </p>

                            </div>

                        </div>


                        

                        <div class="d-flex mb-4">

                            <i class="bi bi-envelope-fill fs-3 text-primary me-3"></i>

                            <div>

                                <h5 class="fw-bold mb-1">
                                    Email
                                </h5>

                                <p class="text-secondary mb-0">
                                    info@techstore.com
                                </p>

                            </div>

                        </div>


                    

                        <div class="d-flex">

                            <i class="bi bi-clock-fill fs-3 text-primary me-3"></i>

                            <div>

                                <h5 class="fw-bold mb-1">
                                    Working Hours
                                </h5>

                                <p class="text-secondary mb-0">
                                    9:00 AM - 10:00 PM
                                </p>

                            </div>

                        </div>

                    </div>

                </div>



                

                <div class="col-lg-7">

                    <div class="card border-0 shadow-sm rounded-4">

                        <div class="card-body p-4">

                            <h3 class="fw-bold mb-4">
                                Send Us A Message
                            </h3>


                            <form method="POST">

    <div class="row">

        <div class="col-md-6 mb-3">

            <label class="form-label fw-semibold">
                Your Name
            </label>

            <input
                type="text"
                name="name"
                class="form-control"
                placeholder="Enter your name"
                required>

        </div>


        <div class="col-md-6 mb-3">

            <label class="form-label fw-semibold">
                Email
            </label>

            <input
                type="email"
                name="email"
                class="form-control"
                placeholder="Enter your email"
                required>

        </div>

    </div>


    <div class="mb-3">

        <label class="form-label fw-semibold">
            Subject
        </label>

        <input
            type="text"
            name="subject"
            class="form-control"
            placeholder="Enter subject"
            required>

    </div>


    <div class="mb-3">

        <label class="form-label fw-semibold">
            Message
        </label>

        <textarea
            name="message"
            class="form-control"
            rows="5"
            placeholder="Write your message..."
            required></textarea>

    </div>


    <button
        type="submit"
        name="send"
        class="btn btn-primary px-4">

        <i class="bi bi-send-fill me-2"></i>
        Send Message

    </button>

</form>


<?php

if (isset($_POST['send'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    echo "
        <div class='alert alert-success mt-4'>
            Thank you $name! Your message has been sent successfully.
        </div>
    ";
}

?>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>



   


    <script
        src="assets/js/bootstrap.bundle.min.js">
    </script>

</body>

</html>






<?php
include_once"footer.php";
?>
