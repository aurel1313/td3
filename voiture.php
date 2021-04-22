<?php
    class Voiture{
       private $marque;
        private $couleur;
        private $immatriculation;
        
        
        public function __construct($marque,$couleur,$immatriculation){
            $this->marque=$marque;
            $this->couleur=$couleur;
            $this->immatriculation=$immatriculation;
        }
        public function getMarque(){
            return $this->marque;
        }
        public function setMarque($marque2){
            $this->marque =$marque2;
        }
        
        public function afficher(){
            echo $this->marque;
            echo $this->couleur;
            echo $this->immatriculation;
        }
        public function getVoitureByImmat($immatriculation) {
            $sql = "SELECT * from voiture2 WHERE immatriculation=:nom_tag";
            // Préparation de la requête
            $req_prep = Model::$pdo->prepare($sql);
            $values = array(
            "nom_tag" => $immatriculation,
            //nomdutag => valeur, ...
            );
            // On donne les valeurs et on exécute la requête
            $req_prep->execute($values);
            // On récupère les résultats comme précédemment
            $req_prep->setFetchMode(PDO::FETCH_CLASS, 'Voiture');
            $tab_voit = $req_prep->fetchAll();
            // Attention, si il n'y a pas de résultats, on renvoie false
            if (empty($tab_voit))
            return false;
            return $tab_voit[0];
           }
          public function save($immatriculation,$marque,$couleur){
              echo $marque;
                $sql="INSERT INTO voiture2(immatriculation,marque,couleur)VALUES('$immatriculation','$marque','$couleur')";
                $req = Model::$pdo->prepare($sql);
                
                $values = array(
                    "marque" =>$marque,
                    
                    );
                $req->execute();
                $req->setFetchMode(PDO::FETCH_CLASS, 'Voiture');
                print_r($values);
              
              
          }
        
    }
    //Voiture::getVoitureByImmat("12345",Model::$pdo);//


?>