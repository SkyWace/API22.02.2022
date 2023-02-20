<?php 

header('Content-Type: application/json');

$PDO =new PDO('mysql:host=localhost; port=3306; dbname=cube2;', 'root', '');

try {
    $PDO =new PDO('mysql:host=localhost; port=3306; dbname=cube2;', 'root', '');
    $retour['sucess'] = true;
    $retour['message'] = 'connexion a la base de données réussi';
}
catch(Exception $e) {
    $retour['sucess'] = false;
    $retour['message'] = 'connexion a la base de données impossible';
}



// Envoi des données à index.php en utilisant la méthode POST
$curl = curl_init('http://localhost/CUBE-2/index.php');
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query(array('data' => $data)));
$response = curl_exec($curl);
curl_close($curl);

// $url = 'http://localhost/CUBE-2/index.php?';
// foreach ($data as $row) {
//     foreach ($row as $key => $value) {
//         $url .= urlencode($key) . '=' . urlencode($value) . '&';
//     }
// }

// // Envoi de l'URL à index.php en utilisant la méthode GET
// $curl = curl_init($url);
// curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
// $response = curl_exec($curl);
// curl_close($curl);


// Affichage de la réponse reçue de index.php
echo $response;

echo json_encode($data);

