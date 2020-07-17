<!DOCTYPE html> 
<html>
    <head>
    <title>Contacts</title>
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
if(isset($_POST['user_login'], $_POST['user_mail'],$_POST['message'])) {
   if(!empty($_POST['user_login']) AND !empty($_POST['user_mail'])) {
      
      $user_login = htmlspecialchars($_POST['user_login']);
      $user_mail = htmlspecialchars($_POST['user_mail']);
      $mess = htmlspecialchars($_POST['message']);
      
      $ins = $bdd->prepare("INSERT INTO Contact (Nom, Mail, Message ) VALUES ('$user_login', '$user_mail', '$mess')");
     
   $ins->execute(array($user_login, $user_mail, $mess)); 
      $message = 'Nous avons bien pris en compte votre commentaire !';
   } else {
      $message = 'Veuillez remplir tous les champs';
   }
}
?>

   <form method="POST" class=form >
   <div>

      <input type="text" name="user_login" id="name" class="form2" placeholder="Votre nom" /><br /><br />
    </div>
      <div>
      <input type="mail" name="user_mail"  id="mail" class="form2" placeholder="Votre e-mail" /><br /><br />
      </div>
      <div>
      <textarea name="message" id="msg" class="form2" placeholder="Comment améliorer mon site ?"></textarea><br /><br />
      </div>
      <div>
      <input type="submit" id="button" class="form2" value="Envoyer" />
      </div>
   </form>
   
   <br />
   <?php if(isset($message)) { echo $message; } ?>
        
        
    </body>
</html>