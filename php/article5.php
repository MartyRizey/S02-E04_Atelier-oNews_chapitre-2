<?php

// j'inclu ma fonction qui effectue le traitement
// pour afficher l'article demandé.
require 'inc/functions.php';

// je passe en argument de l'appel à la fonction la clé 'article_1'
// que je stocke dans la variable $article
$article = getArticle('article_5');

require 'templates/header.php'; 

require 'templates/article_tpl.php';

require 'templates/footer.php'; 