<?php

// ----- FONCTION "USER CONNECTION" -----
function search_user ($bdd, $email, $password)
{
   $reponse = $bdd->prepare('select A.id, A.firstname, A.lastname, A.email, A.level, A.profil_picture from authors as A where (A.email=? AND A.password=?)');
   $reponse->execute(array($email, MD5($password)));
   $user=$reponse->fetch();
   return $user;
}

// ----- FONCTION "AJOUTER ARTICLE" -----
function add_article($bdd, $title, $content,$ida, $cat,$file)
{
  var_dump($file);
  var_dump('toto');
  $ext = explode('.',$file['name']);
  $extension=end($ext);
  $new_name = MD5($file['name'].time());
  move_uploaded_file($file['tmp_name'], 'images/'.$new_name.'.'.$extension);
  $reponse = $bdd->prepare('INSERT INTO posts(post_title,post_content, id_authors, id_cat, file, created_date, up_date)
                            VALUES(?,?,?,?,?,?,?)');
  $reponse->execute(array($title, $content, $ida, $cat,$new_name.'.'.$extension, date("Y-m-d H:i:s"),date("Y-m-d H:i:s")));
}

// ----- FONCTION "SUPPRIMER ARTICLE" -----
function delete_post ($bdd, $id)
{
  $my_post = one_post($bdd,$id);
  unlink('images/'.$my_post['file']);
  $reponse = $bdd -> prepare ('DELETE  FROM posts WHERE id=?');
  $reponse->execute(array($id));
}

// ----- FONCTION "MODIFIER ARTICLE" -----
function edit_post($bdd, $title, $content,$ida, $cat,$id)
{
  $reponse = $bdd->prepare('update posts SET post_title= ?, post_content= ?, id_authors= ?,id_cat= ?, up_date= ? WHERE id= ?');
  $reponse->execute(array($title, $content, $ida, $cat, date("Y-m-d H:i:s"), $id));  
}

// ----- FONCTION "AFFICHAGE ARTICLES page accueil" -----
function search_all_posts($bdd)
{
   $reponse = $bdd->prepare('select p.post_title, p.post_content,p.id, a.firstname, c.name, c.img, c.imggrande,p.up_date FROM posts as p inner join authors as a on p.id_authors = a.id inner join category as c on p.id_cat = c.id ORDER BY up_date DESC');
   $reponse->execute();
   $list_post =array();
   while ($post = $reponse->fetch())
   {
       $list_post[] = $post;
   }
   $reponse->closeCursor();
   return $list_post;
}

// ----- FONCTION "VUE D'un ARTICLE" -----
function one_post($bdd,$id)
{
  $reponse = $bdd->prepare('select p.post_title, p.post_content,p.id, p.file, a.firstname, c.name, c.img, c.imggrande,p.up_date FROM posts as p inner join authors as a on p.id_authors = a.id inner join category as c on p.id_cat = c.id WHERE p.id='.$_GET[id]);
  $reponse->execute();
  $post=$reponse->fetch();
  $reponse->closeCursor();
  return $post;
}

?>










