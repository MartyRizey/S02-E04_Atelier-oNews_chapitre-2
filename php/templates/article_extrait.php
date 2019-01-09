<article class="post">

    <a href="" class="post__category post__category--color-<?= $article_datas['category']; ?>">
      <?= $article_datas['category']; ?>
    </a>
    <h3>Lorem ipsum dolor sit amet</h3>
    <div class="post__meta">
      <img class="post__author-icon" src="../images/icons/<?= $article_datas['image']; ?>" alt="">
      <strong class="post__author"><?= $article_datas['author']; ?></strong>
      <time datetime="2018-03-27"><?= $article_datas['publish']; ?></time>
    </div>
    
    <p><?= substr($article_datas['text'],0 ,150).' [...]'; ?></p>

    <!-- http://php.net/manual/fr/function.str-replace.php-->
    <!-- str_replace('caractère à remplacer', 'on remplace par...', $article_id)-->
    <a href="<?= str_replace('_', '', $article_id); ?>.php" class="post__link">Continue reading</a>

</article>
