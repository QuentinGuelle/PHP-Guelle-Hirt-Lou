<!DOCTYPE html>
<?php

session_start();
include_once("php/code.php");
$idPost = $_GET['idPost'];

if(isset($_SESSION["account"]["id"])) {

}
else {
  header('Location: /');
}

$work = new Works;

$work->delete($idPost);

header('Location: /index.php');

?>
<html>
<head lang ="fr">
	<meta charset="utf-8">
	<title>Suppression</title>
</head>
<body>

</body>
</html>