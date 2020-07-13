<html>
<head>
    <link type="text/css" rel="stylesheet" href="devblog.css">
</head>
 <?php
 include('header.php');
 ?>
     <a href= "http://localhost:8888/ISCC-2020/ISCC-2020-MyDevBlog/front.php"> <?php $_GET?> </a>
  </head>
    
<body>
    <?php
    if ($_GET["page"] == "accueil"){
        echo "<h1> Accueil </h1>";
        include("page-d'accueil.php");
    }
    elseif ($_GET["page"] == "contact"){
        echo " <h1> Contacts </h1>";
        include("page-contact.php");
    }
    elseif ($_GET["page"] == "articles"){
        echo " <h1> Les articles </h1>";
        include("mes-articles.php");
    }
    elseif ($_GET["page"] == "art1"){
        echo " <h1> Article 1</h1>";
        include("article-1.php");
    }
    elseif ($_GET["page"] == "art2"){
        echo " <h1> Article 1</h1>";
        include("article-2.php");
    }
    elseif ($_GET["page"] == "art3"){
        echo " <h1> Article 1</h1>";
        include("article-3.php");
    }
    elseif ($_GET["page"] == "art4"){
        echo " <h1> Article 1</h1>";
        include("article-4.php");
    }
    elseif ($_GET["page"] == "art5"){
        echo " <h1> Article 1</h1>";
        include("article-5.php");
    }
    elseif ($_GET["page"] == "administration"){
        echo " <h1> Administration</h1>";
        include("page-administration.php");
    }
    elseif ($_GET["page"] == "connexion"){
        echo " <h1> Connexion </h1>";
        include("page-connexion.php");
    }
    elseif ($_GET["page"] == "inscription"){
        echo " <h1> Inscription </h1>";
        include("page-inscription.php");
    }
    
    
    ?>
  
  </body>

  <?php include('footer.php');
    ?>

  </html>