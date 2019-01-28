<?php



$db = new PDO('mysql:host=localhost;dbname=ajax_region;charset=utf8', 'root', 'leqxd777');
$sql = "SELECT * FROM departements WHERE dep_reg_id=" . $_POST['dep_reg_id'];
$dep = $db->query($sql)->fetchAll(PDO::FETCH_OBJ);
echo json_encode($dep);
// //Afficher la liste des régions et a partir de la selections de la régions, afficher les départements affilié.