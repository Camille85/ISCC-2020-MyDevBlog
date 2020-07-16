<html>
<head>
    <link type="text/css" rel="stylesheet" href="devblog.css">
</head>
 <?php
 include('header.php');
 ?>
     <a href= "http://localhost:8888/ISCC-2020/ISCC-2020-MyDevBlog/back.php"> <?php $_GET?> </a>
  </head>
    
<body>
    <?php
    if ($_GET["page"] == "administration"){
        echo " <div class=mestitres>
        <h1> Administration</h1>
        </div>";
        include("page-administration.php");
    }
    elseif ($_GET["page"] == "connexion"){
        echo " <div class=mestitres>
        <h1> Connexion</h1>
        </div>";
        include("page-connexion.php");
    }
    elseif ($_GET["page"] == "inscription"){
        echo " <div class=mestitres>
        <h1> Inscription</h1>
        </div>";
        include("page-inscription.php");
    }
    elseif ($_GET["page"] == "utilisateurs"){
        echo " <div class=mestitres>
        <h1> Utilisateurs</h1>
        </div>";
        include("afficher-utilisateurs.php");
    }
    elseif ($_GET["page"] == "article"){
        echo 
        include("article.php");
    }
    elseif ($_GET["page"] == "deconnexion"){
        echo " <div class=mestitres>
        <h1> Administration</h1>
        </div>";
        include("deconnexion.php");
    }
    ?>
  
  </body>

  <?php include('footer.php');
    ?>

  </html>