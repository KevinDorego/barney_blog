<?php

if (isset($_SESSION['id']))
{
  ?>

<section class="s-content s-content--top-padding s-content--narrow">
    <div class="row comment-respond">
        <div id="respond" class="col-full">

            <h3 class="h2">Vous allez modifier votre profil !</h3>

            <form name="articleForm" id="contactForm" method="post" action="index.php?action=update_profil" autocomplete="off" >
                <fieldset>
                    <div class="form-field">
                        <input name="id" id="cName" class="full-width" placeholder="Your Name*" value="<?php echo($info_user['id']); ?>" type="text" style="display: none;">
                    </div>
                   

                    <div class="form-field">
                        <input name="firstname" id="cName" class="full-width" placeholder="Votre Prénom*" value="<?php echo($info_user['firstname']); ?>" type="text">
                    </div>

                    <div class="form-field">
                        <input name="lastname" id="cName" class="full-width" placeholder="Votre Nom*" value="<?php echo($info_user['lastname']); ?>" type="text">
                    </div>

                    <div class="form-field">
                       <input name="login" id="cName" class="full-width" placeholder="Votre Adresse mail*" value="<?php echo($info_user['email']); ?>" type="email">
                   </div>

                    <div class="form-field">
                       <input name="password" id="cName" class="full-width" placeholder="Votre Mot de Passe" value="<?php echo($info_user['password']); ?>" type="password">
                   </div>

                    <div class="form-field" placeholder="Votre Photo">
                      <input type="file" name="file">
                    </div>

                    <input name="submit" id="submit" class="btn btn--primary btn-wide btn--large full-width" value="Valider" type="submit">

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
              <h3 class='h2'>Veuillez vous connecter. Bande de salopes !</h3>
              </div>
            </div>
          </section>

        ";
  }
?>