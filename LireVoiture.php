<?php
    require_once('Model.php');
    require_once("voiture.php");
    Model::init();
   $sql ='select * from voiture2';
    $rep =Model::$pdo->query($sql);
    $tabObj=$rep->fetchAll(PDO::FETCH_OBJ);
    
    
    echo "<table border='1'>";
    echo "<tr><th>immatriculation</th>";
    echo "<th>marque</th>";
    echo "<th>couleur</th></tr>";
    foreach($tabObj as $row =>$voiture){
        echo"<tr><td>".$voiture->immatriculation."</td>";
        echo "<td>".$voiture->marque."</td>";
        echo "<td>".$voiture->couleur."</td></tr>";
    }
    echo"</table>";
   
    
    //$tabObj2 = $rep->setFetchMode(PDO::FETCH_CLASS,'voiture');
    $constructeur = new Voiture("porsche","vert","et94ryre");
    //$constructeur->afficher();
    //$fonction= $constructeur->getVoitureByImmat("710097");//
    //$save =$constructeur->save("porsche",'carrera','564ezt');
   
    
  
?>