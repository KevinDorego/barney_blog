    <!-- featured 
    ================================================== -->
    <section class="s-featured">
        <div class="row">
            <div class="col-full">

                <div class="featured-slider featured" data-aos="zoom-in">

                    <div class="featured__slide">
                        <div class="entry">

                            <div class="entry__background" style="background-image:url('images/thumbs/featured/featured-guitarman.jpg');"></div>
                            
                            <div class="entry__content">
                                <span class="entry__category"><a href="#0">Music</a></span>

                                <h1><a href="#0" title="">What Your Music Preference Says About You and Your Personality.</a></h1>

                                <div class="entry__info">
                                    <a href="#0" class="entry__profile-pic">
                                        <img class="avatar" src="images/avatars/user-05.jpg" alt="">
                                    </a>
                                    <ul class="entry__meta">
                                        <li><a href="#0">Jonathan Smith</a></li>
                                        <li>June 02, 2018</li>
                                    </ul>
                                </div>
                            </div> <!-- end entry__content -->
                            
                        </div> <!-- end entry -->
                    </div> <!-- end featured__slide -->

                    <div class="featured__slide">

                        <div class="entry">

                            <div class="entry__background" style="background-image:url('images/thumbs/featured/featured-watch.jpg');"></div>
                            
                            <div class="entry__content">
                                <span class="entry__category"><a href="#0">Management</a></span>

                                <h1><a href="#0" title="">The Pomodoro Technique Really Works.</a></h1>

                                <div class="entry__info">
                                    <a href="#0" class="entry__profile-pic">
                                        <img class="avatar" src="images/avatars/user-03.jpg" alt="">
                                    </a>

                                    <ul class="entry__meta">
                                        <li><a href="#0">John Doe</a></li>
                                        <li>June 13, 2018</li>
                                    </ul>
                                </div>
                            </div> <!-- end entry__content -->
                            
                        </div> <!-- end entry -->

                    </div> <!-- end featured__slide -->

                    <div class="featured__slide">

                        <div class="entry">

                            <div class="entry__background" style="background-image:url('images/thumbs/featured/featured-beetle.jpg');"></div>

                            <div class="entry__content">
                                <span class="entry__category"><a href="#0">LifeStyle</a></span>

                                <h1><a href="#0" title="">The difference between Classics, Vintage  Antique Cars.</a></h1>

                                <div class="entry__info">
                                    <a href="#0" class="entry__profile-pic">
                                        <img class="avatar" src="images/avatars/user-03.jpg" alt="">
                                    </a>

                                    <ul class="entry__meta">
                                        <li><a href="#0">John Doe</a></li>
                                        <li>June 12, 2018</li>
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