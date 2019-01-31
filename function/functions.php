<?php

function search_all_posts($bdd)
{
   $reponse = $bdd->prepare('select p.post_title, p.post_content,p.id, a.firstname, c.name, c.img, c.imggrande,p.up_date FROM posts as p inner join authors as a on p.id_authors = a.id inner join category as c on p.id_cat = c.id');
   $reponse->execute();
   $list_post =array();
   while ($post = $reponse->fetch())
   {

       $list_post[] = $post;
   }
   $reponse->closeCursor();
   return $list_post;
}

function one_post($bdd,$id)
{
   $reponse = $bdd->prepare('select p.post_title, p.post_content,p.id, a.firstname, c.name, c.img, c.imggrande,p.up_date FROM posts as p inner join authors as a on p.id_authors = a.id inner join category as c on p.id_cat = c.id WHERE p.id='.$_GET[id]);
   $reponse->execute();


   $post=$reponse->fetch();
   $reponse->closeCursor();
   return $post;
}

function search_user ($bdd, $email, $password)
{
   $reponse = $bdd->prepare('select A.id, A.firstname, A.lastname, A.email from authors as A where (A.email=? AND A.password=?)');
   $reponse->execute(array($email, MD5($password)));
   $user=$reponse->fetch();
   return $user;
}

function add_article($bdd, $title, $content,$ida, $cat)
{

    $reponse = $bdd->prepare('INSERT INTO posts(post_title,post_content, id_authors, id_cat, file, created_date, up_date)
                              VALUES(?,?,?,?,?,?,?)');
    $reponse->execute(array($title, $content, $ida, $cat,'img1.jpg', date("Y-m-d H:i:s"),date("Y-m-d H:i:s")));

}
 function delete_post ($bdd, $id)
 {
     $reponse = $bdd -> prepare ('DELETE  FROM posts WHERE id=?');
     $reponse->execute(array($id));
 }

?>