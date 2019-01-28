<?php 
try 
{      
    $db = new PDO('mysql:host=localhost;dbname=ajax_region;charset=utf8', 'root', 'leqxd777', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));   
} 
catch (Exception $e) 
{
   echo'Erreur : '.$e->getMessage().'<br>';
   echo'N° : '.$e->getCode(); 
   die('Fin du script');
}

$str_requete = "SELECT * FROM departements WHERE dep_id=".$_POST['id'];
$result = $db->query($str_requete);
$dep = $result->fetchAll(PDO::FETCH_OBJ);

foreach ($dep as $departement) 
{
   echo $departement->dep_nom."<br>";   
}
 $result->closeCursor();
?>