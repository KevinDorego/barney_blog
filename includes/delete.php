<?php

if (isset($_SESSION['id']))
{
  ?>
  <section class="s-content s-content--top-padding s-content--narrow">
    <div class="row comment-respond">
        <div id="respond" class="col-full">

            <h3 class="h2">Etes vous sûre de vouloir supprimer l'article ? </h3>
            
           <a class='btn--primary btn' href='index.php'>Annuler</a>
           <a class='btn--primary btn'  href='index.php?action=delete&id=<?php echo($_GET['id']) ?>'>supprimer</a>
        </div>
      </div>
</section> 
    <?php
}
?>