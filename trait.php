<?php 


<?php 
    
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mglsi_news";

$conn = mysqli_connect($servername, $username, $password,$dbname);

if (!$conn) {
    echo "error";
}

$req = "SELECT * FROM article";

$result = mysqli_query($conn,$req);

$chaine= "<table border='1px'>
            <tr>
            <td>id</td>
            <td>titre</td>
        </tr>";

while($ligne = mysqli_fetch_assoc($result)){

 $chaine = $chaine."<tr><td>" .$ligne['id'] . "</td><td>" .$ligne['titre'] . "</td></tr>";

}
$chaine = $chaine."</table>";

echo $chaine;

?>

 ?>