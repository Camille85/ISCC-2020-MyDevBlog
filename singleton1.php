<?php
 
function connect_to_database(){
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $databasename = "DevBlog";
    try{
        $pdo = new PDO ("mysql:host=$servername; dbname=$databasename", $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Vous êtes connectés";
        return $pdo;
    }catch(PDOException $e) {
        echo "Vous n'avez pas pu vous connecter" . $e->getMessage();
}
}
?>
<?php
connect_to_database();
?>




