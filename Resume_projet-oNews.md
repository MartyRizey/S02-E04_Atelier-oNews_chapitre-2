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