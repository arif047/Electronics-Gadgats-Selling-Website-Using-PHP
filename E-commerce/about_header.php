<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commerce Site</title>



    <!--for go to top button-->
    <script src="js/top.js"></script>
    <link rel="stylesheet" href="css/top.css">
    <link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
    




    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Owl-carousel CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha256-UhQQ4fxEeABh4JrcmAJ1+16id/1dnlOEVCFOxDef9Lw=" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha256-kksNxjDRxd/5+jGurZUJd1sdR2v+ClrCl3svESBaJqw=" crossorigin="anonymous" />

    <!-- font awesome icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />

    <!-- Custom CSS file -->
    <link rel="stylesheet" href="style.css">

    <?php
    // require functions.php file
    require ('functions.php');
    ?>

</head>
<body>

<button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fas fa-angle-double-up"></i></button>


<?php
session_start();
?>


<!-- start #header -->
<header id="header">
    <div class="strip d-flex justify-content-between px-4 py-1 bg-dark">



        <p class="font-rale font-size-12 text-light-50 m-0" style="color: white; size: 15px;">


            <?php
                        if($_SESSION == null){ echo "Please Log In...";}
                        else if ($_SESSION['user_name'] != null) {
                    
                         echo "Welcome    ".$_SESSION['user_name'];
                         }
                
            ?>

        </p>



        <div class="font-rale font-size-14">

            <a href="user_reg/my_reg.php" class="px-3 border-right border-left text-light">Sign Up</a>
            <a href="user_reg/login.php" class="px-3 border-right border-left text-light">Login</a>
            <a href="user_reg/recover_email.php" class="px-3 border-right text-white">Password Recovery</a>
            <a href="user_reg/logout.php" class="px-3 border-right text-white">Log Out</a>
            <a href="user_reg/factor_emailverify.php" class="px-3 border-right text-white">Secure Account</a>
            <a href="Admin/admin_home.php" class="px-3 border-right text-white">Admin Panel</a>
            <input id="search" type="text" name="search" placeholder="Search here...">
            <a href="search.php"><button>&nbsp;<i class="fas fa-search"> &nbsp;</i></button></a>
            
        </div>
    </div>

    <!-- Primary Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark color-second-bg">
        <a class="navbar-brand" href="home.php"> </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav m-auto font-rubik">


                <li class="nav-item">
                    <a class="nav-link" href="home.php">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php">About</a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link" href="home.php">Products <i class="fas fa-chevron-down"></i></a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link" href="gallery.php">Gallery</a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link" href="Blog/index.php">BLOG</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="faq.php">FAQ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="privacy.php">Privacy</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="terms.php">TERMS</a>
                </li>
            </ul>
            <form action="#" class="font-size-14 font-rale">
                <a href="cart.php" class="py-2 rounded-pill color-primary-bg">
                    <span class="font-size-16 px-2 text-white"><i class="fas fa-shopping-cart"></i></span>
                    <span class="px-3 py-2 rounded-pill text-dark bg-light"><?php echo count($product->getData('cart')); ?></span>
                </a>
            </form>
        </div>
    </nav>
    <!-- !Primary Navigation -->

</header>
<!-- !start #header -->

<!-- start #main-site -->
<main id="main-site">