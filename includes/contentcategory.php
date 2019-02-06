
   <!-- s-content
    ================================================== -->
<section class="s-content s-content--top-padding">

    <div class="row narrow">
        <div class="col-full s-content__header" data-aos="fade-up">
            <h1 class="display-1 display-1--with-line-sep">Category:
                <?php
                
                    echo $post_cat[0]['name'];
?>
            </h1>
            <p class="lead"><?php 
                
                echo utf8_encode($post_cat[0]['description']); ?></p>
        </div>
    </div>

    <div class="row entries-wrap add-top-padding wide">
        <div class="entries">
        <?php
            
    foreach($post_cat as $value)
        
    {  echo "
    
            <article class='col-block'>
            
                <div class='item-entry' data-aos='zoom-in'>
                    <div class='item-entry__thumb'>
                        <a href='single-standard.html' class='item-entry__thumb-link'>
                            <img src='images/thumbs/post/".$value['img']."' srcset='images/thumbs/post/".$value['img']." 1x, images/thumbs/post/".$value['imggrande']." 2x' alt=''>
                        </a>
                    </div>

                    <div class='item-entry__text'>
                        <div class='item-entry__cat'>
                            <a href='category.html'>".$value['name']."</a>
                        </div>

                        <h1 class='item-entry__title'><a href='post-".$value['id']."'>".utf8_encode($value['post_title'])."</a></h1>

                        <div class='item-entry__date'>
                            <a href='post-".$value['id']."'>".date('m-d-y',strtotime($value['up_date']))."</a>
                        </div>
                    </div>
                </div> <!-- item-entry -->

            </article> <!-- end article -->
";}?>
           

        </div> <!-- end entries -->
    </div> <!-- end entries-wrap -->

    <div class="row pagination-wrap">
        <div class="col-full">
            <nav class="pgn" data-aos="fade-up">
                <ul>
                    <li><a class="pgn__prev" href="#0">Prev</a></li>
                    <li><a class="pgn__num current" href="#0">1</a></li>
                    <li><span class="pgn__num ">2</span></li>
                    <li><a class="pgn__num" href="#0">3</a></li>
                    <li><a class="pgn__num" href="#0">4</a></li>
                    <li><a class="pgn__num" href="#0">5</a></li>
                    <li><span class="pgn__num dots">…</span></li>
                    <li><a class="pgn__num" href="#0">8</a></li>
                    <li><a class="pgn__next" href="#0">Next</a></li>
                </ul>
            </nav>
        </div>
    </div>

</section> <!-- end s-content -->
