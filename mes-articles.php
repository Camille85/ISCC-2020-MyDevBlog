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

<ul>
    <?php while($a = $articles->fetch()) { 
    ?>
    
    <li><a href="front.php?page=article&id=<?= $a['Id'] ?>"><?= $a['Titre']?></a></li>
    <?php } ?>
</ul>

      
            
    </body>
</html>
