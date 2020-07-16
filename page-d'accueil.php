<!DOCTYPE html> 
<html>
    <head>
        
    <title >Page d'accueil </title>
        
    <link type="text/css" rel="stylesheet" href="devblog.css">
    <meta charset="utf-8">
    </head>
    <body>
        
        
        <p> Ce site est dédié à l'univers sneakers. Passionné par les sneakers, depuis maintenant quelques années, 
        j'ai décidé de créer ce site pour vous partager les dernières actualités sneakers ! Ce site est ouvert à tous !</p>
    
        <p>Les 5 derniers articles :</p>
        <?php
        $bdd = new PDO("mysql:host=localhost;dbname=DevBlog;charset=utf8", "root", "root"); 

        $articles = $bdd->query('SELECT * FROM Articles ORDER BY id DESC LIMIT 5');
            ?>

        
        <?php while($a = $articles->fetch()) { ?>
            <a href="front.php?page=article&id=<?= $a['Id'] ?>"><?= $a['Titre']?></a>
        <?php } ?>
        

        
            
    </body>
</html>