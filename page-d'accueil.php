<!DOCTYPE html> 
<html>
    <head>
        
    <title >Page d'accueil </title>
        
    <link type="text/css" rel="stylesheet" href="devblog.css">
    <meta charset="utf-8">
    </head>
    <body>
        
        
        <p> Description du projet</p>
    
        <p>Les 5 derniers articles :</p>
        <?php
    function connect_to_database(){
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $databasename = "DevBlog";

    try{
        $pdo = new PDO("mysql:host=$servername;dbname=$databasename", $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

       
        $sth = $pdo->prepare("SELECT * FROM Articles LIMIT 5");
        $sth->execute();
        
        $result = $sth->fetchAll();
        var_dump($result);
        
    

        return $pdo;
    } catch (PDOException $e){
        echo "Connection failed : " . $e->getMessage();
    }
}
?>

        
            
    </body>
</html>