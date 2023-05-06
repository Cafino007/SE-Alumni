<?php

$hostName = "localhost";
$dbUser = "root";
$dbPassword = "";
$dbName = "alumni";
$conn = mysqli_connect($hostName, $dbUser, $dbPassword, $dbName);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} 
$results_images = array();
$image_urls = array();
$image_path = "upload/";

$sql = "SELECT image FROM gallery";
$sql_run = mysqli_query($conn, $sql);


if (mysqli_num_rows($sql_run) > 0) {
    while ($row = mysqli_fetch_array($sql_run, MYSQLI_ASSOC)) {
        $results_images[] = $row;
    }
}

foreach ($results_images as $row) {
    $image_urls[] = $image_path . str_replace(" ","",$row['image']);
    
}



?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap"
        rel="stylesheet">

    <title>WMSU ALUMNI SYSTEM</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/animated.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <!--



</head>

<body>

    <-- ***** Preloader Start ***** -->
    <div id="js-preloader" class="js-preloader">
        <div class="preloader-inner">
            <span class="dot"></span>
            <div class="dots">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->

    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="#" class="logo">
                            <h4> <img src="assets/images/wmsu.png" alt=""> WMSU Alumni </h4>
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
                            <li class="scroll-to-section"><a href="#Gallery">Gallery</a></li>
                            <li class="scroll-to-section"><a href="#Goals">Goals</a></li>
                            <li class="scroll-to-section"><a href="#About">About Us</a></li>
                            <li class="scroll-to-section"><a href="#Map">Map</a></li>
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <section class="vh-100" style="background-image: url('assets/images/HOMEPAGE.png');background-position: center;">
        <div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-12" style="text-align: center;">
                                <div class="left-content header-text wow fadeInLeft" data-wow-duration="1s"
                                    data-wow-delay="1s">

                                    <div class="col-lg-12">
                                        <h2 style="font-size: 700%;">ALUMNI OFFICE INFORMATION MANAGEMENT</h2>

                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="main-blue-button scroll-to-section">
                                        <a href="list.php">ALUMNI LIST </a>
                                    </div>
                                </div>
                            </div>
                            <div class="row-cols-lg-4">
                                <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                                    <img src="#" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div id="Gallery" class="our-portfolio section">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="section-heading wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">
                        <h6>ALUMNI OFFICE</h6>
                        <h2>A glimpse of the <em>Alumni Office</em> of <span>Western Mindanao State University</span>
                        </h2>
                    </div>
                </div>
            </div>
        </div>


        <div class="container-fluid wow fadeIn" data-wow-duration="1s" data-wow-delay="0.7s">
            <div class="row">
                <div class="col-lg-12">
                    <div class="loop owl-carousel">
                    <?php

                        foreach ($image_urls as $image_url) {

                            echo '
                            <div class="item">
                            <div class="portfolio-item">
                                <div class="thumb">
                                <img src="' . $image_url . '" alt="" width=381px height=215px">
                                </div>
                            </div>
                            </div>
                                ';
                        }
                    ?>
            </div>
    </div>
    </div>
    </div>

    <div id="Goals" class="about-us section">
        <div class="container" style="justify-content: center; padding-top: 15%;">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="left-image wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
                        <img src="assets/images/ICON.png" alt="">
                    </div>
                </div>
                <div class="col-lg-6 align-self-center wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                    <div class="section-heading">
                        <h6>vision and mission</h6>

                        <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis vel lobortis arcu,
                            at
                            dignissim ligula.
                            Nullam et velit at magna hendrerit gravida non ac dui. Pellentesque habitant
                            morbi tristique
                            senectus et
                            netus et malesuada fames ac turpis egestas. Mauris hendrerit, lorem eu pretium
                            pharetra,
                            augue ipsum
                            gravida diam, eget condimentum ex nunc mattis enim. Integer porta imperdiet
                            semper.
                            Curabitur risus nunc,
                            malesuada a faucibus quis, facilisis vel est. Pellentesque iaculis interdum
                            mauris, at
                            gravida ex
                            fringilla quis. Duis malesuada felis quis ipsum bibendum tincidunt.</p>
                    </div>
                </div>
            </div>
        </div>
<br>
        <div id="About" class="about-us section">
            <div class="container" style="justify-content: center; padding-top: 15%;">
                <h2 style="text-align: center; font-weight: bold;">OFFICERS OF THE ALUMNI ASSOCIATION</h2>
                <br>
                <div class="row">
                    <div class="col-3 order-1">
                        <div class="card" style="width: 18rem;">
                            <img src="assets/images/HUMAN1.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title" style="margin-bottom: 0.2rem; font-weight: bold;">RONALD F. ABA-A
                                </h5>
                                <p style="margin-bottom: 0;">Alumni President</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-3 order-2">
                        <div class="card" style="width: 18rem;">
                            <img src="assets/images/HUMAN2.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title" style="margin-bottom: 0.2rem; font-weight: bold;">RONALD F. ABA-A
                                </h5>
                                <p style="margin-bottom: 0;">Alumni President</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-3 order-3">
                        <div class="card" style="width: 18rem; ">
                            <img src="assets/images/HUMAN1.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title" style="margin-bottom: 0.2rem; font-weight: bold;">RONALD F. ABA-A
                                </h5>
                                <p style="margin-bottom: 0;">Alumni President</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-3 order-4">
                        <div class="card" style="width: 18rem;">
                            <img src="assets/images/HUMAN2.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title" style="margin-bottom: 0.2rem; font-weight: bold;">RONALD F. ABA-A
                                </h5>
                                <p style="margin-bottom: 0;">Alumni President</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <br>

            <div id="Map" class="contact-us section" style="color: red;">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.s">
                            <form id="contact" action="" method="post">
                                <div class="row">
                                    <div class="col-lg-6 offset-lg-3">
                                        <div class="section-heading">
                                            <h2>DIRECTIONS TO THE ALUMNI OFFICE</h2>


                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <img src="assets/images/maps.png" alt="">
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <footer>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <p>Copyright © 2023 TRIA-CCS Co., Ltd. All Rights Reserved.

                                <br>Web Designed by CCS GROUP 3 (BSIT3A) STUDENTS</a>
                            </p>
                        </div>
                    </div>
                </div>
            </footer>

            <!-- Scripts -->
            <script src="vendor/jquery/jquery.min.js"></script>
            <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
            <script src="assets/js/owl-carousel.js"></script>
            <script src="assets/js/animation.js"></script>
            <script src="assets/js/imagesloaded.js"></script>
            <script src="assets/js/custom.js"></script>

            </body>

</html>