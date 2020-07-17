<!DOCTYPE html> 
<html>
    <head>
        
    <title >Page d'accueil </title>
        
    <link type="text/css" rel="stylesheet" href="devblog.css">
    <meta charset="utf-8">
    </head>
    <body>
        
        <div id=te>
        <p> Ce site est dédié à l'univers sneakers. Passionné par les sneakers, depuis maintenant quelques années, 
        j'ai décidé de créer ce site pour vous partager les dernières actualités sneakers ! Ce site est ouvert à tous !</p>
</div>
    <div class="pol">
        <p>Les 5 derniers articles :</p>
</div>
        <?php
        $bdd = new PDO("mysql:host=localhost;dbname=DevBlog;charset=utf8", "root", "root"); 

        $articles = $bdd->query('SELECT * FROM Articles ORDER BY id DESC LIMIT 5');
        
            ?>

       <table class=tableau>
           <tr>
        <?php while($a = $articles->fetch()) { ?>
            <td><a href="front.php?page=article&id=<?= $a['Id'] ?>" class="lien"><img src="<?= explode("/", $a['Image']) [6] ?>" width="200" height="200"/></a> </br>
            <a href="front.php?page=article&id=<?= $a['Id'] ?>" class="lien"><?= $a['Titre']?></a>
            <div><?= $a['Extrait']?></div></td>
        <?php } ?>
        </tr>
        </table>

        
            
    </body>
</html>