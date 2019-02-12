<?php
require('function/connexion.php');


    class Postquery {
        
        
        public function __construct(){
            
        }
        
       public static function search_all_post($bdd){
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
        
        function one_post($bdd,$id)
{
  $reponse = $bdd->prepare('select p.post_title, p.post_content,p.id, p.file, a.firstname, c.name, c.img, c.imggrande,p.up_date FROM posts as p inner join authors as a on p.id_authors = a.id inner join category as c on p.id_cat = c.id WHERE p.id='.$id);
  $reponse->execute();
  $post=$reponse->fetch();
  $reponse->closeCursor();
  return $post;
}
        
    }

?>
