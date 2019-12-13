<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>leopet || about</title>
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
</head>

<body>
    <!--::header part start::-->
    <header class="header_area">
        <div class="sub_header">
            <div class="container">
                <div class="row align-items-center">
                  <div class="col-4 col-md-4 col-xl-6">
                      <div id="logo">
                          <a href="index.html"><img src="img/Logo.png" alt="" title="" /></a>
                      </div>
                  </div>
                  <div class="col-8 col-md-8 col-xl-6 ">
                      <div class="sub_header_social_icon float-right">
                        <a href="#"><i class="flaticon-phone"></i>+02 213 - 256 (365)</a>
                        <a href="#" class="btn_1 d-none d-md-inline-block">Become a Volunteer</a>
                      </div>
                    </div>
                </div>
            </div>
        </div>
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
                                        <a class="nav-link" href="index.html">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="about.html" class="nav-link active">About</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="services.html" class="nav-link">services</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="gallery.html" class="nav-link">gallery</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Pages
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="elements.html">Elements</a>
                                            <a class="dropdown-item" href="single-blog.html">Single blog</a>
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <a href="blog.html" class="nav-link">blog</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="contact.html" class="nav-link">Contact</a>
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
  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
</br>
</br>
</br>
            <th>Identifiant</th>
            <th>Age</th>
            <th>Type</th>
            <th>Sexe</th>
            <th>Pets</th>
            <th>Petsrace</th>
            <th>Prix</th>
            <th>Image</th>

          </tr>
        </thead>
        <tfoot>
  <?PHP
          include "../core/produitC.php";
          $produit1C=new ProduitC();
          $listeproduits=$produit1C->afficherproduits();
          ?>
          <?PHP
foreach($listeproduits as $row){
?>
<tr>
<td><?PHP echo $row['idP']; ?></td>
<td><?PHP echo $row['age']; ?></td>
<td><?PHP echo $row['type']; ?></td>
<td><?PHP echo $row['sexe']; ?></td>
<td><?PHP echo $row['pets']; ?></td>
<td><?PHP echo $row['petsrace']; ?></td>
<td><?PHP echo $row['prix']; ?></td>
<td><?PHP echo $row['image']; ?></td>

<td><a><img class="" src="<?php echo $row['image'];?>" style="width: 100px; height:100px;"></a></td>

<?PHP
}
?>
  
   
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