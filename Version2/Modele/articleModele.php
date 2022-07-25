<?php 

    function getArticle(){

        require('connexion.php'); 

        $req = "SELECT * FROM article";

        $result = mysqli_query($conn,$req);

         $chaines = [];

        while($ligne = mysqli_fetch_assoc($result)){

            $chaine = ['titre' => $ligne['titre']];
            $chaines[] = $chaine;
        }

        // var_dump($chaines);

            return $chaines;

        }
?>
