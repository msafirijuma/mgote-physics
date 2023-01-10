<?php
require("controllers/process-form.php");
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>MGOTE PHYSICS</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
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

        <!-- Customized Bootstrap Stylesheet -->
        <link href="css/bootstrap/bootstrap.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body>
        <?php require("includes/spinner.php"); ?>

        <?php require("includes/header.php"); ?>

        <!-- Carousel Start -->
        <div class="container-fluid p-0 mb-5">
            <div class="owl-carousel header-carousel position-relative">
                <div class="owl-carousel-item position-relative">
                    <img class="img" src="img/e-formular.jpg" alt="alert">
                    <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
                        style="background: rgba(24, 29, 56, .7);">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-sm-10 col-lg-8">
                                    <h2 class="display-3 text-white animated slideInDown">ABOUT US</h2>
                                    <p class="fs-5 text-white mb-4 pb-2">We are teaching and providing education
                                        materials and contents to all form 5 and form 6 students. Join now and enjoy
                                        incredible resources, notes, exams and others anywhere online.</p>
                                    <a href="about.php"
                                        class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Read
                                        More</a>
                                    <a href="register.php"
                                        class="btn btn-light py-md-3 px-md-5 animated slideInRight">Join Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="owl-carousel-item position-relative">
                    <img class="img" src="img/lab5.jpg" alt="Student in the laboratory">
                    <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
                        style="background: rgba(24, 29, 56, .7);">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-sm-10 col-lg-8">
                                    <h2 class="display-3 text-white animated slideInDown">PRACTICALS</h2>
                                    <p class="fs-5 text-white mb-4 pb-2">Get an impressive and well
                                        structured A level practical trainings for the preparation of your A level final
                                        examinations.</p>
                                    <a href="about.php"
                                        class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Read
                                        More</a>
                                    <a href="register.php"
                                        class="btn btn-light py-md-3 px-md-5 animated slideInRight">Join Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="owl-carousel-item position-relative">
                    <img class="img" src="img/student-in-the-classroom.jpg" alt="Alert">
                    <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
                        style="background: rgba(24, 29, 56, .7);">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-sm-10 col-lg-8">
                                    <h2 class="display-3 text-white animated slideInDown">EXPERT INSTRUCTORS</h2>
                                    <p class="fs-5 text-white mb-4 pb-2">Meet our reliable and
                                        experienced instructors to take your carrier to the next level. All our
                                        instructors are good in teaching and providing most valuable contents, join now
                                        and enjoy this incredible platform.</p>
                                    <a href="about.php"
                                        class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Read
                                        More</a>
                                    <a href="register.php"
                                        class="btn btn-light py-md-3 px-md-5 animated slideInRight">Join Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="owl-carousel-item position-relative">
                    <img class="img" src="img/atom-img.jpg" alt="alert">
                    <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
                        style="background: rgba(24, 29, 56, .7);">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-sm-10 col-lg-8">
                                    <h2 class="display-3 text-white animated slideInDown">NOTES & EXAMS</h2>
                                    <p class="fs-5 text-white mb-4 pb-2">Be a member of our platform and enjoy a lot
                                        of amazing form 5 and form 6 notes, question papers and examinations for all
                                        student are also available online.</p>
                                    <a href="about.php"
                                        class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Read
                                        More</a>
                                    <a href="register.php"
                                        class="btn btn-light py-md-3 px-md-5 animated slideInRight">Join Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Carousel End -->


        <!-- Main section Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5 my-2 py-2 box-shadow-container">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                        <div class="position-relative h-100">
                            <img class="img-fluid position-absolute w-100 h-100" src="img/h.jpg" alt=""
                                style="object-fit: cover;">
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                        <h4 class="section-title bg-white text-start text-primary pe-3">Notes and videos</h4>
                        <p class="mb-4">The students have been given priority to access notes and videos which helps to
                            increase the understanding of a student in answering different kinds of questions.</p>
                    </div>
                </div>
                <div class="row g-5 my-5 py-2 box-shadow-container">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                        <h4 class="section-title bg-white text-start text-primary pe-3">Practicals and solvings</h4>
                        <p class="mb-4">We are providing sessions which are done practically which teaches the student
                            on
                            how to tackle the practical questions. </p>
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                        <div class="position-relative h-100">
                            <img class="img-fluid position-absolute w-100 h-100" src="img/lab4.jpg" alt="alert"
                                style="object-fit: cover;">
                        </div>
                    </div>
                </div>
                <div class="row g-5 my-2 py-2 box-shadow-container">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                        <div class="position-relative h-100">
                            <img class="img-fluid img-rounded-circle position-absolute w-100 h-100"
                                src="img/student-in-the-classroom.jpg" alt="" style="object-fit: cover;">
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                        <h4 class="section-title bg-white text-start text-primary pe-3">About Us</h4>
                        <p class="mb-4">Mgote physics provide online services through providing useful notes which helps
                            the student to acquire more knowledge moreover we provide online classes.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->


        <!-- Team Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="section-title bg-white text-center text-primary px-3">Instructors</h6>
                    <h1 class="mb-5">Expert Instructors</h1>
                </div>
                <div class="row g-4">
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="team-item bg-light">
                            <div class="overflow-hidden">
                                <img class="img-fluid" src="img/mgote.jpg" alt="">
                            </div>
                            <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                                <div class="bg-light d-flex justify-content-center pt-2 px-1">
                                    <a class="btn btn-sm-square btn-primary mx-1"
                                        href="https://www.facebook.com/said.mgote"><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-sm-square btn-primary mx-1" href=""><i
                                            class="fab fa-twitter"></i></a>
                                    <a class="btn btn-sm-square btn-primary mx-1"
                                        href="https://www.instagram.com/saidmgote/"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="text-center p-4">
                                <h5 class="mb-0">Said Mgote</h5>
                                <small>Senior Instructor</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="team-item bg-light">
                            <div class="overflow-hidden">
                                <img class="img-fluid" src="img/team-2.jpg" alt="">
                            </div>
                            <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                                <div class="bg-light d-flex justify-content-center pt-2 px-1">
                                    <a class="btn btn-sm-square btn-primary mx-1" href=""><i
                                            class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-sm-square btn-primary mx-1" href=""><i
                                            class="fab fa-twitter"></i></a>
                                    <a class="btn btn-sm-square btn-primary mx-1" href=""><i
                                            class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="text-center p-4">
                                <h5 class="mb-0">Instructor Name</h5>
                                <small>Designation</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team End -->


        <?php require("includes/footer.php") ?>
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
    </body>

</html>