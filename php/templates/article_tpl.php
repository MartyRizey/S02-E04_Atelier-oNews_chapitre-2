<!-- emmet: h2+article*6>a+h3+div(img+strong+time)+p+a -->
<h2 class="right__title"><?= $article['title']; ?></h2>

<article class="post post--solo">
  <!-- 
    Convention de nommage des classes : snake_case / BEM / SMACSS 
  -->
  <a href="" class="post__category post__category--color-<?= $article['category']; ?>">
    <?= $article['category']; ?>
  </a>

  <div class="post__meta">
    <img class="post__author-icon" src="../images/icons/<?= $article['image']; ?>" alt="">
    <strong class="post__author"><?= $article['author']; ?></strong>
    <time datetime="2018-03-27"><?= $article['publish']; ?></time>
  </div>

  <p><?= $article['text']; ?></p>

  <a href="index.php" class="post__link">Back to home</a>

</article>

