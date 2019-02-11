<?php
if(isset($_POST['title'])&&isset($_POST['content'])&& isset($_POST['cat']){
 edit_post($bdd, $_POST['title'], $_POST['content'],$_SESSION['id'], $_POST['cat'],$_POST['id'],$_FILES['file']);
}
header('Location: http://localhost:8888/BLOG-CODE/barney_blog/');
?>