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
    - Faire correspondre dans le fichier `index.php` les liens _Continue reading_  avec les nouveaux   fichiers qui seront nos pages article.
    - Créez un nouveau fichier dans `php/inc/`qui contiendra la partie mise en forme des articles.
      Dans les fichiers article on ne gardera que la partie données (tableaux) et la partie affichage en utilisant **include** ou **require** pour importer la mise en forme. 
    - Pensez à changer les données tel que la catégory et l'avatar dans chaque tableau qui correspond à une page article.


**BONUS :**
**Ajouter une page de contact :**__________________________________________________________________Video 3 - 00:33:15mns
> **Video 3 :**
> Video => https://drive.google.com/drive/folders/1Tx1wTQiwiuLvfvigjMINMzvIf9AEfor4
> /media/sf_win_Linux_Partage/A_utiliser_dans_LInux/Lunar/Video_Cours/Saison-2-PHP_bases/S02E05-Formulaires/ Red-3-Correction fin & decouverte formulaires.mp4

**Architecture**.
 - Création d'un fichier de template `contact_tpl.php` dans le dossier _inc_ et d'un fichier `contact.php` comme fichier d'entré.
 - **changer les données en fonction de la page affichées**
    - Création d'une variable faisant office d'intérupteur dans le fichier `contact.php`
    - Définir le sous-titre de la partie gauche du header avec une condition.
    - Ajout d'un sélecteur de classe dans le fichier style.css, pour afficher l'image en background.
    - Changer l'image de la partie gauche du header avec une condition ternaire, en fonction de la classe qui affiche l'image et si on est sur la page contact.

**Création du formulaire**
- Dans le fichier `contact_tpl.php` dans le dossier _inc_ créer un formulaire, correspondant à la maquette donnée.
- Tester la méthode POST et GET de la balise `<form>`.
- Afficher les données contenu dans la super globale **$_GET**, avec _var_dump()_ ou _print_r()_.

**Traiter l'information récupérée en PHP**
- Tester si le formulaire à bien était soumis en POST ou en GET avec un condition, et afficher le tableau correspondant.

<hr>

# Atelier oNews - chapitre 3
---

**Les FONCTIONS**_____________________________________________________________________________Video 3 - 01:18:30mns
> **Video 3 :**
> Video => https://drive.google.com/drive/folders/1eN5MCrL6n8Ea0QO07c-81IqwxjFPq9e4
> /media/sf_win_Linux_Partage/A_utiliser_dans_LInux/Lunar/Video_Cours/Saison-2-PHP_bases/S02E06-Fonctions

**Factorisation et Architecture**
- Dans le dossier `php/inc/` créer un fichier `data.php` qui contiendra nos données. J'entends par données les tableaux de chaque article.
- Dans le fichier `data.php` créer un tableau associatif _$list_articles_.
    - Ajoutez 6 clés (article_1, article_2, article_3 ...) au tableau _$list_articles_.
    - A chaque _clé_ de _$list_articles_ associez une valeur qui sera le tableau de chaque article, donc elle-même un tableau associatif.

**Fonction pour afficher un article**    
- Dans le dossier `php/inc/` créer un fichier **functions.php**.
- Dans ce fichier créer une fonction **`getArticle()`** qui prend un paramètre qui stockera la clé d'un article **`($article_id)`**.
    - on aura besoin inclure le fichier `data.php`, car il nous faut accèder au tableau dans la fonction.
    - on stockera dans une variable **`$article`** la valeur de la clé ciblée dans le tableau **`$list_articles[$article_id]`**.
    - on returnera ensuite le résultat pour y accèder de l'extèrieur de la fonction avec le mot-clé **`return`**.

- Dans le fichier **`article1.php`**.
    - on a besoin d'accèder à la fonction _getArticle_, il faut _inclure_ ou faire un _require_ de `functions.php`.
    - ensuite on va appeler la fonction en passant un argument dans l'appel de cette fonction. On va passer le nom de la clé correspondant à un article en particulier du tableau **`$list_articles`**. => **`getArticle('article_1')`**
    - on stockera la valeur de la clé demandée dans la variable **`$article`**.

**Tester la valeur reçue en paramètre de la fonction**
- Améliorer la fonction en utilisant une condition qui permet de savoir si la valeur reçue en paramètre, est ce que l'on attend bien.
    - SI oui afficher l'article appelé.
    - SINON afficher une **`erreur 404`** qui sera stockée à une clé dans le tableau des données.
- Créer dans le tableau **`$list_articles`** dans le fichier **data.php** un nouveau tableau à la clé **`'__404__'`** reprendre et changer les valeurs des clés du tableau pour en faire une page **`erreur 404`**.

<hr>

# Atelier oNews - chapitre 4
---

**Les TEMPLATES**_____________________________________________________________________________Video 3 - 01:20:35mns
> **Video 3 :**
> Video => https://drive.google.com/drive/folders/1uZL-v1UeecMgtRs_ifxLPxICZvKUVLhX
> /media/sf_win_Linux_Partage/A_utiliser_dans_LInux/Lunar/Video_Cours/Saison-2-PHP_bases/S02E07-oNews

**Organisation et Architecture**
- Créer dans le projet, dans le dossier `php` un dossier **`templates`**.
- Déplacer dedans, les fichiers du dossier `php/inc/` qui sont les modèles pour l'affichage (`article_tpl.php`,`contact_tpl.php`,`footer.php`,`header.php`,`nav.php`)
- **Attention :** vous aurez des erreurs, car on a déplacé les fichiers. En démarrant `index.php`, php ne trouve plus les fichiers `header.php` et `footer.php`. Changer le dossier `inc` pour **`templates`** dans les instructions de **_require_** qui permettent d'inclure les fichiers.
- relancez le fichier `index.php` pour s'assurer que la page apparaît correctement.

