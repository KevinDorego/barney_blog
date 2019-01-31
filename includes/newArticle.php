<?php

if (isset($_SESSION['id']))
{
  ?>

<section class="s-content s-content--top-padding s-content--narrow">
    <div class="row comment-respond">
        <div id="respond" class="col-full">

            <h3 class="h2">New<span>Article</span></h3>

            <form name="articleForm" id="contactForm" method="post" action="index.php" autocomplete="off">
                <fieldset>

                    <div class="form-field">
                        <input name="Name" id="cName" class="full-width" placeholder="Your Name*" value="" type="text">
                    </div>

                    <div class="form-field">
                       <input type="radio" id="bro_code" name="cat" value=1 checked>
                       <label for="bro_code">bro_code</label>
                   </div>

                   <div class="form-field">
                       <input type="radio" id="play_book" name="cat" value=2 >
                       <label for="play_book">play_book</label>
                   </div>
                    <div class="form-field">
                        <input name="title" id="cName" class="full-width" placeholder="titre de l'article" value="" type="text">
                    </div>

                    <div class="message form-field">
                        <textarea name="content" id="cMessage" class="full-width" placeholder="Your article*"></textarea>
                    </div>

                    <input name="submit" id="submit" class="btn btn--primary btn-wide btn--large full-width" value="Add Article" type="submit">

                </fieldset>
            </form> <!-- end form -->

        </div>
    </div>
</section>

<?php

  }

  else
  {
    echo "
          
          <section class='s-content s-content--top-padding s-content--narrow'>
            <div class='row comment-respond'>
              <div id='respond' class='col-full'>
              <h3 class='h2'>Veuillez vous connecter.</h3>
              </div>
            </div>
          </section>

        ";
  }
?>
