

<?php
    require_once('voiture.php');
    require_once('LireVoiture.php');
    //$constructeur->afficher();
    echo $_GET['immatriculation'];
    $constructeur->save($_GET['immatriculation'],$_GET['marque'],$_GET['couleur']);

?>