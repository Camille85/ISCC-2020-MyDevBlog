<?php
    require_once('fonctions.php');
 
    $articles = getArticles();
?>
 
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Ajout d'article</title>
    </head>
        <h1>Articles : </h1>
 
        <?php
            foreach($articles as $article){
        ?>
                <h2> <?= $article->titre ?> </h2>
                <a href="article.php?id=<?= $article->id ?>">Lire la suite</a>
        <?php
            }
        ?>
    <body>
        
    </body>
 
</html>