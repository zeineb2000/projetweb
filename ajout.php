<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>zanimo || Prouits</title>
    <link rel="icon" href="img/favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- animate CSS -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <!-- themify CSS -->
    <link rel="stylesheet" href="css/themify-icons.css">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="css/flaticon.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="css/magnific-popup.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="css/style.css">
        <!-- https://fontawesome.com/ -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <script src="public/3b-reactions.js"></script>
    <link href="public/3c-reactions.css" rel="stylesheet">
</head>

<body>
    <!--::header part start::-->
    <header class="header_area">
 
        <div class="main_menu">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg navbar-light">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <i class="ti-menu"></i>
                            </button>

                            <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                                <ul class="navbar-nav">
                                    <li class="nav-item active">
                                        <a class="nav-link" href="index.php">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="about.php" class="nav-link active">About</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="services.php" class="nav-link">services</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="gallery.php" class="nav-link">gallery</a>
                                    </li>
                                 
                                    <li class="nav-item">
                                        <a href="contact.php" class="nav-link">Contact</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="afficherpanier.php" class="nav-link">PANIER</a>
                                    </li>
                                    <li class="nav-item pull-right">
<?php
if(isset($_SESSION["name"])) {
?>

<h6 color="green"> <a href="logout.php" tite="Logout">Welcome <?php echo $_SESSION["name"]; ?></a> <a href="logout.php" tite="Logout">Logout.</a> </h6>
<?php
}else {
    
    ?> 
 <a href="login.php" class="nav-link">LOGIN</a>
<?php
}
?>
</li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header part end-->

    <!--::breadcrumb part start::-->
    <section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner">
                        <div class="breadcrumb_iner_item">
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--::breadcrumb part start::-->

  <!-- ================ contact section start ================= -->
  <?PHP
include "../entities/commandes.php";
include "../core/commandesC.php";
if (isset($_GET['idP'])){
  $commandeC=new CommandeC();
    $result=$commandeC->recuperercommande($_GET['idP']);
  foreach($result as $row){
    $idP=$row['idP'];
    $type=$row['type'];
    $sexe=$row['sexe'];
    $prix=$row['prix'];
?>

  <div class="row">
        
        
     <form method="POST" action="ajoutercommande.php">
      <div class="row">
        
              <div class="col-8">
                      <div class="form-group">
                        <label>Identifiant</label>
                        <input class="form-control" type="number" name="idP" value="<?PHP echo $idP ?>">
                      </div>
                    </div>
        
        <div class="col-8">
          <div class="form-group">
            <label>Type</label>
            <input class="form-control" type="text" name="type" value="<?PHP echo $type ?>">
  <datalist id="Type">
    <option value="Accessories">
    <option value="Food">
    <option value="Animals">
  </datalist>
          </div>
        </div>

        <div class="col-8">
              <div class="form-group">
                <label>Sexe</label>
                <input class="form-control" type="text" name="sexe" value="<?PHP echo $sexe ?>">
                <!-- <select class="form-control" name="type" id="type">
                  <optgroup label="Accessories">
                    <option>Toys</option>
                    <option>Balloons</option>
                    <option>Bowls</option>
                    <option>Pet Beds</option>
                  </optgroup>
                  <optgroup label="Food">
                    <option>Milk</option>
                    <option>Cranberries</option>
                    <option>Eggs</option>
                  </optgroup>
                  <optgroup label="Animals">
                    <option>Dog</option>
                    <option>Cat</option>
                    <option>Birds</option>
                  </optgroup>
                </select> -->
              </div>
            </div>

            <div class="col-8">
                  <div class="form-group">
                    <label>Prix</label>
                    <input type="text" onkeyup="disabled" name="prix" value="<?PHP echo $prix ?>">
                  </div>
                </div>
                 <div class="col-8">
                  <div class="form-group">
                    <label>Quantite</label>
                    <input type="text" name="qte" >
                  </div>
                </div>

      </div>
      <div class="form-group mt-3">
       <center>
            <input type="submit" name="ajouter" value="ajouter">
          </center>
      </div>
    </form>
    <?PHP
}
}
?>s
  </div>
  
</div>
</div>
</section>
<!-- ================ contact section end ================= -->

<!-- footer part start-->
<footer class="footer_area padding_top">
  <div class="container">
      <div class="row justify-content-center ">
          <div class="col-lg-8 col-xl-6">
              <div class="subscribe_part_text text-center">
                  <h2>any thing to ask</h2>
                  <p>we gives you help and answer your questions </p>
                  <div class="subscribe_form">
                      <form action="#" name="#">
                          <div class="input-group align-items-center">
                              <input type="email" class="form-control" placeholder="enter your email">
                              <div class="subscribe_btn input-group-append">
                                  <div class="btn_1">Mail-Us</div>
                              </div>
                          </div>
                      </form>
                  </div>
              </div>
          </div>
      </div>
      <div class="row justify-content-between section_padding">
          <div class="col-xl-2 col-sm-6 col-md-3 mb-4 mb-xl-0 single-footer-widget">
              <h4>Menu</h4>
              <ul>
                  <li><a href="#">home</a></li>
                  <li><a href="#">about</a></li>
                  <li><a href="#">shop</a></li>
                  <li><a href="#">contact</a></li>
              </ul>
          </div>
          <div class="col-xl-2 col-sm-6 col-md-3 mb-4 mb-xl-0 single-footer-widget">
              <h4>contact</h4>
              <ul>
                  <li><a href="#">53272532</a></li>
                  <li><a href="#">mohamed.hagui@esprit.tn</a></li>
              </ul>
          </div>
          <div class="col-xl-2 col-sm-6 col-md-3 mb-4 mb-xl-0 single-footer-widget">
              <h4>Address</h4>
              <ul>
                  <li><a href="#"> cite Al-Nasr
                          tunis, TUN</a></li>
                  <li><a href="#">Get Direction</a></li>
              </ul>
          </div>
          <div class="col-xl-2 col-sm-6 col-md-3 mb-4 mb-xl-0 single-footer-widget">
              <h4>Opening Hour</h4>
              <ul>
                  <li><a href="#">Mon-Fri (9.00-18.00)</a></li>
                  <li><a href="#">Sat-Sun (Closed)</a></li>
              </ul>
          </div>
      </div>
      <div class="row">
          <div class="col-lg-12">
             
          </div>
      </div>
  </div>
</footer>
<!-- footer part end-->

<!-- jquery plugins here-->
<!-- jquery -->
<script src="js/jquery-1.12.1.min.js"></script>
<!-- popper js -->
<script src="js/popper.min.js"></script>
<!-- bootstrap js -->
<script src="js/bootstrap.min.js"></script>
<!-- counterup js -->
<script src="js/jquery.counterup.min.js"></script>
<!-- waypoints js -->
<script src="js/waypoints.min.js"></script>
<!-- easing js -->
<script src="js/jquery.magnific-popup.js"></script>
<!-- particles js -->
<script src="js/owl.carousel.min.js"></script>
<!-- custom js -->
<script src="js/custom.js"></script>
</body>

</html>