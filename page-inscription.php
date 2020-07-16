<?php
  $BDD = array();
  $BDD['host'] = "localhost";
  $BDD['user'] = "root";
  $BDD['pass'] = "root";
  $BDD['db'] = "Devblog";
  $mysqli = mysqli_connect($BDD['host'], $BDD['user'], $BDD['pass'], $BDD['db']);
  if(!$mysqli) {
      echo "La connexion a échoué.";
      exit;
  }
    
$AfficherFormulaire=1;
if(isset($_POST['pseudo'],$_POST['mdp'])){
    if(empty($_POST['pseudo'])){
        echo "Vous n'avez pas mit de pseudo.";
    } elseif(empty($_POST['mdp'])){
        echo "Vous n'avez pas mit de mot de passe.";
    } elseif(mysqli_num_rows(mysqli_query($mysqli,"SELECT * FROM Utilisateur WHERE Pseudo='".$_POST['pseudo']."'"))==1){
        echo "Ce pseudo est déjà utilisé.";
    } else {
        if(!mysqli_query($mysqli,"INSERT INTO Utilisateur SET pseudo='".$_POST['pseudo']."', mdp='".md5($_POST['mdp'])."'")){
            echo "Une erreur s'est produite: ".mysqli_error($mysqli);
        } else {
            echo "Vous êtes inscrit !";
            $AfficherFormulaire=0;
        }
    }
}
if($AfficherFormulaire==1){
    ?>
    <br/>
    <form method="post" action="http://localhost:8888/ISCC-2020/ISCC-2020-MyDevBlog/front.php?page=inscription" class=form>
        <input type="text" class= form2 name="pseudo" placeholder= "Pseudo">
        <br /><br />
        <input type="password" class= form2 name="mdp" placeholder= "Mot de passe">
        <br /><br />
        <input type="submit" value="S'inscrire">
    </form>
    <?php
}
?>