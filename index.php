<!DOCTYPE html>
<?php
session_start();
include_once("php/code.php");

$user = new Users;
$work = new Works;
?>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php</title>
</head>
<body>
    <?php if(isset($_SESSION["account"]["username"]))
    {
        echo '<p>Bonjour ' . $_SESSION["account"]["username"] . '</p>';
    }
    ?>

    <br>
    <?php
        $allworks = $work->get_works();
        foreach($allworks as $w)
        {
            echo($w["title"]);
            echo("|");
            echo($w["description"]);
        }

    ?>
    <?php if(isset($_SESSION["account"]["username"]))
    {
        $redir = 'logout.php';
        $redirTxt = "Se deconnecter";
        echo '<a href="logout.php">Se deconnecter</a>';
    }
    else{
        $redir = "login.php";
        $redirTxt = "Se connecter";
        echo '<a href="login.php">Se connecter</a>';
    }
    ?>
    <br><br>
    <a href="form.php">Ajouter un article</a>
</body>
</html>