# Atelier oNews - chapitre 2
---

## Video de présentation  

Video => https://drive.google.com/drive/folders/1R_6TthTISUWZDSu5xWIGIsz3TjLcNqd_
/media/sf_win_Linux_Partage/A_utiliser_dans_LInux/Lunar/Video_Cours/Saison-2-PHP_bases/S02E04-Atelier_Onews

#### Contenu

- Configuration fichier php.ini pour afficher les erreurs en `ligne de commande` et dans `apache`.  

- Présentation de l'atelier _**oNews**_.
    - https://github.com/MartyRizey/S02-E04_Atelier-oNews_chapitre-2/tree/master


## Video de correction  
> **Video 1 :**
> Video => https://drive.google.com/drive/folders/1Tx1wTQiwiuLvfvigjMINMzvIf9AEfor4
> /media/sf_win_Linux_Partage/A_utiliser_dans_LInux/Lunar/Video_Cours/Saison-2-PHP_bases/S02E05-Formulaires/ Red-1-Correction.mp4

**ETAPE 1 :** 
**Découpage des fichiers :**_________________________________________________________________________________00:12:10mns

- Ajout d'un fichier `article.html` dans le dossier "html" du projet.
- Modification du fichier `article.html` pour repecter la maquette fournie.
    - Copier-coller les parties indentiques à savoir la partie de gauche et le titre de la partie de droite.
    - Dans la partie gauche ne garder qu'un article et modifier le pour correspondre à la maquette.
    Modifier le CSS, pour prendre les 100% de la partie de droite.
    - Ajouter en bas de page un lien `Back to home` vers le fichier index.html
- Dans le fichier _index.php_
    - Pensez à modifier les liens, `continue reading` pour les faire pointer vers la page article.php

```
à 18:13 mns - Convention de nommage des classes 
    + snake_case
    - BEM    : http://getbem.com/
               https://www.alsacreations.com/article/lire/1641-bonnes-pratiques-en-css-bem-et-oocss.html
    - SMACSS : https://smacss.com/fr
               https://smacss.com/files/smacss-fr.pdf
```
~


**ETAPE 2 :**
**Factoriser les fichiers _index.html_ et _article.html_ :**_____________________________________________________________00:35:45mns

factoriser ce code HTML, c’est à dire éviter les répétitions des 2 fichiers.
- comme pour le support "place de cinéma" en S02-E02, copier les fichiers _index.html_ et _article.html_ dans le répertoire `php` puis changer le sufixe _html_ en _php_.
Vérifier dans une page web que le contenu s’affiche bien en tapant les URL de chaque fichier dans la barre d’adresse du navigateur.

```
Le fichier ".keep" dans un dossier, permet de faire apparaître un dossier vide quand on versionne le projet avec _git_.
On peut le nommer aussi ".git" ou ".gitkeep" par convention.
Il ne se voit pas dans l'arboresccence avec caja (l'explorer de Linux) ou avec le terminal car c'est un fichier caché.
Si vous oublier de mettre ce ".keep" le dossier n'apparaîtrera pas en versionnant avec _git_.
```

- Analyser le code HTML afin de voir ce qui est répéter.
    - Créer dans le dossier `php` et `inc` des fichiers de template qui reprennent les parties communes. 
        - header.php
        - footer.php  

        Copier-coller le code commun dedans et supprimer ce code des fichiers index.php et article.php
