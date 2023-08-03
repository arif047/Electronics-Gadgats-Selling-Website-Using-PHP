<?php
    ob_start();
    // include header.php file
    include ('header.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>E-commerce Site</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel="stylesheet" href="css/animate.css">
  
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/magnific-popup.css">

  <link rel="stylesheet" href="css/bootstrap-datepicker.css">
  <link rel="stylesheet" href="css/jquery.timepicker.css">
  
  <link rel="stylesheet" href="css/flaticon.css">
  <link rel="stylesheet" href="css/style.css">

  <link rel="stylesheet" type="text/css" href="css/slideshow.css">
  <link rel="icon" type="image/x-icon" href="images/favicon.png">
  

</head>
<body>



  
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<!--end-->

<!--my slideshow start-->

<div class="galleryContainer">
    <div class="slideShowContainer">
        <div id="playPause" onclick="playPauseSlides()"></div>
        <div onclick="plusSlides(-1)" class="nextPrevBtn leftArrow"><span class="arrow arrowLeft"></span></div>
        <div onclick="plusSlides(1)" class="nextPrevBtn rightArrow"><span class="arrow arrowRight"></span></div>
        <div class="captionTextHolder"><p class="captionText slideTextFromTop"></p></div>
        <div class="imageHolder">
            <img src="images/1.jpg">1366X768
            <p class="captionText">Statement-01</p>
        </div>
        <div class="imageHolder">
            <img src="images/2.jpg">
            <p class="captionText">Statement-02</p>
        </div>
        <div class="imageHolder">
            <img src="images/3.jpg">
            <p class="captionText">Statement-03</p>
        </div>
        <div class="imageHolder">
            <img src="images/4.jpg">
            <p class="captionText">Statement-04</p>
        </div>

        <div class="imageHolder">
            <img src="images/5.jpg">
            <p class="captionText">Statement-05</p>
        </div>
        <div class="imageHolder">
            <img src="images/6.jpg">
            <p class="captionText">Statement-06</p>
        </div>

        <div class="imageHolder">
            <img src="images/7.jpg">
            <p class="captionText">Statement-07</p>
        </div>

        <div class="imageHolder">
            <img src="images/8.jpg">
            <p class="captionText">Statement-08</p>
        </div>

         <div class="imageHolder">
            <img src="images/9.jpg">
            <p class="captionText">Statement-09</p>
        </div>

         <div class="imageHolder">
            <img src="images/10.jpg">
            <p class="captionText">Statement-10</p>
        </div>

         <div class="imageHolder">
            <img src="images/11.jpg">
            <p class="captionText">Statement-11</p>
        </div>

        



























    </div>
    <div id="dotsContainer"></div>
</div>
    <script src="js/slideshow.js"></script>


<!--my slideshow end-->



<footer class="ftco-footer">
  <div class="container mb-5 pb-4">
    <div class="row">
      <div class="col-lg col-md-6">
        <div class="ftco-footer-widget">
          <h2 class="ftco-heading-2 logo d-flex align-items-center"><a href="home.php"><span class="flaticon-health flaticon"></span><span>E-Commerce</span></a></h2>
          <p>We Provide best services in Bangladesh.</p>
          <ul class="ftco-footer-social list-unstyled mt-4">
            <li><a href="https://twitter.com/kuetbd"><span class="fa fa-twitter"></span></a></li>
            <li><a href="https://www.facebook.com/KUET.09"><span class="fa fa-facebook"></span></a></li>
            
          </ul>
        </div>
      </div>

      <div class="col-lg col-md-6">
        <div class="ftco-footer-widget">
          <h2 class="ftco-heading-2">Servicess</h2>
          <ul class="list-unstyled">
            <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Mobile</a></li>
            <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Laptop</a></li>
            <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Electronic Gadget</a></li>
            <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Charger</a></li>
            <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Computer Accessories</a></li>
            <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Monitor</a></li>
            <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Smart LED TV</a></li>
          </ul>
        </div>
      </div>

      <div class="col-lg col-md-6">
        <div class="ftco-footer-widget">
          <h2 class="ftco-heading-2">Links</h2>
          <ul class="list-unstyled">
            <li><a href="home.php"><span class="fa fa-chevron-right mr-2"></span>Home</a></li>
            <li><a href="about.php"><span class="fa fa-chevron-right mr-2"></span>About</a></li>
            <li><a href="gallery.php"><span class="fa fa-chevron-right mr-2"></span>Gallery</a></li>
            <li><a href="faq.php"><span class="fa fa-chevron-right mr-2"></span>FAQ</a></li>
            <li><a href="blog.php"><span class="fa fa-chevron-right mr-2"></span>Blog</a></li>
            <li><a href="pricing.php"><span class="fa fa-chevron-right mr-2"></span>Pricing</a></li>
            <li><a href="contact.php"><span class="fa fa-chevron-right mr-2"></span>Contact</a></li>
          </ul>
        </div>
      </div>

      <div class="col-lg col-md-6">
       <div class="ftco-footer-widget">
        <h2 class="ftco-heading-2">Services</h2>
        <ul class="list-unstyled">
          <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Emergency Order</a></li>
          <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>E-Parcel</a></li>
          <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>E-Care</a></li>
          <li><a href="faq.php"><span class="fa fa-chevron-right mr-2"></span>Refund Policy</a></li>
        </ul>
      </div>
    </div>

    <div class="col-lg col-md-6">
      <div class="ftco-footer-widget">
       <h2 class="ftco-heading-2">Have a Questions?</h2>
       <div class="block-23 mb-3">
         <ul>
           <li><span class="fa fa-map-marker mr-3"></span><span class="text">Mirpur 10, Dhaka, Bangladesh</span></li>
           <li><a href="contact.php"><span class="fa fa-phone mr-3"></span><span class="text">+8801879220747</span></a></li>
           <li><a href="contact.php"><span class="fa fa-paper-plane mr-3"></span><span class="text">rahman1707092@stud.kuet.ac.bd</span></a></li>
         </ul>
       </div>
     </div>
   </div>
 </div>
</div>
<div class="container-fluid bg-primary py-5">
 <div class="row">
  <div class="col-md-12 text-center">
   
            <p class="mb-0">
              <a href="terms.php">Terms & Condition</a> &nbsp;
                <a href="privacy.php">Privacy Policy</a>
                <br/>
                Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved |</p>

            </p>
</div>
</div>
</div>
</footer>


<script src="js/jquery.min.js"></script>
<script src="js/jquery-migrate-3.0.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/jquery.animateNumber.min.js"></script>
<script src="js/bootstrap-datepicker.js"></script>
<script src="js/jquery.timepicker.min.js"></script>
<script src="js/scrollax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="js/google-map.js"></script>

<script src="js/main.js"></script>

</body>
</html>