<?php
require("controllers/process-form.php");
if (empty($_SESSION["user_id"])) {
    header("location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="" name="keywords">
        <meta content="" name="description">
        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link
            href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap"
            rel="stylesheet">

        <!-- Icon Font Stylesheet -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
        <title>Members | Mgote Physics</title>
    </head>

    <body>

        <?php require("includes/header.php"); ?>

        <div class="d-flex justify-content-center my-1 mt-5">
            <h2 class="text-primary">Premium Features</h2>
        </div>
        <!-- Start Premium Features -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-4">
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item text-center pt-3">
                            <div class="p-4">
                                <i class="fab fa-3x fa-youtube text-primary mb-4"></i>
                                <h5 class="mb-3"><a href="tutorials">Tutorials</a></h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="service-item text-center pt-3">
                            <div class="p-4">
                                <i class="fa fa-3x fa-globe text-primary mb-4"></i>
                                <h5 class="mb-3"><a href="#">Handout & PDF(s)</a></h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="service-item text-center pt-3">
                            <div class="p-4">
                                <i class="fa fa-3x fa-pen-square text-primary mb-4"></i>
                                <h5 class="mb-3"><a href="solvings.php">Solvings</a></h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="service-item text-center pt-3">
                            <div class="p-4">
                                <i class="fa fa-3x fa-book-open text-primary mb-4"></i>
                                <h5 class="mb-3"><a href="notes.php">Notes</a></h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="service-item text-center pt-3">
                            <div class="p-4">
                                <i class="fa fa-3x fa-book text-primary mb-4"></i>
                                <h5 class="mb-3"><a href="books.php">Reference Books</a></h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="service-item text-center pt-3">
                            <div class="p-4">
                                <i class="fa fa-3x fa-folder-open k text-primary mb-4"></i>
                                <h5 class="mb-3"><a href="examinations.php">Examinations</a></h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="service-item text-center pt-3">
                            <div class="p-4">
                                <i class="fa fa-3x fa-user-circle text-primary mb-4"></i>
                                <h5 class="mb-3"><a href="profile.php">Your Profile</a></h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Premium Features -->

        <?php require("includes/footer.php"); ?>
    </body>

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>

</html>