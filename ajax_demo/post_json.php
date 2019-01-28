<?php

header('Access-Control-Allow-Origin: http://localhost/ajax_demo');

try {
    $db = new PDO('mysql:host=localhost;dbname=ajax_region;charset=utf8', 'root', 'leqxd777', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
} catch (Exception $e) {
    echo'Erreur : ' . $e->getMessage() . '<br>';
    echo'N° : ' . $e->getCode();
}

$str_requete = "SELECT * FROM departements";
$result = $db->query($str_requete);

$liens = $result->fetchAll(PDO::FETCH_OBJ);
echo json_encode($liens);

$result->closeCursor();
?>