- Remplacer le code supprimé par des inclusion de ces fichiers avec **include** ou **require**.
```
<?php require 'inc/header.php'; ?>

<!-- emmet: h2+article*6>a+h3+div(img+strong+time)+p+a -->
<h2 class="right__title">Lorem ipsum dolor sit amet</h2>

<article class="post post--solo">
  <!-- 
    Convention de nommage des classes : snake_case / BEM / SMACSS 
  -->
  <a href="" class="post__category post__category--color-team">team</a>
  <div class="post__meta">
    <img class="post__author-icon" src="../images/icon-dar.png" alt="">
    <strong class="post__author">John Marchill</strong>
    <time datetime="2018-03-27">le 27 mars 2018</time>
  </div>

  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. A quaerat commodi architecto perferendis sit sed ipsa excepturi repellendus accusamus iure, ipsam quos esse iste consectetur nam dolore minima eum obcaecati libero officiis quisquam quo? Ab, magni nostrum! Quia, laborum ad. Dolorem quidem, modi odit saepe enim perferendis, dolorum dolore hic illum accusamus nesciunt eos animi culpa tempora numquam, veniam rerum? Sapiente officia fugit quos eligendi tempore modi, dolore consequuntur vel tempora inventore culpa saepe eius, aperiam est quo? Nostrum aliquid dicta veniam ratione! Quis, possimus distinctio non expedita praesentium incidunt sunt voluptatum, eius omnis perferendis commodi voluptate quisquam. Harum consequatur consequuntur sint et, accusamus illo, autem voluptate aliquam at adipisci ut exercitationem repellat a perspiciatis commodi necessitatibus sit odit? Nisi aut sapiente repudiandae cum aliquid asperiores pariatur quibusdam libero, reprehenderit quisquam illo quaerat porro, veniam, atque temporibus laboriosam quidem consectetur ex sunt. Ratione minima eveniet, vel similique magnam ex totam.</p>
  <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Impedit doloribus necessitatibus eveniet et blanditiis deleniti velit laboriosam fugiat quasi atque, error a quibusdam quaerat eos distinctio illum. Maiores commodi a numquam placeat enim iste, facilis, illo rerum at officiis sequi, saepe nisi impedit distinctio exercitationem ut dignissimos asperiores. Sunt vitae vel, eveniet atque magnam rem, natus consequuntur eum quidem quasi nemo est maiores consectetur iure ipsam necessitatibus beatae fugiat similique officiis esse adipisci! Saepe, ex. Id dolor fuga aperiam, tempore ut earum eius vero, numquam mollitia labore pariatur voluptatum. Delectus, laborum natus. Quaerat, nihil excepturi libero esse unde fuga vero veniam molestias cum rem nostrum nemo, laboriosam, fugiat vitae enim consequuntur fugit nisi. Dolor veritatis modi exercitationem nesciunt quia placeat, at fuga ratione nisi unde sequi, ullam facere quisquam minus natus id accusamus a architecto impedit similique odio possimus fugit quasi inventore. Omnis quibusdam reiciendis doloremque fugit asperiores harum recusandae tempore repellendus nesciunt eligendi quis officiis molestias ipsam mollitia, alias architecto ipsa, iusto porro consectetur officia reprehenderit sed saepe sapiente inventore! Corrupti neque cupiditate facere beatae iusto iure in suscipit dolore explicabo numquam aut, accusantium molestiae tenetur corporis dolorum est, consectetur ducimus, ab atque! Atque dolores consequatur perspiciatis aliquam nemo!</p>
  <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Animi facere perspiciatis at corrupti quam impedit quasi accusantium porro magnam suscipit officiis voluptatum autem velit eveniet laudantium, consectetur reprehenderit ut beatae sint labore expedita! Natus mollitia dolores ipsum, quasi unde doloremque porro delectus sapiente est numquam voluptatibus, maiores voluptates excepturi, repellat quas adipisci commodi! Mollitia maiores accusamus vel eius? Ad, culpa hic obcaecati officia, natus soluta harum asperiores a esse ex praesentium laudantium consequatur quas. Veniam.</p>

  <a href="index.html" class="post__link">Back to home</a>

</article>

<?php require 'inc/footer.php'; ?>

```
~


**ETAPE 3 :**
**Données dynamiques :**___________________________________________________________________________________01:06:14mns

