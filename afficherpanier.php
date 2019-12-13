<?php
session_start();
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>leopet || Gallery</title>
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
                            <h1>Gallery</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--::breadcrumb part start::-->

    <!-- gallery part css here -->
    <section class="gallery_part section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="gallery_tittle">
                        <p>Working in conjunction with humanitarian aid agencies, we have supported programmes to help alleviate human suffering</p>
                    </div>
                </div>
            </div>
            <div class="row">
             <?PHP
          include "../core/produitC.php";
          $produit1C=new ProduitC();
          $listeproduits=$produit1C->afficherpaniers();
          ?>
          <?PHP
foreach($listeproduits as $row){
?>
<tr>



                <div class="col-lg-4 col-sm-6">
                <th>Pets :</th> <td><?PHP echo $row['pets']; ?></td>
                
                
                   
                <a href="img/gallery-01.png" class="single_gallery_part">
                       <img src="../../back/views/uploads/<?PHP echo $row['image']; ?>" alt="">
                        <i class="ti-plus"></i>
            
          
           
            
    <h1>                     

            <th>Age :</th>  <td><?PHP echo $row['age']; ?></td>
<br>
<th>Sexe :</th> <td><?PHP echo $row['sexe']; ?></td>
<br>
<th>Type :</th>  <td><?PHP echo $row['type']; ?></td>
<br>
<th>Petsrace :</th>  <td><?PHP echo $row['petsrace']; ?></td>
<br>
<th>Prix :</th> <td><?PHP echo $row['prix']; ?></td>
</h1>  



                    </a>
                    <td><form method="POST" action="supprimerpanier.php">
    <input type="submit" name="supprimer" value="supprimer panier" class="btn_1">
    <input type="hidden" value="<?PHP echo $row['idP']; ?>" name="idP">
    <br>
    <br>
    <td><a href="ajout.php?idP=<?PHP echo $row['idP']; ?>" class="btn_1">Passer Commande</a></td>
    </form>

                </div>
               
                <?PHP
}
?>
            </div>
        </div>
    </section>
    <!-- gallery part css end -->

    <!-- footer part start-->
    <footer class="footer_area padding_top">
        <div class="container">
            <div class="row justify-content-center ">
                <div class="col-lg-8 col-xl-6">
                    <div class="subscribe_part_text text-center">
                        <h2>Subscribe Newsletter</h2>
                        <p>We strictly follow the State Board’s sanitary and disinfection guidelines.</p>
                        <div class="subscribe_form">
                            <form action="#" name="#">
                                <div class="input-group align-items-center">
                                    <input type="email" class="form-control" placeholder="enter your email">
                                    <div class="subscribe_btn input-group-append">
                                        <div class="btn_1">free trail</div>
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
                        <li><a href="#">10 983 456 3669</a></li>
                        <li><a href="#">reserve@manicure.com</a></li>
                    </ul>
                </div>
                <div class="col-xl-2 col-sm-6 col-md-3 mb-4 mb-xl-0 single-footer-widget">
                    <h4>Address</h4>
                    <ul>
                        <li><a href="#">700, Green lane, New
                                York, USA</a></li>
                        <li><a href="#">Get Direction</a></li>
                    </ul>
                </div>
                <div class="col-xl-2 col-sm-6 col-md-3 mb-4 mb-xl-0 single-footer-widget">
                    <h4>Opening Hour</h4>
                    <ul>
                        <li><a href="#">Mon-Fri (9.00-6.00)</a></li>
                        <li><a href="#">Sat-Sun (Closed)</a></li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="copyright_text">
                        <img src="img/footer_logo.png" alt="#">
                        <p class="footer-text"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="ti-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    </div>
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