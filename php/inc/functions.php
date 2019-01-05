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




