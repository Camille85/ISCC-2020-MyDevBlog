<?php
try {
$bdd = new PDO("mysql:host=localhost;dbname=DevBlog;charset=utf8", "root", "root"); }
catch (PDOexception $e){
    var_dump($e);
}
if(isset($_POST['article_titre'], $_POST['article_image'],$_POST['article_auteur'], $_POST['article_contenu'],$_POST['article_extrait'],)) {
   if(!empty($_POST['article_titre']) AND !empty($_POST['article_contenu'])) {
      
      $article_titre = htmlspecialchars($_POST['article_titre']);
      $article_image = htmlspecialchars($_POST['article_image']);
      $article_auteur = htmlspecialchars($_POST['article_auteur']);
      $article_contenu = htmlspecialchars($_POST['article_contenu']);
      $article_extrait = htmlspecialchars($_POST['article_extrait']);
      $ins = $bdd->prepare("INSERT INTO Articles (Titre, Image, Date, Auteur, Contenu, Extrait) VALUES ('$article_titre', '$article_image', NOW(), '$article_auteur', '$article_contenu', '$article_extrait')");
      var_dump($ins);
   $ins->execute(array($article_titre, $article_image, $article_auteur, $article_contenu, $article_extrait)); 
      $message = 'Votre article a bien été posté';
   } else {
      $message = 'Veuillez remplir tous les champs';
   }
}
?>
<!DOCTYPE html>
<html>
<head>
   <title>Rédaction</title>
   <meta charset="utf-8">
</head>
<body>
   <form method="POST">
      <input type="text" name="article_titre" placeholder="Titre" /><br />
      <input type="text" name="article_image" placeholder="Image" /><br />
      <input type="text" name="article_auteur" placeholder="Auteur" /><br />
      <textarea name="article_contenu" placeholder="Contenu de l'article"></textarea><br />
      <input type="text" name="article_extrait" placeholder="Extrait" /><br />
      <input type="submit" value="Envoyer l'article" />
   </form>
   <br />
   <?php if(isset($message)) { echo $message; } ?>
</body>
</html>