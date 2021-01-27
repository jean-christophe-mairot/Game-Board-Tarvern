PROJET : SITE DE PETITES ANNONCES

---

Objectif : créer un site de petites-annonces

- Afficher les annonces
- Gestion de l'ajout d'annonces
- Gestion de validation, modificatio, suppression par envoie de mail
- Mise en place des messages contextuel
- Affichage des 10 dernières annonce
- Interface simple fixe sur le côté gauche (rw, next, ajout, 10 dernière annonces)
- Card annonce avec extention detail (div display block)
- Gestion du file image et pdf

- +++ Background dynamique
- +++ Bouton de suppression (envoie un mail de suppression)
- +++ Gestion de la session user
- +++ Tâche cron qui supprime les annonces n+2 jours date de création
- +++ Tâche cron qui supprime les annonces qui sont publiées à n+15 jours de la date de création
- +++ Créer un infinite-scroll pour la pagination des annonces

---

VALIDATION

Les étapes :

- [x] Définir l'arborescence de vos dossiers
- [ ] Définir les routes nécessaire à votre projet
- [x] Mettre en place le .gitignore

- [x] Réaliser les wireframe de toutes vos pages et emails
- [x] Réaliser les vues nécessaires pour vos différentes pages
- [ ] Réaliser le MJML de vos mails
- [ ] Réaliser le code pour générer le PDF

- [x] Créer le MCD
- [x] Créer le MLD
- [x] Créer le modèle Physique de données

- [x] Installer Composer sous Windows
- [x] Avec Composer généré l'Autoload (PSR-4)
- [x] Mettre en place le Router et ajouter vos routes
- [ ] Créer les contrôleurs et méthodes nécessaire à vos routes

- [x] Installer vos dépendances PHP : AltoRouter, Twig, MJML, MJML-PHP, mPDF
- [x] Installer nodejs et npm
- [x] Installer vos dépendances front : sass / Less

- [x] creation (modèles) BDD CRUD
- [ ] Pour chaque méthodes définir les variables nécessaires à la vue

---

INTERFACE

    Solution 1 :

    * Bouton up
    * Bouton ajouter Annonce
    * Bouton revenir au debut de la page
    * Bouton down

    Solution 2 :

    * Bouton ajouter Annonce
    * Bouton en voir plus (infinite scroll)

CARDS

    * Photo
    * Titre nom de l'annonce
    * Titre description
    * Paragraphe (description) apparition de la div
    * Lien Download
    * bouton suppression (lien envoie de mail)
    * Le prix

CARDS NOUVELLE ANNONCE (formulaire)

    * Choix d'une Photo
    * Titre nom de l'annonce
    * Titre description
    * Paragraphe (description) apparition de la div
    * Faire une generation d'un pdf a partir du formulaire (MPDF)
    * mail du user
    * Bouton envoyer
    * Le prix

---

BDD: petites_annonces
Table : annonces

- Nom du produit
- Categorie (option)
- Description
- Prix
- Adresse mail
- Une image
- Un bouton suppression
- Un bouton affiche le detail (div qui ce deplie)
- timestamp (pour la duree de validité)

---

TECHNOLOGIES

- Utilisation de MPDF pour la gestion des gé nérations de pdf
- Utilisation de l'architecture MVC
- Utilisation de SASS ou/et Less (nodejs,Json )

---

LIENS UTILES :

- https://www.youtube.com/watch?v=3Iy1KRb-bcs&ab_channel=DavidYao
- https://github.com/daviidy/blog-mvc.git
- https://www.youtube.com/watch?v=54Km7DQjXLk&list=PLnklsuFp-quSzFDZ0F_dAKGlqOQGOdD2a&ab_channel=JonathanRichard
- https://online.visual-paradigm.com/fr/
- https://getbootstrap.com/
- https://codepen.io/
- https://github.com/paulkanyinda/tp-app-poo/blob/master/lib/OCFram/Validator.php

  (nouvelle techno)

- https://www.youtube.com/watch?v=D93K7ztR58s&list=PLBq3aRiVuwyx6B9sJip_ZU1lt7jjCwsMJ&index=7&ab_channel=NouvelleTechno
- https://github.com/NouvelleTechno/PHP-Oriente-Objet/

---

SOFT :

- PHOTOSHOP
- VCODE
- WORKBENCH

---

RECHERCHES:

infinite-scroll :

Selon le Baymard Institute, c’est la combinaison de ce bouton (load more) et du lazy loading qui serait la plus efficace en matière d’expérience utilisateur.

Si vous n’êtes pas familier du lazy loading, voici un éclairage. Il s’agit d’un mode de chargement du script de votre site web, qui permet de déterminer quels éléments sont à charger en priorité. Cela permet notamment d’afficher les images beaucoup plus rapidement, laissant le temps aux éléments plus lourds de se charger dans un second temps.

Le lazy loading est un point essentiel pour rendre votre site web encore plus performant aux yeux de Google et améliorer votre référencement naturel.

La bouton « Load more » ou en français « charger plus », est à la croisée de la pagination et de l’infinite scroll.

L’idée est de ne faire apparaître qu’un certains nombre d’articles pour un e-commerce ou de contenus dans le cadre d’un webzine ou d’un blog, puis de proposer d’en charger plus. Mais à l’inverse de la pagination, en cliquant sur ce bouton, vous restez sur la même page, qui vient s’étoffer de nouveaux éléments.

INSTALL :

AUTOLOADER

- https://www.youtube.com/watch?v=H5-J5mSXop4&ab_channel=TITOUANTHD
- https://jf-blog.fr/utilisation-composer-autoloading/?doing_wp_cron=1610718594.3177969455718994140625
- https://www.grafikart.fr/tutoriels/router-php-1149
  dans le termial :  
  php -S localhost:1800 -t public(nom de dossier qui sert de racine)

MJML

- mjml : pour la gestion du mail

MPDF

- composer require mpdf/mpdf --prefer-lowest (install mpdf version php8 -1)

LESS

- Less : (nodejs installé sur la machine) npm install -g less
  pour générer le less-->css : lessc (nom du fichier).less > (nom du fichier).css
- https://tutorialzine.com/2015/07/learn-less-in-10-minutes-or-less

TWIG

HOST

Passer le host qui pointe vers le dossier public
php -S localhost:80 -t /Public
