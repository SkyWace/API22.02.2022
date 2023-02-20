<?php require('api.php'); ?>

<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Titre de la page</title>
  <link rel="stylesheet" href="style.css">
  <script src="script.js"></script>
</head>
<body>

<?php 

// Récupération des données envoyées depuis api.php
if (isset($_POST['data'])) {
    $data = json_decode($_POST['data'], true);
    // Traitement des données ici
}
?>


</body>
</html>