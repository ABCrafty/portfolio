## A propos de ce site

Il s'agit de mon projet d'étude pour la 3wAcademy, vous êtes libre de l'utiliser ou d'utiliser une partie du code
pour vos projets. Le site est un portfolio simple avec un listing de projets et leurs détails, ainsi qu'un blog. Les technologies utilisées ici sont le framework php Laravel, jQuery, Bootstrap 4, SASS, Webpack

Pour pouvoir utiliser ce projet une fois cloné, suivez les indications suivantes :

## Installer les dépendance php

composer update ou composer install

Cette commande va installer les dépendances php/laravel dont le site a besoin pour fonctionner, notamment pour
les rôles et permissions, l'upload d'images, le datatables et les formulaires laravel. Pour les publier et les
utiliser il faut ensuite rentrer la commande suivante :

php artisan vendor:publish


## Installer les dépendances JS

npm install

Cette commande va installer les dépendances js, en l'occurence bootstrap 4, datatables, animate.css. Ces dépendances
sont gérées depuis le webpack de laravel. A noter que j'ai également téléchargé en local dans le dossier public
les plugin ckeditoret owlCarousel2.

Avec ça l'ensemble des dépendances est installée. Il reste à générer les données stockées dans le seeder.


## Installer la base de données

!! ATTENTION !!
Il est vital d'avoir installé à la racine du projet un fichier .env qui est relié à votre base de données, un exemple de fichier .env est fourni dans le projet.

Une fois le fichier .env créé, il suffit de rentrer la commande suivante :

php artisan db:seed

Cette commande va générer le contenu de la base de données, des tables jusqu'au contenu dans certaines tables.

Tapez yes dans la ligne de commandes quand il demande si vous voulez migrer la bdd, il va ensuite générer les 
tables, le contenu de la page d'accueil et un utilisateur qui aura un role admin.
Ce sera le seul à pouvoir accéder à la zone administrative du site, si vous voulez
 utiliser vos identifiants et mots de passe, allez dans le dossier database/seeds 
 et dans le fichier DatabaseSeeder.php changez les identifiants qui sont dans la 
 variable $mainAdmin. Le mot de passe sera crypté automatiquement grâce à la fonction 
 créée dans le model User.php
 
 
## infos supplémentaires

Le site dispose enfin d'un système de login/register, n'importe quel utilisateur 
peut ainsi s'y inscrire et se connecter, il aura de base un role guest. 

A l'heure actuelle on ne peut pas changer le mot de passe à moins d'y toucher 
dans la base de données. N'hésitez pas à me faire des retours pour améliorer
le site, je débute encore sur laravel !
