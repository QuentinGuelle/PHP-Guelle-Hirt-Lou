<!DOCTYPE html>
<?php
session_start();
include_once("php/code.php");

$user = new Users;
if(isset($_SESSION["account"]["id"]))
{
    header('Location: /');
}
if(isset($_POST["submit"]))
{
    if($_POST["submit"] === "OK")
{
    if($_POST['uname'] != NULL && $_POST['psw'] != NULL)
    {
        $user->connect($_POST["uname"], $_POST["psw"]);
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
    <title>Connexion</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>

    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>

    <div class="limiter">
        <div class="container-login100" style="background-image: url('images/bg-03.jpg');">
            <div class="wrap-login100">
                <form class="login100-form validate-form" action="login.php" method="post">
                    <span class="login100-form-logo">
                        <img src="images/bg-02.png" class="warfare">
                    </span>

                    <span class="login100-form-title p-b-34 p-t-27">
                        Se connecter
                    </span>

                    <div class="wrap-input100 validate-input" data-validate = "Enter username">
                        <input class="input100" type="text" name="uname" placeholder="Nom d'utilisateur" required>
                        <span class="focus-input100" data-placeholder="&#xf207;"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Enter password">
                        <input class="input100" type="password" name="psw" placeholder="Mot de passe" required>
                        <span class="focus-input100" data-placeholder="&#xf191;"></span>
                    </div>

                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn" type="submit" name="submit" value="OK">
                            Connexion
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    <!--<div id="dropDownSelect1"></div>-->
    
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <script src="vendor/animsition/js/animsition.min.js"></script>
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/daterangepicker/moment.min.js"></script>
    <script src="vendor/daterangepicker/daterangepicker.js"></script>
    <script src="vendor/countdowntime/countdowntime.js"></script>
    <script src="js/main.js"></script>

    <!--<form action="login.php" method="post">
    <div class="container">
        <label for="uname"><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="uname" required>

        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="psw" required>

        <button type="submit" name="submit" value="OK">Login</button>
    </div>
    </form>-->
</body>
</html>