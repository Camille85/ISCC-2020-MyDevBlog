<?php
function connect_to_database(){
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $databasename = "DevBlog";

    try{
        $pdo = new PDO("mysql:host=$servername;dbname=$databasename", $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        echo "<ul>";
        foreach($pdo->query("SELECT * from Utilisateur") as $row){
            echo "<li>";
            echo ($row ["1"]);
            echo "</li>";       
    } echo "</ul>";

        return $pdo;
    } catch (PDOException $e){
        echo "Connection failed : " . $e->getMessage();
    }
}
?>

<?php
connect_to_database();
?>