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
   <h1><?= $titre ?></h1>
   <img src="<?= explode("/", $image) [6] ?>" width="300" height="300"/> 
   <p><?= $auteur ?></p>
   <p><?= $contenu ?></p>
</body>
</html>
