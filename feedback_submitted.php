<?php
include('db_con.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MovieNexus - Your Movie Database</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="media-queries.css">
</head>
<style>




</style>




<body>

    <header>

        <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
            <div class="d-flex flex-grow-1">
                <a class="navbar-brand" href="/">
                    <img src=".\Images\logo.png" alt="logo" class="logo">
                </a>

                <!-- Search bar -->
                <form class="mr-2 my-auto w-100 d-inline-block order-1 " action="#/action_page.php">
                    <div class="input-group">
                        <input type="text" class="form-control border border-right-0" placeholder="Search...">
                        <span class="input-group-append">
                            <button class="btn btn-outline-light border border-left-0" type="submit">
                                <i class="fa fa-search"></i>
                            </button>
                        </span>
                    </div>
                </form>





            </div>
            <button class="navbar-toggler order-0" type="button" data-toggle="collapse" data-target="#navbar7">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse collapse flex-shrink-1 flex-grow-0 order-last" id="navbar7">
                <!-- Navbar links -->
                <div class="items">
                    <ul class="navbar-nav navbar-nav  navbar-expand-sm  text-center ">
                        <li class="nav-item">
                            <a class="nav-link active" href="">LIVE</a>

                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href=""> Home</a>

                        </li>

                        <!-- DROP DOWN SECTION-->
                        <!-- CATEGORY -->
                        <li class="nav-item dropdown">

                            <a class="nav-link dropdown-toggle active" id="navbardrop" data-toggle="dropdown">
                                Category
                            </a>

                            <div class="dropdown-menu  dropdown-menu-right bg-light" style="width:300px">

                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <a class="dropdown-item category-item" href="">Action</a>
                                            <a class="dropdown-item category-item" href="">Thriller</a>
                                            <a class="dropdown-item category-item" href="">Drama</a>
                                            <a class="dropdown-item category-item" href="">Crime</a>
                                            <a class="dropdown-item category-item" href="">Adventure</a>
                                            <a class="dropdown-item category-item" href="">Family</a>
                                            <a class="dropdown-item category-item" href="">Animation</a>
                                            <a class="dropdown-item category-item" href="">Fantasy</a>
                                        </div>
                                        <div class="col-md-6">
                                            <a class="dropdown-item category-item" href="">Sci-Fi</a>
                                            <a class="dropdown-item category-item" href="">Romance</a>
                                            <a class="dropdown-item category-item" href="">Horror</a>
                                            <a class="dropdown-item category-item" href="">Sports</a>
                                            <a class="dropdown-item category-item" href="">Biography</a>
                                            <a class="dropdown-item category-item" href="">History</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href=""><i class="fas fa-sign-in-alt"></i> Sign
                                In</a>
                        </li>
                        <!-- DROP DOWN SECTION-->
                        <!-- LANGUAGE -->

                        <li class="nav-item dropdown">

                            <a class="nav-link dropdown-toggle active" id="navbardrop" data-toggle="dropdown"><i class="fas fa-globe"></i>
                                EN
                            </a>

                            <div class="dropdown-menu  dropdown-menu-right bg-light">

                                <a class="dropdown-item" href="">English (United States) <i class="fa fa-check text-success ms-2"> </i></a>
                                <a class="dropdown-item" href="">Hindi</a>
                                <a class="dropdown-item" href="">Canada</a>
                                <a class="dropdown-item" href="">Français</a>
                                <a class="dropdown-item" href="">Polski</a>
                                <a class="dropdown-item" href="">中文</a>
                                <a class="dropdown-item" href="">日本語</a>
                                <a class="dropdown-item" href="">Deutsch</a>
                                <a class="dropdown-item" href="">Español</a>
                                <a class="dropdown-item" href="">Русский</a>
                                <a class="dropdown-item" href="">Português</a>
                            </div>
                        </li>

                        <!-- FOR Smaller Devices Search Bar -->

                        <form class="form-mobile" action="#/form1-action">

                            <div class="form-group ">
                                <form class="form-inline" action="#/action_page.php">
                                    <input class="form-control mb-1" type="text" placeholder="Search...">
                                    <button class="btn btn-success " type="submit"><i class="fa fa-search"></i>
                                        Search</button>
                                </form>
                            </div>
                        </form>

                    </ul>
                </div>
            </div>
        </nav>
    </header>


    <!-- Feed-back form -->

    <div class="container">
        <form action="index.php" method="POST" class="form bg-dark  ">

            <div class="alert alert-info text-center">
                Feedback submitted successfully!
                <br>Our team will review your message and get back to you shortly.

            </div>

            <button class="btn btn-primary btn-block mb-2">Home </button>


        </form>
    </div>





    <!-- Footer Section -->


    <footer>

        <div class="footer-content bg-dark ">

            <div class="container-fluid">

                <div class="footer-links">
                    <ul class="footer-list">
                        <h1 class="footer-brand"><a class="navbar-brand" href="/">
                                <img src=".\Images\logo.png" alt="logo" class="footer-logo">
                            </a></h1>
                        <div>
                            <P class="slogan">Movies & TV Shows, Online cinema, <br> Movie database HTML
                                Template</P>
                        </div>

                        <div class="social-link">
                            <a href=""><i class="fab fa-facebook"></i></a>
                            <a href=""><i class="fab fa-twitter"></i></a>
                            <a href=""><i class="fab fa-instagram"></i></a>
                            <a href=""><i class="fab fa-google"></i></a>
                            <a href=""><i class="fab fa-youtube"></i></a>
                            <a href=""><i class="fab fa-github"></i></a>

                        </div>

                    </ul>

                    <ul class="footer-list">
                        <h4 class="link-heading">MovieNexus</h4>
                        <li class="link-item"><a href="">About us</a></li>
                        <li class="link-item"><a href="">Contact us</a></li>
                        <li class="link-item"><a href="">Request us</a></li>
                        <li class="link-item"><a href="">Connects us</a></li>
                    </ul>

                    <ul class="footer-list">
                        <h4 class="link-heading">Browse</h4>
                        <li class="link-item"><a href="">Live Tv</a></li>
                        <li class="link-item"><a href="">Live News</a></li>
                        <li class="link-item"><a href="">Live Sports</a></li>
                        <li class="link-item"><a href="">Streaming Library</a></li>
                    </ul>

                    <ul class="footer-list">
                        <h4 class="link-heading">Help</h4>
                        <li class="link-item"><a href="">Account</a></li>
                        <li class="link-item"><a href="">Supported Devices</a></li>
                        <li class="link-item"><a href="">Accessibility</a></li>
                        <li class="link-item"><a href="">New Features & Updates</a></li>
                    </ul>

                </div>

            </div>
            <hr class="mb-3" />

            <div class="container-fluid ">
                <div class="footer-copyright ">
                    <div class="copyright">
                        <p>Copyright &copy; 2023. MovieNexus. All rights reserved.</p>
                    </div>


                    <div class="wrapper d-flex  flex-wrap">
                        <a href="">Terms of Use</a>
                        <a href="">Privacy Policy</a>
                        <a href="">Cookie Policy</a>

                    </div>

                </div>


            </div>
        </div>

    </footer>



</body>

</html>