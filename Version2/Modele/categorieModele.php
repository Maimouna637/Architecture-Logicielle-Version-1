<?php 

    function getCategorie(){

        require('connexion.php'); 

        $req = "SELECT * FROM categorie";

        $result = mysqli_query($conn,$req);

         $chaines = [];

        while($ligne = mysqli_fetch_assoc($result)){

            $chaine = ['libelle' => $ligne['libelle']];
            $chaines[] = $chaine;
        }

        // var_dump($chaines);

            return $chaines;
        
        }
?>
