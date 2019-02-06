    <!-- featured 
    ================================================== -->
    <section class="s-featured">
        <div class="row">
            <div class="col-full">

                <div class="featured-slider featured" data-aos="zoom-in">
                
                    <div class="featured__slide">
                        <div class="entry">

                            <div class="entry__background" style="background-image:url('images/thumbs/post/<?php echo $all_posts[0]['file'] ?>');"></div>
                            
                            <div class="entry__content">
                                <span class="entry__category"><a href="#0"><?php echo $all_posts[0]['name'] ?></a></span>

                                <h1><a href="#0" title=""><?php echo $all_posts[0]['post_title'] ?></a></h1>

                                <div class="entry__info">
                                    <a href="#0" class="entry__profile-pic">
                                        <img class="avatar" src="images/avatars/<?php echo $all_posts[0]['profil_picture'] ?>" alt="">
                                    </a>
                                    <ul class="entry__meta">
                                        <li><a href="#0"><?php echo $all_posts[0]['firstname'] ?></a></li>
                                        <li><?php echo date('m-d-y',strtotime($all_posts[0]['up_date']))?></li>
                                    </ul>
                                </div>
                            </div> <!-- end entry__content -->
                            
                        </div> <!-- end entry -->
                    </div> <!-- end featured__slide -->

                    <div class="featured__slide">

                        <div class="entry">

                            <div class="entry__background" style="background-image:url('images/thumbs/post/<?php echo $all_posts[1]['file'] ?>');"></div>
                            
                            <div class="entry__content">
                                <span class="entry__category"><a href="#0"><?php echo $all_posts[1]['name'] ?></a></span>

                                <h1><a href="#0" title=""><?php echo $all_posts[1]['post_title'] ?></a></h1>

                                <div class="entry__info">
                                    <a href="#0" class="entry__profile-pic">
                                        <img class="avatar" src="images/avatars/<?php echo $all_posts[1]['profil_picture'] ?>" alt="">
                                    </a>

                                    <ul class="entry__meta">
                                        <li><a href="#0"><?php echo $all_posts[1]['firstname'] ?></a></li>
                                        <li><?php echo date('m-d-y',strtotime($all_posts[1]['up_date']))?></li>
                                    </ul>
                                </div>
                            </div> <!-- end entry__content -->
                            
                        </div> <!-- end entry -->

                    </div> <!-- end featured__slide -->

                    <div class="featured__slide">

                        <div class="entry">

                            <div class="entry__background" style="background-image:url('images/thumbs/post/<?php echo $all_posts[2]['file'] ?>');"></div>

                            <div class="entry__content">
                                <span class="entry__category"><a href="#0"><?php echo $all_posts[2]['name'] ?></a></span>

                                <h1><a href="#0" title=""><?php echo $all_posts[2]['post_title'] ?></a></h1>

                                <div class="entry__info">
                                    <a href="#0" class="entry__profile-pic">
                                        <img class="avatar" src="images/avatars/<?php echo $all_posts[2]['profil_picture'] ?>" alt="">
                                    </a>

                                    <ul class="entry__meta">
                                        <li><a href="#0"><?php echo $all_posts[2]['firstname'] ?></a></li>
                                        <li><?php echo date('m-d-y',strtotime($all_posts[2]['up_date']))?></li>
                                    </ul>
                                </div>
                            </div> <!-- end entry__content -->

                        </div> <!-- end entry -->

                    </div> <!-- end featured__slide -->
                    
                </div> <!-- end featured -->

            </div> <!-- end col-full -->
        </div>
    </section> <!-- end s-featured -->


<section class="s-content">  
        <div class="row entries-wrap wide">
           <?php  if (isset($_SESSION['id']))
                        {   

          echo" <a class='btn--primary btn' href='index.php?page=new_article'>New Article</a>";
      }
          ?>
            <div class="entries">
<?php
//            $users = file_get_contents("articles_test.json");
//            $json = json_decode($users);

    
    foreach($all_posts as $value) 
    {   
            
        
        echo "<article class='col-block'>
                    
                <div class='item-entry' data-aos='zoom-in'>
                    <div class='item-entry__thumb'>
                        <a href='post-".$value['id']."' class='item-entry__thumb-link'>
                        <img src='images/thumbs/post/".$value['img']."' srcset='images/thumbs/post/".$value['img']." 1x, images/thumbs/post/".$value['imggrande']." 2x' alt=''>
                        </a>
                    </div>
        
                    <div class='item-entry__text'>    
                        <div class='item-entry__cat'>
                            <a href='category.html'>".$value['name']."</a> 
                        </div>
    
                        <h1 class='item-entry__title'><a href='post-".$value['id']."'>".utf8_encode($value['post_title'])."</a></h1>
                                
                        <div class='item-entry__date'>
                            <a href='post-".$value['id']."'>".date('m-d-y',strtotime($value['up_date']))."</a></br>";

                        if (isset($_SESSION['id']) && isset($_SESSION['level']) && $_SESSION['level'] == 1  || $_SESSION['id']== $value['id_authors'])
                        {   
                            echo "
                            <div class'icon'>
                                <a href='delete-".$value['id']."'>
                                <i class='fas fa-trash-alt'></i></a>
                                <a href='edit-".$value['id']."'>
                                <i class='fas fa-edit'></i></a>
                            </div>";
                        }
                        
        echo "
                        </div>                         
                    </div>
                </div>
            </article>" ;
    }

    
?>
            </div>
        </div>
</section>