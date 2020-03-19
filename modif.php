<!DOCTYPE html>
<?php
session_start();
include_once("php/code.php");
$idPost = $_GET['idPost'];
$work = new Works;

$allworks = $work->get_works();
foreach($allworks as $w){
	if ($w['id'] == $idPost){
		$curr_title = $w['title'];
		$curr_description = $w['description'];
	}
}


if(isset($_POST["submit"]))
{
    if($_POST["submit"] === "Valider")
{
    if($_POST['titl'] != NULL && $_POST['desc'] != NULL)
    {
    	$idPost = $_GET['idPost'];
        $work->update($_POST["titl"], $_POST["desc"], $idPost);
        header('Location: /index.php');
    }
    else
    {
        echo("Remplis le formulaire");
    }
}
}
?>
<html lang="fr">
  <head>
    <title>Ajouter un article</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700,900" rel="stylesheet">
    <link rel="stylesheet" href="template/fonts/icomoon/style.css">

    <link rel="stylesheet" href="template/css/bootstrap.min.css">
    <link rel="stylesheet" href="template/css/jquery-ui.css">
    <link rel="stylesheet" href="template/css/owl.carousel.min.css">
    <link rel="stylesheet" href="template/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="template/css/owl.theme.default.min.css">

    <link rel="stylesheet" href="template/css/jquery.fancybox.min.css">

    <link rel="stylesheet" href="template/css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="template/fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="template/css/aos.css">

    <link rel="stylesheet" href="template/css/style.css">
    
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
  
  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
   
    <div class="border-bottom top-bar py-2 bg-dark" id="home-section">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <p class="mb-0">
              <span class="mr-3"><strong class="text-white">Tél :</strong> <a href="tel://#">M'en souviens plus</a></span>
              <span><strong class="text-white">Email:</strong> <a href="#">LucasQuentinAnthony@warzonepgm.com</a></span>
            </p>
          </div>
          <div class="col-md-6">
            <ul class="social-media">
              <li><a href="facebook.com" class="p-2"><span class="icon-facebook"></span></a></li>
              <li><a href="twitter.com" class="p-2"><span class="icon-twitter"></span></a></li>
              <li><a href="instagram.com" class="p-2"><span class="icon-instagram"></span></a></li>
              <li><a href="linkedin.com" class="p-2"><span class="icon-linkedin"></span></a></li>
            </ul>
          </div>
        </div>
      </div> 
    </div>

    <header class="site-navbar py-4 bg-white js-sticky-header site-navbar-target" role="banner">

      <div class="container">
        <div class="row align-items-center">
          
          <div class="col-11 col-xl-2">
            <h1 class="mb-0 site-logo"><a href="index.php" class="text-black h2 mb-0">Portfolio Warzone<span class="text-primary">.</span> </a></h1>
          </div>
          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li><a href="index.php#home-section" class="nav-link">Accueil</a></li>
                <li><a href="index.php#work-section" class="nav-link">Travaux</a></li>
                <li><a href="login.php" class="nav-link"><u>Se connecter</u></a></li>
              </ul>
            </nav>
          </div>


          <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

        </div>
      </div>
      
    </header>

  

    <div class="site-blocks-cover overlay" style="background-image: url(template/images/bg_form.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">

          <div class="col-md-12">
                        
            <div class="row justify-content-center mb-4">
              <div class="col-md-8 text-center">
                <p class="formulaire">
                    <!-- ------------------------------------------------------------------------------------ -->
                    <form name="inscription" action="modif.php?idPost=<?=$idPost?>" method="post">
                      
                      <div>
                        <p class="formulaire-texte">Entrez le nom de l'article : </p>
                        <textarea cols="40" rows="1" wrap="hard" name="titl" required><?php echo $curr_title; ?></textarea><br/><br/>

                        <p class="formulaire-texte">Entrez la description : </p>
                        <textarea cols="60" rows="10" wrap="hard" name="desc" required><?php echo $curr_description; ?></textarea> <br/><br/>
                      </div>

                      <input type="submit" name="submit" value="Valider"/>
                    </form>
                    <!-- ------------------------------------------------------------------------------------ -->
                </p>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>  

 
    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-9">
            <div class="row">
              <div class="col-md-5">
                <h2 class="footer-heading mb-4">A propos</h2>
                <p>On a fait top1 sur Warzone. On a galéré sur le php + les articles.</p>
              </div>
              <div class="col-md-3 ml-auto">
                <h2 class="footer-heading mb-4">Liste de trucs inutiles</h2>
                <ul class="list-unstyled">
                  <li><a href="#">Inutile 1</a></li>
                  <li><a href="#">Inutile 2</a></li>
                  <li><a href="#">Inutile 3</a></li>
                  <li><a href="#">Inutile 4</a></li>
                </ul>
              </div>
              <div class="col-md-3">
                <h2 class="footer-heading mb-4">Nos réseaux (c'est faux)</h2>
                <a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <h2 class="footer-heading mb-4">Souscrivez à rien</h2>
            <form action="#" method="post">
              <div class="input-group mb-3">
                <input type="text" class="form-control border-secondary text-white bg-transparent" placeholder="Entrez du vide" aria-label="Enter Email" aria-describedby="button-addon2">
                <div class="input-group-append">
                  <button class="btn btn-primary text-white" type="button" id="button-addon2">Non</button>
                </div>
              </div>
            </form>
          </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <div class="border-top pt-5">
            <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart text-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
            </div>
          </div>
          
        </div>
      </div>
    </footer>

  </div> <!-- .site-wrap -->

  <script src="template/js/jquery-3.3.1.min.js"></script>
  <script src="template/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="template/js/jquery-ui.js"></script>
  <script src="template/js/popper.min.js"></script>
  <script src="template/js/bootstrap.min.js"></script>
  <script src="template/js/owl.carousel.min.js"></script>
  <script src="template/js/jquery.stellar.min.js"></script>
  <script src="template/js/jquery.countdown.min.js"></script>
  <script src="template/js/bootstrap-datepicker.min.js"></script>
  <script src="template/js/jquery.easing.1.3.js"></script>
  <script src="template/js/aos.js"></script>
  <script src="template/js/jquery.fancybox.min.js"></script>
  <script src="template/js/jquery.sticky.js"></script>
  <script src="template/js/main.js"></script>
  


  </body>
</html>