Rendre les données de la page "article" dynamiques. C'est à dire que ces données puissent changées automatiquement en fonction de certaines conditions (mise à jour, suppression, ajout, modification).
- stocker les données en dur dans le code de la page article, dans un tableau associatif.
```
  'title'    => 'Lorem ipsum dolor sit amet',
  'author'   => 'John Marchill',
  'text'     => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. A quaerat commodi architecto perferendis sit sed ipsa excepturi repellendus accusamus iure, ipsam quos esse iste consectetur nam dolore minima eum obcaecati libero officiis quisquam quo? Ab, magni nostrum! Quia, laborum ad. Dolorem quidem, modi odit saepe enim perferendis, dolorum dolore hic illum accusamus nesciunt eos animi culpa tempora numquam, veniam rerum? Sapiente officia fugit quos eligendi tempore modi, dolore consequuntur vel tempora inventore culpa saepe eius, aperiam est quo? Nostrum aliquid dicta veniam ratione! Quis, possimus distinctio non expedita praesentium incidunt sunt voluptatum, eius omnis perferendis commodi voluptate quisquam. Harum consequatur consequuntur sint et, accusamus illo, autem voluptate aliquam at adipisci ut exercitationem repellat a perspiciatis commodi necessitatibus sit odit? Nisi aut sapiente repudiandae cum aliquid asperiores pariatur quibusdam libero, reprehenderit quisquam illo quaerat porro, veniam, atque temporibus laboriosam quidem consectetur ex sunt. Ratione minima eveniet, vel similique magnam ex totam.</p>
                 <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Impedit doloribus necessitatibus eveniet et blanditiis deleniti velit laboriosam fugiat quasi atque, error a quibusdam quaerat eos distinctio illum. Maiores commodi a numquam placeat enim iste, facilis, illo rerum at officiis sequi, saepe nisi impedit distinctio exercitationem ut dignissimos asperiores. Sunt vitae vel, eveniet atque magnam rem, natus consequuntur eum quidem quasi nemo est maiores consectetur iure ipsam necessitatibus beatae fugiat similique officiis esse adipisci! Saepe, ex. Id dolor fuga aperiam, tempore ut earum eius vero, numquam mollitia labore pariatur voluptatum. Delectus, laborum natus. Quaerat, nihil excepturi libero esse unde fuga vero veniam molestias cum rem nostrum nemo, laboriosam, fugiat vitae enim consequuntur fugit nisi. Dolor veritatis modi exercitationem nesciunt quia placeat, at fuga ratione nisi unde sequi, ullam facere quisquam minus natus id accusamus a architecto impedit similique odio possimus fugit quasi inventore. Omnis quibusdam reiciendis doloremque fugit asperiores harum recusandae tempore repellendus nesciunt eligendi quis officiis molestias ipsam mollitia, alias architecto ipsa, iusto porro consectetur officia reprehenderit sed saepe sapiente inventore! Corrupti neque cupiditate facere beatae iusto iure in suscipit dolore explicabo numquam aut, accusantium molestiae tenetur corporis dolorum est, consectetur ducimus, ab atque! Atque dolores consequatur perspiciatis aliquam nemo!</p>
                 <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Animi facere perspiciatis at corrupti quam impedit quasi accusantium porro magnam suscipit officiis voluptatum autem velit eveniet laudantium, consectetur reprehenderit ut beatae sint labore expedita! Natus mollitia dolores ipsum, quasi unde doloremque porro delectus sapiente est numquam voluptatibus, maiores voluptates excepturi, repellat quas adipisci commodi! Mollitia maiores accusamus vel eius? Ad, culpa hic obcaecati officia, natus soluta harum asperiores a esse ex praesentium laudantium consequatur quas. Veniam.</p>',
  'category' => 'team',
  'publish'  => 'le 27 mars 2018',
  'image'    => 'icon-dar.png'

];
```
- Remplacer et afficher les données en dur dans le code HTML par les valeurs des clés du tableau en PHP.
    - `<?php echo ......; ?>` ou syntaxe raccourcie `<?= ....... ; ?>` mieux adaptèe pour mettre dans des balises HTML.
    - Ex : `<?= $tableau['clé'] ;?>` affichera la valeur contenu à la clé de $tableau.

~

**ETAPE 4 :**
**Navigation dynamique:**__________________________________________________________________________Video 2 - 00:00:00mns
> **Video 2 :**
> Video => https://drive.google.com/drive/folders/1Tx1wTQiwiuLvfvigjMINMzvIf9AEfor4
> /media/sf_win_Linux_Partage/A_utiliser_dans_LInux/Lunar/Video_Cours/Saison-2-PHP_bases/S02E05-Formulaires/ Red-2-Correction suite.mp4

Rendre le menu de navigation de la partie gauche dynamique.
- **Architecture et découpage**.

    - Créer dans le dossier _php/inc/_ un fichier **nav.php**.
    - Dans le fichier `header.php` copier la partie qui nous intéresse, et coller la dans le fichier **nav.php**. 
    - Pensez à inclure avec un _include_ ou un _require_ le fichier dans le `header.php` pour y avoir accès.
    - Vérifiez bien que votre site fonctionne toujours ...
- **Rendre dynamique la navigation**.
    - Comme pour l'article, nous aurons besoin de stocker les données dans un tableau dans le fichier **nav.php**.
    - Pour voir un autre type de tableau, créer un tableau multidimentionnel, dont chaque index sera un tableau associatif,
      avec une 'clé' et une valeur.
    - Parcourir le tableau avec une boucle `foreach` pour afficher les liens de la barre de navigation.
    - Créer un index supplémentaire dans le tableau pour ajouter un lien externe au site, vers un autre site dans une autre page.
    - Lien relatif et lien absolu.

**ETAPE 5 :**
**Créer une page pour chaque article :**___________________________________________________________Video 3 - 00:05:36mns
> **Video 3 :**
> Video => https://drive.google.com/drive/folders/1Tx1wTQiwiuLvfvigjMINMzvIf9AEfor4
> /media/sf_win_Linux_Partage/A_utiliser_dans_LInux/Lunar/Video_Cours/Saison-2-PHP_bases/S02E05-Formulaires/ Red-3-Correction fin & decouverte formulaires.mp4

- **Architecture et découpage**.
    - Créer un fichier PHP Par article (6 au total) dans le dossier `PHP`.
    - Faire correspondre dans le fichier `index.php` les liens _Continue reading_  avec les nouveaux fichiers qui seront nos pages article.
    - Créez un nouveau fichier dans `php/inc/`qui contiendra la partie mise en forme des articles.
      Dans les fichiers article on ne gardera que la partie données (tableaux) et la partie affichage en utilisant **include** ou **require** pour importer la mise en forme. 


