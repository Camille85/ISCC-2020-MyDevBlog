<?php
session_start();
$_SESSION=array();
session_destroy();
header('Location: http://localhost:8888/ISCC-2020/ISCC-2020-MyDevBlog/front.php?page=accueil');

?>