<?php
if(isset($_POST['title']) && isset($_POST['content']) && isset($_SESSION['id']) && isset($_POST['cat'])){
    
add_article($bdd, $_POST['title'], $_POST['content'],$_SESSION['id'], $_POST['cat'],$_FILES['file']);
}

header('Location: http://localhost/Barney_blog/index.php');
?>