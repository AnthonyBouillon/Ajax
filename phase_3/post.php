<?php
$db = new PDO('mysql:host=localhost;dbname=jarditou;charset=utf8', 'root', 'leqxd777');
$sql = "SELECT * FROM produits WHERE pro_id=" . $_POST['pro_id'];
$oProduit = $db->query($sql)->fetch(PDO::FETCH_OBJ);
echo json_encode($oProduit);
