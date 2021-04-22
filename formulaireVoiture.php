<!DOCTYPE html>
<html>
    <head>
        <title>formulaire</title>
    </head>
    <body>
        <form method="get" action="creerVoiture.php">  
        <fieldset>    
        <legend>Mon formulaire :</legend>    
        <p><label for="immat_id">Immatriculation</label> :      
        <input type="text" placeholder="Ex : 256AB34" name="immatriculation" id="immat_id"required/></p> 

        <p><label for="couleur">Couleur</label> :      
        <input type="text" placeholder="Ex : vert" name="couleur" id="couleur"required/></p>   

        <p><label for="marque">marque</label> :      
        <input type="text" placeholder="Ex : peugeot" name="marque" id="marque"required/></p>  

        <p><input type="submit" value="Envoyer" /></p>  
        </fieldset> 
        </form>
    </body>
</html>