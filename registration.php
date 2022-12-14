<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

  <title>POLY TEKWINE - Registration page</title>

  <!-- Bootstrap core CSS -->

  <script src="https://kit.fontawesome.com/a81368914c.js"></script>
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Additional CSS Files -->

  <link rel="stylesheet" href="assets/css/fontawesome.css">

  <link rel="stylesheet" href="assets/css/owl.css">
  <link rel="stylesheet" href="assets/css/lightbox.css">
  <link rel="stylesheet" type="text/css" href="assets/css/login.css">
  <link rel="stylesheet" href="assets/css/main.css">





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
            <!-- ***** Menu Start *****
            <ul class="nav">
              <li><a href="index.php">Accueil</a></li>
              <li><a href="formations.html">Nos formations</a></li>
              <li><a href="registration.php" class="active">Inscription online</a></li>

              <li class="has-sub">
                <a href="javascript:void(0)">autres</a>
                <ul class="sub-menu">
                  <li><a href="login.php">Admin space</a></li>
                </ul>
              </li>
            </ul>
            <a class='menu-trigger'>
              <span>Menu</span>
            </a> -->
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
          <h6>Boost your self, skills, career and your confidence </h6>
          <h2>Inscription online</h2>
        </div>
      </div>
    </div>
  </section>

  <section class="contact-us" id="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 align-self-center">
          <div class="row">
            <div class="col-lg-12">
              <form id="contact" class="F_C" action="includes/inscription.inc.php" method="post">
                <div class="row">
                  <div class="col-lg-12">
                    <h2>INSCRIPTION ONLINE</h2>
                  </div>
                  <div class="col-lg-6">
                    <fieldset>
                      <input name="name" type="text" placeholder="Nom et pr??nom *" required>
                    </fieldset>
                  </div>
                  <div class="col-lg-6">
                    <fieldset>
                      <input name="email" type="text" pattern="[^ @]*@[^ @]*" placeholder="Email *" required>
                    </fieldset>
                  </div>
                  <div class="col-lg-6">
                    <fieldset>
                      <input name="phone" type="text" placeholder="Num??ro de t??l??phone *" required>
                    </fieldset>
                  </div>
                  <div class="col-lg-6">
                    <fieldset>
                      <input name="Bday" type="date" placeholder="Date de naissance *" required>
                    </fieldset>
                  </div>

                  <div class="col-lg-12">
                    <fieldset>
                      <select class="select select-list" name="level" required>
                        <option>Niveau d'??tudes *</option>
                        <option value="aucun">aucun</option>
                        <option value="Bac">Bac</option>
                        <option value="Licence">Licence</option>
                        <option value="Master">Master</option>
                      </select>
                    </fieldset>
                  </div>

                  <div class="col-lg-12">
                    <fieldset>
                      <select class="select select-list" name="formation" required>
                        <option>Choisissez votre formation *</option>
                        <option value="Electricit?? b??timent">???????????????? ?????????????????? | Electricit?? b??timent</option>
                        <option value="Electricit?? industrielle">???????????????? ???????????????? | Electricit?? industrielle</option>
                        <option value="installation panneaux solaires photovolta??ques">???????????? ?????????????? | installation panneaux solaires photovolta??ques</option>
                        <option value="Electronique">?????????????????????? | Electronique</option>
                        <option value="R??paration des t??l??phones portable">?????????? ???????????? ???????????? | R??paration des t??l??phones portable</option>
                        <option value="R??paration des cartes ??lectronique">?????????? ?????????????? ?????????????????????? | R??paration des cartes ??lectronique</option>
                        <option value="Installation et entretien des appareils de froid et climatisation">?????????? ???????????? ?????????? ?????????????? ???????????????? | Installation et entretien des appareils de froid et climatisation</option>
                        <option value="Installation et maintenance des syst??mes d???alarme et de vid??osurveillance">?????????? ???????????? ?????????? ?????????????? ?????????????????? | Installation et maintenance des syst??mes d???alarme et de vid??osurveillance</option>
                        <option value="Installation sanitaire et gaz">?????????????? ?????????? ???????????? Installation sanitaire et gaz</option>
                        <option value="chauffage central">?????????????? ???????????????? | chauffage central</option>
                        <option value="Topographe">?????????????????????? | Topographe</option>
                        <option value="Initiation ?? l???informatique (Word, Excel,Power Point)">(Word, Excel, Power Point) ?????????? ?????????????? ?????????? | Initiation ?? l???informatique (Word, Excel,Power Point)</option>
                        <option value="Cr??ation de sites web"> ?????????? ?????????? ?????????? | Cr??ation de sites web</option>
                        <option value="programmation">?????????????? | programmation</option>
                        <option value="programmation arduino">programmation arduino</option>
                        <option value="Autocad (2D)"> Autocad (2D)</option>
                        <option value="Autocad (3D)">Autocad (3D)</option>
                        <option value="Google Scketchup">Google Scketchup</option>
                        <option value="MS Project">MS Project </option>
                        <option value="Covadis">Covadis</option>
                        <option value="Autocad ??lectrique">Autocad ??lectrique</option>
                        <option value="Caneco BT">Caneco BT</option>
                        <option value="Dialux">Dialux</option>
                        <option value="Revit architecture">Revit architecture</option>
                        <option value="Robot">Robot</option>
                        <option value="(g??nie climatique /??quipement d'habitat) Dessinateur en plomberie-chauffage climatisation">(g??nie climatique /??quipement d'habitat) Dessinateur en plomberie-chauffage climatisation</option>

                      </select>
                    </fieldset>
                  </div>

                  <div class="col-lg-12">
                    <fieldset>
                      <textarea name="message" type="text" class="form-control" placeholder="Autres pr??cisons...."></textarea>
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <button type="submit" class="button" name="submit">Envoyer</button>
                    </fieldset>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
        <!--

        <div class="main-button-yellow ybtns">
          <div class="scroll-to-section"><a href="formations.html">Voir plus formations</a></div>
        </div> -->


      </div>
    </div>
    <div class="footer">
      <p>Copyright ?? 2022 POLY-TEKWINE. All Rights Reserved.

    </div>
  </section>


  <script src="assets/js/isotope.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/lightbox.js"></script>
  <script src="assets/js/tabs.js"></script>
  <script src="assets/js/video.js"></script>
  <script src="assets/js/slick-slider.js"></script>
  <script src="assets/js/custom.js"></script>




</body>

</html>