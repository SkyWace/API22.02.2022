<?php 

header('Content-Type: application/json');

try {
    $PDO =new PDO('mysql:host=localhost; port=3306; dbname=cube2;', 'root', '');
    $retour['sucess'] = true;
    $retour['message'] = 'connexion a la base de données impossible';
}
catch(Exception $e) {
    $retour['sucess'] = false;
    $retour['message'] = 'connexion a la base de données impossible';
}

echo json_encode($retour);