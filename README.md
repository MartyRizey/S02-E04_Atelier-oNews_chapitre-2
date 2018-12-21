n#### github : https://github.com/MartyRizey/S02-E04_Atelier-oNews_chapitre-2/tree/working_directory

# oNews - Multipage

O'Clock n'a pas encore sorti son journal d'étudiants :scream:

Bah oui, on n'affichait jamais le contenu complet de chaque article !!

Votre mission, si vous l'acceptez (... pfff évidemment qu'on l'accepte), sera de créer de nouvelles pages pour chaque article :muscle:

![homepage](article.png)

## Préambule

- l'intégration a déjà été effectuée
- une intégration de _correction_ est fournie avec cet atelier, mais vous pouvez utiliser votre intégration de oNews à la place si vous le souhaitez
- pour être interprété, le code PHP doit être écrit dans un fichier `.php`
- [fiche récap mélange PHP & HTML](https://github.com/O-clock-Alumni/fiches-recap/blob/master/php/syntaxe.md#un-peu-de-html-avec-%C3%A7a-)

## Étape 1 - Premier article

### Objectif

Rediriger l'internaute sur la page du premier article avec son texte complet

### Comment faire ?

- créer un fichier `html/article.html` qui contiendra le code pour cette nouvelle page Web
- mettre en place le lien de _Continue reading_ du premier article vers cette page HTML créée
- faire l'intégration HTML/CSS de cette page `html/article.html` selon le screenshot fourni plus haut
- un lien "Back to home" n'apparait pas sur le screenshot mais est présent après le texte de l'article. Il reprend le même style que le lien _Continue reading_

## Étape 2 - Factoriser

### Problème

Le code HTML est majoritairement dupliqué entre ces 2 fichiers HTML

### Objectif

Factoriser ce code HTML, c'est-à-dire éviter les répétitions

### Comment faire ?

- HTML = statique
- PHP = dynamique
- copier ces fichiers HTML dans le répertoire `php` puis renommer
- analyser le code HTML pour savoir quels contenus factoriser
- créer des fichiers PHP si besoin, dans le répertoire `inc`
- le texte sera un _lorem_ de 400 caractères (emmet : `lorem400`)

<details><summary>Spoiler</summary>

- il faut bien penser à renommer les fichiers en `.php`
- `include` ou `require` pour inclure des fichiers en PHP
- les fichiers inclus devront se trouver dans le répertoire `inc` (bonne pratique)

</details>

## Étape 3 - Données dynamiques

### Objectif

Rendre les données de la page "article" dynamiques

### Comment faire ?

- créer un tableau associatif contenant les données suivantes sur le premier article :
    - titre
    - auteur
    - texte
    - bonus :
        - catégorie
        - date de publication
        - l'image de l'auteur
- au sein du code HTML de la page, afficher les données du tableau pour remplacer ces mêmes données, actuellement écrites "en dur" (statique)

<details><summary>Spoiler</summary>

- [fiche récap tableau associatif](https://github.com/O-clock-Alumni/fiches-recap/blob/master/php/syntaxe.md#tableau-associatifs)
- [fiche récap mélange PHP & HTML](https://github.com/O-clock-Alumni/fiches-recap/blob/master/php/syntaxe.md#un-peu-de-html-avec-%C3%A7a-)
- on peut stocker en clé le nom de la donnée (comme le nom d'une variable)
- et en valeur, la valeur de cette donnée
- l'utilisation du tableau permet de regrouper toutes ces informations en une seule variable


<details><summary>Double Spoiler</summary>

**dans article.php**

```php
$data = [
    'title' => 'Lorem ipsum dolor sit amet',
    'author' => 'John Marchill',
    'text' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus sapiente possimus dolor molestias laboriosam et aliquam, blanditiis amet provident corrupti at doloremque quam distinctio. Fugiat quasi sed id! Earum corporis eum laboriosam possimus!',
]
```

**dans la template correspondante inc/tpl_article.php**

```php
<h2 class="right__title"><?php echo $data['title'] ?></h2>
```

</details>

</details>

## Étape 4 - Navigation

### Objectif

Rendre le menu de gauche dynamique

### Comment faire ?

- créer un tableau associatif contenant le nom et le lien de chaque élément du menu de gauche (plan du site, etc.)
- parcourir ce tableau afin de générer le code HTML de cette navigation

<details><summary>Spoiler</summary>

- [fiche récap tableau associatif](https://github.com/O-clock-Alumni/fiches-recap/blob/master/php/syntaxe.md#tableau-associatifs)
- on peut stocker l'ancre de chaque lien en clé
- et l'URL en valeur
- le moyen le plus simple pour parcourir un tableau est un `foreach` [fiche récap](https://github.com/O-clock-Alumni/fiches-recap/blob/master/php/boucles.md#foreach)

</details>

## Étape 5 - Toutes les pages _articles_

### Objectif

Créer une page pour chaque article

### Comment faire ?

- créer un fichier PHP par page supplémentaire (dans le dossier `php`)
- mettre en place les liens de _Continue reading_ des articles vers la page (fichier PHP) correspondante
- utiliser le template de la page article existant (étape 3) et ses données dynamiques
- :warning: à la fin d'un script PHP, toutes les données sont butées :gun:
    - les variables de la page précédente sont perdues
    - on ne peut pas transférer des données d'une page à l'autre
    - à chaque page PHP appelée (via navigateur), on recommence de 0 #poissonrouge

<details><summary>Spoiler</summary>

- créer les fichiers :
    - `php/article2.php`
    - `php/article3.php`
    - `php/article4.php`
    - `php/article5.php`
    - `php/article6.php`
- dans chaque fichier :
    - créer le tableau associatif contenant les données à afficher pour l'article en question
    - inclure le fichier de template des articles

</details>

## Bonus - page de contact

Les 5 étapes sont términées :astonished: bravo :+1:

On peut passer au bonus alors :
- créer une page de contact
- écrire un formulaire HTML

Tous les détails se trouve dans [le fichier du bonus](bonus.md) :wink: