<!DOCTYPE html> 
<html>
    <head>
    <title>Les articles </title>
    <link type="text/css" rel="stylesheet" href="devblog.css">
    <meta charset="utf-8">
    </head>
    <body>
      <?php  
    $bdd = new PDO("mysql:host=localhost;dbname=DevBlog;charset=utf8", "root", "root"); 

    $articles = $bdd->query('SELECT * FROM Articles ORDER BY id DESC ');

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
