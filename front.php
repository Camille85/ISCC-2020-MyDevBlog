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
        echo " <div class=mestitres>
        <h1> Accueil</h1>
        </div>";
        include("page-d'accueil.php");
    }
    elseif ($_GET["page"] == "contact"){
        echo " <div class=mestitres>
        <h1> Contact</h1>
        </div>";
        include("page-contact.php");
    }
    elseif ($_GET["page"] == "articles"){
        echo " <div class=mestitres>
        <h1> Les articles</h1>
        </div>";
        include("mes-articles.php");
    }
    elseif ($_GET["page"] == "article"){
        echo " <div class=mestitres>
        <h1> Article</h1>
        </div>";
        include("article.php");
    
    }
   
    elseif ($_GET["page"] == "connexion"){
        echo " <div class=mestitres>
        <h1> Connexion</h1>
        </div>";
        include("page-connexion.php");
    }
   
    
    
    ?>
  
  </body>

  <?php include('footer.php');
    ?>

  </html>