<?php require 'templates/header.php'; ?>
<?php require 'inc/data.php'; ?> 

<!-- emmet: h2+article*6>a+h3+div(img+strong+time)+p+a -->
<h2 class="right__title">Latest News</h2>
<div class="posts">

  <?php

    foreach($list_articles as $article_id => $article_datas){

      // Si c'est l'article "404"
      if($article_id === '__404__'){

        // http://php.net/manual/fr/control-structures.continue.php
        // 'continue',veut dire ça ne m'intéresse pas, passe à 
        // l'itération suivante.
        continue;
      }

      // ici on affiche les articles sans la clé '__404__'
      include 'templates/article_extrait.php';            

    }

  ?>  

</div>

<?php require 'templates/footer.php'; ?>
    