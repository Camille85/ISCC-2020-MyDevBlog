<!DOCTYPE html> 
<html>
    <head>
    <title>Administration</title>
    <link type="text/css" rel="stylesheet" href="devblog.css">
    <meta charset="utf-8">
    </head>
    <body>

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
      $ins = $bdd->prepare("INSERT INTO Articles (Titre, Image, Date, Auteur, Contenu, Extrait) VALUES (?, ?, NOW(), ?, ?, ?)");
     
   $ins->execute(array($article_titre, $article_image, $article_auteur, $article_contenu, $article_extrait)); 
      $message = 'Votre article a bien été posté';
   } else {
      $message = 'Veuillez remplir tous les champs';
   }
}
?>
<div class=mestitres>
<h2> Ajouter un article</h2>
</div>
   <form method="POST" action="page-administration.php" class=form>
      <input type="text" name="article_titre" id="mdp" class="form2" placeholder="Titre" class= form2/><br />
      <br />
      <input type="file" name="article_image" id="mdp" class="form2" placeholder="Image" class= form2/><br />
      <br />
      <input type="text" name="article_auteur" id="mdp" class="form2" placeholder="Auteur" class= form2/><br />
      <br />
      <textarea name="article_contenu" id="mdp" class="form2" placeholder="Contenu de l'article" class= form2></textarea><br />
      <br />
      <input type="text" class="form2" id="mdp" name="article_extrait" placeholder="Extrait" class= form2 /><br />
      <br />
      <input type="submit" class="form2" id="button" value="Envoyer l'article" />
   </form>
   <br />
   <?php if(isset($message)) { echo $message; } ?>

<a href="back.php?page=utilisateurs" class="lien">Tout les utilisateurs</a> <p>
   <a href="back.php?page=deconnexion" class="lien">Déconnexion</a>