**Factorisation**
   - Du code se répéte dans le fichier `index.php`, notamment les artciles. Nous avons à disposition dans le fichier `data.php` les données, actuellements en dures dans les articles.
   - L'idée est de parcourir dans le fichier `index.php` avec une boucle _foreach_, le tableau _`$list_articles`_ dans le fichier `data.php`, pour avoir accès aux valeurs des clés correspondants aux articles.
   - Pensez à _require_ le fichier `data.php` dans `index.php` pour avoir accès aux clés, et donc à leurs valeurs.
   - Nous voulons afficher seulement les articles, hors dans notre tableau nou avons aussi la clé **`__404__`**, qui ne sera pas affichée dans la page des extraits d'articles. Nous devrons donc faire une condition pour afficher les articles sans la clé **`__404__`**, dans notre boucle qui doit parcourir le tableau _`$list_articles`_.
    ~
   - Créer un fichier **`article_extrait.php`** dans le dossier `php/templates`. Copier-coller dedans le premier article, de la balise ouvrante `<article>` à la balise fermante `</article>`, pour n'avoir qu'un seul article dans ce fichier.
   - Supprimer ensuite tous les `<articles></articles>` du fichier `index.php`.
     
**Conditionner l'affichage des articles et du tableau `__404__`**
   - Utiliser le mot-clé **`continue`** à la condition que SI l'article est strictement égale à la clé `'__404__'`, on passe à l'itération suivante.
   - A l'itération suivante on sort de la condition et on _include_ ou on _require_ le template `article_extrait.php`. 
   - Nous aurons donc une structure conditionnel qui utilise seulement un `if`.
   ~
   - A ce niveau si nous affichons notre page via `index.php` nous aurons bien 6 articles... Mais 6 articles identiques puisque les données sont en dures dans le code du fichier `article_extrait.php`. Pour afficher les 6 articles différents nous devons rendre dynamique les données.

**Rendre dynamique les données des extraits d'article**
   - dans le templates ou le modèle du fichier **`article_extrait.php`**, nous voulons rendre les données dynamique, c'est à dire qu'elle seront différentes en fonction du tableau ou sont stockées les données. 
   - grâce à notre boucle, nous accèdons aux clés _`$article_id`_ et valeurs dans _`$article_datas`_. 
        - Il faut donc remplacer la valeur `team` par `<?= $article_datas['category']; ?>`
        - faire la même chose pour la valeur `icon-dar.png`, `john Marchill`, `le 27 mars 2018`
   - Pour le lien _continue reading_ qui est en dur aussi, c'est un peu particulier.
        - Remplacer la valeur de l'attribut _href_ de la balise `<a>` par un lien `php` vers le fichier `article1.php` par exemple. Pour rappel _$article_id_ renvoi la valeur `article_1`. IL suffit de trouver un moyen de remplacer '_' et de concaténer '.php'... http://php.net/manual/fr/function.str-replace.php
        - Pensez dans le dossier `article1.php` et tous les autres articles à changer le chemin d'accès aux templates.
         
**Rendre dynamique l'extrait de texte**
**+ Version simple :**
   - Pour changer le texte de la balise `<p></p>` en texte dynamique, nous avons besoin du texte qui est à la clé `'text'` dans `$article_datas`.
   - Il nous faut aussi un extrait du texte. Pour cela nous utiliserons la fonction native de php `substr()` qui permet de retourner un segment de chaîne. http://php.net/manual/fr/function.substr.php
   - Enfin nous concaténerons le chaîne `'[ ... ]'` à la valeur retournée pour indiquer qu'il y a du texte après.
    
**+ Version avec une fonction :**
   - Dans le fichier **`functions.php`**, créer une fonction qui recevra en paramètre le texte entier de l'article, passé en argument de l'appel à la fonction.
   - Utiliser ensuite la fonction native de PHP `substr()` pour créer un tronçon du texte, et stockez la dans une variable.
   - Retourner avec `return` la valeur obtenue et concaténez la avec la chaîne de caractères `'[...]'`.
   ~
   **Appel d la fonction**
        - Dans le fichier **`article_extrait.php`** qui est notre template ou le modèle, nous avons besoin d'afficher un extrait du texte   
        - Nous allons appeler notre fonction en passant comme argument le texte, qui est la valeur à la clé _'text'_ du tableau `$article_datas`.

```
-------------
| ATTENTION |
-------------
    - Pensez bien à faire un "include" ou un "require" du fichier -functions.php- dans le fichier -index.php-, car nous en avons besoin pour traiter les articles.
    et sans cela nous aurions une erreur de type 'Fatal error'.
```  

**Une dernière chose**
----------------------
Afficher le code source du site. Au niveau de l'extrait d'article vous avez 2 balises `<p>`, c'est une de trop... C'est du au fait que dans la valeur de la clé `'text'` nous incluons la balise.
   - Dans la fonction `getExtraitTexteArticle()` dans le fichier **`functions.php`** nous allons utiliser une fonction native de PHP pour supprimer ce _tag_ ou cette balise. Cette fonction c'est http://php.net/manual/fr/function.strip-tags.php .
   - Avant de créer notre section de texte, utiliser la fonction `strip_tags()` avec comme paramètre le texte entier et stocker la valeur dans une variable. 

Voilà , normalement en affichant le code source de ma page je n'aurais plus cette balise `<p>` en plus.

   



