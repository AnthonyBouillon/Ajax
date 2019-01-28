<?php
$db = new PDO('mysql:host=localhost;dbname=ajax_region;charset=utf8', 'root', 'leqxd777');
$sql = "SELECT * FROM regions";
$result = $db->query($sql)->fetchAll(PDO::FETCH_OBJ);
