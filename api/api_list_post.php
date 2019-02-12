<?php

// header('Access-Control-Allow-Origin: *');
header('Content-Type: text/html; charset=utf-8'); 
header('Content-type: application/json');

try
{
$bdd = new PDO('mysql:host=localhost;dbname=blog_barney', 'root', 'root');
}

catch(Exception $e)
{
die('Erreur : '.$e->getMessage());
}



// ----- FONCTION "AFFICHAGE ARTICLES page accueil" -----
function search_all_posts($bdd)
{
   $reponse = $bdd->prepare('select p.post_title, p.post_content,p.id,p.id_authors, a.firstname,a.profil_picture, c.name, c.img, c.imggrande,p.up_date,p.file FROM posts as p inner join authors as a on p.id_authors = a.id inner join category as c on p.id_cat = c.id ORDER BY up_date DESC');
   $reponse->execute();
   $list_post =array();
   while ($post = $reponse->fetch())
   {
       $list_post[] = $post;
   }
   $reponse->closeCursor();
   return $list_post;
}





$data = search_all_posts($bdd);

echo json_encode($data);

?>