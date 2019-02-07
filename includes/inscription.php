<section class="s-content s-content--top-padding s-content--narrow">
    <div class="row comment-respond">
        <div id="respond" class="col-full">

            <h3 class="h2">Inscription</h3>

            <form name="newAuthor" id="contactForm" method="post" action="index.php?action=newAuthors" autocomplete="off" enctype="multipart/form-data">
                <fieldset>

                    <div class="form-field">
                        <input name="firstname" id="cName" class="full-width" placeholder="Your Firstname*" value="" type="text" required>
                    </div>
                    <div class="form-field">
                        <input name="lastname" id="cName" class="full-width" placeholder="Your Lastname*" value="" type="text" required>
                    </div>

                    <div class="form-field">
                       <input name="login" id="cName" class="full-width" placeholder="Your Mail" value="" type="email" required>
                   </div>
                   
                   <div class="form-field">
                       <input name="password" id="cName" class="full-width" placeholder="Your Password" value="" type="password" required>
                   </div>
                  
                    <div class="form-field">
                      <input type="file" name="file">
                    </div>

                    <input name="submit" id="submit" class="btn btn--primary btn-wide btn--large full-width" value="Inscription" type="submit">

                </fieldset>
            </form> <!-- end form -->

        </div>
    </div>
</section>
