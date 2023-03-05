<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Studyclass | Groupe 3</title>
<link href="./assets/css/bootstrap.min.css" rel="stylesheet">
<link href="./assets/css/carousel.css" rel="stylesheet">
<link href="./assets/css/font-awesome.css" rel="stylesheet">
<link href="./assets/css/style.css" rel="stylesheet">

</head>
<body id="body">
    
<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

$Route = $_GET['Route'] ?? "accueil";

require("./includes/header.php");

echo '<main>';
	require("./$Route.php");

	require("./includes/footer.php");
echo '</main>';
?>

<script src="./assets/js/bootstrap.bundle.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="./assets/js/script.js"></script>

</body>
</html>
