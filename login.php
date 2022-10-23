<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

  <title>POLY TEKWINE - Login page</title>

  <!-- Bootstrap core CSS -->

  <script src="https://kit.fontawesome.com/a81368914c.js"></script>
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Additional CSS Files -->
  <link rel="stylesheet" href="assets/css/fontawesome.css">
  <link rel="stylesheet" href="assets/css/main.css">
  <link rel="stylesheet" href="assets/css/owl.css">
  <link rel="stylesheet" href="assets/css/lightbox.css">


  <!--


-->
</head>

<body>
  <div class="sub-header">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-sm-8">
          <div class="left-content">

          </div>
        </div>
        <div class="col-lg-4 col-sm-4">
          <div class="right-icons">
            <ul>
              <li><a href="https://web.facebook.com/POLY-Tekwine-105217592033182"><i class="fa fa-facebook"></i></a></li>
              <li><a href="https://www.youtube.com/channel/UCM0ONyX0RavakXWBXgOrUVA/featured"><i class="fa fa-youtube"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <!-- ***** Logo Start ***** -->
            <a href="index.html" class="logo">
              POLY TEKWINE
            </a>
            <!-- ***** Logo End ***** -->
            <!-- ***** Menu Start ***** -->
            <ul class="nav">
              <li><a href="index.php">Accueil</a></li>
              <li><a href="formations.html">Nos formations</a></li>
              <li><a href="registration.php">Inscription online</a></li>
              <li class="has-sub">
                <a href="javascript:void(0)">autres</a>
                <ul class="sub-menu">
                  <li><a href="login.php">Admin space</a></li>
                </ul>
              </li>
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
  <!-- ***** Header Area End ***** -->

  <section class="heading-page admin-page header-text" id="top">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h6>a space for POLT TEKWINE co-workers</h6>
          <h2>Admine Space</h2>
        </div>
      </div>
    </div>
  </section>
  <section class="contact-us" id="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 img-log">
          <div class="img">
            <img src="tools/undraw_personal_goals_re_iow7.svg">
          </div>

        </div>
        <div class="col-lg-6 align-self-center">
          <div class="row">
            <div class="col-lg-12">
              <form id="contact" class="F_C " action="includes/sing-inc.php" method="post">
                <div class="row">
                  <div class="col-lg-12">
                    <h2>LogIn TO Your account</h2>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>

                      <input type="text" name="admin-name" class="input" required placeholder="Your Email">
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <input type="password" name="pwd" class="input" required placeholder="Your Password">
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <?php
                      if (isset($_GET["error"])) {
                        if ($_GET["error"] == "emptyinput") {
                          echo '<p class="error" > Fill in all filds</p>';
                        }
                        if ($_GET["error"] == "stmtfailed") {
                          echo '<p class="error"> Something went wrong, try again!</p>';
                        }
                        if ($_GET["error"] == "wronglogin") {
                          echo '<p class="error"> Incorrect login information ! </p>';
                        }
                      }
                      ?>
                    </fieldset>
                  </div>

                  <div class="col-lg-12">
                    <fieldset>
                      <button type="submit" id="form-submit" class="button" name="submit">login</button>
                    </fieldset>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>


        <div class="footer">
          <p>Copyright © 2022 POLY-TEKWINE. All Rights Reserved.

        </div>
  </section>


  <script type="text/javascript" src="assets/js/login.js"></script>
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <script src="assets/js/isotope.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/lightbox.js"></script>
  <script src="assets/js/tabs.js"></script>
  <script src="assets/js/video.js"></script>
  <script src="assets/js/slick-slider.js"></script>
  <script src="assets/js/custom.js"></script>




</body>

</html>