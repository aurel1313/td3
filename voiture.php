<?php
    class Voiture{
        private $marque;
        private $couleur;
        private $immatriculation;
        
        
        
        public function getMarque(){
            return $this->marque;
        }
        public function setMarque($marque2){
            $this->marque =$marque2;
        }
        public function __construct($m,$c,$i){
            $this->marque=$m;
            $this->couleur=$c;
            $this->immatriculation=$i;
        }
        public function afficher(){
            echo $this->marque;
            echo $this->couleur;
            echo $this->immatriculation;
        }
        static public function getVoitureByImmat($immat) {
            $sql = "SELECT * from voiture2 WHERE immatriculation=:nom_tag";
            // Préparation de la requête
            $req_prep = Model::$pdo->prepare($sql);
            $values = array(
            "nom_tag" => $immat,
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
          
        
    }


?>