<?php

function getArticle($article_id) {

    // Me donne accès à tout mes articles
    // via la variable $list_articles
    include 'data.php';

    // Si je veux créé ma variable $article qui ne contient 
    // QUE l'article demandé via $article_id
    if (isset($list_articles[$article_id])) {

        $article = $list_articles[$article_id];

    } else {

        // redirige vers une clé '__404__' du tableau dans data.php
        $article = $list_articles['__404__'];
    }
        
    return $article;   
}

function getExtraitTexteArticle($article) {

    // http://php.net/manual/fr/function.strip-tags.php
    // Je supprime les balises HTML & PHP à l'intèrieur de ma variable
    $article = strip_tags($article);
    
    // http://php.net/manual/fr/function.substr.php 
    // -> retourne un segment de chaîne.
    $article_reduit = substr($article, 0, 150);

    return $article_reduit . '[ ... ]';

}





    




