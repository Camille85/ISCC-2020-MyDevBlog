<?php
 
    function getArticles() //récupère tous les articles
    {
        require ('connect.php');
        $requête =$bdd->prepare('SELECT * FROM Articles ORDER BY id DESC');
        $requête ->execute();
        $data = $requête->fetchAll(PDO::FETCH_OBJ);
        return $data;
        $requête->closeCursor();
    }
 
    function getArticle($id) //récupère tous les articles
    {
        require ('connect.php');
        $requête =$bdd->prepare("SELECT * FROM Articles WHERE id=$id");
        $requête ->execute();
        $data = $requête->fetchAll(PDO::FETCH_OBJ);
        return $data;
        $requête->closeCursor();
    }
?>