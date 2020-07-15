<?php 
// On commence par récupérer les champs 
if(isset($_POST['titre']))      $titre=$_POST['titre'];
else      $titre="";

if(isset($_POST['image']))      $image=$_POST['image'];
else      $image="";

if(isset($_POST['date']))      $date=$_POST['date'];
else      $date="";

if(isset($_POST['auteur']))      $auteur=$_POST['auteur'];
else      $auteur="";

if(isset($_POST['contenu']))      $contenu=$_POST['contenu'];
else      $contenu="";

if(isset($_POST['extrait']))      $extrait=$_POST['extrait'];
else      $extrait="";

// On vérifie si les champs sont vides 
if(empty($titre) OR empty($image) OR empty($date) OR empty($auteur) OR empty($contenu) OR empty($extrait)) 
    { 
    echo '<font color="red">Attention, seul le champs <b>ICQ</b> peut rester vide !</font>'; 
    } 

// Aucun champ n'est vide, on peut enregistrer dans la table 
else      
    { 
       // connexion à la base
$db = mysql_connect('localhost', 'DevBlog', 'root', 'root')  or die('Erreur de connexion '.mysql_error());
// sélection de la base  

    mysql_select_db('DevBlog',$db)  or die('Erreur de selection '.mysql_error()); 
     
    // on écrit la requête sql 
    $sql = "INSERT INTO * VALUES('','$titre','$image','$date','$auteur','$contenu','$extrait')"; 
     
    // on insère les informations du formulaire dans la table 
    mysql_query($sql) or die('Erreur SQL !'.$sql.'<br>'.mysql_error()); 

    // on affiche le résultat pour le visiteur 
    echo 'Vos infos on été ajoutées.'; 

    mysql_close();  // on ferme la connexion 
    }  
?>