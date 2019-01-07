<?php

// j'inclu ma fonction qui effectue le traitement
// pour afficher l'article demandé.
require 'inc/functions.php';

// je passe en argument de l'appel à la fonction la clé 'article_1'
// que je stocke dans la variable $article
$article = getArticle('article_6');

    // echo '<pre>';
    // print_r($article);
    // echo'</pre>';

require 'inc/header.php'; 

require 'inc/article_tpl.php';

require 'inc/footer.php'; 

