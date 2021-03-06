<?php
$bdd = new PDO("mysql:host=localhost;dbname=DevBlog;charset=utf8", "root", "root"); 

if(isset($_GET['id']) && !empty($_GET['id'])) {
   $get_id = htmlspecialchars($_GET['id']);
   $article = $bdd->prepare('SELECT * FROM Articles WHERE id = ?');
   $article->execute(array($get_id));
   if($article->rowCount() == 1) {
      $article = $article->fetch();
      $titre = $article['Titre'];
      $image = $article['Image'];   
      $date = $article['Date'];
      $auteur = $article['Auteur'];
      $contenu = $article['Contenu'];
   } else {
      die('Cet article n\'existe pas !');
   }
} else {
   die('Erreur');
}
?>
<!DOCTYPE html>
<html>
<head>
   <title>Article</title>
   <meta charset="utf-8">
</head>
<body>
   <h1 id=titl><?= $titre ?></h1>
   <div class=img ><img src="<?= explode("/", $image) [6] ?>" width="300" height="300" /> </div>
   <p ><?= $date ?></p>
   <p id=contenu><?= $contenu ?></p>
</br>
   <p><?= $auteur ?></p>
</body>
</html>
